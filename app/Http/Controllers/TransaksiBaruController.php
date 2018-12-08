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
use App\Model\Negara;
use App\Model\Provinsi;
use App\Model\Kabupaten;
use DB;
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
        $negara = Negara::with('provinsis')->get();
        foreach($negara as $item)
        {
            foreach($item['provinsis'] as $provinsi)
            {
                $provinsi['kabupaten']  = Kabupaten::whereProvinsiId($provinsi['id'])->get();
            }
        }
        
        $data_out = [
            'user'                  =>  $currentUser,
            'wisata'                =>  $tempat_wisata,
            'tiket'                 =>  $data_tiket,
            'kategori_wisatawan'    => $kategori_wisatawan,
            'wilayah'               => $negara
        ];

        return $data_out;
    }

    public function store(Request $request)
    {
       // $data = (array) $request;
        // DB::transaction(function () {
            
            // return $request;
            // $request = json_encode($request,false);
            // return $request[0]['user'];
            // return json_decode($request->user, false);
            // return json_encode($request, 2);
            // return response()->json(['data'=>$request]);
            // return collect($request);
            
            foreach(collect($request) as $request_item)
            {
                // return $request_item['user'];
                // return json_encode($request_item);
                // return response()->json(['data' => $request_item]);  
                $id_kategori = 0;
                
                foreach($request_item['kategori_wisatawan'] as $item)
                {
                    if($item['active'] == true)
                    {
                        $id_kategori = $item['id'];
                        break;
                    }
                }
                $transaksi  = Transaksi::create([
                    "user_id"               => $request_item['user']['id'],
                    "wisata_id"             => $request_item['user']['wisata_id'],
                    "kategori_wisatawan_id" => $id_kategori,
                    "asal_provinsi"         => $request_item['provinsi'],
                    "asal_kabupaten"        => $request_item['kabupaten'],
                    "asal_negara"           => $request_item['negara'],
                    "total_harga"           => $request_item['total'] + $request_item['total_diskon'],
                    "total_diskon"          => $request_item['total_diskon'],
                    "harga_akhir"           => $request_item['total'],
                    "is_lunas"              => 1,
                    "jumlah_bayar"          => $request_item['jumlah_bayar'],
                    "email_wisatawan"       => $request_item['email']
                ]);
                $data_diskon    = DiskonMapping::with('wisata')
                                    ->with('diskon')
                                    ->whereWisataId($request_item['user']['wisata_id'])
                                    ->get();
                foreach($data_diskon as $diskon)
                {
                    $diskonTransaksi    = DiskonTransaksi::create([
                        'diskon_id' => $diskon['diskon_id'],
                        'transaksi_id' => $transaksi['id'],
                    ]);
                }
                foreach($request_item['tiket'] as $detail)
                {
                    TransaksiDetail::create([
                        "wisatawan_id" => $detail['wisatawan_id'],
                        "jumlah_wisatawan"=> $detail['jumlah'],
                        "harga_satuan"=> $detail['harga_tiket'],
                        "total_harga"=> $detail['total']
                    ]);
                    
                    $mapping = TiketMapping::whereId($detail['id'])->first();
                    $mapping->jumlah_tiket -= $detail['jumlah'];
                    $mapping->save(); 
                }   

                return response('Success', 200);
            }
        // });       
    }


}