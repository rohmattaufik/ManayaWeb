<?php

namespace App\Http\Controllers;

use App\Model\UserAdmin;
use App\Model\Transaksi;
use App\Model\TransaksiDetail;
use App\Model\Wisatawan;
use App\Model\KategoriWisatawan;
use Illuminate\Http\Request;

use DB;
use App\Quotation;

class LaporanController extends Controller
{
  public function index()
  {
      $topProvinsi               = TransaksiDetail::with('Transaksis')
                                  ->select("Transaksis.asal_provinsi",DB::raw('SUM(Transaksi_Details.jumlah_wisatawan) as totals' ))
                                  ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                  ->whereUser_id('1')->GroupBy('Transaksis.asal_provinsi')->Orderby(DB::raw('SUM(Transaksi_Details.jumlah_wisatawan)'),'desc')->take(5)->get()->toArray();
      $tiketPerHari              =TransaksiDetail::with('Transaksis')
                                  ->select(DB::raw('(AVG(Transaksi_Details.jumlah_wisatawan) / count(distinct date(Transaksi_Details.created_at))) as totals' ))
                                  ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                  ->whereUser_id('1')->get()->toArray();
      $pendapatanSolo            = TransaksiDetail::with('Transaksis')
                                  ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                  ->whereUser_id('1')->whereKategori_wisatawan_id(1)->sum('transaksi_Details.total_harga');
      $pendapatanGroup           = TransaksiDetail::with('Transaksis')
                                  ->join('Transaksis', 'Transaksis.id', '=' ,'Transaksi_Details.transaksi_id')
                                  ->whereUser_id('1')->whereKategori_wisatawan_id(2)->sum('transaksi_Details.total_harga');


      $Laporan =array(
              'topProvinsi'           =>$topProvinsi,
              'tiketPerHari'          =>$tiketPerHari,
              'omset'                 =>$pendapatanSolo + $pendapatanGroup,

      );
      dd($Laporan);

      if($Laporan == null)
      {
          return view();
      }
          return view('test')->with("Laporan", $Laporan);
  }

}
