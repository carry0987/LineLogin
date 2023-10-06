<?php
require __DIR__.'/../vendor/autoload.php';
require_once('./config.php');

use carry0987\LineLogin as LineLogin;

if (!session_id()) {
    session_start();
}

$Line = new LineLogin\LineController(CLIENT_ID, CLIENT_SECRET, REDIRECT_URI, SCOPE);

$user = null;
if (isset($_COOKIE['access_token'])) {
    $access_token = $_COOKIE['access_token'];
    // Fetch user profile
    $user = $Line->getLineProfileWithAccessToken($access_token);
} else {
    echo 'No access_token found';
}

/*
print_r($access_token);
echo '$code= ' . $code . '<br /><br />';
echo '$state= ' . $state . '<br /><br />';
*/
echo 'User Profile: <br />';
var_dump($user);
