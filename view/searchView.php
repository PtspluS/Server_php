<?php $title = "Signup" ?>


<?php  ob_start();
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php?action=login");
    exit;
}
?>



<?php $content = ob_get_clean(); ?>

<?php require("/view/template.php"); ?>
