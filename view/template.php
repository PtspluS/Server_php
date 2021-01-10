<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="description" content=<?= $description ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Online stylesheet-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/view/src/style/style.css">
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="sidebar">
    <button class="w3-bar-item w3-button w3-large"
            onclick="w3_close()">Close &times;</button>
    <a href="/Server_php/index.php" class="w3-bar-item w3-button"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
    <a href="/Server_php/index.php?action=search" class="w3-bar-item w3-button"><i class="fa fa-search fa-fw" aria-hidden="true"></i>&nbsp; Search</a>
    <a href="/Server_php/index.php?action=login" class="w3-bar-item w3-button"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>&nbsp; Login</a>
</div>

<div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container w3-justify">
        <?= $content ?>
    </div>
</div>

<script>
    function w3_open() {
        document.getElementById("sidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("sidebar").style.display = "none";
    }
</script>
</body>
</html>