@extends('layouts.resmaster')

@section('title')

  <title>Reservasi - Cari</title>
  
@endsection

@section('style')
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
  @endsection

  @section('content')
  </br></br></br></br></br>
			<div class="ui large breadcrumb">
				<a class="section" href="{{ url('/') }}">Home</a>
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
@endsection
 

@section('scripts')
<script>
	$('.dropdown')
		.dropdown()
	;
	$('.ui.radio.checkbox')
		.checkbox()
	;
</script>

@endsection