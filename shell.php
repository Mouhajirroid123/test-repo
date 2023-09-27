<?php

$f = fopen($filename, 'index.php');
$contents = fread($f, filesize($filename));

echo ($contents);

?>