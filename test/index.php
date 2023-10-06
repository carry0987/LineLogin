<?php
require __DIR__.'/../vendor/autoload.php';
require_once('./config.php');

use carry0987\LineLogin as LineLogin;

if (!session_id()) {
    session_start();
}

$state = sha1(time());
$_SESSION['_line_state'] = $state;

$Line = new LineLogin\LineController(CLIENT_ID, CLIENT_SECRET, REDIRECT_URI, SCOPE);

// Create Login Link
$url = $Line->lineLogin($state);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="margin: 10px 0;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>LineLogin Demo (API v2.1)</h1>
        </div>
        <div class="panel-body">
            <p>Please Login</p>
            <a href="<?=$url;?>">
                <img src="img/btn_login_base.png">
            </a>
        </div>
    </div>
</div>
</body>
</html>
