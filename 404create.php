<?php

	$i=0;
	$file=fopen('404count1.txt', 'w');
	fwrite($file, $i);
	fclose($file);

?>