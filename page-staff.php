<?php

get_header();

// check if the repeater field has rows of data
if( have_rows('all_staff') ):
    
    // loop through the rows of data
    while ( have_rows('all_staff') ) : the_row();
    
    // display a sub field value
    ?>
    
<div class="x">
<?php
?>
       <h1 class="staff_name text-center ">  <?php the_sub_field('staff_member_name'); ?> </h1>
       <h3 class= "job_titles text-center ">   <?php the_sub_field('job_title'); ?>  
    </h3>
    
    <div class="flex-container"> 
        
        
        <img class= "flex-item rounded-circle" src= "<?php the_sub_field('staff_photo'); ?>" >
        
        <p class="info-container text-justify "> <?php the_sub_field('profile');?> </p>
        
    </div> 
    <?php
            
    ?>
    </div>
    <?php
        endwhile;
        
        else :
            
            // no rows found
            
            
            
        endif;
        
       
get_footer();



?>