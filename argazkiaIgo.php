<!DOCTYPE html>
<html lang="en">
<head>
	<title>Argazki Bilduma</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
		<header style="background: #8A0829">
			<div class="wrapper">
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="argazkiaIgo.php">Argazkia Igo</a></li>
					</ul>
					<a href="#" class="login_btn">Logeatu</a>
					<a href="#" class="login_btn">Erregistratu</a>

				</nav>
			</div>
		</header>
		

<form action="igo.php" method="post" enctype="multipart/form-data">
	<input type="file" id="argazki" name="argazki" /><br/>
	<textarea name="deskribapena" id="deskribapena"> </textarea><br/>
	<input type="submit" id="bidali" name="bidali" value="Igo" />
</form>

</body>
</html>