<?php

namespace App\Http\Controllers;

use App\Model\KategoriWisatawan;
use Illuminate\Http\Request;

class KategoriWisatawanController extends Controller
{

    # get all data Kategori Wisatawan
    public function index()
    {
        $kategoriWisatawans  = KategoriWisatawan::whereIsActive(1)->get();
        return view()->with('kategoriWisatawans', $kategoriWisatawans);
    }

    # store Kategori Wisatawan to database
    public function store(Request $request)
    {
        KategoriWisatawan::create($request->all());
    }

    # edit Ketegori Wisatawan
    public function edit( $id )
    {
        $kategoriWisatawan = KategoriWisatawan::whereId($id)->first();
        if($kategoriWisatawan == null)
        {
            return view();
        }
        return view()->with("kategoriWisatawan", $kategoriWisatawan);
    }

    # update Kategori Wisatawan to database
    public function update($id, Request $request)
    {
        KategoriWisatawan::whereId($id)->update($request->all());
        return redirect();
    }

    # delete Kategori Wisatawan
    public function delete( $id )
    {
        KategoriWisatawan::whereId($id)->update(['is_active' => 0]);
        return redirect()->back();
    }
}