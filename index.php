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
    <link href="<?=CSS;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?=CSS;?>commoncss.css" rel="stylesheet">
    <!-- <link href="lib/commoncss.css" rel="stylesheet"> -->
   
   <style>

.index-search-dropdown-top {
    border-bottom: 1px solid #efefef;
    outline: 0;
    width: 100%;
    font-size: 14px;
    vertical-align: bottom;
    background: var(--light);
    transition: all linear 0.25s;
    height: 370px;
    position: absolute;
    z-index: 9999;
    overflow-y: scroll;
    left: 0px;
    top: 84px;
    /* box-shadow: 12px 41px #000; */
}

.index-h-search-list {
    padding: 6px 8px 10px 16px;
    border-bottom: 1px solid #e8e8e8;
}

.index-h-search-list a {
    font-size: 13.5px;
    color: #000;
    display: block;
    line-height: 1.5em;
    text-align: start;
}

.banner h4 {
    font-size: 3rem;
    padding-bottom: 20px;
    color: var(--light);
    font-weight: 800;
    font-family: "Lato", Helvetica, Arial, Lucida, sans-serif !important;
    margin-top: 75px;
    letter-spacing: 0.5px;
    line-height: 1.3;
}

.banner p {
    font-size: 18px;
    padding-bottom: 20px;
    color: var(--light);
    font-family: "Lato", Helvetica, Arial, Lucida, sans-serif !important;
    margin-top: 15px;
}

.btn-Search {
    border: 1px solid #000;
    outline: 0;
    height: 44px;
    padding: 7px 14px;
    /* width: 10%; */
    font-weight: 600;
    margin-left: -5px;
    font-family: "Open Sans", sans-serif;
    font-size: 16px;
    color: var(--light);
    text-transform: uppercase;
    vertical-align: bottom;
    background: var(--primary);
    transition: all linear 0.25s;
    cursor: pointer;
}

.search-content {
    background: var(--light);
    border-top: none;
    border-right: 1px solid #e8e8e8;
    border-bottom: 1px solid #e8e8e8;
    border-left: 1px solid #e8e8e8;
    width: 82.4%;
    padding: 10px;
    position: absolute;
    height: 200px;
    overflow-y: scroll;
    z-index: 9999;
}

.banner input[type="search"] {
    border-radius: 0px;
    border: 1px solid #c9c9c9be;
    outline: 0;
    text-align: left;
    padding: 8px;
    box-shadow: -2px 2px 22px -10px #414141;
    border-radius: 5px 0 0px 5px;
}

.banner input[type="submit"] {
    border: none;
    outline: 0;
    height: 40px;
    padding: 7px 14px;
    width: 10%;
    font-weight: 600;
    margin-left: -5px;
    font-family: "Lato", Helvetica, sans-serif;
    font-size: 16px;
    color: var(--light);
    text-transform: uppercase;
    vertical-align: bottom;
    background: var(--primary);
    transition: all linear 0.25s;
    cursor: pointer;
}

.banner .button-Search {
    /* border: 1px solid var(--light); */
    border: 0;
    outline: 0;
    height: 51px;
    /* padding: 7px 14px; */
    padding: 7px 26px;
    /* width: 10%; */
    font-weight: 600;
    margin-left: -5px;
    font-family: "Lato", Helvetica, sans-serif;
    font-size: 16px;
    color: var(--light);
    text-transform: uppercase;
    vertical-align: bottom;
    background: #0dcaf0;
    transition: all linear 0.25s;
    cursor: pointer;
    border-radius: 0 5px 5px 0;
}

.banner .button-Search:hover {
    background: var(--primary);
}

.banner form {
    display: block;
}

.banner ::placeholder {
    color: #b8b7b7;
    opacity: 1;
    font-size: 15px;
}

.banner-section {
    background: url("img/pattern34.png");
    height: 500px;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
    background-position: center center;
}

@keyframes move {
    from {
        background-position: 10px 100px;
    }
}
.bg-risi {
    background: #484377;
}
.bg-risi-order {
    background: #efefef;
}

.searchbar {
    height: 44px;
    width: 60vw;
    text-align: center;
    margin-top: 40px;
    border: 0;
}

.banner {
    position: absolute;
    left: 50%;
    top: 40%;
    transform: translate(-50%, -50%);
    width: 80%;
    text-align: center;
    line-height: 20px;
}

.call-schedule {
    margin-top: 50px;
}

.call-schedule-btn {
    padding: 11px 50px;
    color: var(--light);
    border: 1px solid var(--light);
    font-size: 17px;
}

.call-schedule-btn:hover {
    padding: 11px 50px;
    color: var(--light);
    border: 1px solid var(--light);
    background-color: #018791;
    transition: all 0.4s ease;
}

.bg-report {
    background-color: var(--light);
    display: flex;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

.bg-report h5 {
    font-size: 16px;
    font-weight: bold !important;
}

.bg-report p {
    font-size: 14px;
}

.bg-report small {
    font-size: 13px;
}

.press-index h5 {
    font-size: 16px;
    font-weight: bold !important;
    padding-top: 10px;
}
.press-index p {
    font-size: 14px;
    padding-top: 5px;
}

.index-search-top-bar-list {
    border-bottom: 1px dashed #e8e8e8;
    padding: 10px;
}

.index-search-top-bar-list a {
    display: block;
    font-size: 12px;
    color: #000;
    line-height: 1.5em;
}

.index-search-top-bar-list:hover {
    background: #818181;
}

.index-search-dropdown {
    border-bottom: 1px solid #efefef;
    height: 40px;
    padding: 7px 14px;
    width: 28%;
    font-size: 14px;
    background: var(--light);
}

.index-top-bar-right input[type="search"] {
    border: 1px solid #efefef;
    outline: 0;
    height: 40px;
    padding: 7px 14px;
    border-right: none;
    width: 70%;
}

.index-top-bar-right input[type="submit"] {
    border: none;
    height: 40px;
    padding: 7px 14px;
    width: 20%;
    font-weight: 600;
    font-family: "Lato", Helvetica, sans-serif;
    font-size: 15px;
    text-transform: uppercase;
    background: #00589d;
    color: var(--light);
}

.index-search-box {
    position: relative;
    background: #fdfdfd;
    height: 350px;
    width: 70%;
    border-top: 1px solid #e1e1e1;
    border-right: 1px solid #e1e1e1;
    border-left: 1px solid #e1e1e1;
    border-bottom: 3px solid #52d7c3;
    z-index: 99;
    overflow-y: scroll;
    right: -343px;
    top: -13px;
}

.index-serach-bar {
    width: 100%;
    overflow: hidden;
    margin-top: 15px;
}

.index-serach-bar input[type="search"] {
    border: none;
    outline: 0;
    height: 40px;
    padding: 7px 14px;
    width: 40%;
}

.index-serach-bar input[type="submit"] {
    border: none;
    outline: 0;
    height: 40px;
    padding: 7px 14px;
    width: 10%;
    font-weight: 600;
    margin-left: -5px;
    font-family: "Lato", Helvetica, sans-serif;
    font-size: 16px;
    color: var(--light);
    text-transform: uppercase;
    vertical-align: bottom;
    background: #00589d;
    transition: all linear 0.25s;
    cursor: pointer;
}

.index-serach-bar input[type="submit"]:focus,
.index-serach-bar input[type="submit"]:hover {
    background: #e91e63;
    color: var(--light);
    transition: all linear 0.25s;
}

.index-h-search-content {
    margin: 0 auto;
    position: absolute;
    top: 305px;
    left: 50%;
    background: var(--light);
    transform: translate(-50%, -50%);
    height: 300px;
    width: 50%;
    z-index: 9999;
    overflow-y: scroll;
    text-align: left;
    box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.09);
}

.index-h-search-list a:hover {
    color: #000;
}

.index-h-search-list:hover {
    background: #e9f5ff;
    color: #000;
}

/* ------------start client ---------------- */

.io-client-section {
    background: var(--light);
    padding: 25px 50px 40px 50px;
    /* background: url("../img/worldmap.jpg"); */
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 90%;
}

.io-client-title {
    font-size: 1.8rem;
    color: var(--primary);
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    text-align: center;
}

.slider-head {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-right: 1rem !important;
    padding-left: 1rem !important;
}

.io-img-thumb {
    width: auto;
    padding: 15px;
    /* filter: grayscale(1); */
    display: inline-block;
    transition: all linear 0.2s;
    height: 60px;
    background-color: var(--light);
}

.io-slider .client {
    display: inline-block;
    border: 1px solid #eeeded;
    margin-right: 10px;
    margin-bottom: 10px;
    transition: border-color 0.3s;
    box-sizing: content-box;
    text-align: center;
    vertical-align: middle;
    position: relative;
    backface-visibility: hidden;
    /* width: 18%; */
    box-shadow: -2px 2px 22px -10px #88888e;
    background: var(--light);
}

.io-img-thumb:hover {
    /* filter: grayscale(0); */
    transition: all linear 0.2s;
}

.item-io {
    animation: animate 15s linear infinite;
}

.io-slider {
    display: flex;
    /* width: 100%; */
    margin: 0 15px;
    overflow: hidden;
    padding: 0.5rem;
    flex-wrap: nowrap;
}

.io-slider:hover .item-io {
    animation-play-state: paused;
}

@keyframes animate {
    0% {
        transform: translate3d(0, 0, 0);
    }

    100% {
        transform: translate3d(-1000px, 0, 0);
    }
}

@media (max-width: 767px) {
    .io-slider {
        width: 95%;
        border-radius: 0;
        padding: 0;
    }

    .io-img-thumb {
        width: auto;
        padding: 35px;
        filter: grayscale(1);
        display: inline-block;
        transition: all linear 0.2s;
        height: 120px;
    }
}

.f-shadow {
    box-shadow: -2px 2px 22px -10px #88888e;
    border-radius: 5px;
}

.f-shadow-down {
    box-shadow: -2px 2px 22px -10px #88888e;
}
.testimonial-client-head {
    padding: 3rem 1rem 3rem 1rem !important;
}

.testimonial-client {
    width: 350px;
    margin-right: 20px;
    padding: 10px;
    background-color: var(--light);
}

.testimonial-client p {
    font-size: 14px;
    text-align: justify;
}

.client-name-testi h5 {
    font-family: "Open Sans", sans-serif;
    font-weight: 800;
    color: var(--primary);
    font-size: 14px;
    margin-bottom: 0;
}

.client-name-testi span {
    color: #4f4f4f;
    font-size: 13px;
    font-family: "Lato", Helvetica, sans-serif;
    padding-bottom: 5px;
}

.testi-quote {
    justify-content: center;
    margin: 0 auto;
    font-size: 25px;
    width: 50px;
    height: 50px;
    position: relative;
    background: white;
    color: var(--primary);
}
.index-search input[type="search"] {
    outline: 0;
    /* border: 1px solid #797878; */
    border: 0;
    padding: 9px 18px;
    width: 95%;
}

.index-search {
    padding: 16px 20px;
    background: var(--light);
    position: relative;
    top: 30px;
}

.view-report-index {
    font-size: 14px !important;
    font-weight: 600;
    color: #0a58ca;
}
.io-margin {
    margin-top: 10px;
}

.view-report-index:hover {
    color: var(--primary);
}

.view-all-btn {
    background-color: var(--primary);
    padding: 5px 10px;
    width: 20%;
    margin: 14px auto;
    text-align: center;
    color: var(--light);
    margin-top: 25px;
    border-radius: 4px;
}
.view-all-btn-pr {
    background-color: var(--primary);
    padding: 5px 10px;
    width: 20%;
    margin: 11px auto;
    text-align: center;
    color: var(--light);
    margin-top: 25px;
    border-radius: 4px;
}
.view-all-btn-pr:hover {
    background: #172d;
    color: var(--light);
    cursor: pointer;
    transition: all 0.5s;
    box-shadow: -2px 2px 22px -10px #88888e;
}
.view-all-btn:hover {
    background: #172d;
    color: var(--light);
    cursor: pointer;
    transition: all 0.5s;
    box-shadow: -2px 2px 22px -10px #88888e;
}

.pr-index {
    display: flex;
    flex-direction: column;
    background-color: #f5f5f5;
    padding: 14px;
    box-shadow: -2px 2px 22px -10px #88888e;
}

.pr-index-first .pr-heading-index {
    font-size: 17px;
    font-weight: bold;
}

.io-report-index {
    padding-top: 20px;
    padding-bottom: 30px;
    background: var(--light);
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
}

.io-report-heading {
    margin-right: auto !important;
    margin-left: auto !important;
    text-align: center;
    margin-bottom: 2rem !important;
}

.report-img {
    position: relative;
    overflow: hidden;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.report-desc-main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 10px;
}

.report-desc-title-main {
    display: flex;
    margin-bottom: 0.5rem;
}
.pr-border-dashed {
    border-bottom: 1px dashed #d3d3d3;
}
.report-desc-title-small {
    text-transform: uppercase;
    margin-right: 1rem;
    background-color: var(--primary);
    color: var(--light);
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
}

.pr-desc-title-small {
    margin-right: 1rem;
    /* background-color: var(--primary); */
    color: #172d55;
    /* padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; */
    margin-bottom: 15px !important;
}

.pr-desc-title-small > strong {
    font-size: 13px;
    color: green;
}
.pr-desc-title-small > span {
    font-size: 13px;
    color: #172d55;
    font-weight: 500;
}
.report-item {
    box-shadow: -1px 5px 10px 0px #c1c1c1;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

.report-item img {
    transition: 0.5s;
}

.report-item a:hover {
    color: var(--primary);
}

.report-item:hover img {
    transform: scale(1.1);
}

.report-item:hover {
    box-shadow: 0 10px 50px -5px rgba(46, 71, 93, 0.12);
    transform: scale(1.014);
    transition: 0.5s;
}

.index-press-release {
    padding: 25px;
    justify-content: space-between;
    display: flex;
    flex-direction: column;
    /* box-shadow: -2px 2px 22px -10px #88888e; */
    /* margin-bottom: 10px; */
    background: #f9f9f9 url(img/pattern.png) no-repeat;
    background-attachment: fixed;
}

.press-index {
    box-shadow: -2px 2px 22px -10px #88888e;
    padding: 20px;
    margin-top: 15px;
    background-color: var(--light);
    border-radius:7px
}

.sec-title {
    font-size: 30px;
}

.sec-title-main {
    font-size: 35px;
}
.io-strategy p {
    font-size: 15px;
    text-align: justify;
}

.io-strate-heading {
    text-align: start;
    padding: 0px 0 30px 0;
}

.io-strategy-left {
    background: var(--light);
    padding: 40px;
}

.io-strategy-right {
    padding: 40px;
    align-self:center
}

#report_search_section {
    display: none;
}

/* ----------io-work-with------------------- */
.io-work-one,
.io-work-two,
.io-work-three {
    padding: 30px;
    color: var(--light) !important;
}

.io-work-heading {
    color: var(--light) !important;
    padding: 7px 0;
    font-size: 1.4rem;
    line-height: 2rem;
}

.io-work-icon {
    height: auto;
    width: 230px;
    text-align: center;
    margin: 0 auto;
    padding: 23px 0;
    border: 2px dashed #0083B9;
    /* border-radius: 50%; */
    animation-play-state: paused !important;
    margin-top: 36px;
    margin-bottom: 36px !important;
}

.io-work-bg-one {
    background-color: #0b4d8b;
}

.io-work-bg-two {
    background-color: #172e55;
}

.io-work-bg-three {
    background-color: #0b4d8b;
}

/* .io-work-bg-one,.io-work-bg-two,.io-work-bg-three p{
    text-align:justify
} */

.io-work-link {
    padding: 20px 0 0 0;
    text-align: center;
    margin-top: 30px;
}

@media only screen and (min-width: 320px) and (max-width: 1080px) {

    .banner h4 {
        font-size: 2rem !important;
        line-height: 1.5 !important;
    }

    .index-search.m-hide {
        display: none !important;
    }

    .index-search-dropdown-top {
        border-bottom: 1px solid #efefef;
        outline: 0;
        width: calc(93% + 6px);
        font-size: 14px;
        vertical-align: bottom;
        background: var(--light);
        transition: all linear 0.25s;
        height: 400px;
        position: absolute;
        z-index: 9999;
        overflow-y: scroll;
        left: 8px;
        margin-top: 1px;

    }
}

@media only screen and (min-width: 320px) and (max-width: 991px) {
    .io-mobile-client {
        display: none;
    }
}

@media only screen and (min-width: 1080px) {
   
    .io-work-icon {
        height: auto;
        width: 230px;
        text-align: center;
        margin: 0 auto;
        padding: 23px 0;
        border: 2px dashed #0083B9;
        /* border-radius: 50%; */
        animation-play-state: paused !important;
        margin-top: 36px;
    }
}


@media only screen and (min-width: 320px) and (max-width: 720px) {
    
    .view-all-btn {
        width: 51%;
    }
     .view-all-btn-pr {
        width: 51%;
    }
    
    .testimonial-client-head {
        margin-top: 10px;
    }
  
}
.clients-image-start{
    padding: 40px;
}
</style> 

</head>
<body>
<?php include "lib/top-bar.php";?>
<main>
<div class="index-page-start">
    <!-- Nav Start --> 
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-4 py-2 py-lg-0" style="border-bottom:1px solid #e9e9e9">
        <a href="index.php" class="navbar-brand p-0">
           
            <img src="<?=Logo;?>logo.svg" draggable="false" class="logo-main" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 " style="margin:auto">
            <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Report Store</a>
                    <div class="dropdown-menu m-0">
                        <a href="rd.php" class="dropdown-item">Heavy Machinery & Equipment</a>
                        <a href="rd.php" class="dropdown-item">Automotive & Transportation</a>
                        <a href="rd.php" class="dropdown-item">Specialty Chemicals and Advanced Materials</a>
                        <a href="rd.php" class="dropdown-item">HVAC, Infrastructure & Construction</a>
                        
                    </div>
                </div>
                
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resources</a>
                    <div class="dropdown-menu m-0">
                        <a href="press-release.php" class="dropdown-item">Press Release</a>
                        <a href="blog.php" class="dropdown-item">Blog</a>
                        
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            </div>
            <button type="button" name="submitSearch" class="btn-Search m-hide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29" width="25" height="25">
                <path fill="#fff" d="M11.854 21.854c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10zm0-18c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.588-8-8-8z"></path>
                <path fill="#fff" d="M26.146 27.146a.997.997 0 0 1-.707-.293l-7.694-7.694a.999.999 0 1 1 1.414-1.414l7.694 7.694a.999.999 0 0 1-.707 1.707z"></path>
                </svg></button>
        </div>
    </nav>
    <!-- Nav End -->

    <!--banner start-->

 <div class="banner-section  overlay">
    <div class="row">
     <div class="banner">
           <div class="index-search m-hide" style="display:none">
                <form action="#" method="POST" style="display:flex">
                <input type="search" id="search" name="indexSearch" placeholder="Search here..." autocomplete="off" required="">
                <button type="submit" name="submitSearch" class="button-Search"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29" width="25" height="25">
                    <path fill="#fff" d="M11.854 21.854c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10zm0-18c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.588-8-8-8z"></path>
                    <path fill="#fff" d="M26.146 27.146a.997.997 0 0 1-.707-.293l-7.694-7.694a.999.999 0 1 1 1.414-1.414l7.694 7.694a.999.999 0 0 1-.707 1.707z"></path>
                    </svg></button>
                </form>
                <div class="index-search-dropdown-top" id="report_search_section" style="display: none;">
                  <div class="report">
                    <div style="font-size: 20px;color:var(--light);font-weight:500;background:#ff5151" class="bg-risi p-2">Reports</div>
                    <div class="index-h-search-list"><a href="" title="">Food Preservatives Market Size and Share Analysis by Label (Clean Label, Conventional), Product (Natural, Synthetic), Function (Antimicrobials, Antioxidants), Application (Meat, Poultry, and Seafood Products, Beverages, Confectionery, Bakery Products, Snacks, Dairy and Frozen Products, Fats and Oils) - Global Industry Demand Forecast to 2030</a></div>
                    <div class="index-h-search-list"><a href="" title="">Seasonings and Spices Market Size and Share Analysis by Product (Whole, Ground), End Use (Industrial, Food Service, Retail), Application (Meat & Poultry Products, Snacks & Convenience Food, Soup, Sauces), Nature (Conventional, Organic)- Global Industry Demand Forecast to 2030</a></div>              
                    <div class="index-h-search-list"><a href="" title="">Smartwatch Market Size and Share Analysis Report by Product (Extension, Classic, Standalone), OS (Android, iOS), Application (Wellness, Sports, Medical, Personal Assistance)- Global Industry Demand Forecast to 2030</a></div>
                    <div class="index-h-search-list"><a href="" title="">Smartwatch Market Size and Share Analysis Report by Product (Extension, Classic, Standalone), OS (Android, iOS), Application (Wellness, Sports, Medical, Personal Assistance)- Global Industry Demand Forecast to 2030</a></div>
                    <div class="index-h-search-list"><a href="" title="">Specialty Enzymes Market Size and Share Analysis by Type (Carbohydrase, Protease, Lipase, Polymerase, Nuclease), Source (Microorganisms, Plants, Animals), Application (Pharmaceutical, Research & Biotechnology, Diagnosis) - Global Industry Demand Forecast to 2030</a></div>
                  </div>
           
                  <div class="report">
                   <div style="font-size: 20px;color:var(--light);font-weight:500;background:#ff5151" class="mb-2 bg-risi p-2">Press Release</div>
                    <div class="index-h-search-list"><a href="" title="">Behcet Disease (Behçet disease) Therapeutics - Pipeline Analysis 2018, Clinical Trials &amp; Results, Patents, Designations, Collaborations, and Other Developments</a></div>
                     <div class="index-h-search-list"><a href="" title="">Dilated Cardiomyopathy Therapeutics - Pipeline Analysis 2018, Clinical Trials &amp; Results, Patents, Designations, Collaborations, and Other Developments</a></div>              
                     <div class="index-h-search-list"><a href="" title="">Left Ventricular Dysfunction Therapeutics - Pipeline Analysis 2018, Clinical Trials &amp; Results, Patents, Designations, Collaborations, and Other Developments</a></div>
                    <div class="index-h-search-list"><a href="" title="">Actinic Keratosis Therapeutics - Pipeline Analysis 2018, Clinical Trials &amp; Results, Patents, Designations, Collaborations, and Other Developments</a></div>
                    <div class="index-h-search-list"><a href="" title="">Actinic Keratosis Therapeutics - Pipeline Analysis 2018, Clinical Trials &amp; Results, Patents, Designations, Collaborations, and Other Developments</a></div>
                    
                 </div>
                 </div>
                </div>
             <h4>Insights that Drive Business Growth and Expand Your Horizons</h4>
             <p>Sail the high and low tides of the market with our industry-leading business insights</p>
             <div class="call-schedule">
    <a href="#" title="Call Appointment" target="_blank" class="call-schedule-btn">Schedule a call</a>
</div>
  </div>
    
    </div>

 </div>
 
    <section class="container-fluid io-strategy">
            <div class="row">
                <div class="col-lg-5 io-strategy-left">
                <div class="io-strate-heading">
                 <h1 class="mb-0 sec-title-main">How We Can Make a Difference</h1>
                </div>
                    <p>Our clients are central to every research study we undertake, every report we create here, at Insights Orb. We pride ourselves in understanding your precise requirements and offering you insights that speak to your business acumen.</p>
                    <p>Being able to play a small role in your success represents the pinnacle of our efforts as a market intelligence and consulting firms. We are a team of young, dynamic, enthusiastic individuals, who delve deep into the market to unravel its most-critical aspects.</p>
                    <p>With our deep knowledge of the most-relevant and recent developments in the market, we ensure you are prepared to tackle any challenge head-on and leverage every opportunity, allowing you to reach the summit of your success and beyond.</p>
                </div>
                <div class="col-lg-7 io-strategy-right">

                <img src="<?=IMG;?>advantage.jpg" class="io-img-responsive" draggable="false" />

            </div>

            </div>
    </section>

    <section class="container-fluid io-work-with">
        <div class="row">
            <div class="col-lg-4 io-work-one io-work-bg-one">
                <h4 class="io-work-heading">In-Depth Knowledge of Market Dynamics</h4>
                <p>Stay abreast of the latest in the market, including its strongest drivers, biggest trends, lucrative opportunities and even the negative forces you need to be wary of.</p>
              <div class="io-work-icon">
                <img src="<?=IMG;?>icons/growth-chart.png" alt="" draggable="false" class="io-img-responsive" style="height:150px !important"/>
            </div>
           
            </div>
            <div class="col-lg-4 io-work-two io-work-bg-two">
            <h4 class="io-work-heading">Granular Analysis with Rich Regional and Country Insights</h4>
                <p>What sets us apart is our thorough understanding of the market at the regional and country levels, along with which we offer you segment analysis at the granular level.</p>
              <div class="io-work-icon">
                <img src="<?=IMG;?>icons/survey.png" alt="" draggable="false" class="io-img-responsive" style="height:150px !important"/>
            </div>
            
            </div>
            <div class="col-lg-4 io-work-three io-work-bg-three">
            <h4 class="io-work-heading">Comprehensive Insights into Market Competitive Landscape</h4>
                <p>With our comprehensive insights into the competitive landscape of the market, you never miss out on anything your rivals do, helping you stay one step ahead.</p>
              <div class="io-work-icon">
                <img src="<?=IMG;?>icons/com-insights.png" draggable="false" alt="" class="io-img-responsive" style="height:150px !important" />
            </div>
           
            </div>
        
        </div>

    </section>
    

    <!-- Report Start -->
     <div class="container-fluid io-report-index">
        
        <div class="row g-3">
            <div class="col-lg-12">
            <div class="io-report-heading">
            <h1 class="mb-0 sec-title-main">Latest Report</h1>
           
        </div>
                <div class="row">
                 <div class="col-lg-3 col-md-6 io-margin">
                 <div class="report-item">
                    <div class="report-img">
                        <img class="io-img-responsive" src="<?=IMG;?>blog-1.jpg" alt="">
                    </div>
                    <div class="bg-report">
                       
                        <div class="report-desc-main">
                            <div class="report-desc-title-main">
                                <small class="report-desc-title-small">Apr 2023</small>
                                <!-- <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small> -->
                            </div>
                            <h5  href="">Distributed Control System Market</h5>
                            <p>The distributed control system market size stood at USD 18,780 million in 2022, and it is expected to advance at a compound annual...<a href="" class="view-report-index">View Report &gt;&gt;</a></p>
                            
                        </div>
                    </div>
                    
                </div>
             </div>
             <div class="col-lg-3 col-md-6 io-margin">
                <div class="report-item">
                    <div class="report-img">
                        <img class="io-img-responsive" src="<?=IMG;?>blog-1.jpg" alt="">
                    </div>
                    <div class="bg-report">
                       
                        <div class="report-desc-main">
                            <div class="report-desc-title-main">
                                <small class="report-desc-title-small">Apr 2023</small>
                                <!-- <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small> -->
                            </div>
                            <h5  href="">Distributed Control System Market</h5>
                            <p>The distributed control system market size stood at USD 18,780 million in 2022, and it is expected to advance at a compound annual...<a href="" class="view-report-index">View Report &gt;&gt;</a></p>
                            
                        </div>
                    </div>
                    
                </div>
             </div>
             <div class="col-lg-3 col-md-6 io-margin">
                <div class="report-item">
                    <div class="report-img">
                        <img class="io-img-responsive" src="<?=IMG;?>blog-1.jpg" alt="">
                    </div>
                    <div class="bg-report">
                       
                        <div class="report-desc-main">
                            <div class="report-desc-title-main">
                                <small class="report-desc-title-small">Apr 2023</small>
                                <!-- <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small> -->
                            </div>
                            <h5  href="">Distributed Control System Market</h5>
                            <p>The distributed control system market size stood at USD 18,780 million in 2022, and it is expected to advance at a compound annual...<a href="" class="view-report-index">View Report &gt;&gt;</a></p>
                            
                        </div>
                    </div>
                    
                </div>
             </div>
             <div class="col-lg-3 col-md-6 io-margin">
                <div class="report-item">
                    <div class="report-img">
                        <img class="io-img-responsive" src="<?=IMG;?>blog-1.jpg" alt="">
                    </div>
                    <div class="bg-report">
                        <div class="report-desc-main">
                            <div class="report-desc-title-main">
                                <small class="report-desc-title-small">Apr 2023</small>
                                <!-- <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small> -->
                            </div>
                            <h5  href="">Distributed Control System Market</h5>
                            <p>The distributed control system market size stood at USD 18,780 million in 2022, and it is expected to advance at a compound annual...<a href="" class="view-report-index">View Report &gt;&gt;</a></p>
                            
                        </div>
                    </div>
                    
                </div>

             </div>
             
             <!-- <a href="rd.php" class="view-all-btn">View All</a> -->
             </div>
            </div>
            
             <a href="rd.php" class="view-all-btn">View All Reports</a> 
                
        </div>
    </div>

    <!-- Report End -->

    <section class="index-press-release container-fluid">
     <div class="row" style="justify-content:center">
     <div class="io-report-heading">
            <h1 class="mb-0 sec-title-main">Press Release</h1>
        </div>
        <div class="col-lg-5">
       <div class="press-index">
       
        <h5>Distributed Control System Market</h5>
        <small class="pr-desc-title-small"><strong>Publish Date:</strong> <span> April 2023</span></small>
        <p>The distributed control system market size stood at USD 18,780 million in 2022, and it is expected to advance at a compound annual...<a href="" class="view-report-index">Read More&gt;&gt;</a></p>
       </div>
       <div class="press-index">
       
        <h5>Distributed Control System Market</h5>
        <small class="pr-desc-title-small"><strong>Publish Date:</strong> <span> April 2023</span></small>
        <p>The distributed control system market size stood at USD 18,780 million in 2022, and it is expected to advance at a compound annual...<a href="" class="view-report-index">Read More &gt;&gt;</a></p>
       </div></div>
       <div class="col-lg-5">
       <div class="press-index">
       
        <h5>Distributed Control System Market</h5>
        <small class="pr-desc-title-small"><strong>Publish Date:</strong> <span> April 2023</span></small>
        <p>The distributed control system market size stood at USD 18,780 million in 2022, and it is expected to advance at a compound annual...<a href="" class="view-report-index">Read More &gt;&gt;</a></p>
       </div>
       <div class="press-index">
       
        <h5>Distributed Control System Market</h5>
        <small class="pr-desc-title-small"><strong>Publish Date:</strong> <span> April 2023</span></small>
        <p>The distributed control system market size stood at USD 18,780 million in 2022, and it is expected to advance at a compound annual...<a href="" class="view-report-index">Read More &gt;&gt;</a></p>
       </div>
        </div>
     </div>
     <a href="press-release.php" class="view-all-btn-pr">View All Releases</a>
</div>
 </section>

<section>
    <div class="row">
      <div class="col-lg-12">
        <div class="f-shadow slider-head">
            <div class="text-center mx-auto mb-4" style="max-width: 600px;">
            <h1 class=" mb-0 sec-title">Our Clients</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div style="padding:30px 30px 40px 30px">
         <div style="display:flex;justify-content:space-between;flex-wrap:wrap;gap:18px">
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Abbvie.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/BASF.png" alt="Our clients" draggable="false">
        </div>
        <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Engie.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Exxon-Mobile.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Google.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Loreal.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Panasonic.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Siemens.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/toyota.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Johnson.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/KARL-STORZ.png" alt="Our clients" draggable="false">
         </div>
         <div class="clients-image-start f-shadow">
         <img src="<?=IMG;?>client-logo/Schneider-Electric.png" alt="Our clients" draggable="false">
         </div>
            </div>
			</div>
			</div>
            </div>
</div>
    </div>
</section>


     <section class="io-client-section container-fluid" style="display:none">
		
        <div class="row">
            <div class="col-lg-12">
            <div class="f-shadow testimonial-client-head">
            <div class="text-center mx-auto mb-4" style="max-width: 600px;">
            <h1 class=" mb-0 sec-title">Clients Testimonials</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
            <div class="io-slider">
			<div class="item-io" >
            <div class="testimonial-client f-shadow"> 
                <div class="testi-quote">
                <img src="<?=IMG;?>icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>  
            <p>The team is very professional and responsive. We have got the value for money. Very much happy with the outcome of this project report, the process of acquiring it, and the responsiveness of the team. The report has met our expectations. We will be happy to serve as a reference for P&S Intelligence.</p>
            <div class="client-name-testi">
                <h5>Strategy Manager</h5>
                <span>Deloitte, Switzerland</span>
           </div>   
        </div> 
        </div> 
        <div class="item-io" >
            <div class="testimonial-client f-shadow">   
            <div class="testi-quote">
            <img src="<?=IMG;?>icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>
            <p>The team is very professional and responsive. We have got the value for money. Very much happy with the outcome of this project report, the process of acquiring it, and the responsiveness of the team. The report has met our expectations. We will be happy to serve as a reference for P&S Intelligence.</p>
            <div class="client-name-testi">
                <h5>Strategy Manager</h5>
                <span>Deloitte, Switzerland</span>
           </div>   
        </div> 
        </div> 
        <div class="item-io" >
            <div class="testimonial-client f-shadow">   
            <div class="testi-quote">
                  <!-- <svg fill="#172d55" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="35px" viewBox="0 0 404.943 404.943" xml:space="preserve" stroke="#172d55"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M391.691,18.284H13.25C5.932,18.284,0,24.219,0,31.536v242.48c0,7.32,5.932,13.252,13.25,13.252h202.674v86.137 c0,5.359,3.229,10.193,8.182,12.244c1.639,0.68,3.359,1.01,5.066,1.01c3.446,0,6.838-1.348,9.372-3.883l96.173-95.508h56.975 c7.32,0,13.252-5.932,13.252-13.252V31.535C404.943,24.218,399.012,18.284,391.691,18.284z M175.97,201.459 c-10.755,13.695-26.845,20.934-46.529,20.934c-7.818,0-14.155-6.336-14.155-14.154c0-7.817,6.337-14.155,14.155-14.155 c11.138,0,18.846-3.212,24.261-10.107c5.248-6.687,7.92-16.295,9.033-26.546h-35.311c-5.862,0-10.616-4.754-10.616-10.617v-45.647 c0-5.864,4.754-10.617,10.616-10.617h45.648c6.529,0,12.473,5.72,13.752,10.963c0.16,0.658,3.947,16.335,4.767,35.868 C192.762,165.205,187.505,186.764,175.97,201.459z M273.875,201.459c-10.752,13.695-26.842,20.934-46.529,20.934 c-7.817,0-14.153-6.336-14.153-14.154c0-7.817,6.336-14.155,14.153-14.155c11.14,0,18.85-3.212,24.263-10.107 c5.249-6.687,7.919-16.295,9.032-26.546h-35.31c-5.864,0-10.614-4.754-10.614-10.617v-45.647c0-5.864,4.75-10.617,10.614-10.617 h45.649c6.527,0,12.471,5.72,13.75,10.963c0.162,0.658,3.945,16.335,4.77,35.868C290.668,165.205,285.414,186.764,273.875,201.459z "></path> </g> </g></svg> -->
                  <img src="img/icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>
            <p>The team is very professional and responsive. We have got the value for money. Very much happy with the outcome of this project report, the process of acquiring it, and the responsiveness of the team. The report has met our expectations. We will be happy to serve as a reference for P&S Intelligence.</p>
            <div class="client-name-testi">
                <h5>Strategy Manager</h5>
                <span>Deloitte, Switzerland</span>
           </div>   
        </div> 
        </div> <div class="item-io" >
            <div class="testimonial-client f-shadow"> 
            <div class="testi-quote">
            <img src="<?=IMG;?>icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>  
            <p>The team is very professional and responsive. We have got the value for money. Very much happy with the outcome of this project report, the process of acquiring it, and the responsiveness of the team. The report has met our expectations. We will be happy to serve as a reference for P&S Intelligence.</p>
            <div class="client-name-testi">
                <h5>Strategy Manager</h5>
                <span>Deloitte, Switzerland</span>
           </div>   
        </div> 
        </div> <div class="item-io" >
            <div class="testimonial-client f-shadow">  
            <div class="testi-quote">
            <img src="<?=IMG;?>icons/rating.png" style="height: 50px;" alt="user-rating">
                </div> 
            <p>The team is very professional and responsive. We have got the value for money. Very much happy with the outcome of this project report, the process of acquiring it, and the responsiveness of the team. The report has met our expectations. We will be happy to serve as a reference for P&S Intelligence.</p>
            <div class="client-name-testi">
                <h5>Strategy Manager</h5>
                <span>Deloitte, Switzerland</span>
           </div>   
        </div> 
        </div> 
</div>
			</div>
            </div>
            </div>
		</div>
	</section> 
    

<section>
<div class="io-mobile-client" >
<div class="f-shadow slider-head">
<div class="text-center mx-auto mb-4" style="max-width: 600px;">
            <h1 class=" mb-0 sec-title-main">Our Clients</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
            <figure class="text-center">
            <img src="<?=IMG;?>client.jpg" alt="Our clients"  class="io-img-responsive text-center">
            </figure>
</div>
</div>
</section>
</main>

 <?php include 'lib/footer.php' ?>

    <!-- JavaScript Libraries -->
    <script src="<?=JS;?>jquery-3.4.1.min.js"></script>
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>
</body>

</html>
