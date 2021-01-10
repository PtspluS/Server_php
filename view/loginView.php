<?php $title = "Login" ?>
<?php $description = "" ?>

<?php  ob_start(); ?>
<div class="w3-container w3-pale-blue">
    <div class="w3-card-4 w3-display-middle w3-round ">
        <div class="w3-container w3-justify w3-green">
            Sign-in
        </div>
        <form class="w3-container w3-justify">
            <label class="w3-text-teal"><b>Email</b></label>
            <input class="w3-input w3-animate-input" type="email" style="width:30%">
            <label class="w3-text-teal"><b>Password</b></label>
            <input class="w3-input w3-animate-input" type="password" style="width:30%">
        </form>
        <div class="w3-center">No account ? <a href="./index.php?action=signup">Register here in 5 minutes !</a></div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("/view/template.php"); ?>
