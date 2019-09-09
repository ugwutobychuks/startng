<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>PHP Page</title>
</head>
<body>
<?php
echo "This is a php code";
?>
<br>
<?php

$mixed = array(4,23,44,'chic','sand',array(4,5,4));
echo $mixed[3][1];
$mixed[1]="toby";
echo $mixed[1]
?>
</body>
</html>