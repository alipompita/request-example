<?php
$who = "";
if (empty($_GET['name'])) {
    $who = "world";
} else {
    $who = $_GET['name'];
}
echo "Hello " . $who;
