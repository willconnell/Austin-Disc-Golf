<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
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
    // Report all PHP errors
    error_reporting(E_ALL);
    ini_set("display_errors", "on");
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $server = ""; // removed for security
    $user = "";
    $pwd = "";
    $dbName = "";
    
    $mysqli = new mysqli ($server, $user, $pwd, $dbName);
    
    // escape user input to prevent SQL injection
    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string($password);
    $cpassword = $mysqli->real_escape_string($cpassword);
    
    // If it returns a non-zero error number, print a
    // message and stop execution immediately
    if ($mysqli->connect_errno) {
        die('Connect Error: ' . $mysqli->connect_errno .
            ": " . $mysqli->connect_error);
    }
    
    
    // check password constraints
    if ($password == "") {
        print "<p>Please enter a valid password.<p>";
        print "<p><a href='register.html'>Try again</a></p>";
    } elseif ($cpassword == "") {
        print "<p>Please confirm password.<p>";
        print "<p><a href='register.html'>Try again</a></p>";
    } elseif ($password !== $cpassword) {
        print "<p>Passwords do not match.<p>";
        print "<p><a href='register.html'>Try again</a></p>";
    } else {
        // attempt to insert new un&pw pair
        $command = "INSERT INTO dgpasswords VALUES ('$username', '$password');";
        $result = $mysqli->query($command);
        
        // query will fail if duplicate entry exists for $username
        if (!$result) {
            // comment out error message when done developing
            //die("Query failed: ($mysqli->error <br> SQL command = $command");
            print "<p>Username already taken.<p>";
            print "<p><a href='register.html'>Try another</a></p>";
        } else {
            setcookie ("username", $username, time()+3600*24*30);
            print "<p>Welcome, $username!<p>";
            print "<p>Your account has been successfully created.<p>";
            print "<p><a href='phase3.html'>Return to homepage</a></p>";
        }
    }
?>
</div>
</body>
</html>





