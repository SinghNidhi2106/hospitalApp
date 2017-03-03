<?php 
require_once 'database_connections.php';
$data = json_decode(file_get_contents("php://input")); 
$firstname = pg_escape_string($con, $data->firstname);
$lastname = pg_escape_string($con, $data->lastname);
$age = pg_escape_string($con, $data->age);
$dob = pg_escape_string($con, $data->dob);
$gender = pg_escape_string($con, $data->gender);
$phone = pg_escape_string($con, $data->phone);
if (isset($data->free_text)){
$free_text = pg_escape_string($con, $data->free_text);
} else {
	$free_text = '';
}
$query = "INSERT into patient (firstname, lastname, age, dob, gender, phone,free_text)" .
			"VALUES ('$firstname','$lastname', $age, '$dob', '$gender',$phone, '$free_text')";
pg_query($con, $query);
echo true;
?>