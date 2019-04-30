<?php
try{
    if (!isset($_POST['name']) || !isset($_POST['email'])  || !isset($_POST['message'])){
        http_redirect('http://apas1.com');
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    $headers = "From: $email \r\n";

    if ( mail('info@apas1.com','RFQ',$message, $headers)){
        http_redirect('http://apas1.com');
    }else{
        http_redirect('http://apas1.com');
    }
}catch(\Exception $e){

}
