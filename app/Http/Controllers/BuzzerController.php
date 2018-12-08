<?php

namespace App\Http\Controllers;

use App\Model\Buzzer;
use Illuminate\Http\Request;

use DB;
use App\Quotation;

class BuzzerController extends Controller
{

    # get all buzzer data
    public function index()
    {
        $buzzers    = DB::SELECT('SELECT Y.phone, Y.id, Y.nama_buzzer FROM buzzers Y;');
        dd($buzzers);
        return view('admin.buzzer.index')->with("buzzers",$buzzers);
    }

    # create buzzer data
    public function create()
    {
        // $buzzers    = DB::SELECT('SELECT Y.phone, Y.id, Y.nama_buzzer FROM buzzers Y;');
        // return view('admin.buzzer.crudbuzzer')->with("buzzers",$buzzers);
        return view('admin.buzzer.form');
    }

    # store buzzer data to database
    public function store(Request $request)
    {
        $buzzer = Buzzer::create($request->all());
        return redirect()->route('buzzer-mapping-create');
    }

    # edit buzzer data
    public function edit($id)
    {
        $buzzer = Buzzer::find($id);
        if($buzzer == null)
        {
            return redirect()->back();
        }
        return view('admin.buzzer.form')->with("buzzer",$buzzer);
    }

    # update buzzer data to database
    public function update($id, Request $request)
    {
        $buzzer = Buzzer::whereId($id)->update($request->except(['_token']));
        return redirect()->action('BuzzerController@create');
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
