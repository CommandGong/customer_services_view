<html>
<?php 
	require_once("header.php");
	session_start();
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

<style>
	.limite_image{
		height:60px;
	}
</style>
<script>
	function myFunction() {
	  var input, filter, table, tr, td, i;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("search_table");
	  tr = table.getElementsByTagName("tr");
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[1];
	    if (td) {
	      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    }       
	  }
	}
</script>
<body>
	<div class=""></div>

	<?php require_once("headerbar.php") ?>
	<div class="container-fluid">

		<div>


		<h2>Welcome<?php echo " $user_name"?></h2>
		<button class="" style="float:right"><a href='logout.php'>logout</a></button>
			<?php 
				 		if($user_type==2){
				 			echo '<form action="table.php" method="POST" class="text-center">';
							echo '<button name="selection" value="ORX" class="btn-info" id="ORX_Button">ORX table</button>';
							
							echo '<button name="selection" value="TRX" class="btn-info" id="TRX_Button">TRX table</button>';
							echo '<button name="selection" value="ARX" class="btn-info" id="ARX_Button">ARX table</button>';
				 			echo '</form>';
				 		}
				 		else if($user_type==1){
				 			echo '<form action="table.php" method="POST" class="text-center">';
							echo '<button name="selection" value="ORX" class="btn-info" id="ORX_Button">ORX table</button>';
							echo '<button name="selection" value="TRX" class="btn-info" id="TRX_Button">TRX table</button>';
							echo '<button name="selection" value="ARX" class="btn-info" id="ARX_Button">ARX table</button>';
				 			echo '</form>';
				 		}
				 		else if($user_type==3){
				 			echo '<form action="table.php" method="POST" class="text-center">';
							echo '<button name="selection" value="approve" class="btn-info" id="TRX_Button">Waiting for approve</button>';
							echo '<button name="selection" value="doctor_history" class="btn-info" id="History_Button">History </button>';
		 
				 			echo '</form>';
				 		}
			?>
		<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search for order ID.." title="Type in a name">
		<form action="action.php" method="post">
		<table class="table table-striped" id="search_table">
  
			<?php
				include_once ("db/lib_query.php");
				$lib_query = new lib_query; 
		 
				if($user_type==1){
			//		echo "Admin<br>";

					if(isset($_POST["selection"]) && !empty($_POST["selection"])){
		
						$selection = $_POST["selection"];
					}
					else{
						$selection = 'ORX';
					}
					switch ($selection)	
					{
						case 'TRX':   
							echo "<h3>Table for Temporary Prescription</h3>";
							echo "<script> $('#TRX_Button').addClass('btn-primary'); $('#TRX_Button').removeClass('btn-info');</script>";	
							$getDrListRecords = $lib_query->getTrxTable();
							break;	
						case 'ORX':  		
							
							echo "<h3>Table for Original Prescription</h3>";
							echo "<script type='text/javascript'> $('#ORX_Button').addClass('btn-primary'); $('#ORX_Button').removeClass('btn-info');</script>";
							$getDrListRecords = $lib_query->getOrxTable();
							break;	

						case 'ARX':		

							echo "<h3>Table for Approved Prescription</h3>";
							echo "<script> $('#ARX_Button').addClass('btn-primary'); $('#ARX_Button').removeClass('btn-info');</script>";
							$getDrListRecords = $lib_query->getArxTable();
							break;	
						default:

							break;
							
					}
				}//admin code :1

				if($user_type==2){
			//		echo "Customer Service<br>";
					if(isset($_POST["selection"]) && !empty($_POST["selection"])){
		
						$selection = $_POST["selection"];
					}
					else{
						$selection = 'ORX';
					}
					switch ($selection)	
					{
						case 'TRX':
							
							echo "<h3>Table for Temporary Prescription</h3>";
							echo "<script> $('#TRX_Button').addClass('btn-primary'); $('#TRX_Button').removeClass('btn-info');</script>";	
							$getDrListRecords = $lib_query->getTrxTable();
							break;	
						case 'ORX': 		
							
							echo "<h3>Table for Original Prescription</h3>";
							echo "<script type='text/javascript'> $('#ORX_Button').addClass('btn-primary'); $('#ORX_Button').removeClass('btn-info');</script>";
							$getDrListRecords = $lib_query->getOrxTable();
							break;	

						case 'ARX':	
							echo "<h3>Table for Approved Prescription</h3>";
							echo "<script> $('#ARX_Button').addClass('btn-primary'); $('#ARX_Button').removeClass('btn-info');</script>";
							$getDrListRecords = $lib_query->getArxTable();
							break;	
						default:

							break;
							
					}
				}//customer service code :2

				if($user_type==3){
				//	echo "Doctor<br>";	

					if(isset($_POST["selection"]) && !empty($_POST["selection"])){
		
						$selection = $_POST["selection"];
					}
					else{
						$selection = 'approve';
					}
					switch ($selection)	
					{
						case 'approve':    

							echo "<h3>Table for  Prescription that waiting for approved</h3>";
							echo "<script> $('#TRX_Button').addClass('btn-primary'); $('#TRX_Button').removeClass('btn-info');</script>";	
							$getDrListRecords = $lib_query->getDrTrxTable();// for doctor
							break;	
						case 'doctor_history':  	
							
							echo "<h3>Table for Approved Prescription History by $user_name </h3>";
							echo "<script> $('#History_Button').addClass('btn-primary'); $('#History_Button').removeClass('btn-info');</script>";	
							$getDrListRecords = $lib_query->getDrHistoryTrxTable($user_name);
							break;	
 
						default:

							break;
							
					}
					
				}//Doctor code :3

				if($user_type==99){
 				//	echo "for the test: <br>";
//					$getDrListRecords = $lib_query->getAdminListRecords();
//					$getDrListRecords = $lib_query->getCsListRecords();
//					$getDrListRecords = $lib_query->getDrListRecords('PRE');

//					$getDrListRecords = $lib_query->getOrxTable();//for cs
//					$getDrListRecords = $lib_query->getTrxTable();//for cs
// 					$getDrListRecords = $lib_query->getDrTrxTable();// for doctor
					
				}//my test code :99

//				$getDrListRecords = $lib_query->getUserListRecords();

				// this code is for different typs of account 
			?>

 
		</table>
		<?php
		 	if($user_type==3){
		 		echo '<input type="submit">';
		 	}
		 ?>

		</div>
		</from>
	</div>

	<?php require_once("footerbar.php") ?>
</body>
</html>