<?php $__env->startSection('title'); ?>
  <title>Tiket</title>

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

<h3>Terima Kasih</h3>
<h4>1</h4>
<h4>1</h4>
<h4>1</h4>
<h4>1</h4>
<h4>1</h4>
<h4>1</h4>
<h4>1</h4>
<h3>Dimohon untuk membawa dokumen identitas blablabla</h3>
			
<div class="two fields">
				<div class="field">
					<button class="field ui fluid large blue submit button" type=submit>Print</button>
				</div>
				<div class="field">
					<button class="field ui fluid large grey submit button" type=submit>Kembali</button>
				</div>
			</div>
<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.resmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>