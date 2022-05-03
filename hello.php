<?php

$name = 'World';
$age = '10 Billion';
echo "<pre>";
if (isset($_GET['name'])) { //check if variable 'name' is set inside GET request body
    $name = $_GET['name'];
    $age = $_GET['age'];
} elseif (isset($_POST['name'])) { //check if variable 'name' is set inside POST request body
    $name = $_POST['name'];
    $age = $_POST['age'];
}

echo "</pre>";


echo "Hello " . $name . ", you look younger than a " . $age . " year-old!";
