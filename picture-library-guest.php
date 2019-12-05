<?php
    session_start();

    if ($_SESSION['isLoggedIn'] == 'guest') {
        // Takes them to guest picture-library
       
    }
    else {
        // Redirects user so they can't see page since they aren't logged in
        header('Location: index.php?isBlock=true');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Picture Library</title>
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>    

    <main id="picture-library">
        <h1 class="guest-title">Guest Library</h1>
        <div class="picture-container-guest">
                <?php 
                    $folder = "uploads/";
                    if (is_dir($folder)) {
                        if ($open = opendir($folder)) {
                            while (($file = readdir($open)) !=false) {
                                if ($file == '.' || $file == '..') continue;
                                echo '<img src="uploads/'.$file.'" width = "200" height = 200 >';
                            }
                            closedir($open);
                        }
                    }
                ?>           

        </div>
    </main>

    <footer>
        <p>Copyright &copy; Cole Johnson</p>
    </footer>
</body>
</html>