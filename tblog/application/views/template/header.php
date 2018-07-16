<!DOCTYPE html>
<html lang="en">
<head>
  <title>TBlog</title>
  <meta charset="utf-8">
  <meta name="keywords" content="HTML, TOURIST, TOURISM, NIGERIA, BOOTSTRAP, CENTERS, JAVASCRIPT, CSS3">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Tobi Samuel" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANuHSNAdk06MmGeNTzu6Scipfh9Dc_Ngc&callback=myMap"></script>
  <script src="<?php echo base_url(); ?>assets/js/agency.min.js"></script>
  
  <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <!--<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-beta.1/decoupled-document/ckeditor.js"></script>-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <link href="<?php echo base_url(); ?>assets/css/agency.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/slide.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.common.js"></script>
  </head>

<body data-spy="scroll" data-target =".navbar"  class="page" id="page-top">
<script>
  $(function() {
  var app = new Vue {
    el : "#app2000",
    data : {
      message: "Upload"
    }
  }
});
  </script>
<!--
  //only use when you want to hide your sidebar for second.
  <script>
function maindiv() {
  alert("hello");
 
    document.getElementById("mainNav").style.display="none";
}
</script>-->

  <!-- Navigation -->
  <nav class="navbar navbar-expand-sm bg-dark  navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Tour</a>
      <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto cli">
          <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>"> Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#contact">Contact</a>
          </li>
    <li onClick="maindiv()"  class="nav-item">
      <a onClick="maindiv" id="main1" class="nav-link" href="<?= base_url(); ?>posts"> Blog </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        About Us<span class="caret"></span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url(); ?>#about"> About 1</a>
        <a class="dropdown-item" href="<?= base_url(); ?>about"> About 2</a>
        </div>
    </li>
    <?php if(!$this->session->userdata('logged_in')) : ?>
    <li class="nav-item">
      <a  class="nav-link" href="<?= base_url(); ?>users/register">Register </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login <span class="caret"></span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item"  data-toggle="modal" data-target="#myModal" href="#"> Admin Login</a>
        <a class="dropdown-item" href="<?= base_url(); ?>users/login"> Member Login</a>
        </div>
    </li>
<?php endif; ?>
<?php if($this->session->userdata('logged_in')) : ?>
<li class="nav-item">
      <a  class="nav-link" href="<?= base_url(); ?>posts/create"> Create Posts</a>
    </li>
    <li class="nav-item">
      <a  class="nav-link" href="<?= base_url(); ?>categories/create"> Create Categories</a>
    </li>
    <li class="nav-item">
      <a  class="nav-link" href="<?= base_url(); ?>categories">Categories</a>
    </li>
    <li class="nav-item">
      <a  class="nav-link" href="<?= base_url(); ?>users/logout">Logout </a>
    </li>
<?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
<div class="container" id="con">
  <?php if($this->session->flashdata('user_registered')): ?>
  <?php echo '<div class="alert alert-success alert-dismissible">'.$this->session->flashdata('user_registered').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('post_created')): ?>
  <?php echo '<div class="alert alert-success alert-dismissible">'.$this->session->flashdata('post_created').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('post_updated')): ?>
  <?php echo '<div class="alert alert-success alert-dismissible ">'.$this->session->flashdata('post_updated').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('post_deleted')): ?>
  <?php echo '<div class="alert alert-success alert-dismissible">'.$this->session->flashdata('post_deleted').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('category_created')): ?>
  <?php echo '<div class="alert alert-success alert-dismissible">'.$this->session->flashdata('category_created').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('user_loggedin')): ?>
  <?php echo '<div class="alert alert-success alert-dismissible">'.$this->session->flashdata('user_loggedin').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('login_failed')): ?>
  <?php echo '<div class="alert alert-danger alert-dismissible">'.$this->session->flashdata('login_failed').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('user_loggedout')): ?>
  <?php echo '<div class="alert alert-danger alert-dismissible">'.$this->session->flashdata('user_loggedout').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('category_deleted')): ?>
  <?php echo '<div class="alert alert-danger alert-dismissible">'.$this->session->flashdata('category_deleted').'<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; ?>
  <?php endif; ?>
</div>
