<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<!-- Standard Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<!-- Site Properties -->
		<title>Reservasi</title>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/semantic.min.css">
		<link rel="stylesheet" href="http://127.0.0.1:8000/css/calendar.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.css" rel="stylesheet" type="text/css" />

		<style type="text/css">
			h2 {
				margin: 2em 0em;
			}
			.ui.container {
				padding-top: 5em;
				padding-bottom: 5em;
			}
		</style>
		<script src="http://127.0.0.1:8000/js/jquery.min.js"></script>
		<script src="http://127.0.0.1:8000/js/semantic.min.js"></script>
		<script src="http://127.0.0.1:8000/js/calendar.min.js"></script>
  
	</head>
	<body>
		<div class="ui container">
		<h3>Range</h3>
		<div class="ui form">
			<div class="two fields">
				<div class="field">
				<label>Start date</label>
					<div class="ui calendar" id="rangestart">
						<div class="ui input left icon">
							<i class="calendar icon"></i><input type="text" placeholder="Start">
						</div>
					</div>
				</div>
				<div class="field">
					<label>End date</label>
					<div class="ui calendar" id="rangeend">
						<div class="ui input left icon">
							<i class="calendar icon"></i><input type="text" placeholder="End">
						</div>
					</div>
				</div>
			</div>
		</div>
  <h3>Date only</h3>
  <div class="ui calendar" id="example2">
    <div class="ui input left icon">
      <i class="calendar icon"></i>
      <input type="text" placeholder="Date">
    </div>
  </div>
  <div class="ui form">
	<div class="two fields">
	<div class="field">
	
  <label>Dewasa</label>
		<select class="ui search dropdown">
			<option value="">Jumlah</option>
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
		<select class="ui search dropdown">
			<option value="">Jumlah</option>
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
	</div></br>
	<div class="field">
	
  <label>Asal</label>
		<select class="ui search dropdown">
			<option value="">Jumlah</option>
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
	
  <label>Tujuan</label>
		<select class="ui search dropdown">
			<option value="">Jumlah</option>
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
	</div></div></div>
  <br/>
  
  <div class="ui checkbox">
  <input name="example" type="checkbox">
  <label>Make my profile visible</label>
</div>
<br/><br/>
<button class="ui button">Cari</button>
  
 </div>
 <script>
	$('#rangestart').calendar({
	type: 'date',
	endCalendar: $('#rangeend')
	});
	$('#rangeend').calendar({
	type: 'date',
	startCalendar: $('#rangestart')
	});
	$('#example2').calendar({
	type: 'date'
	});
 </script>

</body></html>