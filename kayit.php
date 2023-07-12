<?php

include("baglanti.php"); 

$username_err = "";
$email_err = "";
$parola_err="";
$parolatekrar_err="";
$isim_err="";
$soyisim_err ="";

if(isset($_POST["kaydet"])){
    //KULLANICI DOĞRULAMA
    if(empty($_POST["isim"])){ 
        $isim_err = "İsim boş olamaz!";
    }else if (!preg_match("/^([a-zA-Z' ]+)$/", $_POST["isim"])) {
        $isim_err ="İsminizde özel karakter bulunamaz!";
    }else {
        $isim = $_POST["isim"];
    }

    if(empty($_POST["soyisim"])){ 
        $soyisim_err = "Soyisim boş olamaz!";
    }else {
        $soyisim = $_POST["soyisim"];
    }

    if(empty($_POST["email"])){

        $email_err = "Email adresi boş olamaz!";

    }else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

        $email_err = "Geçersiz email formatı.";
      }else {
        $email = $_POST["email"];
      }


      if(empty($_POST["parola"])){
        $parola_err = "Parola boş olamaz!";
      }else {
        $parola = password_hash($_POST["parola"],PASSWORD_DEFAULT) ;
      }
    
    //parola tekrar
    if(empty($_POST["parolatekrar"])){

        $parolatekrar_err ="Parola tekrar boş olamaz!";

    }elseif($_POST["parola"]!= $_POST["parolatekrar"]) {

        $parolatekrar_err = "Parolalar eşleşmiyor!";
    }else {
        $parolatekrar = $_POST["parolatekrar"];
    }


    

    

    if(isset($isim)&&isset($soyisim)&&isset($email)&&isset($parola)){

    
        
        $ekle = "INSERT INTO kullanicilar (isim, soyisim, email, parola) VALUES ('$isim','$soyisim', '$email', '$parola')";
        $calistirekle = mysqli_query($baglanti,$ekle);
        
        if($calistirekle){
            echo '<div class="alert alert-success" role="alert">
            Kayıt başarılı!
            </div> ';
        } else { //Kayıt başarılı değilse
            echo '<div class="alert alert-danger" role="alert">
            Kayıt sırasında bir hata oluştu.
            </div> ';
        }
        
        mysqli_close($baglanti);
    
    
    }
    
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT - Kaydol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


  <?php include("parts/nav.php") ?>
   <div class="container p-4 w-100">
    <div class="card p-5">
    <form action="kayit.php" method="POST">
        

    <div class="mb-3" >

    <h2 class="text-center">Kaydol</h2>
        <label for="exampleInputEmail1" class="form-label">İsim</label>
        <input type="text" class="form-control 
        
        <?php
        
            if(!empty($isim_err)){
                echo "is-invalid";
            }
        ?>
        
        " id="exampleInputEmail1" name="isim" >
        <div id="validationServer03Feedback" class="invalid-feedback">
            <?php echo $isim_err ?>
        </div>
        
    
    </div>

    <div class="mb-3" >
        <label for="exampleInputEmail1" class="form-label">Soyisim</label>
        <input type="text" class="form-control 
        
        <?php
        
            if(!empty($soyisim_err)){
                echo "is-invalid";
            }
        ?>
        
        " id="exampleInputEmail1" name="soyisim" >
        <div id="validationServer03Feedback" class="invalid-feedback">
            <?php echo $soyisim_err ?>
        </div>
        
    
    </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Adresi</label>
    <input type="text" class="form-control 
    
    <?php
        
            if(!empty($email_err)){
                echo "is-invalid";
            }
        ?>
    
    " id="exampleInputEmail1" name="email">
    <div id="validationServer03Feedback" class="invalid-feedback">
      <?php echo $email_err ?>
    </div>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Parola</label>
    <input type="password" class="form-control 
    
    <?php
        
            if(!empty($parola_err)){
                echo "is-invalid";
            }
        ?>
    
    " id="exampleInputPassword1" name="parola">
    <div id="validationServer03Feedback" class="invalid-feedback">
      <?php echo $parola_err ?>
    </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Parolayı yeniden giriniz</label>
    <input type="password" class="form-control 
    
    <?php
        
            if(!empty($parolatekrar_err)){
                echo "is-invalid";
            }
        ?>
    
    " id="exampleInputPassword1" name="parolatekrar">
    <div id="validationServer03Feedback" class="invalid-feedback">
      <?php echo $parolatekrar_err ?>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" name="kaydet">Kaydol</button>
</form>
    </div>
   </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

