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
        /* ----------About Page---------- */
.About-us p {
    font-size: 15px;
    text-align:justify
}
.details{
    padding:40px 26px;

}

.details h3{
    color:#000 !important;
    font-size:20px;
    padding-top:5px;
    text-align:center
}
.details p{
    text-align:justify
}
.approach-sec{
    height:400px
}
.approach-img{
    padding-bottom:10px
}
.who-we-are {
    padding: 40px;
    background-color: var(--light);
}
.who-we-are-bottom h4{
    color:#172d55 !important;
    text-align:left
}
.how-we-work {
    padding: 40px;
    background-color: var(--light);
}

.who-we-are,
.how-we-work h1 {
    text-align: center;
    justify-content: center;
}

.who-we-are,
.how-we-work p {
    line-height: 28px;
    justify-content: center;
}

.io-our-vision {
    background-color: var(--light);
    color: #000;
}

.io-our-mission {
    background-color: var(--primary);
    color: var(--light);
}

.io-our-vision h1{
    color:#172d55 !important
}
.io-our-mission h1 {
    color: var(--light);
}

.io-about-work-right h3 {
    color: white !important;
    font-size: 20px;
    font-weight: normal;
}

.io-about-work-right p {
    color: #000 !important;
    font-size: 14px !important;
    font-weight: normal;
}

.io-about-work {
    background-color: var(--primary);
    padding: 20px;
    /* border-top-left-radius: 30px; */
    border-bottom-left-radius: 30px;
}

.io-about-work:hover {
    transition: all 0.4s;
    background: #184689;
}

.io-about-work:hover svg {
    fill: #184689;
}

.vision-img {
    /* animation: vision 1s ease-in-out infinite alternate; */
    transform-origin: center;
    transform-box: fill-box;
}

@keyframes vision {
    from {
        transform: translatey(0%);
    }

    to {
        transform: translatey(5%);
    }
}

@keyframes mission {
    from {
        transform: translatex(0%);
    }

    to {
        transform: translatex(4%);
    }
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

.py-6 {
    padding-top: 90px;
    padding-bottom: 90px;
}
.approach1{
    margin: auto;
    position:relative;
    padding:20px;
    background: green;
    width: 170px;
    border-radius: 50%;
}
.approach1:after {
    content: "";
    border-top: 30px solid transparent;
    border-bottom: 28px solid transparent;
    border-left: 30px solid green;
    border-right: 0px solid transparent;
    position: absolute;
    left: 74px;
    /* height: 20px; */
    top: 148px;
    transform: rotate(89deg);
}
.approach2{
    margin: auto;
    position:relative;
    padding:20px;
    background: #00589d;
    width: 170px;
    border-radius: 50%;
}
.approach2:after {
    content: "";
    border-top: 30px solid transparent;
    border-bottom: 28px solid transparent;
    border-left: 30px solid #00589d;
    border-right: 0px solid transparent;
    position: absolute;
    left: 74px;
    /* height: 20px; */
    top: 148px;
    transform: rotate(89deg);
}

.approach3{
    margin: auto;
    position:relative;
    padding:20px;
    background: #33BBC5;
    width: 170px;
    border-radius: 50%;
}

.approach3:after {
    content: "";
    border-top: 30px solid transparent;
    border-bottom: 28px solid transparent;
    border-left: 30px solid #33BBC5;
    border-right: 0px solid transparent;
    position: absolute;
    left: 74px;
    /* height: 20px; */
    top: 148px;
    transform: rotate(89deg);
}
.app-user1{
    background:var(--light);
    padding:26px;
    border-radius:50%;
    border:6px solid #efefef
}
/* -----------end about---------------- */
    </style>


</head>
<body>

<?php include "lib/top-bar.php";?>

<div class="about-start">

<?php include"lib/nav.php";?>

    <!-- Page Header Start -->
    <div class="container-fluid pr-background" style="height: 165px !important;overflow:hidden">
        <section class="container">
            <div class="breadcrumb_row">
                <nav>
                   <ul>
                    <li>
                      <a href="#" title="Home" target="_blank">Home</a>
                    </li>
                   <li>About Us</li>
                  
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End -->
    
    <section class="our-services-top container f-shadow-down">
        <div class="row">
            <h1>About Us</h1>
          <div class="col-lg-12 who-we-are-bottom About-us">
       </div>
    </section>


    <div class="container-fluid About-us">
        <div class="row g-0">
            <div class="col-lg-6 py-5 px-5">
                                
                <p class="mb-2">At InsightsORB, we shape business strategies for companies worldwide with a holistic approach to market research and consultation. Our work ethic is built on a time-honored foundation of ‘Client Comes First’, which reflects in our dedication to diving deep into the ocean of knowledge available to dig out insights that actually matter. We do not simply give you a comprehensive overview of the market, but work tirelessly to unearth the finer details that lay beneath the chaos of multiple industry voices.</p> 
                <p class="mb-4">At InsightsORB, we realize that a superficial, macro-level approach does not work for every industry, which is why our analysts painstakingly study the market on the micro level, so that even the smallest of data points can help you achieve big things. Our unfazed commitment to never making tall claims and offering only relevant advice differentiates us from our competitors.</p> 
               
            </div>
             <div class="col-lg-6 io-d-flex py-5 px-5 io-about-work-right">
             <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="vision" style="padding:15px;background: aliceblue;height: 322px">
                    <div class="vision-img" style="text-align: center;">
                        <img src="<?=IMG;?>icons/vision.png">
                    </div>
                    <div class="vision-desc" style="padding-top:20px">
                        <h4 style="text-align: center;">Our Vision</h4>
                        <p style="color:#000">To offer our clients a source of market intelligence that will pave a smooth path to their success.</p>
                    </div>
                    </div>
                </div>                    
                <div class="col-lg-6 col-sm-12">
                <div class="mission" style="padding:15px;background: azure;height: 322px">
                <div class="mission-img" style="text-align: center;">
                        <img src="<?=IMG;?>icons/mission.png">
                    </div>
                    <div class="mission-desc" style="padding-top:20px">
                        <h4 style="text-align: center;">Our Mission</h4>
                        <p style="color:#000">To help our clients navigate the chaos of multiple data points with insights that truly empower your business endeavors.</p>
                    </div>
</div>
</div>
                </div>                    
            </div>
            
        </div>
    </div>

    

<section class="who-we-are container-fluid py-4 px-4" style="background:#f7f7f7">
    <div class="row">
    <h1 class="sec-title pb-1">An Approach that Combines a Robust Research Model with Self-Virtue</h1> 
<p class="pb-3"> At InsightsORB, every data point we provide, every insight we unearth has a sincere touch of honesty and dedication to our clients. Our market experts work relentlessly so that our industry acumen instills confidence in every business decision you make and are assured of success over years to come.</p>
    <div class="col-md-4">
    <div class="approach1">
        <div class="app-user1">
    <img src="<?=IMG;?>about/solution.png">
    </div>
    </div>
    <div class="details">
                    <h3>Solutions for Everyone</h3>
                    <p>Whether you are an MNC with distributed workforces or an MSME with just a handful or resources, we offer research solutions for businesses of all sizes. We also cater to startups with comprehensive market entry strategies, PESTLE scenario, feasibility studies, customer behavior analysis, and overall market dynamics.</p>
                </div>
</div>
<div class="col-md-4">
<div class="approach2">
        <div class="app-user1">
        <img src="<?=IMG;?>about/data-integration.png">
    </div>
    </div>
    <div class="details">
                    <h3>Data Integrity</h3>
                    <p>In a world where genuine opinion is easily silenced in the chaos of voluminous, superfluous statistics, we go out of our way to look for precise insights that make the market landscape clearer. But, we do not stop here. Every data point we dig out is put through intensive cross-referencing and validation from a host of internal and external sources, to ensure it is both relevant and can make a positive difference in our clients’ short- and long-term vision.</p>
                </div>
</div>

<div class="col-md-4">
<div class="approach3">
        <div class="app-user1">
        <img src="<?=IMG;?>about/custom.png">
    </div>
    </div>
    <div class="details">
                    <h3>Endless Scope for Customization</h3>
                    <p>Just as the market dynamics evolve, so must business decisions and the knowledge that empowers them. We take pride in being able to customize the entire research scope of the report on demand. Unbroken communication allows us to fully comprehend our clients’ needs and offer them tailored market research and consulting solutions.</p>
                </div>
</div>
    </div>
</section>


<section class="container-fluid py-4" style="text-align:center">
    <div class="row">
    <div class="col-lg-12"> 
    <img src="<?=IMG;?>advantage.jpg" class="io-img-responsive" draggable="false"  alt="advantage" />
</div>
</div>
</section>
</div>
  
    
    <?php include 'lib/our-service.php' ?>
     <?php include 'lib/footer.php' ?>

    <!-- JavaScript Libraries -->
    <script src="<?=JS;?>jquery-3.4.1.min.js"></script>
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>
    
</body>

</html>