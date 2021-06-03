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
query_posts('cat=22');//look for posts that have the category of 22
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 22 get thet title and content
?>
<h4 class="post-new"><?php the_title();?></h4> 
<div><p class="post-para"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
      
      
      
      
      </div> <!--New Exhibit Col-->
      
    <div class="col-md-4"> <!--New Exhibit Col Img-->
      
      </div> <!--!--New Exhibit Col Img-->-->
  </div> <!--Exhibit Row-->
        <h3 class="post-titles"> Older Posts</h3>
 <div class="row older-posts"> <!--!--Older posts row-->-->
    <div class="col-md-8"> <!--Weapons Col-->
        
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=21');//look for posts that have the category of 22
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 22 get thet title and content
?>
<h4 class="post-old"><?php the_title();?></h4> 
<div><p class="post-para"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
      
      
      

      
    <div class="col-md-4"> <!--Cannon image-->
      
      </div> <!--Cannon image-->
  </div> <!--Older posts row-->

        <div class="row"> <!--!--Row-->--
    <div class="col-md-8 material-col"> <!--Delving into the material col-->
        
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=26');//look for posts that have the category of 26
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 26 get thet title and content
?>
<h4 class="post-old"><?php the_title();?></h4>
<div><p class="post-para-old"><?php the_content() ?></p></div>
<h4 class="read-more"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
<?php
endwhile;
endif;
wp_reset_query();?>
      
      
      
      </div> <!--Delving into the material col-->
    <div class="col-md-4 material-col "> <!--Materials Col-->
      
      </div> <!--Materials Col-->
  </div> <!--Row-->
        </div> <!--Posts Container-->
    </section> <!--Posts-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>