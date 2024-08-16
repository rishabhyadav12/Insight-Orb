<?php include"lib/var-const.php";?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Insights orb</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=IMG;?>favicon/favicon.png" rel="icon">
    <link href="<?=CSS;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?=CSS;?>commoncss.css" rel="stylesheet">

<style>

.requestFree {
    text-align: center;
    padding-bottom: 5px;
    overflow: hidden;
    margin-left: -34px;
}

.our-rd-detail-top p {
    color: #404040;
    font-size: 14px;
    line-height: 23px;
}

.our-rd-detail-top {
    background-color: #e2e2e248;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 10px
}

.our-rd-detail-top h4 {
    font-size: 15px;
    color: var(--primary);
    padding-top: 5px;
    padding-bottom: 5px;
    line-height: 1.5rem;
    font-family: "Open Sans", sans-serif;
    font-weight: 700 !important;
}

.io-rd-report-title {
    background-color: var(--primary);
    color: var(--light);
}

.io-rd-report-title h5 {
    color: var(--light);
    text-align: center;
    font-size: 15px;
    padding: 7px 4px 7px 4px;
}

/* .rd-details-start {
    margin-bottom: -75px;
} */

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

.rd-left-industry {
    
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    position: sticky;
    top: 110px;
    margin-top: 30px;
}

.OurIndustryTitle {
    background-color: var(--primary);
    text-align: center;
    padding: 8px 10px 8px 20px;
    color: #fcfbfb;
}

/* .io-rd-enquire-before:hover {
    transform: translateY(-10px);
    transition: transform 125ms;
} */

.io-rd-enquire-before {
    justify-content: center;
    display: block;
    padding-left: 10px;
}

.io-rd-enquire-before a {
    color: var(--light);
    border: 1px solid var(--light);
    box-shadow: 2px 2px 6px 0 #848484;
    padding: 10px 30px 10px 20px;
    background: #19376d;
    border-radius: 5px;
    display: block;
    font-size: 14px;
}

.rd-desc caption {
    font-size: 15px;
    font-weight: 600;
    color: #001541 !important;
    padding-left: 20px;
    padding-bottom: 10px;
    padding-top: 12px;
    text-align: center;
}

.rd-desc table {
    padding: 15px;
    caption-side: top;
}

.rd-desc table {
    width: 100%;
    margin: 10px auto;
    border-spacing: 0;
}

.rd-desc table ul li {
    line-height: 15px !important;
}

.rd-desc table td {
    font-size: 14px;
    font-weight: 400;
    color: #000;
    padding: 10px 10px 10px 30px;
    background: var(--light);
    border-bottom: 1px solid #88aef4;
    border-right: 1px solid #88aef4;
    line-height: 25px;
}

.rd-desc table td:nth-child(1) {
    border-left: 1px solid #88aef4;
}

.rd-desc table tbody .thead-left {
    background-color: var(--primary) !important;
    color: var(--light);
    width: 40%;
    letter-spacing: 0.4px;
}

.rd-desc table tbody .thead-right {
    background-color: var(--primary) !important;
    color: var(--light);
    width: 60%;
    letter-spacing: 0.4px;
}

.rd-desc table tr:nth-child(odd) td {
    background: #3362b92d;
}

.rd-desc table tr:nth-child(even) td {
    background: #87b0fc0d;
}

.rd-desc table td p {
    padding-left: 0 !important;
    color: #000 !important;
    line-height: 25px;
    padding-top: 5px !important;
}

.rd-desc ul {
    margin: 0;
}

.rd-desc ul {
    list-style: none;
    display: block;
    margin: 10px 0 5px 0;
    padding: 0 0 0 50px;
}

.rd-tab1-desc ul {
    display: block;
    margin: 10px 0 5px 0;
    padding: 0 0 0 50px;
}

.rd-desc ul li {
    font-family: "Lato", Helvetica, sans-serif !important;
    padding: 10px 10px 0 0;
    letter-spacing: 0.03em;
    margin-bottom: 0 !important;
    color: #424242;
    font-size: 14.5px;
}

.rd-desc ul li ul li {
    font-size: 14.5px;
    padding: 5px 10px 5px 0;
    background-position: 3px 6px;
    background-repeat: no-repeat;
    line-height: 24px;
    list-style: circle;
    text-align: justify;
    letter-spacing: 0.03em;
    font-family: "Lato", Helvetica, sans-serif !important;
}

.rd-title-top h1 {
    text-align: left;
    justify-content: left;
    padding-bottom: 30px;
    font-size: 20px;
    line-height: 30px;
    font-family: Calibri;
}

.rd-title-top {
    padding: 32px 32px 32px 32px;
    background-color: var(--light);
    margin-bottom: 20px;
    margin-top: 30px;
    position: relative;
    top: -150px;
    border-radius: 16px 16px 0 0;
}

.rd-title-top p {
    line-height: 28px;
    justify-content: center;
}

.io-rd-tab {
    display: flex;
    flex-direction: row;
    /* margin-bottom: 20px;
    margin-top: 33px */
}

.io-rd-tab ul.io-rd-list {
    padding: 0;
}

ul.io-rd-list li {
    background: var(--light);
    color: #222;
    display: block;
    cursor: pointer;
    width: 23%;
    text-align: center;
    border-radius: 4px !important;
    border: 1px solid #9e9e9e;
}

.io-rd-tab ul.io-rd-list {
    padding: 0;
    width: 100% !important;
    margin: 0;
}

.io-rd-tab ul li {
    list-style: none;
    display: block;
    /* margin-top: -10px; */
    width: 100% !important;
}

ul.io-rd-list li {
    background: var(--light);
    color: #222;
    display: block;
    cursor: pointer;
    width: calc(23% + 12px);
    text-align: center;
    /* border-radius: 4px 4px 0 0; */
    border: 1px solid #dfdfdf;
    padding: 20px 3px 20px 1px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.5px;
}

ul.io-rd-list li.active {
    border-bottom: none;
    background-color: #19376d;
    color: var(--light);
    /* transform: scale(1.02); */
    /* border-left: 4px solid var(--primary); */
    transition: all 0.3s;
    overflow: hidden;
}
ul.io-rd-list li.active:after {
    content: "";
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 11px solid #19376d;
    border-right: 0px solid transparent;
    position: absolute;
    right: -10px;
}
.io-rd-tab ul li {
    list-style: none;
    display: block;
    /* margin-top: -10px; */
}

li.rd-tab:hover {
    background: #0079d7;
    color: var(--light);
}

.io-rd-tab ul li a {
    /* padding: 15px 15px 15px 15px;
    background-color: var(--primary); */
    color: var(--primary) !important;
    text-decoration: none;
    cursor: pointer;
}

.io-rd-tab ul li.rd-tab-sample {
    background-color: #d8315b;
    color: var(--light) !important;
    text-decoration: none;
    cursor: pointer;
}

.io-rd-tab ul li.rd-tab-sample.active {
    border-bottom: none;
    background-color: rgb(21, 173, 163);
    color: rgb(255, 255, 255);
}

.rd-main ul li a.active {
    background-color: var(--light);
    color: #001541 !important;
    border-left: 1px solid #000;
    border-top: 1px solid var(--primary);
    border-right: 1px solid #000;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.io-rd-tab > .active {
    display: block;
}

.rd-block.active {
    display: block;
}

.rd-block {
    display: none;
}

.rd-container-detail {
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 14px 18px 10px 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: -2px 2px 22px -10px #88888e;
    border-radius: 10px;
    background-color: var(--light);
}

.rd-main h2 {
    font-size: 15px;
    font-weight: 600;
    color: var(--primary) !important;
    padding-left: 20px;
    padding-top: 15px;
}

.rd-tab1-desc p {
    font-family: "Lato", Helvetica, sans-serif !important;
    padding: 10px 10px 0 20px;
    letter-spacing: 0.03em;
    margin-bottom: 0 !important;
    font-size: 14.5px;
    line-height: 24px;
    color: #424242 !important;
    margin: 0;
    text-align: justify;
}

.faq-sec {
    padding: 15px;
}

.faq-Title {
    font-size: 17px;
    font-weight: 600;
    color: var(--primary);
    padding-bottom: 5px;
    padding-left: 9px;
}

.accordion-main {
    width: 100%;
    border: 1px solid #ccc;
    padding: 12px;
    background: var(--light);
    border-radius: 4px;
}

.accordion-header:nth-child(1) {
    padding-top: 11px;
}

.accordion-header {
    background: #e4e4e478;
    color: #131313;
    cursor: pointer;
    font-size: 15px;
    border: 1px solid #0000004f;
    padding: 11px 10px;
    font-weight: 400;
    margin: 2px 6px;
}

.accordion-body {
    background: var(--light);
    margin-bottom: 5px;
    padding: 10px 5px 10px 5px;
}

.accordion-body p {
    padding: 5px;
    margin: 0;
    font-size: 15px;
    line-height: 20px;
    text-align: justify;
    color: #333;
}

.plus-symbol {
    float: right;
    font-size: 12px;
    color: #000;
    padding: 0px 4px 0px 4px;
    /* border-radius: 50%; */
}

.rd-toc {
    padding: 6px;
}

.rd-tab1-desc h1 {
    color: #000 !important;
    font-size: 18px;
    padding-bottom: 15px;
    text-align: center;
    padding-top: 5px;
}

/* .rd-report-date {
    display: flex;
    box-shadow: -2px 2px 22px -10px #88888E;
    padding: 6px 6px 6px 6px;
} */

.rd-table-desc ul li {
    list-style: none;
    font-size: 13px;
    padding: 6px;
    color: var(--primary);
}

.rd-table-desc ul li span {
    color: #dc3545;
    font-size: 11px;
    font-weight: 600;
}

.rd-table-desc ul  {
   padding-left:10px
}

.rd-report-date {
    display: flex;
    box-shadow: -2px 2px 22px -10px #88888e;
    padding: 14px 2px 0px 6px;
    height: auto;
    background: var(--light);
    /* max-width: 314px; */
    width: 100%;
    border-radius: 4px;
}

.breadcrumb_sec_rd ul {
    padding: 10px 4px 10px 0px;
    list-style: none;
    text-align: left;
    margin-bottom: 0;
    /* border: 1px solid var(--light); */
}

.breadcrumb_sec_rd {
    position: relative;
    top: -65px;
    /* background: var(--primary); */
}

.breadcrumb_sec_rd ul li {
    display: inline;
    font-size: 12px;
    color: var(--primary);
}

.breadcrumb_sec_rd ul li a {
    color: var(--primary);
    text-decoration: none;
    font-size: 12px;
}

.breadcrumb_sec_rd ul li + li:before {
    padding: 2px;
    color: #172d55;
    content: "\203A";
    font-size: 15px;
}

.io-main-buy-btn {
    display: flex;
    width: 100%;
    background-color: #efefef;
    padding: 10px 5px 10px 5px;
    justify-content: center;
    border-radius: 4px;
}

.io-license-type {
    width: 50%;
    background: var(--light);
    text-align: center;
    padding: 4px;
    margin-left: 8px;
    float: left;
    margin-right: 0px;
    border-radius: 7px;
    height: 40px;
}

.io-license-type select {
    outline: 0;
    border: 0;
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    background: none;
    width: 166px
}

.io-license-type select option {
    padding: 2px 0 2px 0;
    color: #000;
}

.io-tooltip {
    width: 7%;
    text-align: center;
    padding: 4px;
    float: left;
}

.io-license-type-button {
    width: 42%;
    text-align: center;
    padding: 4px;
}

.io-license-type-button .buynowbutton {
    background-color: #fb641b;
    padding: 7px 24px 7px 24px;
    border-radius: 5px;
    color: var(--light);
    font-size: 14px;
    font-weight: 600;
    border: none;
    outline: 0;
}

.tooltips {
    position: absolute;
    z-index: 10;
    border-radius: 0;
    width: 20px;
    margin-top: 0;
    /* margin-left: 5px; */
}

.tooltips .tooltipstext {
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
    margin-left: -200px;
    line-height: 1.7em;
    border-radius: 4px;
    /* margin-top: 47px; */
}

.tooltips:hover .tooltipstext {
    visibility: visible;
}

.tooltipstext ul li {
    border-bottom: 1px dashed #efefef;
    margin-bottom: 15px;
}

.tooltipstext ul li b {
    color: #00ff55;
}

.tooltipstext ul {
    padding: 0;
    margin-left: 12px;
}

.tooltipstext ul li:last-child {
    border: none;
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

.io-rd-connect-left {
    padding: 0;
}

.rd-connect-title-left {
    padding: 7px;
    background-color: #1d5d9b;
    color: var(--light);
    text-align: center;
    font-size: 15px;
    border-bottom: 1px solid var(--light);
    font-family: "Lato", Helvetica, sans-serif !important;
}

.io-rd-connect-left ul {
    margin-left: 4px;
    padding-left: 28px;
}

.io-rd-connect-left ul li {
    padding: 8px 0px 6px 0px;
    border-bottom: 1px solid #cacaca;
}

.io-rd-connect-left ul li a {
    font-size: 13px;
    text-decoration: none;
    color: #000;
}

.io-rd-connect-left ul li:last-child {
    border: none;
    text-align: center;
}

.rd-background {
    background: url("./img/pattern.webp");
    /* background-color: var(--primary); */
    background-position: center center;
}

.rd-title-top-desc h1 {
    text-align: left;
    justify-content: left;
    padding-bottom: 30px;
    padding-top: 30px;
    font-size: 20px;
    line-height: 30px;
    font-family: "Calibri", sans-serif !important;
    color: var(--light);
}

.rd-title-top-desc {
    padding: 22px 32px 32px 32px;
    /* background-color: var(--primary); */
    margin-bottom: 20px;
    margin-top: 30px;
    margin-top: -67px;
    border-radius: 16px 16px 0 0;
    background: linear-gradient(to right, #004e92, #000428);
    overflow: hidden;
}

.rd-title-top-desc p {
    line-height: 28px;
    justify-content: center;
}

.rd-left-industry1 {
    background-color: var(--light);
    box-shadow: -2px 2px 22px -10px #88888e;
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    margin-top: 20px;
    position: sticky;
    /* top: 320px; */
}

.io-rd-toc h3 {
    color: var(--primary) !important;
    font-size: 15px;
    padding-bottom: 15px;
}

.io-rd-toc h1 {
    color: #000 !important;
    font-size: 18px;
    padding-bottom: 15px;
    text-align: center;
}


.io-toc-name,
.io-sample-name {
    /* /* width: 100%;
    display: flex;
    padding: 9px; */
    /* width: 50%; */
    display: flex;
    padding: 9px;
}

.io-toc-b-mail,
.io-sample-b-mail {
    /* width: 50%; */
    display: flex;
    padding: 9px;
}

.io-toc-com-name,
.io-sample-com-name {
    /* width: 50%; */
    display: flex;
    padding: 9px;
}

.io-toc-country-name,
.io-sample-country-name {
    /* width: 50%; */
    display: flex;
    padding: 9px;
}

.io-toc-cont-no,
.io-sample-cont-no {
    /* width: 50%; */
    display: flex;
    padding: 9px;
    /* flex-direction: column; */
}

.io-toc-textarea,
.io-sample-textarea {
    display: flex;
    padding: 9px;
}


.left-col {
    /* width: 20%;
    display: inline-block;
    text-align: right; */
    width: 25%;
    /* display: flex; */
    /* text-align: right; */
    padding-left: 30px;
    padding-bottom: 10px;
    float: left;
    text-align: right;
}

.left-col label {
    font-size: 14px;
    color: #000;
    font-weight: 600;
}

.right-col {
    /* width: 50%;
    display: inline-block;
    margin-left: 25px; */

    width: 60%;
    display: block;
    margin-left: 25px;
}

.right-col select {
    outline: 0;
    border: 1px solid #ababab;
    width: 80%;
    padding: 5px;
    height: 40px;
    color: #000;
    background: var(--light);
    border: 1px solid #7a7a7a;
    border-radius: 4px;
    font-size: 14px;
}
.enqTextarea {
    outline: 0;
    border: 1px solid #7a7a7a;
    width: 80%;
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

.io-rd-form input[type="text"] {
    width: 80%;
    border-radius: 4px;
    border: 1px solid #7a7a7a;
    height: 40px;
    outline: 0;
    color: #000;
    padding-left: 10px;
}
.io-rd-form input[type="email"] {
    width: 80%;
    border-radius: 4px;
    border: 1px solid #7a7a7a;
    height: 40px;
    outline: 0;
    color: #000;
    padding-left: 10px;
}

.toc-image {
    padding-left: 20px;
    justify-content: center;
    padding-top: 20px;
    vertical-align: middle;
}

.io-rd-form ::placeholder {
    font-size: 13px;
}

.button-submit-toc {
    display: block;
    text-align: center;
    width: 100%;
    /* width: 50%; */
    padding-top: 20px;
    padding-bottom: 20px;
}

.button-submit-toc .toc-submit,
.sample-submit {
    text-decoration: none;
    background-color: var(--primary);
    color: var(--light);
    padding: 10px 9px 10px 9px;
    width: 210px;
    border-radius: 4px;
    outline: 0;
    border: none;
    /* display: inline-block; */
}

.button-submit-toc .toc-submit,
.sample-submit:hover {
    color: var(--light);
}


.market-segment {
    font-size: 15px;
    padding-left: 25px;
}

.market-segment h1 {
    color: #000 !important;
    font-size: 18px;
    padding-bottom: 15px;
    text-align: center;
    padding-top: 10px;
}

.rd-main p {
    font-family: "Lato", Helvetica, sans-serif !important;
    padding: 10px 10px 0 20px;
    letter-spacing: 0.03em;
    margin-bottom: 0 !important;
    font-size: 14.5px;
    line-height: 24px;
    color: #000 !important;
    margin: 0;
    text-align: justify;
}

.rd-container-detail ul {
    margin: 0;
}

.rd-main ul {
    list-style: none;
    display: block;
    margin: 10px 0 5px 0;
    padding: 0 0 0 50px;
}

.rd-container-detail ul li {
    font-family: "Lato", Helvetica, sans-serif !important;
    padding: 10px 10px 0 0;
    letter-spacing: 0.03em;
    margin-bottom: 0 !important;
}

.rd-main ul li {
    font-size: 14.5px;
    padding: 5px 10px 5px 0;
    background-position: 3px 6px;
    background-repeat: no-repeat;
    line-height: 24px;
    list-style: disc;
    text-align: justify;
    letter-spacing: 0.03em;
    font-family: "Lato", Helvetica, sans-serif !important;
}

.rd-main ul li {
    color: #000;
}

.rd-main ul li ul {
    list-style: none;
    display: block;
    margin: 10px 0 5px;
    padding: 0 0 0 30px;
}

.rd-main ul li ul li {
    font-size: 14.5px;
    padding: 5px 10px 5px 0;
    background-position: 3px 6px;
    background-repeat: no-repeat;
    line-height: 24px;
    list-style: circle;
    text-align: justify;
    letter-spacing: 0.03em;
    font-family: "Lato", Helvetica, sans-serif !important;
}
.rd-main ul li ul li ul li {
    font-size: 14.5px;
    padding: 5px 10px 5px 0;
    background-position: 3px 6px;
    background-repeat: no-repeat;
    line-height: 24px;
    list-style: square;
    text-align: justify;
    letter-spacing: 0.03em;
    font-family: "Lato", Helvetica, sans-serif !important;
}
.rd-main ul li ul li ul li ul li {
    font-size: 14.5px;
    padding: 5px 10px 5px 0;
    background-position: 3px 6px;
    background-repeat: no-repeat;
    line-height: 24px;
    list-style: disc;
    text-align: justify;
    letter-spacing: 0.03em;
    font-family: "Lato", Helvetica, sans-serif !important;
}

.rd-container-detail ul li {
    font-family: "Lato", Helvetica, sans-serif !important;
    padding: 10px 10px 0 0;
    letter-spacing: 0.03em;
    margin-bottom: 0 !important;
}

.rd-main ul li ul {
    list-style: none;
    display: block;
    margin: 10px 0 5px;
    padding: 0 0 0 30px;
}

#affixBtn {
    display: none;
    background: var(--light);
    width: 100%;
    position: fixed;
    top: 0;
    height: 70px;
    z-index: 9999999;
    padding: 8px 15px;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.2);
}

.io-report-aff-left {
    float: left;
    width: 20%;
    padding: 0 !important;
}

.io-report-aff-mid {
    float: left;
    width: 30%;
    padding: 0 !important;
}

.io-report-aff-right {
    float: right;
}

.io-report-aff-Title {
    color: var(--primary);
    font-size: 20px !important;
    margin: 0px;
    padding: 10px 0px;
    font-weight: 700;
    text-align: center;
    /* font-family: 'Montserrat',sans-serif !important; */
}

.reportTopDetails {
    font-size: 13px;
    padding-left: 0;
    color: #000;
    padding-top: 7px;
}

ul.nv-aff-bottom {
    list-style: none;
    text-align: left;
    display: flex;
    justify-content: space-between;
    margin-top: 8px;
}

ul.nv-aff-bottom li {
    display: inline-block;
    margin-right: 10px;
    text-align: center;
    border-radius: 25px;
}

ul.nv-aff-bottom li a {
    font-size: 13px;
    color: var(--light);
    font-weight: 500;
    padding: 7px 32px;
    display: block;
    text-decoration: none;
    /* width: 198px; */
    text-transform: uppercase;
}

.requestSample {
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;
    /* box-shadow: 0 0 20px #eee; */
    border-radius: 10px;
    display: block;
}

.requestSample {
    background: #d8315b;
}

.requestSample a {
    color: var(--light) !important;
    letter-spacing: 0.5px;
}

.enqbeforeTop {
    background: #0747df;
    font-size: 13px;
    color: var(--light) !important;
    text-decoration: none;
    outline: 0;
    cursor: pointer;
    display: inline-block;
    font-weight: 500;
    text-transform: uppercase;
    transition: all linear 0.25s;
    border-radius: 5px;
}

.enqbeforeTop a {
    color: var(--light) !important;
    letter-spacing: 0.5px;
}

.requestCustomization {
    background: #02691f;
    font-size: 13px;
    color: var(--light) !important;
    text-decoration: none;
    outline: 0;
    cursor: pointer;
    display: inline-block;
    margin-top: 5px;
    font-weight: 500;
    padding: 8px 6px;
    text-transform: uppercase;
    transition: all linear 0.25s;
    border-radius: 5px;
    width: 232px;
    /* box-shadow: 2px 2px 6px 0 #848484; */
    /* position: relative; */
}

.requestCustomization a {
    color: var(--light) !important;
    letter-spacing: 0.5px;
}

.io-sample-btn {
    justify-content: center;
    display: inline-block;
    /* padding-left: 25px; */
    margin-bottom: 10px;
}

.io-sample-btn a {
    color: var(--light);
    background: #dc3545;
    padding: 9px 20px 9px 20px;
    border: 2px solid var(--light);
    border-radius: 5px;
    display: inline-block;
    box-shadow: 2px 3px 5px 0 rgba(232, 76, 61, 0.7);
    z-index: 1000;
    font-size: 14px;
}


@media only screen and (min-width: 320px) and (max-width: 991px) {
    ul.io-rd-list li.active:after {
        display: none;
    }
    .rd-left-industry1 {
        display: none !important;
    }
    .io-toc-name,
    .io-sample-name,
    .io-toc-b-mail,
    .io-toc-com-name,
    .io-toc-country-name,
    .io-toc-cont-no,
    .io-toc-textarea {
        width: 100%;
        display: flex;
        padding: 9px;
        flex-direction: column;
    }

    .left-col {
        width: 100%;
        display: flex;
        /* text-align: right; */
        padding-left: 30px;
        padding-bottom: 10px;
        /* float: left; */
        /* text-align: right; */
    }

    .right-col {
        width: 100%;
        /* display: block; */
        margin-left: 25px;
    }
}

@media only screen and (min-width: 992px) and (max-width: 1200px) {
.rd-table-desc{
    padding-top: 2px;
    width: 165px;
    text-align: left;
    padding-left: 20px
}
.io-license-type select{
    width:144px
}
.tooltips{
position: relative;
}

}

@media only screen and (min-width: 320px) and (max-width: 720px) {

    .io-sample-btn a {
        color: var(--light);
        background: #dc3545;
        padding: 10px 15px 10px 15px;
        border: 2px solid var(--light);
        border-radius: 5px;
        display: inline-block;
        box-shadow: 2px 3px 5px 0 rgba(232, 76, 61, 0.7);
        z-index: 1000;
        font-size: 13px;
    }

    .io-rd-enquire-before a {
        color: var(--light);
        border: 2px solid var(--light);
        box-shadow: 2px 2px 6px 0 #848484;
        padding: 10px 15px 10px 15px;
        background: #19376d;
        border-radius: 5px;
        display: block;
        font-size: 13px;
    }

    .io-license-type-button .buynowbutton {
        background-color: #fb641b;
        padding: 10px 24px 10px 24px;
        border-radius: 5px;
        color: var(--light);
        font-size: 12px;
        margin-right: -44px;
    }
    .io-license-type-button {
        width: 40%;
        text-align: center;
        padding: 4px;
        margin-left: -12px;
    }
    .io-license-type {
        width: 50%;
        background: var(--light);
        text-align: center;
        padding: 4px;
        margin-left: -17px;
    }
    .io-license-type select {
        outline: 0;
        border: 0;
        font-size: 9px;
        line-height: 20px;
        font-weight: 600;
        background: none;
        
    }
}


@media only screen and (min-width: 320px) and (max-width: 1080px) {
    
    .io-report-top-button {
        justify-content: center;
        padding: 5px 0;
    }

    .affix-btn {
        display: none !important;
    }

    .io-report {
        display: none;
    }

    .press-search {
        top: 0;
    }

    .io-sample-btn a {
        color: var(--light);
        background: #dc3545;
        padding: 9px 15px 9px 15px;
        border: 2px solid var(--light);
        border-radius: 5px;
        display: inline-block;
        box-shadow: 2px 3px 5px 0 rgba(232, 76, 61, 0.7);
        z-index: 1000;
        font-size: 14px;
    }

    .report {
        width: 100% !important;
    }

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
    font-size: 13px;
    text-decoration: none;
    color: var(--primary);
    font-weight: 600;
}

.io-rd-connect ul li:last-child {
    border: none;
}


</style>

</head>


<body>
<?php include "lib/top-bar.php";?>

<div class="rd-details-start">
   
<!-- Nav Start --> 
<?php include "lib/nav.php";?>

<div id="affixBtn" style="display: block;" class="affix-btn">
    <div class="io-report-aff-left">
    <a href="index.php">
            <img src="<?=Logo;?>logo.svg" style="height:65px;width:250px;padding:5px" alt="logo">
</a>
        </div>
    <div class="io-report-aff-mid">
        <div class="io-report-aff-Title">Seasonings and Spices Market</div>
           
        </div>
    <div class="io-report-aff-right">
        <ul class="nv-aff-bottom">
           <li class="requestSample">
                <a rel="noopener" href="request-sample.php" class="pulse">Get Free Sample Pages</a>
           </li>
            <li class="enqbeforeTop">
                <a rel="noopener" href="enquire-before-purchase.php">Make an Inquiry</a>
            </li>
           
        </ul>
    </div>
</div>

    <!-- Page Header Start -->
    <div class="container-fluid rd-background" style="padding: 35px;">
        <div class="row">
            <div class="col-12 text-center" style="position: relative;top:-50px ">
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <section class="container">
        <div class="breadcrumb_sec_rd">
            <nav>
               <ul>
                <li>
                  <a href="index.php" title="Home" target="_blank">Home</a>
                </li>
               <li><a href="rd.php" title="Home" target="_blank">Report Store</a></li>
               <li>Seasonings and Spices Market</li>
               </ul>
            </nav>
        </div>
    </section>

    <section class="rd-title-top-desc container f-shadow-down">
        
        <div class="row">
            <div class="col-lg-8">
                <h1>Seasonings and Spices Market Size and Share Analysis by Product (Whole, Ground), End Use (Industrial, Food Service, Retail), Application (Meat & Poultry Products, Snacks & Convenience Food, Soup, Sauces), Nature (Conventional, Organic)- Global Industry Demand Forecast to 2030</h1>
            </div>
       

    <div class="col-lg-4 who-we-are-bottom">
        <div class="col-md-12" style="margin: 0 auto;">
         <div class="row">
             <div class="rd-report-date">
         <div class="col-md-4">
             <figure style="margin:0;padding:5px">
                 <img src="<?=IMG;?>Market.png" draggable="false" width="120" height="150" alt="Report icon">
             </figure>
         </div>
         <div class="col-md-8">
             <div class="rd-table-desc" style="padding-top: 2px">
                 <ul>
                     <li>Report Code: <span>12345</span></li>
                     <li>Published: <span>April 2023</span></li>
                     <li>Available format: <span>PDF</span></li>
                     <li>Pages: <span>120</span></li>
                     <li>Industry: <span>Automotive and Transportation</span></li>
                 </ul>
             </div>
         </div>
     </div>
     
         </div>
        </div>
        </div>

            
   <div class="col-lg-12 pt-3">
    <div class="row">
    <div class="col-lg-8 io-d-flex io-report-top-button" style="/* margin: 0 auto; *//* overflow: hidden; */">
       
        <div class="io-sample-btn">
            <a href="request-sample.php">Request <span style="text-decoration: underline;">FREE</span> Sample Pages</a>
        </div>
        <div class="io-rd-enquire-before">
            <a href="enquire-before-purchase.php">Enquire Before Purchase<svg width="18px" height="18px" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg" style="margin-left: 5px;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z" fill="#fff"></path> </g></svg></a>
        </div>
        
    </div>

    <div class="col-lg-4" style="padding: 0;">
     <form action="checkout.php" method="POST">
        <div class="io-main-buy-btn">
            <div class="io-license-type">
             <select name="choose-license" required>
                <!-- <option>License Type</option> -->
                <option value="single-license">Single User License ($4900)</option>
                <option value="group-license">Group License ($6400)</option>
                <option value="enterprise-license">Enterprise License ($8400)</option>
            </select>
           </div>
           <div class="io-tooltip">
            <span class="tooltips">
                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 100 100"><g><path fill="#19376D" d="M50,12.5c-20.712,0-37.5,16.793-37.5,37.502C12.5,70.712,29.288,87.5,50,87.5 c20.712,0,37.5-16.788,37.5-37.498C87.5,29.293,70.712,12.5,50,12.5z M53.826,70.86c0,0.72-0.584,1.304-1.304,1.304h-5.044 c-0.72,0-1.304-0.583-1.304-1.304V46.642c0-0.72,0.584-1.304,1.304-1.304h5.044c0.72,0,1.304,0.583,1.304,1.304V70.86z M49.969,39.933c-2.47,0-4.518-2.048-4.518-4.579c0-2.53,2.048-4.518,4.518-4.518c2.531,0,4.579,1.987,4.579,4.518 C54.549,37.885,52.5,39.933,49.969,39.933z"></path></g></svg>
            <span class="tooltipstext"> 
                <ul>
                <li><b>Single User License:</b>&nbsp;The report will be delivered in PDF format without printing rights. It is recommended for a single user.</li>
                <li><b>Group License:</b>&nbsp; The report will be delivered in PDF format along with the printing rights. It is recommended for up to five users.</li>
                <li><b>Enterprise License:</b>&nbsp; The report will be delivered in PDF format along with printing rights and detailed Excel sheet. It is recommended for organizations where multiple people would like to access the report from multiple locations. </li>
            </ul>
            </span></span>


           </div>
           <div class="io-license-type-button">
             <button class="buynowbutton" type="submit">Buy Now</button>
           </div>
           
    </div>
    </form>
    </div>
    
</div>
   </div>
   </div>
    </section>
    <section class="our-rd-detail-top container f-shadow-down" >
        <div class="row" style="justify-content:center">
            <div class="col-lg-3 rd-left-side">
                <div class="rd-left-industry">
                 <div class="io-rd-tab">
                       
                    <ul class="io-rd-list f-shadow">
                       <li class="active rd-tab" data-target="tab1">Report Description </li>
                       <li class="rd-tab" data-target="tab2">Table of Contents</li>
                       <li class="rd-tab" data-target="tab3">Market Segmentation </li>
                       <!-- <li class="rd-tab-sample rd-tab" data-target="tab4">Request Free Sample Pages</li> -->
                    </ul>
                 </div> 
                 
                 <div class="rd-left-industry1 io-custom-report">
                  <div class="io-rd-connect-left">
                    <div class="rd-connect-title-left">Customized Report Solution</div>
                    <div class="connect">
                        <ul>
                            <strong style="font-size:13px;padding-top:2px;color:#000">Get a bespoke market intelligence solution</strong>
                            <li><a href=""> Buy report sections that meet your requirements</a></li>
                            <li><a href="">Get the report customized as per your needs</a></li>
                            <li style="list-style: none;">
                            <div class="requestFree">
                            <a href="request-customization.php" class="requestCustomization">Request Customized Report</a>
                            </div>
                        </li>
                            
                        </ul>
                    </div>
                    </div>
                </div>
                

                <div class="io-rd-connect f-shadow">
                                <div class="rd-connect-title">Connect with our sales team</div>
                                <div class="connect" style="background: #fff;">
                                    <ul>
                                        <li style="border-bottom:1px solid #cccbcb">
                                        <div style="text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="25px" width="25px" style="margin-right: 7px;"> 
                                            <path fill="#ff5151" d="M1 11.487V43h48V7H1v4.487zm2 1.566l15.6 12.209L3 38.886V13.053zM3.62 41l16.584-14.483L25 30.27l4.796-3.753L46.38 41H3.62zM47 38.886L31.4 25.261 47 13.052v25.834zM3 9h44v1.513L25 27.73 3 10.513V9z"></path>
                                        </svg></div><div style="text-align: center;"><a href="mailto:enquiry@insightsorb.com">enquiry@insightsorb.com</a></div>
                              </li>
                                        
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
          

                <div class="col-lg-8">
                   
                  <div class="rd-container-detail">
                    <div class="rd-main">
                        
                      <div id="tab1" class="rd-desc rd-block active">
                     <div class="rd-tab1-desc">
                        <!-- <h1>-Report Description-</h1> -->
                      <h2>Market Overview</h2>

                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p style="text-align:center">
                        <img src="https://www.psmarketresearch.com/img/research/Seasonings-Spices-Market.jpg"  alt="" class="io-img-responsive" style="text-align:center;padding:4px 0 4px 0">
                      </p>
                      <!-- <p style="margin-bottom:5px; margin-top: 25px; text-align: center;"> Explore more about this report - <a class="sampleBtn" style="padding:3px;color: var(--light);text-decoration: none!important;font-weight: 400;border-radius: 5px;display:inline-block" href=""> Request free sample pages </a> </p> -->
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <h2>Market Overview</h2>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      
                      <table>
                        <caption>Seasonings and Spices Market Report Coverage</caption>
                        <tbody>
                        <tr>
                        <td class="thead-left" align="center"><strong>Report Attribute</strong></td>
                        <td class="thead-right" align="center"><strong>Details</strong></td>
                        </tr>
                        <tr>
                        <td><p>Historical Years</p></td>
                        <td><p>2017-2022</p></td>
                        </tr> <tr>
                        <td><p>Forecast Years</p></td>
                        <td><p>2023-2030</p></td>
                        </tr> <tr>
                        <td><p>Market Size in 2022</p></td>
                        <td><p>USD 37,290 Million</p></td>
                        </tr> <tr>
                        <td><p>Revenue Forecast in 2030</p></td>
                        <td><p>USD 56,796 Million</p></td>
                        </tr> <tr>
                        <td><p>Growth Rate</p></td>
                        <td><p>5.4% CAGR</p></td>
                        </tr> <tr>
                        <td><p>Report Scope</p></td>
                        <td><p>Market Trends, Drivers, and Restraints; Revenue Estimation and Forecast; Segmentation Analysis; Impact of COVID-19; Companies’ Strategic Developments; Market Share Analysis of Key Players; Company Profiling</p></td>
                        </tr> <tr>
                        <td><p>Segments Covered</p></td>
                        <td><p>By Product; By End Use; By Application; By Region</p></td>
                        </tr> </tbody>
                        </table>
                    
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      
                      <ul>
                        <li>The product lifecycle management market value is set to progress at</li>
                        <li>The product lifecycle management market value is set to progress at</li>
                        <li>The product lifecycle management market value is set to progress at</li>
                        <li>The product lifecycle management market value is set to progress at
                        <ul>
                        <li>The product lifecycle management market value is set to progress at</li>
                        <li>The product lifecycle management market value is set to progress at</li></ul>

                        </li>
                      </ul>
                      
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <ul>
                        <li>The product lifecycle management</li>
                        <li>The product lifecycle management</li>
                       <li>The product lifecycle management
                            <ul>
                                <li>The product lifecycle management</li>
                                <li>The product lifecycle management</li>
                                <li>The product lifecycle management
                                <ul>
                                <li>The product lifecycle management</li>
                                <li>The product lifecycle management</li>
                                <li>The product lifecycle management
                                <ul>
                                <li>The product lifecycle management</li>
                                <li>The product lifecycle management</li>
                                <li>The product lifecycle management
                                    
                                </li></ul>
                                </li>
                            </ul>
                                </li>
                            </ul>
                        </li>

                      </ul>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      <p> The product lifecycle management market value is set to progress at a CAGR of 8.20% during 2022–2030, to reach USD 59,466 million by 2030.</p>
                      
                    
                    
                    </div>
                    <div class="faq-sec">
                        
                        <div class="accordion-main">
                            <div class="faq-Title">Frequently Asked Questions</div>
                        <div class="accordion-header">What was the size of the seasonings and spices market in 2022?<span class="plus-symbol">🞃</span></div>
                        <div class="accordion-body" style="display: none;">
                        <p>The seasonings and spices market size stood at USD 37,290 million in 2022.</p>
                        </div>
                        <div class="accordion-header">What will be the growth rate of the seasonings and spices market during the forecast period?<span class="plus-symbol">🞃</span></div>
                        <div class="accordion-body" style="display: none;">
                        <p>During 2022–2030, the growth rate of the seasonings and spices market will be around 5.4%.</p>
                        </div>
                        <div class="accordion-header">Which is the largest product category in the seasonings and spices market?<span class="plus-symbol">🞃</span></div>
                        <div class="accordion-body" style="display: none;">
                        <p>Whole is the largest product category in the seasonings and spices market.</p>
                        </div>
                        <div class="accordion-header">What are the major drivers for the seasonings and spices market?<span class="plus-symbol">🞃</span></div>
                        <div class="accordion-body" style="display: none;">
                        <p>The major drivers of the seasonings and spices market include the increasing awareness of the medical benefits of spices, the rising demand for ethnic cuisines, and the growing popularity of convenience foods.</p>
                        </div>
                        </div>
                     </div>
                </div>
                    <div id="tab2" class="rd-toc rd-block">
                    
                        <div class="io-rd-toc">
                            <div class="col-md-12">
                                <!-- <h1>-Table of Content-</h1> -->
                                <h3>To request table of contents of this report, please complete the form below:</h3>
                            <div class="row">
                                <div class="col-md-12">
                            
                                <div class="io-rd-form">
                                <form action="#" method="POST" > 
                                    <div class="io-toc-name">
                                        <div class="left-col">
                                <label for="name">Name<span class="astrik-color">*</span> </label></div>
                                <div class="right-col"><input type="text" id="name" name="name" required></div>
                            </div>
                                <div class="io-toc-b-mail">
                                    <div class="left-col">
                                <label for="email">Business Email<span class="astrik-color">*</span> </label></div>
                                <div class="right-col"><input type="email" id="email" name="email" required></div>
                            </div>
                            <div class="io-toc-com-name">
                                <div class="left-col">
                                <label for="company">Company Name<span class="astrik-color">*</span> </label></div>
                                <div class="right-col"> <input type="text" id="company" name="company"  required></div></div>
                                
                            <div class="io-toc-country-name">
                                <div class="left-col">
                                  <label for="country">Country<span class="astrik-color">*</span> </label></div>
                            <div class="right-col">
                                <select name="country" id="country"  required>
                                <?php include 'lib/country.php' ?>            
                                </select>
                            </div></div>
                      <div class="io-toc-cont-no">
                                <div class="left-col">
                            <label for="contact">Contact No<span class="astrik-color">*</span> </label>
                        </div>
                         <div class="right-col">
                         <input type="text" id="contact" name="contact" required></div></div>
                        
                       <div class="io-toc-textarea">
                                 <div class="left-col">
                             <label for="message">Any specific research requirement? </label>
                         </div>
                          <div class="right-col">
                        <textarea name="message" id="message" name="message" cols="3" class="enqTextarea" ></textarea></div></div>
                     
                        </div>
                         </div>
                         <div class="io-note">
                        <p>By clicking the SUBMIT REQUEST below, you also agree to abide by the <a href="" title="Terms & Conditions">Terms and Conditions</a> of the company</p>
                        <p><svg fill="#172d55" width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#172d55"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7759999999999998"></g><g id="SVGRepo_iconCarrier"><path d="M21.406,5.086l-9-4a1,1,0,0,0-.812,0l-9,4A1,1,0,0,0,2,6v.7a18.507,18.507,0,0,0,9.515,16.17,1,1,0,0,0,.97,0A18.507,18.507,0,0,0,22,6.7V6A1,1,0,0,0,21.406,5.086ZM20,6.7a16.507,16.507,0,0,1-8,14.141A16.507,16.507,0,0,1,4,6.7V6.65l8-3.556L20,6.65ZM11,10h2v8H11Zm0-4h2V8H11Z"></path></g></svg>&nbsp;We respect your <a href="" title="Privacy">privacy</a>. Your information will not be shared.</p>
                         </div>
                
                           
                            <div class="button-submit-toc">
                                <button class="toc-submit" title="Submit" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                        </div>
                        </div>
                  </div>
                     <div id="tab3" class="rd-market rd-block">
                        <div class="market-segment">
                            <!-- <h1>-Market Segmentation-</h1> -->
                            <p>The research offers market size of the robotic lawn mower accessories market for the period 2017&ndash;2030.</p>

                             <p><strong>Market Segmentation by Product</strong></p>

                            <ul>
                                <li>Blades/Knives</li>
                                <li>Couplings</li>
                                <li>Connectors</li>
                                <li>Perimeter/Signal Cables</li>
                                <li>Perimeter/Signal Cable Spikes</li>
                                <li>Perimeter/Signal Cable Trackers</li>
                                <li>Robot House</li>
                                <li>Robot Rings</li>
                                <li>Batteries
                                <ul>
                                    <li>Up to 20V</li>
                                    <li>20V to 30V</li>
                                    <li>More than 30V</li>
                                </ul>
                                </li>
                                <li>Wall Hangers</li>
                                <li>Lightning Protectors</li>
                                <li>Others&nbsp;</li>
                            </ul>
                            
                            <p><strong>Market Segmentation by Application</strong></p>
                            
                            <ul>
                                <li>Residential</li>
                                <li>Commercial</li>
                            </ul>
                            
                            <p><strong>Market Segmentation by Sales Channel</strong></p>
                            
                            <ul>
                                <li>Offline</li>
                                <li>Online</li>
                            </ul>
                            
                            <p><strong>Market Segmentation by Region</strong></p>
                            
                            <ul>
                                <li>North America Robotic Lawn Mower Accessories Market
                                <ul>
                                    <li>By product</li>
                                    <li>By application</li>
                                    <li>By sales channel</li>
                                    <li>By country &ndash; U.S. and Canada</li>
                                </ul>
                                </li>
                                <li>Europe Robotic Lawn Mower Accessories Market
                                <ul>
                                    <li>By product</li>
                                    <li>By application</li>
                                    <li>By sales channel</li>
                                    <li>By country &ndash; Germany, U.K., France, Italy, Spain, and Rest of Europe</li>
                                </ul>
                                </li>
                                <li>Asia-Pacific (APAC) Robotic Lawn Mower Accessories Market
                                <ul>
                                    <li>By product</li>
                                    <li>By application</li>
                                    <li>By sales channel</li>
                                    <li>By country &ndash; Japan, China, India, South Korea, Australia, and Rest of APAC</li>
                                </ul>
                                </li>
                                <li>Latin America (LATAM) Robotic Lawn Mower Accessories Market
                                <ul>
                                    <li>By product</li>
                                    <li>By application</li>
                                    <li>By sales channel</li>
                                    <li>By country &ndash; Brazil, Mexico and Rest of LATAM</li>
                                </ul>
                                </li>
                                <li>Middle East and Africa (MEA) Robotic Lawn Mower Accessories Market
                                <ul>
                                    <li>By product</li>
                                    <li>By application</li>
                                    <li>By sales channel</li>
                                    <li>By country &ndash; Saudi Arabia, South Africa, U.A.E., and Rest of MEA</li>
                                </ul>
                                </li>
                            </ul>
                        </div>
                     </div>

                        
                   
                          </div>
                
                         </div>
                         </div>
                         </div>
    </section>

    <section class="io-client-section container-fluid">
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
            <p>Over the past five years, our collaboration with Insights Orb has been marked by trust, with them serving as a valued partner delivering essential market insights to support our extensive portfolio of businesses. We commend their professionalism and the active involvement of their Research & Client Services team.</p>
            <div class="client-name-testi">
                <h5>VP - Corporate Strategy</h5>
                <span>Karl Storz</span>
           </div>   
        </div> 
        </div> 
        <div class="item-io" >
            <div class="testimonial-client f-shadow">   
            <div class="testi-quote">
            <img src="<?=IMG;?>icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>
            <p>The Insights Orb team exhibits exceptional knowledge and showcases excellent project management capabilities, coupled with a commitment to delivering high-quality customer service. Their supportive approach demonstrates a clear understanding of our business objectives.</p>
            <div class="client-name-testi">
                <h5>Marketing Head - Toyota</h5>
                <span>OEM Solutions</span>
           </div>   
        </div> 
        </div> 
        <div class="item-io" >
            <div class="testimonial-client f-shadow">   
            <div class="testi-quote">
                  <img src="img/icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>
            <p>The team displays professionalism and responsiveness, providing us with excellent value for our investment. We are extremely pleased with both the results of the project report and the efficiency of the acquisition process, along with the team's quick responsiveness. The report has fully met our expectations, and we are willing to serve as a reference for Insights Orb .</p>
            <div class="client-name-testi">
                <h5>Strategy Manager - BASF</h5>
                <span>Switzerland</span>
           </div>   
        </div> 
        </div>
         <div class="item-io" >
            <div class="testimonial-client f-shadow"> 
            <div class="testi-quote">
            <img src="<?=IMG;?>icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>  
            <p>Insights Orb delivered a clear and comprehensible report that unveiled numerous opportunities for us. Their profound insights into the regulatory environment of our target market played a pivotal role in securing swift approvals for our initiatives.</p>
            <div class="client-name-testi">
                <h5>Vice President - Strategy & Planning</h5>
                <span>Deloitte, Switzerland</span>
           </div>   
        </div> 
        </div> 
        
        <div class="item-io" >
            <div class="testimonial-client f-shadow"> 
            <div class="testi-quote">
            <img src="<?=IMG;?>icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>  
            <p>We were on the verge of finalizing our investment plan when Insights Orb’s thorough analysis of the ongoing global crisis, along with their consultation, enlightened us that proceeding would have been a mistake. We express our gratitude to Insights Orb for dissuading us from a decision that could have incurred significant losses. In all Insights Orb provided us with the right direction for investment, which helped us gain better ROI on our existing businesses.</p>
            <div class="client-name-testi">
                <h5>Head of Strategy</h5>
                <span>Panasonic</span>
           </div>   
        </div> 
        </div> 
        
        <div class="item-io" >
            <div class="testimonial-client f-shadow"> 
            <div class="testi-quote">
            <img src="<?=IMG;?>icons/rating.png" style="height: 50px;" alt="user-rating">
                </div>  
            <p>Seeking insights into the appeal of a specific market segment, our organization turned to Insights Orb, based on positive past collaborations. The outcomes exceeded expectations! After conveying our objectives, the Insights Orb team crafted and implemented a proposal that precisely addressed our requirements. Their expertise, the analytical quality, and the insightful recommendations left a lasting impression. We are eager to collaborate with them again in the future without hesitation.</p>
            <div class="client-name-testi">
                <h5>Director - Market Insights</h5>
                <span>AbbVie</span>
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
     <?php include 'lib/footer.php' ?>

    
   <!-- JavaScript Libraries -->
   <script src="<?=JS;?>jquery-3.4.1.min.js"></script>
    <script src="<?=JS;?>bootstrap.bundle.min.js"></script>
    <script src="<?=JS;?>main.js"></script>
    
</body>

</html>