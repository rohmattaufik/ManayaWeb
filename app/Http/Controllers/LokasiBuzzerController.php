<?php

namespace App\Http\Controllers;

use App\Model\Buzzer;
use App\Model\LokasiBuzzer;
use Illuminate\Http\Request;

use DB;
use App\Quotation;

class LokasiBuzzerController extends Controller
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
        $buzzers    = DB::SELECT('SELECT Y.phone, Y.id, Y.nama_buzzer FROM buzzers Y;');
        $wisatas    = DB::SELECT('SELECT Y.id, Y.nama FROM wisatas Y;');
        return view('admin.buzzer.form_mapping')->with("buzzers",$buzzers)->with("wisatas", $wisatas);
    }

    # store buzzer data to database
    public function store(Request $request)
    {
        $buzzer = LokasiBuzzer::create($request->all());
        return redirect()->action('LokasiBuzzerController@create');
    }

    # edit buzzer data
    public function edit($id)
    {
        $buzzer = LokasiBuzzer::find($id);
        $buzzers    = DB::SELECT('SELECT Y.phone, Y.id, Y.nama_buzzer FROM buzzers Y;');
        $wisatas    = DB::SELECT('SELECT Y.id, Y.nama FROM wisatas Y;');
        if($buzzer == null)
        {
            return redirect()->back();
        }
        return view('admin.buzzer.edit_mapping')->with("databuzzer",$buzzer)->with("buzzers",$buzzers)->with("wisatas", $wisatas);
    }

    # update buzzer data to database
    public function update($id, Request $request)
    {
        $buzzer = LokasiBuzzer::whereId($id)->update($request->except(['_token']));
        return redirect()->action('LokasiBuzzerController@index');
    }

    # delete buzzer data
    public function delete(Request $request)
    {
        $buzzer = LokasiBuzzer::whereId($request->id);
        if($buzzer == null)
        {
            return redirect()->back();
        }
        $buzzer->delete();
        return redirect()->back();
    }
}
