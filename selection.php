<html>

<?php 
	require_once("header.php");
	session_start();
?>
<?php
	if(isset($_SESSION['user_type']) && !empty($_SESSION['user_type'])){
		
		$user_type=$_SESSION['user_type'];
	}
	else{
//		header('Location:index.php');
		echo "no user type";
	}//what if user have no code?
	if(isset($_SESSION['user_valid_name']) && !empty($_SESSION['user_valid_name'])){
		$user_name= $_SESSION["user_valid_name"];
	}
	else{
		header('Location:index.php');
	}
?>
<style>
	.limite_image{
		height:60px;
	}
</style>
<body>
	 
	<div class="container-fluid">
 		<p>Welcome:<?php  echo " $user_name" ?></p>
		<button   style="float:right"><a href='logout.php' >logout</a></button>
	</div>


	<div class="">
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4  " >
				 <p>Please select the table you want to access </p>
 
				 <form action="table.php" method="POST">
				 	<?php 
				 		if($user_type==2){

							echo '<button name="selection" value="ORX">ORX table</button>';
							echo '<button name="selection" value="ARX">ARX table</button>';
							echo '<button name="selection" value="TRX">TRX table</button>';
				 
				 		}
				    ?>
				</form>

			</div>
 			
			</div>
		</div>
	</div>

</body>
</html>