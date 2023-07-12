<?php

include("baglanti.php"); 


$email_err = "";
$parola_err="";


if(isset($_POST["giris"])){
    //KULLANICI DOĞRULAMA
    

    

    if(empty($_POST["email"])){

        $email_err = "Email adresi giriniz!";

    }else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

        $email_err = "Geçersiz email formatı.";
      }else {
        $email = $_POST["email"];
      }


      if(empty($_POST["parola"])){
        $parola_err = "Parola giriniz!";
      }else {
        $parola =$_POST["parola"] ;
      }
 
    

    if(isset($email)&&isset($parola)){

        $secim = "SELECT * FROM kullanicilar WHERE email= '$email'";
        $calistir = mysqli_query($baglanti,$secim);
        $kayitsayisi = mysqli_num_rows($calistir);
        
        if($kayitsayisi>0){

            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $hashlisifre = $ilgilikayit["parola"];

            if(password_verify($parola,$hashlisifre)){
                session_start();
                $_SESSION["email"] = $ilgilikayit["email"];
                
                header("location: profile.php");
            }else {
                echo '<div class="alert alert-danger" role="danger">
            Email veya parola yanlış!
            </div> ';
            }

        }else {
            echo '<div class="alert alert-danger" role="alert">
            Email veya parola yanlış!
            </div> ';
        }
    
    }
    
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT - Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


  <?php include("parts/nav.php") ?>
  
   <div class="container p-4 w-100">
    <div class="card p-5">
    <form action="login.php" method="POST">
        

    <h2 class="text-center">Giriş Yap</h2>

    

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

  
  
  <button type="submit" class="btn btn-primary" name="giris">Giriş Yap</button>
</form>
    </div>
   </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

