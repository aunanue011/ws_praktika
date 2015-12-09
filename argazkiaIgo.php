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
	<script>
		function argazkiaAurreikusi(fitxategiBox) {
            document.getElementById('aurreikusi').src="img/kargatzen.gif";

            if (fitxategiBox.files && fitxategiBox.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					document.getElementById('aurreikusi').src=e.target.result;
				};
				reader.readAsDataURL(fitxategiBox.files[0]);
				document.getElementById("aurreikusi").style.display = "block";

			}
		}
		function irudiaKargatzen(image) {
			image.onerror = "img/kargatzen.gif";
			image.src = "";
			return true;
		}
	</script>
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
				<nav style="float: left;">
					<a href="index.html" class="login_btn"> Hasiera</a>
				</nav>
			</div>
			<div class="wrapper">
				<a href="#" class="hamburger"></a>
				<nav>

					<a href="login.html" class="login_btn">Logeatu</a>
					<a href="erregistratu.html" class="login_btn">Erregistratu</a>

				</nav>
			</div>
		</header>

		<div class="logo"></div>
		<div class="login-block">
            <h1>Argazkia Igo</h1>
			<form action="igo.php" method="post" enctype="multipart/form-data">
                <input type="file" accept="image/*" id="argazki" name="argazki" hidden onChange="argazkiaAurreikusi(this)"/>
				<img id="aurreikusi" onerror="irudiaKargatzen(this); src="#"/ style="display: none" ><br/>
                <label id="argazki-label" for="argazki">Argazkia Aukeratu</label>
			<br/>
				<br/><br/><br/>
                <label for="deskribapena">Deskribapena</label>
                <textarea name="deskribapena" id="deskribapena"></textarea><br/><br/>
				<input type="submit" id="bidali" name="bidali" value="Igo" />
			</form>
		</div>
</body>
</html>