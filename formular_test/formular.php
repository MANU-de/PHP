<!DOCTYPE html>
<head>
<title>Formular</title>
<link href="form.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Eingabe der Zugangsdaten</h1>
 <form action="goalpage.php"  method="post">


    <label for="userid">Username</label>
    <input type="text" placeholder="Enter Username" name="userid" required><br />

    <label for="password">Passwort</label>
    <input type="password" placeholder="Enter Password" name="password" required><br />

    <button type="submit">Login</button>
 
</form> 
</body>
</html>