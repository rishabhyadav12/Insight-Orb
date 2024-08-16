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
        
.our-enquire-bottom {
    background-color: var(--light);
    position: relative;
    margin-top: -155px;
    padding: 10px;
    margin-bottom: 30px;
    border-radius: 7px;
}

.our-enquire-bottom h4 {
    font-size: 17px;
    color: var(--primary);
    padding-top: 5px;
}

.our-enquire-bottom p {
    color: #000;
    font-size: 14px;
    padding-top: 5px;
    line-height: 27px;
    text-align: center;
}

.our-enquire-bottom .enquire-container {
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 16px 20px 16px 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: -2px 2px 22px -10px #88888e;
    border-radius: 10px;
}

.enquire_breadcrumb_row {
    position: relative;
    top: 20px;

    /* background: var(--primary); */
}
.enquire_breadcrumb_row ul {
    padding-left: 0;
}

.enquire_breadcrumb_row ul li {
    display: inline;
    font-size: 12px;
    color: var(--light);
}

.enquire_breadcrumb_row ul li a {
    color: var(--light);
    text-decoration: none;
    font-size: 12px;
}

.enquire_breadcrumb_row ul li + li:before {
    padding: 2px;
    color: #e1e1e1;
    content: "\203A";
    font-size: 15px;
}

.heading-rd-form-details {
    color: var(--light);
    padding: 7px 12px 7px 12px;
    font-size: 14px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    background: #000c43;
    border-radius: 4px 4px 0 0;
}
.rd-form-details {
    border-radius: 4px;
    width: 100%;
    background: var(--light);
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.2);
    margin-bottom: 15px;
    padding: 10px;
}

/* .rd-form-details ul li:nth-child(even) {
    background: #f1f1f1;
} */
.rd-form-details ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.rd-form-details ul li {
    display: block;
    padding: 5px 10px 5px 10px;
}
.rd-form-details-font-dark {
    font-size: 13px;
    font-weight: 600;
    margin-right: 5px;
    color: #000;
}

.rd-form-details-font-light {
    font-size: 13px;
    padding-right: 15px;
    color: #000;
}

.io-mainform-buy-btn {
    /* display: flex; */
    width: 100%;
    background-color: #172d55;
    padding: 12px 5px 12px 14px;
    justify-content: center;
    border-radius: 4px;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

.io-license-form-type {
    width: 85%;
    background: var(--light);
    text-align: center;
    padding: 4px;
    display: inline-block;
    float: left;
    border-radius: 4px;
}

.io-tooltip-form {
    width: 5%;
    text-align: center;
    /* padding: 4px; */
    overflow: hidden;
}

.io-license-type-button-form {
    width: 100%;
    text-align: center;
    padding: 4px;
    margin-top: 14px;
    float: left;
    overflow: hidden;
}

.tooltips-form .tooltipstext-form {
    visibility: hidden;
    width: 375px;
    display: block;
    background-color: var(--primary);
    border: 1px solid #9e9e9e;
    color: var(--light);
    text-align: left;
    padding: 10px;
    font-size: 12px;
    position: absolute;
    bottom: 100%;
    margin-left: -336px;
    line-height: 1.7em;
    border-radius: 4px;
    /* margin-top: 47px; */
}

.tooltips-form {
    position: absolute;
    z-index: 10;
    border-radius: 0;
    width: 20px;
    margin-top: 0;
    /* margin-left: 5px; */
}
.io-license-form-type select {
    outline: 0;
    border: 0;
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    background: none;
}
.io-license-type-button-form a {
    background-color: #fb641b;
    padding: 10px 24px 10px 24px;
    border-radius: 5px;
    color: var(--light);
    font-size: 14px;
    font-weight: 600;
    margin-top: 41px !important;
}
.tooltips-form:hover .tooltipstext-form {
    visibility: visible;
}

.tooltipstext-form ul li {
    border-bottom: 1px dashed #efefef;
    margin-bottom: 15px;
}

.tooltipstext-form ul li b {
    color: #00ff55;
}

.tooltipstext-form ul {
    padding: 0;
    margin-left: 12px;
}

.tooltipstext-form ul li:last-child {
    border: none;
}

.pr-right-enquiry {
    padding: 22px 6px 12px 8px;
    background-color: var(--light);
    box-shadow: -2px 2px 22px -10px #88888e;
    display: flex;
    flex-direction: column;
    border-radius: 6px;
    /* margin-top: 20px; */
    position: sticky;
    top: 40px;
}


.io-rd-connect {
    padding-top: 30px;
}

.rd-connect-title {
    padding: 6px;
    background-color: var(--primary);
    color: var(--light);
    text-align: center;
    font-size: 14px;
    border-bottom: 1px solid var(--light);
    text-transform: capitalize;
}

.io-rd-connect ul {
    margin: -1px 0 0 0;
    padding: 0;
    border: 1px solid #cccbcb;
}

.io-rd-connect ul li {
    list-style: none;
    padding: 12px 0px 8px 4px;
}

.io-rd-connect ul li a {
    font-size: 12px;
    text-decoration: none;
    color: var(--primary);
    font-weight: 600;
}

.io-rd-connect ul li:last-child {
    border: none;
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

.BilTitle {
    font-size: 23px;
    color: var(--primary);
    font-weight: bold;
    padding-bottom: 15px;
    padding-left: 10px;
}

.formTitle {
    font-size: 23px;
    color: var(--primary);
    font-weight: bold;
    padding-bottom: 15px;
    padding-left: 10px;
}

.form-row {
    overflow: hidden;
    width: 100%;
    display: inline-block;
    margin-bottom: 10px;
}

/* .form-left-col {
    float: left;
    width: 49%;
} */
.form-left-col {
    float: left;
    width: 25%;
}

.form-input-col {
    text-align: right;
}

/* .form-right-col {
    float: right;
    width: 49%;
} */
.form-right-col {
    float: left;
    width: 40%;
    margin-left: 15px;
}
.io-checkout-form input[type="email"],
.form-right-col input[type="email"] {
    width: 100%;
    border-radius: 4px;
    border: 1px solid #ababab;
    height: 40px;
    outline: 0;
    color: #000;
    padding-left: 10px;
}
.form-input-col input[type="text"],
.form-right-col input[type="text"],
.form-input-col select {
    padding: 8px 10px;
    border: 1px solid #ababab;
    width: 100%;
    outline: 0;
    border-radius: 4px;
    color: #000;
}
.form-right-col select {
    padding: 8px 10px;
    border: 1px solid #ababab;
    width: 100%;
    outline: 0;
    border-radius: 4px;
    color: #000;
}
.form-input-col input[type="email"],
.form-input-col select {
    padding: 8px 10px;
    border: 1px solid #ababab;
    width: 100%;
    outline: 0;
    border-radius: 4px;
    color: #000;
}

.form-input-col label {
    display: block;
    color: #000;
    margin: 10px 0 5px;
    font-size: 15px;
}

.enq-form-input,
.enq-tittle {
    margin-bottom: 10px;
}

.input-col select {
    color: #000;
    font-size: 15px;
}

.form-proceedbtn-Box {
    text-align: center;
    padding: 10px 0;
}

.form-proceedBtn {
    outline: 0;
    border: none;
    background: #0079d7;
    padding: 10px 40px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    font-family: "Lato", Helvetica, sans-serif;
    color: var(--light);
    border-radius: 4px;
}

.form-para {
    text-align: center;
    font-size: 13px !important;
    font-family: "Lato", Helvetica, sans-serif;
}

.form-para a {
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    color: #b38302;
}
.enqTextarea1 {
    outline: 0;
    border: 1px solid #ababab;
    width: 100%;
    padding: 10px;
    font-size: 14px;
    height: 70px;
    border-radius: 4px;
    color: #000;
}

.astrik-color {
    padding: 0;
    color: red;
    font-size: 16px;
}
@media only screen and (min-width: 320px) and (max-width: 480px) {
    .enquire_breadcrumb_row {
        position: relative;
        top: 10px;
    }
}

@media only screen and (min-width: 320px) and (max-width: 991px) {
    .form-input-col input[type="text"],
    .form-right-col input[type="text"],
    .form-input-col select {
        padding: 8px 10px;
        border: 1px solid #ababab;
        width: 95%;
        outline: 0;
        border-radius: 4px;
        color: #000;
    }
    .form-input-col {
        text-align: left;
        padding-left: 18px;
    }
    .form-right-col input[type="email"] {
        width: 95%;
        border-radius: 4px;
        border: 1px solid #ababab;
        height: 40px;
        outline: 0;
        color: #000;
        padding-left: 10px;
    }
    .enqTextarea1 {
        outline: 0;
        border: 1px solid #ababab;
        width: 95%;
        padding: 10px;
        font-size: 14px;
        height: 70px;
        border-radius: 4px;
        color: #000;
    }
    .form-right-col select {
        padding: 8px 10px;
        border: 1px solid #ababab;
        width: 95%;
        outline: 0;
        border-radius: 4px;
        color: #000;
    }
    .back-to-report{
        margin-top:10px
    }
}

@media (max-width: 991.98px) {
    .form-left-col,
    .form-right-col {
        width: 100%;
    }
}


.back-to-report{
    display: inline-block;
    float: right;
    background: #ff5151;
    padding: 4px 16px;
    border-radius: 20px;
}
.back-report{
    padding: 0 10px;
    overflow: hidden;
    color: var(--light);
}
.back-report:hover{
    color: var(--light);
}
.back-report img{
    height:20px;
    vertical-align:text-bottom;
    margin-right:4px
}

    </style>
 

</head><body>

<?php include"lib/top-bar.php";?>

<div class="enquiry-start">
    
<?php include"lib/nav.php";?>


    <!-- Page Header Start -->
    <div class="container-fluid pr-background" style="height:210px !important;overflow:hidden">
        <section class="container">
            <div class="enquire_breadcrumb_row">
                <nav>
                   <ul>
                    <li>
                      <a href="index.php" title="Home" target="_blank">Home</a>
                    </li>
                   <li><a href="#" title="Home" target="_blank">Seasonings-Spices-Market</a></li>
                   <li>Enquire Before Purchase</li>
                  
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End -->
           
    </section>
    <section class="our-enquire-bottom container f-shadow-down" >
        <div class="row" style="justify-content: space-between;">
            
            <div class="col-lg-9 justify-content-center">
                <div class="io-checkout-form" style="padding: 5px 0 !important;">
                <div class="BilTitle" style="font-size: 15px;">Please fill the form with the queries, our representative will shortly contact you &nbsp; 
                <div class="back-to-report">
                    <a href="rd-details.php" class="back-report">
                    <img src="img/icons/back-arrow.png" />Back to report page</a>
                </div>
                </div>

                    <form action="#" method="POST" name="" style="margin-top: 10px;">
                     <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="name">Name<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <input type="text" id="name" name="name" value="" required="" autocomplete="off">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="emailid">Business Email<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <input type="email" id="emailid" name="emailid" value="" required>
                        </div>
                        </div>
                      
                        <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="c__name">Company Name<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <input type="text" id="c__name" name="c__name" value="" required autocomplete="off">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="contact">Contact No.<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <input type="text" id="contact" name="contact" value="" required autocomplete="off">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="country">Country<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <select name="country" id="country" required>
                        <?php include 'lib/country.php' ?>
                        </select>
                        </div>
                        </div>                      
                       <div class="form-row">
                       <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="message">Any Specific research requirement?</label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <textarea class="enqTextarea1" id="message" name="message"></textarea>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-proceedbtn-Box">
                        <button type="submit" name="proceedCheckout" class="form-proceedBtn">Submit Request</button>
                        </div>
                        
                        
                        <p class=""><svg fill="#172d55" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#172d55"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7759999999999998"></g><g id="SVGRepo_iconCarrier"><path d="M21.406,5.086l-9-4a1,1,0,0,0-.812,0l-9,4A1,1,0,0,0,2,6v.7a18.507,18.507,0,0,0,9.515,16.17,1,1,0,0,0,.97,0A18.507,18.507,0,0,0,22,6.7V6A1,1,0,0,0,21.406,5.086ZM20,6.7a16.507,16.507,0,0,1-8,14.141A16.507,16.507,0,0,1,4,6.7V6.65l8-3.556L20,6.65ZM11,10h2v8H11Zm0-4h2V8H11Z"></path></g></svg>&nbsp;We respect your <a href="privacy-policy.php" target="_blank" title="Privacy Policy" style="text-decoration: none; font-weight:600; font-size: 13px; color: #033496;">privacy</a>. Your information will not be shared.</p>
                        </div>
                        </form>
            </div>
                </div>
                <div class="col-lg-3">
                    <div class="pr-right-enquiry">
                        <div class="report-details">
                            <div class="heading-rd-form-details">Report details</div>
                            <div class="rd-form-details">
                            <ul> <li>
                             <span class="rd-form-details-font-dark">Title:</span>
                             <span class="rd-form-details-font-light">Seasonings-Spices-Market</span>
                             </li> 
                             <li>
                             <span class="rd-form-details-font-dark">Report Code:</span>
                             <span class="rd-form-details-font-light">12662</span>
                             </li>

</ul>
                            </div>
                        </div>
                        <div class="io-mainform-buy-btn">
                            <form action="#" method="POST">
            <div class="io-license-form-type">
             <select>
                <!-- <option>License Type</option> -->
                <option>Single User License ($4900)</option>
                <option>Group License ($6400)</option>
                <option>Enterprise License ($8400)</option>
            </select>
           </div>
           <div class="io-tooltip-form">
            <span class="tooltips-form">
                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 100 100"><g><path fill="#F1C93B" d="M50,12.5c-20.712,0-37.5,16.793-37.5,37.502C12.5,70.712,29.288,87.5,50,87.5 c20.712,0,37.5-16.788,37.5-37.498C87.5,29.293,70.712,12.5,50,12.5z M53.826,70.86c0,0.72-0.584,1.304-1.304,1.304h-5.044 c-0.72,0-1.304-0.583-1.304-1.304V46.642c0-0.72,0.584-1.304,1.304-1.304h5.044c0.72,0,1.304,0.583,1.304,1.304V70.86z M49.969,39.933c-2.47,0-4.518-2.048-4.518-4.579c0-2.53,2.048-4.518,4.518-4.518c2.531,0,4.579,1.987,4.579,4.518 C54.549,37.885,52.5,39.933,49.969,39.933z"></path></g></svg>
            <span class="tooltipstext-form"> 
                <ul>
                <li><b>Single User License:</b>&nbsp;The report will be delivered in PDF format without printing rights. It is recommended for a single user.</li>
                <li><b>Group License:</b>&nbsp; The report will be delivered in PDF format along with the printing rights. It is recommended for up to five users.</li>
                <li><b>Enterprise License:</b>&nbsp; The report will be delivered in PDF format along with printing rights and detailed Excel sheet. It is recommended for organizations where multiple people would like to access the report from multiple locations. </li>
            </ul>
            </span></span>


           </div>
           <div class="io-license-type-button-form">
             <a href="checkout.php">Buy Now</a>
           </div>
           </form>
    </div>
                        
                             <div class="io-rd-connect">
                                 <div class="rd-connect-title">Connect with our sales team</div>
                                  <div class="connect">
                                     <ul>
                                         <li style="border-bottom:1px solid #cccbcb"><div style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="25px" width="25px" style="margin-right: 7px;"> 
                                             <path fill="#ff5151" d="M1 11.487V43h48V7H1v4.487zm2 1.566l15.6 12.209L3 38.886V13.053zM3.62 41l16.584-14.483L25 30.27l4.796-3.753L46.38 41H3.62zM47 38.886L31.4 25.261 47 13.052v25.834zM3 9h44v1.513L25 27.73 3 10.513V9z"></path>
                                         </svg></div>
                                         <div style="text-align: center;"><a href="mailto:enquiry@insightsorb.com">enquiry@insightsorb.com</a></div></li>
                                     
                                         <li>
                                            <div style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" height="25px" width="25px" style="margin-right: 7px;">
                                             <path fill="#ff5151" d="M60,31.81a1,1,0,0,1-1-1C59,16.57,47.75,5,33.89,5a1,1,0,1,1,0-2C48.84,3,61,15.48,61,30.83A1,1,0,0,1,60,31.81Z"></path>
                                             <path fill="#ff5151" d="M49.1 31.81a1 1 0 0 1-1-1A14.46 14.46 0 0 0 33.89 16.17a1 1 0 0 1 0-2 16.43 16.43 0 0 1 16.2 16.62A1 1 0 0 1 49.1 31.81zM55 52.83a19.93 19.93 0 0 1-5.31 6.6A7.25 7.25 0 0 1 44 60.9c-9.07-1.54-18-5.52-26.91-14.28-8.51-9.13-12.5-18.45-14-27.76A7.74 7.74 0 0 1 4.52 13 19.51 19.51 0 0 1 11 7.5a2.61 2.61 0 0 1 3.78 0l8.81 9.15a3.11 3.11 0 0 1 0 4.24l-6.24 6.77C20 33.47 29.79 43.55 35.41 46.27L42 39.84a2.91 2.91 0 0 1 4.12 0l8.9 9A2.81 2.81 0 0 1 55 52.83z"></path>
                                         </svg></div>
                                            <div style="padding-top: 2px;text-align: center;"><a href="tel:+1-347-960-6455">International: +1-347-960-6455</a>
                                            </div>
                                        </li>
                                           </ul>
                                 </div>
                             </div>
                         </div>
                </div>
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