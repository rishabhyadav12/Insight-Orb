<?php include"lib/var-const.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Insights orb</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=IMG;?>favicon/favicon.png" rel="icon">
    <link href="<?=CSS;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?=CSS;?>commoncss.css" rel="stylesheet">

<style>
    
.go-home {
    text-align: center;
    padding-bottom: 20px;
    padding-top: 20px;
}

.go-home h1 {
    text-align: center;
    padding-bottom: 10px;
    font-size:120px;
    color:#ff5151;
    padding-top:25px
}

.go-home p {
    text-align: center;
    padding-bottom: 30px;
    font-size:20px;
}

.error-image{
    margin-top: -30px;
}

.goto-homepage {
    background-color: #ff5151;
    padding: 10px 20px 10px 20px;
    color: var(--light);
    font-size: 14px;
    border-radius: 50px;
    border:2px solid #ff5151;
}

.goto-homepage:hover{
    background-color: var(--light);
    color: #ff5151;
    border:2px solid #ff5151;
    transition: all .2s;
    font-weight:600
}

@media only screen and (min-width: 320px) and (max-width: 720px) {
        .error-image {
        height: auto;
        width: 100% !important;
    }
        .go-home {
          padding-bottom: 40px;
    
}
}


</style>

</head>

<body>

<?php include "lib/top-bar.php";?>

<div class="page-not-found">

<?php include "lib/nav.php";?>

   
   <div class="container py-3">
    <div class="row">
        <div class="col-lg-6">
   <div class="error-image text-center">
            <figure><img src="<?=IMG;?>404/404.png" height="auto" width="100%" style="padding:15px" draggable="false" ></figure>

   </div> 
</div>
   <div class="col-lg-6">
   <div class="go-home ">
    <h1>404</h1>
    <p>The page you were trying to reach may have been removed, or it never existed at all.</p>
   <a href="index.php" class="goto-homepage">Bring Me To Home</a>
     </div>
   </div>
   </div>    
  </div>

    
     <?php include 'lib/footer.php' ?>


    <!-- JavaScript Libraries -->
    <script src="<?=JS;?>jquery-3.4.1.min.js"></script>
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>
    
</body>

</html>