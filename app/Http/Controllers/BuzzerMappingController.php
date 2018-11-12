<?php

namespace App\Http\Controllers;

use App\Model\Buzzer;
use Illuminate\Http\Request;

use DB;
use App\Quotation;

class BuzzerMappingController extends Controller
{

    # get all buzzer data
    public function index()
    {
        $buzzers    = DB::SELECT('SELECT X.id, Y.phone, Y.nama_buzzer, Z.nama, X.waktu_mulai, X.waktu_selesai, X.poin FROM lokasi_buzzers X, buzzers Y, wisatas Z WHERE X.buzzer_id = Y.id AND X.wisata_id = Z.id;');
        return view('admin.buzzer.index')->with("buzzers",$buzzers);
    }

    # create buzzer data
    public function create()
    {
        $buzzers    = DB::SELECT('SELECT X.id, Y.phone, Y.nama_buzzer, Z.nama, X.waktu_mulai, X.waktu_selesai, X.poin FROM lokasi_buzzers X, buzzers Y, wisatas Z WHERE X.buzzer_id = Y.id AND X.wisata_id = Z.id;');
        return view('admin.buzzer.crudbuzzer')->with("buzzers",$buzzers);
    }

    # store buzzer data to database
    public function store(Request $request)
    {
        $buzzer = Buzzer::create($request->all());
        return redirect()->back();
    }

    # edit buzzer data
    public function edit()
    {
        $buzzer = Buzzer::find($id);
        if($buzzer == null)
        {
            return redirect()->back();
        }
        return view("");
    }

    # update buzzer data to database
    public function update($id, Request $request)
    {
        $buzzer = Buzzer::whereId($id)->update($request->all());
        return redirect()->back();
    }

    # delete buzzer data
    public function delete(Request $request)
    {
        $buzzer = Buzzer::whereId($request->id);
        if($buzzer == null)
        {
            return redirect()->back();
        }
        $buzzer->delete();
        return redirect()->back();
    }
}
