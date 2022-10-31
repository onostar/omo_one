<?php
    include "connections.php";
    session_start();

    $_SESSION['success'] = "";
    $_SESSION['error'] = "";


    if(isset($_POST['login'])){
        $username = ucwords(htmlspecialchars(stripslashes($_POST['username'])));
        $password = htmlspecialchars(stripslashes($_POST['user_password']));

        $get_user = "SELECT * FROM users WHERE username = '$username' AND user_password = '$password'";
        $result = $connectdb->query($get_user);

        if($result->num_rows > 0){
            $_SESSION['user'] = $username;
            while($user = $result->fetch_assoc()){

                if($username === "Admin"){
                    $_SESSION['success'] = "Welcome Admin";
                    header("Location: ../admin/admin.php");
                }else{
                    $_SESSION['success'] = "Welcome " . $user['last_name'];
                    header("Location: ../views/users.php");
                }
            }
        }else{
            $_SESSION['error'] = "Invalid username or password";
            header("Location: ../admin/index.php");
        }
    }