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
            <a href="<?php the_field('taglinebutton'); ?>"class="btn-text  "> <strong> Discover More </strong> </a> <!--custom field for the button link-->

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
            <h3 class="whats-on-title"><?php the_field('whatsontitle'); ?></h3> <!--custom field for the title of what's on-->
        </div>
        <!--Title -->

        <div class="row text-align-justify">
            <!--Row-->
            <div class="col-md-4  ">
                <!--New Exhibit Column-->
                <h4 class="whats-on-subtitles"> <img src="http://206.189.45.97/~mesh16/wp-content/themes/Batavia-Site-/images/red-square.png" alt="Red Square"><?php the_field('newexhibittitle'); ?></h4> <!--Custom field for the title of new exhibit-->
                <div class="paragraph whats-on-para">
                    <!--New Exhibit Paragraph-->

                    <p><?php the_field('whatsonpara'); ?></p>
                </div>
                <!--New Exhibit Paragraph-->

            </div>
            <!--New Exhibit Column-->

            <div class="col-md-4 pull-img image-center">
                <!--Image and pull quote -->
<img src="http://206.189.45.97/~mesh16/wp-content/themes/Batavia-Site-/images/whatson.jpg" class="center" alt="Ship Anchor">

                <div class="text-block">
                    <!--Pull quote-->

                    <p class="pull-quote"><?php the_field('pullquote'); ?></p>

                </div>
                <!--Pull quote-->

            </div>
            <!--Image and pull quote -->


            <div class="col-md-4 ">
                <!--Tour bookings column-->

                <h4 class="whats-on-subtitles"> <img src="http://206.189.45.97/~mesh16/wp-content/themes/Batavia-Site-/images/red-square.png" alt="red square"><?php the_field('tourbookings'); ?></h4>
                <div class="paragraph whats-on-para ">
                    <!--Paragraph-->
                    <p><?php the_field('whatsonpara1'); ?></p>

                </div>
                <!--Paragraph-->
                <div class="whatson-btn " button type="button">
                    <!--Button-->
<h1 class="btn-text"><?php the_field('discovermore'); ?></h1>

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
    <h1 class="text-center testimonials-title"><?php the_field('testimonialstitle'); ?></h1>
    <div class="container">
        <div class="row">

            <div class="row">

                <div class="col-md-4">
                    <!--Belinda quote-->

                    <p class="testimonials-text"><?php the_field('testpara'); ?></p>
                    <h2 class="testimonials-names"><?php the_field('testname1'); ?></h2>
                </div>
                <!--Belinda quote-->

                <div class="col-md-4">
                    <!--Steve quote-->

                    <p class="testimonials-text"><?php the_field('testpara1'); ?></p>
                    <h2 class="testimonials-names"><?php the_field('testname2'); ?></h2>
                </div>
                <!--Steve quote-->

                <div class="col-md-4">
                    <!--Greg quote-->

                    <p class="testimonials-text"><?php the_field('testpara2'); ?></p>
                    <h2 class="testimonials-names"><?php the_field('testname3'); ?></h2>
                </div>
                <!--Greg quote-->

            </div>

        </div>

    </div>
</section>
<!--Testimonials -->


<section class="container-fluid  location">
    <!--Location -->
    <h1 class="text-center location-title"><?php the_field('locationtitle'); ?></h1>
    <div class="container">
        <!--Container -->
        <div class="row">

            <div class="row">

                <div class="col-md-4">
                    <!--Address and Contact-->

                    <p class="museum-details"><?php the_field('address'); ?><strong> </strong> <em> </em></p>
                    <p class="museum-details"><?php the_field('open'); ?></p>
                    <p class="museum-details"><?php the_field('phone'); ?></p>
                </div>
                <!--Address and Contact-->

                <div class="col-md-4 ;">
                    <!--Location Image -->
                     <img src="http://206.189.45.97/~mesh16/wp-content/uploads/location-img.png" class="location-img" alt="Front of Museum">
                    


                </div>
                <!--Location Image -->

                <div class="col-md-4 text-center">
                    <!--Greg quote-->
                    <p> <em> Located right on the edge of Fremantle </em>


                    </p>
                    <p> <em> Right next to Bather’s Beach and Notre Dame University </em>
                    </p>
                    <div class="directions-btn text-center" button type="button">

                        <!--Button--> 
                        <a href="<?php the_field('directionsbuttonlink'); ?>" class="btn-text"><strong>Directions</strong> </a>
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