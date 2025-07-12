<?php
session_start();
unset($_SESSION['rename']);
session_destroy();
header("location:login_form.php");
?>