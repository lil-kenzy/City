<?php

error_reporting(0);

session_start();

function get_user_ip(){
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
  //whether ip is from proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
  //whether ip is from remote address
  else
    {
      $ip_address = $_SERVER['REMOTE_ADDR'];
    }
  $_SESSION['ip'] = $ip_address;

  $_SESSION['usragent'] =  $_SERVER['HTTP_USER_AGENT'];


}

get_user_ip();