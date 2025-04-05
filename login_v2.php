<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<link rel="stylesheet" href="libs/css/main.css">

<div class="login-page">
    <div class="text-center">
        <img src="img/logo.JPG" alt="Logo de la Ferretería" style="width: 120px; margin-bottom: 15px;">
        <h1>Welcome</h1>
        <p>Sign in to start your session</p>
    </div>
    <?php echo display_msg($msg); ?>
    <form method="post" action="auth_v2.php" class="clearfix">
        <div class="form-group">
            <label for="username" class="control-label">Username</label>
            <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info pull-right">Login</button>
        </div>
    </form>
</div>

<?php include_once('layouts/header.php'); ?>
