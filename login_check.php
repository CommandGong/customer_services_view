<?php session_start(); ?>
<?php
	include_once ( 'userbean.php' );
	$user = trim($_REQUEST['name']);
	$pass = $_REQUEST['pass'];
	$usercode=null;
	$userbean = new user_bean();
 	$valid_result = $userbean->valid_user($user,$pass);

 	if($valid_result=="true"){

 		$usercode = $userbean->getAutority($user); 
 		//echo $usercode;

		$_SESSION["user_valid_name"] = $user;
	 	

 		// here , we will show the different pages depends on the code!
 		if($usercode==99){
 			echo "Welcome to the test area";
 		 	header('Location:table.php');

			$_SESSION["user_type"] = $usercode;
 		}//for testers
 		
 			//echo "Welcome to the test area";
 		if($usercode==2){

			$_SESSION["user_type"] = $usercode;
// 		 	header('Location:selection.php');
			header('Location:table.php');

 		}//customer_service
 		else {
 			$_SESSION["user_type"] = $usercode;
 			header('Location:table.php');
 		}
			
 	}
 	else if($valid_result=="nothing"){
 		echo "User name does not exist";
 	}
 	else if($valid_result=="wrong_password"){
 		echo "Wrong password";
 	}


?>