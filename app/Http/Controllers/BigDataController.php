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

class BigDataController extends Controller
{
  public function index()
  {
      $DataProvinsi   = DB::SELECT('SELECT X.nama_provinsi AS Nama,
                          		             COUNT(Z.nama_provinsi) AS COUNT
                                    FROM provinsis X
                                    LEFT JOIN(SELECT C.nama_provinsi, A.id FROM transaksis A, wisatas B, provinsis C
                                          WHERE A.is_lunas = 1 AND A.wisata_id = B.id AND B.provinsi_id = C.id AND A.user_id =1)
                          			    AS Z ON  Z.nama_provinsi =X.nama_provinsi
                                    GROUP BY Nama;');
      $PolaWisata     = DB::SELECT('SELECT X.x as HH,
                                    	     COUNT(Z.total_harga) as total
                                    FROM calender X
                                    LEFT JOIN(SELECT * FROM transaksis Y WHERE DATE(Y.created_at) = CURDATE() AND Y.is_lunas = 1 AND user_id =1) as Z ON HOUR(Z.created_at)-2 <= X.x
                                    WHERE X.id <13
                                    GROUP BY HH;');
      $RoomToGrow     = DB::SELECT('SELECT SUM(X.jumlah_penduduk)/COUNT(Y.id) as Totals
                                    FROM provinsis X, wisatas Y;
                                    ');
      $KonsumenTerbanyak = DB::SELECT('SELECT counts.asal_provinsi, MAX(counted) FROM
                                            (
                                                SELECT asal_provinsi,COUNT(*) AS counted
                                                FROM transaksis
                                                WHERE user_id=1 AND is_lunas = 1
                                                GROUP BY asal_provinsi
                                            ) AS counts;');
      $Buzzer          =  DB::SELECT('SELECT X.nama_buzzer FROM buzzers X;');

      $Laporan =array(
              'DataProvinsi'          =>$DataProvinsi,
              'PolaWisata'            =>$PolaWisata,
              'RoomToGrow'            =>$RoomToGrow,
              'konsumenTerbanyak'     =>$KonsumenTerbanyak,
              'buzzers'               =>$Buzzer

      );
      dd($Laporan);

      if($Laporan == null)
      {
          return view();
      }
          return view('test')->with("Laporan", $Laporan);
  }

}
