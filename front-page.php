<?php
get_header();

?>


    <img src= " <?php the_field('main_image') ; ?> ">
    <div class="fp-graph">
        <p class="fst-graph">  <?php  the_field('front_page_into1'); ?>  </p>
        <p>  <?php  the_field('front_page_info2'); ?>  </p>
        <p>  <?php  the_field('front_page_info3'); ?>  </p>
        <h2>  <?php  the_field('front_page_info4'); ?>  </h2>
        <p>  <?php  the_field('front_page_info5'); ?>  </p>
    </div>
    

    <h1>Location</h1>
    <p>Email</p>
        <a href="<?php the_field('email_address', 'option'); ?>" > <?php the_field('email_address', 'option'); ?></a>

    <p>Mobile</p>
        
        <a href="tel:<?php the_field('mobile_number', 'option'); ?>"> <?php the_field('mobile_number', 'option');  ?></a>
    <p> Landline</p>

        <a href="tel:<?php the_field('landline_number', 'option'); ?>"> <?php the_field('landline_number', 'option');  ?></a>

    <?php
    
    echo do_shortcode( '[wpgmza id="1"]' );
    ?>
        


        <h1>
            Clubs
        </h1>


        <h2>Afterschool</h2>

        <p>  <?php the_field('after_school_description'); ?> </p>
        <h2>Holiday</h2>
        <p>  <?php the_field('holiday_club_description'); ?> </p>
<?php 
$link = get_field('ofsted');
if( $link ): ?>
    <a class="btn btn-color btn-lg btn-block " href="<?php echo esc_url( $link ); ?>">Ofsted report</a>
<?php endif; ?>

<div>
    <?php 
    $link = get_field('charity_link');
    if( $link ): ?>
        <a class="btn btn-lg btn-color btn-block" href="<?php echo esc_url( $link ); ?>">Charity information</a>
    <?php endif; ?>
</div>





<?php

get_footer();

?>