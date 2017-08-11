<?php
function getCustomerIdByOrder($ordernum){
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
  echo $response;
$json = $response;
$json = json_decode($json, true);  
$customer_id= $json['customer_id'];
}
//....COMPELETE THE CODE

}//order information


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
  echo $response;
$json = $response;
$json = json_decode($json, true);

//echo "->First Name=";
$firstname = $json['firstname'];

/*
echo "->Last Name=";
$lastname = $json['lastname'];

echo "->Gender=";
$gender = $json['gender'];

echo "->Date of Birthday=";
$dob = $json['dob'];
*/
//....COMPELETE THE CODE. WE NEE BELOW INFORMATION
//	- Customer first name
//    - Customer last name
//   - Gender
//    - DOB
//    - Address (Street, City, region - country_id)
}	
	
}

   getCustomerInfoByOrder(1);
//    getCustomerIdByOrder(1);
