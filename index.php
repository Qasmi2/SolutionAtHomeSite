<?php get_header(); ?>
<!--===================================================
        Loop for post 
===================================================-->
<?php   // starting if statement 
        if (have_posts()):
            // starting While loop                                                               
            while (have_posts()):the_post();  
?>               <!-- get Post title  -->
                 <h1><a href="<?php the_permalink();?>"> <?php the_title();?></a></h1>
                 <small> posted On : <?php the_time('F j,Y');?> at <?php the_time('g:i a')?>  <?php the_category();?></small>
                
<?php             // get post content 
                  the_content();               
?>                <hr/>
      
<?php       endwhile;
            // Ending while loop
           
              else:
                echo "<p> Content are not Found --- ! </p>";
 
        endif; 
        // Ending if statement 
?>
        

<?php get_footer(); ?>