<?php
require_once('./classes/BinarySearch.php');

if(isset($_POST['key']) && $_POST['key']) {
	$searchable_key = $_POST['key'];
}
if(isset($_FILES['file'])){
	$fileName = $_FILES['file']['name'];

	$uploadDir = DIR_ROOT.'/data/';

	$file = $uploadDir . $fileName;
	
	move_uploaded_file($_FILES['file']['tmp_name'], $file);
	$value = $BinarySearch->binarySearchByKey($file, $searchable_key);
			$result = array(
			'searchable_key' => $searchable_key,
			'value' => $value
		); 
	echo json_encode($result);
}
?>
