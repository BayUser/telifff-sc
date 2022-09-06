<?php

error_reporting(0);
require("heart.php");

$blind = $_SESSION["blndsc"];
$url = "https://dumpor.com/v/$blind";
$ig = str_get_html(file_get_contents($url));


$blindguard = $ig->find("div[class='user__img']", 0)->style;
$pp = substr($blindguard, 27, -4);

$blind1 = $ig->find("div[class='user__info-desc']", 0);
$bio = substr($blind1, 0, -13);

$gonderi = $ig->find("a[class='btn btn-dark text-white m-1']", 0)->plaintext;
$takipci = $ig->find("a[class='btn btn-light m-1']", 0)->plaintext;
$takip = $ig->find("a[class='btn btn-light m-1']", 1)->plaintext;

$fff4 = $ig->find("img[class='content__img']", 0)->src;



$f_count = $ig->find("a[class='btn btn-light m-1']", 1);

$follower_count = substr($f_count, 0, -13);
$name = $ig->find("div[class='user__title']", 0)->childNodes(0)->plaintext;

$blindguardian = $ig->find("img[class='content__img']", 0)->alt;



$tf = $ig->find("img[class='content__img']", 0)->src;


    /////////////////////////////////////////////////////////////
    ////////////////CODED BY BLİND GUARDİAN/////////////////////////////////////////
    ////////////////////////////////////////////////////////////
