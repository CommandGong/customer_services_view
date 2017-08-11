
<?php
    session_start(); 
 //   session_destroy();//when logout use those two functions
 //   session_unset();//when logout use those two functions
 ?>
<HTML>
<?php require_once("header.php") ?>

<body>
 
	<script>
		function checkform(){
				var forms= document.getElementsByTagName("input");
				var result=true;
				for(i=0;i<forms.length;i++){
					if(forms[i].value==null || forms[i].value==""){
						$("#"+forms[i].id+"_error").text("Missing entries here");
						result = false;
					}

				}
				return result;
			}
	</script>
	
	<?php require_once("headerbar.php") ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4  " id="login_area">
			<h1>Login page</h1>
				<form action="login_check.php" method="POST">
					<p>please enter your username</p>
					<input type=text name=name id="uname"><div class="warning" id="uname_error"></div></br>
					<p>please enter your password</p>
				    <input type=password name=pass id="password"><div class="warning" id="password_error"></div><br> 
				     
					<input type=submit  class="btn-primary" value=loging id="submitbtn" onclick="return checkform()">
				
					<input type=checkbox name=keep value=2/>keep login into two weeks<br>
				</form>
			 </div>
 
			</div>
		</div>

	</div>

	<?php require_once("footerbar.php") ?>
</body>

</HTML>