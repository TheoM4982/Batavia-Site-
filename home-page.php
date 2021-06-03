<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid ship-bg img-responsive ">
    <!--Key Image-->
    <div class="container tagline">
        <!--key img and tagline container -->
        <!--Div that holds the content in the middle of the page-->
<h1 class="tagline  text-center"><?php the_field('shiptagline'); ?></h1><!--  custom field for the shiptagline content-->
        <div class="main-btn  btn btn-lg ">
            <!--Button-->
            <a href="services.html" class="btn-text  "> <strong> Discover More </strong> </a>

        </div>
        <!--Button-->
        <!--the main tag line-->

    </div>
</section>

<!--key img and tagline container -->

<section class="container-fluid whats-on">
    <!--What's On Div -->
    <div class="container">

        <div class="text-center ">
            <!--Title -->
            <h3 class="whats-on-title"> </h3>
        </div>
        <!--Title -->

        <div class="row text-align-justify">
            <!--Row-->
            <div class="col-md-4  ">
                <!--New Exhibit Column-->
                <h4 class="whats-on-subtitles"> <img src="http://206.189.45.97/~mesh16/wp-content/themes/Batavia-Site-/images/red-square.png" alt="Red Square"> </h4>
                <div class="paragraph whats-on-para">
                    <!--New Exhibit Paragraph-->

                    <p> </p>
                </div>
                <!--New Exhibit Paragraph-->

            </div>
            <!--New Exhibit Column-->

            <div class="col-md-4 pull-img image-center">
                <!--Image and pull quote -->
                <img src=""class="center" alt="Ship Anchor">

                <div class="text-block ">
                    <!--Pull quote-->

                    <p class="pull-quote"> </p>

                </div>
                <!--Pull quote-->

            </div>
            <!--Image and pull quote -->


            <div class="col-md-4 ">
                <!--Tour bookings column-->

                <h4 class="whats-on-subtitles"> <img src="http://206.189.45.97/~mesh16/wp-content/themes/Batavia-Site-/images/red-square.png" alt="red square"> </h4>
                <div class="paragraph whats-on-para ">
                    <!--Paragraph-->
                    <p> </p>

                </div>
                <!--Paragraph-->
                <div class="whatson-btn " button type="button">
                    <!--Button-->
                    <h1 class="btn-text   "> <strong> </strong> </h1>

                </div>
                <!--Button-->
                <!--the main tag line-->

            </div>
            <!--Tour bookings column-->
        </div>
        <!--Row-->
    </div>
    <!--What's On Div -->
</section>

<section class="container-fluid img-responsive testimonials">
    <!--Testimonials -->
    <h1 class="text-center testimonials-title"> </h1>
    <div class="container">
        <div class="row">

            <div class="row">

                <div class="col-md-4">
                    <!--Belinda quote-->

                    <p class="testimonials-text"></p>
                    <h2 class="text-center testimonials-names"> </h2>
                </div>
                <!--Belinda quote-->

                <div class="col-md-4">
                    <!--Steve quote-->

                    <p class="testimonials-text"> </p>
                    <h2 class="text-center testimonials-names"></h2>
                </div>
                <!--Steve quote-->

                <div class="col-md-4">
                    <!--Greg quote-->

                    <p class="testimonials-text"> </p>
                    <h2 class="text-center testimonials-names"></h2>
                </div>
                <!--Greg quote-->

            </div>

        </div>

    </div>
</section>
<!--Testimonials -->


<section class="container-fluid  location">
    <!--Location -->
    <h1 class="text-center location-title"> </h1>
    <div class="container">
        <!--Container -->
        <div class="row">

            <div class="row">

                <div class="col-md-4">
                    <!--Address and Contact-->

                    <p class="museum-details"> <strong> </strong> <em> </em> </p>
                    <p class="museum-details"> <strong> </strong> <em> </em> </p>
                    <p class="museum-details"> <strong> </strong> </p>
                </div>
                <!--Address and Contact-->

                <div class="col-md-4 ;">
                    <!--Location Image -->
                    <img src="http://206.189.45.97/~mesh16/wp-content/themes/Batavia-Site-/images/location-img.png" class=" location-img" alt="Front of Museum">


                </div>
                <!--Location Image -->

                <div class="col-md-4 text-center">
                    <!--Greg quote-->
                    <p> <em> </em>


                    </p>
                    <p> <em> </em>
                    </p>
                    <div class="directions-btn text-center" button type="button">

                        <!--Button-->
                        <a href="https://www.google.com/maps/dir//47+Cliff+St,+Fremantle+WA+6160/@-32.0572338,115.7402089,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2a32a171b29aead5:0x90971f6b788b8166!2m2!1d115.7424029!2d-32.0572338" class="btn-text"> <strong></strong> </a>
                    </div>
                </div>
                <!--Button-->

            </div>
            <!--Greg quote-->

        </div>

    </div>

</section>
<!--Container -->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>