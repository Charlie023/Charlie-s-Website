<?php

$output = '';

if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['comments']) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

          require("PHPMailer/PHPMailer.php");
          require("PHPMailer/SMTP.php");
          require("PHPMailer/Exception.php");
          require("PHPMailer/OAuth.php");
          require("PHPMailer/POP3.php");
          $mail = new PHPMailer\PHPMailer\PHPMailer();
          $mail->setFrom('charlie.matanguihan23@gmail.com');
          $mail->addAddress($email);
          $mail->Subject = "Email from '.$email.' ";
          $mail->isHTML(true);
          $mail->Body = "
          '.$comments.'
          
          ";
        
          if($mail->send()){
              $output .= '<script language="javascript">;
                alert("Submitted!");
               </script>';
          }else{
                $output .= '<script language="javascript">;
                alert("Something went wrong! Please try again");
               </script>';
          }
          echo $output;


}else{
    echo '<script language="javascript">';
    echo 'alert("Error!")';
    echo '</script>';
}

?>