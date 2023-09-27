<?php

$f = fopen($filename, 'index.php');
$contents = fread($f, filesize($filename));

echo nl2br($contents);

<?php
