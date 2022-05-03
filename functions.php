<?php
function sayHello($name, $age)
{
    echo "Hello " . $name . ", you look younger than a " . $age . " year-old!";
}

function yearOfBirth($age)
{
    $currentYear = 2022;
    $birthYear = $currentYear - $age;
    return $birthYear;
}
