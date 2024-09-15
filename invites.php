<?php

require_once 'app/require.php';

$user = new UserController;

Session::init();

if (!Session::isLogged()) { 
    Util::redirect('/login.php'); 
}

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>velocity - invites</title>
    <link rel="stylesheet" href="./files/app.css">
    <script src="./files/jquery.min.js.download"></script>
    <script src="./files/socket.io.js.download"></script>
    <link rel="stylesheet" href="./files/toastr.min.css">
    <script src="./files/toastr.min.js.download"></script>
    <style>
        .toast {
            background: black;
            box-shadow: none !important;
        }
        .toast-error {
            border: 1px solid red;
        }
        .toast-success {
            border: 1px solid red;
        }
    </style>
    <style>
        input[type="text"] {
            padding: 2px !important;
            margin: 5px !important;
            width: 150px !important;
            display: inline-block;
        }
        button {
            background: black;
            border: 1px solid rgb(255, 255, 255);
            padding: 2px !important;
            margin: 0 !important;
            width: 150px !important;
            display: inline-block;
            color: rgb(180, 180, 180);
        }
        .inner {
            border-top: 0 !important;
            border-bottom: 0 !important;
        }
    </style>
</head>

<body>

    <div class="main">
        <div class="panel-card" style="min-height: 125px">
            <div class="header">
                <span>invites</span>
                
                
            </div>
        </div>
    </div>

    <div class="controls">
        <a href="/logout.php">log out</a>
    </div>

    <div class="user-controls">
        <a href="./" class="panel-link">panel</a>
    </div>

<iframe name="__privateStripeMetricsController1540" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="./files/m-outer-fd3c67f2efa9f22f2ecd16b13f2a7fb3.html" aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe></body>
</html>
