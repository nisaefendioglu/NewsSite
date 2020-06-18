<html>
    <head></head>
        <body>
        <div>
      <h5 align="center">Çıkış Yapıldı! Anasayfaya Yönlendiriliyorsunuz...</h5>
      
</a>
<?php 


session_start();


$_SESSION = array();


session_destroy();
 

header("refresh: 1; url=login.php");

?> 
</body>

    </html>