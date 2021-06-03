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
    <div class="container">  <!--Posts Container-->
<?php $post_id = 1043;
$queried_post = get_post($post_id);?>
<h3 class="post-titles"><?php echo $queried_post->post_title; ?></h3>
       
        <div class="row"> <!--Exhibit Row-->
    
        
        
<div class="col-md-8">
<?php $post_id = 895;
$queried_post = get_post($post_id);?>
<h4 class="post-new"><?php echo $queried_post->post_title; ?></h4>
<p class="post-para"><?php the_content() ?>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="read-more" href="'.get_permalink($queried_post).'"><br>Read More</a>';?>                      

                </div>
      
      
      
     
      
    <div class="col-md-4 post-imgs "> 
     <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?><!--New Exhibit Col Img-->
      
      </div> <!--!--New Exhibit Col Img-->
  </div> <!--Exhibit Row-->
        
 <div class="row older-posts"> <!--!--Older posts row-->-->

    <div class="col-md-8"> <!--Weapons Col-->
<h3 class="post-titles"> Older Posts</h3>
<?php $post_id = 927;
$queried_post = get_post($post_id);?>
<h4 class="post-old"><?php echo $queried_post->post_title; ?></h4>
<p class="post-para"><?php the_content() ?>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="read-more" href="'.get_permalink($queried_post).'"><br>Read More</a>';?>
            
      </div>
      
      

      
    <div class="col-md-4">
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive text-center post-img')); ?> <!--Cannon image-->
      
      </div> <!--Cannon image-->
   <!--Older posts row-->

        <div class="row"> <!--!--Row-->--
    <div class="col-md-8 material-col"> <!--Delving into the material col-->
        
<?php $post_id = 985;
$queried_post = get_post($post_id);?>

<h4 class="post-old"><?php echo $queried_post->post_title; ?></h4>
<p class="post-para-old"><?php the_content() ?>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="read-more" href="'.get_permalink($queried_post).'"><br>Read More</a>';?>
      
      
      </div> <!--Delving into the material col-->
    <div class="col-md-4 material-col "> <!--Materials Col-->
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive text-center post-img')); ?> <!--Cannon image-->
</div> <!--Materials Col-->
  </div> <!--Row-->
        </div> <!--Posts Container-->
        </div>
      
    
     
      
    </section> <!--Posts-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>