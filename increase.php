<?php
$file = __DIR__ . '/number.txt';

$number = (int) file_get_contents($file);
$number++;

file_put_contents($file, $number);


header('Location: index.php');
exit;
