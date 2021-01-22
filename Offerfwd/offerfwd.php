<?php
/**
 * Plugin Name: Offerfwd
 * Version: 1.0.0
 * Plugin URI: https://conx.opt-in.net
 * Description: Publisher Integration - Opt-In Ad Monetization
 * Author: Opt-Intelligence
 * Requires at least: 3.0
 * Tested up to: 5.6
 *
 * Text Domain: offerfwd
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Opt-Intelligence
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-offerfwd.php';
require_once 'includes/class-offerfwd-loader.php';
require_once 'includes/class-offerfwd-deactivator.php';
require_once 'includes/class-offerfwd-i18n.php';
require_once 'includes/class-offerfwd-activator.php';


function offerfwd_joix(){

ob_start();

$jurl = sanitize_text_field($_REQUEST['jurl']);
$email = sanitize_email($_REQUEST['email']);
$fname = sanitize_text_field($_REQUEST['fname']);
$lname = sanitize_text_field($_REQUEST['lname']);
$hphone = sanitize_text_field($_REQUEST['hphone']);
$pid = sanitize_text_field($_REQUEST['pid']);


$src_url = "'https://adfwd.com/oi/joix.php?jurl=".$jurl."&email=".$email."&fname=".$fname."&lname=".$lname."&hphone=".$hphone."&pid=".$pid."'";

?>

    <iframe id="iframeOffers" src="<?php echo esc_url($src_url); ?>" width="100%" height="1000" style="border:0px;"></iframe>

    <script language="javascript">
	
	  var src_x = <?php echo $src_url; ?>
	
      window.onload=setTimeout(function(){

			document.getElementById('iframeOffers').src = src_x;
      },100);
    </script>

<?php

    return ob_get_clean();
}

add_shortcode('offerfwd_joix','offerfwd_joix');

?>