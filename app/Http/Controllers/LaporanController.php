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
      $topProvinsi              = DB::SELECT('SELECT X.nama_provinsi, COUNT(Z.wisata_id) as Totals
                                               FROM provinsis X, wisatas Y, transaksis Z
                                               WHERE X.id = Y.provinsi_id AND Z.wisata_id = Y.id
                                               GROUP BY X.nama_provinsi
                                               ORDER BY Totals DESC
                                               LIMIT 5;');
      $tiketPerHari             = TransaksiDetail::with('Transaksis')
                                  ->select(DB::raw('(AVG(transaksi_details.jumlah_wisatawan) / count(distinct date(transaksi_details.created_at))) as totals' ))
                                  ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                  ->get()->toArray();
      $diskonPerHari             = DB::SELECT('SELECT AVG(X.total_harga- X.harga_akhir)/ (DATEDIFF(CURDATE(), "2018-09-27 23:56:00")) AS diskon
                                              FROM transaksis X
                                              WHERE X.is_lunas = 1;');
      $pendapatanSolo            = TransaksiDetail::with('Transaksis')
                                   ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                   ->whereKategori_wisatawan_id(1)->sum('transaksi_details.total_harga');
      $pendapatanGroup           = TransaksiDetail::with('Transaksis')
                                   ->join('transaksis', 'transaksis.id', '=' ,'transaksi_details.transaksi_id')
                                   ->whereKategori_wisatawan_id(2)->sum('transaksi_details.total_harga');
      $TiketTerjual              = DB::SELECT('SELECT SUM(X.jumlah_wisatawan) AS TiketTerjual
                                               FROM transaksi_details X;');
      $grafikPerHari             = DB::select('SELECT  X.x as HH,
                                               COUNT(Z.total_harga) as total
                                               FROM calender X
                                               LEFT JOIN(SELECT * FROM transaksis Y WHERE DATE(Y.created_at) = CURDATE() AND Y.is_lunas = 1) as Z ON HOUR(Z.created_at)-2 <= X.x
                                               WHERE X.id <13
                                               GROUP BY HH;');


      $Laporan =array(
              'topProvinsi'           =>$topProvinsi,
              'tiketPerHari'          =>$tiketPerHari,
              'diskonPerHari'         =>$diskonPerHari,
              'omset'                 =>$pendapatanSolo + $pendapatanGroup,
              'tiketTerjual'          =>$TiketTerjual,
              'grafikperHari'         =>$grafikPerHari

      );

      if($Laporan == null)
      {
          return view();
      }
          return view('admin.laporan')->with("Laporan", $Laporan);
  }

}
