    <?php  
    $namafoto = $_POST['namafoto'];

    //file upload.php  
     $fileSize = $_FILES['picture']['size'];  
     $fileError = $_FILES['picture']['error'];  
     

     if($fileSize > 0 || $fileError == 0){  
     $move = move_uploaded_file($_FILES['picture']['tmp_name'], '../../../assets/images/camat/'.$namafoto.'.jpg');  

     if($move) {  
     echo   '<script language="javascript"> 
                window.open("../../kecamatan/index.php","_self");
            </script>';
     } else{  
     echo   '<script language="javascript">;
                                alert("Gambar gagal dikirim");
                                history.back() 
                            </script>';
     }  
     } else{  
     echo   '<script language="javascript">;
                                alert("Gambar gagal dikirim");
                                history.back() 
                            </script>';
     }  
    ?>  