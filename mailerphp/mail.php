<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contact@eberthscapital.com";
    $to = "contact@eberthscapital.com";
    $subject = $_POST["name"] . " wants to talk";
    $message = $_POST["message"];
    $headers = "From:" . $from . "\r\n";
    $headers .= 'Reply-To:' . $_POST["email"] . "\r\n";
    mail($to,$subject,$message, $headers);
    
    echo "
    <script>
      window.location='/'
    </script>";
?>