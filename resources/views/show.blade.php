<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prikaz svih osoba</title>
</head>
<body>
	<ol>
	@foreach ($osobe as $osoba)
		<li>{{$osoba->ime}} {{$osoba->prezime}}</li>
	@endforeach
	</ol>

	<a href="/form_osoba">Unos nove osobe</a>
</body>
</html>
