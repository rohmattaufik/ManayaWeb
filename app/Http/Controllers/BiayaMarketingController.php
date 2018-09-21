<?php

namespace App\Model\Controllers;

use App\Model\BiayaMarketing;

class BiayaMarketingController extends Controller
{

    # get all data Biaya Marketing
    public function index()
    {
        $biayaMarketings = BiayaMarketing::all();
        return view()->with('biayaMarketings', $biayaMarketings);
    }

    # store data Biaya Maketing to database
    public function store(Request $request)
    {
        BiayaMarketing::create($request->all());
        return view();
    }

    # edit biaya marketing
    public function edit( $id )
    {
        $biayaMarketing = BiayaMarketing::find($id);
        if( $biayaMarketing == null)
        {
            return view();
        }
        return view()->with('biayaMarketing', $biayaMarketing);
    }

    # update Biaya Marketing to database
    public function update($id , Request $request)
    {
        BiayaMarketing::whereId($id)->update($request->all());
        return redirect();
    }

    # delete Biaya Marketing
    public function delete( $id )
    {
        BiayaMarketing::where($id)->delete();
        return redirect()->back();
    }
}