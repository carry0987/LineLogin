<?php
require_once('../src/LineLogin/ConfigManager.php');
require_once('../src/LineLogin/LineAuthorization.php');
require_once('../src/LineLogin/LineProfile.php');
require_once('../src/LineLogin/LineController.php');
require_once('./config.php');

$Line = new carry0987\LineLogin\LineController();

$access_token = 'eyJhbGciOiJIUzI1NiJ9.1APNrXXXxtjFuXDwG8klQ55-LpoIw4zXqyfs2W4zn6OjoSMANmxkqK4-FWK3a5GOK9nHMwd8jRSU8Syr9Qyltfb0mVL5RCUS7XsjB6Ybf7Q9DVCd75xMgI-JTQikO2O1g7Ucgq3svPsz5uMYl-V-5fPYr93ljQHc4GX3lwiWsVw.d5z4i5_wLyE0Zy729jO41wvJdZgxeLCa_JtTxOxDGvo';
$user = $Line->getLineProfileWithAccessToken($access_token);

echo 'User Profile: <br />';
var_dump($user);
