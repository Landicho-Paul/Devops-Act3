<body>
    <head>
        <link rel="stylesheet" href="style.css">
        <script src="style.js"></script>
    </head>
    <nav class="navbar">
        <div class="navbar-container">
            <input type="checkbox" name="" id="checkbox">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href= 'itemGallery.php'>Shop</a></li>
                <li><a href="#news">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="logo">
                <img src="https://i.postimg.cc/TP6JjSTt/logo.webp" alt="">
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="home_page ">
            <div class="home_img ">
                <img src="https://i.postimg.cc/t403yfn9/home2.jpg" alt="img ">
            </div>
            <div class="home_txt ">
                <p class="collectio ">SUMMER COLLECTION</p>
                <h2>FALL - WINTER<br>Collection 2023</h2>
                <div class="home_label ">
                    <p>A specialist label creating luxury essentials. Ethically crafted<br>with an unwavering commitment to exceptional quality.</p>
                </div>
                <button><a href="#sellers">SHOP NOW</a><i class='bx bx-right-arrow-alt'></i></button>
                <div class="home_social_icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>


    <section id="news">
        <div class="news-heading">
            <p>LATEST NEWS</p>
            <h2>Fashion New Trends</h2>
        </div>
        <div class="l-news container">
            <div class="l-news1">
                <div class="news1-img">
                    <img src="https://i.postimg.cc/2y6wbZCm/news1.jpg" alt="img">
                </div>
                <div class="news1-conte">
                    <div class="date-news1">
                        <p><i class='bx bxs-calendar'></i> 12 February 2022</p>
                        <h4>What Curling Irons Are The Best Ones</h4>
                        <a href="https://www.vogue.com/article/best-curling-irons" target="_blank">read more</a>
                    </div>
                </div>
            </div>
            <div class="l-news2">
                <div class="news2-img">
                    <img src="https://i.postimg.cc/9MXPK7RT/news2.jpg" alt="img">
                </div>
                <div class="news2-conte">
                    <div class="date-news2">
                        <p><i class='bx bxs-calendar'></i> 17 February 2022</p>
                        <h4>The Health Benefits Of Sunglasses</h4>
                        <a href="https://www.rivieraopticare.com/blog/314864-the-health-benefits-of-wearing-sunglasses_2/" target="_blank">read more</a>
                    </div>
                </div>
            </div>
            <div class="l-news3">
                <div class="news3-img">
                    <img src="https://i.postimg.cc/x1KKdRLM/news3.jpg" alt="img">
                </div>
                <div class="news3-conte">
                    <div class="date-news3">
                        <p><i class='bx bxs-calendar'></i> 26 February 202</p>
                        <h4>Eternity Bands Do Last Forever</h4>
                        <a href="https://www.briangavindiamonds.com/news/eternity-bands-symbolize-love-that-lasts-forever/" target="_blank">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.121169986175!2d73.90618951442687!3d18.568575172551647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c131ed5b54a7%3A0xad718b8b2c93d36d!2sSky%20Vista!5e0!3m2!1sen!2sin!4v1654257749399!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <form action="https://formspree.io/f/xzbowpjq" method="POST">
            <div class="form">
                <div class="form-txt">
                    <h4>INFORMATION</h4>
                    <h1>Contact Us</h1>
                    <span>As you might expect of a company that began as a high-end interiors contractor, we pay strict
                        attention.</span>
                    <h3>USA</h3>
                    <p>195 E Parker Square Dr, Parker, CO 801<br>+43 982-314-0958</p>
                    <h3>India</h3>
                    <p>HW95+C9C, Lorem ipsum dolor sit.<br>411014</p>
                </div>
                <div class="form-details">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <textarea name="message" id="message" cols="52" rows="7" placeholder="Message" required></textarea>
                    <button>SEND MESSAGE</button>
                </div>
            </div>
        </form>
    </div>
    </section>
    <footer>
        <div class="footer-container container">
            <div class="content_1">
                <img src="https://i.postimg.cc/htGyQ4JB/footer-logo.png" alt="logo">
                <p>The customer is at the heart of our<br>unique business model, which includes<br>design.</p>
                <img src="https://i.postimg.cc/Nj9dgJ98/cards.png" alt="cards">
            </div>
            <div class="content_2">
                <h4>SHOPPING</h4>
                <a href="#sellers">Clothing Store</a>
                <a href="#sellers">Trending Shoes</a>
                <a href="#sellers">Accessories</a>
                <a href="#sellers">Sale</a>
            </div>
            <div class="content_3">
                <h4>SHOPPING</h4>
                <a href="./contact.html">Contact Us</a>
                <a href="https://payment-method-sb.netlify.app/" target="_blank">Payment Method</a>
                <a href="https://delivery-status-sb.netlify.app/" target="_blank">Delivery</a>
                <a href="https://codepen.io/sandeshbodake/full/Jexxrv" target="_blank">Return and Exchange</a>
            </div>
            <div class="content_4">
                <h4>NEWLETTER</h4>
                <p>Be the first to know about new<br>arrivals, look books, sales & promos!</p>
                <div class="f-mail">
                    <input type="email" placeholder="Your Email">
                    <i class='bx bx-envelope'></i>
                </div>
                <hr>
            </div>
        </div>
        <div class="f-design">
            <div class="f-design-txt container">
                <p>Design and Code by code.sanket</p>
            </div>
        </div>
    </footer>
</body>