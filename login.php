<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giriş Ekranı</title>
	<link rel="stylesheet" type="text/css" href="../fonts/typicons.css">
	<link rel="stylesheet" type="text/css" href="css/turkuaz.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylee.css">
</head>
<body>


<main class="container" align="center">
	<div class="form-group">
			<div class="log-sign-title"><h6>Giriş Ekranı</h6></div>
                    <br>
                    <?php
                        if(isset($_GET['p'])) {
                        $p = $_GET["p"];

                        if($p=="1")
                            echo '<input type="textbox" name="hata1" placeholder="Kullanıcı Adı veya Parola Hatalıdır." disabled  style="background-color:#FFF;width:300px;height:40px;text-align:center;border-radius:5px;';
                        
                        if($p=="2")
                        echo ' <input type="textbox" name="hata2" placeholder="Öncelikle Giriş Yapmanız Gerekmektedir." disabled  style="background-color:#FCF5D8;width:300px;height:40px;text-align:center;border-radius:5px;';
                        
                        }
                    ?>
			<div class="form-bg">
				<form method="post" action="kontrol.php">
                        <div class="textbox">
                    <p><font face="tahoma" size="2">
                        <b>E-Mail Adresiniz:</b></font></p>
                        <input type="textbox" name="kullanici_adi" placeholder="ornek@gmail.com">
                        <p><font face="tahoma" size="1">
                        <b>Kullanıcı Adınızı ve Şifrenizi 3. Şahıslar ile Paylaşmayınız.</b></font></p>
                        <p><font face="tahoma" size="2">
                        <b>Parolanız:</b></font></p>
                        <input type="password" name="sifre" placeholder="*******">
                        <p align="jusitfy"><input type='checkbox' name='hatirla' value='on'><font face="tahoma" size="3"><b>Beni Hatırla</b> </font></p>
					</div>
					<div class="submit">
                        <input type="submit" name="log-entry" value="Giriş Yap">
					</div>
                </form>
                
			</div>
		</div>
</main>


<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="../js/turkuaz.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>


</body>
</html>