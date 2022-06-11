<?php
    // include "connections.php";
    // session_start();

    $_SESSION['success'] = "";
    $_SESSION['error'] = "";
    require "PHPMailer/PHPMailerAutoload.php";
    require "PHPMailer/class.phpmailer.php";
    require "PHPMailer/class.smtp.php";

    if(isset($_POST['send_message'])){
        $full_name = ucwords(htmlspecialchars(stripslashes($_POST['full_name'])));
        $email = htmlspecialchars(stripslashes($_POST['user_email']));
        $phone = htmlspecialchars(stripslashes($_POST['phone']));
        $message = htmlspecialchars(stripslashes($_POST['message']));
        // $dob = date("jS M, Y", strtotime($dob));
        // echo $description;
        /* send mail to admin */
        function smtpmailer($to, $from, $from_name, $subject, $body)
        {
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true; 
    
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'www.windyhillhotels.com';
            $mail->Port = 465; 
            $mail->Username = 'admin@windyhillhotels.com';
            $mail->Password = 'Applied1010.';
            $mail->IsHTML(true);
            $mail->From="admin@windyhillhotels.com";
            $mail->FromName=$from_name;
            $mail->Sender=$from;
            $mail->AddReplyTo($from, $from_name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress($to);
            $mail->AddAddress('onostarkels@gmail.com');
            $mail->AddAddress('onostarmedia@gmail.com');
            if(!$mail->Send())
            {
                $error ="Please try Later, Error Occured while Processing...";
                return $error; 
            }
            else 
            {
                
                echo "<script>
                alert('Thanks for your message!. We will get in touch shortly');
                window.open('index.php', '_parent');
                </script>";
                // header("Location: index.html");
                // return $error;
            }
        }
        
        $to   = 'windyhillhotels100@gmail.com';
        $from = 'admin@windyhillhotels.com';
        $from_name = $full_name;
        $name = 'Windy Hill User Query';
        $subj = 'Windy Hill user Query';
        $msg = "<h2>New registration from $first_name $last_name</h2>
        <p>Below are the information of the user</p> \n
        <div class='user_infos' style='display:flex; align-items:center; justify-content:space-between'>
            <div class='data'>
                <h3>Full Name:</h3>
                <p>$full_name</p>
            </div>
            <div class='data'>
                <h3>Phone Number:</h3>
                <p>$phone</p>
            </div>
            <div class='data'>
                <h3>Email Address:</h3>
                <p>$email</p>
            </div>
            <div class='data'>
                <h3>Message:</h3>
                <p>$message</p>
            </div>
        </div>";
        
        $error=smtpmailer($to, $from, $name ,$subj, $msg);
        
           
            
    }


?>