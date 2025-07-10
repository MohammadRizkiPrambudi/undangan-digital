<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome linkup  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Nikah Kuy</title>
    <!-- Fav Icon Link  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/journey savior.png') }}" type="image/x-icon">
    <!-- External Style Sheet Link Up  -->
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <!-- External Responsive Related Style Sheet Link Up  -->
    <link rel="stylesheet" href="{{ asset('assets/styles/responsive.css') }}">
</head>

<body>
    <header class="container">
        <!-- Header Navigation Menu  -->
        <nav>
            <!-- nav logo box  -->
            <div class="nav_logo_box">
                {{-- <img src="{{ asset('assets/images/journey savior.png') }}" alt="Journey Savior"> --}}
                <h2>Nikah<span class="savior">Kuy</span></h2>
            </div>
            <!-- nav menu box  -->
            <div class="nav_menu_box">
                <ul>
                    <li><a id="Home_Menu" href="#">Home</a></li>
                    <li><a href="{{ route('Home_Menu') }}#katalog">Katalog</a></li>
                    <li><a href="{{ route('Home_Menu') }}#testimonial">Testimonial</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                    <li>
                        <a href="{{ route('login') }}" class="login-btn">
                         <i class="fa-solid fa-right-to-bracket"></i> Login
                         </a>
                     </li>
                </ul>
                <!-- Mobile Devices Responsive Bars  -->
                <span class="bars"><i class="fa-solid fa-bars"></i></span>
            </div>
        </nav>
        <!-- Banner Section  -->
        <div class="banner">
            <div class="banner_content_box">
                <h1>Nikah Kuy</h1>
                <p>Undangan Digital, Cerita Cinta yang Dibagikan</p>
            </div>
            <div class="banner_input_box">
                <div class="btn find_now"><i class="fa-brands fa-whatsapp"></i><button class="find_btn">Pesan
                        Sekarang</button></div>
            </div>
        </div>
    </header>
    <main class="container">
        <!-- Our Popular Tours Section  -->
        <section>
            <div class="popular_tours_parent">
            </div>
        </section>
        <!-- Why Choose Us Section  -->
        <section id="katalog">
            <div class="why_choose_us_parent">
                <div class="content-box">
                    <h1>Katalog</h1>
                    <p>Pilihan Tema Undangan Digital</p>
                </div>
                <div class="hotels_and_service">

                    <div class="hotel">
                        <img src="{{ asset('assets/images/undangan 1.png') }}">
                        <h3>Tema Undangan 1</h3>
                        <p>Rp. 50.000</p>
                        <div class="btn find_now">
                            <button class="find_btn">
                                Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Deals and Discount Section  -->
        <section>
            <div class="deals_and_discount_parent">
                <div class="discount_content_box">
                    <h2>Deals & Discounts</h2>
                    <p>Unlock incredible savings with Journey Savior's exclusive Deals & Discounts. Elevate your travel
                        experience
                        without
                        breaking the bank. Discover affordable luxury and unforgettable adventures with us</p>
                </div>
                <div id="banner_1" class="discount_banner">
                    <div class="discount_cart" id="discount_cart-1">
                        <div class="cart_header">
                            <div>
                                <img src="{{ asset('images/timer.png') }}" alt=""><span>7 Day / 6 Night</span>
                            </div>
                            <div>
                                <img src="{{ asset('images/persons.png') }}" alt=""><span>Max : 10</span>
                            </div>
                            <div>
                                <img src="{{ asset('images/location.png') }}" alt=""><span>Malaysia</span>
                            </div>
                        </div>
                        <div class="cart_content">
                            <h2>Grand Canyon</h2>
                            <p>Visit the awe-inspiring Grand Canyon, a natural wonder that leaves visitors breathless.
                                Explore the
                                historic beauty of
                                Rome's Colosseum and relax on Bali's stunning beaches. Unforgettable adventures await.
                            </p>
                            <h3>Price: $1300-$1500</h3>
                            <button class="btn" id="discount_btn_1">Book Now</button>
                        </div>
                    </div>
                </div>
                <div id="banner_2" class="discount_banner">
                    <div class="discount_cart" id="discount_cart-2">
                        <div class="cart_header">
                            <div>
                                <img src="{{ asset('images/timer.png') }}" alt=""><span>7 Day / 6 Night</span>
                            </div>
                            <div>
                                <img src="{{ asset('images/persons.png') }}" alt=""><span>Max : 10</span>
                            </div>
                            <div>
                                <img src="{{ asset('images/location.png') }}" alt=""><span>Malaysia</span>
                            </div>
                        </div>
                        <div class="cart_content">
                            <h2>Tour To Satorini</h2>
                            <p>Immerse yourself in the vibrant culture of Kyoto's ancient temples, witness the majesty
                                of Egypt's
                                pyramids. These iconic destinations promise unforgettable travel experiences..</p>
                            <h3>Price: $1300-$1500</h3>
                            <button class="btn">Book Now</button>
                        </div>
                    </div>
                </div>
                <div id="banner_3" class="discount_banner">
                    <div class="discount_cart" id="discount_cart-3">
                        <div class="cart_header">
                            <div>
                                <img src="{{ asset('images/timer.png') }}" alt=""><span>7 Day / 6
                                    Night</span>
                            </div>
                            <div>
                                <img src="{{ asset('images/persons.png') }}" alt=""><span>Max : 10</span>
                            </div>
                            <div>
                                <img src="{{ asset('images/location.png') }}" alt=""><span>Malaysia</span>
                            </div>
                        </div>
                        <div class="cart_content">
                            <h2>Fiordland</h2>
                            <p>New Zealand's Fiordland National Park and the
                                architectural marvels of Petra, these destinations captivate with their unique allure
                                and rich history.
                            </p>
                            <h3>Price: $1300-$1500</h3>
                            <button class="btn">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="btn_parent">
                    <button class="btn">See All Packages</button>
                </div>
            </div>
        </section>
        <!-- Simple Perfect Place Section  -->
        <section>
            <div class="perfect_place_parent">
                <div class="perfect_place_content_box">
                    <h1>A Simple Perfect Place To Get Lost</h1>
                    <p>Bandarban, Bangladesh, epitomizes the phrase 'A Simple Perfect Place To Get Lost.' Nestled amid
                        lush hills
                        and tribal
                        communities, it invites wanderers to discover tranquility, culture, and breathtaking landscapes.
                    </p>
                    <ul>
                        <li>Nestled amid lush hills and tribal
                            communities, it invites wanderers to discover tranquility, culture, and breathtaking
                            landscapes</li>
                        <li>In the heart of Bangladesh lies Bandarban, the epitome of simplicity and serenity, beckoning
                            adventurers
                            to get lost in
                            its natural beauty, tribal charm, and picturesque landscapes</li>
                    </ul>
                    <button class="btn">See More</button>
                </div>
                <div class="perfect_place_video">
                    <video src="{{ asset('video/bd_mountain.mp4') }}" poster="images/mountain_banner.png"
                        controls></video>
                    <h3>Watch Our Mountain in Bangladesh</h3>
                </div>
            </div>
        </section>
        <!-- Our Review Section  -->
        <section id="testimonial">
            <div class="reviews_parent">
                <div class="reviews_content_box">
                    <h2>Testimonial</h2>
                    <p>Rattings From Customers For Us</p>
                </div>
                <div class="review_box_parent">
                    <div class="reviw_box">
                        <div class="review_img_box">
                            <div><img src="{{ asset('images/p1.jpg') }}" alt=""></div>
                        </div>
                        <div class="review_content_box">
                            <h2>Name: Hasnat</h2>
                            <h3>From: Denmark</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="reviw_box">
                        <div class="review_img_box">
                            <div><img src="{{ asset('images/p2.jpg') }}" alt=""></div>
                        </div>
                        <div class="review_content_box">
                            <h2>Name: Hasnat</h2>
                            <h3>From: Denmark</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="reviw_box">
                        <div class="review_img_box">
                            <div><img src="{{ asset('images/p3.jpg') }}" alt=""></div>
                        </div>
                        <div class="review_content_box">
                            <h2>Name: Hasnat</h2>
                            <h3>From: Denmark</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="reviw_box">
                        <div class="review_img_box">
                            <div><img src="{{ asset('images/p4.jpg') }}" alt=""></div>
                        </div>
                        <div class="review_content_box">
                            <h2>Name: Hasnat</h2>
                            <h3>From: Denmark</h3>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Newsletter Section  -->
        <section>
            <div class="newsletter_parent">
                <div class="newsletter_form">
                    <h2>Newsletter</h2>
                    <p>Get your daily dose of travel news & tips. Sign up today!</p>
                    <form action="">
                        <input type="text" placeholder="Enter Your Name:">
                        <input type="email" placeholder="Enter Your Email:">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>
                <div class="newsletter_img_box">
                    <img src="{{ asset('images/newsletter.png') }}" alt="">
                    <div class="save_card">
                        <span>journeysavior.com</span>
                        <p>Save Up To 70%</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer Section  -->
    <footer class="">
        <div class="footer_parent container">
            <div class="footer_title">
                <img src="{{ asset('images/journey savior.png') }}" alt="">
                <h2>Journey <span>Savior</span></h2>
            </div>
            <div class="footer_para">
                <p class="f-p">Journey Savior, your premier traveling platform, is a gateway to seamless adventures.
                    With
                    curated
                    experiences, expert
                    guidance, and unbeatable prices, we redefine travel, ensuring every journey is memorable and
                    worry-free.</p>
            </div>
        </div>
        <div class="social_media">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
        </div>
        <div class="hr-line"></div>
        <div class="copy_right">
            <span>&copy; {{ Date('Y') }}. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>
