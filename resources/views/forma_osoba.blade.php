<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Unos osobe</title>
	<!---<style>
		html {width:100%;},
		body {background-color:red;}
	</style> Ne radi mi ovaj stil--->
</head>
<body>
	<h2>Forma za unos novih osoba</h2>
	<form action="/store" method="POST">
		@csrf
		<input type="text" name="ime" placeholder="Unesi ime" /> <br />
		<input type="text" name="prezime" placeholder="Unesi prezime" /> <br />
		<input type="submit" value="Spremi" />
	</form>
	
	<a href="/show">Pokaži sve osobe</a>
</body>
</html>
