<?php $title = "Company'ni"; ?>
<?php $description = "Welcome to company'ni, the main company in Wakanda in video."; ?>
<?php ob_start(); ?>
<!-- Content -->

<h1>Hello world !!!</h1>

<?php $content = ob_get_clean(); ?>

<?php require("/view/template.php"); ?>