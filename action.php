<?php
	session_start();
?>
<?php
//action.php
	if(isset($_SESSION['user_valid_name']) && !empty($_SESSION['user_valid_name'])){
		$username= $_SESSION["user_valid_name"];
		echo $username;
	}
	else {
		header('Location:index.php');
	}
	if(isset($_POST['checkbox']) && !empty($_POST['checkbox'])){

		
	    include_once ("db/lib_query.php");
		$lib_query = new lib_query; 
	 
		foreach($_POST['checkbox'] as $checkbox){
	   			
	  	 	$getDrListRecords = $lib_query->putArrove($checkbox,$username);// for doctor 
		 	
		}
	}
	else{

		header('Location:table.php');
	}
	
		header('Location:table.php');
?>