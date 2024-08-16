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

    .our-search-top {
    background-color: #e2e2e248;
    position: relative;
    top: 15px;
    padding: 10px;
    border-radius: 10px;
}

.our-search-top h4 {
    font-size: 16px;
    color: #000 !important;
    padding-top: 5px;
    padding-bottom: 5px;
    line-height: 1.5rem;
    font-weight: 700 !important;
}

.our-search-top h4 > a {
    color: #000;
}

.our-search-top p {
    color: #000;
    font-size: 14px;
    line-height: 23px;
}

.our-search-top p > a {
    color: #0a58ca;
    font-weight: 600;
}

.our-search-top .search-container {
    margin-top: 6px;
    margin-bottom: 20px;
    padding: 17px 15px 17px 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: -2px 2px 22px -10px #88888e;
    border-radius: 10px;
}

.search-listing {
    padding: 6px 0 6px 0;
    display: flex;
    width: 100%;
    justify-content: start;
    border-bottom: 1px solid #000;
}

.search-listing h1 {
    font-size: 20px;
    color: #000;
}

.search-listing h1 q {
    font-size: 18px;
    color: #b90000;
}

.search-list-industry {
    display: flex;
    width: 100%;
    justify-content: start;
}

.search-list-industry ul {
    display: flex;
    list-style: none;
    flex-wrap: wrap;
    padding-left: 0;
    margin-left: 4px;
    cursor: pointer;
}

.search-list-industry ul li {
    display: block;
    list-style: none;
    background-color: var(--primary);
    color: var(--light);
    font-size: 12px;
    /* margin-left: 10px; */
    padding: 14px 25px 14px 25px;
    flex-wrap: wrap;
    overflow: hidden;
}

.search-list-industry ul li:first-child {
    margin-left: 0;
}

.search-list-industry ul li.active {
    border-bottom: 1px solid var(--light);
}

.search-list-block.active {
    display: block;
}

.search-list-block {
    display: none;
}
.search-listing-start {
    margin-bottom: 40px;
}


.search-list-industry ul li.active {
    background-color: #01649e;
    color: var(--light);
    border-bottom: none;
}

.search-list-industry ul li.active svg {
    fill: var(--light);
}

.search-container a:hover {
    color: var(--primary);
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
}

@media (max-width: 991.98px) {
    .form-left-col,
    .form-right-col {
        width: 100%;
    }
}

</style>

</head><body>
<?php include "lib/top-bar.php";?>

<div class="search-listing-start">

<?php include "lib/nav.php";?>

    <section class="our-search-top container f-shadow-down" >
        <div class="row" style="justify-content: space-between;">
                <div class="col-lg-12">

                    <div class="row">
                    <div class="col-md-4">
                    
                    <div class="search-list-industry">
                        <ul>
                            <li class="search-listing-tab active" data-target="site-tab1"><svg style="height:20px!important" fill="#fff" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m20 8-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM9 19H7v-9h2v9zm4 0h-2v-6h2v6zm4 0h-2v-3h2v3zM14 9h-1V4l5 5h-4z"></path></g></svg>&nbsp;Reports</li>
                            <li class="search-listing-tab" data-target="site-tab2"><svg fill="#172d55" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 474.557 474.557" xml:space="preserve" width="20px" height="20px" stroke="#172d55"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M430.801,35.247V0H12.975v439.332H14.7c3.904,16.092,15.66,35.225,42.257,35.225h404.625V35.247H430.801z M404.398,26.381c0,6.752,0,38.784,0,81.732H39.313c0-42.947,0-74.958,0-81.732C63.105,26.381,380.606,26.381,404.398,26.381z M39.313,127.203h365.085c0,109.407,0,269.635,0,285.813c-23.814,0-341.293,0-365.085,0 C39.313,396.816,39.313,236.61,39.313,127.203z M435.266,448.219c-24.677,0-378.308,0-378.308,0 c-8.132,0-12.468-4.314-14.819-8.887h388.662V61.563c1.898,0,3.494,0,4.465,0C435.266,85.507,435.266,424.297,435.266,448.219z"></path> <rect x="237.85" y="150.693" width="132.768" height="26.359"></rect> <rect x="237.85" y="204.254" width="132.768" height="26.424"></rect> <rect x="237.85" y="257.836" width="132.768" height="26.467"></rect> <rect x="237.85" y="308.527" width="132.768" height="26.489"></rect> <rect x="237.85" y="362.109" width="132.768" height="26.424"></rect> <rect x="63.839" y="150.693" width="135.745" height="133.609"></rect> <rect x="147.512" y="43.573" width="157.078" height="46.96"></rect> <rect x="62.372" y="311.439" width="139.757" height="26.467"></rect> <rect x="62.372" y="364.956" width="139.757" height="26.446"></rect> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>&nbsp;Press Release</li>
                            
                        </ul>
                    </div>
                </div>
                    <div class="col-md-8">
                    <div class="search-listing">
                        <h1>Search Results: <q> Seasonings and Spices Market </q></h1>
                    </div>
                </div>
            </div>
                   <div id="site-tab1" class="search-list-block active">
                    
                       <div class="search-container">
                        <h4><a href="" target="_blank">Seasonings and Spices Market Size and Share Analysis by Product (Whole, Ground), End Use (Industrial, Food Service, Retail), Application (Meat & Poultry Products, Snacks & Convenience Food, Soup, Sauces), Nature (Conventional, Organic)- Global Industry Demand Forecast to 2030</a></h4>   
                        <p>The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. <a href="" style="color:#0a58ca">Read More</a></p>
                    </div>
                    <div class="search-container">
                        <h4><a href="" target="_blank">Seasonings and Spices Market Size and Share Analysis by Product (Whole, Ground), End Use (Industrial, Food Service, Retail), Application (Meat & Poultry Products, Snacks & Convenience Food, Soup, Sauces), Nature (Conventional, Organic)- Global Industry Demand Forecast to 2030</a></h4>   
                        <p>The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. <a href="" style="color:#0a58ca">Read More</a></p>
                    </div>
                    <div class="search-container">
                        <h4><a href="" target="_blank">Seasonings and Spices Market Size and Share Analysis by Product (Whole, Ground), End Use (Industrial, Food Service, Retail), Application (Meat & Poultry Products, Snacks & Convenience Food, Soup, Sauces), Nature (Conventional, Organic)- Global Industry Demand Forecast to 2030</a></h4>   
                        <p>The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. <a href="" style="color:#0a58ca">Read More</a></p>
                    </div>
                    <div class="search-container">
                        <h4><a href="" target="_blank">Seasonings and Spices Market Size and Share Analysis by Product (Whole, Ground), End Use (Industrial, Food Service, Retail), Application (Meat & Poultry Products, Snacks & Convenience Food, Soup, Sauces), Nature (Conventional, Organic)- Global Industry Demand Forecast to 2030</a></h4>   
                        <p>The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. <a href="" style="color:#0a58ca">Read More</a></p>
                    </div>
                    <div class="search-container">
                        <h4><a href="" target="_blank">Seasonings and Spices Market Size and Share Analysis by Product (Whole, Ground), End Use (Industrial, Food Service, Retail), Application (Meat & Poultry Products, Snacks & Convenience Food, Soup, Sauces), Nature (Conventional, Organic)- Global Industry Demand Forecast to 2030</a></h4>   
                        <p>The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. <a href="" style="color:#0a58ca">Read More</a></p>
                    </div>
                    <div class="search-container">
                        <h4><a href="" target="_blank">Seasonings and Spices Market Size and Share Analysis by Product (Whole, Ground), End Use (Industrial, Food Service, Retail), Application (Meat & Poultry Products, Snacks & Convenience Food, Soup, Sauces), Nature (Conventional, Organic)- Global Industry Demand Forecast to 2030</a></h4>   
                        <p>The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. <a href="" style="color:#0a58ca">Read More</a></p>
                    </div>
                       
                    </div>
                    <div id="site-tab2" class="search-list-block">
                        <div class="search-container">
                         <h4><a href="" target="_blank">Seasonings and Spices Market Size and Share Analysis by Product </a></h4>   
                         <p>The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. The global brain monitoring market generated USD 6,159 million revenue in 2022, and it is projected to witness a CAGR of 6.50% during 2022–2030. <a href="" style="color:#0a58ca">Read More</a></p>
                        </div>
                       
                     </div>
                     <div class="col-lg-12">
                 <div class="io-checkout-form" style="padding: 5px 0 !important;">
                    <div class="BilTitle" style="font-size: 15px;"><div class="BilTitle" style="font-size: 15px;">Please fill the form below and our expert will get in touch with you.</div></div>
                    <form action="#" method="POST" style="margin-top: 10px;">
                    <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="name">Name<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <input type="text" name="name" id="name" value="" required autocomplete="off">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="emailid">Business Email<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <input type="email" name="emailid" id="emailid" value="" required>
                        </div>
                        </div>
                      
                        <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="cname">Company Name<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <input type="text" name="cname" id="cname" value="" required autocomplete="off">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="contact-no">Contact No.<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <input type="text" name="contact-no" id="contact-no" value="" required autocomplete="off">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-left-col">
                        <div class="form-input-col">
                        <label for="country">Country<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        </div>
                        </div>
                        <div class="form-right-col">
                        <select name="country" id="country" required autocomplete="off">
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
                        <textarea class="enqTextarea1" id="message" name="message" required></textarea>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-proceedbtn-Box">
                        <button type="submit" name="proceedCheckout" class="form-proceedBtn">Submit Request</button>
                        </div>
                        
                        
                        <p class="" style="text-align:center"><svg fill="#172d55" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#172d55"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7759999999999998"></g><g id="SVGRepo_iconCarrier"><path d="M21.406,5.086l-9-4a1,1,0,0,0-.812,0l-9,4A1,1,0,0,0,2,6v.7a18.507,18.507,0,0,0,9.515,16.17,1,1,0,0,0,.97,0A18.507,18.507,0,0,0,22,6.7V6A1,1,0,0,0,21.406,5.086ZM20,6.7a16.507,16.507,0,0,1-8,14.141A16.507,16.507,0,0,1,4,6.7V6.65l8-3.556L20,6.65ZM11,10h2v8H11Zm0-4h2V8H11Z"></path></g></svg>&nbsp;We respect your <a href="privacy-policy.php" target="_blank" title="Privacy Policy" style="text-decoration: none; font-weight:600; font-size: 13px; color: #033496;">privacy</a>. Your information will not be shared.</p>
                        </div>
                        </form>
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