<?php

get_header();

?>
<img class="img-small"src= " <?php the_field('asc_photo') ; ?> ">
<h3 class="intro pad"> <?php the_field('after_school_club_intro'); ?> </h3>
<h2 class="text-center pad"> <?php the_field('routine'); ?>  </h2>
<p class="t pad"> <?php the_field('routine_descript'); ?>  </p>
<h2 class="text-center pad"> <?php the_field('booking'); ?>  </h2>
<p class="t pad"> <?php the_field('booking_descript'); ?>  </p>
<div class="inline">

    <p class=" pad"> Only: £ <?php the_field('after_school_daily_fee','options'); ?>  per child </p>
    <p class=" pad"> Annual Fee: £ <?php the_field('registration','options'); ?>   </p>
</div>


<!-- <p class="t pad"> <?php the_field('dates'); ?>  </p>
<p class="t pad"> <?php the_field('date_picker'); ?>  </p> -->

<?php

get_footer();

?>