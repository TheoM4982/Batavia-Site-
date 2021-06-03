<?php
    /*
    Template Name: Services page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<section class="container-fluid exhibit-bg img-responsive "> <!--Key Image--> 
    <div class="container "> 
    <!--key img and tagline container -->

    <h2 class="exhibitinfo-tagline  text-center"><?php the_field('exhibitinfotagline'); ?></h2>
    
    <!--the main tag line-->

</div>
    </section> 

<!--key img and tagline container services section -->
    <section class="container-fluid history-bg"><!-- Key img bg-->
    <div class="container"> 
    
    <h3 class="history-title"><?php the_field('historytitle'); ?></h3>
       <p class="history-para text-center"><?php the_field('historypara'); ?></p>
        
        
  <div class="row history-row">
    <div class="col-md-6 history-list">
        
        
        <ul> 
            <li><em><?php the_field('history'); ?></em></li>
            <li><em><?php the_field('context'); ?></em></li>
            <li><em><?php the_field('adventure'); ?></em></li>
        </ul>
      
      
      
      
      </div>
    <div class="col-md-6" id="booknow"> <!-- Booking Button-->
     
     <h2 class="historybtn-above " id="booknow"><?php the_field('booknow'); ?></h2>
     <div class="history-btn btn btn-md text-center"> 
        <!--Button-->
        <a href="#" class="btn-text"> <strong>Book Now! </strong> </a>
        </div>

    </div><!-- Booking Button-->
     
      
      </div>
  </div>
    </section>
       
       
       
       <section class="container-fluid img-responsive detailsbg" id="contact"> <!--Details container -->
    
   <div class="container"> <!--Container -->
  <div class="row"> <!--Row-->

  <div class="row"> <!--Row-->
      
    <div class="col-md-4 text-center"> <!--Left col details-->
        <h1 class="text-center tour-details"><?php the_field('tourtitle'); ?></h1>
       <h2 class="text-center details-titles"><strong><u><?php the_field('when'); ?></u></strong></h2>
        
        <p class=" details-para-left"><?php the_field('whendetails'); ?></p>
       <img src="http://206.189.45.97/~mesh16/wp-content/themes/Batavia-Site-/images/frontofmuseum.jpg" alt="Front of Museum">
       
        
    </div> <!--Left col details--> 
      
      <div class="col-md-4 map"> <!--Embed Google Maps-->
          
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.4403716984193!2d115.74053151516395!3d-32.05733598119534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a171ad35d0b3%3A0xcd18ab60710a3de8!2sWA%20Shipwrecks%20Museum!5e0!3m2!1sen!2sau!4v1622522851231!5m2!1sen!2sau" width="280" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
          
          
      </div> <!--Embed google maps--> 
      
      <div class="col-md-4 details-col-right"> <!--Details col-->
          
      <h2 class="text-center details-titles-right"><strong><u><?php the_field('openinghrs'); ?></u></strong> </h2>
        
          <p class=" details-para-right"><?php the_field('opening'); ?></p>
          <h2 class="text-center details-titles-right"><strong><u><?php the_field('where'); ?></u></strong></h2>
        
      <p class=" details-para-right"><?php the_field('location'); ?>
          <h2 class="text-center details-titles-right"><strong><u><?php the_field('contact'); ?></u></strong></h2>
        
        <p class=" details-para-right"><?php the_field('number'); ?>
            <a class="link details-para-right" href="mailto:info@washipwrecksmuseum.com.au"> <em><?php the_field('email'); ?> </em> </a> </p>

      </div> <!--Details Col-->
   
  </div> <!--Row-->

</div> <!--Row-->
 
    </div>  <!--Container -->
    </section> <!--Details container -->

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>