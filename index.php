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

<section class="hero">
    <header>
        <div class="wrapper">
            <a href="#" class="hamburger"></a>
            <nav>

                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }
                if (isset($_SESSION['posta']) && $_SESSION['posta'] == true) {
                    echo("
                           <ul>
                            <li><a href=\"argazkiaIgo.php\">Argazkia Igo</a></li>
                           </ul>
                         ");
                    echo("<a href=\"datuBasea/logout.php\" class=\"login_btn\" >" . $_SESSION['izena'] . " (" . $_SESSION['posta'] . ")</a>");
                } else {
                    echo("<a href='erregistratu.php' class=\"login_btn\"> Erregistratu</a>");
                    echo("<a href='login.php' class=\"login_btn\"> Login</a>");

                }
                ?>

            </nav>
        </div>
    </header>

    <section class="caption">
        <h2 class="caption">Argazki Bilduma</h2>

        <h3 class="properties"></h3>
    </section>
</section>


<section class="search">
    <div class="wrapper">
        <form action="#" method="post">
            <input type="text" id="search" name="search" placeholder="Tag-en Bidez argazkiak bilatu"
                   autocomplete="off"/>
            <input type="submit" id="submit_search" name="submit_search"/>
        </form>
    </div>

</section>


<section class="listings">
    <div class="wrapper">
        <!-- <ul class="properties_list">
             <li>
                 <a href="#">
                     <img src="img/property_1.jpg" alt="" title="" class="property_img"/>
                 </a>

                 <div class="property_details">
                     <h1>
                         <a href="#">El album de la gorrina</a>
                     </h1>

                     <h2>102 argazki</h2>
                 </div>
             </li>

         </ul>
         -->
        <?php
        require "datuBasea/konexioa.php";

        $sql = "SELECT * FROM (
                  SELECT * FROM argazkia ORDER BY argID DESC LIMIT 9
                  ) sub
                  ORDER BY argID DESC;";
        $result = mysqli_query($konexioa, $sql);
        if ($result) {
            echo "<ul class=\"properties_list\">";
            while ($row = mysqli_fetch_assoc($result)) {
                echo("<li><img class=\"property_img\" src=\"argazkiak\\$row[erabID]\\$row[izena]\" /></li> ");
            }
            echo "</ul>";
        }
        require "datuBasea/konexioaItxi.php";
        ?>
        <div class="more_listing">
            <a href="#" class="more_listing_btn">Argazki Gehiago</a>
        </div>
    </div>
</section>

<footer>
    <div class="wrapper footer">
    </div>
</footer>

</body>
</html>