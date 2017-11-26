<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Reservasi</title>

	<link rel="stylesheet" href="http://127.0.0.1:8000/css/calendar.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.css" rel="stylesheet" type="text/css">

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{ asset('js/semantic.min.js') }}"></script>
	<script src="http://127.0.0.1:8000/js/calendar.min.js"></script>
</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="/" class="header item">
        <!--<img class="logo" src="Fixed%20Menu%20Example%20-%20Semantic_files/logo.png">-->
        Nama
      </a>
      <a href="{{ url('/') }}" class="item">Home</a>
      <a class="item" href="{{ url('/reserve') }}">Reservasi</a>
		<a class="item" href="{{ url('/about') }}">Tentang Kami</a>
			<div class="right menu">
					<div class="item">
						<a class="ui button" href="{{ url('/login') }}">Log in</a>
					</div>
					<div class="item">
						<a class="ui primary button" href="{{ url('/register') }}">Register</a>
					</div>
				</div>
			</div>
		</div>
  
		<div class="ui container">
		</br></br></br></br></br>
			<div class="ui large breadcrumb">
				<a class="section" href="{{ url('/') }}">Home</a>
				<i class="right chevron icon divider"></i>
				<div class="active section">Reservasi</div>
			</div></br></br></br>
			<div class="ui form">
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
	</div></form>
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


</body></html>