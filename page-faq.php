<?php

get_header();



// check if the repeater field has rows of data
if( have_rows('q_&_a') ):

 	// loop through the rows of data
    while ( have_rows('q_&_a') ) : the_row();
    ?>
         <!-- display a sub field value -->
       <h2 class="text-center"> <?php the_sub_field('question'); ?> </h2>
        <h3 class="text-center"> <?php the_sub_field('answer'); ?>  </h3>

    <?php    

    endwhile;

else :

    // no rows found

endif;




get_footer();

?>