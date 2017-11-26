<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
 <?php echo $__env->yieldContent('title'); ?>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/calendar.min.css">

  <?php echo $__env->yieldContent('style'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo e(asset('js/semantic.min.js')); ?>"></script>
	<script src="http://127.0.0.1:8000/js/calendar.min.js"></script>
</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="/" class="header item">
        <!--<img class="logo" src="Fixed%20Menu%20Example%20-%20Semantic_files/logo.png">-->
        Nama
      </a>
      <a href="<?php echo e(url('/')); ?>" class="item">Home</a>
      <a class="item" href="<?php echo e(url('/reserve')); ?>">Reservasi</a>
		<a class="item" href="<?php echo e(url('/about')); ?>">Tentang Kami</a>
			<div class="right menu">
					<div class="item">
						<a class="ui button" href="<?php echo e(url('/login')); ?>">Log in</a>
					</div>
					<div class="item">
						<a class="ui primary button" href="<?php echo e(url('/register')); ?>">Register</a>
					</div>
				</div>
			</div>
		</div>
		<div class="ui container">
			<div class="ui form">
				<?php echo $__env->yieldContent('content'); ?>
			</div>
		</div>

  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
	<?php echo $__env->yieldContent('scripts'); ?>


</body></html>