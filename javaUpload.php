 
<?php
//action.php
 
	 
//	$checkbox=$_POST['firstKey'];
//	$username=$_POST['firstKey'];
	foreach ($_POST as $key => $value) {
    switch ($key) {
        case 'orderid':
            $orderid = $value;
            break;
        case 'path':
            $path = $value;
            break;
        case 'catagory':
            $database_table = $value;
            break;
        case 'filename':
            $filename = $value;
            break;
        case 'submitby':
            $submit_by = $value;
            break;
        default:
            break;
    }
}	
	    include_once ("db/lib_query.php");
		$lib_query = new lib_query; 
  		$getDrListRecords = $lib_query->upload_file($orderid,$filename,$path,$submit_by,$database_table);// for doctor 
 
?>