<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\UserAdmin;
use App\Model\TiketMapping;
use App\Model\Wisatawan;
use App\Model\Wisata;
use App\Model\Diskon;
use App\Model\DiskonMapping;
use App\Model\DiskonFor;

class PengaturanTiketController extends Controller
{

    public function index()
    {
        $data_wisata = Wisata::all();
        foreach($data_wisata as $wisata)
        {
            $wisata['ticket_mapping'] = TiketMapping::with('wisatawan')->whereWisataId($wisata->id)->get();
        }
        $tiket_mappings = TiketMapping::with('wisata')->with('wisatawan')->limit(5)->orderBy('id','desc')->get();   
        $operators      = User::with('wisata')->limit(5)->orderBy('id','desc')->get();

        $diskons = Diskon::with('diskonFors')->with('diskonMappings')->limit(5)->orderBy('id','desc')->get();

        $data = [
            'operators'         => $operators,
            'tiket_mappings'    => $tiket_mappings,
            'diskons'           => $diskons            
        ];

        return view('admin.pengaturan-tiket')->with('data', $data);
    }

}