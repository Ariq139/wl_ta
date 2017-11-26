<?php $__env->startSection('title'); ?>
  <title>Reservasi - Pembayaran</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
</br></br></br></br></br>
			<div class="ui large breadcrumb">
				<a class="section" href="<?php echo e(url('/')); ?>">Home</a>
				<i class="right chevron icon divider"></i>
				<a class="section">Reservasi</a>
				<i class="right chevron icon divider"></i>
				<a class="section">Cari</a>
				<i class="right chevron icon divider"></i>
				<a class="section">Detail Tamu</a>
				<i class="right chevron icon divider"></i>
				<a class="section">Konfirmasi</a>
				<i class="right chevron icon divider"></i>
				<div class="active section">Pembayaran</div>
			</div></br></br></br>

<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.resmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>