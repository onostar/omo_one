<?php
    include "connections.php";
    session_start();

    $_SESSION['success'] = "";
    $_SESSION['error'] = "";

    if(isset($_GET['photo'])){
        $photo = $_GET['photo'];
        $delete_project = $connectdb->prepare("DELETE FROM gallery WHERE media_id = ?");
        $delete_project->bind_param("i", $photo);
        $delete_project->execute();
        // $delete = $connectdb->query($delete_project);
        if($delete_project){
             

            $_SESSION['success'] = "Photo Deleted!";
            header("Location: ../admin/admin.php");
        }else{
            $_SESSION['error'] = "Delete failed";
        }
    }
?>