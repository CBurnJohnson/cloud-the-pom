<?php

    session_start();

    if (isset($_SESSION['isLoggedIn'])){
        // Does nothing cause you're logged in allowed to view page
    }
    else {
        // Redirects user so they can't see page since they aren't logged in
        header('Location: index.php?isBlock=true');
    }


    // Uploads image to folder
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: picture-library.php?uploadsuccess");
                }
                else {
                    echo "Your file is too big!";
                }
            }
            else {
                echo "There was an error uploading your file!";
            }
                
        }
        else {
            echo "You cannot upload files of this type!";
        }
    }
?>