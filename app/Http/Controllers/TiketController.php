<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\TiketMapping;
use App\Model\Wisatawan;
use App\Model\Wisata;

class TiketController extends Controller
{

    public function index()
    {
        # get records
        $tiket_mappings = TiketMapping::with('wisata')->with('wisatawan')->get();   
        return view('admin.tiket.index')->with('tiket_mappings', $tiket_mappings);
    }

    public function create()
    {
        $wisatas = Wisata::all();
        $wisatawans = Wisatawan::all();
        return view('admin.tiket.form')->with('wisatas', $wisatas)->with('wisatawans', $wisatawans);
    }

    public function submit(Request $request)
    {
        TiketMapping::create($request->all());
        return redirect()->route('tiket');
    }

    public function edit($id)
    {
        $tiket_mapping  = TiketMapping::with('wisata')->with('wisatawan')->whereId($id)->firstOrFail();   
        $wisatas        = Wisata::all();
        $wisatawans     = Wisatawan::all();
        return view('admin.tiket.edit')->with('tiket_mapping', $tiket_mapping)->with('wisatas', $wisatas)->with('wisatawans', $wisatawans);
    }

    public function update($id, Request $request)
    {
        TiketMapping::whereId($id)->update($request->all());
        return redirect()->route('tiket');
    }

    public function delete(Request $request)
    {
        $tiket_mapping = TiketMapping::whereId($request->id)->firstOrFail();
        $tiket_mapping->delete();
        return redirect()->back();
    }

}