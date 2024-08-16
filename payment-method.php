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
    <style type="text/css">

.progress-bar{
    
    background:var(--light);
    text-align: center;
    transform: translateY(-13px);
    overflow: hidden;
}

.io-order-summary{
    border-bottom: 1px solid #000;
    color: #000;
    font-weight: 500;
    font-size:18px"
}
	
.our-checkout-y-top {
    padding: 14px 32px 14px 32px;
    background-color: var(--light);
    margin-bottom: 20px;
    margin-top: -143px;
    border-radius: 10px 10px 0 0;
}

.our-checkout-y-top h1 {
    text-align: center;
    justify-content: center;
    /* padding-bottom: 10px; */
    font-size: 27px !important;
    padding-top: 10px !important;
}

.our-checkout-y-top p {
    line-height: 28px;
    justify-content: center;
}

.io-payment-mode {
    padding: 5px 10px 5px 20px;
}

.io-cf {
    zoom: 1;
    padding-left: 5px;
}

.io-cf:before,
.io-cf:after {
    content: " ";
    display: table;
}

.io-two {
    width: 49%;
    max-width: 49%;
}

.io-payment-mode .io-p-plan input,
.io-payment-mode .payment-plan input,
.io-payment-mode .payment-type input {
    display: none;
}

.col:first-of-type {
    margin-left: 0;
}

.io-payment-mode label {
    position: relative;
    color: #000;
    font-size: 14px;
    text-align: center;
    display: block;
    cursor: pointer;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin-top: 20px;
    text-transform: uppercase;
}

.io-payment-mode .io-p-plan input:checked + label .io-payment-inner-label,
.io-payment-mode .payment-plan input:checked + label .io-payment-inner-label,
.io-payment-mode .payment-type input:checked + label .io-payment-inner-label {
    border-color: var(--primary);
    border-style: solid;
    border-width: 5px;
    color: var(--light);
    border-radius: 4px;
    box-shadow:
        0 4px 8px 0 rgb(10, 145, 16, 0.2),
        0 6px 20px 0 rgb(10, 145, 16, 0.19);
}

.io-payment-mode label .io-payment-inner-label {
    border: 1px solid #e1e1e1;
    background-color: var(--light);
    padding: 22px 15px 15px 15px;
    height: 190px;
}

.io-payment-mode .io-p-plan input:checked + label:after,
.io-payment-mode .payment-plan input:checked + label:after,
.io-payment-mode .payment-type input:checked + label:after {
    content: "\2713";
    font-weight: 600;
    color: var(--light);
    height: 35px;
    font-size: 20px;
    width: 35px;
    line-height: 35px;
    border-radius: 100%;
    background-color: var(--primary);
    z-index: 999;
    position: absolute;
    top: -10px;
    right: -10px;
}

.io-payment-mode label h4 {
    font-size: 13.5px;
    color: #333;
    padding-top: 5px;
    text-transform: uppercase;
    padding-bottom: 5px;
}

.io-payment-mode .io-p-plan img {
    width: 100%;
}

.io-payment-mode label img {
    background: var(--light);
}

.io-payment-mode label p {
    font-size: 11px;
    color: #333;
    padding-top: 5px;
    text-transform: uppercase;
}

.io-cf:after {
    clear: both;
}

.paym-top {
    background-color: #e2e2e248;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 30px;
    margin-top: 30px
}

.paym-top h4 {
    font-size: 19px;
    color: var(--primary);
    padding-top: 5px;
    text-align: center;
}

.paym-top p {
    color: #000;
    font-size: 15px;
    padding-top: 5px;
    line-height: 27px;
}

.paym-top .paym-container {
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 16px 20px 16px 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: -2px 2px 22px -10px #88888e;
    border-radius: 10px;
}

.paym-button {
    display: flex;
    justify-content: center;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 20px;
}

.paym-submit {
    padding: 10px 64px;
    background: #ff6101;
    color: var(--light);
    outline: 0;
    border: none;
}

.paym-submit:hover {
    padding: 10px 64px;
    background: var(--primary);
    color: var(--light);
}
/* .paym-start {
    margin-bottom: -150px;
} */

.breadcrumb_row_check ul {
    padding: 10px 4px 10px 0px;
    list-style: none;
    text-align: left;
    margin-bottom: 0;
    /* border: 1px solid var(--light); */
}

.breadcrumb_row_check {
    position: relative;
    top: 40px;
    /* background: var(--primary); */
}

.breadcrumb_row_check ul li {
    display: inline;
    font-size: 12px;
    color: var(--light);
}

.breadcrumb_row_check ul li a {
    color: var(--light);
    text-decoration: none;
    font-size: 12px;
}

.breadcrumb_row_check ul li + li:before {
    padding: 2px;
    color: #e1e1e1;
    content: "\203A";
    font-size: 15px;
}

.io-rd-line-height p {
    line-height: 25px;
}

.io-rd-line-height .p1 {
    line-height: 10px;
}
@media only screen and (min-width: 320px) and (max-width: 480px) {
 
 .progress-bar img {
     width:100vw;
     height: auto;
     margin-left: -35px;
 }

}
@media only screen and (min-width: 481px) and (max-width: 720px) {
 
 .progress-bar img {
     width:90vw;
     height: auto;
     margin-left: -35px;
 }

}
@media only screen and (min-width: 721px) and (max-width: 992px) {

 .progress-bar img {
     width: 90vw;
     height: auto;
     margin-left: -35px;
 }

}
	</style>
</head>

<body>
<?php include"lib/top-bar.php";?>

<div class="paym-start">

<?php include"lib/nav.php";?>


    <!-- Page Header Start -->
    <div class="container-fluid pr-background" style="height: 228px !important;overflow:hidden">
        <section class="container">
            <div class="breadcrumb_row_check">
                <nav>
                   <ul>
                    <li>
                      <a href="#" title="Home" target="_blank">Home</a>
                    </li>
                   <li>Checkout</li>
                   <li>Choose payment method</li>
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End -->
    
    <section class="our-checkout-y-top container f-shadow-down">
        <div class="row">
        <div class="progress-bar">
	    <img src="img/2-2.png" draggable="false" alt="progress-bar">
    </div>
      
            <h1>Choose Payment Method</h1>

            <div class="rd-container io-rd-line-height">
            <form action="" method="POST">
                <div class="row">
    <div>
        <p class="io-order-summary">Order Summary</p>
    </div>
                    <div class="col-lg-1">
                        <div style="text-align: center;">
                        <img src="./img/Market.png" style="height: 95px">
                    </div>
                </div>
                    <div class="col-lg-11">
                        <p style="font-size: 14px;color: #000;"><span style="font-weight: 800;font-size: 14px;">Report Title:</span> Seasonings and Spices Market Size</p>
                        <p style="color: #000;font-size: 14px;" class="p1"><span style="font-weight: 800;font-size: 14px;">License Type:</span> Single User License</p>
                        <p style="color: #050505;font-size: 14px;" class="p1"> <span style="font-weight: 800;font-size: 14px;">Price:</span> $4990</p>
                    </div>
                </div>
                
             </div>
             </div>
    

    <section class="paym-top container f-shadow-down" >
        <div class="row" style="justify-content: space-between;">
            <div class="col-lg-8" style="margin:auto">
            
                <div class="io-payment-mode io-cf">
                    <div class="io-p-plan io-cf" style="display: flex;justify-content: space-between;">
                     
                    <input type="radio" name="paymentmode" id="icicipay" value="icicipayment" checked="" data-gtm-form-interact-field-id="1">
                           <label class="io-two col" for="icicipay">
                                <div class="io-payment-inner-label">
                                 <h4>Pay with Credit/Debit Card</h4>
                                    <img src="./img/icons/icicipayment.jpg" alt="icicipay" style="padding-top: 30px;">
                                        <p style="font-size: 10px;">Powered By <img src="./img/icons/icicibank.png" alt="icicibank" style="width: 60px;border:none;padding: 0px;background: transparent; vertical-align: middle;"></p>
                                </div>
                           </label>
                        <input type="radio" name="paymentmode" id="paypalpay" value="paypalpayment"  data-gtm-form-interact-field-id="0">
                            <label class="io-two col paypal_hide" for="paypalpay" style="margin-left: 25px;">
                                <div class="io-payment-inner-label">
                                    <h4>Pay with Paypal OR Credit/Debit Card</h4>
                                        <img src="./img/icons/paypalicon.jpg" alt="paypalicon" style="padding-top: 20px;">
                                            <p style="font-size: 10px;">Powered By <img src="./img/icons/paypal.png" alt="icicibank" style="width: 60px;border:none;padding: 0px;background: transparent; vertical-align: middle;"></p>
                                </div>
                            </label>
                            
                     </div>
                     </form>
                        <div class="paym-button">
                          <button type="submit" class="paym-submit">Proceed</button>     
                        </div>
                </div>
            </div>
        </div>
    </section>
    </section>
     </div>
    
     <?php include 'lib/footer.php' ?>


  <!-- JavaScript Libraries -->
    <script src="<?=JS;?>jquery-3.4.1.min.js"></script>
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>

</body>

</html>