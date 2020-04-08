<?php

get_header();

?>
<h2 class="text-center"> <?php the_field('after_school_info'); ?> </h2>
<h3 class="text-center"> <?php the_field('routine'); ?>  </h3>
<h3 class="text-center"> <?php the_field('routine_descript'); ?>  </h3>
<h3 class="text-center"> <?php the_field('booking'); ?>  </h3>
<h3 class="text-center"> <?php the_field('booking_desript'); ?>  </h3>
<?php
get_footer();

?>