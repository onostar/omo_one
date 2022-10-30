<?php
    session_start();
    include "controller/connections.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Omo-one Apartments is a one of a kind luxurious resort in the city of Benin built for your relaxation. lodging and enjoyment.">
    <meta name="keyword" content="omo-one apartments, omo-one, omo one apartments, omo one, ome 1, omoe 1 apartments, lodging, accomodation, hotels, hotel, luxury, suites, lounge, swimming pool, bar, restaurant" />
	<meta name="author" content=""/>
	<meta name="og:url" property="og:url" content="https://">
    <meta name="og:type "property="og:type" content="website">
    <meta name="og:title" property="og:title" content="" />
    <meta name="og:site_name" property="og:site_name" content="" />
    <meta name="og:description" property="og:description" content="Omo-one Apartments is a one of a kind luxurious resort in the city of Benin built for your relaxation and enjoyment ">
    <meta name="og:image" property="og:image" itemprop="image" content="images/logo.jpg">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <title>Welcome to Omo-One Apartments</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="icon" href="images/logo.jpeg" type="image/png" size="32X32">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div> -->
    <!-- <div class="main"> -->
    <section class="top_head" id="topHeader">
        <div class="social_media">
            <p>
                <span>Call us </span>(+234) 903 057 0863
            </p>
            <p>
                info@omo-one.com
            </p>
        </div>
        <div class="contact_phone">
            <ul>
                <li><a href="javascript:void(0);" class="showRequest">Book a room</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="javascript:void(0);">Pay Bills</a></li>
                <li><a href="javascript:void(0);">News Updates</a></li>
            </ul>
        </div>
    </section>
    <section id="banner">
        <header id="mainHeader" class="main_header">
            <h1>
                <a href="index.php">
                    <img src="images/logo.jpeg" alt="logo">
                </a>
            </h1>
            <nav id="navigation">
                <ul>
                    <li><a href="about.php" title="who we are"><i class="fas fa-users"></i>About us</a></li>
                    <li>
                        <a href="#rooms" title="Our rooms"><i class="fa-solid fa-bed"></i>Rooms</a>
                        
                    </li>
                    <li><a href="gallery.php" title="Photos and media"><i class="fa-solid fa-photo-video"></i>Gallery</a></li>
                    <!-- <li><a href="projects.html" title="Our work"><i class="fa-solid fa-helmet-safety"></i>Projects</a></li> -->
                    <li><a href="contact.php" title="Contact us"><i class="fa-solid fa-headset"></i> Contact us</a></li>
                    <!-- <li><a href="blog.html" title="Job recruitment">Our Blog</a></li> -->
                    <li id="login"><a href="javascript:void(0)" class="showRequest" title="Make room reservations"><i class="fas fa-calendar-check"></i> Reservation</a></li>
                </ul>
            </nav>
            <div class="quote">
                <a href="javascript:void(0)" class="showRequest" title="Make reservations">Reservation <i class="fas fa-sign-in-alt"></i></a>
            </div>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        <div id="slider">
            <div class="slides">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/photo14.jpeg" alt="banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Welcome to Omo-One Apartments</h2>
                            <p>A home away from home</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Discover more <i class="fas fa-info"></i></a>
                                <a href="#rooms">Our rooms <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/sitting_room.jpeg" alt="Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Experience the difference </h2>
                            <p>Welcome to an oasis of luxury & tranquility</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a class="showRequest" href="javascript:void(0)">Make reservation <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <picture>
                            <source media="(max-width:800px)" srcset="images/bed_room3.jpeg">
                            <img src="images/photo1.jpeg" alt="hotel banner">
                        </picture>
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>We focus on comfort and quality</h2>
                            <p>There’s no better way to start your day than waking up at Omo-one</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a class="showRequest" href="javascript:void(0)">Book a room <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
            
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <main>
        <section id="bookings">
            <form method="POST">
                <div class="data">
                    <label for="checkIn">Check in</label>
                    <input type="date" name="check_in" id="check_in" required>
                </div>
                <div class="data">
                    <label for="checkOut">Check out</label>
                    <input type="date" name="check_out" id="check_out" required>
                </div>
                <div class="data">
                    <label for="checkOut">Select room</label>
                    <select name="room" id="room">
                        <option value=""selected>Select Room type</option>
                        <option value="Single room">Single room (₦20,000)</option>
                        <option value="Apartment">Apartment (₦120,000)</option>
                    </select>
                </div>
                <div class="data">
                    <button id="availability">Check Availability <i class="fas fa-check-double"></i></button>
                </div>
            </form>
        </section>
        <!-- about page -->
        <section id="about_us">
            <div class="about_banner">
                <div class="banner_img">
                    <img src="images/photo2.jpeg" alt="omo-one apartment">

                </div>
                <div class="clients">
                    <div class="client_icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>100+</h3>
                    <p>Happy Guests</p>
                </div>
            </div>
            <div class="about_text">
                <h3>Where luxury meets comfort, customer satisfaction a philosophy</h3>
                <h2>We Invite guests to
                    celebrate life</h2>
                <div class="notes">
                    <div class="notes_1">
                        <p>Imagine a utopia where all of your wishes are granted and all of your desires are satisfied. From our magnificent swimming pools, lounges and bar to our sophisticated rooms, Pmp-one offers unrivalled luxury. </p><br>
                        <p>In this luxurious getaway, no expense has been spared. Our contemporary luxury Apartment can accommodate more than 10 guests at a time. From the grandness of the Great Rooms to the customised tranquillity of each suite, there's something for everyone.
                        <br>
                       <!--  Our upstream business combines technological and environmentally-friendly innovations and the effective use of technology to maximize mature fields, discover new resources and meet the world’s growing demand for energy --></p>
                        <a href="about.php"class="about_btn">Read more <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <div class="notes_2">
                        <p>You will receive special privileges and perks across many parts of our apartment. Here is what we offers every time you stay with us:</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Reliability and performance</li>
                            <li><i class="fas fa-check"></i> Dedicated Staffs</li>
                            <li><i class="fas fa-check"></i> Convenient Location</li>
                            <li><i class="fas fa-check"></i> Indoor Lounge/bar</li>
                            <li><i class="fas fa-check"></i> Restaurant with special Cuisines</li>
                            <li><i class="fas fa-check"></i> Non-stop entertainment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- video -->
        <section id="video_story">
            <video src="images/omo_one_vid.mp4" poster="images/omo_one.jpeg"controls></video>
        </section>
       
        <!-- amenities -->
        <section id="amenities">
            <h3>Amenities</h3>
            <hr>
            <h2>Make Your Stay Memorable</h2>
            <div class="amenities">
                <div class="offer">
                    <i class="fas fa-wifi"></i></i>
                    <div class="offer_info">
                        <h4>Free wifi</h4>
                        <p>We have high speed internet service availabe to all our guest free</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-swimming-pool"></i></i>
                    <div class="offer_info">
                        <h4>Swimming Pool</h4>
                        <p>Experience our luxurious swimming pool with Side bars and Music</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-tv-alt"></i></i>
                    <div class="offer_info">
                        <h4>Smart Tv</h4>
                        <p>Watch the best of sports, movies, sports, Netflix, youtube, etc.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-car"></i></i>
                    <div class="offer_info">
                        <h4>Pick & Drop Facility</h4>
                        <p>Enjoy our finest pick up and delivery service</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-coffee"></i></i>
                    <div class="offer_info">
                        <h4>Complementary Breakfast</h4>
                        <p>Our Guests are entitle to a classic breakfast cuisine, each morning.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-bath"></i></i>
                    <div class="offer_info">
                        <h4>Shower & bathtub</h4>
                        <p>Our bathroom is designed with classic bathtubs and showers for your comfort</p>
                    </div>
                </div>
            </div>
        </section>
         <!-- introduction of new branch -->
         <section id="investment" class="new_vidz">
            <div class="intro">
                <p>Now available for booking</p>
                <h2>Omo-one Apartments, Etete</h2>
                <p>Omo-one Apartments has extended its business of hospitality and comfortability to etete, GRA Benin city. With increased security, comfort, and relaxation.<br> Visit is us now at Mabel Erewa crescent, Etete, GRA Benin city, Edo state</p>
                <a href="contact.php">Visit us <i class="fa-solid fa-headset"></i></a>
            </div>
            <div class="invest_img" id="hero2">
                <video src="images/omo_one_etete.mp4" poster="images/omo_one5.jpeg"controls></video>

            </div>
        </section>
        <!-- why choose us -->
        <section id="why_choose">
            <div class="reasons">
                <h3 id="this">Why choose us</h3>
                <h2>We raise the bar in hotel hospitality</h2>
                <div class="all_reasons">
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Best Customer Service</h3>
                            <p>With over 20 staffs, we offer qulaity of service to all our guest at all times</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-broadcast-tower"></i>
                        </div>
                        <div class="reason_note">
                            <h3>24/7 Uniterrupted power</h3>
                            <p>We provided uniterrupted power supply 24 hours on a daily basis</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="reason_note">
                            <h3>End-to-End services</h3>
                            <p>From non-stop music, to swimming pools, lounge and 24/7 restaurant service</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our_service">
                <div class="service_box" id="box1">
                    <div class="service_img">
                        <img src="images/banner4.jpg" alt="omo-one">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-hotel"></i>
                        <h3>Comfort & Hospitality</h3>
                        <p>Experience hospitality at its peak</p>
                    </div>
                </div>
                <div class="service_box">
                    <div class="service_img">
                        <img src="images/photo10.jpeg" alt="omo-one">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-hotel"></i>
                        <h3>Comfort & Hospitality</h3>
                        <p>Experience hospitality at its peak</p>
                    </div>
                </div>
                <div class="service_box" id="box3">
                    <div class="service_img">
                        <img src="images/photo13.jpeg" alt="omo-one">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-building"></i>
                        <h3>Relaxation</h3>
                        <p>24/7 Open Pool</p>
                    </div>
                </div>
                
                <div class="service_box" id="box4">
                    <div class="service_img">
                        <img src="images/banner4.jpg" alt="Omo-one">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-gopuram"></i>
                        <h3>Relaxation</h3>
                        <p>24/7 Open Pool</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- rooms -->
        <section id="rooms">
            <div class="rooms_intro">
                <div class="rooms_head">
                    <div class="hrh3">
                        <hr>
                        <h3>Accomodation</h3>
                    </div>
                    <h2>Room / Suits</h2>
                </div>
                <div class="rooms_head" id="head_note">
                    <p>Our hotel offers over 10 single rooms and Apartments from which you can choose from</p>
                    <a href="gallery.php" title="Photos of our rooms">View Gallery</a>
                </div>
            </div>
            <div class="rooms">
                <figure>
                    <a href="single_room.php" title="View room details">
                        <div class="room_img">
                            <img src="images/single_room2.jpeg" alt="Single room">
                        </div>
                        <figcaption>
                            <h3>Single room</h3>
                            <p>₦20,000 a Night</p>
                        </figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="apartments.php" title="View room details">
                        <div class="room_img">
                            <img src="images/sitting_room3.jpeg" alt="apartments">
                        </div>
                        <figcaption>
                            <h3>Apartment</h3>
                            <p>₦120,000 a Night</p>
                        </figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="single_room.php" title="View room details">
                        <div class="room_img">
                            <img src="images/single_room.jpeg" alt="Diamond room">

                        </div>
                        <figcaption>
                            <h3>Single room</h3>
                            <p>₦20,000 a Night</p>
                        </figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="apartments.php" title="View room details">
                        <div class="room_img">
                            <img src="images/photo6.jpeg" alt="Apartment">
                        </div>
                        <figcaption>
                            <h3>Apartment</h3>
                            <p>₦120,000 a Night</p>
                        </figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="apartments.php" title="View room details">
                        <div class="room_img">
                            <img src="images/sitting_room5.jpeg" alt="Apartments">
                        </div>
                        <figcaption>
                            <h3>Apartment</h3>
                            <p>₦120,000 a Night</p>
                        </figcaption>
                    </a>
                </figure>
            </div>
        </section>
        
        <!-- hero 2 -->
        <section class="investment">
            <div class="invest_img" id="invest_img1">
                <img src="images/photo12.jpeg" alt="restaurant">
                <img src="images/dinning2.jpeg" alt="restaurant">

            </div>
            <div class="intro" id="intro_add">
                <p>Classic restaurant</p>
                <h2>Indulge in exceptional local & foreign foods</h2>
                <p>Our restaurant is openeded daily from 7:30am to 11:00pm<br>We offer variety of meals from across the globe. Our world class chefs are available 24/7 to prepare your meal.</p>
                <a href="javascript:void(0)" class="showRequest">Make a booking <i class="fas fa-calendar-check"></i></a>
            </div>
        </section>
        <!--Partners -->
        <!-- <section id="partners">
            <h3>Our Partners</h3>
            <div class="partners">
                <figure>
                    <img src="images/partners_01_w.png" alt="partners">
                </figure>
                <figure>
                    <img src="images/partners_02_w.png" alt="partners">
                </figure>
                <figure>
                    <img src="images/partners_03_w.png" alt="partners">
                </figure>
                <figure>
                    <img src="images/partners_04_w.png" alt="partners">
                </figure>
                <figure>
                    <img src="images/partners_05_w.png" alt="partners">
                </figure>
            </div>
        </section> -->
        <!-- investment -->
        <section id="investment">
            <div class="intro">
                <p>Experience wellness</p>
                <h2>A truly luxurious
                    experience for
                    the senses</h2>
                <p>Our 24/7 Lounge & Bar is opened for your enjoyment with cool jamz and all types of drinks avialable at a very affordable rate.</p>
                <a href="contact.php">Visit us <i class="fa-solid fa-headset"></i></a>
            </div>
            <div class="invest_img" id="hero2">
                <img src="images/bar.jpg" alt="omo one">

            </div>
        </section>
        <!-- gallery -->
        <Section id="gallery">
            <h3 class="plans_title">Our Gallery</h3>
            <!-- <h2>Photos and media</h2> -->
            <p class="first_p">Discover some of our Exciting scenes</p>
            <div class="plans">
                <?php 
                    $get_photos = $connectdb->prepare("SELECT * FROM gallery ORDER BY post_date DESC LIMIT 8");
                    $get_photos->execute();
                    $photos = $get_photos->fetchAll();
                    foreach($photos as $photo):
                ?>
                <div class="plan_form">
                    <figure>
                        <div class="gallery_img">
                            <img src="<?php echo 'media/'.$photo->photo?>" alt="gallery">

                        </div>
                        <figcaption>
                            <h3><?php echo $photo->title?></h3>
                            
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach?>
                
                
                <a id="moreProjects" href="gallery.php" title="View more photos">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </Section>
        <!-- <section id="testimonies">
            <h2>Customer reviews</h2>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_01-540x518.jpg" alt="James Chester">
                        </div>
                        <div class="test_note">
                            <p>"I couldn’t be happier with the service I was provided. Everyone took ample time with me to ensure that my visit exceeded my expectations."</p>
                            <div class="testifier">
                                <img src="images/team_01-540x518.jpg" alt="testifier">
                                <span>- James Chester</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_02-540x518.jpg" alt="Andre Coleman morgans">
                        </div>
                        <div class="test_note">
                            <p>"We have used Bob and sil to provide services that our competitions cannot begin to offer. That has given us a decisive edge in our market. Now we can produce even more with sustainable energy"</p>
                            <div class="testifier">
                                <img src="images/team_02-540x518.jpg" alt="testifier">
                                <span>- Eddie Smith</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_03-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"We have been engaged with Bob and sil for several months now. They have been very responsive to all requests. Investing with Irecco has brought more financial value to us as a company as well as development."</p>
                            <div class="testifier">
                                <img src="images/team_03-540x518.jpg" alt="testifier">
                                <span>- Damian wilsbrock</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_04-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"Bob and SIl globale an excellent service, be it on a business or personal level.I found the company's various investment plans very helpful to the growth of my business and i am heading on a great path to finanncial freedom"</p>
                            <div class="testifier">
                                <img src="images/team_04-540x518.jpg" alt="testifier">
                                <span>- Sean Mendoz</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!-- hero -->
        <section id="hero">
            <div class="hero_image">
                <img src="images/pool3.jpeg" alt="hero image">
            </div>
            <div class="hero_notes">
                <div class="note">
                    <h3>50+</h3>
                    <p>Monthly Bookings</p>
                </div>
                <div class="note">
                    <h3>20+</h3>
                    <p>Visits daily</p>
                </div>
                <div class="note">
                    <h3>96%</h3>
                    <p>Positive Feedback</p>
                </div>
                <div class="note">
                    <h3>24/7</h3>
                    <p>Customer service support</p>
                </div>
            </div>
        </section>
        <!-- <section class="trends">
            <h2>News and Articles</h2>
            <hr>
            <div class="topics">
                <article>
                    <a href="javascript:void(0)">
                        <img src="images/banner5.jpg" alt="blog">
                        <div class="summary">
                            <h3>Benefits of a relaxed mind</h3>
                            <p>At windy hill relaxatio is key to every business man</p> <span>Read more...</span></p>
                        </div>
                    </a>
                </article>
                <article>
                    <a href="javascript:void(0)">
                        <img src="images/banner3.jpg" alt="blogs">
                        <div class="summary">
                            <h3>Finding the best resort</h3>
                            <p>With our very conducive environment, we provide high class <span>Read more...</span></p>
                        </div>
                    </a>
                </article>
            </div>
        </section> -->
    </main>
    <?php include "footer.php"?>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>