<link rel="stylesheet" type="text/css" href="js/abixuak/dist/sweetalert2.css"/>
<script src="js/jquery.js"></script>
<script src="js/abixuak/dist/sweetalert2.min.js"></script>
<body bgcolor="#2f4f4f">
<script language="JavaScript">
    <?php
    require 'datuBasea/konexioa.php';
    session_start();
    if(!isset($_SESSION['posta'])){
    $user_check =0;
    }else{
    $user_check=$_SESSION['posta'];
}
    $sql="SELECT * FROM  erabiltzaileak where posta like '$user_check'";
    $result = mysqli_query($konexioa, $sql);
    $row = mysqli_fetch_assoc($result);
    $login_session =$row['izenabizen'];
    if(!isset($login_session)){
    echo("
        swal({
                    title: \"GUNE PRIBATUA\",
                    text: \"Logeatuta egon behar duzu, atal honetan sartzeko.\",
                    type: \"error\",
                    timer: 3000
                },
                function(){
                    window.location.href = 'login.html';
                });

        ");

    }
    require 'datuBasea/konexioaItxi.php';
    ?>
</script>
</body>
