<?php
require "sesioak/userSession.php";
if (konprobatuSaioa("index.php", false)) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <title>Erregistratu</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/formularioak.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <style>
        body {
            background: url("img/erregistratuAtzekaldea.jpg" ) no-repeat fixed center center;
        }
    </style>
</head>
<body>
<header style="background: #8A0829">
    <div class="wrapper">
        <nav style="float: left;">
            <a href="index.php" class="login_btn"> Hasiera</a>
        </nav>
    </div>
    <div class="wrapper">
        <a href="#" class="hamburger"></a>
        <nav>

            <?php
            if (isset($_SESSION['posta']) && $_SESSION['posta'] == true) {
                echo("
                           <ul>
                            <li><a href=\"argazkiaIgo.php\">Argazkia Igo</a></li>
                           </ul>
                         ");
                echo("<a href=\"datuBasea/logout.php\" class=\"login_btn\" >" . $_SESSION['izena'] . " (" . $_SESSION['posta'] . ")</a>");
            } else {
                echo("<a href='login.php' class=\"login_btn\"> Login</a>");

            }
            ?>

        </nav>
    </div>
</header>

<div class="logo"></div>
<div class="login-block">
    <h1>Erregistratu</h1>
    <form action="datuBasea/erabiltzaileaErregistratu.php" method="post" enctype="multipart/form-data">
    <input type="text" value="" placeholder="Izen Abizenak" id="izenabizen" name="izenabizen"/>
    <input type="email" value="" placeholder="Posta Helbidea" id="posta" name="posta"/>
    <input type="password" value="" placeholder="Pasahitza" id="password" name="password" />
    <input type="password" value="" placeholder="Konfirmatu Pasahitza" id="password2" />
    <input type="submit" value="Erregistratu"/>
    </form>
</div>
</body>
</html>