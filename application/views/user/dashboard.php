<!DOCTYPE html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width, initial-scale=1">
        <title>Dashboard</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel ="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
    <h1>Dashboard</h1>
    <?php if(isset($_SESSION['success'])){ ?>
            <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
        <?php
         } ?>
    <?php
    echo validation_errors('<div class="alert-danger">', '</div>')
    ?>
        <div class="col-lg-5 col-lg-offset-2">
            HELLO, <?php echo $_SESSION['username']; ?>, <a href="<?php base_url(); ?>logout">Logout</a>
        </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>