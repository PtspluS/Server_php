<?php $title = ""; ?>

<?php ob_start(); ?>
<!-- Content -->

<h1>Hello world !!!</h1>

<?php $content = ob_get_clean(); ?>

<?php require("/view/template.php"); ?>