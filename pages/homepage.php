<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="pages/assets/css/style.css">


</head>
<body>

<div class="container">
    <div class="info">
        <h1> <font color ="#8b0000">To-do Task Management Application </center></h1>
    </div>
</div>
<div class="form">
    <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
    <form class="register-form" action="index.php?page=accounts&action=store" method="POST">
        <input type="text" name="fname" placeholder="firstname"/>
        <input type="text" name="lname" placeholder="lastname"/>
        <input type="text" name="email" placeholder="email address"/>
        <input type="text" name="phone" placeholder="Phone Number"/>
        <input type="text" name="birthday" placeholder="Birthday"/>
        <input type="text" name="gender" placeholder="Gender"/>

        <input type="password" name="password"placeholder="Password"/>

        <button>Create</button>
        <p class="message">Registered Already? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="index.php?page=accounts&action=login" method="POST">
        <input type="text" name="email" placeholder="email address"/>
        <input type="password" name="password"placeholder="Password"/>
        <button>login</button>
        <p class="message">Notregistered? <a href="#">Create an account</a></p>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script  src="pages/assets/js/index.js"></script>
</body>
<style>
    body  {
        background-image: url("2.jpg");
        background-color: #cccccc;
    }

</style>
</html>
