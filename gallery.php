<?php
    require "controller/connections.php";
?>
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
    <title>Omo-One Apartments | Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="icon" href="images/logo.jpeg" type="image/png" size="32X32">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php include "header.php"?>
        <div id="slider">
            <div class="about_banner">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/omo_one5.jpeg" alt="windy_hill">
                    </div>
                    <div class="taglines">
                        <h2>Gallery</h2>
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
    <Section id="gallery">
            <h3 class="plans_title">Scenes and media</h3>
            <!-- <h2>Photos and media</h2> -->
            <!-- <p class="first_p">Discover some of our Exciting scenes</p> -->
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
            </div>
        </Section>
    </main>
    <?php include "footer.php"?>

    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>