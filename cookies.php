<?php

$name = "Testcookie";
$value = 150;
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HTML5 boilerplate – all you really need…</title>
	<link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php 

if(isset($_COOKIE["Testcookie"])) {

    $cookievar = $_COOKIE["Testcookie"];
    echo $name;
} else {
    $cookievar = "";
}

?>

</body>
</html>