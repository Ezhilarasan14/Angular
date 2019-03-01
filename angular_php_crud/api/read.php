<?php
$conn = new mysqli('127.0.0.1:3306', 'root', 'tocodetech', 'angular');
	
$out = array();
$sql = "SELECT * FROM members";
$query=$conn->query($sql);
while($row=$query->fetch_array()){
$out[] = $row;
}

echo json_encode($out);
?>