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

/* ---------------Report Start------------------------------------------- */
.OurIndustryTitle {
    background-color: var(--primary);
    text-align: center;
    padding: 8px 10px 8px 20px;
    color: #fcfbfb;
}

.rd-right-industry {
    background-color: var(--light);
    box-shadow: -2px 2px 22px -10px #88888e;
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    margin-top: 6px;
    position: sticky;
    top: 90px;
}

.our-rd-top {
    background-color: var(--light);
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 30px;
}

.our-rd-top h4 {
    font-size: 20px;
    color: var(--primary);
    padding-top: 5px;
    padding-bottom: 5px;
    line-height: 1.5rem;
    font-weight: 700 !important;
}

.our-rd-top p {
    color: #000;
    font-size: 14.5px;
    line-height: 23px;
    text-align: justify;
}

.our-rd-top .rd-container {
    margin-top: 6px;
    margin-bottom: 20px;
    padding: 17px 15px 17px 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: -2px 2px 22px -10px #88888e;
    border-radius: 10px;
}

.rd-container .rd-img {
    border: 1px solid #b1afaf;
}

.rd-container .rd-img .img-rd {
    width: 100%;
    height: 175px;
    padding: 5px;
}

.our-rd-services-top {
    padding: 32px 32px 32px 32px;
    background-color: var(--light);
    margin-bottom: 20px;
    margin-top: 30px;
    margin-top: -80px;
    border-radius: 10px 10px 0 0;
}

.our-rd-services-top h1 {
    text-align: center;
    justify-content: center;
    /* padding-bottom: 10px; */
    font-size: 30px !important;
}

.our-rd-services-top p {
    line-height: 28px;
    justify-content: center;
}

.right-industry-section {
    display: flex;
    flex-direction: column;
}

.right-industry-section ul {
    padding: 0 !important;
    margin: 0;
}

.right-industry-section ul li {
    list-style: none;
    border-bottom: 1px solid #cfcece;
}

.right-industry-section ul li a {
    text-decoration: none;
    padding: 8px 10px 8px 10px;
    display: block;
    background-color: #f5f5f5;
    color: var(--primary) !important;
    font-size: 13px;
    font-weight: 600;
}

.right-industry-section ul li a svg {
    padding-right: 5px;
}

.rd-form-short ul {
    padding: 0;
}

.rd-form-short ul li {
    display: inline-block;
    font-size: 12px;
    padding: 4px;
    color: var(--primary);
    font-family: "Lato", Helvetica, sans-serif;
    border-right: 1px solid #929191;
    line-height: 1;
    font-weight: 700;
}

.rd-form-short ul li span {
 color:#008ab5
}

.rd-form-short ul li:last-child {
    border-right: 0;
}

.rd-reading-box {
    width: 100%;
    display: flex;
    justify-content: end;
}

.view-more-btn {
    margin-right: 5%;
    width: 18%;
    background-image: linear-gradient(to right, #004e92, #000428);
    color: var(--light);
    font-weight: 600;
    font-size: 13px;
    text-align: center;
    padding: 8px;
    border-radius: 4px
}

.view-more-btn:hover {
    color: var(--light);
    background-image: linear-gradient(to left, #004e92, #000428);
    transition: all .3s;
}

.breadcrumb_row_rd ul {
    padding: 10px 4px 10px 0px;
    list-style: none;
    text-align: left;
    margin-bottom: 0;
    /* border: 1px solid var(--light); */
}

.breadcrumb_row_rd {
    position: relative;
    top: 40px;
    /* background: var(--primary); */
    width: 270px;
}

.breadcrumb_row_rd ul li {
    display: inline;
    font-size: 12px;
    color: var(--light);
}

.breadcrumb_row_rd ul li a {
    color: var(--light);
    text-decoration: none;
    font-size: 12px;
}

.breadcrumb_row_rd ul li + li:before {
    padding: 2px;
    color: #e1e1e1;
    content: "\203A";
    font-size: 15px;
}

@media only screen and (min-width: 320px) and (max-width: 1080px) {
    .view-more-btn {
        width: 100%;
    }

    .view-more-btn:hover {
        color: var(--light) !important;
    }

    .report {
        width: 100% !important;
    }

}

</style>

</head>

<body>
<?php include"lib/top-bar.php";?>
<main>
<div class="rd-start">
    
<?php include"lib/nav.php";?>

    <!-- Page Header Start -->
    <div class="container-fluid pr-background" style="height:165px !important;overflow:hidden">
        <section class="container">
            <div class="breadcrumb_row_rd">
                <nav>
                   <ul>
                    <li>
                      <a href="#" title="Home" target="_blank">Home</a>
                    </li>
                   <li>Report Store</li>
                  
                   </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- Page Header End -->
    
    <section class="our-rd-services-top container f-shadow-down">
        <div class="row">
            <h1>Report Store</h1>
          <div class="col-lg-12 who-we-are-bottom">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error corporis, voluptatum quas eligendi id fugit eveniet ipsam, facilis minima nesciunt cum eos explicabo quaerat amet et inventore, doloribus possimus sapiente.</p> -->
         
       </div>
    </section>
    <section class="our-rd-top container f-shadow-down">
        <div class="row" style="justify-content: space-between;">
                <div class="col-lg-9">
                 <article>
                    <div class="rd-container">
                        <div class="row">
                           
                            <div class="col-lg-12">
                                <h4>Seasonings and Spices Market </h4>
                     <!-- <div class="rd-form-short">
                        <ul>
                            <li>Report Code:&nbsp;<span>965655</span></li>
                            <li>Published Date:&nbsp;<span>April 2023</span></li>
                            <li>Available Format:&nbsp;<span>PDF</span></li>
                            <li>Pages:&nbsp;<span>120</span></li>
                            
                        </ul>
                     </div> -->
                    
                     <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030. The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030.The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030.</p>
                     <div class="rd-reading-box">
                        <a href="rd-details.php" rel="nofollow" class="view-more-btn">Read Report</a>
                        
                        </div>

                            </div>
                        </div>
                        
                     </div>
                     </article>
                     
                     <article>
                        <div class="rd-container">
                            <div class="row">
                                
                                <div class="col-lg-12">
                                    <h4>Seasonings and Spices Market </h4>
                         
                        
                         <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030.</p>
                         <div class="rd-reading-box">
                            <a href="rd-details.php" rel="nofollow" class="view-more-btn">Read Report</a>
                            
                            </div>
    
                                </div>
                            </div>
                            
                         </div>
                         </article>
                         <article>
                            <div class="rd-container">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <h4>Seasonings and Spices Market </h4>
                            
                             <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030.</p>
                             <div class="rd-reading-box">
                                <a href="rd-details.php" rel="nofollow" class="view-more-btn">Read Report</a>
                                
                                </div>
        
                                    </div>
                                </div>
                                
                             </div>
                             </article>
                             <article>
                                <div class="rd-container">
                                    <div class="row">
                                       
                                        <div class="col-lg-12">
                                            <h4>Seasonings and Spices Market </h4>
                                
                                
                                 <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030.</p>
                                 <div class="rd-reading-box">
                                    <a href="rd-details.php" rel="nofollow" class="view-more-btn">Read Report</a>
                                    
                                    </div>
            
                                        </div>
                                    </div>
                                    
                                 </div>
                                 </article>
                                 <article>
                                    <div class="rd-container">
                                        <div class="row">
                                            
                                            <div class="col-lg-12">
                                                <h4>Seasonings and Spices Market </h4>
                                    
                                    
                                     <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030.</p>
                                     <div class="rd-reading-box">
                                        <a href="rd-details.php" rel="nofollow" class="view-more-btn">Read Report</a>
                                        
                                        </div>
                
                                            </div>
                                        </div>
                                        
                                     </div>
                                     </article>
                                     <article>
                                        <div class="rd-container">
                                            <div class="row">
                                               
                                                <div class="col-lg-12">
                                                    <h4>Seasonings and Spices Market </h4>
                                        
                                        
                                         <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030.</p>
                                         <div class="rd-reading-box">
                                            <a href="rd-details.php" rel="nofollow" class="view-more-btn">Read Report</a>
                                            
                                            </div>
                    
                                                </div>
                                            </div>
                                            
                                         </div>
                                         </article>
                </div>

                <div class="col-lg-3 rd-right-side">

                    <div class="rd-right-industry sticky">
                        <div class="OurIndustryTitle">Our Industry</div>
                        <div class="right-industry-section">
                        <ul>
                            <li><a href="#"><svg fill="#172455" width="25px" height="25px" viewBox="-1 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-cogs-f" stroke="#172455"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M14 5.714a1.474 1.474 0 0 0 0 2.572l-.502 1.684a1.473 1.473 0 0 0-1.553 2.14l-1.443 1.122A1.473 1.473 0 0 0 8.143 14l-2.304-.006a1.473 1.473 0 0 0-2.352-.765l-1.442-1.131A1.473 1.473 0 0 0 .5 9.968L0 8.278a1.474 1.474 0 0 0 0-2.555l.5-1.69a1.473 1.473 0 0 0 1.545-2.13L3.487.77A1.473 1.473 0 0 0 5.84.005L8.143 0a1.473 1.473 0 0 0 2.358.768l1.444 1.122a1.473 1.473 0 0 0 1.553 2.14L14 5.714zM7 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.393.061a7.976 7.976 0 0 0 .545-4.058L16.144 6a1.473 1.473 0 0 0 2.358.768l1.444 1.122a1.473 1.473 0 0 0 1.553 2.14L22 11.714a1.474 1.474 0 0 0 0 2.572l-.502 1.684a1.473 1.473 0 0 0-1.553 2.14l-1.443 1.122a1.473 1.473 0 0 0-2.359.768l-2.304-.006a1.473 1.473 0 0 0-2.352-.765l-1.442-1.131a1.473 1.473 0 0 0-1.545-2.13l-.312-1.056a7.964 7.964 0 0 0 3.821-1.674 3 3 0 1 0 2.384-3.177z"/></g></svg>
                            Heavy Machinery & Equipment</a></li>
                            
                            <li><a href="#"><svg fill="#172d55" width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#172d55"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="m19.031 15.388c-.476 0-.862-.387-.862-.863 0-.476.386-.863.862-.863.476 0 .862.387.862.863 0 .476-.386.863-.862.863zm0-2.88c-1.112 0-2.014.902-2.014 2.014 0 1.112.901 2.014 2.014 2.014 1.112 0 2.014-.901 2.014-2.014 0-1.113-.903-2.014-2.015-2.014z"/><path d="m4.894 15.388c-.476-.001-.862-.387-.862-.863 0-.476.386-.862.862-.863.476 0 .862.387.862.863 0 .476-.386.863-.862.863zm0-2.88c-1.112 0-2.014.902-2.014 2.014 0 1.112.901 2.014 2.014 2.014 1.112 0 2.014-.901 2.014-2.014v-.001c0-1.112-.902-2.014-2.014-2.014-.001 0-.001 0-.002 0z"/><path d="m11.507 9.727-.143-2.64h2.202l3.023 2.64zm-.854 0h-3.462l1.207-2.64h2.254zm-4.695 0h-1.064l2.014-2.64h.64zm17.46 2.16-.18-.578c-.191-.598-.694-1.044-1.312-1.151l-.01-.001-4.262-.71-3.108-2.646c-.293-.251-.677-.404-1.096-.404-.001 0-.002 0-.003 0h-6.24-.001c-.585 0-1.103.288-1.42.729l-.004.005-1.854 2.607-1.954.2c-.547.059-.987.454-1.112.973l-.002.009-.292 1.259c-.001 0-.002 0-.003 0-.187 0-.352.091-.454.232l-.001.002c-.068.092-.109.207-.109.331 0 .063.01.124.03.181l-.001-.004.18.539c.212.622.792 1.062 1.474 1.062h.554c0-1.467 1.189-2.656 2.655-2.656 1.467 0 2.656 1.189 2.656 2.656h8.826c0-1.467 1.189-2.656 2.656-2.656h.001c1.467 0 2.656 1.189 2.656 2.656h.458c.769 0 1.419-.509 1.631-1.209l.003-.012.198-.666c.015-.049.024-.106.024-.164 0-.132-.044-.253-.117-.351l.001.001c-.108-.142-.277-.234-.467-.234z"/></g></svg>
                            Automotive & Transportation</a></li>
                            <li><a href="#"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#172d55" stroke-width="0.4800000000000001"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 17C10.5523 17 11 16.5523 11 16C11 15.4477 10.5523 15 10 15C9.44772 15 9 15.4477 9 16C9 16.5523 9.44772 17 10 17Z" fill="#172d55"/> <path d="M15 18C15 18.5523 14.5523 19 14 19C13.4477 19 13 18.5523 13 18C13 17.4477 13.4477 17 14 17C14.5523 17 15 17.4477 15 18Z" fill="#172d55"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M15 3V7.58152C17.9318 8.76829 20 11.6426 20 15C20 19.4183 16.4183 23 12 23C7.58172 23 4 19.4183 4 15C4 11.6426 6.06817 8.76829 9 7.58152V3H8C7.44772 3 7 2.55228 7 2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2C17 2.55228 16.5523 3 16 3H15ZM9.75043 9.43539L10.3752 9.18249C10.7529 9.02962 11 8.66295 11 8.25555V3H13V8.25555C13 8.66295 13.2471 9.02962 13.6248 9.18249L14.2496 9.43539C15.1075 9.78268 15.8661 10.3221 16.4726 11L7.52739 11C8.13388 10.3221 8.89249 9.78268 9.75043 9.43539ZM6.3414 13C6.12025 13.6258 6 14.2991 6 15C6 18.3137 8.68629 21 12 21C15.3137 21 18 18.3137 18 15C18 14.2991 17.8798 13.6258 17.6586 13L6.3414 13Z" fill="#172d55"/> </g></svg>
                            Specialty Chemicals and Advanced Materials</a></li>
                           
                           
                            <li><a href="#"><svg width="25px" height="25px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#172d55" stroke="#172d55">
                             <g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>                             <g id="SVGRepo_iconCarrier">                             <defs>                             <style>.cls-1{fill:none;stroke:#172d55;stroke-miterlimit:10;stroke-width:2.4;}</style>                             </defs>                             <rect class="cls-1" x="6.6" y="9.98" width="10.8" height="4.05" transform="translate(-4.97 12) rotate(-45)"/>                             <circle class="cls-1" cx="18.68" cy="5.32" r="3.82"/>                             <circle class="cls-1" cx="5.32" cy="18.68" r="3.82"/>                             <path class="cls-1" d="M12,9.14,9.14,12,6.27,9.14H4.36A2.87,2.87,0,0,1,1.5,6.27V4.36l.4.4A2.1,2.1,0,0,0,4.69,5a2,2,0,0,0,.15-3L4.36,1.5H6.27A2.87,2.87,0,0,1,9.14,4.36V6.27Z"/>                             <path class="cls-1" d="M19.64,14.86a2.87,2.87,0,0,1,2.86,2.87v1.91l-.4-.4A2.1,2.1,0,0,0,19.31,19a2,2,0,0,0-.15,3l.48.48H17.73a2.87,2.87,0,0,1-2.87-2.86V17.73L12,14.86,14.86,12l2.87,2.86Z"/>                             </g>                             </svg>
                            HVAC, Infrastructure & Construction</a></li>
                            
                        </ul>
                    </div>
                    </div>

                </div>
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