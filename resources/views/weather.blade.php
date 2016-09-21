<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Sites</title>

	</head>
	<body>
		<div class="container">
			<h1>Weather Sites</h1>
			<h4>Situs ini merupakan situs untuk melihat kondisi cuaca pada hari ini. Adapun cuaca berdasarkan Yahoo Weather.</h4>
			
			<form method="post" action="{{URL::to('doSearchWeather')}}">
				<div class="col-sm-8">
					<select name="kota" class="form-control">
					  <option value="jakarta">Jakarta</option>
					  <option value="bandung">Bandung</option>
					  <option value="semarang">Semarang</option>
					</select>
				</div>
				<button type="submit" class="btn btn-default">Go...!</button>
				<div class="col-sm-4">
				</div>
				{{ csrf_field() }}
			</form>
		</div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>