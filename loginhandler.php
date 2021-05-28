<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<meta name="description" content="Phase 6">
<meta name="author" content="Will Connell">
<link rel="stylesheet" href="login.css">
</head>
<body>
<div id='logo'>
<a href='phase3.html'><img src = "logo.png" height="100px"></a>
</div>
<div id='loginBox'>
<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $server = ""; // removed for security
    $user = "";
    $pwd = "";
    $dbName = "";
    
    $mysqli = new mysqli ($server, $user, $pwd, $dbName);
    
    // escape user input to prevent SQL injection
    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string($password);
    
    // If it returns a non-zero error number, print a
    // message and stop execution immediately
    if ($mysqli->connect_errno) {
        die('Connect Error: ' . $mysqli->connect_errno .
            ": " . $mysqli->connect_error);
    }
    
    // determine user password and store it in $actualPassword
    $command = "SELECT password FROM dgpasswords WHERE username = '$username'";
    $result = $mysqli->query($command);
    // verify the result; comment out when done developing
//    if (!$result) {
//        die("Query failed: ($mysqli->error <br> SQL command = $command");
//    }
    while ($row = $result->fetch_assoc()) {
        $actualPassword = $row['password'];
    }
    
    if ($password == $actualPassword) {
        setcookie ("username", $username, time()+3600*24*30);
        print "<p>Welcome back, $username!<p>";
        print "<p>You now have complete access to all of the content on this website! <a href='phase3.html'>Home Page</a><p>";
    } else  {
        print "<p>Incorrect username or password. Passwords are case sensitive.<p>";
        print "<p><a href='login.html'>Try again</a></p>";
    }
?>
</div>
</body>
</html>
