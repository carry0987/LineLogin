<?php
require __DIR__.'/../vendor/autoload.php';
require_once('./config.php');

use carry0987\LineLogin as LineLogin;

$Line = new LineLogin\LineController();

$access_token = 'eyJhbGciOiJIUzI1NiJ9.1APNrXXXxtjFuXDwG8klQ55-LpoIw4zXqyfs2W4zn6OjoSMANmxkqK4-FWK3a5GOK9nHMwd8jRSU8Syr9Qyltfb0mVL5RCUS7XsjB6Ybf7Q9DVCd75xMgI-JTQikO2O1g7Ucgq3svPsz5uMYl-V-5fPYr93ljQHc4GX3lwiWsVw.d5z4i5_wLyE0Zy729jO41wvJdZgxeLCa_JtTxOxDGvo';
$user = $Line->getLineProfileWithAccessToken($access_token);

echo 'User Profile: <br />';
var_dump($user);
