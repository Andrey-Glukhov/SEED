<?php
/**
*Template Name: Standard Template
*/
get_header(); ?>

<?php if(have_posts() ) : while (have_posts() ) : the_post(); ?>

  <div class = "single-standard">
    <div class = "container-fluid">
      <div class = "row standard_visuals">
        <div class="col-12" style="padding:0;">

          <div class="event_visuals" style="background-image:url(<?php the_field('event_image'); ?>)"></div>

        </div>
      </div>
      <div class = "row agenda_column justify-content-center" style="background-color:<?php the_field('event_color'); ?>;">
        <div class="col-12" style="padding:0;">

          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
