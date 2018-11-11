<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\UserAdmin;

use DB;
use App\Quotation;

class SuperAdminController extends Controller
{

    public function index()
    {
      $TiketTerjual              = DB::SELECT('SELECT SUM(X.jumlah_wisatawan) AS TiketTerjual
                                               FROM transaksi_details X;');
      $TopArea                   = DB::SELECT('SELECT X.nama_provinsi, COUNT(Z.wisata_id) as Totals
                                               FROM provinsis X, wisatas Y, transaksis Z
                                               WHERE X.id = Y.provinsi_id AND Z.wisata_id = Y.id
                                               GROUP BY X.nama_provinsi
                                               ORDER BY Totals DESC
                                               LIMIT 5;');
      $TopWisata                 = DB::SELECT('SELECT X.nama, COUNT(Y.wisata_id) as totalPesanan
                                               FROM wisatas X, transaksis Y
                                               WHERE X.id = Y.wisata_id
                                               GROUP BY X.nama
                                               ORDER BY totalPesanan DESC
                                               LIMIT 5;');
      $TopTraveler               = DB::SELECT('SELECT Y.email_wisatawan, COUNT(Y.wisata_id) as totalPesanan
                                               FROM  transaksis Y
                                               WHERE  Y.wisata_id
                                               GROUP BY Y.email_wisatawan
                                               ORDER BY totalPesanan DESC
                                               LIMIT 5;');
      $ReportUser                = DB::SELECT('SELECT X.asal_provinsi, COUNT(X.asal_provinsi) as TotalWisatawan
                                               FROM transaksis X
                                               GROUP BY X.asal_provinsi
                                               ORDER BY TotalWisatawan DESC
                                               LIMIT 5;');
    $totalUser = User::all()->count();

      $data =array(
                  'tiketTerjual'  =>$TiketTerjual,
                  'topArea'       =>$TopArea,
                  'TopWisata'     =>$TopWisata,
                  'TopTraveler'  =>$TopTraveler,
                  'reportUser'  =>$ReportUser,
                  'totalUser'   => $totalUser
              );

        // dd($data);
        if($data == null)
        {
            return view();
        }

        return view('admin.super-dashboard')->with("data", $data);
    }
}
