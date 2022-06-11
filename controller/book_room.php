<?php
    include "connections.php";
    session_start();



    if(isset($_POST['book'])){
        $surname = ucwords(htmlspecialchars(stripslashes($_POST['surname'])));
        $other_names = ucwords(htmlspecialchars(stripslashes($_POST['other_names'])));
        $phone = htmlspecialchars(stripslashes($_POST['phone_number']));
        $email = htmlspecialchars(stripslashes($_POST['email_address']));
        $gender = ucwords(htmlspecialchars(stripslashes($_POST['gender'])));
        $address = ucwords(htmlspecialchars(stripslashes($_POST['home_address'])));
        $room = ucwords(htmlspecialchars(stripslashes($_POST['room_type'])));
        $check_in = htmlspecialchars(stripslashes($_POST['check_in']));
        $check_out = htmlspecialchars(stripslashes($_POST['check_out']));

        $booking = $connectdb->prepare("INSERT INTO reservations (surname, other_names, phone_number, email_address, gender, home_address, room_type, check_in, check_out) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $booking->bind_param("sssssssss", $surname, $other_names, $phone, $email, $gender, $address, $room, $check_in, $check_out);
        $booking->execute();

        if($booking){
            $_SESSION['successful'] = "Thanks for making a reservation! You will be contacted shortly for details of payment";
            header("Location: ../index.php");
        }else{
            echo "error";
        }

    }

?>