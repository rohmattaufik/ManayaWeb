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

        $operator = User::with('wisata')->whereRole(1)->get();

        $diskon = Diskon::with('diskonFors')->with('diskonMappings')->whereFlagActive(1)->get();

        dd($diskon);
    }

}