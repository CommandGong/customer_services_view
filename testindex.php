<?php
include_once ("db/lib_query.php");
$lib_query = new lib_query;
//$getAdminListRecords = $lib_query->getAdminListRecords();
//$getDrListRecords = $lib_query->getDrListRecords("PRE");
$getDrListRecords = $lib_query->getUserListRecords();
?>