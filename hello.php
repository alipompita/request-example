<?php
include_once 'functions.php';

$name = 'World';
$age = '10 Billion';
if (isset($_GET['name'])) { //check if variable 'name' is set inside GET request body
    $name = $_GET['name'];
    $age = $_GET['age'];
} elseif (isset($_POST['name'])) { //check if variable 'name' is set inside POST request body
    $name = $_POST['name'];
    $age = $_POST['age'];
}

sayHello($name, $age);

echo "<br> " . $name . ", you were born in the year " . yearOfBirth($age);
