<?php
error_reporting(0);
$dir='store';
$ffsd = scandir($dir);

for($i=2;$i<count($ffsd);$i++){
	$f=$ffsd[$i];
	echo "<li><img src='store/$f'></li>";
}
?>