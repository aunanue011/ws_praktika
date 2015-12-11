<?php
require "../datuBasea/konexioa.php";
if (!isset($_SESSION)) {
    session_start();
}
$target_dir = "../argazkiak/";
$uploadOk = 1;
$target_file = $target_dir . basename($_FILES["argazki"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
$new_image_name = 'argazki_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.' . $imageFileType;

if (isset($_POST["bidali"])) {
    $check = getimagesize($_FILES["argazki"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}

$target_dir =$target_dir.$_SESSION['posta']."/";
if (!file_exists("$target_dir")) {
   mkdir("$target_dir",0755,true);
}
$target_file = $target_dir .$new_image_name;

if ($_FILES["argazki"]["size"] > 5000000) {
//    echo "Kapullo de los cojones!. Te he pedido una foto normal, no un puto mural de mil pares de cojones. O empequeñeces la foyo, o la subes en el puto flicker ese. Gilipollas.";

    echo 'Fitxategia handiaegia da. Tamaina muga 5MB da.';
    $uploadOk = 0;
}
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "JPG, JPEG, PNG & GIF formatuak bakarrik onartzen dira.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Zure fitxategia ezin izan da igo.";
} else {
    if (move_uploaded_file($_FILES["argazki"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO argazkia(izena, erabID, tag, deskribapena)
        VALUES ('$new_image_name', '$_SESSION[posta]', '$_POST[tag]','$_POST[deskribapena]');";
        if (mysqli_query($konexioa, $sql))
        {
            echo "Zure fitxategia zuzen igo da.";


        }
    } else {
        echo "Erroreren bat gertatu da fitxategia igo bitartean.";
    }
}
?>