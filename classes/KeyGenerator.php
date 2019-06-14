<?php

class KeyGenerator {

	public function __construct()
	{
		$i = 0;

			while($i < 100){

				$reg = 'Key'.$i.'\t';
				file_put_contents(DIR_ROOT.'/data/keydata.txt', $reg, FILE_APPEND);
				$separator = ($i != 99 ) ? '\x0A' : '';
				$value = 'Value'.$i.$separator;
				file_put_contents(DIR_ROOT.'/data/keydata.txt', $value, FILE_APPEND);

				$i++;
			}
	}
}

$KeyGenerator = new KeyGenerator();

?>
