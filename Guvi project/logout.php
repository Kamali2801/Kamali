<?php
@include 'config.php';
session_start();
session_unset();
session_destroy();

header('localtion:logic_form.php');
?>