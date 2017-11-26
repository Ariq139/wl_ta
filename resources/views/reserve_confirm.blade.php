@extends('layouts.resmaster')

@section('title')
  <title>Reservasi - Konfirmasi</title>

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
				<a class="section">Cari</a>
				<i class="right chevron icon divider"></i>
				<a class="section">Detail Tamu</a>
				<i class="right chevron icon divider"></i>
				<div class="active section">Konfirmasi</div>
			</div></br></br></br>

@endsection
 

@section('scripts')

@endsection