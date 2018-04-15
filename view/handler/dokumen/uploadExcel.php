<?php
include "excel_reader.php";
require_once('../../../controller/connection.php');

 
// file yang tadinya di upload, di simpan di temporary file PHP, file tersebut yang kita ambil
// dan baca dengan PHP Excel Class
$tglupdate = $_POST['datepicker'];

if ($tglupdate==""){ 
      $sukses=0;
} else {

      $data = new Spreadsheet_Excel_Reader($_FILES['fileexcelupload']['tmp_name']);
      $hasildata = $data->rowcount($sheet_index=0);
      // default nilai 
      $sukses = 0;
      $gagal = 0;
       
      for ($i=3; $i<=$hasildata; $i++)
      {
         $id_kelurahan = $data->val($i,1);
            // $kk = $data->val($i,2);
            $kk = $data->val($i,3);
            $ktp_l = $data->val($i,4);
            $ktp_p = $data->val($i,5);
            $lahir_l = $data->val($i,6);
            $lahir_p = $data->val($i,7);
            $nikah_l = $data->val($i,8);
            $nikah_p = $data->val($i,9);
            $cerai_l = $data->val($i,10);
            $cerai_p = $data->val($i,11);
            $mati_l = $data->val($i,12);
            $mati_p = $data->val($i,13);
       
      $query = "INSERT into dokumen (id_kelurahan, kk, ktp_l, ktp_p, lahir_l, lahir_p, nikah_l, nikah_p, cerai_l,cerai_p, mati_l, mati_p, tglupdate)values('$id_kelurahan', '$kk','$ktp_l','$ktp_p', '$lahir_l','$lahir_p','$nikah_l', '$nikah_p','$cerai_l','$cerai_p', '$mati_l','$mati_p', '".$tglupdate."-01')";
      $hasil = mysql_query($query);
       
      if ($hasildata) {$sukses++;}else {$gagal++;}
      }
}
if ($sukses==0){
echo '
            <script>
                  alert("Tidak ada data yang di upload!\nPastikan kembali semua inputan telah terisi.");
                  window.open("../../dokumen/index.php","_self");
            </script>
      ';
} else {

echo '
		<script>
			alert("Import Data Selesai !\nData yang berhasil di import :'.$sukses.'\nData yang gagal di import :'.$gagal.'");
			window.open("../../dokumen/index.php","_self");
		</script>
	';
}

// echo "<b>import data selesai.</b>";
// echo "Data yang berhasil di import : ".$sukses;
// echo "Data yang gagal diimport : ".$gagal;
// echo "back import";
?>