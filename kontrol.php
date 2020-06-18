<html>
    <body>
        <?php 



session_start();



$mevcut_kullanici_adi = "nisa@gmail.com";


$mevcut_sifre = "123";



$gelen_kullanici_adi = $_POST['kullanici_adi'];


$gelen_sifre = $_POST['sifre'];

if ($gelen_kullanici_adi == $mevcut_kullanici_adi && $gelen_sifre == $mevcut_sifre){


    $_SESSION['oturum'] = true;


    $_SESSION['kullanici_adi'] = $gelen_kullanici_adi;

    header("Location:index.php");


}elseif ($gelen_kullanici_adi=="" || $gelen_sifre==""){


    header("Location:login.php?p=2");


}elseif ($gelen_sifre != $mevcut_sifre || $gelen_kullanici_adi != $mevcut_kullanici_adi) { 

    header("Location:login.php?p=1");
} 

?>

</body>
</html>


