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
    /* -------------contact Start------------------------ */
.io-contact-form input[type="text"] {
    width: 100%;
    border-radius: 4px;
    border: 1px solid #7a7a7a;
    height: 40px;
    outline: 0;
    color: #000;
    padding-left: 10px;
}

.io-contact-form {
    padding: 16px;
    box-shadow: -2px 2px 22px -10px #88888e;
}

.contact-form-row {
    overflow: hidden;
    width: 100%;
    margin-left: 40px;
}

.contact-form-left-col {
    /* float: left; */
    width: 80%;
}

.contact-form-right-col {
    /* float: right; */
    width: 80%;
}

.contact-form-input-col input[type="text"],
.contact-form-input-col select {
    padding: 8px 10px;
    border: 1px solid #7a7a7a;
    width: 100%;
    outline: 0;
    border-radius: 4px;
    color: #000;
    font-size: 14px;
}

.contact-form-input-col input[type="email"],
.contact-form-input-col select {
    padding: 8px 10px;
    border: 1px solid #7a7a7a;
    width: 100%;
    outline: 0;
    border-radius: 4px;
    color: #000;
    font-size: 14px;
}

.contact-form-input-col label {
    display: block;
    color: #000;
    margin: 10px 0 5px;
    font-size: 15px;
}

.contact-enqTextarea {
    outline: 0;
    border: 1px solid #7a7a7a;
    width: 100%;
    padding: 10px;
    font-size: 14px;
    height: 70px;
    border-radius: 4px;
    color: #000;
}

.contact-form-input,
.contact-tittle {
    margin-bottom: 10px;
}

.contact-input-col select {
    color: #666;
    font-size: 15px;
}

.contact-form-proceedbtn-Box {
    text-align: center;
    padding: 15px 0;
}

.contact-form-proceedBtn {
    outline: 0;
    border: none;
    background: #ff5722;
    padding: 10px 50px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    font-family: "Lato", Helvetica, sans-serif;
    color: var(--light);
    border-radius: 4px;
    margin-left: -80px;
    border:2px solid #ff5722;
}

.contact-form-para {
    text-align: center;
    font-size: 13px !important;
    font-family: "Lato", Helvetica, sans-serif;
}

.contact-form-para a {
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    color: #b38302;
}

.submitbtn-Box {
    text-align: center;
    padding: 10px 0;
}

.submitBtn {
    outline: 0;
    border: none;
    background: #0079d7;
    padding: 10px 32px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    font-family: "Lato", Helvetica, sans-serif;
    color: var(--light);
    border-radius: 4px;
}
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
.contact-form-proceedBtn:hover{
    background:var(--light);
    color:#ff5722;
    border:2px solid #ff5722
}
.contact-details{
    padding-top: 10px;
    font-size: 17px;
    color: #172d55;
    font-weight:600;
}
/* ----------------contact close--------------------------------- */
</style>



</head>

<body>
<?php include"lib/top-bar.php";?>

<div class="contact-start">
   

<?php include"lib/nav.php";?>


    <!-- Page Header Start -->
    <div class="container-fluid pr-background" style="height:165px !important;overflow:hidden">
        <section class="container">
            <div class="breadcrumb_row">
                <nav>
                   <ul>
                    <li>
                      <a href="#" title="Home" target="_blank">Home</a>
                    </li>
                   <li>Contact Us</li>
                  
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End -->
    
    <section class="our-services-top container f-shadow-down">
        <div class="row">
            <h1>Contact Us</h1>
          <div class="col-lg-12 who-we-are-bottom">
       </div>
    </section>

    <!-- Contact Start -->
    <div class="container px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-4 px-4">
                <p class="mb-3" style="color:#172d55!important;font-weight:600">Please fill in the below details and our representative will shortly contact you.</p>
                <div class="io-contact-form">
                    
                <form action="#" method="POST" name="" style="margin: 0 auto;">
                        <div class="contact-form-row">
                        <div class="contact-form-left-col">
                        <div class="contact-form-input-col">
                        <label for="name">Name<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        <input type="text" name="name" id="name" value="" autocomplete="off" required>
                        </div>
                        </div>
                        <div class="contact-form-left-col">
                        <div class="contact-form-input-col">
                        <label for="emailid">Email<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        <input type="email" name="emailid" id="emailid" value="" required>
                        </div>
                        </div>
                        </div>
                        <div class="contact-form-row">
                        
                        <div class="contact-form-left-col">
                        <div class="contact-form-input-col">
                        <label for="c__name">Company Name<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        <input type="text" name="c__name" id="c__name" value="" required>
                        </div>
                        </div>
                        </div>
                        <div class="contact-form-row">
                        <div class="contact-form-left-col">
                        <div class="contact-form-input-col">
                        <label for="contact">Contact No.<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        <input type="text" name="contact" id="contact" value="" required>
                        </div>
                        </div>
                        </div>
                        
                        <div class="contact-form-row">
                        <div class="contact-form-left-col">
                        <div class="contact-form-input-col">
                        <label for="country">Country<span style="font-size:14px;color:#FC2F2F;">*</span></label>
                        <select name="country" id="country" required>
                        <?php include 'lib/country.php' ?> </select>
                        </div>
                        </div>
                        
                        </div>
                        <div class="contact-form-row">
                        <div class="contact-form-left-col">
                        <div class="contact-form-input-col">
                        <label for="message">Message</label>
                        <textarea  id="message" name="message" cols="3" class="contact-enqTextarea" placeholder=""></textarea>
                        </div>
                        </div>
                        
                        </div>
                        <div class="contact-form-row">
                        <div class="contact-form-proceedbtn-Box">
                        <button type="submit" name="proceedCheckout" class="contact-form-proceedBtn">Submit</button>
                        </div>
                        </div>
                        </form>
                        </div>
            </div>
            <div class="col-lg-6 py-4 px-4">
                <h4 class="mb-3" style="color:#172d55!important">Get in <span style="color:#ff5722">Touch</span> with Us</h4>
                <div class="ContactUS" style="background:rgb(255, 255, 255);box-shadow: -2px 2px 22px -10px #88888E;">
                <div class="col-12 io-d-flex p-4" style="border-bottom: 1px solid;">
                        <div class="col-3 " style="text-align: center;border-right: 1px solid #ff5722;">
                            <svg viewBox="0 0 512.00095 512" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" style="position: relative;top:26px;"><path fill="#ff5722" d="m255 202c11.046875 0 20 8.953125 20 20s-8.953125 20-20 20-20-8.953125-20-20 8.953125-20 20-20zm70 20c0 11.046875 8.953125 20 20 20s20-8.953125 20-20-8.953125-20-20-20-20 8.953125-20 20zm-180 0c0 11.046875 8.953125 20 20 20s20-8.953125 20-20-8.953125-20-20-20-20 8.953125-20 20zm349.414062 187.5625c23.40625 23.40625 23.40625 61.46875.011719 84.863281-11.695312 11.695313-27.0625 17.546875-42.425781 17.546875s-30.730469-5.851562-42.425781-17.546875l-109.789063-109.542969c-2.332031-2.328124-4.050781-5.191406-5.007812-8.347656l-23.914063-78.722656c-2.121093-6.980469-.273437-14.558594 4.820313-19.78125 5.09375-5.21875 12.625-7.25 19.65625-5.304688l80.722656 22.359376c3.324219.921874 6.351562 2.683593 8.792969 5.121093zm-162.824218-49.453125 74.089844 73.925781 28.289062-28.289062-73.652344-73.511719-40.609375-11.25zm134.550781 77.75-3.859375-3.855469-28.285156 28.285156 3.847656 3.835938c7.8125 7.816406 20.5 7.816406 28.296875.015625 7.800781-7.796875 7.800781-20.484375 0-28.28125zm-199.015625-23.40625c-3.695312.160156-7.4375.242187-11.125.242187-32.160156 0-63.121094-5.988281-92.019531-17.796874-4.921875-2.007813-10.445313-1.976563-15.34375.089843l-91.066407 38.441407 30.683594-72.683594c3-7.105469 1.644532-15.308594-3.488281-21.074219-29.285156-32.898437-44.765625-72.261719-44.765625-113.824219 0-103.578125 96.898438-187.847656 216-187.847656s216 84.269531 216 187.847656c0 24.5625-6.03125 49.222656-17.929688 73.289063-4.894531 9.902343-.835937 21.898437 9.066407 26.792969 9.902343 4.894531 21.898437.835937 26.792969-9.066407 14.644531-29.628906 22.070312-60.25 22.070312-91.015625 0-125.636718-114.839844-227.847656-256-227.847656-141.15625 0-256 102.210938-256 227.847656 0 47.421875 16.078125 92.332032 46.636719 130.632813l-45.0625 106.742187c-3.164063 7.496094-1.46875 16.164063 4.285156 21.917969 3.828125 3.828125 8.941406 5.859375 14.144531 5.859375 2.621094 0 5.265625-.515625 7.773438-1.574219l128.929687-54.425781c31.445313 11.746094 64.808594 17.695312 99.292969 17.695312 4.265625 0 8.597656-.097656 12.875-.28125 11.035156-.484374 19.589844-9.820312 19.105469-20.855468-.480469-11.035156-9.835938-19.617188-20.855469-19.105469zm0 0"></path></svg>
                       
                        </div>
                        <div class="col-8" style="padding-left:15px">
                            <p class="contact-details">Insights Orb</p>
                        <address style="font-size: 14px">B-13, Sector 2, Noida, U.P. - 201301 India</address>
                        </div>
                    </div>
                    <div class="col-12 io-d-flex p-4" style="border-bottom: 1px solid;">
                        <div class="col-3 " style="text-align: center;border-right: 1px solid #ff5722;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="30px" width="30px" style="position: relative;top:26px;"><path fill="#ff5722" d="M1 11.487V43h48V7H1v4.487zm2 1.566l15.6 12.209L3 38.886V13.053zM3.62 41l16.584-14.483L25 30.27l4.796-3.753L46.38 41H3.62zM47 38.886L31.4 25.261 47 13.052v25.834zM3 9h44v1.513L25 27.73 3 10.513V9z"></path></svg>
                       
                        </div>
                        <div class="col-8" style="padding-left:15px">
                            <p class="contact-details">Mail us</p>
                            <p style="font-size: 13px">For business enquiries - <a href="mailto:enquiry@insightsorb.com">enquiry@insightsorb.com</a></p>
                            <p style="font-size: 13px">For career enquiries - <a href="mailto:hr@insightsorb.com">hr@insightsorb.com</a></p>
                        </div>
                    </div>
                    <div class="col-12 io-d-flex p-4">
                        <div class="col-3 " style="text-align: center;border-right: 1px solid #ff5722;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" height="30px" width="30px" style="position: relative;top:30px;"><path fill="#ff5722" d="M60,31.81a1,1,0,0,1-1-1C59,16.57,47.75,5,33.89,5a1,1,0,1,1,0-2C48.84,3,61,15.48,61,30.83A1,1,0,0,1,60,31.81Z"></path><path fill="#ff5722" d="M49.1 31.81a1 1 0 0 1-1-1A14.46 14.46 0 0 0 33.89 16.17a1 1 0 0 1 0-2 16.43 16.43 0 0 1 16.2 16.62A1 1 0 0 1 49.1 31.81zM55 52.83a19.93 19.93 0 0 1-5.31 6.6A7.25 7.25 0 0 1 44 60.9c-9.07-1.54-18-5.52-26.91-14.28-8.51-9.13-12.5-18.45-14-27.76A7.74 7.74 0 0 1 4.52 13 19.51 19.51 0 0 1 11 7.5a2.61 2.61 0 0 1 3.78 0l8.81 9.15a3.11 3.11 0 0 1 0 4.24l-6.24 6.77C20 33.47 29.79 43.55 35.41 46.27L42 39.84a2.91 2.91 0 0 1 4.12 0l8.9 9A2.81 2.81 0 0 1 55 52.83z"></path></svg>
                       
                        </div>
                        <div class="col-8" style="padding-left:15px">
                           
                            <p class="contact-details">Call us</p>
                            <p style="font-size: 14px"><a href="tel:+1-347-960-6455">International : +1-347-960-6455</a></p>
                            <p style="font-size: 14px"><a href="tel:+91-120-454-1337">India : +91-120-454-1337</a></p>
                        </div>
                    </div>

                    </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->

   
     <?php include 'lib/footer.php' ?>

<!-- JavaScript Libraries -->
    <script src="<?=JS;?>jquery-3.4.1.min.js"></script>
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>

</body>

</html>