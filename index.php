<?php

require("controllers/mainController.php");

if(isset($_GET['action'])) {
    echo $_GET['action'];
    if ($_GET['action'] == 'login') {
        loginView();
    } elseif ($_GET['action'] == 'search') {
        searchView();
    }
}else {
    mainView();
}