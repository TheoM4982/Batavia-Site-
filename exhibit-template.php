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
    <h3 class="history-title"> Learn about the history of the Batavia!</h3>
       <p class="history-para text-center"> The Batavia was a chilling expedition which initially set out to arrive at the island of Batavia, but washed up on the shores of Western Australia instead…… discover the full story with a guided tour at the WA Shipwrecks Museum!</p>
        
        
  <div class="row history-row">
    <div class="col-md-6 history-list">
        
        
        <ul> 
        <li> <em>  The history... </em></li>
        <li> <em> The context... </em></li>
        <li> <em> The adventure... </em></li>
        </ul>
      
      
      
      
      </div>
    <div class="col-md-6" id="booknow"> <!-- Booking Button-->
     
     <h2 class="historybtn-above " id="booknow"> Find out more and book now!</h2>
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
        <h1 class="text-center tour-details"> Museum Tour Details</h1>
       <h2 class="text-center details-titles"> <strong> <u> When:  </u> </strong> </h2>
        
        <p class=" details-para-left"> from the 17th of May - 
the 23rd of Aug 2021</p>
       <img src="images/frontofmuseum.png" alt="Front of Museum">
       
        
    </div> <!--Left col details--> 
      
      <div class="col-md-4 map"> <!--Embed Google Maps-->
          
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.4403716984193!2d115.74053151516395!3d-32.05733598119534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a171ad35d0b3%3A0xcd18ab60710a3de8!2sWA%20Shipwrecks%20Museum!5e0!3m2!1sen!2sau!4v1622522851231!5m2!1sen!2sau" width="280" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
          
          
      </div> <!--Embed google maps--> 
      
      <div class="col-md-4 details-col-right"> <!--Details col-->
          
      <h2 class="text-center details-titles-right"> <strong> <u> Opening Hours:  </u> </strong> </h2>
        
          <p class=" details-para-right"> Mon-Fri <br> 9:30AM-5:30PM </p>
          <h2 class="text-center details-titles-right"> <strong> <u> Where:  </u> </strong> </h2>
        
      <p class=" details-para-right">64 Cliff St, <br> 
Fremantle, WA, 6160 </p>
          <h2 class="text-center details-titles-right"> <strong> <u> Contact:  </u> </strong> </h2>
        
        <p class=" details-para-right">  1300 134 081 <br> 
            <a class="link details-para-right" href="mailto:info@washipwrecksmuseum.com.au"> <em>info@washipwrecksmuseum.com.au  </em> </a> </p>

      </div> <!--Details Col-->
   
  </div> <!--Row-->

</div> <!--Row-->
 
    </div>  <!--Container -->
    </section> <!--Details container -->

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>