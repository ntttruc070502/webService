<?php
    include_once("connectDB.php");
      
  
 	$name = $_GET['name'];
 	$diachi = $_GET['diachi'];
 	$sdt = $_GET['sdt'];
 	$lop = $_GET['lop'];
    $lich = $_GET['lich'];
	$id = $_GET['id'];
	$query = "INSERT INTO phuhuynh(tenphuhuynh, diachi, sdtphuhuynh, lophoc,lichhoc,id)
     VALUES ('$name','$diachi','$sdt','$lop','$lich','$id')";

	if(mysqli_query($con,$query)){
        
		echo json_encode("thanh cong");
	}else{
        echo $query;
        echo json_encode("that bai");
    }		
 ?>