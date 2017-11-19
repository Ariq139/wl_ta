<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Reservasi</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/calendar.min.css') }}">
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
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/semantic.min.js') }}"></script>
  <script src="{{ asset('js/calendar.min.js') }}"></script>
  
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
            <i class="calendar icon"></i>
            <input type="text" placeholder="Start">
          </div>
        </div>
      </div>
      <div class="field">
        <label>End date</label>
        <div class="ui calendar" id="rangeend">
          <div class="ui input left icon">
            <i class="calendar icon"></i>
            <input type="text" placeholder="End">
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