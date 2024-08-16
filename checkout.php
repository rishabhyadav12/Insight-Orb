<?php include"lib/var-const.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Insights orb</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="<?=IMG;?>favicon/favicon.png" rel="icon">
    <link href="<?=CSS;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?=CSS;?>commoncss.css" rel="stylesheet">
    <style type="text/css">

.progress-bar {
    background:var(--light);
    text-align: center;
    transform: translateY(-13px);
    overflow:hidden
}

.our-checkout-top {
    padding: 14px 32px 14px 32px;
    background-color: var(--light);
    margin-bottom: 20px;
    margin-top: -115px;
    border-radius: 10px 10px 0 0;
}

.our-checkout-top h1 {
    text-align: center;
    justify-content: center;
    /* padding-bottom: 10px; */
    font-size: 27px !important;
    padding-top: 10px !important;
}

.our-checkout-top p {
    line-height: 28px;
    justify-content: center;
}

.our-pr-top {
    background-color: var(--light);
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 30px;
}

.our-pr-top h4 {
    font-size: 17px;
    color: var(--primary);
    padding-top: 5px;
    line-height: 25px;
}

.our-pr-top p {
    color: #000;
    font-size: 15px;
    padding-top: 5px;
    line-height: 27px;
}

.io-right-checkout {
    border: 2px solid #c2c2c2;
    padding: 4px;
    box-shadow: 0 1rem 1.6rem rgba(75, 74, 120, 0.11);
}

.orderReport {
    padding: 10px 0 4px 10px;
    overflow: hidden;
}

.orderTitle {
    font-size: 23px;
    color: var(--primary);
    font-weight: bold;
    padding-bottom: 15px;
    padding-left: 10px;
    padding-top: 10px;
}

.report-buy-detail {
    padding-top: 10px;
    padding-bottom: 14px;
    display: flex;
    border-bottom: 1px solid #c5c5c5;
    overflow: hidden;
    justify-content: space-around;

}

.report-buy-detail1 {
    padding-top: 10px;
    display: flex;
    overflow: hidden;
    justify-content: space-around;
}

.io-report-buy-name p {
    font-size: 19px;
    font-weight: 700;
    color: #000;
    padding-bottom: 12px;
    border-bottom: 1px solid #cecece;
}

.io-report-buy-name span {
    font-size: 15px;
    color: #000;
    padding-top: 10px;
    padding-bottom: 10px;
}

.io-report-buy-license p {
    font-size: 19px;
    font-weight: 700;
    color: #000;
    padding-bottom: 12px;
    border-bottom: 1px solid #cecece;
}

.io-report-buy-license span {
    font-size: 15px;
    color: #000;
}

.io-report-buy-price p {
    font-size: 19px;
    font-weight: 700;
    color: #000;
    padding-bottom: 12px;
    border-bottom: 1px solid #cecece;
}

.io-total-price {
    padding: 10px 10px 4px 10px;
    display: flex;
    width: 100%;
}

.io-report-buy-price span {
    color: #000;
}

.price-left {
    text-align: start;
}

.price-left p {
    font-size: 20px;
    font-weight: 700;
    color: #000;
    text-align: start;
}

.price-right p {
    font-size: 20px;
    font-weight: 700;
    color: #000;
    text-align: start;
}

/* .checkout-start {
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

.BilTitle {
    font-size: 23px;
    color: var(--primary);
    font-weight: bold;
    padding-bottom: 15px;
    padding-left: 10px;
}

.io-checkout-form input[type="text"] {
    width: 100%;
    border-radius: 4px;
    border: 1px solid #7a7a7a;
    height: 40px;
    outline: 0;
    color: #000;
    padding-left: 10px;
}

.io-checkout-form {
    padding: 16px;
    box-shadow: -2px 2px 22px -10px #88888e;
}

.io-checkout-form ::placeholder {
    font-size: 13px;
}

.bil-row {
    overflow: hidden;
    width: 100%;
}

.bil-left-col {
    float: left;
    width: 49%;
}

.bil-right-col {
    float: right;
    width: 49%;
}
.bil-para {
    text-align: center;
    font-size: 13px !important;
    font-family: "Lato", Helvetica, sans-serif;
}

.bil-para a {
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    color: #b38302;
}

.input-col input[type="text"],
.input-col select {
    padding: 8px 10px;
    border: 1px solid #ababab;
    width: 100%;
    outline: 0;
    border-radius: 4px;
}

.input-col input[type="email"],
.input-col select {
    padding: 8px 10px;
    border: 1px solid #ababab;
    width: 100%;
    outline: 0;
    border-radius: 4px;
    height: 40px;
}

.input-col label {
    display: block;
    color: #000;
    margin: 10px 0 5px;
    font-size: 15px;
}

.input-col select {
    color: #000;
    font-size: 15px;
}

.proceedbtn-Box {
    text-align: center;
    padding: 10px 0;
}

.proceedBtn {
    outline: 0;
    border: none;
    background: #0079d7;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    font-family: "Lato", Helvetica, sans-serif;
    color: var(--light);
    border-radius: 4px;
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
<?php include "lib/top-bar.php";?>

<div class="checkout-start">

<?php include "lib/nav.php";?>

    <!-- Page Header Start -->
    <div class="container-fluid pr-background" style="height:200px !important;overflow:hidden">
        <section class="container">
            <div class="breadcrumb_row_check">
                <nav>
                   <ul>
                    <li><a href="#" title="Home" target="_blank">Home</a></li>
                    <li>Checkout</li>
                  
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End -->
    
    <section class="our-checkout-top container f-shadow-down">
        <div class="row">
        <div class="progress-bar">
	    <img src="img/1-1.png" draggable="false" alt="progress-bar">
    </div>
            <h1 >Checkout</h1>

             </div>
    </section>
    <section class="our-pr-top container f-shadow-down">
        <div class="row" style="justify-content: space-between;">
            <div class="col-lg-6">
                <div class="io-right-checkout">
                    <div class="orderTitle">Your Order</div>
                    <div class="orderReport container">
                        <div class="row">
                            <div class="report-buy-detail">
                            <div class="col-md-6 io-report-buy-name">
                                <p>Report Title</p>
                                <span>Seasonings and Spices Market</span>
                            </div>
                            <div class="col-md-4 io-report-buy-license">
                                <p>License Type</p>
                                <span>Single User License</span>
                            </div>
                            <div class="col-md-2 io-report-buy-price">
                                <p>Price</p>
                                <span>$4,990</span>
                            </div>
                      </div>
                                                     
                      <div class="report-buy-detail1">
                            <div class="col-md-10 price-left"><p>Total</p></div>
                            <div class="col-md-2 price-right"><p>$4,990</p></div>
                       
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                    <div class="io-checkout-form">
                        <div class="BilTitle">Biling Information</div>
                        <form action="payment-method.php" method="POST" name="" style="margin-top: 10px;">
                            <div class="bil-row">
                            <div class="bil-left-col">
                            <div class="input-col">
                            <label for="name">Name<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="text" name="name" id="name" value="" required>
                            </div>
                            </div>
                            <div class="bil-right-col">
                            <div class="input-col">
                            <label for="emailid">Email<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="email" name="emailid" id="emailid" value=""  required >
                            </div>
                            </div>
                            </div>
                            <div class="bil-row">
                            <div class="bil-left-col">
                            <div class="input-col">
                            <label for="jobtitle">Job Title<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="text" name="jobtitle" id="jobtitle" value="" required>
                            </div>
                            </div>
                            <div class="bil-right-col">
                            <div class="input-col">
                            <label for="c__name">Company Name<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="text" name="c__name" id="c__name" value="" required>
                            </div>
                            </div>
                            </div>
                            <div class="bil-row">
                            <div class="bil-left-col">
                            <div class="input-col">
                            <label for="contact">Contact No.<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="text" name="contact" id="contact" value="" required>
                            </div>
                            </div>
                            <div class="bil-right-col">
                            <div class="input-col">
                            <label for="address">Address<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="text" name="address" id="address" value="" required>
                            </div>
                            </div>
                            </div>
                            <div class="bil-row">
                            <div class="bil-left-col">
                            <div class="input-col">
                            <label for="city">City<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="text" name="city" id="city" value="" required>
                            </div>
                            </div>
                            <div class="bil-right-col">
                            <div class="input-col">
                            <label for="state">State<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="text" name="state" id="state" value="" required>
                            </div>
                            </div>
                            </div>
                            <div class="bil-row">
                            <div class="bil-left-col">
                            <div class="input-col">
                            <label for="country">Country<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <select name="country" id="country" required>
                            <?php include 'lib/country.php' ?>        
                        </select>
                            </div>
                            </div>
                            <div class="bil-right-col">
                            <div class="input-col">
                            <label for="zipcode">Zipcode<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                            <input type="text" name="zipcode" id="zipcode" value="" required>
                            </div>
                            </div>
                            </div>
                           
                            <div class="bil-row">
                            <div class="proceedbtn-Box">
                            <button type="submit" name="proceedCheckout" class="proceedBtn">Proceed To Secure Checkout</button>
                            </div>
                            <p class="bil-para">Clicking <b>Proceed to Secure Checkout</b> means that you agree to the Insights Orb
                            <a href="terms-conditions.php" target="_blank" style="color:#172d55">terms &amp; conditions</a></p>
                            <p class="bil-para"><svg fill="#172d55" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#172d55"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7759999999999998"></g><g id="SVGRepo_iconCarrier"><path d="M21.406,5.086l-9-4a1,1,0,0,0-.812,0l-9,4A1,1,0,0,0,2,6v.7a18.507,18.507,0,0,0,9.515,16.17,1,1,0,0,0,.97,0A18.507,18.507,0,0,0,22,6.7V6A1,1,0,0,0,21.406,5.086ZM20,6.7a16.507,16.507,0,0,1-8,14.141A16.507,16.507,0,0,1,4,6.7V6.65l8-3.556L20,6.65ZM11,10h2v8H11Zm0-4h2V8H11Z"></path></g></svg>&nbsp;We respect your <a href="privacy-policy.php" target="_blank" title="Privacy Policy" style="text-decoration: none; font-weight:600; font-size: 13px; color: #033496;">privacy</a>. Your information will not be shared.</p>
                            </div>
                            </form>
                </div>
                
                
            </div>
</div>
       </div>
    </section>

    
</div>
    
     <?php include 'lib/footer.php' ?>


   <!-- JavaScript Libraries -->
    <script src="<?=JS;?>jquery-3.4.1.min.js"></script>
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>

</body>

</html>