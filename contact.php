<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Omo-one Apartments is a one of a kind luxurious resort in the city of Benin built for your relaxation and enjoyment .">
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
    <title>Omo-One Apartments | Contact</title>
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
    <?php include "header.php"?>

        <div id="slider">
            <div class="about_banner">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/omo_one3.jpeg" alt="windy_hill">
                    </div>
                    <div class="taglines">
                        <h2>Contact us</h2>
                        <!-- <p>We bring exceptional care close to you. Consult a Doctor any time, any day.</p> -->
                        <!-- <div class="btns">
                            <a href="javascrip:void(0);" class="showRequest">Schedule an Appointment Now</a>
                            <a href="contact.html">Get a Quote</a>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <main>
        <section id="investment">
            
            <div class="intro" id="intro_title">
                <p>get in touch</p>
                <div class="add_info">
                    <i class="fas fa-street-view"></i>
                    <p>Visit us at #3 Edegbe Avenue, Off Elema Palace, GRA, Benin city Edo state</p>
                </div>
                <div class="add_info">
                    <i class="fas fa-phone"></i>
                    <p>You can also call us on these numbers:<br> +234 903 057 0863</p>
                </div>
                <div class="add_info">
                    <i class="fas fa-envelope"></i>
                    <p>Send us a mail at info@omo-one.com, contact@omo-one.com</p>
                </div>
            </div>
            <div class="invest_form">
                <form action="controller/contact_us.php" method="POST" id="contact_form">
                    <h3>Drop a message for any query</h3>
                    <div class="datas">
                        <label for="name">Full Name</label>
                        <input type="text" name="full_name" id="full_name" placeholder="Jonathan Taylor">
                    </div>
                    <div class="datas">
                        <label for="email">Email Address</label>
                        <input type="text" name="user_email" id="user_email" placeholder="example@mail.com">
                    </div>
                    <div class="datas">
                        <label for="phone">Phone No.</label>
                        <input type="tel" name="phone" id="phone" placeholder="+234701234567">
                    </div>
                    <div class="datas">
                        <label for="message">Your message</label>
                        <textarea name="message" id="message" cols="50" rows="10"></textarea>
                    </div>
                    <button type="submit" name="send_message" id="send_message">Send message <i class="fas fa-envelope"></i></button>
                </form>
            </div>
        </section>
        
    </main>
    <?php include "footer.php"?>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>