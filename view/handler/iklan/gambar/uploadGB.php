    <?php  
    require_once('../../../../controller/connection.php');
    function generateRandomCode($lengthcode) {
    $characterscode = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLengthcode = strlen($characterscode);
    $randomStringcode = '';
      for ($i = 0; $i < $lengthcode; $i++) {
          $randomStringcode .= $characterscode[rand(0, $charactersLengthcode - 1)];
      }
    return $randomStringcode;
    }
    $acakkode=generateRandomCode(15);


    $nama_gambar = $_POST['nama_gambar'];

    //file upload  
     $fileSize = $_FILES['gambar']['size'];  
     $fileError = $_FILES['gambar']['error'];  
     $tempo = $_FILES['gambar']['tmp_name'];

     if($fileSize > 0 || $fileError == 0){  
     $move = move_uploaded_file($tempo, '../../../../assets/images/layanan/'.$acakkode.'.png');


     if($move) {  

         $query="INSERT INTO iklan(nama_iklan, embed_iklan, status_iklan, tipe_iklan, update_at)
            VALUES('".$nama_gambar."', 'assets/images/layanan/".$acakkode.".png', '0', '2', CURDATE())";
         $hasil = mysql_query($query);

     echo   '<script language="javascript"> 
                window.open("../../../iklan/index.php","_self");
            </script>';
     } else{  
     echo   '<script language="javascript">;
                                alert("Gambar iklan gagal dikirim 1");
                                history.back() 
                            </script>';
     }  
     } else{  
     echo   '<script language="javascript">;
                                alert("Gambar iklan gagal dikirim 2");
                                history.back() 
                            </script>';
     }  
    ?>  