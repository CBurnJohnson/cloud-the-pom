<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Cloud </span>the Pom</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="current"><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="login-page">
                      
        <div class="login-container">
            <h1>Log In</h1>
            <form class="login-form" method='POST' action='login-response.php'>
                <input type='text' name='userName' id='username' placeholder="Username">
                <input type='password' name='password' placeholder="Password">
                <input type='submit'>
            </form>
        <?php
            
            if(isset($_SESSION['isLoggedIn'])){
                // if user is logged in
                header("Location: picture-library.php");
            }
            
            // Response if incorrect password or needs to log in
            
            $badUserCredentials = isset($_GET["badUserCredentials"]);

            if($badUserCredentials) {
                echo "<h2 id='login-error'>Username or password is wrong!</h2>";
            }
        ?>                                     
                                            
        </div>                   
    </main>

    <footer>
        <p>Copyright &copy; Cole Johnson</p>
    </footer>

</body>
</html>

