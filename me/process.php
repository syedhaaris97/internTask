<?php

$harisDon1 = "data.json";
$harisDon2 = "data1.json";


if(isset($_POST['what'])){
	switch ($_POST['what']) {
		case "harisDon1_a": //for upload data
			$f = fopen($harisDon1, "w");
			fwrite($f, $_POST['content']);
			break;
		case "harisDon1_b":	//for download data
			$f = fopen($harisDon1, "r");
			$size=filesize($harisDon1);
			echo ($size>0)? fread($f, $size):"";
			break;
		case "harisDon2_a":
			$f = fopen($harisDon2, "w");
			fwrite($f, $_POST['content']);
			break;
		case "harisDon2_b":
			$f = fopen($harisDon2, "r");
			$size=filesize($harisDon2);
			echo ($size>0)? fread($f, $size):"";
			break;
	}
}


?>