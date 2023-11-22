<html>
<body>
<h1>Zbrajanje</h1>
<form action="/zbroji" method="POST">
	@csrf
	<input type="text" name="br1" placeholder="unesi prvi broj" /> <br>

	<input type="text" name="br2" placeholder="unesi drugi broj" /> <br>
	<input type="submit" value="Zbroji" />

</form>
</body>
</html>
