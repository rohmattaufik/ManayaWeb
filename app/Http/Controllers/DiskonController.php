<?php

namespace App\Http\Controllers;

use App\Model\Diskon;
use App\Model\DiskonFor;
use Illuminate\Http\Request;

class DiskonController extends Controller
{

    # get all diskon
    public function index()
    {
        $diskons    = Diskon::with('diskonFors');
        return view("");
    }

    # store diskon to database
    public function store(Request $request)
    {
        Diskon::create($request->all());
        return redirect("");
    }

    # edit diskon
    public function edit( $id )
    {
        $diskon     = Diskon::find($id);
        if($diskon == null)
        {
            return view("error");
        }
        return view("")->with("diskon", $diskon);
    }

    # update diskon to database
    public function update($id, Request $request)
    {
        Diskon::whereId($id)->update($request->all());
        return redirect();
    }

    # activate diskon
    public function activate($id)
    {
        Diskon::whereId($id)->update(['flag_active' => 1]);
        return redirect()->back();
    }
    
    # deactivate diskon
    public function deactive($id)
    {
        Diskon::whereId($id)->update(['flag_active' => 0]);
        return redirect()->back();
    }

    # store diskon for
    public function storeDiskonFor(Request $request)
    {
        for($ii=0; $ii < count($request) ; $ii++)
        {
            DiskonFor::create([
                "diskon_id"     => $request->diskon_id[$ii],
                "for_type"      => $request->for_type[$ii],
                "for_id"        => $request->for_id[$ii]
            ]);
        }
        return redirect();
    }

    # update diskon for
    public function updateDiskonFor(Request $request)
    {
        DiskonFor::where('diskon_id', $request->diskon_id[0])->delete();
        $this->storeDiskonFor($request);
        return redirect();
    }

}
