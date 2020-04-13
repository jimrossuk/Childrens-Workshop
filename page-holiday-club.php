<?php

get_header();

    ?>
       <img src= " <?php the_field('holiday_photo') ; ?> ">
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

        <h3 class="text-center"> £<?php the_field('holiday_club_daily_fee','options'); ?>   Fee per Child </h3>
        <h3 class="text-center"> £<?php the_field('registration','options'); ?>    Yearly fee </h3>


    <?php    

get_footer();

?>