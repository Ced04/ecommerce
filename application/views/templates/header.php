<!DOCTYPE html>
<html>
<head>
	<title>E-Commerce</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
	<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a href="<?php echo base_url(); ?>" class="navbar-brand">MyWEB</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Home<span></span><span></span></a></li>
		<li><a href="<?php echo base_url(); ?>about">About<span></span><span></span></a></li>
		<li><a href="<?php echo base_url(); ?>posts">Products<span></span><span></span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>cart">My Cart<span></span><span></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
	