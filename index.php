 <?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->authLogin(); // if user has logged in already then forward it to home.php

$message = NULL;
if (isset($_POST['loginBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];  

    $flag = $db->login($username, $password);
    if ($flag) {
        header("Location: http://localhost/PlasmaDonation/home.php");
        
    } else {
        $message = "Username of password was incorrect!";
    }
} 
$title = "Login";
include 'layout/_header.php';
?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>
    *{
        font-family: 'Roboto', sans-serif;
    }
    .loginButton{
        padding: 5px;
        font-size: 15px;
        color: white;
    }
    .textFieldInput{
        font-size: 15px;
    }
    .login-Heading{
        color: red;
        font-weight: 600;
        font-size: 40px;
    }
    .loginButton:hover{
        color: black;
    }
    .container{
        margin-top: 100px;
    }
    .text-fields{
        margin-top: 90px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-6 m-auto">
            <?php if (isset($message)) : ?>
                <div class="alert-danger"><?= $message; ?></div>
            <?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="col-md-6">
                        <img src="assets/security-icon.png" class="img img-responsive img-thumbnail">
                    </div>
                    <h1 class="login-Heading"> User Login </h1>
                </div>
                <div class="panel-body">
                    <form class="form-vertical" role="form" method="post" action="index.php">
                        <div class="form-group text-fields">
                            <input type="text" class="form-control textFieldInput" required="true" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" required="true" class="form-control textFieldInput" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="loginBtn" class="loginButton btn btn-primary">Login</button>
                            <a href="users/" class="btn btn-warning loginButton">I do not have username or password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>