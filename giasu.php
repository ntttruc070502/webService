<?php

//    if($_SERVER['REQUEST_METHOD']=='POST'){
//   // echo $_SERVER["DOCUMENT_ROOT"];  // /home1/demonuts/public_html
// //including the database connection file
	include_once("connectDB.php");
	
		$name = $_GET['name'];

	 	$query= "SELECT `id`, `ten`, `trinhdo`, `monhoc`, `anh`, `gioitinh`, `gioithieu` FROM `yeucau` where ten LIKE '%$name%' ";

		$result= mysqli_query($con, $query);
	    $emparray = array();
	    if(mysqli_num_rows($result) > 0){  
	                     while ($row = mysqli_fetch_assoc($result)) {
                                     $emparray[] = $row;
                                }
	                     }
		 
	    echo json_encode($emparray);
	// } else{
	// 		echo json_encode(array( "status" => "false","message" => "Error occured, please try again!") );
	// }
	
?>

