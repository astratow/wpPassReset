<?php
/*This is a naughty one. You add this function to your
 * wp-content/themes/your-current-them/functions.php file
 * It may delete some of your theme files, so be prepared to restore it.
 * the function creates new admin user called "Username" and password
 * "Password"*/
function wpb_admin_account(){
$user = 'Username';//this variable can be changed
$pass = 'Password';//this variable can be changed
$email = 'email@domain.com';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wpb_admin_account');
