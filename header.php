<head>
	<title>Welcome to ScopePharmacy  System</title>
	<?php 
		session_start();
		if(!defined('__Order_info_dir__'))define('__Order_info_dir__', '../order_info/');//lib section

	?>
	<?php
		if(isset($_SESSION['user_type']) && !empty($_SESSION['user_type'])){
			
			$user_type=$_SESSION['user_type'];
			$user_name=$_SESSION['user_valid_name'];
		}
		else{
	//		header('Location:index.php');
			echo "no user type";
		}//what if user have no code?
		

	?>

<script
				  src="https://code.jquery.com/jquery-3.2.1.js"
				  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
				  crossorigin="anonymous">
				  	
		</script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

		<link rel="stylesheet" type="text/css" href="css/main.css?version=51">

	
</head>