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
}

.io-left-choose-box .io-button.active {
    background-color: var(--primary);
    color: var(--light) !important;
    transition: all 0.3s;
    font-weight: 700;
    border: 1px solid var(--light);
    transform: scale(1.04);
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
    background-color: #dfdfdf;
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

.io-why-service-section:hover {
    box-shadow: 0 10px 50px -5px rgba(46, 71, 93, 0.12);
    transform: scale(1.05);
    transition: all 0.4s;
} 



.io-card-event a {
    color: #0a58ca;
}

.io-card-event p {
    padding-top: 9px;
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
<?php include"lib/top-bar.php";?>

<div class="media-citation-start">


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
                   <li>Events</li>
                  
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End -->
    
    <section class="our-services-top container f-shadow-down">
        <div class="row">
            <h1>Events</h1>
          <div class="col-lg-12 who-we-are-bottom">
                     
       </div>
    </section>
    <section class="our-media-top container f-shadow-down">
    <div class="row">
           
           <div class="col-md-4 overflow-hidden io-left-choose-box">
               <button  data-target="i1" class="active io-button">Consumer Products</button>
               <button  data-target="i2" class="io-button">Life Sciences</button>
               <button  data-target="i3" class="io-button">ICT and Media</button>
               <button  data-target="i5" class="io-button">Semiconductor and Electronics</button>
               <button  data-target="i5" class="io-button">Chemicals and Materials</button>
               <button  data-target="i6" class="io-button">Automotive and Transportation</button>
               <button  data-target="i7" class="io-button">Power and Energy</button>
               
           </div>
           <div class="col-md-8 io-right-choose-box" style="max-width: 900px;">
               <div class="content active" id="i1">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead">- Consumer Products -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-12 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body io-card-event justify-content-center">
                             <h3 class="mb-3"><a href="" class="" title="Automotive Embedded Systems Market">Automotive Embedded Systems Market</a></h3>
                             <a href="https://www.psmarketresearch.com/market-analysis/plate-frame-heat-exchanger-market">https://www.psmarketresearch.com/market-analysis/plate-frame-heat-exchanger-market</a>
                              <p>Plate-and-Frame Heat Exchanger Market Size and Share Analysis by Type (Brazed, Gasketed, Welded), Application (Chemicals, Food & Beverages, HVAC & Refrigeration, Petrochemicals and Oil & Gas, Power Generation, Pulp & Paper) - Global Industry Demand Forecast to 2030</p>
                          </div>
                       </div>
                           <div class="col-lg-12 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body io-card-event justify-content-center">
                             <h3 class="mb-3"><a href="" class="" title="Military Truck Market">Military Truck Market</a></h3>
                             <a href="https://www.psmarketresearch.com/market-analysis/plate-frame-heat-exchanger-market">https://www.psmarketresearch.com/market-analysis/plate-frame-heat-exchanger-market</a>
                              <p>Plate-and-Frame Heat Exchanger Market Size and Share Analysis by Type (Brazed, Gasketed, Welded), Application (Chemicals, Food & Beverages, HVAC & Refrigeration, Petrochemicals and Oil & Gas, Power Generation, Pulp & Paper) - Global Industry Demand Forecast to 2030</p>
                             </div>
                             </div>
                           <div class="col-lg-12 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body io-card-event justify-content-center">
                             <h3 class="mb-3"><a href="" class="" title="Automotive Carbon Wheel Market">Automotive Carbon Wheel Market</a></h3>
                             <a href="https://www.psmarketresearch.com/market-analysis/plate-frame-heat-exchanger-market">https://www.psmarketresearch.com/market-analysis/plate-frame-heat-exchanger-market</a>
                              <p>Plate-and-Frame Heat Exchanger Market Size and Share Analysis by Type (Brazed, Gasketed, Welded), Application (Chemicals, Food & Beverages, HVAC & Refrigeration, Petrochemicals and Oil & Gas, Power Generation, Pulp & Paper) - Global Industry Demand Forecast to 2030</p>
                             </div>
                             </div>
                           <div class="col-lg-12 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                         <div class="card card-body io-card-event justify-content-center">
                         <h3 class="mb-3"><a href="" class="" title="Automotive Electric Actuator Market">Automotive Electric Actuator Market</a></h3>
                         <a href="https://www.psmarketresearch.com/market-analysis/plate-frame-heat-exchanger-market">https://www.psmarketresearch.com/market-analysis/plate-frame-heat-exchanger-market</a>
                              <p>Plate-and-Frame Heat Exchanger Market Size and Share Analysis by Type (Brazed, Gasketed, Welded), Application (Chemicals, Food & Beverages, HVAC & Refrigeration, Petrochemicals and Oil & Gas, Power Generation, Pulp & Paper) - Global Industry Demand Forecast to 2030</p>
                         </div>
                        </div>
                         
                         </div>
                         <div class="row px-4 pb-4">
                         <div class="col-lg-12 col-md-12 col-12">
                         <div class=" text-center">
                        <a style="background: var(--light);border-radius: 5px;" href="" title="View All Automotive" class="text-white bg-primary radius6 px-5 py-2  bold600 d-inline-block">Browse All Events</a>
                        </div>
                        </div>
                   </div>
               
                </div>
                <div class="content" id="i2">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- Life Sciences -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Embedded Systems Market">Automotive Embedded Systems Market</a></h3>
                              <p >The automotive embedded system consists of an electronic or computer system</p>
                          </div>
                       </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Military Truck Market">Military Truck Market</a></h3>
                             <p >Military truck is a rigid vehicle that is designed to transport</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Carbon Wheel Market">Automotive Carbon Wheel Market</a></h3>
                             <p >Initially, steel and aluminum carbon fibers were used to manufacture automotive</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                         <div class="card card-body  topReportPostBox justify-content-center">
                         <h3 class="mb-3 "><a href=""  title="Automotive Electric Actuator Market">Automotive Electric Actuator Market</a></h3>
                         <p >Automotive actuators are either electric motors, electromagnetic valves, or electromechanical devices</p>
                         </div>
                         </div>
                                                                             
                         </div>
                         <div class="row px-4 pb-4">
                         <div class="col-lg-12 col-md-12 col-12">
                         <div class=" text-center">
                        <a style="background: var(--light);border-radius: 5px;" href="" title="View All Automotive" class="text-white bg-primary radius6 px-5 py-2  bold600 d-inline-block">Browse All Events</a>
                        </div>
                        </div>
                   </div>
               
                </div>
                <div class="content " id="i3">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- ICT and Media -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Embedded Systems Market">Automotive Embedded Systems Market</a></h3>
                              <p >The automotive embedded system consists of an electronic or computer system</p>
                          </div>
                       </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Military Truck Market">Military Truck Market</a></h3>
                             <p >Military truck is a rigid vehicle that is designed to transport</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Carbon Wheel Market">Automotive Carbon Wheel Market</a></h3>
                             <p >Initially, steel and aluminum carbon fibers were used to manufacture automotive</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                         <div class="card card-body  topReportPostBox justify-content-center">
                         <h3 class="mb-3 "><a href=""  title="Automotive Electric Actuator Market">Automotive Electric Actuator Market</a></h3>
                         <p >Automotive actuators are either electric motors, electromagnetic valves, or electromechanical devices</p>
                         </div>
                         </div>
                                                     
                         
                         </div>
                         <div class="row px-4 pb-4">
                         <div class="col-lg-12 col-md-12 col-12">
                         <div class=" text-center">
                        <a style="background: var(--light);
                        border-radius: 5px;" href="" title="View All Automotive" class="text-white bg-primary radius6 px-5 py-2  bold600 d-inline-block">Browse All Events</a>
                        </div>
                        </div>
                   </div>
               
                </div>
                <div class="content " id="i4">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- Semiconductor and Electronics -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Embedded Systems Market">Automotive Embedded Systems Market</a></h3>
                              <p >The automotive embedded system consists of an electronic or computer system</p>
                          </div>
                       </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Military Truck Market">Military Truck Market</a></h3>
                             <p >Military truck is a rigid vehicle that is designed to transport</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Carbon Wheel Market">Automotive Carbon Wheel Market</a></h3>
                             <p >Initially, steel and aluminum carbon fibers were used to manufacture automotive</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                         <div class="card card-body  topReportPostBox justify-content-center">
                         <h3 class="mb-3 "><a href=""  title="Automotive Electric Actuator Market">Automotive Electric Actuator Market</a></h3>
                         <p >Automotive actuators are either electric motors, electromagnetic valves, or electromechanical devices</p>
                         </div>
                         </div>
                                                     
                         
                         
                         </div>
                         <div class="row px-4 pb-4">
                         <div class="col-lg-12 col-md-12 col-12">
                         <div class=" text-center">
                        <a style="background: var(--light);border-radius: 5px;" href="" title="View All Automotive" class="text-white bg-primary radius6 px-5 py-2  bold600 d-inline-block">Browse All Events</a>
                        </div>
                        </div>
                   </div>
               
                </div>
                <div class="content " id="i5">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- Chemicals and Materials -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Embedded Systems Market">Automotive Embedded Systems Market</a></h3>
                              <p >The automotive embedded system consists of an electronic or computer system</p>
                          </div>
                       </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Military Truck Market">Military Truck Market</a></h3>
                             <p >Military truck is a rigid vehicle that is designed to transport</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Carbon Wheel Market">Automotive Carbon Wheel Market</a></h3>
                             <p >Initially, steel and aluminum carbon fibers were used to manufacture automotive</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                         <div class="card card-body  topReportPostBox justify-content-center">
                         <h3 class="mb-3 "><a href=""  title="Automotive Electric Actuator Market">Automotive Electric Actuator Market</a></h3>
                         <p >Automotive actuators are either electric motors, electromagnetic valves, or electromechanical devices</p>
                         </div>
                         </div>
                                                     
                         </div>
                         <div class="row px-4 pb-4">
                         <div class="col-lg-12 col-md-12 col-12">
                         <div class=" text-center">
                        <a style="background: var(--light);border-radius: 5px;" href="" title="View All Automotive" class="text-white bg-primary radius6 px-5 py-2  bold600 d-inline-block">Browse All Events</a>
                        </div>
                        </div>
                   </div>
               
                </div>
                <div class="content " id="i6">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- Automotive and Transportation -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Embedded Systems Market">Automotive Embedded Systems Market</a></h3>
                              <p >The automotive embedded system consists of an electronic or computer system</p>
                          </div>
                       </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Military Truck Market">Military Truck Market</a></h3>
                             <p >Military truck is a rigid vehicle that is designed to transport</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Carbon Wheel Market">Automotive Carbon Wheel Market</a></h3>
                             <p >Initially, steel and aluminum carbon fibers were used to manufacture automotive</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                         <div class="card card-body  topReportPostBox justify-content-center">
                         <h3 class="mb-3 "><a href=""  title="Automotive Electric Actuator Market">Automotive Electric Actuator Market</a></h3>
                         <p >Automotive actuators are either electric motors, electromagnetic valves, or electromechanical devices</p>
                         </div>
                         </div>
                                                     
                         
                         
                         </div>
                         <div class="row px-4 pb-4">
                         <div class="col-lg-12 col-md-12 col-12">
                         <div class=" text-center">
                        <a style="background: var(--light);
                        border-radius: 5px;" href="" title="View All Automotive" class="text-white bg-primary radius6 px-5 py-2  bold600 d-inline-block">Browse All Events</a>
                        </div>
                        </div>
                   </div>
               
                </div>
                <div class="content" id="i7">
                   <div class="row pt-2">
                       <div class="col-lg-12 col-md-12 col-12">
                           <div class="IndustryTitle text-center">
                               <h3 class="industryhead ">- Power and Energy -</h3>
                           </div>
                       </div>
                   </div>
                   <div class="row p-4">
                       <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                          <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Embedded Systems Market">Automotive Embedded Systems Market</a></h3>
                              <p >The automotive embedded system consists of an electronic or computer system</p>
                          </div>
                       </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Military Truck Market">Military Truck Market</a></h3>
                             <p >Military truck is a rigid vehicle that is designed to transport</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                             <div class="card card-body  topReportPostBox justify-content-center">
                             <h3 class="mb-3 "><a href=""  title="Automotive Carbon Wheel Market">Automotive Carbon Wheel Market</a></h3>
                             <p >Initially, steel and aluminum carbon fibers were used to manufacture automotive</p>
                             </div>
                             </div>
                           <div class="col-lg-6 col-md-6 col-12 io-d-flex io-flex-column mb-3">
                         <div class="card card-body  topReportPostBox justify-content-center">
                         <h3 class="mb-3 "><a href=""  title="Automotive Electric Actuator Market">Automotive Electric Actuator Market</a></h3>
                         <p >Automotive actuators are either electric motors, electromagnetic valves, or electromechanical devices</p>
                         </div>
                         </div>
                                                     
                         
                         </div>
                         <div class="row px-4 pb-4">
                         <div class="col-lg-12 col-md-12 col-12">
                         <div class=" text-center">
                        <a style="background: var(--light);border-radius: 5px;" href="" title="View All Automotive" class="text-white bg-primary radius6 px-5 py-2  bold600 d-inline-block">Browse All Events</a>
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