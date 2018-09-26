<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Wisata;
use App\Model\TiketMapping;
use App\Model\DiskonMapping;
use App\Model\DiskonFor;
use App\Model\KategoriWisatawan;

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
}