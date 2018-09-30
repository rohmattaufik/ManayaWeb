<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\UserAdmin;

class SuperAdminController extends Controller
{

    public function index()
    {
        $totalWisatawanLaki        = TransaksiDetail::with('Transaksis')
                                    ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                    ->whereUser_id('1')->whereWisatawan_id(1)->sum('jumlah_wisatawan');
        $totalWisatawanPerempuan   = TransaksiDetail::with('Transaksis')
                                    ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                    ->whereUser_id('1')->whereWisatawan_id(2)->sum('jumlah_wisatawan');
        $totalWisManLaki           = TransaksiDetail::with('Transaksis')
                                    ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                    ->whereUser_id('1')->whereWisatawan_id(3)->sum('jumlah_wisatawan');
        $totalWisManPerempuan      = TransaksiDetail::with('Transaksis')
                                    ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                    ->whereUser_id('1')->whereWisatawan_id(4)->sum('jumlah_wisatawan');
        $pendapatanSolo            = TransaksiDetail::with('Transaksis')
                                    ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                    ->whereUser_id('1')->whereKategori_wisatawan_id(1)->sum('transaksi_details.total_harga');
        $pendapatanGroup           = TransaksiDetail::with('Transaksis')
                                    ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                    ->whereUser_id('1')->whereKategori_wisatawan_id(2)->sum('transaksi_details.total_harga');
        $total_marketing           = BiayaMArketing::sum('jumlah_dana');

        $totalWisatawan =array(
                'totalWisnusLaki'           =>$totalWisatawanLaki,
                'totalWisnusPerempuan'      =>$totalWisatawanPerempuan,
                'totalWismanLaki'           =>$totalWisManLaki,
                'totalWismanPerempuan'      =>$totalWisManPerempuan,
                'totalTiketTerjual'         =>$totalWisatawanLaki + $totalWisatawanPerempuan + $totalWisManLaki + $totalWisManPerempuan,
                'totalPendapatanSolo'       =>$pendapatanSolo,
                'totalPendapatanGroup'      =>$pendapatanGroup,
                'totalUang'                 =>$pendapatanSolo + $pendapatanGroup,
                'totalBiayaMarketing'       => $total_marketing

        );
        $grafikPerHari = DB::select('SELECT  X.x as HH,
                                    COUNT(Z.total_harga) as total
                                    FROM calender X
                                    LEFT JOIN(SELECT * FROM transaksis Y WHERE DATE(Y.created_at) = CURDATE() AND Y.is_lunas = 1 AND user_id ='.Auth::user()->id.') as Z ON HOUR(Z.created_at)-2 <= X.x
                                    WHERE X.id <13
                                    GROUP BY HH;');
        $grafikPerMinggu = DB::select('SELECT 
                                X.x as HH,
                                COUNT(Z.total_harga) as total
                                FROM calender X
                                LEFT JOIN(SELECT DAYOFWEEK(created_at) as Days, total_harga FROM transaksis Y WHERE Date(Y.created_at) = (CURDATE()) AND Y.is_lunas = 1 AND user_id ='.Auth::user()->id.') as Z ON Z.Days <= X.x
                                WHERE X.id<20 AND X.id >12
                                GROUP BY HH;');
        $grafikPerBulan = DB::select('SELECT 
                            X.x as HH,
                            COUNT(Z.total_harga) as total
                            FROM calender X
                            LEFT JOIN(SELECT * FROM transaksis Y WHERE MONTH(Y.created_at) = MONTH(CURDATE()) AND Y.is_lunas = 1 AND user_id ='.Auth::user()->id.') as Z ON DAY(Z.created_at) <= X.x
                            WHERE X.id>19
                            GROUP BY HH;');
        $data_grafik =array(
            'grafikPerHari'             =>$grafikPerHari,
            'grafikPerBulan'            =>$grafikPerBulan,
            'grafikPerMinggu'           =>$grafikPerMinggu,
        );
        //dd($data_grafik);
        $data_out = [
            "data_wisatawan"    => $totalWisatawan,
            "data_grafik"       => $data_grafik
        ];
    

        if($totalWisatawan == null)
        {
            return view();
        }
        
        return view('admin.dashboard')->with("data_out", $data_out);
    }
}