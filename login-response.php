<?php
    // Start the session
    session_start();

    // Checking login information to see if its correct

    $userName = $_POST["userName"];
    $password = $_POST["password"];

    // trim removes white space from variable
    if(trim($userName) == "kameron" && trim($password) == "cloudismydog47!") {
        $_SESSION['isLoggedIn'] = 'kameron';
        header('Location: picture-library.php');
    }
    elseif(trim($userName) == "guest" && trim($password) == "guest") {
        $_SESSION['isLoggedIn'] = 'guest';
        header('Location: picture-library.php');
    }
    else {
        header('Location: login.php?badUserCredentials=true');
    }

?>
