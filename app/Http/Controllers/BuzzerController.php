<?php

namespace App\Http\Controllers;

use App\Model\Buzzer;
use Illuminate\Http\Request;

class BuzzerController extends Controller
{

    # get all buzzer data
    public function index()
    {
        $buzzers    = Buzzer::all();
        return $buzzers;
    }

    # create buzzer data
    public function create()
    {
        return view("");
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