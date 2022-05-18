<?php
    include_once("connectDB.php");
      
  
 	$name = $_GET['name'];
 	$mail = $_GET['mail'];
 	$trinhdo = $_GET['trinhdo'];
 	$monhoc = $_GET['monhoc'];
    $gioithieu = $_GET['gioithieu'];
	$anh = $_GET['anh'];
	$query = "INSERT INTO gs(ten, email, trinhdo, monhoc,anh,gioithieu)
     VALUES ('$name','$mail','$trinhdo','$monhoc','$anh','$gioithieu')";

	if(mysqli_query($con,$query)){
        
		echo json_encode("thanh cong");
	}else{
        echo $query;
        echo json_encode("that bai");
    }		
 ?>
