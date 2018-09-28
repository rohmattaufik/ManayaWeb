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
        // $transaksi  = Transaksi::create($request['transaksi']->all());
        // foreach($request->id_diskons as $diskon)
        // {
        //     $diskonTransaksi    = DiskonTransaksi::create([
        //         'diskon_id' => $diskon,
        //         'transaksi_id' => $transaksi['id'],
        //     ]);
        // }
        // foreach($request['transaksi_details'] as $detail)
        // {
        //     $detail['transaksi_id'] = $transaksi->id;
        //     TransaksiDetail::create($detail->all());
        // }

        dd($request);
    }


    // {
    //     "transaksi": {
    //         "user_id": 1,
    //         "wisata_id": 1,
    //         "kategori_wisatawan_id": 1,
    //         "asal_provinsi": "Jawa Tengah",
    //         "asal_kabupaten": "Wonogiri",
    //         "asal_kecamatan": "Wuryantoro",
    //         "total_harga": 2000000,
    //         "total_diskon": 500000,
    //         "harga_akhir": 1500000,
    //         "is_lunas": 1,
    //         "jumlah_bayar": 1600000,
    //         "email_wisatawan": "wisatawan@mail.com"
    //     },
    //     "id_diskons": [
    //         1, 2, 3, 4
    //     ],
    //     "transaksi_details": [{
    //             "wisatawan_id": 1,
    //             "jumlah_wisatawan": 2,
    //             "harga_satuan": 500000,
    //             "total_harga": 1000000
    //         },
    //         {
    //             "wisatawan_id": 2,
    //             "jumlah_wisatawan": 2,
    //             "harga_satuan": 500000,
    //             "total_harga": 1000000
    //         }
    //     ]
    // }
}