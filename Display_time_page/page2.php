<?php
session_start();
$page2Geladen=time();
?>
<!DOCTYPE html>
<head>
<title>Webseite 2</title>
</head>

<body>
<h1>
<?php
echo "<h2>Die erste Webseite wurde " . ($page2Geladen - $_SESSION["page1Geladen"]) . " Sekunden angezeigt.</h2>\n";
?>
</h1>

<?php
session_destroy();
?>
</body>
</html>