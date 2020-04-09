<?php

get_header();

?>
<img src= " <?php the_field('asc_photo') ; ?> ">
<h3 class="intro pad"> <?php the_field('after_school_club_intro'); ?> </h3>
<h2 class="text-center pad"> <?php the_field('routine'); ?>  </h2>
<p class="t pad"> <?php the_field('routine_descript'); ?>  </p>
<h2 class="text-center pad"> <?php the_field('booking'); ?>  </h2>
<p class="t pad"> <?php the_field('booking_descript'); ?>  </p>
<p class="t pad"> Fee per child: £<?php the_field('fee_per_child'); ?>  </p>
<p class="t pad"> Annual Fee: £<?php the_field('annual_fee'); ?>   </p>
<?php
get_footer();

?>