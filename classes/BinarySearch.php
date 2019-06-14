<?php
include('./classes/Functions.php');
class BinarySearch {

	public $functions;

	function __construct(){
		define('DIR_ROOT', dirname('__FILE__'));
	}

	public static function showRoot(){
		echo '<pre>';
		echo DIR_ROOT;
		echo '</pre>';
	}

	public function binarySearchByKey($file, $searchable_key){
		// $functions = new Functions();
		$datakeys = fopen($file, "r");
		while(!feof($datakeys)){

			$string = fgets($datakeys);
			$explode_string = explode('\x0A', $string);

			// $functions->dump($explode_string);

			foreach($explode_string as $value){
				$arKeyVal[] = explode('\t', $value);
			}
			// $functions->dump($arKeyVal);
			$left = 0;
			$right = count($arKeyVal)-1;

			while($left <= $right){

				$middle = floor(($left + $right)/2);
				$resnatcmp = strnatcmp($arKeyVal[$middle][0], $searchable_key);

				if($resnatcmp > 0){
					$right = $middle - 1;
				}elseif($resnatcmp < 0){
					$left = $middle + 1;
				}else{
					return $arKeyVal[$middle][1];
				}
				if($left > $right){
					return -1;
				}
			}
		}
		return 'undef';
	}
}
	$BinarySearch = new BinarySearch();
?>