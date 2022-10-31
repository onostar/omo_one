<?php
    include "connections.php";
    session_start();
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";

    if(isset($_POST['post_media'])){
        $subject = ucwords(htmlspecialchars(stripslashes($_POST['title'])));
        $photo = $_FILES['photo']['name'];
        $photo_folder = "../media/".$photo;
        $photo_size = $_FILES['photo']['size'];
        
        $check_status = "SELECT * FROM gallery WHERE title = '$subject'";
        $check = $connectdb->query($check_status);

        if($check->num_rows > 0){
            $_SESSION['error'] = "$subject already posted!";
            header("Location: ../views/admin.php");
        }else{
            if($photo_size > 300000){
                $_SESSION['error'] = "Error! Image size too large";
                header("Location: ../admin/admin.php");
            }else{
                if(move_uploaded_file($_FILES['photo']['tmp_name'], $photo_folder)){
                    $insert_news = "INSERT INTO gallery (title, photo) VALUES('$subject', '$photo')";
                    $insert = $connectdb->query($insert_news);

                    if($insert){
                        $_SESSION['success'] = "$subject posted successfully!";
                        /* send notification and email */
                        //get receipients and send message
                        
                        header("Location: ../admin/admin.php");
                    }else{
                        $_SESSION['error'] = "failed to post image";
                        header("Location: ../admin/admin.php");
                    }
                }else{
                    $_SESSION['error'] = "failed to upload image";
                    header("Location: ../admin/admin.php");
                }
            }
        }
    }   
    

?>