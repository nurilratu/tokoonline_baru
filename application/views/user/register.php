<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>FLAD.EO</h1>
</div>
    <?php if(isset($_SESSION['success'])){ ?>
            <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
        <?php
         } ?>
    <?php
    echo validation_errors('<div class="alert-danger">', '</div>')
    ?>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Sign Up</h1>
    <form action="" method="post">
      <div class="input-container">
        <input type="text" id="username" name="username" required="required"/>
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" name="password" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <!-- <div class="input-container">
        <input type="password" id="password2" name="password2" required="required"/>
        <label for="password2">Konfirmasi Password</label>
        <div class="bar"></div>
      </div> -->
      <div class="input-container">
        <input type="text" id="email" name="email" required="required"/>
        <label for="email">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="alamat" name="alamat" required="required"/>
        <label for="alamat">Alamat</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="no_telp" name="no_telp" required="required"/>
        <label for="no_telp">No Telpon</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="register"><span>Sign Up</span></button>
      </div>
      <div class="footer">Already have an account? Sign in!<a href="login"></a></div>
    </form>
  </div>
  
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="<?php echo base_url(); ?>assets/js/index.js"></script>
</body>
</html>
