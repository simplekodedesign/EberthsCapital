<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contact@eberthscapital.com";
    $to = "danielgaiden@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from . "\r\n";
    $headers .= 'Reply-To: diegosalazargm@gmail.com' . "\r\n";
    mail($to,$subject,$message, $headers);
    
    echo "
    <script>
      window.location='/'
    </script>"
?>