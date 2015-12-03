<!DOCTYPE html>
<html lang="en">
<head>
	<title>Argazki Bilduma</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/formularioak.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<style>
		body {
			background: url("img/erregistratuAtzekaldea.jpg" ) no-repeat fixed center center;
		}
		textarea {
			width: 315px;
			height: 120px;
			resize: none;
		}
        #argazki {
            height: 0;
            width: 0;
        }

        #argazki-label {
            border: 1px solid #cccccc;
            padding: 5px;
        }
	</style>
</head>
<body>
		<header style="background: #8a0829">
			<div class="wrapper">
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="argazkiaIgo.php">Argazkia Igo</a></li>
					</ul>
					<a href="login.html" class="login_btn">Logeatu</a>
					<a href="erregistratu.html" class="login_btn">Erregistratu</a>

				</nav>
			</div>
		</header>

		<div class="logo"></div>
		<div class="login-block">
            <h1>Argazkia Igo</h1>
			<form action="igo.php" method="post" enctype="multipart/form-data">
                <input type="file" id="argazki" name="argazki"/><br/>
                <label id="argazki-label" for="argazki">Argazkia Aukeratu</label>
			<br/>

                <label for="deskribapena">Deskribapena</label>
                <textarea name="deskribapena" id="deskribapena"></textarea><br/><br/>
				<input type="submit" id="bidali" name="bidali" value="Igo" />
			</form>
		</div>
</body>
</html>