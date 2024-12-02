
<script src="assets/js/main.js"></script>
    <!-- Footer Section -->
     <style>
            <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

footer {
    background-color:  hsl(220, 48%, 28%);
    color: #fff;
       padding: 80px 77px;
}

.footer-container {
    width: 100%;
    /*max-width: 1200px;*/
    margin: auto;
}

.footer-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 30px;
}

.footer-column {
    flex: 1;
    margin: 10px;
    min-width: 220px;
}

.footer-logo {
    width: 150px;
}

.footer-column h3 {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.footer-column ul {
    list-style-type: none;
}

.footer-column ul li {
    margin-bottom: 20px;
}

.footer-column ul li a {
    color: #fff;
    text-decoration: none;
        font-size: 1rem;
}

.footer-column a.footer-contact {
    color: #ff4040;
    font-weight: bold;
    display: block;
    margin-top: 10px;
}

.footer-phone {
    margin-top: 10px;
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid  #FFFFFF;
    padding-top: 15px;
}

.footer-bottom p {
    margin: 0;
}
.custom-margin{
    margin: 20px 0px;
}
.footer-social a {
    margin-left: 15px;
}

.footer-social img {
    width: 40px;
}

@media (max-width: 768px) {
    .footer-row {
        flex-direction: column;
        text-align: center;
    }

    .footer-bottom {
        flex-direction: column;
    }

    .footer-social {
        margin-top: 10px;
    }
}
.icon{
    display: flex;
    align-items: center;

}
.footer-icon .material-symbols-outlined{
    font-size: 1rem !important;
    color: #e93939;
}
.icon .custom-margin{
    margin: 20px !important;
}
@media (min-width: 1500px) {
.map-container {
    position: relative;
    height: 50vh;
}
#map {
    height: 49vh;
    width: 100%;
}
}
    </style>
     </style>
    <footer>
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-column">
                    <!-- <img src="logo.png" alt="Codesk Logo" class="footer-logo"> -->
                     <h1>COWORK.ONE</h1>
                    <p class="custom-margin">
                        Codesk is a premium WordPress theme for coworking space, freelancers, creatives, and a wide range of other businesses.
                    </p>
                    <a href="mailto:needhelp@codesk.com" class="footer-contact">needhelp@codesk.com</a>
                    <p class="footer-phone">777 888 0000</p>
                </div>
                
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Latest events</a></li>
                        <li><a href="#">Our services</a></li>
                        <li><a href="#">News & articles</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Explore</h3>
                    <ul>
                        <li><a href="#">Our history</a></li>
                        <li><a href="#">Help & support</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Address</h3>
                    <p class="custom-margin">20 Broklyn Street, New York, United States of America</p>
                    <iframe src="https://www.google.com/maps/embed?..." width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     <div class="icon footer-icon"><span class="material-symbols-outlined">location_on</span> <p class="custom-margin">Find us on Map</p></div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© Copyright 2020 by Layerdrops.com</p>
                <div class="footer-social">
                    <a href="#"><img src="public/storage/img/Frame 1 (3).png" alt="Facebook"></a>
                    <a href="#"><img src="public/storage/img/Frame 2 (1).png" alt="Twitter"></a>
                    <a href="#"><img src="public/storage/img/Frame 3 (1).png" alt="Instagram"></a>
                      <a href="#"><img src="public/storage/img/Frame 4 (1).png" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </footer>
<!-- footer end -->
</body>
</html>