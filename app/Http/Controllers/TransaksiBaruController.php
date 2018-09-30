<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Wisata;
use App\Model\TiketMapping;
use App\Model\DiskonMapping;
use App\Model\DiskonFor;
use App\Model\KategoriWisatawan;
use App\Model\Transaksi;
use App\Model\TransaksiDetail;
use App\Model\DiskonTransaksi;
use Exception;

class TransaksiBaruController extends Controller
{
    public function index()
    {
        $currentUser    = Auth::user();
        $tempat_wisata  = Wisata::whereId($currentUser->wisata_id)->get();
        $data_tiket     = TiketMapping::with('wisata')
                            ->with('wisatawan')
                            ->whereWisataId($currentUser->wisata_id)
                            ->get();
        $data_diskon    = DiskonMapping::with('wisata')
                            ->with('diskon')
                            ->whereWisataId($currentUser->wisata_id)
                            ->get();
        foreach($data_tiket as $item)
        {
            $total_diskon = 0;
            foreach($data_diskon as $item_diskon){
                $diskon     = DiskonFor::whereForType(1)
                                ->whereForId($item->id)
                                ->whereDiskonId($item_diskon['diskon']['id'])->first();
                if($diskon)
                {
                    $total_diskon += $item_diskon['diskon']['jumlah_persen'];
                }
            }
            $item['wisatawan']['diskon'] = $total_diskon;
        }
        $kategori_wisatawan = KategoriWisatawan::whereIsActive(1)->get();
        foreach($kategori_wisatawan as $item)
        {
            $total_diskon = 0;
            foreach($data_diskon as $item_diskon){
                $diskon     = DiskonFor::whereForType(2)
                                ->whereForId($item->id)
                                ->whereDiskonId($item_diskon['diskon']['id'])->first();
                if($diskon)
                {
                    $total_diskon += $item_diskon['diskon']['jumlah_persen'];
                }
            }
            $item['diskon'] = $total_diskon;
        }
        $data_out = [
            'user'                  =>  $currentUser,
            'wisata'                =>  $tempat_wisata,
            'tiket'                 =>  $data_tiket,
            'kategori_wisatawan'    => $kategori_wisatawan
        ];

        return $data_out;
    }

    public function store(Request $request)
    {
        try{
            $id_kategori = 0;
            foreach($request['kategori_wisatawan'] as $item)
            {
                if($item['active'] == true)
                {
                    $id_kategori = $item['id'];
                    break;
                }
            }
            $transaksi  = Transaksi::create([
                "user_id"               => $request['user']['id'],
                "wisata_id"             => $request['user']['wisata_id'],
                "kategori_wisatawan_id" => $id_kategori,
                "asal_provinsi"         => $request['provinsi'],
                "asal_kabupaten"        => $request['kabupaten'],
                "asal_kecamatan"        => $request['kecamatan'],
                "total_harga"           => $request['total'] + $request['total_diskon'],
                "total_diskon"          => $request['total_diskon'],
                "harga_akhir"           => $request['total'],
                "is_lunas"              => 1,
                "jumlah_bayar"          => $request['jumlah_bayar'],
                "email_wisatawan"       => $request['email']
            ]);
            $data_diskon    = DiskonMapping::with('wisata')
                                ->with('diskon')
                                ->whereWisataId($request['user']->wisata_id)
                                ->get();
            foreach($data_diskon as $diskon)
            {
                $diskonTransaksi    = DiskonTransaksi::create([
                    'diskon_id' => $diskon->diskon_id,
                    'transaksi_id' => $transaksi['id'],
                ]);
            }
            foreach($request['tiket'] as $detail)
            {
                TransaksiDetail::create([
                    "wisatawan_id" => $detail['wisatawan_id'],
                    "jumlah_wisatawan"=> $detail['jumlah'],
                    "harga_satuan"=> $detail['harga_tiket'],
                    "total_harga"=> $detail['total']
                ]);
                
                $mapping = TiketMapping::whereId($detail['id'])>first();
                $mapping->jumlah_tiket -= $detail['jumlah'];
                $mapping->save(); 
            }   

            return response('Success', 200);
        } catch (Exception $e)
        {
            return response($e, 401);
        }
        
    }


}