<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
include_once ( 'Database.php' );
class lib_query {
	public function getTemplate() {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archiveRx";
		$result = $mysqli->query($sql_query);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "id: " . $row["entry_id"]."<br>";
			}
		} else {
			echo "0 results";
		}	
		
	}
	public function getCountRecords() {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT count(*) as Total FROM archiveRx";
		$result = $mysqli->query($sql_query);
		while($data = $result->fetch_assoc()) {
				echo $data['Total'];
			}
		}

	public function getAdminListRecords() {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archiveRx";
		$result = $mysqli->query($sql_query);
		while($data = $result->fetch_assoc()) {
			$checked =  ($data['DrApprove'] == 1?'checked':'');
				echo '<tr><td>' .$data['entry_id']. '</td><td>'
						.$data['ArshopperID']. '</td><td>'
						.$data['ArorderID']. '</td><td>'
						.$data['Arfilename']. '</td><td>'
						.$data['Arpath']. '</td><td>'
						.$data['Artype']. '</td><td>'
						.$data['Arowner']. '</td><td>'
						.$data['Arcreatedate']. '</td><td>'
						.$data['Arupdated']. '</td><td>'
						.$data['Arlastupdatedate']. '</td><td>'
						.$data['Arcomment']. '</td>
						<td><input type="checkbox" id="myCheck" '.$checked.' DISABLED></td></tr>';
			}
		}	
		
	public function getCsListRecords() {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archiveRx";
		$result = $mysqli->query($sql_query);
		$i = 0;
		echo "<thead>
				      <tr>
				        <th>entry_id</th>
				        <th>ArshopperID</th>
				        <th>ArorderID</th>
				        <th>Arfilename</th>
				        <th>Arowner</th>
				        <th>Arcreatedate</th>
				        <th>Arcomment</th>
				        <th>DrApprove</th>
				      </tr>
		    	</thead>";		
		while($data = $result->fetch_assoc()) {
			$i++;
			$checked =  ($data['DrApprove'] == 1?'checked':'');
				echo '<tr><td>' .$i. '</td><td>'
						.$data['ArshopperID']. '</td><td>'
						.$data['ArorderID']. '</td><td>'
						.$data['Arfilename']. '</td><td>'
						.$data['Arowner']. '</td><td>'
						.$data['Arcreatedate']. '</td><td>'
						.$data['Arupdated']. '</td><td>'
						.$data['Arlastupdatedate']. '</td><td>'
						.$data['Arcomment']. '</td>
						<td><input type="checkbox" id="myCheck" '.$checked.' DISABLED></td></tr>';
			}
	}	

	public function getDrListRecords($type) {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archiveRx where Artype = '$type'";
		$result = $mysqli->query($sql_query);
		echo "<thead>
				      <tr>
				        <th>entry_id</th>
				        <th>ArshopperID</th>
				        <th>ArorderID</th>
				        <th>Arfilename</th>
				        <th>Arowner</th>
				        <th>Arcreatedate</th>
				        <th>Arcomment</th>
				        <th>DrApprove</th>
				      </tr>
		    	</thead>";
		while($data = $result->fetch_assoc()) {

				echo '<tr><td>' .$data['entry_id']. '</td><td>'
						.$data['ArshopperID']. '</td><td>'
						.$data['ArorderID']. '</td><td>'
						.$data['Arfilename']. '</td><td>'
						.$data['Arowner']. '</td><td>'
						.$data['Arcreatedate']. '</td><td>'
						.$data['Arcomment']. '</td><td>'
						.$data['DrApprove']. '</td></tr>';
			}
		}			
	public function instArchiveRx($ArorderID, $Arfilename, $Arpath, $Artype,
	$Arowner,$Arupdated, $Arlastupdatedate, $Arcomment, $ArshopperID ) {
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql = "INSERT INTO archiveRx (ArorderID,Arfilename,Arpath,Artype,
	Arowner,Arupdated,Arlastupdatedate,Arcomment,ArshopperID)
		VALUES ('$ArorderID','$Arfilename','$Arpath','$Artype',
	'$Arowner','$Arupdated','$Arlastupdatedate','$Arcomment','$ArshopperID')";

		if ($mysqli->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
	}	
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
						.$data['code']. ' </td></tr>';
				echo " ";
			}
	}	

	public function getOrxTable() {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archive_orx";
		$result = $mysqli->query($sql_query);
		$i = 0;
		echo "<thead>
				      <tr>
				      	<th>Row</th>
				        <th>Order#</th>
				        <th>File Name</th>
				         
				        <th>Submited</th>
				        <th>Submit_Date</th>
				       
				        <th>Customer first name</th>
				        <th>Customer last name</th>
				        <th>Gender</th>
				        <th>Date Of Birth </th>
				        <th>address</th>
				        <th>Image</th>
 					  </tr>
		    	</thead>";		
		while($data = $result->fetch_assoc()) {
			$i++;
			$image_path=$data['path'];
			$order_info = $this->getOrderinfo($data['order_num']);//$data['order_num']
			$customer_id=$order_info["customer_id"];
			$customer_info=$this->getCustomerInfoByOrder($customer_id);
			$gender="";
			if($customer_info["gender"]==1){
				$gender="Female";
			}
			else if($customer_info["gender"]==2){
				$gender ="Male";
			}
			else {
				$gender= "Unknow";
			}
			$color =  ($data['dr_authorized'] == 1?'table_approved':' ');	
		    if($customer_info['message']!=""){
		    	$color = "table_error";
		    }
				echo '<tbody><tr class='.$color.'><td>' .$i. '</td><td>'
						.$data['order_num']. '</td><td>'
						.$data['filename']. '</td><td>'
			 
						.$data['submit_by']. '</td><td>'
						.$data['submit_date']. '</td>
						<td> 
						'.$customer_info["firstname"] .'</td>
						<td> 
						'.$customer_info["lastname"] .'</td>
						<td>
						'.$gender. '</td>
						<td> 
						'.$customer_info["dob"]  .'</td>
						<td> 
						'.$customer_info["addresses"][0]["street"][0].' '.$customer_info["addresses"][0]["city"].' '.$customer_info["addresses"][0]["postcode"].' '.$customer_info["addresses"][0]["country_id"].'</td>
						 </td>
						<td>

						<a href="'.$image_path.'" target="_blank"><img src="'.$image_path.'" class="limite_image" alt="scope_pharmacy"></img></td></a></tr></tbody>';
		}
	}	

	public function getTrxTable() {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archive_trx";
		$result = $mysqli->query($sql_query);
		$i = 0;
		echo " <thead>
				      <tr>
				      	<th>Row</th>
				        <th>Order#</th>
				        <th>File Name</th>
				        <th>Submited</th>
				        <th>Submit_Date</th>
				        <th>Authorized</th>
				        <th>Dr Name</th>
				        <th>Authorized Date</th>
				      
				        <th>Image</th>
				        <th>Customer first name</th>
				        <th>Customer last name</th>
				        <th>Gender</th>
				        <th>Date Of Birth </th>
				        <th>address</th>
 					  </tr>
		    	</thead>";		
		while($data = $result->fetch_assoc()) {
			$i++;
			$image_path=$data['path']; 
			$dr_authorized =  ($data['dr_authorized'] == 1?'YES':'NO');	
			$order_info = $this->getOrderinfo($data['order_num']);//$data['order_num']
			$customer_id=$order_info["customer_id"];
			$customer_info=$this->getCustomerInfoByOrder($customer_id);
			$gender="";
			if($customer_info["gender"]==1){
				$gender="Female";
			}
			else if($customer_info["gender"]==2){
				$gender ="Male";
			}
			else {
				$gender= "Unknow";
			}
			
			$color =  ($data['dr_authorized'] == 1?'table_approved':' ');	
		    if($customer_info['message']!=""){
		    	$color = "table_error";
		    }
				echo '<tbody><tr class = '.$color.'><td>' .$i. '</td><td>'
						.$data['order_num']. '</td><td>'
						.$data['filename']. '</td><td>'
 
						.$data['submit_by']. '</td><td>'
						.$data['submit_date']. '</td><td>'
						.$dr_authorized. '</td><td>'
						.$data['dr_authorized_by']. '</td><td>'
						.$data['dr_authorized_date']. '</td> 
						<td>
						<a href="'.$image_path.'" target="_blank"><img src="'.$image_path.'" class="limite_image" alt="scope_pharmacy" ></img></td></a>
						<td> 
						'.$customer_info["firstname"] .'</td>
						<td> 
						'.$customer_info["lastname"] .'</td>
						<td>
						'.$gender. '</td>
						<td> 
						'.$customer_info["dob"]  .'</td>
						<td> 
						'.$customer_info["addresses"][0]["street"][0].' '.$customer_info["addresses"][0]["city"].' '.$customer_info["addresses"][0]["postcode"].' '.$customer_info["addresses"][0]["country_id"].'</td>
						  </tr></tbody>';
		   
			
		}
	}

 	public function getDrTrxTable() {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archive_trx Where dr_authorized !=1";
		$result = $mysqli->query($sql_query);
		$i = 0;
		echo "  <thead>
				      <tr>
				      	<th>Row</th>
				        <th>Order#</th>
				        <th>File Name</th>
				        <th>Submited</th>
				        <th>Submit Date</th>
				        <th>Authorized</th>
				           
				        <th>First name</th>
				        <th>Last name</th>
				        <th>Gender</th>
				        <th>Date Of Birth </th>
				        <th>Order Medical Detial link</th>
				        <th>Image</th>
				        <th>Approve</th>
 					  </tr>
		    	</thead>";		
		while($data = $result->fetch_assoc()) {
			$i++;
			$image_path=$data['path']; 
			$order_num=$data['order_num'];
			$dr_authorized =  ($data['dr_authorized'] == 1?'YES':'NO');
			$dr_authorized_box =  ($dr_authorized == 'Yes'?'checked':'');
			$order_info = $this->getOrderinfo($data['order_num']);//$data['order_num']
			$customer_id=$order_info["customer_id"];
			$customer_info=$this->getCustomerInfoByOrder($customer_id);
			$gender="";
			if($customer_info["gender"]==1){
				$gender="Female";
			}
			else if($customer_info["gender"]==2){
				$gender ="Male";
			}
			else {
				$gender= "Unknow";
			}
				echo '<tbody><tr><td>' .$i. '</td><td>'
						.$data['order_num']. '</td><td>'
						.$data['filename']. '</td><td>'
 
						.$data['submit_by']. '</td><td>'
						.$data['submit_date']. '</td><td>'
						.$dr_authorized. '</td> 
			 
						<td> 
						'.$customer_info["firstname"] .'</td>
						<td> 
						'.$customer_info["lastname"] .'</td>
						<td>
						'.$gender. '</td>
						<td> 
						'.$customer_info["dob"]  .'</td>
						<td> 
						<a href=" '.__Order_info_dir__.'order_list_medical_detial.php?order_id='.$data['order_num'].'" target="_blank">link</a> </td>
						<td>
						<a href="'.$image_path.'" target="_blank"><img src="'.$image_path.'" class="limite_image" alt="scope_pharmacy"></img></a></td>'
						.'<td><input type="checkbox" name=checkbox[] value='.$order_num.' id="myCheck_'.$order_num.'" '.$dr_authorized_box.' ></td></tr></tbody>';

		}
 
	 
	}

	public function putArrove($rx_id,$username) {
		$now=  date("Y-m-d h:i");
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
// 		$sql_query = "SELECT * FROM archive_trx Where dr_authorized !=1";
//UPDATE `archive_trx` SET `dr_authorized` = '1' WHERE `archive_trx`.`order_num` = '00000002';
  		$sql_query = "UPDATE `archive_trx` SET `dr_authorized` = '1' ,`dr_authorized_date` = '".$now."',`dr_ip_address` ='".$_SERVER['REMOTE_ADDR']."', `dr_authorized_by` = '".$username."' WHERE `archive_trx`.`order_num` ='".$rx_id."' ";
		$result = $mysqli->query($sql_query);
 	
// 		echo $sql_query;
 		
 
 
	 
	}

	public function upload_file($order_id,$filename,$path,$submit_by,$database_type){
		$now=  date("Y-m-d h:i");
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
	//	$sql_query = " INSERT INTO `archive_trx` (`order_num`, `filename`, `path`, `submit_by`, `submit_date`, `dr_authorized`, `dr_authorized_by`, `dr_ip_address`, `dr_authorized_date`, `id`) VALUES ('9999999', 'TRX9999999', 'somepath', 'cs', CURRENT_TIMESTAMP, '', '', '', '0000-00-00 00:00:00.000000', NULL); ";
		$database_table="";
		if($database_type=="ORX"){
			$database_table="archive_orx";
		}
		else if($database_type=="TRX"){
			$database_table="archive_trx";

		}
		else if($database_type=="ARX"){
			$database_table="archive_arx";

		}
		$sql_query = " INSERT INTO `".$database_table."` (`order_num`, `filename`, `path`, `submit_by`, `submit_date`) VALUES ('".$order_id."', '".$filename."', '".$path."', '".$submit_by."', CURRENT_TIMESTAMP); ";
		$result = $mysqli->query($sql_query);
		
	}
	public function getArxTable() {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archive_arx";
		$result = $mysqli->query($sql_query);
		$i = 0;
		echo "<thead>
				      <tr>
				      	<th>Row</th>
				        <th>Order#</th>
				        <th>Filename</th> 
				        <th>Submited</th>
				        <th>Submit_Date</th>
				        <th>Authorized</th>
				        <th>Dr Name</th>
				        <th>Authorized Date</th>
				        <th>Image</th>
				        <th>First name</th>
				        <th>Last name</th>
				        <th>Gender</th>
				        <th>Date Of Birth </th>
				        <th>address</th>


				    
 					  </tr>
		    	</thead>";		
		while($data = $result->fetch_assoc()) {
			$i++;
			$image_path=$data['path']; 
			$order_info = $this->getOrderinfo($data['order_num']);//$data['order_num']
			$customer_id=$order_info["customer_id"];
			$customer_info=$this->getCustomerInfoByOrder($customer_id);

			$dr_authorized =  ($data['dr_authorized'] == 1?'YES':'NO');

			$gender="";
			if($customer_info["gender"]==1){
				$gender="Female";
			}
			else if($customer_info["gender"]==2){
				$gender ="Male";
			}
			else {
				$gender= "Unknow";
			}
				echo '<tbody><tr><td>' .$i. ' </td><td>'
						.$data['order_num']. ' </td><td>'
						.$data['filename']. ' </td><td>' 
						.$data['submit_by']. ' </td><td>'
						.$data['submit_date']. ' </td><td>'
						.$dr_authorized. ' </td><td>'
						.$data['dr_authorized_by']. ' </td><td>'
						.$data['dr_authorized_date']. '</td> 
						'.$customer_info["lastname"] .'</td>
						 

						<td>
						<a href="'.$image_path.'" target="_blank"><img src="'.$image_path.'" class="limite_image" alt="scope_pharmacy" ></img></td></a>
						<td> 
						'.$customer_info["firstname"] .'</td>
						<td>
						
						'.$gender. '</td>
						<td> 
						'.$customer_info["dob"]  .'</td>
						<td> 
						'.$customer_info["addresses"][0]["street"][0].' '.$customer_info["addresses"][0]["city"].' '.$customer_info["addresses"][0]["postcode"].' '.$customer_info["addresses"][0]["country_id"].'</td>
						 
						</tr></tbody>';
		}
	}	

	public function getDrHistoryTrxTable($dr_name) {
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "SELECT * FROM archive_trx Where dr_authorized = 1 AND dr_authorized_by  = '".$dr_name."'  ";
		$result = $mysqli->query($sql_query);
		$i = 0;
		echo "  <thead>
				      <tr>
				      	<th>Row</th>
				        <th>Order#</th>
				        <th>File Name</th>
				        <th>Submited</th>
				        <th>Submit_Date</th>
				        <th>Authorized</th>
				        <th>Dr Name</th>
				        <th>Authorized Date</th>
 
				        <th>First name</th>
				        <th>Last name</th>
				        <th>Gender</th>
				        <th>Date Of Birth </th>
				        <th>Order Medical Detial link</th>
				        <th>Image</th>
				 
 					  </tr>
		    	</thead>";		
		while($data = $result->fetch_assoc()) {
			$i++;
			$image_path=$data['path']; 
			$order_num=$data['order_num']; 
			$dr_authorized =  ($data['dr_authorized'] == 1?'YES':'NO');
			$order_info = $this->getOrderinfo($data['order_num']);//$data['order_num']
			$customer_id=$order_info["customer_id"];
			$customer_info=$this->getCustomerInfoByOrder($customer_id);
			$gender="";
			if($customer_info["gender"]==1){
				$gender="Female";
			}
			else if($customer_info["gender"]==2){
				$gender ="Male";
			}
			else {
				$gender= "Unknow";
			}
				echo '<tbody><tr><td>' .$i. '</td><td>'
						.$data['order_num']. '</td><td>'
						.$data['filename']. '</td><td>'
 
						.$data['submit_by']. '</td><td>'
						.$data['submit_date']. '</td><td>'
						.$dr_authorized. '</td><td>'
						.$data['dr_authorized_by']. '</td><td>'
						.$data['dr_authorized_date']. '</td> 
						<td> 
						'.$customer_info["firstname"] .'</td>
						<td> 
						'.$customer_info["lastname"] .'</td>
						<td>
						'.$gender. '</td>
						<td> 
						'.$customer_info["dob"]  .'</td>
						<td> 
						 <a href=" '.__Order_info_dir__.'order_list_medical_detial.php?order_id='.$data['order_num'].'" target="_blank">link</a></td>
						<td>
						<a href="'.$image_path.'" target="_blank"><img src="'.$image_path.'" class="limite_image" alt="scope_pharmacy"></img></a></td>'
						.'</tr></tbody>';

		}
 
	 
	}//created dorter's table

	function getOrderinfo($ordernum){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://www.scopepharmacy.com/index.php/rest/V1/orders/" .$ordernum . "",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "authorization: Bearer a9saynwi7qjw1ocbx0laj2h11jnvwrm3",
		    "cache-control: no-cache",
		    "content-type: application/json",
		    "postman-token: 69ea585c-5432-a955-aa09-7bb220a6accb"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
//  	    echo $response;
		$json = $response;
		$json = json_decode($json, true);  
		$customer_id= $json['customer_id'];
		}
//	 	echo $json['customer_firstname'];
		return $json;

		//....COMPELETE THE CODE

	}//get the order information from Magento syste by using order id, it will return a Json element which record every data abotu this order.

	function getCustomerInfoByOrder($customer_id){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://www.scopepharmacy.com/index.php/rest/V1/customers/" .$customer_id. " ",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "authorization: Bearer a9saynwi7qjw1ocbx0laj2h11jnvwrm3",
		    "cache-control: no-cache",
		    "content-type: application/json",
		    "postman-token: 2e3dedad-222b-efd6-8c04-f1795df677a5"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
//		  echo $response;
		$json = $response;
		$json = json_decode($json, true);
 
 		return $json;
		//....COMPELETE THE CODE. WE NEE BELOW INFORMATION
		//	- Customer first name
		//    - Customer last name
		//   - Gender
		//    - DOB
		//    - Address (Street, City, region - country_id)
		}	
			
	}//get the customer's information by using customer's id, it will return a json file which record every information from customer

/*
	function getCustomer_firstname($customer_id){
		$json_here = $this->getCustomerIdByOrder($customer_id);
 		return $json_here['customer_firstname'];
	 
	}//get the customer's first name by using the order

	function getCustomer_lasttname($customer_id){
		$json_here = $this->getCustomerIdByOrder($customer_id);
 		return $json_here['customer_id'];
	 
	}//get the customer's first name by using the order
	function getCustomer_id($customer_id){
		$json_here = $this->getCustomerIdByOrder($customer_id);
 		return $json_here['customer_id'];
	 
	}//get the customer's first name by using the order
	function getCustomer_DOB($customer_id){
		$json_here = $this->getCustomerIdByOrder($customer_id);
 		return $json_here['customer_id'];
	 
	}//get the customer's first name by using the order
	function getCustomer_Address($customer_id){
		$json_here = $this->getCustomerIdByOrder($customer_id);
 		return $json_here['customer_id'];
	 
	}//get the customer's first name by using the order
*/	
	

}


	
//$x= new lib_query();
//$x->getTemplate();
//echo "hey";
//$x= new lib_query();
//$x->instArchiveRx('0000005555','ORG-0000000001-1','/rx/201607/','ORG','AMIR','Ghader','0','comment','2525');
?>