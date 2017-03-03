<?php
require_once 'database_connections.php'; 
$query = "SELECT * from patient ORDER BY patient_id ASC";
$result = pg_query($query);
$arr = pg_fetch_all($result);
echo $json_info = json_encode($arr);
?>