<?php

namespace App\Http\Controllers;

use App\Model\UserAdmin;
use App\Model\Transaksi;
use App\Model\TransaksiDetail;
use App\Model\Wisatawan;
use App\Model\KategoriWisatawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    # provide data to admin dashboard
    public function index()
    {
        $totalWisatawanLaki        = TransaksiDetail::with('Transaksis')
                                    ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                    ->whereUser_id('1')->whereWisatawan_id(1)->sum('jumlah_wisatawan');
        $totalWisatawanPerempuan   = TransaksiDetail::with('Transaksis')
                                    ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                    ->whereUser_id('1')->whereWisatawan_id(2)->sum('jumlah_wisatawan');
        $totalWisManLaki           = TransaksiDetail::with('Transaksis')
                                    ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                    ->whereUser_id('1')->whereWisatawan_id(3)->sum('jumlah_wisatawan');
        $totalWisManPerempuan      = TransaksiDetail::with('Transaksis')
                                    ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                    ->whereUser_id('1')->whereWisatawan_id(4)->sum('jumlah_wisatawan');
        $pendapatanSolo            = TransaksiDetail::with('Transaksis')
                                    ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                    ->whereUser_id('1')->whereKategori_wisatawan_id(1)->sum('transaksi_Details.total_harga');
        $pendapatanGroup           = TransaksiDetail::with('Transaksis')
                                    ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                    ->whereUser_id('1')->whereKategori_wisatawan_id(2)->sum('transaksi_Details.total_harga');

        $totalWisatawan =array(
                'totalWisnusLaki'           =>$totalWisatawanLaki,
                'totalWisnusPerempuan'      =>$totalWisatawanPerempuan,
                'totalWismanLaki'           =>$totalWisManLaki,
                'totalWismanPerempuan'      =>$totalWisManPerempuan,
                'totalTiketTerjual'         =>$totalWisatawanLaki + $totalWisatawanPerempuan + $totalWisManLaki + $totalWisManPerempuan,
                'totalPendapatanSolo'       =>$pendapatanSolo,
                'totalPendapatanGroup'      =>$pendapatanGroup,
                'totalUang'                 =>$pendapatanSolo + $pendapatanGroup,

        );
        dd($totalWisatawan);

        if($totalWisatawan == null)
        {
            return view();
        }
            return view('test')->with("totalWistawan", $totalWistawan);
    }


}
