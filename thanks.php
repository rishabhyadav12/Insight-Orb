<?php include "lib/var-const.php";?>
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
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link href="<?=CSS;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?=CSS;?>commoncss.css" rel="stylesheet">
</head>
<style>
    
   body{
        background:#fff4f4 !important
    }

   .thank-you{
    font-family: 'Playball', cursive !important;
    font-size:75px;
    font-weight:400;
    text-align:center;
   }

.t-para{
    text-align:center;
    font-weight:500;
} 

</style>
<body>
    
<?php include "lib/top-bar.php";?>

<div class="contact-start">
   
<?php include "lib/nav.php";?>
   
    
    <!-- thanks Start -->
    <div class="container px-0 py-5">
        <div class="row g-0">
            <div class="col-md-12 f-shadow py-4 px-4 " style="text-align:center;background: var(--light);">
              <img src="img/gif/tick2.gif" style="height:150px" />
          <p class="thank-you">Thank You!</p>
          <p class="t-para">We appreciate you contacting Insights orb. One of our representatives will get back in touch with you soon!</p>
            </div>
    </div>
    </div>
    <!-- thanks End -->

     <?php include 'lib/footer.php' ?>

    <!-- JavaScript Libraries -->
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>

</body>
</html>