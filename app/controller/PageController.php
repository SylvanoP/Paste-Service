<?php

$currPageName = explode('_',$currPage)[1];

include 'app/notifications/sendAlert.php';

if(strpos($currPage,'front_') !== false){
    include 'resources/additional/head.php';
    include 'resources/additional/navbar.php';
}
