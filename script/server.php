<?php

	$open = $_POST["l"];
	$fName = $_POST["n"];
	$cText = $_POST["c"];
	$get_file = $_POST["fn"];
	$dir = "../file";
	#$open = 1;
	
	if(isset($open)){
		if($open == 1){
			$dh  = opendir($dir);
			while(($name = readdir($dh)) !== false){
				if($name != "." && $name != "..")
					$list .= $name.";";
			}
			echo $list;
		}

	}
	if(isset($get_file)){
		$stext = file_get_contents($dir."/".$get_file);
		echo $stext;
	}
	if(isset($cText)){
		$dir .= "/".$fName;
		$f = fopen($dir, "a+t") or die("unable to open file ($dir)");
		ftruncate($f, 0);
		fseek($f, SEEK_SET);
		$str = str_replace(array("\\"), "", $cText);
		fwrite($f, $str);
		fclose($f);
		echo 1;
		echo $dir;
	}
?>