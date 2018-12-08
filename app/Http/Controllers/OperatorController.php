<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Illuminate\Support\Facades\Session;
use Tymon\JWTAuth\Exceptions\JWTException;


use DB;
use App\Quotation;

class OperatorController extends Controller
{

    public function index()
    # get all Operator data
    {
        $users    = DB::SELECT('SELECT Y.id, Y.nama, Y.role, Y.wisata_id, Y.email, Z.nama as nama_wisata, Y.username FROM users Y, wisatas Z WHERE Y.wisata_id = Z.id;');
        return view('admin.operator.index')->with("users",$users);
    }

    # create Operator data
    public function create()
    {
        $wisatas    = DB::SELECT('SELECT Y.id, Y.nama FROM wisatas Y;');
        return view('admin.operator.form')->with("wisatas", $wisatas);
    }

    # store Operator data to database
    public function store(Request $request)
    {
    //   $validator = Validator::make($request->all(), [
    //   'nama' => 'required|string|max:255',
    //   'email' => 'required|string|email|max:255|unique:users',
    //   'password' => 'required|string|min:6',
    //   ]);

    //   if($validator->fails()){
    //           return view('admin.operator.error');
    //   }

      $user = User::create([
          'nama'     => $request->get('nama'),
          'email'    => $request->get('email'),
          'username' => $request->get('username'),
          'role'     => $request->get('role'),
          'wisata_id'=> $request->get('wisata_id'),
          'password' => Hash::make($request->get('password')),
      ]);

    //   $token = JWTAuth::fromUser($user);

      return redirect()->route('operator');
    }

    # edit Operator data
    public function edit($id)
    {
        $operator   = User::whereId($id)->firstOrFail();
        $wisatas    = DB::SELECT('SELECT Y.id, Y.nama FROM wisatas Y;');
        return view('admin.operator.edit')->with('operator',$operator)->with('wisatas',$wisatas);
        // $buzzer     = LokasiBuzzer::find($id);
        // $buzzers    = DB::SELECT('SELECT Y.phone, Y.id, Y.nama_buzzer FROM buzzers Y;');
        // $wisatas    = DB::SELECT('SELECT Y.id, Y.nama FROM wisatas Y;');
        // if($buzzer == null)
        // {
        //     return redirect()->back();
        // }
        // return view('admin.buzzer.edit_mapping')->with("databuzzer",$buzzer)->with("buzzers",$buzzers)->with("wisatas", $wisatas);
    }

    # update Operator data to database
    public function update($id, Request $request)
    {
        if ($request->get('password') != null)
        {   
            $user = User::whereId($id)->update([
                'nama'     => $request->get('nama'),
                'email'    => $request->get('email'),
                'username' => $request->get('username'),
                'role'     => $request->get('role'),
                'wisata_id'=> $request->get('wisata_id'),
                'password' => Hash::make($request->get('password')),
            ]);
        } else 
        {
            $user = User::whereId($id)->update([
                'nama'     => $request->get('nama'),
                'email'    => $request->get('email'),
                'username' => $request->get('username'),
                'role'     => $request->get('role'),
                'wisata_id'=> $request->get('wisata_id'),
            ]);
        }
        return redirect()->route('operator');
  
        // $buzzer = LokasiBuzzer::whereId($id)->update($request->except(['_token']));
        // return redirect()->action('LokasiBuzzerController@index');
    }

    # delete Operator data
    public function delete(Request $request)
    {
        $User = User::whereId($request->id);
        if($User == null)
        {
            return redirect()->back();
        }
        $User->delete();
        return redirect()->back();
    }
}
