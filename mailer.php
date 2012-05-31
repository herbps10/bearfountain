<?php

$name = $_POST['name'];
$message = $_POST['message'];

mail("info@bearfountaindesign.com", "Message from the site", "name: $name\n, message: $message");

header("location: thanks.html");

?>
