<?php get_header();
if(have_posts() ) : while (have_posts() ) : the_post();?>
?>

<div class = "agenda">
  <div class = "container">
    <div class = "row event_visuals">
	<div class="img_hover" style="background-image:url(<?php the_field('event_image'); ?>)"></div>
    </div>

    <div class = "row agenda_col justify-content-center" style="background-color:<?php the_field('event_color'); ?>; margin: 30px 20px; padding:0 !important;">


      <div class="col-12 event_details">
        <div class="event_date"><?php the_field('event_date'); ?></div>
        <div class="event_category"><?php the_field('event_category'); ?></div>
      </div>

      <div class="col-12 agenda_title">
        <div class="divider"></div>
        <h3 onclick="location.href='<?php the_permalink(); ?>';"><?php the_title(); ?></h3>
        <div class="divider"></div>
        <button class="tickets button_general" onclick="window.open('<?php the_field('event_reservation'); ?>','_blank')">TICKETS</button>

      </div>

    </div>
  <?php endwhile; ?>
<?php endif; ?>
</div>

</div>

<?php get_footer(); ?>
