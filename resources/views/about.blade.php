@include('header')
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<style>
    /******************************************************************
  Template Name: Manup
  Description: Manup Event HTML Template
  Author: Colorlib
  Author URI: http://colorlib.com
  Version: 1.0
  Created: Colorlib
******************************************************************/

    /*------------------------------------------------------------------
[Table of contents]

1.  Template default CSS
	1.1	Variables
	1.2	Mixins
	1.3	Flexbox
	1.4	Reset
2.  Helper Css
3.  Header Section
4.  Hero Section
5.  Home About Section
6.  Team Member Section
7.  Pricing Section
8.  Latest Blog Section
9.  Contact
10.  Footer Style

-------------------------------------------------------------------*/

    /*----------------------------------------*/

    /* Template default CSS
/*----------------------------------------*/

    html,
    body {
        height: 100%;
        /* font-family: "Work Sans", sans-serif; */
        -webkit-font-smoothing: antialiased;
        font-smoothing: antialiased;
    }

    p {
        font-size: 16px;
        font-family: "Work Sans", sans-serif;
        /* color: #6a6b7c; */
        font-weight: 400;
        line-height: 28px;
        margin: 0 0 15px 0;
    }

    img {
        max-width: 100%;
    }

    input:focus,
    select:focus,
    button:focus,
    textarea:focus {
        outline: none;
    }

    a:hover,
    a:focus {
        text-decoration: none;
        outline: none;
    }

    ul,
    ol {
        padding: 0;
        margin: 0;
    }

    /*---------------------
  Helper CSS
-----------------------*/

    .section-title {
        text-align: center;
        margin-bottom: 52px;
    }

    .section-title h2 {
        font-size: 40px;
        font-weight: 700;
        color: #171822;
        margin-bottom: 10px;
    }

    .section-title p {
        font-size: 18px;
        color: #6a6b7c;
        margin-bottom: 0;
    }

    .set-bg {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }

    .spad {
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .spad-2 {
        padding-top: 50px;
        padding-bottom: 70px;
    }

    .text-white h1,
    .text-white h2,
    .text-white h3,
    .text-white h4,
    .text-white h5,
    .text-white h6,
    .text-white p,
    .text-white span,
    .text-white li,
    .text-white a {
        color: #fff;
    }

    .bg-gradient,
    .bd-text .bd-tag-share .s-share a:hover,
    .bh-text .play-btn,
    .schedule-table-tab .nav-tabs .nav-item .nav-link.active,
    .newslatter-inner .ni-form button,
    .latest-item .li-tag,
    .price-item .price-btn:hover,
    .price-item .pi-price,
    .price-item .tr-tag,
    .schedule-tab .nav-tabs .nav-item .nav-link.active,
    .site-btn {
        background-image: -o-linear-gradient(330deg, #ee8425 0%, #f9488b 100%), -o-linear-gradient(330deg, #ee8425 0%, #f9488b 100%);
        background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);
    }

    /* buttons */

    .primary-btn {
        display: inline-block;
        font-size: 16px;
        font-weight: 600;
        padding: 12px 40px;
        color: #ffffff;
        text-align: center;
        border-radius: 50px;
        background-image: -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b)), -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b));
        background-image: -o-linear-gradient(left, #ee8425 0%, #f9488b 100%), -o-linear-gradient(left, #ee8425 0%, #f9488b 100%);
        background-image: linear-gradient(to right, #ee8425 0%, #f9488b 100%), linear-gradient(to right, #ee8425 0%, #f9488b 100%);
    }

    .site-btn {
        font-size: 16px;
        color: #ffffff;
        font-weight: 600;
        border: none;
        padding: 10px 40px 12px;
        border-radius: 50px;
    }

    /* Preloder */

    #preloder {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999999;
        background: #000;
    }

    .loader {
        width: 40px;
        height: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -13px;
        margin-left: -13px;
        border-radius: 60px;
        animation: loader 0.8s linear infinite;
        -webkit-animation: loader 0.8s linear infinite;
    }

    @keyframes loader {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            border: 4px solid #f44336;
            border-left-color: transparent;
        }

        50% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            border: 4px solid #673ab7;
            border-left-color: transparent;
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            border: 4px solid #f44336;
            border-left-color: transparent;
        }
    }

    @-webkit-keyframes loader {
        0% {
            -webkit-transform: rotate(0deg);
            border: 4px solid #f44336;
            border-left-color: transparent;
        }

        50% {
            -webkit-transform: rotate(180deg);
            border: 4px solid #673ab7;
            border-left-color: transparent;
        }

        100% {
            -webkit-transform: rotate(360deg);
            border: 4px solid #f44336;
            border-left-color: transparent;
        }
    }



    /*---------------------
  Conter
-----------------------*/

    .counter-section {
        padding: 40px 0;
    }

    .counter-section .counter-text span {
        font-size: 16px;
        color: #ffffff;
    }

    .counter-section .counter-text h3 {
        color: #ffffff;
        font-weight: 700;
        line-height: 38px;
        margin-top: 10px;
    }

    .counter-section .cd-timer {
        text-align: right;
    }

    .counter-section .cd-timer .cd-item {
        display: inline-block;
        text-align: center;
        margin-left: 35px;
        height: 120px;
        width: 120px;
        padding-top: 32px;
        position: relative;
    }

    .counter-section .cd-timer .cd-item:after {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #ffffff;
        content: "";
        opacity: 0.1;
        border-radius: 4px;
    }

    .counter-section .cd-timer .cd-item:first-child {
        margin-left: 0;
    }

    .counter-section .cd-timer .cd-item span {
        font-size: 60px;
        color: #ffffff;
        font-weight: 600;
        line-height: 30px;
    }

    .counter-section .cd-timer .cd-item p {
        font-size: 18px;
        color: #ffffff;
        margin-bottom: 0;
        line-height: 30px;
    }

    /*---------------------
  Home About Section
-----------------------*/

    .home-about-section {
        /* padding-bottom: 90px; */
        margin-top: 90px;
    }

    .ha-pic {
        -webkit-box-shadow: 0px 0px 30px rgba(11, 12, 48, 0.15);
        box-shadow: 0px 0px 30px rgba(11, 12, 48, 0.15);
        margin-right: 30px;
        height: 400px;
    }

    .ha-pic img {
        min-width: 100%;
        border-radius: 2px;
        height: 100%;
        object-fit: fill;
    }
/* 
    .ha-text {
        padding-top: 74px;
    } */

    .ha-text h2 {
        color: #171822;
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 32px;
    }

    .ha-text p {
        margin-bottom: 21px;
    }

    .ha-text ul {
        margin-bottom: 27px;
    }

    .ha-text ul li {
        list-style: none;
        font-size: 16px;
        line-height: 30px;
        color: #6a6b7c;
    }

    .ha-text ul li span {
        color: #f44949;
    }

    .ha-text .ha-btn {
        font-size: 16px;
        color: #171822;
        font-weight: 600;
        position: relative;
    }

    .ha-text .ha-btn:before {
        position: absolute;
        left: 0;
        bottom: -6px;
        height: 2px;
        width: 100%;
        background: #f44949;
        content: "";
    }

    /*---------------------
  Member Item
-----------------------*/

    .team-member-section {
        overflow: hidden;
    }

    .member-item {
        width: 100%;
        float: left;
        height: 420px;
        position: relative;
        overflow: hidden;
    }

    .member-item:hover .mi-social {
        top: 0;
    }

    .member-item:hover .mi-text {
        left: 20px;
    }

    .member-item .mi-social {
        text-align: center;
        position: relative;
        top: -60px;
        -webkit-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }

    .member-item .mi-social .mi-social-inner {
        display: inline-block;
        padding: 10px 23px 8px;
        border-radius: 0 0 4px 4px;
    }

    .member-item .mi-social .mi-social-inner a {
        display: inline-block;
        font-size: 18px;
        color: #ffffff;
        margin-right: 10px;
    }

    .member-item .mi-social .mi-social-inner a:last-child {
        margin-right: 0;
    }

    .member-item .mi-text {
        background: #ffffff;
        padding: 16px 0 18px 25px;
        position: absolute;
        left: -500px;
        bottom: 20px;
        width: calc(100% - 40px);
        -webkit-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }

    .member-item .mi-text h5 {
        font-size: 20px;
        color: #171822;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .member-item .mi-text span {
        font-size: 16px;
        color: #f44949;
        display: block;
    }

    /*---------------------
  Schedule Section
-----------------------*/

    .schedule-section {
        padding-bottom: 60px;
    }

    .schedule-tab .nav-tabs {
        border: none;
        border-radius: 2px;
        margin-bottom: 60px;
        -webkit-box-shadow: 3px 10px 30px rgba(74, 74, 77, 0.15);
        box-shadow: 3px 10px 30px rgba(74, 74, 77, 0.15);
    }

    .schedule-tab .nav-tabs .nav-item {
        border-right: 1px solid #e7e7e8;
        width: 20%;
        text-align: center;
    }

    .schedule-tab .nav-tabs .nav-item:last-child {
        border-right: none;
    }

    .schedule-tab .nav-tabs .nav-item .nav-link {
        padding: 14px 0 13px 0;
        border: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .schedule-tab .nav-tabs .nav-item .nav-link.active {
        border-radius: 2px;
        border-color: #e7e7e8;
    }

    .schedule-tab .nav-tabs .nav-item .nav-link.active h5 {
        color: #ffffff;
    }

    .schedule-tab .nav-tabs .nav-item .nav-link.active p {
        color: #ffffff;
    }

    .schedule-tab .nav-tabs .nav-item .nav-link h5 {
        color: #171822;
        font-weight: 600;
    }

    .schedule-tab .nav-tabs .nav-item .nav-link p {
        margin-bottom: 0;
    }

    .schedule-tab .st-content {
        border: 1px solid #ebebeb;
        border-radius: 2px;
        margin-bottom: 40px;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    .schedule-tab .st-content:hover {
        -webkit-box-shadow: 3px 12px 30px rgba(23, 24, 34, 0.05);
        box-shadow: 3px 12px 30px rgba(23, 24, 34, 0.05);
        border: 1px solid transparent;
    }

    .schedule-tab .st-content .sc-pic {
        text-align: center;
        padding: 30px 0;
    }

    .schedule-tab .st-content .sc-pic img {
        height: 120px;
        width: 120px;
        border-radius: 50%;
    }

    .schedule-tab .st-content .sc-text {
        padding: 58px 0;
    }

    .schedule-tab .st-content .sc-text h4 {
        color: #171822;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .schedule-tab .st-content .sc-text ul li {
        list-style: none;
        display: inline-block;
        font-size: 16px;
        color: #6a6b7c;
        margin-right: 25px;
        position: relative;
    }

    .schedule-tab .st-content .sc-text ul li:last-child:after {
        display: none;
    }

    .schedule-tab .st-content .sc-text ul li:after {
        position: absolute;
        right: -18px;
        top: 0;
        content: "/";
    }

    .schedule-tab .st-content .sc-text ul li i {
        color: #f44949;
        font-size: 14px;
    }

    .schedule-tab .st-content .sc-widget {
        padding: 58px 0;
    }

    .schedule-tab .st-content .sc-widget li {
        list-style: none;
        font-size: 16px;
        color: #6a6b7c;
        line-height: 32px;
        position: relative;
        padding-left: 22px;
    }

    .schedule-tab .st-content .sc-widget li i {
        color: #f44949;
        position: absolute;
        left: 0;
        top: 7px;
    }

    /*---------------------
  Pricing Section
-----------------------*/

    .pricing-section {
        padding-top: 90px;
        padding-bottom: 80px;
    }

    .pricing-section .section-title {
        margin-bottom: 88px;
    }

    .pricing-section .section-title h2 {
        color: #ffffff;
    }

    .pricing-section .section-title p {
        color: #a0a1b5;
    }

    .price-item {
        background: #ffffff;
        text-align: center;
        padding-top: 34px;
        padding-bottom: 18px;
        position: relative;
        border-radius: 2px;
        margin-bottom: 40px;
        height: 600px;
    }

    .price-item.top-rated {
        margin-top: -36px;
    }

    .price-item .tr-tag {
        width: 28px;
        height: 50px;
        line-height: 38px;
        -webkit-clip-path: polygon(100% 0%, 100% 100%, 50% 65%, 0% 100%, 0% 0%);
        clip-path: polygon(100% 0%, 100% 100%, 50% 65%, 0% 100%, 0% 0%);
        position: absolute;
        right: 26px;
        top: 0;
    }

    .price-item .tr-tag i {
        color: #ffffff;
    }

    .price-item h4 {
        color: #171822;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 26px;
    }

    .price-item .pi-price {
        padding-top: 16px;
        padding-bottom: 14px;
        margin-bottom: 38px;
    }

    .price-item .pi-price h2 {
        font-size: 60px;
        color: #ffffff;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        display: inline-block;
        position: relative;
        padding-left: 20px;
    }

    .price-item .pi-price h2 span {
        font-size: 30px;
        position: absolute;
        left: 0px;
        top: 9px;
    }

    .price-item ul li {
        list-style: none;
        font-size: 16px;
        color: #6a6b7c;
        line-height: 38px;
    }

    .price-item .price-btn {
        font-size: 16px;
        color: #171822;
        font-weight: 600;
        display: inline-block;
        background: #ffffff;
        padding: 10px 85px;
        border-radius: 50px;
        -webkit-box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
        position: relative;
        bottom: -39px;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    .price-item .price-btn:hover {
        color: #ffffff;
    }

    .price-item .price-btn:hover span {
        color: #ffffff;
    }

    .price-item .price-btn span {
        color: #f44949;
        position: relative;
        top: 3px;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    /*---------------------
  Latest Blog
-----------------------*/

    .latest-blog {
        background: #f4f6f8;
        padding-bottom: 160px;
    }

    .latest-item {
        height: 255px;
        position: relative;
        margin-bottom: 40px;
        margin-left: 15px;
        border-radius: 2px;
        -webkit-box-shadow: 0px 0px 30px rgba(79, 84, 139, 0.15);
        box-shadow: 0px 0px 30px rgba(79, 84, 139, 0.15);
    }

    .latest-item.large-item {
        height: 550px;
        margin-right: 15px;
        margin-left: 0;
    }

    .latest-item.large-item .li-tag {
        left: 40px;
        top: 40px;
    }

    .latest-item.large-item .li-text {
        padding: 0 40px;
        bottom: 35px;
    }

    .latest-item.large-item .li-text h4 {
        margin-bottom: 17px;
    }

    .latest-item.large-item .li-text h4 a {
        color: #ffffff;
        font-weight: 600;
        line-height: 36px;
    }

    .latest-item.large-item .li-text span {
        font-size: 16px;
        color: #ffffff;
    }

    .latest-item.large-item .li-text span i {
        color: #f44949;
    }

    .latest-item .li-tag {
        font-size: 14px;
        color: #ffffff;
        display: inline-block;
        padding: 5px 18px;
        border-radius: 2px;
        position: absolute;
        left: 30px;
        top: 30px;
    }

    .latest-item .li-text {
        position: absolute;
        left: 0;
        bottom: 26px;
        width: 100%;
        padding: 0 30px;
    }

    .latest-item .li-text h5 {
        margin-bottom: 5px;
    }

    .latest-item .li-text h5 a {
        display: block;
        color: #ffffff;
        font-weight: 600;
        line-height: 30px;
    }

    .latest-item .li-text span {
        font-size: 14px;
        color: #ffffff;
    }

    .latest-item .li-text span i {
        color: #f44949;
    }

    /*---------------------
  Newslatter Section
-----------------------*/
    .newslatter-section {
        margin-top: 150px;
    }

    .newslatter-section.about-newslatter .newslatter-inner {
        margin-top: 0;
    }

    .newslatter-inner {
        padding: 60px 70px 48px;
        overflow: hidden;
        border-radius: 2px;
        margin-top: -100px;
    }

    .newslatter-inner .ni-text {
        float: left;
    }

    .newslatter-inner .ni-text h3 {
        color: #ffffff;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .newslatter-inner .ni-text p {
        color: #ffffff;
        margin-bottom: 0;
    }

    .newslatter-inner .ni-form {
        width: 400px;
        position: relative;
        float: right;
        margin-top: 12px;
    }

    .newslatter-inner .ni-form input {
        width: 100%;
        height: 50px;
        font-size: 16px;
        color: #a0a1b5;
        padding-left: 20px;
        background: #ffffff;
        border-radius: 50px;
        border: none;
        padding-right: 140px;
    }

    .newslatter-inner .ni-form input::-webkit-input-placeholder {
        color: #a0a1b5;
    }

    .newslatter-inner .ni-form input::-moz-placeholder {
        color: #a0a1b5;
    }

    .newslatter-inner .ni-form input:-ms-input-placeholder {
        color: #a0a1b5;
    }

    .newslatter-inner .ni-form input::-ms-input-placeholder {
        color: #a0a1b5;
    }

    .newslatter-inner .ni-form input::placeholder {
        color: #a0a1b5;
    }

    .newslatter-inner .ni-form button {
        width: 128px;
        height: 40px;
        text-align: center;
        border: none;
        color: #ffffff;
        font-size: 16px;
        font-weight: 600;
        border-radius: 50px;
        position: absolute;
        right: 5px;
        top: 5px;
    }

    /*---------------------
  Home Contact 
-----------------------*/

    .contact-section .section-title {
        text-align: left;
        margin-bottom: 40px;
    }

    .cs-text .ct-address span {
        font-size: 16px;
        color: #6a6b7c;
    }

    .cs-text .ct-address p {
        font-size: 18px;
        color: #171822;
        line-height: 30px;
        margin-top: 8px;
    }

    .cs-text ul {
        margin-bottom: 22px;
    }

    .cs-text ul li {
        font-size: 18px;
        color: #171822;
        line-height: 36px;
        list-style-type: none;
        display: inline-block;
        margin-right: 42px;
    }

    .cs-text ul li:last-child {
        margin-right: 0;
    }

    .cs-text ul li span {
        font-size: 16px;
        color: #6a6b7c;
        display: block;
    }

    .cs-text .ct-links span {
        font-size: 16px;
        color: #6a6b7c;
    }

    .cs-text .ct-links p {
        font-size: 18px;
        color: #171822;
        line-height: 30px;
        margin-top: 8px;
    }

    .cs-map {
        height: 400px;
        -webkit-box-shadow: 0px 12px 30px rgba(11, 12, 48, 0.15);
        box-shadow: 0px 12px 30px rgba(11, 12, 48, 0.15);
    }

    .cs-map iframe {
        width: 100%;
    }

    /*---------------------
  Footer
-----------------------*/

    .footer-section {
        background: #171822;
        padding-top: 50px;
        padding-bottom: 60px;
    }

    .partner-logo {
        padding-bottom: 50px;
        border-bottom: 1px solid #2f3039;
    }

    .partner-logo .pl-table {
        display: inline-block;
        display: table;
    }

    .partner-logo .pl-table .pl-tablecell {
        display: table-cell;
        vertical-align: middle;
        height: 41px;
    }

    .footer-text {
        text-align: center;
        padding-top: 60px;
    }

    .footer-text .ft-logo {
        margin-bottom: 20px;
    }

    .footer-text .ft-logo a {
        display: inline-block;
    }

    .footer-text ul {
        margin-bottom: 18px;
    }

    .footer-text ul li {
        list-style: none;
        display: inline-block;
        margin-right: 52px;
    }

    .footer-text ul li:last-child {
        margin-right: 0;
    }

    .footer-text ul li a {
        font-size: 18px;
        color: #a0a1b5;
        display: inline-block;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    .footer-text ul li a:hover {
        color: #f44949;
    }

    .footer-text .copyright-text {
        font-size: 14px;
        color: #a0a1b5;
        margin-bottom: 28px;
    }

    .footer-text .copyright-text i {
        color: #f44949;
    }

    .footer-text .copyright-text a {
        color: #a0a1b5;
    }

    .footer-text .copyright-text a:hover {
        color: #f44949;
    }

    .footer-text .ft-social a {
        display: inline-block;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        font-size: 16px;
        color: #a3a3ae;
        border: 1px solid #45464e;
        border-radius: 50%;
        margin-right: 15px;
    }

    .footer-text .ft-social a:last-child {
        margin-right: 0;
    }

    /* ----------------------------------- Other Pages Styles ------------------------------- */

    /*---------------------
  Breadcrumb
-----------------------*/

    .breadcrumb-section {
        padding: 75px 0 75px;
    }

    .breadcrumb-text {
        text-align: center;
    }

    .breadcrumb-text h2 {
        font-size: 40px;
        color: #171822;
        font-weight: 600;
        margin-bottom: 14px;
    }

    .breadcrumb-text .bt-option a {
        font-size: 18px;
        color: #6a6b7c;
        display: inline-block;
        margin-right: 25px;
        position: relative;
    }

    .breadcrumb-text .bt-option a:after {
        position: absolute;
        right: -17px;
        top: 2px;
        content: "";
        font-family: "FontAwesome";
    }

    .breadcrumb-text .bt-option span {
        display: inline-block;
        color: #a0a1b5;
    }

    /*---------------------
  About Section
-----------------------*/

    .about-section {
        padding-top: 0;
        padding-bottom: 90px;
    }

    .about-section .section-title {
        text-align: left;
    }

    .about-section .section-title h2 {
        margin-bottom: 20px;
    }

    .about-section .section-title p {
        font-size: 16px;
    }

    .about-section .section-title p.f-para {
        margin-bottom: 20px;
    }

    .about-pic {
        -webkit-box-shadow: 0px 0px 30px rgba(11, 12, 48, 0.15);
        box-shadow: 0px 0px 30px rgba(11, 12, 48, 0.15);
    }

    .about-pic img {
        min-width: 100%;
    }

    .about-text {
        padding-top: 20px;
    }

    .about-text h3 {
        color: #171822;
        font-weight: 600;
        margin-bottom: 25px;
    }

    .about-text p {
        margin-bottom: 20px;
    }

    .about-text ul li {
        font-size: 16px;
        color: #6a6b7c;
        line-height: 30px;
        list-style: none;
    }

    .about-text ul li span {
        color: #f44949;
    }

    /*---------------------
  Story Section
-----------------------*/

    .story-section {
        padding-bottom: 30px;
    }

    .story-section .section-title {
        text-align: left;
    }

    .story-section .section-title h2 {
        margin-bottom: 0;
    }

    .story-left {
        padding-right: 40px;
    }

    .story-right {
        padding-left: 40px;
    }

    .story-item {
        margin-bottom: 28px;
    }

    .story-item h2 {
        color: #f44949;
        font-weight: 600;
        float: left;
        margin-right: 30px;
        line-height: 42px;
    }

    .story-item .si-text {
        overflow: hidden;
    }

    .story-item .si-text h4 {
        color: #171822;
        font-weight: 600;
        line-height: 36px;
        margin-bottom: 14px;
    }

    /*---------------------
  Testimonial Section
-----------------------*/

    .testimonial-section {
        padding-bottom: 40px;
        overflow: hidden;
    }

    .testimonial-section .section-title {
        margin-bottom: 26px;
    }

    .testimonial-slider .col-lg-6 {
        max-width: 100%;
    }

    .testimonial-slider.owl-carousel .owl-stage-outer {
        padding-bottom: 60px;
        padding-top: 30px;
    }

    .testimonial-slider.owl-carousel .owl-nav button {
        height: 50px;
        width: 50px;
        text-align: center;
        line-height: 50px;
        font-size: 30px;
        color: #171822;
        background: #f4f6f8;
        border-radius: 50%;
        position: absolute;
        left: -66px;
        top: 50%;
        -webkit-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        transform: translateY(-40px);
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    .testimonial-slider.owl-carousel .owl-nav button:hover {
        background: -webkit-gradient(linear, left top, right top, from(#ee8425), to(#f9488b));
        background: -o-linear-gradient(left, #ee8425, #f9488b);
        background: linear-gradient(to right, #ee8425, #f9488b);
        color: #ffffff;
    }

    .testimonial-slider.owl-carousel .owl-nav button.owl-next {
        left: auto;
        right: -66px;
    }

    .testimonial-item {
        background: #ffffff;
        -webkit-box-shadow: 0px 6px 20px rgba(11, 12, 48, 0.15);
        box-shadow: 0px 6px 20px rgba(11, 12, 48, 0.15);
        border-radius: 4px;
        position: relative;
        padding: 40px 40px 15px 40px;
    }

    .testimonial-item .quote-pic {
        position: absolute;
        right: 50px;
        top: 50px;
    }

    .testimonial-item .ti-author {
        overflow: hidden;
        margin-bottom: 22px;
    }

    .testimonial-item .ti-author .ta-pic {
        float: left;
        margin-right: 20px;
    }

    .testimonial-item .ti-author .ta-pic img {
        height: 76px;
        width: 76px;
        border-radius: 50%;
    }

    .testimonial-item .ti-author .ta-text {
        overflow: hidden;
        padding-top: 12px;
    }

    .testimonial-item .ti-author .ta-text h5 {
        font-size: 20px;
        color: #171822;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .testimonial-item .ti-author .ta-text span {
        display: block;
        color: #f44949;
    }

    .testimonial-item p {
        font-size: 20px;
        color: #171822;
        line-height: 32px;
        font-weight: 500;
    }

    /*---------------------
  Speaker Section
-----------------------*/

    .speaker-section {
        padding-top: 0;
    }

    .speaker-item {
        margin-bottom: 50px;
    }

    .speaker-item .si-pic img {
        min-width: 100%;
        border-radius: 2px;
    }

    .speaker-item .si-text .si-title {
        margin-bottom: 28px;
    }

    .speaker-item .si-text .si-title h4 {
        color: #171822;
        font-weight: 600;
        margin-bottom: 13px;
    }

    .speaker-item .si-text .si-title span {
        color: #f44949;
        font-size: 16px;
        display: block;
    }

    .speaker-item .si-text .si-social {
        margin-bottom: 24px;
    }

    .speaker-item .si-text .si-social a {
        display: inline-block;
        font-size: 16px;
        color: #171822;
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 40px;
        background: #ebebeb;
        border-radius: 50%;
        margin-right: 5px;
    }

    .speaker-item .si-text .si-social a:hover {
        background: -o-linear-gradient(330deg, #ee8425, #f9488b);
        background: linear-gradient(120deg, #ee8425, #f9488b);
        color: #ffffff;
    }

    .speaker-item .si-text p {
        color: #707070;
        line-height: 26px;
    }

    .load-more {
        text-align: center;
        padding-top: 10px;
    }

    .load-more .primary-btn {
        padding: 12px 45px;
    }

    /*------------------------
  Schedule Table Section
-------------------------*/

    .schedule-table-section {
        padding-top: 0;
    }

    .schedule-table-tab .nav-tabs {
        border: none;
        border-radius: 4px;
        margin-bottom: 50px;
        -webkit-box-shadow: 3px 10px 30px rgba(74, 74, 77, 0.15);
        box-shadow: 3px 10px 30px rgba(74, 74, 77, 0.15);
    }

    .schedule-table-tab .nav-tabs .nav-item {
        border-right: 1px solid #e7e7e8;
        width: 20%;
        text-align: center;
    }

    .schedule-table-tab .nav-tabs .nav-item:last-child {
        border-right: none;
    }

    .schedule-table-tab .nav-tabs .nav-item .nav-link {
        padding: 22px 0;
        border: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
        color: #171822;
    }

    .schedule-table-tab .nav-tabs .nav-item .nav-link.active {
        border-color: #e7e7e8;
        color: #ffffff;
    }

    .schedule-table-tab .schedule-table-content table {
        width: 100%;
        text-align: center;
        border: 1px solid #e1e1e1;
    }

    .schedule-table-tab .schedule-table-content table thead {
        border-bottom: 1px solid #e5e5e5;
    }

    .schedule-table-tab .schedule-table-content table thead tr th {
        border-right: 1px solid #e5e5e5;
        padding: 24px 0 26px;
    }

    .schedule-table-tab .schedule-table-content table thead tr th strong {
        font-size: 24px;
        color: #171822;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .schedule-table-tab .schedule-table-content table thead tr th span {
        color: #f5523b;
        font-size: 16px;
        display: block;
        font-weight: 400;
    }

    .schedule-table-tab .schedule-table-content table tbody tr {
        border-bottom: 1px solid #e5e5e5;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td {
        border-right: 1px solid #e5e5e5;
        width: 260px;
        height: 134px;
        padding: 37px 0 36px;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td h5 {
        color: #171822;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td p {
        color: #171822;
        margin-bottom: 0;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td p span {
        color: #a0a1b5;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td.event-time {
        width: 140px;
        color: #f44949;
        font-size: 24px;
        font-weight: 600;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td.break h5 {
        margin-bottom: 0;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td.hover-bg:hover {
        background: -o-linear-gradient(330deg, #ee8425, #f9488b);
        background: linear-gradient(120deg, #ee8425, #f9488b);
    }

    .schedule-table-tab .schedule-table-content table tbody tr td.hover-bg:hover h5 {
        color: #ffffff;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td.hover-bg:hover p {
        color: #ffffff;
    }

    .schedule-table-tab .schedule-table-content table tbody tr td.hover-bg:hover p span {
        color: #ffffff;
    }

    /*---------------------
  Blog
-----------------------*/

    .blog-section {
        padding-top: 0;
    }

    .blog-item {
        height: 277px;
        position: relative;
        border-radius: 10px;
        margin-bottom: 30px;
        -webkit-box-shadow: 0px 0px 30px rgba(11, 12, 48, 0.15);
        box-shadow: 0px 0px 30px rgba(11, 12, 48, 0.15);
    }

    .blog-item .bi-tag {
        font-size: 12px;
        font-weight: 600;
        color: #ffffff;
        display: inline-block;
        padding: 3px 20px 5px;
        border-radius: 2px;
        position: absolute;
        left: 20px;
        top: 20px;
    }

    .blog-item.large-item {
        height: 575px;
    }

    .blog-item.large-item .bi-tag {
        left: 30px;
        top: 30px;
    }

    .blog-item.large-item .bi-text {
        padding: 0 30px;
        bottom: 28px;
    }

    .blog-item .bi-text {
        position: absolute;
        left: 0;
        bottom: 18px;
        width: 100%;
        padding: 0 20px;
    }

    .blog-item .bi-text h5 {
        margin-bottom: 10px;
    }

    .blog-item .bi-text h5 a {
        color: #ffffff;
        line-height: 24px;
        font-weight: 600;
        display: block;
    }

    .blog-item .bi-text h3 {
        margin-bottom: 15px;
    }

    .blog-item .bi-text h3 a {
        font-size: 28px;
        color: #ffffff;
        font-weight: 600;
        line-height: 36px;
        display: block;
    }

    .blog-item .bi-text span {
        font-size: 14px;
        color: #ffffff;
        display: block;
    }

    .blog-item .bi-text span i {
        color: #f44949;
    }

    .load-more.blog-more {
        padding-top: 20px;
    }

    /*---------------------
  Blog Hero Section
-----------------------*/

    .blog-hero-section {
        padding: 200px 0;
    }

    .bh-text {
        text-align: center;
    }

    .bh-text .play-btn {
        height: 70px;
        width: 70px;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
        line-height: 79px;
    }

    .bh-text .play-btn i {
        color: #ffffff;
        font-size: 28px;
        margin-left: 6px;
    }

    .bh-text h2 {
        color: #ffffff;
        font-size: 60px;
        font-weight: 700;
        margin-top: 34px;
        margin-bottom: 14px;
    }

    .bh-text ul li {
        font-size: 14px;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 2px;
        list-style: none;
        display: inline-block;
        margin-right: 45px;
        position: relative;
    }

    .bh-text ul li:after {
        position: absolute;
        right: -22px;
        top: 4px;
        height: 14px;
        width: 1px;
        background: #6e6e6e;
        content: "";
    }

    .bh-text ul li:last-child {
        margin-right: 0;
    }

    .bh-text ul li:last-child:after {
        display: none;
    }

    .bh-text ul li span {
        font-size: 16px;
        text-transform: capitalize;
    }

    .bh-text ul li span strong {
        font-weight: 600;
    }

    /*---------------------
  Blog Details Section
-----------------------*/

    .blog-details-section {
        padding-top: 70px;
    }

    .bd-text .bd-title {
        margin-bottom: 28px;
    }

    .bd-text .bd-quote {
        position: relative;
        padding-left: 32px;
        margin-bottom: 36px;
    }

    .bd-text .bd-quote:before {
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background: #f44949;
        content: "";
    }

    .bd-text .bd-quote p {
        font-size: 18px;
        color: #171822;
        font-weight: 500;
        line-height: 30px;
    }

    .bd-text .bd-quote span {
        font-size: 14px;
        color: #f44949;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .bd-text .bd-quote img {
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .bd-text .bd-more-text {
        margin-bottom: 32px;
    }

    .bd-text .bd-more-text.second-text {
        margin-bottom: 56px;
    }

    .bd-text .bd-more-text h4 {
        color: #171822;
        font-weight: 600;
        margin-bottom: 22px;
    }

    .bd-text .bd-more-pic {
        margin-bottom: 36px;
    }

    .bd-text .bd-more-pic img {
        min-width: 100%;
        border-radius: 2px;
    }

    .bd-text .bd-tag-share {
        overflow: hidden;
        border-top: 1px solid #e5e5e5;
        padding-top: 20px;
    }

    .bd-text .bd-tag-share .tag {
        float: left;
        margin-top: 7px;
    }

    .bd-text .bd-tag-share .tag a {
        display: inline-block;
        font-size: 14px;
        background: #ebebeb;
        color: #6a6b7c;
        padding: 2px 17px 4px;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        border-radius: 2px;
        margin-right: 6px;
        margin-bottom: 5px;
    }

    .bd-text .bd-tag-share .tag a:hover {
        background: #f44949;
        color: #ffffff;
    }

    .bd-text .bd-tag-share .s-share {
        float: right;
    }

    .bd-text .bd-tag-share .s-share span {
        display: inline-block;
        color: #171822;
        font-size: 16px;
        margin-right: 12px;
    }

    .bd-text .bd-tag-share .s-share a {
        display: inline-block;
        font-size: 16px;
        color: #171822;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        background: #ebebeb;
        margin-left: 11px;
        border-radius: 50%;
    }

    .bd-text .bd-tag-share .s-share a:hover {
        color: #ffffff;
    }

    /*---------------------
  Comment Section
-----------------------*/

    .comment-section h3 {
        color: #171822;
        font-weight: 600;
    }

    .comment-form input {
        width: 100%;
        height: 46px;
        background: #f4f6f8;
        padding-left: 20px;
        padding-right: 5px;
        border: none;
        margin-bottom: 30px;
        border-radius: 2px;
        border: 1px solid transparent;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    .comment-form input::-webkit-input-placeholder {
        color: #a0a1b5;
    }

    .comment-form input::-moz-placeholder {
        color: #a0a1b5;
    }

    .comment-form input:-ms-input-placeholder {
        color: #a0a1b5;
    }

    .comment-form input::-ms-input-placeholder {
        color: #a0a1b5;
    }

    .comment-form input::placeholder {
        color: #a0a1b5;
    }

    .comment-form input:focus {
        border: 1px solid #f44949;
        color: #171822;
    }

    .comment-form textarea {
        width: 100%;
        height: 120px;
        background: #f4f6f8;
        padding-left: 20px;
        border: none;
        padding-top: 12px;
        padding-right: 5px;
        margin-bottom: 32px;
        border-radius: 2px;
        border: 1px solid transparent;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        resize: none;
    }

    .comment-form textarea::-webkit-input-placeholder {
        color: #a0a1b5;
    }

    .comment-form textarea::-moz-placeholder {
        color: #a0a1b5;
    }

    .comment-form textarea:-ms-input-placeholder {
        color: #a0a1b5;
    }

    .comment-form textarea::-ms-input-placeholder {
        color: #a0a1b5;
    }

    .comment-form textarea::placeholder {
        color: #a0a1b5;
    }

    .comment-form textarea:focus {
        border: 1px solid #f44949;
        color: #171822;
    }

    /*---------------------
  Related Post Section
-----------------------*/

    .related-post-section {
        background: #f4f6f8;
        padding-bottom: 70px;
        padding-top: 90px;
    }

    .related-post-section .blog-item {
        height: 350px;
    }

    .related-post-section .blog-item .bi-tag {
        left: 30px;
        top: 30px;
    }

    .related-post-section .blog-item .bi-text {
        padding: 0 30px;
        bottom: 28px;
    }

    .related-post-section .blog-item .bi-text h5 {
        margin-bottom: 10px;
    }

    .related-post-section .blog-item .bi-text h5 a {
        font-size: 20px;
        line-height: 30px;
    }

    /*---------------------
  Contact Top Content
-----------------------*/

    .contact-content-section {
        overflow: hidden;
    }

    .cc-text {
        height: 580px;
        margin-left: -15px;
        margin-right: -15px;
        padding-top: 94px;
    }

    .cc-text .section-title {
        text-align: left;
        margin-bottom: 42px;
    }

    .cc-text .section-title h2 {
        color: #ffffff;
    }

    .cc-text .section-title p {
        color: #ffffff;
    }

    .cc-text .cs-text .ct-address span {
        color: #ffffff;
    }

    .cc-text .cs-text .ct-address p {
        color: #ffffff;
    }

    .cc-text .cs-text ul li {
        color: #ffffff;
    }

    .cc-text .cs-text ul li span {
        color: #ffffff;
    }

    .cc-text .cs-text .ct-links span {
        color: #ffffff;
    }

    .cc-text .cs-text .ct-links p {
        color: #ffffff;
    }

    .cc-map {
        height: 580px;
        margin-left: -15px;
        margin-right: -15px;
        position: relative;
    }

    .cc-map iframe {
        width: 100%;
    }

    .cc-map .map-hover {
        position: absolute;
        left: 50%;
        top: 260px;
        -webkit-transform: translateX(-132px);
        -ms-transform: translateX(-132px);
        transform: translateX(-132px);
    }

    .cc-map .map-hover i {
        font-size: 30px;
        color: #f44949;
        position: absolute;
        left: 50%;
        top: -55px;
        -webkit-transform: translateX(-9px);
        -ms-transform: translateX(-9px);
        transform: translateX(-9px);
    }

    .cc-map .map-hover .map-hover-inner {
        width: 264px;
        text-align: center;
        background: #ffffff;
        padding: 27px 0 11px;
        -webkit-box-shadow: 0px 0px 30px rgba(74, 101, 106, 0.2);
        box-shadow: 0px 0px 30px rgba(74, 101, 106, 0.2);
    }

    .cc-map .map-hover .map-hover-inner:after {
        position: absolute;
        left: 50%;
        top: -6px;
        width: 30px;
        height: 30px;
        background: #ffffff;
        content: "";
        -webkit-transform: translateX(-15px) rotate(45deg);
        -ms-transform: translateX(-15px) rotate(45deg);
        transform: translateX(-15px) rotate(45deg);
    }

    .cc-map .map-hover .map-hover-inner h5 {
        color: #171822;
        font-weight: 600;
        margin-bottom: 7px;
    }

    .cc-map .map-hover .map-hover-inner p {
        color: #171822;
    }

    /*---------------------
  Contact Form
-----------------------*/

    .comment-form.contact-form input {
        margin-bottom: 25px;
    }

    .comment-form.contact-form textarea {
        height: 150px;
        margin-bottom: 42px;
    }

    /*-------------------------------- Respinsive Media Styles --------------------------------*/

    @media only screen and (min-width: 1200px) {
        /* .container {
		max-width: 1170px;
	} */
    }

    /* Medium Device: 1200px */

    @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .nav-menu .mainmenu ul li {
            margin-right: 25px;
        }

        .hero-section .hero-text {
            padding-top: 110px;
        }

        .counter-section .cd-timer .cd-item {
            margin-left: 25px;
        }

        .ha-text {
            padding-top: 0;
        }

        .member-item {
            width: 25%;
            height: 310px;
        }

        .testimonial-slider.owl-carousel .owl-nav button {
            left: -10px;
        }

        .testimonial-slider.owl-carousel .owl-nav button.owl-next {
            right: -10px;
        }

        .newslatter-inner .ni-form {
            width: 350px;
        }

        .cc-text {
            padding-top: 65px;
        }
    }

    @media only screen and (max-width: 991px) {
        .schedule-tab .st-content .sc-pic {
            text-align: left;
            padding: 30px 0 0;
        }

        .schedule-tab .st-content .sc-text {
            padding: 30px 0 0;
        }

        .schedule-tab .st-content .sc-widget {
            padding: 30px 0;
        }

        .schedule-tab .st-content {
            padding-left: 30px;
        }

        .price-item.top-rated {
            margin-top: 0;
        }

        .latest-item.large-item {
            height: 550px;
            margin-right: 0;
            margin-left: 0;
        }

        .latest-item {
            margin-left: 0;
        }

        .cs-map {
            margin-top: 20px;
        }

        .about-text {
            margin-top: 30px;
        }

        .story-right {
            padding-left: 0;
        }

        .newslatter-inner .ni-text {
            float: none;
        }

        .newslatter-inner .ni-form {
            float: none;
            margin-top: 30px;
        }

        .testimonial-slider.owl-carousel .owl-nav button {
            left: -10px;
        }

        .testimonial-slider.owl-carousel .owl-nav button.owl-next {
            right: -10px;
        }

        .counter-section .counter-text {
            margin-bottom: 30px;
        }

        .counter-section .cd-timer {
            text-align: left;
        }

        .speaker-item .si-text .si-title {
            padding-top: 30px;
        }

        .bd-text .bd-more-pic img {
            margin-bottom: 10px;
        }

        .cc-text {
            padding-left: 40px;
        }

        .ha-pic {
            margin-right: 0;
        }

        .hero-section .hero-text {
            margin-bottom: 20px;
        }
    }

    /* Tablet Device: 768px */

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .nav-menu .primary-btn.top-btn {
            display: none;
        }

        .nav-menu .mainmenu ul li {
            margin-right: 20px;
        }

        .bh-text h2 {
            font-size: 45px;
        }

        .nav-menu .mainmenu ul li:last-child {
            margin-right: 0;
        }

        .hero-section .hero-text {
            margin-bottom: 20px;
        }

        .member-item {
            width: 33.33%;
        }
    }

    /* Large Mobile: 480px */

    @media only screen and (max-width: 767px) {
        .counter-section .cd-timer .cd-item {
            margin-bottom: 10px;
        }

        .member-item {
            width: 50%;
        }

        .newslatter-inner {
            padding: 60px 50px 48px;
        }

        .newslatter-inner .ni-form {
            width: 350px;
        }

        .footer-text ul li {
            margin-right: 15px;
        }

        .schedule-table-tab .schedule-table-content {
            overflow-x: auto;
        }

        .schedule-table-tab .nav-tabs .nav-item {
            width: 33.33%;
        }

        .bd-text .bd-tag-share .tag {
            float: none;
            margin-top: 0;
            margin-bottom: 25px;
        }

        .bd-text .bd-tag-share .s-share {
            float: none;
        }

        .slicknav_menu {
            display: block;
            background: transparent;
            padding: 0;
        }

        .nav-menu .mainmenu {
            display: none;
        }

        .nav-menu .primary-btn.top-btn {
            display: none;
        }

        .slicknav_btn {
            margin: 34px 0;
            border-radius: 0;
        }

        .slicknav_nav {
            background: #222;
        }

        .slicknav_nav .slicknav_row,
        .slicknav_nav a {
            margin: 0;
            padding: 10px 20px;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        .slicknav_nav ul {
            margin: 0;
        }

        .slicknav_nav a:hover {
            border-radius: 0;
            background: #f44949;
            color: #ffffff;
        }

        .slicknav_nav .slicknav_row:hover {
            border-radius: 0;
            background: #f44949;
            color: #ffffff;
        }

        .member-item .mi-text {
            left: -1000px;
        }

        .bh-text h2,
        .hero-section .hero-text h2 {
            font-size: 40px;
            line-height: normal;
        }

        .counter-section .cd-timer .cd-item {
            margin-right: 10px;
            margin-left: 0;
        }

        .counter-section .cd-timer .cd-item:last-child {
            margin-right: 0;
        }

        .testimonial-slider.owl-carousel {
            text-align: center;
        }

        .testimonial-slider.owl-carousel .owl-nav button {
            margin-top: 10px;
            position: relative;
        }
    }

    /* Small Mobile: 320px */

    @media only screen and (max-width: 479px) {

        .bh-text h2,
        .hero-section .hero-text h2 {
            font-size: 36px;
            line-height: normal;
        }

        .newslatter-inner {
            padding: 60px 20px 48px;
        }

        .counter-section .cd-timer .cd-item {
            margin-right: 10px;
            margin-left: 0;
        }

        .schedule-tab .nav-tabs .nav-item {
            width: 33.33%;
        }

        .member-item {
            width: 100%;
        }

        .newslatter-inner .ni-form {
            width: 100%;
        }

        .newslatter-inner .ni-form button {
            width: 95px;
        }

        .newslatter-inner .ni-form input {
            padding-right: 100px;
        }

        .footer-text ul li {
            margin-bottom: 10px;
        }

        .schedule-table-tab .nav-tabs .nav-item {
            width: 50%;
        }

        .cc-text {
            padding-left: 30px;
            padding-top: 35px;
        }

        .story-item h2 {
            float: none;
            margin-bottom: 10px;
        }

        .bd-text .bd-tag-share .s-share a {
            font-size: 14px;
            height: 35px;
            width: 35px;
            line-height: 35px;
            margin-left: 5px;
        }
    }

    /* who is best section start */
    .features-section {
        text-align: center;
        padding: 112px 77px 112px 77px;
    }

    .features-section .material-symbols-outlined {
        color: hsl(220, 48%, 28%) !important;
        font-size: 2rem !important;
    }

    .features-section h2 {
        font-size: 2.5rem;
        margin-bottom: 44px;
        color: hsl(220, 48%, 28%);
    }

    .features-section p {
        margin: 28px 0px;
    }

    .features-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .feature-box {
        width: 30%;
        /*padding: 20px;*/
        text-align: left;
        transition: transform 0.3s ease;
    }

    .feature-box:hover {
        transform: translateY(-10px);
    }

    .feature-box img {
        width: 100%;
        height: auto;
    }

    .feature-box h3 {
        color: #666;
        font-size: 1.5rem;
        margin: 20px 0 10px;
    }

    .feature-box p {
        color: #7a7a7a;
        font-size: 1rem;
        line-height: 1.5;
    }

    /* Responsive Styles */
    @media (max-width: 1024px) {
        .feature-box {
            width: 45%;
        }
    }

    @media (max-width: 768px) {
        .feature-box {
            width: 100%;
            margin-bottom: 20px;
        }

        .features-container {
            flex-direction: column;
            align-items: center;
        }

        .features-section {
            text-align: center;
            padding: 50px 20px 50px 20px;
        }
    }

    /* parallax img start */
    .parallax {
        height: 80vh;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
    }

    .parallax::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('https://pixydrops.com/codesk/assets/images/play-bg.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-color: rgba(0, 0, 0, 0.98);
        /* Blackish overlay */
        z-index: 1;
        /* Behind the text */
    }

    .overlay {
        text-align: center;
        z-index: 2;
        /* In front of the image */
    }

    .overlay h1 {
        font-size: 50px;
        margin-bottom: 50px;
        max-width: 1000px;

    }

    .parallax .btn {
        padding: 15px 30px;
        background-color: hsl(220, 48%, 28%);
        color: #FFFFFF;
        text-decoration: none;
        margin: 30px 0px;
        font-weight: 500;
        font-size: 16px;
    }

    .content {
        padding: 40px 20px;
        text-align: center;
    }

    .content h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .content p {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .overlay h1 {
            font-size: 36px;
        }

        .overlay p {
            font-size: 18px;
        }

        .content h2 {
            font-size: 28px;
        }

        .content p {
            font-size: 16px;
        }
    }

    .triangle-section {
        position: relative;
        background-color: hsl(220, 48%, 28%);
        /* Bright red background */
        color: white;
        text-align: center;
        padding: 20px 0;
    }

    .section-content h2 {
        font-size: 36px;
        font-weight: bold;
        padding: 20px 0px;
    }

    .triangle {
        position: absolute;
        bottom: -20px;
        /* Position below the section */
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid hsl(220, 48%, 28%);
        z-index: 1000;
        /* Same color as the background */
    }

    .testimonial-section {
        position: relative;
        max-width: 1000px;
        margin: 50px auto;
        padding: 20px;
        /* background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); */
        border-radius: 10px;
        overflow: hidden;
    }

    .testimonial-container {
        width: 100%;
        overflow: hidden;
    }

    .testimonial-slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .testimonials .title {
        font-size: 2.5rem;
        margin-bottom: 44px;
        color: hsl(220, 48%, 28%);
    }

    .testimonials .row {
        justify-content: space-between;
    }

    .testimonials .margin-right {
        margin-right: 20px;
    }

    .testimonial-slide {
        min-width: 20%;
        /* Show 5 testimonials at a time (100% / 5 = 20%) */
        padding: 10px;
        text-align: center;
    }

    .testimonial-slide p {
        font-size: 16px;
        font-style: italic;
        color: #555;
        margin-bottom: 10px;
    }

    .testimonial-slide h4 {
        font-size: 14px;
        color: #333;
        font-weight: bold;
    }

    .prev-btn,
    .next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: #333;
        color: white;
        border: none;
        font-size: 30px;
        padding: 10px;
        cursor: pointer;
        border-radius: 50%;
        transition: background-color 0.3s;
        display: none;
    }

    .prev-btn:hover,
    .next-btn:hover {
        background-color: #555;
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .testimonial-slide p {
            font-size: 14px;
        }

        .testimonial-slide h4 {
            font-size: 12px;
        }

        .testimonial-slide {
            min-width: 50%;
            /* Show 2 testimonials at a time on small screens */
        }

        .prev-btn,
        .next-btn {
            font-size: 24px;
            padding: 8px;
        }
    }

    /* parallax img end */
    /* who is best section end */
</style>
<!-- Home About Section Begin -->
{{-- resources/views/about-us.blade.php --}}
<section class="home-about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ha-pic">
                    {{-- Display the image if it exists --}}
                    @if(filter_var($aboutUs->image_url, FILTER_VALIDATE_URL))
                        <!-- Check if the image_url is a full URL -->
                        <img src="{{ $aboutUs->image_url }}" alt="About Us Image">
                    @else
                        <!-- If it's a relative path, use Storage::url() -->
                        <img src="{{ Storage::url($aboutUs->image_url) }}" alt="About Us Image">
                    @endif

                </div>
            </div>
            <div class="col-lg-6">
                <div class="ha-text">
                    <h2>{{ $aboutUs->title }}</h2>
                    <p>{{ $aboutUs->description }}</p>
                    <a href="#" class="ha-btn">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Home About Section End -->

<!-- Team Member Section Begin -->
<!-- resources/views/team.blade.php -->
<section class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Who’s speaking</h2>
                    <p>These are our communicators, you can see each person’s information</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($teams as $team)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="member-item set-bg" style="background-image: url('{{ $team->image_url }}');">
                        <div class="mi-social">
                            <div class="mi-social-inner bg-gradient">
                                @if($team->facebook_url) <a href="{{ $team->facebook_url }}"><i class="fa fa-facebook"></i></a> @endif
                                @if($team->instagram_url) <a href="{{ $team->instagram_url }}"><i class="fa fa-instagram"></i></a> @endif
                                @if($team->twitter_url) <a href="{{ $team->twitter_url }}"><i class="fa fa-twitter"></i></a> @endif
                                @if($team->linkedin_url) <a href="{{ $team->linkedin_url }}"><i class="fa fa-linkedin"></i></a> @endif
                            </div>
                        </div>
                        <div class="mi-text">
                            <h5>{{ $team->name }}</h5>
                            <span>{{ $team->title }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Member Section End -->



<!-- who is best section start-->
<div class="features-section">
    <h2>Why codesk is best?</h2>
    <div class="features-container">
        @foreach($bestfeatureCards as $bestfeatureCard)
            <div class="feature-box">
                <!-- <img src="https://pixydrops.com/codesk/assets/images/why-codesk-1.jpg" alt="Be in the best locations"> -->
                <img src="{{ asset('storage/' . $bestfeatureCard->image_url) }}" alt="{{ $bestfeatureCard->title }}">
                <h3>{{ $bestfeatureCard->title }}</h3>
                <p>{{ $bestfeatureCard->description }}</p>
                <a href="{{ $bestfeatureCard->link }}"><span class="material-symbols-outlined">
                        arrow_forward
                    </span></a>
            </div>
        @endforeach
    </div>
</div>

<!-- who is best section end -->
<!-- parallax img start -->
<section class="parallax">
    <div class="overlay">
        <div class="testimonial-section">
            <div class="testimonial-container">
                <div class="testimonial-slider">
                    @foreach($ParallaxBanner as $ParallaxBanner)
                        <div class="testimonial-slide">
                            <img src="https://pixydrops.com/codesk/assets/images/brand-2.png" alt="">
                        </div>
                        <div class="testimonial-slide">
                            <img src="https://pixydrops.com/codesk/assets/images/brand-2.png" alt="">
                        </div>
                        <div class="testimonial-slide">
                            <img src="https://pixydrops.com/codesk/assets/images/brand-2.png" alt="">
                        </div>
                        <div class="testimonial-slide">
                            <img src="https://pixydrops.com/codesk/assets/images/brand-2.png" alt="">
                        </div>
                        <div class="testimonial-slide">
                            <img src="https://pixydrops.com/codesk/assets/images/brand-2.png" alt="">
                        </div>
                        <div class="testimonial-slide">
                            <img src="https://pixydrops.com/codesk/assets/images/brand-2.png" alt="">
                        </div>
                        <div class="testimonial-slide">
                            <img src="https://pixydrops.com/codesk/assets/images/brand-2.png" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="prev-btn">‹</button>
            <button class="next-btn">›</button>
        </div>
        <h1>{{ $ParallaxBanner->parallax_heading }}</h1>
        <a href="{{ $ParallaxBanner->parallax_btn_link}}" class="btn">{{ $ParallaxBanner->parallax_btn_text }}</a>
    </div>
</section>

<!--<section class="triangle-section">-->
<!--    <div class="section-content">-->
<!--        <h2>What they are saying.</h2>-->
<!--    </div>-->
<!--    <div class="triangle"></div>-->
<!--</section>-->


<!-- parallax img end -->

<!-- latest BLog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Latest News</h2>
                    <p>Do not miss anything topic abput the event</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="latest-item set-bg large-item"
                    data-setbg="https://themewagon.github.io/manup/img/blog/latest-b/latest-1.jpg">
                    <div class="li-tag">Marketing</div>
                    <div class="li-text">
                        <h4><a href="./blog-details.html">Improve You Business Cards And Enchan Your Sales</a></h4>
                        <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="latest-item set-bg"
                    data-setbg="https://themewagon.github.io/manup/img/blog/latest-b/latest-2.jpg">
                    <div class="li-tag">Experience</div>
                    <div class="li-text">
                        <h5><a href="./blog-details.html">All users on MySpace will know that there are millions of
                                people out there.</a></h5>
                        <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                    </div>
                </div>
                <div class="latest-item set-bg"
                    data-setbg="https://themewagon.github.io/manup/img/blog/latest-b/latest-3.jpg">
                    <div class="li-tag">Marketing</div>
                    <div class="li-text">
                        <h5><a href="./blog-details.html">A Pocket PC is a handheld computer, which features many of the
                                same capabilities.</a></h5>
                        <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest BLog Section End -->

<!-- Pricing Section Begin -->
<!-- <section class="pricing-section set-bg spad" data-setbg="https://themewagon.github.io/manup/img/pricing-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Ticket Pricing</h2>
                    <p>Get your event ticket plan</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <div class="price-item">
                    <h4>1 Day Pass</h4>
                    <div class="pi-price">
                        <h2><span>$</span>129</h2>
                    </div>
                    <ul>
                        <li>One Day Conference Ticket</li>
                        <li>Coffee-break</li>
                        <li>Lunch and Networking</li>
                        <li>Keynote talk</li>
                        <li>Talk to the Editors Session</li>
                    </ul>
                    <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="price-item top-rated">
                    <div class="tr-tag">
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>Full Pass</h4>
                    <div class="pi-price">
                        <h2><span>$</span>199</h2>
                    </div>
                    <ul>
                        <li>One Day Conference Ticket</li>
                        <li>Coffee-break</li>
                        <li>Lunch and Networking</li>
                        <li>Keynote talk</li>
                        <li>Talk to the Editors Session</li>
                        <li>Lunch and Networking</li>
                        <li>Keynote talk</li>
                    </ul>
                    <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="price-item">
                    <h4>Group Pass</h4>
                    <div class="pi-price">
                        <h2><span>$</span>79</h2>
                    </div>
                    <ul>
                        <li>One Day Conference Ticket</li>
                        <li>Coffee-break</li>
                        <li>Lunch and Networking</li>
                        <li>Keynote talk</li>
                        <li>Talk to the Editors Session</li>
                    </ul>
                    <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Pricing Section End -->

<!-- Newslatter Section Begin -->
<section class="newslatter-section">
    <div class="container">
        <div class="newslatter-inner set-bg" data-setbg="https://themewagon.github.io/manup/img/newslatter-bg.jpg">
            <div class="ni-text">
                <h3>Subscribe Newsletter</h3>
                <p>Subscribe to our newsletter and don’t miss anything</p>
            </div>
            <form action="#" class="ni-form">
                <input type="text" placeholder="Your email">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>
</section>
<!-- Newslatter Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Location</h2>
                    <p>Get directions to our event center</p>
                </div>
                <div class="cs-text">
                    <div class="ct-address">
                        <span>Address:</span>
                        <p>01 Pascale Springs Apt. 339, NY City <br />United State</p>
                    </div>
                    <ul>
                        <li>
                            <span>Phone:</span>
                            (+12)-345-67-8910
                        </li>
                        <li>
                            <span>Email:</span>
                            info.colorlib@gmail.com
                        </li>
                    </ul>
                    <div class="ct-links">
                        <span>Website:</span>
                        <p>https://conference.colorlib.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cs-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52901.38789495531!2d-118.19465514866786!3d34.03523211493029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2cf71ad83ff9f%3A0x518b28657f4543b7!2sEast%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1579763856144!5m2!1sen!2sbd"
                        height="400" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const elements = document.querySelectorAll('.set-bg');

        elements.forEach(el => {
            const bg = el.getAttribute('data-setbg');
            if (bg) {
                el.style.backgroundImage = `url(${bg})`;
            }
        });
    });

</script>

@include('footer')