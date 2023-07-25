<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        
    </div>

    <?php 
    
    include("parts/nav.php");
    
    ?>

<div class="container-fluid  p-3" style="background-color: rgb(146, 146, 146); height: 430px; width: 100%;">
    <h1 class="mt-5 ms-5">Spor Salonu <br> Yönetim Yazılımı</h1>
    <h4 class="mt-2 ms-5 text-light">Tüm müşteri ve randevularınızı <br> online yönetin, 
    istediğiniz yerden ulaşın, <br> işinize odaklanarak zaman kazanın.
    </h4>

    <div class="col-sm-12 mt-3 mt-sm-1 ms-5" style="width: 280px;display: inline-block; ">
        
        <input type="name" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="İsim ve Soyisim" style="height: 50px;color: white;">

        
      </div>
      
      <div class="col-sm-12 mt-3 mt-sm-1 ms-5" style="width: 280px;display: inline-block; ">
        
        <input type="email" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="Mail Adresi" style="height: 50px;color: white;">

        
      </div>

      <div class="col-sm-12 mt-3 ms-5" style="width: 280px;display: inline-block; ">
      <a href="kayit.php">
        <button type="button text-dark" class="btn btn-warning " style="height: 50px; width: 160px;"><strong>Ücretsiz Dene</strong></button>
      </a>
        
      </div>
      

</div>

<div class="row w-100">

    <div style="display: block;" class="col-sm-12 col-md-4 col-lg-4 text-center ">
        <img src="WhatsApp Image 2022-09-26 at 19.46.55.jpeg" alt="" style="width: 270px;">
    </div>
    <div style="display: block;" class="col-sm-12 col-md-8 col-lg-8">
        <div class="container-fluid">
            <h1 style="color: rgb(92, 91, 91); " class="mt-3">NEDİR VE NE İŞE YARAR?</h1>
            <h3 style="color: rgb(151, 151, 151);" class="mt-3">Yeni Nesil Asistan</h3>
            <h5 class="mt-4">Salonunuzu aktif ve anlık olarak yönetmenize yarayan, bulut tabanlı,<br>
            yeni nesil takip ve yönetim yazılımdır.
            </h5>
            <h5 class="mt-3">İster küçük ister büyük olsun salonunuzu online olarak, istediğiniz yerden <br>
            yönetebilirsiniz.
            </h5>
            <h5 class="mt-3">Müşteri kartları açın, randevularınızı organize edin ve <br>
                hesabınızı kolayca tutun.
                </h5>
        </div>
    </div>

</div>





</body>
</html>