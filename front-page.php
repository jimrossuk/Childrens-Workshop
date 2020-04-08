<?php
get_header();

?>


    <img src= " <?php the_field('main_image') ; ?> ">
    <div class="fp-graph">
        <p class="fst-graph">  <?php  the_field('front_page_into1'); ?>  </p>
        <p>  <?php  the_field('front_page_info2'); ?>  </p>
        <p>  <?php  the_field('front_page_info3'); ?>  </p>
        <p>  <?php  the_field('front_page_info4'); ?>  </p>
        <p>  <?php  the_field('front_page_info5'); ?>  </p>
    </div>
    


<?php 
$link = get_field('ofsted');
if( $link ): ?>
    <a class="button ft-page" href="<?php echo esc_url( $link ); ?>">Ofsted report</a>
<?php endif; ?>

<div>
    <?php 
    $link = get_field('charity_link');
    if( $link ): ?>
        <a class="button ft-page" href="<?php echo esc_url( $link ); ?>">Charity information</a>
    <?php endif; ?>
</div>

<?php

get_footer();

?>