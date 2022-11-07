<?php
include ('config.php');
session_start();
if(isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" contacts="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>admin page create by Win Coder</title>
    <link rel="stylesheet" type="text/css" href="ccs/style.css">
</head>
<body>
    <div class="container">
        <div class ="content">
            <h3><i>hi</i><span>admin</span></h3>
            <h1>welcome<span><?php echo $_SESSION['admin_name']?></span></h1>
            <a href="login_form.php">login</a>
            <a href="register_form.php">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
</body>
</html>