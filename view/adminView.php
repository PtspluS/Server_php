<?php $title = "Admin console"; ?>

<?php
// Include config file
require_once "models/model.php";
require_once "createSession.php";

ob_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true) {
    header("location: index.php?action=login");
    exit;
}

$id = $_SESSION['id'];

$sql = "SELECT id_user FROM admins WHERE id_user = ?";

$isAdmin = false;

if($stmt = $mysqli->prepare($sql)){
    $stmt->bind_param("i",$id);

    if($stmt->execute()){
        $stmt->store_result();

        // is Admin
        if($stmt->num_rows == 1){
            $isAdmin = true;
        }
    }
}


if(!$isAdmin) {
    header("location: index.php?action=login");
    exit;
}

?>

<h1>
    Welcome to the admin console !
</h1>

<?php $content = ob_get_clean(); ?>
<?php require("view/template.php"); ?>
