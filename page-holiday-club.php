<?php

get_header();

    ?>
       
       <h2 class="text-center"> <?php the_field('holiday_club_intro'); ?> </h2>
        <h3 class="text-center"> <?php the_field('holiday_club_content'); ?>  </h3>
        <div>
            <p class="text-center"> <?php the_field('hours_open'); ?>  </p>
            <p class="text-center"> <?php the_field('hours_close'); ?>  </p>
        </div>
        <?php 
        $link = get_field('booking');
            if( $link ): ?>
            <a class="button btn " href="<?php echo esc_url( $link ); ?>">Book Here</a>
        <?php endif; ?>

        <h3 class="text-center"> £<?php the_field('fee_per_child'); ?>   Fee per Child </h3>
        <h3 class="text-center"> £<?php the_field('yearly_fee'); ?>    Yearly fee </h3>



    <?php    

get_footer();

?>