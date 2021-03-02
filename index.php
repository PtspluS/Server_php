<?php
error_reporting(E_ALL);
/*
 * MVC Model :
 * All start with the index.php
 *
 *                                              +---------------->model.php
 *                                              |                     +
 *                                              |                     |
 * index.php +--------------> mainController.php|                     |
 *                                              |                     |
 *                                              |                     v
 *                                              +---------------->/views/... +-------------->template.php
 *                                                                    ^                          ^
 *                                                                    |                          |
 *                                                                    |                          |
 *                                                                    +                          |
 *                                                               createSessions.php +------------+
 *
 *  */
require("\controllers\mainController.php");

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        loginView();
    } elseif ($_GET['action'] == 'search') {
        searchView();
    } elseif ($_GET['action'] == 'signup') {
        signupView();
    } elseif ($_GET['action'] == 'reset') {
        resetMDPView();
    }
} else {
    mainView();
}