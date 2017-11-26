<?php $__env->startSection('title'); ?>

  <title>Reservasi</title>
  
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
				<div class="active section">Reservasi</div>
			</div></br></br></br>
				<form action="reserve/process" method="POST">
				<div class="two fields">
						<div class="field">
								<label>Jika tanggal kembali tidak diisi, otomatis akan menjadi tiket sekali jalan.</label>
									<div class="ui calendar" id="start" name="start">
										<div class="ui input left icon">
											<i class="calendar icon"></i>
											<input type="text" placeholder="Tanggal Berangkat" required>
										</div>
									</div>
									<div class="ui calendar" id="end" name="end">
										<div class="ui input left icon">
											<i class="calendar icon"></i>
											<input type="text" placeholder="Tanggal kembali">
										</div>
									</div></br>
										<div class="two fields">
											<div class="field">
											<label>Dewasa</label>
												<select class="ui fluid search dropdown" id="dewasa" name="dewasa">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
												</select>
											</div>
										
										<div class="field">
										<label>Anak-anak</label>
												<select class="ui fluid search dropdown" id="anak" name="anak">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
												</select>
											</div>
										</div>
					
						<select class="ui search dropdown" id="asal" name="asal" required>
							<option value="">Asal Stasiun</option>
							<option value="lem">Lempuyangan</option>
							<option value="tug">Tugu</option>
					</select>
					<select class="ui search dropdown" id="tujuan" name="tujuan" required>
						<option value="">Tujuan Stasiun</option>
						<option value="bek">Bekasi</option>
						<option value="mgr">Manggarai</option>
					</select>
					</div>
					<div class="field">
					
					</div>
			</div>
		<div class="two fields">
			<div class="two fields">
				<div class="field">
					<button class="field ui fluid large teal submit button" type=submit>Cari</button>
				</div>
			</div>
		</div>
</form>
<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('scripts'); ?>
<script>
	$('select.dropdown')
		.dropdown()
	;
	$('.ui.radio.checkbox')
		.checkbox()
	;
	$('#start').calendar({
		type: 'date'
	});
	$('#end').calendar({
		type: 'date'
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.resmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>