<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid blog-bg img-responsive "> <!--Key Image--> 
    <div class="container posts-tagline"> 
    <!--key img and tagline container -->
    <!--Div that holds the content in the middle of the page-->
        <h1 class="posts-title"> Posts </h1>
    <h2 class="blog-tagline  text-center"> Find out about the latest insights into the Batavia! </h2>
    
    <!--the main tag line-->

</div>
    </section> 

<!--key img and tagline container -->
    <section class="container-fluid posts-bg">  <!--Posts-->
    <div class="container">  <!--Posts Container--
   
        
  <div class="row"> <!--Exhibit Row-->
    <div class="col-md-8"> <!--New Exhibit Col-->
        
        
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=22');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 22 get thet title and content
?>
<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4> 
<div><p class="post-para"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
      
      
      
      
      </div> <!--New Exhibit Col-->
      
    <div class="col-md-4"> <!--New Exhibit Col Img-->
      <img class="post-imgs" src="images/new-exhibit.jpg" alt="ship at exhibit">
      </div> <!--!--New Exhibit Col Img-->-->
  </div> <!--Exhibit Row-->
        <h3 class="post-titles"> Older Posts</h3>
 <div class="row older-posts"> <!--!--Older posts row-->-->
    <div class="col-md-8"> <!--Weapons Col-->
        
        
        <h4 class="post-old"> What weapons were used? </h4>
            <p class="post-para-old"> Times are tough when it's everyone out on the wild sea. How did these seafarers defend themselves against others and the vast terrors in the wide embrace of the sea?</p>
        <h4 class="read-more"> Read More</h4>
      
      
      
      
      </div> <!--Weapons Col-->
    <div class="col-md-4"> <!--Cannon image-->
      <img class="post-imgs" src="images/cannon.jpg" alt="cannon">
      </div> <!--Cannon image-->
  </div> <!--Older posts row-->

        <div class="row"> <!--!--Row-->--
    <div class="col-md-8 material-col"> <!--Delving into the material col-->
        
        
        <h4 class="post-old"> Delving into the material </h4>
            <p class="post-para-old"> Find out exactly what materials they used on these ships, with some of the common uses ranging from a variety of things including bandaging...</p>
        <h4 class="read-more"> Read More</h4>
      
      
      
      
      </div> <!--Delving into the material col-->
    <div class="col-md-4 material-col "> <!--Materials Col-->
      <img  class="post-imgs" src="images/materials.jpg" alt="materials">
      </div> <!--Materials Col-->
  </div> <!--Row-->
        </div> <!--Posts Container-->
    </section> <!--Posts-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>