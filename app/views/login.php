<html>
<head>
<title>My Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<div class="container my-4">
<?php $LAVA =& lava_instance(); ?>
<?php echo $LAVA->form_validation->errors(); ?>
    <h1>Login</h1>

    <?php if (isset($success_message)) { ?>
						<div class="alert alert-success"><?php echo $success_message; ?></div>
					<?php } ?>
					<?php if (isset($error_message)) { ?>
						<div class="alert alert-danger"><?php echo $error_message; ?></div>
					<?php } ?>
    <form action="<?php site_url('/login');?>" method="post">
         <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <a href="<?=site_url('/register')?>">Don't have an account? Register Now</a>
</div>

</body>
</html>