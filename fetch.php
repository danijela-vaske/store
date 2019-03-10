<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$query = "SELECT * FROM tbl_product";

$statament = $connect->prepare($query);

$statament->execute();

while ($row = $statament->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
}
echo json_encode($data);

?>