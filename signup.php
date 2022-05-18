<?php

   if($_SERVER['REQUEST_METHOD']=='POST'){
  
    include_once("connectDB.php");
       
    
 	$username = $_POST['username'];
 	$mail = $_POST['mail'];
 	$sdt = $_POST['sdt'];
 	$password = $_POST['password'];
  
	 if($username == '' || $mail == '' || $sdt == '' || $password == ''){
	        echo json_encode(array( "status" => "false","message" => "Parameter missing!") );
	 }else{
			 
	        $query= "SELECT * FROM nguoidungg WHERE taikhoan='$username'";
	        $result= mysqli_query($con, $query);
		 
	        if(mysqli_num_rows($result) > 0){  
	           echo json_encode(array( "status" => "false","message" => "Username already exist!") );
	        }else{ 
		 	 $query = "INSERT INTO nguoidungg(taikhoan, email, sdt, matkhau) VALUES ('$username','$mail','$sdt','$password')";

			 if(mysqli_query($con,$query)){
			    
			     $query= "SELECT * FROM nguoidungg WHERE taikhoan='$username'";
	                     $result= mysqli_query($con, $query);
		             $emparray = array();
	                     if(mysqli_num_rows($result) > 0){  
	                     while ($row = mysqli_fetch_assoc($result)) {
                                     $emparray[] = $row;
                                   }
	                     }
			    echo json_encode(array( "status" => "true","message" => "Successfully registered!" , "data" => $emparray) );
		 	 }else{
		 		 echo json_encode(array( "status" => "false","message" => "Error occured, please try again","query" => $query) );
		 	}
	    }
	            mysqli_close($con);
	 }
     } else{
			echo json_encode(array( "status" => "false","message" => "Error occured, please try again!") );
	}
 
 ?>
