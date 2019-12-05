<?php
    function random_pic()
    {
        $imagesDir = 'uploads/';
        $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        $randomImage = $images[array_rand($images)];
        return $randomImage;
    }

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cloud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Cloud</span> the Pom</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main id="showcase">               
        <h1>Photo's of <span class="highlight">Cloud</span></h1>
        <div class="photo-container">
            <div class="faders">
                <div class="left"></div>
                <div class="right"></div>
            </div>
    
            <div class="items">
                <div class="entry">
                    <!-- <p class="name">Cloud Snow</p> -->
                    <img src="<?php echo random_pic() ?>" alt="Cloud-Snow"> 
                    <!-- <p class="quote">"Cute snow dog!"</p> -->
                </div>
    
                <div class="entry">                       
                    <img src="<?php echo random_pic() ?>" alt="Cloud-Snow">                       
                </div>
                
                <div class="entry">                       
                    <img src="<?php echo random_pic() ?>" alt="Cloud-Snow">                        
                </div>
    
                <div class="entry">                       
                    <img src="<?php echo random_pic() ?>" alt="Cloud-Snow"> 
                </div>
    
                <div class="entry">
                    <img src="<?php echo random_pic() ?>" alt="Cloud-Snow"> 
                </div>
    
                <div class="entry">
                    <img src="<?php echo random_pic() ?>" alt="Cloud-Snow"> 
                </div>
                
                <div class="entry">
                    <img src="<?php echo random_pic() ?>" alt="Cloud-Snow"> 
                </div>
    
                <div class="entry">
                    <img src="<?php echo random_pic() ?>" alt="Cloud-Snow"> 
                </div>
    
            </div>
        </div>
                   
    </main>

    <footer>
        <p>Copyright &copy; Cole Johnson</p>
    </footer>
</body>
</html>