<?php

require("./controllers/mainController.php");

if($_GET["action"] == "loggin"){

} elseif ($_GET["action"] == "search"){

}
// by default
else {
    mainView();
}
