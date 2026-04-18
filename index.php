<?php

$file = __DIR__ . '/number.txt';

if (!file_exists($file)) {
    file_put_contents($file, 0);
}

$number = (int) file_get_contents($file);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Counter</title>
</head>
<body>
<h1>Number: <?php echo $number; ?></h1>

<form action="increase.php" method="POST">
    <button type="submit">Increase</button>
</form>
</body>
</html>
