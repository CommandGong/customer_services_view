<?php
	include_once ( 'db/Database.php' );
	 class user_bean{

		public function getUserListRecords() {
		
			$db = Database::getInstance();
			$mysqli = $db->getConnection(); 
			$sql_query = "SELECT * FROM dbusers";
			$result = $mysqli->query($sql_query);
			$i = 0;
			while($data = $result->fetch_assoc()) {
				$i++; 
					echo '<tr><td>' .$i. ' </td><td>'
							.$data['id']. ' </td><td>'
							.$data['username']. ' </td><td>'
							.$data['fullname']. ' </td><td>'
							.$data['email']. ' </td><td>'
							.$data['active']. ' </td><td>'
							.$data['code']. ' </td>';
					echo "</br>";
			}
		}

		public function valid_user($user,$pass) {
		
			$db = Database::getInstance();
			$mysqli = $db->getConnection(); 
			$sql_query = "SELECT * FROM dbusers WHERE username='".$user."'";
			$result = $mysqli->query($sql_query);
			if ($result->num_rows ==0){
				return "nothing";
			}
			else if($result->num_rows !=1){
				return "error_duplicated username";
			}
 			else{
				while($data = $result->fetch_assoc()) {
				 
					if($data["password"]!=md5($pass)){
						return "wrong_password";
					}
					if($data["active"]!=1){
						return "account does not activited";
					}
				}
 			}//check password

//			$result_return= $result->num_rows;
			return "true";
		}//check the incoming user name and password		

		public function getAutority($user){
			$db = Database::getInstance();
			$mysqli = $db->getConnection(); 
			$sql_query = "SELECT code FROM dbusers WHERE username='".$user."'";
			$result = $mysqli->query($sql_query);
			while($row = $result->fetch_assoc()) {
				return $row['code'];
			}

		}

	}

?>