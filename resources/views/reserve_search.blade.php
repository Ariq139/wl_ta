<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Reservasi - Cari</title>

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
		</div></br></br></br></br></br></br>
		<div class="ui container">
			<div class="ui form">
			<div class="ui large breadcrumb">
				<a class="section">Home</a>
				<i class="right chevron icon divider"></i>
				<a class="section">Reservasi</a>
				<i class="right chevron icon divider"></i>
				<div class="active section">Cari</div>
			</div></br></br></br>
			<table class="ui single line table">
				<thead>
					<tr>
						<th>Berangkat</th>
						<th>Tiba</th>
      					<th>No. Kereta</th>
     					<th>Nama Gerbong</th>
						<th>Sisa Kursi</th>
						<th>Harga</th>
						<th></th>
   					</tr>
  				</thead>
  				<tbody>
					<tr>
						<td>07:00</td>
						<td>09:00</td>
						<td>AZ4422</td>
						<td>Nama</td>
						<td>7</td>
						<td>
							<div class="ui radio checkbox">
								<input name="pilihan" tabindex="0" class="hidden" type="radio" value="xxxx" id="xxxxx">
								<label>Rp100000</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>07:00</td>
						<td>09:00</td>
						<td>AZ4422</td>
						<td>Nama</td>
						<td>7</td>
						<td>
							<div class="ui radio checkbox">
								<input name="pilihan" tabindex="0" class="hidden" type="radio" value="xxxx" id="xxxxx">
								<label>Rp100000</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>07:00</td>
						<td>09:00</td>
						<td>AZ4422</td>
						<td>Nama</td>
						<td>7</td>
						<td>
							<div class="ui radio checkbox">
								<input name="pilihan" tabindex="0" class="hidden" type="radio" value="xxxx" id="xxxxx">
								<label>Rp100000</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>07:00</td>
						<td>09:00</td>
						<td>AZ4422</td>
						<td>Nama</td>
						<td>7</td>
						<td>
							<div class="ui radio checkbox">
								<input name="pilihan" tabindex="0" class="hidden" type="radio" value="xxxx" id="xxxxx">
								<label>Rp100000</label>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="two fields">
				<div class="field">
					<button class="field ui fluid large green submit button" type=submit>Lanjut</button>
				</div>
				<div class="field">
					
				</div>
			</div>
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
<script>
	$('.dropdown')
		.dropdown()
	;
	$('.ui.radio.checkbox')
		.checkbox()
	;
	$('#dob').calendar({
		type: 'date'
	});
</script>


</body></html>