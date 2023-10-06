<?php
require __DIR__.'/../vendor/autoload.php';
require_once('./config.php');

use carry0987\LineLogin as LineLogin;

define('TWENTY_DAYS', time()+3600*24*20);

if (!session_id()) {
    session_start();
}

$code = $_GET['code'];
$state = $_GET['state'];
$session_state = $_SESSION['_line_state'] ?? null;
unset($_SESSION['_line_state']);

if ($session_state !== $state) {
    exit('Access Denied');
}

$Line = new LineLogin\LineController(CLIENT_ID, CLIENT_SECRET, REDIRECT_URI, SCOPE);

$access_token = $Line->getAccessToken($code);
//$_SESSION['access_token'] = $access_token;
setcookie('access_token', $access_token, TWENTY_DAYS);
$user = $Line->getLineProfileWithAccessToken($access_token);

// print_r($access_token);
// echo '$code= ' . $code . '<br /><br />';
// echo '$state= ' . $state . '<br /><br />';

echo 'User Profile: <br />';
var_dump($user);
