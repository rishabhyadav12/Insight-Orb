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
        .our-services-top {
    padding: 32px 32px 32px 32px;
    background-color: var(--light);
    margin-bottom: 20px;
    margin-top: -80px;
    border-radius: 10px 10px 0 0;
}

.our-services-top h1 {
    text-align: center;
    justify-content: center;
    /* padding-bottom: 10px; */
    font-size: 30px !important;
}

.our-services-top p {
    line-height: 28px;
    justify-content: center;
}

.bg-risi {
    background: #484377;
}
.bg-risi-order {
    background: #efefef;
}

/* .how-to-order-report {
    margin-bottom: -150px;
} */

.how-to-order-report ul li {
    color: #000;
}

.how-to-order-report p {
    color: #000;
}

.breadcrumb_row ul {
    padding: 10px 4px 10px 0px;
    list-style: none;
    text-align: left;
    margin-bottom: 0;
    /* border: 1px solid var(--light); */
}

.breadcrumb_row {
    position: relative;
    top: 40px;
    /* background: var(--primary); */
}

.breadcrumb_row ul li {
    display: inline;
    font-size: 12px;
    color: var(--light);
}

.breadcrumb_row ul li a {
    color: var(--light);
    text-decoration: none;
    font-size: 12px;
}

.breadcrumb_row ul li + li:before {
    padding: 2px;
    color: #e1e1e1;
    content: "\203A";
    font-size: 15px;
}

    </style>
</head><body>

<?php include "lib/top-bar.php";?>

<div class="how-to-order-start">

<?php include "lib/nav.php";?>


    <!-- Page Header Start -->
    <div class="container-fluid pr-background" style="height: 165px !important;overflow:hidden">
        <section class="container">
            <div class="breadcrumb_row">
                <nav>
                   <ul>
                    <li>
                      <a href="#" title="Home" target="_blank">Home</a>
                    </li>
                   <li>How To Order</li>
                  
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End --> 
    
    <section class="our-services-top how-to-order-report container f-shadow-down">
        <div class="row">
            <h1>How To Order</h1>
          <div class="col-lg-12 who-we-are-bottom" style="margin-bottom:25px">
       </div>
       <div class="row">
        
      <div class="col-lg-6">
        <h6>Orders for our reports can be placed via the following channels:</h6>
        <ul>
            <li>Insights Orb website</li>
            <li>Emails</li>
            <li>Telephone</li>
        </ul>
   <div class="order-through f-shadow p-3">
    <h5>Ordering through Website</h5>
    <p>Select the license type on the Report Description page, and fill the required details on the billing info page. Then, select the desired payment method, to proceed. Once the payment is processed, our executive will get in touch with you.</p>
   </div>
   <div class="order-through f-shadow p-3 mt-2">
    <h5>Ordering through Emails</h5>
    <p>Select the license type on the Report Description page, and fill the required details on the billing info page. Then, select the desired payment method, to proceed. Once the payment is processed, our executive will get in touch with you.</p>
   </div>
   <div class="order-through f-shadow p-3 mt-2">
    <h5>Ordering through Telephone</h5>
    <p>Select the license type on the Report Description page, and fill the required details on the billing info page. Then, select the desired payment method, to proceed. Once the payment is processed, our executive will get in touch with you.</p>
   </div>
    </div>
   <div class="col-lg-6 bg-risi-order p-4">
    <h5>Payments Modes</h5>
    <ul>
        <li>Credit Card/Debit Card</li>
        <li>PayPal</li>
        <li>Wire Transfer</li>
        <li>American Express</li>
    </ul>
    <p>Select the license type on the Report Description page, and fill the required details on the billing info page. Then, select the desired payment method, to proceed. Once the payment is processed, our executive will get in touch with you.</p>

<div class="f-shadow p-3 mt-2">
    <h5>Online Report Delivery</h5>
    <p>The preferred mode of report delivery shall be the PDF format and MS Excel (for datasets). Upon the receipt of the payment, the digital copy of the report will be shared within the stipulated timeframe, of which you will be duly notified.</p>
</div>
<div class="f-shadow p-3 mt-2">
    <h5>Physical (Hard Copy) Report Delivery</h5>
    <p>The preferred mode of report delivery shall be the PDF format and MS Excel (for datasets). Upon the receipt of the payment, the digital copy of the report will be shared within the stipulated timeframe, of which you will be duly notified.</p>
</div>

</div>
    </section> 
    
   
     <?php include 'lib/footer.php' ?>


   <!-- JavaScript Libraries -->
    <script src="<?=JS;?>jquery-3.4.1.min.js"></script>
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>
</body>

</html>