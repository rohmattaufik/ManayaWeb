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
                                  ->select("transaksis.asal_provinsi",DB::raw('SUM(transaksi_details.jumlah_wisatawan) as totals' ))
                                  ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                  ->GroupBy('transaksis.asal_provinsi')->Orderby(DB::raw('SUM(transaksi_details.jumlah_wisatawan)'),'desc')->take(5)->get()->toArray();
      $tiketPerHari              =TransaksiDetail::with('Transaksis')
                                  ->select(DB::raw('(AVG(transaksi_details.jumlah_wisatawan) / count(distinct date(transaksi_details.created_at))) as totals' ))
                                  ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                  ->get()->toArray();
      $pendapatanSolo            = TransaksiDetail::with('Transaksis')
                                  ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                  ->whereKategori_wisatawan_id(1)->sum('transaksi_details.total_harga');
      $pendapatanGroup           = TransaksiDetail::with('Transaksis')
                                  ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                  ->whereKategori_wisatawan_id(2)->sum('transaksi_details.total_harga');


      $Laporan =array(
              'topProvinsi'           =>$topProvinsi,
              'tiketPerHari'          =>$tiketPerHari,
              'omset'                 =>$pendapatanSolo + $pendapatanGroup,

      );
    //   dd($Laporan);

      if($Laporan == null)
      {
          return view();
      }
          return view('admin.laporan')->with("Laporan", $Laporan);
  }

}
