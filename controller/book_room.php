<?php
    include "connections.php";
    session_start();
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";
    require "../PHPMailer/PHPMailerAutoload.php";
    require "../PHPMailer/class.phpmailer.php";
    require "../PHPMailer/class.smtp.php";


    if(isset($_POST['book'])){
        $surname = ucwords(htmlspecialchars(stripslashes($_POST['surname'])));
        $other_names = ucwords(htmlspecialchars(stripslashes($_POST['other_names'])));
        $phone = htmlspecialchars(stripslashes($_POST['phone_number']));
        $email = htmlspecialchars(stripslashes($_POST['email_address']));
        $gender = ucwords(htmlspecialchars(stripslashes($_POST['gender'])));
        $address = ucwords(htmlspecialchars(stripslashes($_POST['home_address'])));
        $location = ucwords(htmlspecialchars(stripslashes($_POST['room_location'])));
        $room = ucwords(htmlspecialchars(stripslashes($_POST['room_type'])));
        $check_in = htmlspecialchars(stripslashes($_POST['check_in']));
        $check_out = htmlspecialchars(stripslashes($_POST['check_out']));

        /* $booking = $connectdb->prepare("INSERT INTO reservations (surname, other_names, phone_number, email_address, gender, home_address, room_type, check_in, check_out) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $booking->bind_param("sssssssss", $surname, $other_names, $phone, $email, $gender, $address, $room, $check_in, $check_out);
        $booking->execute();

        if($booking){ */
            function smtpmailer($to, $from, $from_name, $subject, $body){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true; 
    
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'www.omo-one.com';
            $mail->Port = 465; 
            $mail->Username = 'booking@omo-one.com';
            $mail->Password = 'booking@omo-one';   
    
    
            $mail->IsHTML(true);
            $mail->From="booking@omo-one.com";
            $mail->FromName=$from_name;
            $mail->Sender=$from;
            $mail->AddReplyTo($from, $from_name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress($to);
            $mail->AddAddress('contact@omo-one.com');
            $mail->AddAddress('onostarkels@gmail.com');
            if(!$mail->Send())
            {
                $error ="Please try Later, Error Occured while Processing...";
                return $error; 
            }
            else 
            {
                
                $_SESSION['successful'] = "Thanks for making a reservation! You will be contacted shortly for details of payment";
            
            $error = $_SESSION['successful'];
            header("Location: ../index.php");
                return $error;
                /* unlink($ssn_folder);
                unlink($dlf_folder);
                unlink($dlb_folder); */
                // header("Location: index.html");
                // return $error;
            }
        }
        
        $to   = 'omo1apartments@gmail.com';
        $from = 'booking@omo-one.com';
        $from_name = "Omo one Apartments";
        $name = 'Omo one Apartment reservations';
        $subj = 'New Reservation';
        $msg = "<h2>New Reservation from $surname $other_names</h2>
        <p>Below are the details of the Customer</p> \n
        <div class='user_infos'>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>First Name:</h3>
                <p>$surname</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Last Name:</h3>
                <p>$other_names</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Phone Number:</h3>
                <p>$phone</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Email Address:</h3>
                <p>$email</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Full address:</h3>
                <p>$address</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Gender:</h3>
                <p>$gender</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Location:</h3>
                <p>$location</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Room selected:</h3>
                <p>$room</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Proposed check in date:</h3>
                <p>$check_in</p>
            </div>
            <div class='data' style='display:flex; gap:2rem; text-align:center'>
                <h3>Proposed check out date:</h3>
                <p>$check_out</p>
            </div>
        </div>";
        
        $error=smtpmailer($to, $from, $name ,$subj, $msg);

    }
    
        /* }else{
            echo "error";
        } */

    

?>