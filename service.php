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

    <style>



.io-why-choose {
    padding-top: 20px;
    padding-bottom: 100px;
    background: var(--primary);
    background-size: cover;
}

.io-why-choose a:hover {
    color: var(--primary);
}

.io-why-choose h2 {
    text-align: center;
    padding-bottom: 20px;
    color: var(--light) !important;
    font-size: 35px;
}

.io-left-choose-box .io-button {
    background-color: var(--light);
    color: var(--primary) !important;
    padding: 14px 0px 14px 0px;
    margin: 10px 25px;
    justify-content: start;
    outline: none;
    border: 0;
    border-radius: 5px;
    width: 260px;
    box-shadow: -2px 2px 22px -10px #88888e;
    display: block;
}

.io-left-choose-box .io-button.active {
    background-color: var(--primary);
    color: var(--light) !important;
    transition: all 0.3s;
    font-weight: 700;
    border: 1px solid var(--light);
    transform: scale(1.04);
    display: block;
}

.io-left-choose-box .io-button.active:after {
    content: "";
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 11px solid #172d55;
    border-right: 0px solid transparent;
    position: absolute;
    right: -10px;
    top: 16px;
}


.io-right-choose-box {
    background-color: #f5f5f5;
    border-radius: 12px;
}

.io-right-choose-box .industryhead {
    padding: 5px;
    color: var(--primary) !important;
}

.io-right-choose-box .IndustryTitle {
    padding-top: 10px;
    color: var(--primary) !important;
}

.io-right-choose-box h3 {
    color: var(--primary);
    font-size: 20px;
}

.io-right-choose-box .topReportPostBox {
    border-radius: 10px !important;
}

.io-right-choose-box > .active {
    display: block;
}

.content.active {
    display: block;
}

.content {
    display: none;
}

/* .io-why-service-section:hover {
    box-shadow: 0 10px 50px -5px rgba(46, 71, 93, 0.12);
    transform: scale(1.05);
    transition: all 0.4s;
} */


        .io-our-service p {
        font-size: 15px;
        text-align:justify
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

/* .mission-img {
    animation: mission 1s ease-in-out infinite alternate;
    transform-origin: center;
    transform-box: fill-box;
    transform: rotate(180deg);
} */

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
.service-point li:before {
  content: '\2713';
  display: inline-block;
  color: red;
  padding: 0 7px 0 0;
}

.service-point li {
  list-style-type: none;
  font-size: 1em;
  display: flex;
  line-height:1.8
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
.our-serv-top{
    padding:35px;
    margin-bottom:20px
}
.risi:after {
    content:'';
    width:10px;
    height:10px;
    border-radius:50%;
    background:#fb641b;
    position:absolute;
    left:40px;
    top:-6px;
    color:var(--light);
}

.risi{
    border-top: 1px dashed #fb641b;
    width: 50px;
    position: relative;
    top: 20px 
}

@media only screen and (min-width:320px) and (max-width:1199px){

.io-left-choose-box .io-button.active:after {
     display:none
}
}
@media only screen and (min-width:992px){

.io-left-choose-box .io-button.active, .io-left-choose-box .io-button {
     width:250px
}
}
@media only screen and (min-width:320px) and (max-width:991px){

.io-left-choose-box .io-button.active, .io-left-choose-box .io-button {
     width:95%
}
.io-right-choose-box{
    margin-top:15px
}
}

    </style>

</head>

<body>
<?php include"lib/top-bar.php";?>

<div class="services-start">
   

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
                   <li>Services</li>
                  
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End -->
    
    <section class="our-services-top container f-shadow-down">
        <div class="row">
            <h1>Services</h1>
          <div class="col-lg-12 who-we-are-bottom">
                     
           </div>
       </div>
    </section>


    <section class="our-serv-top container f-shadow-down">
    <div class="row">
           
           <div class="col-lg-4 overflow-hidden io-left-choose-box">
               <button  data-target="i1" class="active io-button">Market Research Reports</button>
               <button  data-target="i2" class="io-button">Customised Research Reports</button>
               <button  data-target="i3" class="io-button">Business Consulting Services</button>
               <button  data-target="i4" class="io-button">Full-Time Engagement Services</button>
               
           </div>
           <div class="col-lg-8 io-right-choose-box" style="max-width: 900px;">
               <div class="content active" id="i1">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead">- Market Research Reports -</h3>
                           </div>
                       </div>
                     </div>
                     <div class="row p-4">
                       <div class="col-lg-12 col-md-12 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body io-card-event justify-content-center">
                              <p>For those looking for a comprehensive overview of the market at the regional and country level without straining themselves financially, our syndicated market research reports are the best solution. From the historical and present scenario to all the forces that shape the industry, our research reports offer you a treasure trove of knowledge that instils confidence in your decision-making. The key deliverables of our syndicated market research report are as follows:</p>
                              <h5>Key Point</h5>
                              <div class="points" style="padding: 16px 32px">
                                <div style="height:auto;border-left:1px dashed #fb641b">
                                <div>
                                <div class="risi">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Historical and forecast market size estimation</p></div>
                                
                                <div>
                                <div class="risi">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Major market driver and restraint ascertaining and impact analysis</p></div>
                                
                                <div>
                                <div class="risi">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Studying prevalent trends and unearthing future opportunities</p></div>
                                
                                <div>
                                <div class="risi">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Comprehensive market size breakdown based on region and country</p></div>
                                
                                <div>
                                <div class="risi">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Competitive analysis, including company market share, growth strategies, product and service offerings, and key financials</p></div>
                              </div>
                            </div>
                          
                          <div>
                           
                          </div>
                       </div>
                          
                                                    
                         </div>
                         <div class="row px-4 pb-4">
                         <div class="col-lg-12 col-md-12 col-12">
                         <div class=" text-center">
                        <!-- <a style="background: var(--light);border-radius: 5px;" href="" title="View All Automotive" class="text-white bg-primary radius6 px-5 py-2  bold600 d-inline-block">Browse All Events</a> -->
                        </div>
                        </div>
                   </div>
          </div>
                </div>
                <div class="content" id="i2">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- Customised Research Reports -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-12 col-md-12 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body io-card-event justify-content-center">
                              <p>When you ask for a customised research report, everything at InsightORB revolves around you. Our clients are the centrepiece of every customised research study we undertake, our business development team remaining in unbroken communication with you and our analysts unearthing insights that speak to your business acumen. Here’s what you get with InsightORB’s customised research services:</p>
                              <h5>Key Point</h5>
                              <div class="points" style="padding: 16px 32px">
                                <div style="height:auto;border-left:1px dashed #fb641b">
                                <div>
                                <div class="risi" style=" border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Any specific market detail not included in our syndicated research and that requires a deeper and more-intensive study of the market</p></div>
                                
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Key deliverables determined after an in-depth feasibility study of our clients’ demands</p></div>
                                
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Constant communication with clients throughout the report creation process and adaptation of the key deliverables with clients’ changing requirements</p></div>
                                
            
                            </div>
                          
                          <div>
                           
                          </div>
                       </div>
                          
                                                    
                         </div>
                         
</div>
                </div>
</div>
                <div class="content " id="i3">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- Business Consulting Services -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-12 col-md-12 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body io-card-event justify-content-center">
                              <p>Whether an established name or a potential entrant into an industry, companies today need to have all the information of the market at their fingertips. Staying ahead of the competition and unearthing lucrative opportunities where there are none are the major nutrients that corporate unicorns of the modern world need. Our decades of experience and the combined knowledge of our analysts on varied markets allows us to helps companies of all sizes in optimally utilising their resources, planning investments, expanding their geographical footprint, understanding consumer perception and driving revenue. Our consulting services entail the following:</p>
                              <h5>Key Point</h5>
                              <div class="points" style="padding: 16px 32px">
                                <div style="height:auto;border-left:1px dashed #fb641b">
                                <div>
                                <div class="risi" style=" border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Special client requirements that cannot be accommodated in our standard market research reports are taken up under consulting projects</p></div>
                                
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Our dedicated consulting department delves deep into our clients’ needs and meticulously creates a plan of action, to deliver knowledge that shapes their vision for the future</p></div>
                                
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">We painstakingly study the market, analysing its present trends and future circumstances, the weight the potential outcome of our clients’ strategic move</p></div>
                                
                                
                
                          
                          <div>
                           
                          </div>
                       </div>
                                     
                         </div>
</div>
</div>
</div>       
</div>
                <div class="content " id="i4">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- Full-Time Engagement Services -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-12 col-md-12 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body io-card-event justify-content-center">
                              <p>As circumstances change and markets evolve, so must companies aiming to continue their success story. For this, clients may require basic information on the industry or precise insights that are like finding a needle in a haystack. This could include a comprehensive market size analysis, continuous study of the evolving market dynamics, consumer behaviour, or regulatory landscape, or staying abreast of the latest discoveries and inventions, inflation, and fluctuations in the prices of the final products, intermediates, and raw materials.</p>
                              <p>At insightORB, our analysts engage full time with clients, understanding each of their requirements in detail and then, modifying the research scope and the report creation process every step of the way. Our 24x7 business support allows our clients to speak with our sales representatives and analysts just as a grain of sand shifts in the market, thus ensuring quick query resolution and prompt business decisions. Our full-time engagement teams comprise team members from various levels of the market research ladder, from dynamic associates and primary researchers to seasoned data miners and industry experts. Here are the key advantages of our Full-Time Engagement services:</p>
                              <h5>Key Point</h5>
                              <div class="points" style="padding: 16px 32px">
                                <div style="height:auto;border-left:1px dashed #fb641b;padding-bottom: 1px">
                                <div>
                                <div class="risi" style=" border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">A team dedicated to a particular client project</p></div>
                                
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">24x7 analyst support, 365 days a year</p></div>
                                
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Mid-way research scope modification as per clients’ request</p></div>
                                
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Fragmentation of lengthy projects into periodic deliverables</p></div>
                                
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Analyst presentations and briefings for easy understanding</p></div>
                              
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Access to related repots and InsightORB database at special discounts</p></div>
                              
                           
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Unlimited scope for report customisation</p></div>
                              
                            
                                <div>
                                <div class="risi" style="border-top: 1px dashed #fb641b;width: 50px;position: relative;top: 20px">
                                    
                                </div><p style="margin-left: 62px;margin-top: 5px">Priority aftersales support</p></div>
                              </div>
                            </div>

                          </div>
                       </div>
                          
                            </div>                        
                         </div>
</div>       
</div>
</div>
                
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