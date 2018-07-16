<div class="container">
<?php echo form_open('users/login'); ?>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6 text-center">
<h1 class="text-center"><?php echo $title; ?></h1>
<div class="form-group">
<input type="text" name="username" class="form-control" placeholder="Enter Username">
</div>

<div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Enter Your Password">
</div>
<button type="submit" class="form-control btn btn-primary" name="btn">LogIn </button>
</div>
<div class="col-sm-3"></div>
</div>
<?php form_close(); ?>
</div>
