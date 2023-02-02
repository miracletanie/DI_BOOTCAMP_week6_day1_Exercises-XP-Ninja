<?php 

$name = $_GET['name'];
$color = $_GET['color'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Name : <?= $name ?> </li>
        <li> color : <?= $color ?> </li>
    </ul>
</body>
</html>