<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Detay Sayfası</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
  <?php 
  session_start(); 
  if(!isset($_SESSION['oturum'])) { 
    header("Location:login.html?p=2");
  }
  else {  
      echo "";
  }
  
  ?>
    <div class="dashboard-container">
      <h1>Haber Detayı</h1>
     
      <a href="index.php">Tüm Haberler</a>
    </div>
    </div>

    
    <div class="list-container">
    
        <table class="table" rules=none>
          <tr>
            <h4>Korona Virüsü Hızla Yayılıyor!</h4>
            
            <td><div align="center"> <img src="images/virus.jpg"></div>
    
           “Tüm dünyayı tehdit eden corona virüsü hakkında Prof. Dr. Canan Karatay'dan bir son dakika açıklaması daha geldi! Şimdiye kadar 1700’ün üzerinde insanın ölümüne neden olan Corona virüsü 70 binin üzerinde insanda görüldü. Her geçen gün enfekte olanların ve ölenlerin sayısı artarken, uzmanların virüs ile ilgili çalışmaları devam ediyor. Daha önce konuyla ilgili yorumda bulunan Prof. Dr. Canan Karatay’dan koronavirüs ile ilgili bir son dakika açıklaması daha geldi. Canan Karatay, ‘Koronavirüs salgınına karşı aşı yapılamaz’ dedi ve devam etti. İşte son dakika haberinin ayrıntıları…”
</td><tr></tr>
<tr>
              <td><h4>Kadıköy'de Hezimet!</h4>  
              <div align="center" > <img src="images/kadikoy.jpg"></div>
              “Süper Lig’in 23. haftasındaki dev derbide Galatasaray, deplasmanda Fenerbahçe’yi 3-1 mağlup ederek 22 Aralık 1999’dan bu yana Kadıköy’deki ilk galibiyetini elde ederken ligdeki galibiyet serisini de 7 maça çıkardı.”
</td>
            </tr>

            <tr></tr>
<tr>
              <td><h4>Kara Kış Kapıda!</h4>  
              <div align="center" > <img src="images/kis.jpg"></div>
              “Süper Lig’in 23. haftasındaki dev derbide Galatasaray, deplasmanda Fenerbahçe’yi 3-1 mağlup ederek 22 Aralık 1999’dan bu yana Kadıköy’deki ilk galibiyetini elde ederken ligdeki galibiyet serisini de 7 maça çıkardı.”
</td>
            </tr>
           
        </table>
        <a href="index.php">Tüm Haberler</a>
    </div>
  </body>
</html>
