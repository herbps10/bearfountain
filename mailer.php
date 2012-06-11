<?php

$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];

mail("info@bearfountaindesign.com", "Message from the site", "name: $name<br/>, email: $email<br/> message: $message");

header("location: thanks.html");

?>
