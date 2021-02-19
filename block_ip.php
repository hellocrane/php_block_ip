<?php
//// Add full IP or range as shown below. ////
$blocked_ips = array(
    "1.2.3.4",
    "5.6.7.8"
);

$sip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

if (in_array(substr($sip, 0, strrpos($sip, '.')), $blocked_ips) || in_array($sip , $blocked_ips)){
    //// Add whatever code you want for banned IPs ////
    die("Your IP has been banned from this page");
}
?>