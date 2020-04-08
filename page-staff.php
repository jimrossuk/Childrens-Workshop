<?php

get_header();



// check if the repeater field has rows of data
if( have_rows('all_staff') ):

 	// loop through the rows of data
    while ( have_rows('all_staff') ) : the_row();

        // display a sub field value
        ?>
       <h1 class="staff_name">  <?php the_sub_field('staff_member_name'); ?> </h1>
       <h3 class= "job_titles ">   <?php the_sub_field('job_title'); ?>  
       </h3>
       <div class="flexbox">
            <img class= '.sm-img img-pad' src= "<?php the_sub_field('staff_photo'); ?>" >
       
            <p class="staff_profile "> <?php the_sub_field('profile');?> </p>
        </div>
       
      
       <?php
        
        
    endwhile;

else :

    // no rows found
    
    

endif;


get_footer();



?>