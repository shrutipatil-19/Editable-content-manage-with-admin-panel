@include('header')

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<style>
    /* banner start */
    body {
        max-width: 1940px;
        margin: auto;
    }

    .banner {
        display: flex;
        justify-content: space-between;
        background-color:
            {{ $banner->bg_color }}
        ;
        padding: 77px;
        /* border-radius: 20px; */
        /* width: 80%; */
        /* max-width: 1200px; */
        /* box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); */
        /* position: relative;
  top: 88px; */
        margin-top: 120px;

    }

    .text-content {
        flex: 1;
    }

    .text-content h1 {
        font-size: 3.7em;
        line-height: 1.1;
        color: #333;
        margin-bottom: 42px;
    }

    .tagline {
        color: hsl(220, 48%, 28%);
        font-weight: bold;
        font-size: 1.2em;
        margin-bottom: 10px;
        margin-left: 6px;
    }

    .cta-btn {
        background-color: hsl(220, 48%, 28%);
        color: white;
        padding: 15px 40px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
        font-size: 16px;
    }

    .cta-btn:hover {
        background-color: hsl(220, 12%, 45%);
    }

    .image-content {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner-image {
        max-width: 100%;
        height: auto;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    @media (max-width: 768px) {
        .text-content h1 {
            font-size: 3em;
        }

        .banner {
            flex-direction: column;
            padding: 35px;
        }
    }

    /* banner end */

    /* card start */
    .main-card-div {
        position: relative;
        z-index: 10;
    }

    .features-banner {
        display: flex;
        justify-content: space-between;
        padding: 112px 77px 0px 77px;
    }

    .feature-card {
        flex: 1;
        margin: 0 15px 0 0;
        background-color: #fff;
        text-align: left;
        padding: 40px 35px;
        transition: all 0.3s ease;
        border: 1px solid #f9e9e9;
    }

    .feature-card.active {
        background-color: hsl(220, 48%, 28%);
        color: #fff;
        transform: translateY(-10px);
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }

    .material-symbols-outlined {
        font-size: 3rem !important;
    }

    .feature-card.active h3 {
        color: #FFFFFF !important;
    }

    .feature-card h3 {
        font-size: 1.5em;
        margin: 15px 0;
        color: inherit;
        color: #3f3836;
    }

    .feature-card p {
        color: #666 !important;
        font-size: 1.1em;
        color: inherit;
        line-height: 1.3rem;
    }

    .feature-card.active p {
        color: #FFFFFF !important;
    }

    .feature-card:hover {
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .features-banner {
            flex-direction: column;
            padding: 20px 10px;
        }
    }

    .main-card-div .services-pattern {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    img {
        max-width: 100%;
    }

    /* card end */

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

    /* who is best section end */

    /* explore start */

    .explore-codesk-area {
        padding-top: 112px;
        padding-bottom: 112px;
        background: #fbf0ee;
        position: relative;
        z-index: 10;
        padding: 112px 77px;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        justify-content: center;
        margin-right: -15px;
        margin-left: -15px;
    }

    @media (min-width: 992px) {
        .col-lg-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        display: contents;
    }

    .text-center {
        text-align: center !important;
        width: 100%;
    }

    .explore-codesk-area .explore-codesk-title .title {
        font-size: 2.5rem;
        margin-bottom: 44px;
        color: hsl(220, 48%, 28%);
    }

    /*.explore-codesk-area .margin-bottom{*/
    /*  margin: 0px auto 40px auto;*/
    /*}*/
    .explore-codesk-area .margin-bottom {
        margin: 0px 0px 40px 0px;
    }

    .explore-codesk-area .margin-bottom-none {
        margin: 0px 0px 0px 0px;
    }

    .explore-codesk-area .explore-codesk-item {
        margin: 42px 10px 0px 0px;
        background: #fff;
        border: 1px solid #f7eae8;
        padding-left: 280px;
        padding-bottom: 37px;
        padding-top: 43px;
        padding-right: 55px;
        position: relative;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        /* width: 50%; */
    }

    .mt-50 {
        margin-top: 50px;
    }

    .explore-codesk-area .explore-codesk-item img {
        position: absolute;
        bottom: 20px;
        left: 20px;
        width: 213px;
        height: 313px;
        object-fit: cover;
    }

    .explore-codesk-area .margin-right {
        margin-right: 25px;
    }

    .explore-codesk-area .margin-left {
        margin-left: 25px;
    }

    .explore-codesk-area .container {
        padding: 0px;
    }

    img {
        max-width: 100%;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    .explore-codesk-area .explore-codesk-item .title {
        font-size: 24px;
        color: #333333;
    }

    .explore-codesk-area .explore-codesk-item p {
        font-weight: 500;
        padding-top: 5px;
        padding-bottom: 18px;
        color: #666;
    }

    .explore-codesk-area .explore-codesk-item .item {
        padding-bottom: 22px;
    }

    .align-items-center {
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .justify-content-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }

    .d-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .explore-codesk-area .explore-codesk-item .item span {
        font-size: 14px;
        font-weight: 600;
        color: #333333;
    }

    i,
    span,
    a {
        display: inline-block;
    }

    .explore-codesk-area .explore-codesk-item .item p {
        font-size: 24px;
        font-weight: 400;
        color: hsl(220, 48%, 28%);
    }

    .explore-codesk-area .explore-codesk-item p {
        font-weight: 500;
        padding-top: 5px;
        padding-bottom: 18px;
    }

    .explore-codesk-area .explore-codesk-item a {
        line-height: normal;
        padding: 15px 25px;
        font-size: 16px;
    }

    .main-btn.main-btn-2 {
        border-left-color: hsl(220, 48%, 28%);
    }

    .main-btn {
        display: inline-block;
        font-weight: 600;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-left: 2px solid #fff;
        padding: 15px 40px;
        font-size: 16px;
        line-height: 68px;
        border-radius: 0px;
        color: #fff;
        cursor: pointer;
        z-index: 5;
        -webkit-transition: all 0.4s ease-out 0s;
        -moz-transition: all 0.4s ease-out 0s;
        -ms-transition: all 0.4s ease-out 0s;
        -o-transition: all 0.4s ease-out 0s;
        transition: all 0.4s ease-out 0s;
        background: hsl(220, 48%, 28%);
        position: relative;
    }

    .explore-codesk-area .explore-codesk-shape {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .explore-codesk-area img {
        max-width: 100%;
    }

    @media (max-width: 768px) {
        .explore-codesk-area {
            padding: 50px 20px;
        }

        .row {
            flex-direction: column;
        }

        .explore-codesk-area .explore-codesk-item img {
            position: static;
            width: 100%;
        }

        .explore-codesk-area .explore-codesk-item {
            margin: 10px;
            padding: 20px;
        }

        .explore-codesk-area .explore-codesk-title .title {
            font-size: 44px;
            padding-bottom: 0px;
        }

        .explore-codesk-area .explore-codesk-item .title {
            margin-top: 20px;
        }
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        /* Responsive grid */
        grid-gap: 20px;
        /* Space between items */
    }

    .grid-item {
        background-color: #ffffff;
        border: 1px solid #ccc;
        /* border-radius: 8px; */
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }

    /* explore end */


    /* mini banner start */
    .cta-2-area {
        background: hsl(220, 48%, 28%);
        padding: 100px 77px;
        position: relative;
        margin-bottom: 112px;
        z-index: 10;
    }

    /* .container, .container-lg, .container-md, .container-sm, .container-xl {
        max-width: 1200px;
    } */
    .align-items-center {
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .col-lg-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .col-lg-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }

    .col-lg-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .cta-2-area .cta-content .title {
        font-size: 44px;
        color: #fff;
    }

    .cta-2-area .cta-content p {
        color: #fff;
        font-weight: 500;
        padding-left: 90px;
        font-size: 1.1rem;
    }

    @media (min-width: 992px) {
        .text-lg-right {
            text-align: right !important;
        }
    }

    .cta-2-area .cta-content a {
        background: #3f3836;
        line-height: normal;
    }

    .main-btn {
        display: inline-block;
        font-weight: 600;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-left: 2px solid #fff;
        padding: 15px 40px;
        font-size: 16px;
        line-height: 68px;
        border-radius: 0px;
        color: #fff;
        cursor: pointer;
        z-index: 5;
        -webkit-transition: all 0.4s ease-out 0s;
        -moz-transition: all 0.4s ease-out 0s;
        -ms-transition: all 0.4s ease-out 0s;
        -o-transition: all 0.4s ease-out 0s;
        transition: all 0.4s ease-out 0s;
        background-color: hsl(220, 48%, 28%);
        ;
        position: relative;
    }

    .cta-2-area .cta-dot {
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
    }

    .cta-2-area .cta-dot-2 {
        position: absolute;
        top: 0;
        left: 400px;
        z-index: -1;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    .explore-codesk-area .row {
        /* display: flex; */
        justify-content: space-between;
        align-items: center !important;
        width: 100%;
        /*margin: auto;*/
    }

    @media (max-width: 768px) {
        .row {
            flex-direction: column;
            width: 100%;

        }

        .col-lg-4,
        .col-lg-5,
        .col-lg-3 {
            max-width: 100%;
            margin: 10px 0px;
        }

        .cta-2-area .cta-dot {
            top: 0px;
        }

        .cta-2-area .cta-dot-2 {
            left: 0px;
        }

        .cta-2-area .cta-content p {
            padding-left: 0px;
        }

        .cta-2-area .cta-content .title {
            font-size: 32px;
        }

        .cta-2-area {
            padding: 80px 15px;
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

    /* mini banner end */
    /* .testimonial start */
    .testimonials {
        padding: 112px 77px;
        background: #fbf0ee;
        position: relative;
        z-index: 10;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .testimonials .container {
        padding: 0px;
        overflow: hidden;
    }

    .explore-codesk-area .container {
        display: flex;
        justify-content: space-between;
        /*max-width: 1200px;*/
        flex-wrap: wrap;
        gap: 20px;
    }

    .testimonial-item {
        background: white;
        /* border-radius: 10px; */
        padding: 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        /*width: 30%;*/
        position: relative;
        min-width: 250px;
        /*margin: 0px 20px;*/
    }

    .testimonial-item .quote {
        font-size: 16px;
        color: #666;
        margin-bottom: 20px;
        position: relative;
    }

    .testimonial-item .author-info {
        position: relative;
        padding-top: 20px;
    }

    .testimonial-item h4 {
        font-size: 18px;
        color: #333;
        font-weight: bold;
    }

    .testimonial-item .role {
        color: #666;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .testimonial-item .author-image {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-top: 10px;
    }

    .testimonials .explore-codesk-shape {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .testimonials img {
        max-width: 100%;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .testimonial-item {
            width: 100%;
            margin-bottom: 20px;
        }

        .testimonials {
            padding: 80px 20px;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .testimonial-item {
            width: 45%;
        }
    }

    /* .testimonial end */

    /* .contact-form start */
    .contact-section {
        padding: 112px 77px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        z-index: 10;
    }

    .contact-section .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 100%;
        align-items: center;
    }

    .contact-section .form-container {
        flex: 1;
        max-width: 600px;
        /*padding: 0px 20px;*/
    }

    .contact-section h2 {
        font-size: 40px;
        margin-bottom: 44px;
        color: hsl(220, 48%, 28%);
    }

    .contact-section .contact-form {
        display: flex;
        flex-direction: column;
    }

    .contact-section .input-row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 20px;
    }

    .contact-section .contact-form input,
    .contact-form textarea {

        width: 100%;
        padding: 15px;
        background-color: #fdf4f1;
        font-size: 1rem;
        color: #333;
        outline: none;
        border: none;
        background: #efefef;
    }

    .contact-section .contact-form textarea {
        resize: none;
        margin-bottom: 40px;
        font-family: arial;
    }

    .contact-section .container {
        padding: 0px;
    }

    .contact-form .input-row input {
        flex: 1;
    }

    .send-btn {
        background-color: hsl(220, 48%, 28%);
        color: white;
        border: none;
        padding: 15px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-weight: 600;
    }

    .send-btn:hover {
        background-color: hsl(220, 41%, 37%);
    }

    .images-container {
        /*flex: 1;*/
        /*max-width: 600px;*/
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .images-container img {
        object-fit: cover;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .contact-section .container {
            flex-direction: column;
            align-items: stretch;
        }

        .contact-section {
            padding: 0px;
        }

        .contact-section .images-container {
            margin-top: 20px;
        }

        .contact-section .input-row {
            flex-direction: column;
        }
    }

    .shape-pattern {
        position: absolute;
        top: 0;
        left: 0px;
        z-index: -1;
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 0.6;
            /* Faint at start */
        }

        50% {
            transform: scale(1.1);
            /* Slightly larger */
            opacity: 1;
            /* Fully visible */
        }

        100% {
            transform: scale(1);
            /* Back to original size */
            opacity: 0.6;
            /* Faint at end */
        }
    }

    /* contact form end */

    /* map :start */
    #map {
        height: 70vh;
        /* Full height for the map */
        width: 100%;
        /* Full width for the map */
    }

    .map-container {
        position: relative;
        height: 70vh;
        /* Ensure the container takes full height */
    }

    /* map end */
</style>
<!-- banner start -->
<div class="banner">

    <div class="text-content">
        <p class="tagline">{{ $banner->sub_heading }}</p>
        <h1>{{ $banner->heading }}</h1>
        <a href="{{route('enquiry')}}" class="cta-btn">Enquire</a>
    </div>
    <div class="image-content">
        <!-- <img src="{{ asset('storage/' . $banner->image) }}" alt="Coworking Space Illustration"
                class="banner-image"> -->
        <img src="https://pixydrops.com/codesk/assets/images/banner-thumb.png" alt="Coworking Space Illustration"
            class="banner-image">
    </div>
</div>
<!-- banner end -->

<!-- card start -->
<div class="main-card-div">
    <div class="features-banner">
        @foreach($featureCards as $featureCard)
            <div class="feature-card">
                <div class="icon">
                    <span class="material-symbols-outlined">
                        {{ $featureCard->icon }}
                    </span>
                </div>
                <h3>{{ $featureCard->FeatureCardHeading }}</h3>
                <p>{{ $featureCard->FeatureCardDescription }}</p>
            </div>
        @endforeach
    </div>
    <div class="services-pattern">
        <img src="https://pixydrops.com/codesk/assets/images/services-pattern.png" alt="">
    </div>
</div>
<!-- card end -->


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

<!-- explore start -->
<div class="explore-codesk-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="explore-codesk-title text-center">
                    <h3 class="title">Upcoming Events</h3>
                </div>
            </div>
        </div>

        <div class="grid-container row margin-bottom">
            @foreach ($spaces as $space)

                <div class="explore-codesk-item margin-right mt-50 grid-item ">

                    <img src="{{ asset('storage/' . $space->space_image) }}" alt="Coworking Space Illustration">
                    <h3 class="title">{{ $space->space_title }}</h3>

                    <p>{{ $space->space_description }}</p>
                    <div class="item d-flex justify-content-between align-items-center">
                        <span>{{ $space->space_amenities }}</span>
                        <p>{{ $space->space_price }}</p>
                    </div>
                    <a class="main-btn main-btn-2" href="{{ $space->space_btn_link }}">{{ $space->space_btn_text }}</a>
                </div>

            @endforeach
        </div>
    </div>
    <div class="explore-codesk-shape">
        <img src="https://pixydrops.com/codesk/assets/images/testimonial-pattern.png" alt="">
    </div>
</div>

<!-- explore end -->

<!-- mini banner start -->
<div class="cta-2-area">
    <div class="container">
        @if($cta)
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="cta-content">
                        <h3 class="title">{{ $cta->cta_title }}</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta-content">
                        <p>{{ $cta->cta_description }}</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cta-content text-left text-lg-right">
                        <a class="main-btn" href="{{ $cta->cta_button_link }}">{{ $cta->cta_button_text }}</a>
                    </div>
                </div>
            </div>
        @else
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cta-content">
                        <h3 class="title">CTA Section is not available at the moment.</h3>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="cta-dot">
        <img src="https://pixydrops.com/codesk/assets/images/cta-dot-2.png" alt="cta">
    </div>
    <div class="cta-dot-2">
        <img src="https://pixydrops.com/codesk/assets/images/cta-dot.png" alt="cta">
    </div>
</div>

<!-- mini banner end -->


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


<!-- Testimonial start -->
<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="explore-codesk-title text-center">
                    <h3 class="title">What they are saying.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial-item margin-right">
                <p class="quote">“I was impressed by the moling services, not lorem ipsum is simply free text of used by
                    refreshing. Neque porro este qui dolorem ipsum quia.”</p>
                <div class="author-info">
                    <h4>Jessica Rose</h4>
                    <p class="role">Freelancer</p>
                    <img src="https://pixydrops.com/codesk/assets/images/testimonial-1.jpg" alt="Jessica Rose"
                        class="author-image">
                </div>
            </div>
            <div class="testimonial-item margin-right">
                <p class="quote">“I was impressed by the moling services, not lorem ipsum is simply free text of used by
                    refreshing. Neque porro este qui dolorem ipsum quia.”</p>
                <div class="author-info">
                    <h4>Kevin Martin</h4>
                    <p class="role">CEO</p>
                    <img src="https://pixydrops.com/codesk/assets/images/testimonial-2.jpg" alt="Kevin Martin"
                        class="author-image">
                </div>
            </div>
            <div class="testimonial-item">
                <p class="quote">“I was impressed by the moling services, not lorem ipsum is simply free text of used by
                    refreshing. Neque porro este qui dolorem ipsum quia.”</p>
                <div class="author-info">
                    <h4>Sarah Albert</h4>
                    <p class="role">Developer</p>
                    <img src="https://pixydrops.com/codesk/assets/images/testimonial-3.jpg" alt="Sarah Albert"
                        class="author-image">
                </div>
            </div>
        </div>
    </div>
    <div class="explore-codesk-shape">
        <img src="https://pixydrops.com/codesk/assets/images/testimonial-pattern.png" alt="">
    </div>
</div>
<!-- testimonial end -->

<!-- contact form start -->
<div class="contact-section">
    <div class="container">
        <div class="form-container">
            <h2>Write us a message.</h2>
            <form action="{{ route('contact.submit') }}" method="post" class="contact-form">
                @csrf
                <div class="input-row">
                    <input type="text" name="Name" placeholder="Name" required>
                    <input type="email" name="Email" placeholder="Email" required>
                </div>
                <div class="input-row">
                    <input type="text" name="Phone" placeholder="Phone" required>
                    <input type="text" name="Subject" placeholder="Subject" required>
                </div>
                <textarea name="Message" placeholder="Message" rows="5" required></textarea>
                <button type="submit" class="send-btn">Send message</button>
            </form>

        </div>

        <div class="images-container">
            <div class="img-div">
                <img src="https://pixydrops.com/codesk/assets/images/write-massage-1.jpg" alt="Office Image 1">
                <img src="https://pixydrops.com/codesk/assets/images/write-massage-2.jpg" alt="Office Image 2">
            </div>
            <div class="img-div">
                <img src="https://pixydrops.com/codesk/assets/images/write-massage-3.jpg" alt="Office Image 3">
            </div>

        </div>
    </div>
    <div class="shape-pattern">
        <img src="https://pixydrops.com/codesk/assets/images/we-know-line.png" alt="">
    </div>
</div>
<!-- contact form end -->

<!-- map start -->
<div class="map-container">
    <div id="map"></div>
</div>
<!-- map end -->

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script>
    // banner start

    // Animation for banner elements on page load
    document.addEventListener("DOMContentLoaded", function () {
        const textContent = document.querySelector('.text-content');
        textContent.style.opacity = 0;
        textContent.style.transform = "translateX(-50px)";

        setTimeout(() => {
            textContent.style.transition = "opacity 1s, transform 1s";
            textContent.style.opacity = 1;
            textContent.style.transform = "translateX(0)";
        }, 500);
    });

    // banner end

    // card start
    // Store the currently active card
    let activeCard = document.querySelector('.feature-card');  // Default to the first card

    // Set the default active card on page load
    if (activeCard) {
        activeCard.classList.add('active');  // Add 'active' class to the default card
    }

    document.querySelectorAll('.feature-card').forEach((card) => {
        card.addEventListener('mouseenter', function () {
            // Remove 'active' class from the previous active card, if there is one
            if (activeCard && activeCard !== card) {
                activeCard.classList.remove('active');
            }

            // Add 'active' class to the currently hovered card
            card.classList.add('active');

            // Update the active card reference
            activeCard = card;
        });
    });


    // card end

    // contact strat
    //     document.querySelector('.contact-form').addEventListener('submit', function (event) {
    //     event.preventDefault();

    //     // Collect form data
    //     let formData = new FormData(this);
    //     console.log("Form Submitted!");

    //     // You can add AJAX form submission here
    //     alert("Your message has been sent.");

    //     // Optionally, reset the form
    //     this.reset();
    // });
    // contcat end

    // map start
    // Initialize the map centered on Mumbai (Coordinates for Mumbai)
    var map = L.map('map').setView([19.0760, 72.8777], 12); // Set initial view to Mumbai with zoom level 12

    // Add a tile layer (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Add a marker for Mumbai
    var marker = L.marker([19.0760, 72.8777]).addTo(map) // Coordinates for Mumbai
        .bindPopup('<b>Mumbai</b><br>India.')
        .openPopup();

    // Add the geocoder control
    var geocoder = L.Control.geocoder({
        defaultMarkGeocode: false
    })
        .on('markgeocode', function (e) {
            // Remove the previous marker
            if (marker) {
                map.removeLayer(marker);
            }

            // Get the location from geocode result
            var latlng = e.geocode.center;

            // Create a new marker for the searched location
            marker = L.marker(latlng).addTo(map)
                .bindPopup('<b>' + e.geocode.name + '</b>')
                .openPopup();

            // Set the map view to the new marker location
            map.setView(latlng, 13);
        })
        .addTo(map);
    // map end


    // parallax img start
    const slider = document.querySelector('.testimonial-slider');
    const slides = document.querySelectorAll('.testimonial-slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;
    const totalSlides = slides.length;
    const slidesToShow = 5;  // Change this value if you want to show fewer or more slides at a time
    const slideWidth = 100 / slidesToShow; // Calculate percentage width for each slide

    // Function to show the slide at a specific index
    function showSlide(index) {
        if (index >= totalSlides - (slidesToShow - 1)) {
            currentIndex = 0; // Wrap back to first slide
        } else if (index < 0) {
            currentIndex = totalSlides - slidesToShow; // Wrap to last visible group of slides
        } else {
            currentIndex = index;
        }
        slider.style.transform = `translateX(${-currentIndex * slideWidth}%)`;
    }

    // Event Listeners for navigation buttons
    nextBtn.addEventListener('click', () => {
        showSlide(currentIndex + 1);
    });

    prevBtn.addEventListener('click', () => {
        showSlide(currentIndex - 1);
    });

    // Optional: Auto slide every 5 seconds
    setInterval(() => {
        showSlide(currentIndex + 1);
    }, 5000);
    // parallax img end
</script>
  @include('footer')