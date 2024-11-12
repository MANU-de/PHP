<?php
session_start();
$_SESSION["page1Geladen"]=time();
?>

<!DOCTYPE html>
<head>
<title>Webseite 1</title>
</head>
<body>
<h1>Klicken Sie auf den nachfolgenden Link</h1>
<a href="page2.php">Seite 2</a>
</body>
</html>