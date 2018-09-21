<?php

namespace App\Http\Controllers;

use App\Model\Wisatawan;
use Illuminate\Http\Request;

class WisatawanController extends Controller
{

    # get all wisatawan data
    public function index()
    {
        $wisatawan = Wisatawan::all();
        return $wisatawan;
    }

    # store wisatawan data to database
    public function store(Request $request)
    {
        $wisatawan = Wisatawan::create($request->all());
    }

    # update wisatawan data to database
    public function update($id, Request $request)
    {
        $wisatawan = Wisatawan::whereId($id)->update($request->all());
    }
}