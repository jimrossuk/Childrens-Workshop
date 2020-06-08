<?php

get_header();



// check if the repeater field has rows of data
if( have_rows('q_&_a') ):

 	// loop through the rows of data
    while ( have_rows('q_&_a') ) : the_row();
    ?> 
            <!-- <div class="col-sm-3"> -->
                <div class=>

                    <div class="faq-box">
                        
                        <div class=" ">
                            <!-- display a sub field value -->
                            
                            <h2 class=" text-center pb-3   "> <?php the_sub_field('question'); ?> </h2>
                            <h3 class="   text-justify faq-font "> <?php the_sub_field('answer'); ?>  </h3>
                        </div>
                        
                    </div>
                    <!-- </div > -->
                </div>
    
        <?php    

    endwhile;

else :

    // no rows found

endif;




get_footer();

?>