<?php

$name = 'World';
$age = '10 Billion';

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
}


echo "Hello " . $name . ", you look younger than a " . $age . " year-old!";
