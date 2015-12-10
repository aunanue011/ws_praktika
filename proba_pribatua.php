<?php
require "sesioak/adminSession.php";
if (konprobatuSaioa()) {
    echo "Welcome to the member's area, " . $_SESSION['izena'] . "!";

} else {
    echo "";
    //header('Location: '."index.php");


}