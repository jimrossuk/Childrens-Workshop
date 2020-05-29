<?php

get_header();

    ?>
       <img max-width:50% src= " <?php the_field('holiday_photo') ; ?> ">
       <h2 class="text-center"> <?php the_field('holiday_club_intro'); ?> </h2>
        <h3 class="text-justify ft-graph "> <?php the_field('holiday_club_content'); ?>  </h3>
        <div>
            <p class = "text-center holiday-font"> Start:</p>
            <p class="text-center xxx"> <?php the_field('hours_open'); ?>  </p>
            <p class = "text-center holiday-font">Finish:</p>
            <p class="text-center xxx"> <?php the_field('hours_close'); ?>  </p>
        </div>
     <?php ?>
     
    <div class="flex">

     
        <?php 
        $link = get_field('ipal_link_copy');
        if( $link ): ?>
        <button class="btn btn-outline-primary fp-graph" href= "<?php echo esc_url( $link ); ?>">Book Holiday Club </button>
            <?php endif; ?>

    </div>
            


        <h3 class=""> £<?php the_field('holiday_club_daily_fee','options'); ?>   Fee per Child </h3>
        <h3 class=""> £<?php the_field('registration','options'); ?>    Yearly fee </h3>


    <?php    

get_footer();

?>