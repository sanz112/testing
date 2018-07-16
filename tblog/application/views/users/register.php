<div class="container">
<h2><?= $title; ?></h2>
<span id="valid"><?php echo validation_errors(); ?>
</span>
<?php echo form_open('users/register'); ?>
<div class="form-group">
    <label> Name </label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name">
</div>
<div class="form-group">
    <label> Zipcode (Optional) </label>
    <input type="text" class="form-control" name="zipcode" placeholder="Zip or Postal Code">
</div>
<div class="form-group">
    <label> UserName </label>
    <input type="text" class="form-control" name="username" placeholder="UserName">
</div>
<div class="form-group">
    <label> Email </label>
    <input type="email" class="form-control" name="email" placeholder=" Enter Your Email">
</div>
<div class="form-group">
    <label> Password </label>
    <input type="password" class="form-control" name="password" placeholder=" Password">
</div>
<div class="form-group">
    <label> Confirm Password </label>
    <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
</div>
<button type="submit" class="btn btn-secondary btn-md">Submit </button>
<?php form_close(); ?>
</div>