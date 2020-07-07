<?php
/**
*Template Name: Agenda Page
*/
get_header();?>

<div class = "agenda">
  <div class = "container">
    <div class = "row menu_row">
      <div class = "col-12 menu_title">
        <h1>AGENDA</h1>
      </div>
    </div>
    <?php $agenda_page = new WP_Query( array( 'post_type' => 'agenda' ));
    if($agenda_page->have_posts() ) : while ( $agenda_page->have_posts() ) : $agenda_page->the_post();
    $cat = get_the_category();?>

    <div class = "row agenda_col justify-content-center" style="background-color:<?php the_field('event_color'); ?>; margin: 30px 20px; padding:0 !important;">
      <div class="img_hover" style="background-image:url(<?php the_field('event_image'); ?>)"></div>

      <div class="col-12 home_event_details">
        <div class="event_date"><?php the_field('event_date'); ?></div>
        <div class="event_category"><?php echo $cat[0]->cat_name; ?></div>
      </div>

      <div class="col-12 agenda_title">
        <div class="divider"></div>
        <h3><?php the_title(); ?></h3>
        <div class="divider"></div>
        <div class="buttons">
          <button class="tickets button_general" onclick="window.open('<?php the_field('event_reservation'); ?>','_blank')">TICKETS</button>
          <button class="more_info button_general" onclick="location.href='<?php the_permalink(); ?>';">MORE INFO</button>
        </div>


      </div>

    </div>
  <?php endwhile; ?>
<?php endif; ?>
</div>

</div>

<script type="text/javascript">
var sizeControl = function() {
  $('.img_hover').height($('.agenda_col').height());
  $('.img_hover').width($('.agenda_col').width());
};

$(document).ready(function(){
  sizeControl();

  $( ".agenda_col" ).hover(
    function() {
      $(this).children(".img_hover").css( 'opacity', '1' );
    },function() {
      $(this).children(".img_hover").css( 'opacity', '0' );
    });
    var agendaController = new ScrollMagic.Controller();
    $('.agenda_col').each(function(){
      var fadeEventScene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook:1
      })
      .setClassToggle(this, 'jump-in')
      //.addIndicators()
      .addTo(agendaController);
    });

  });

  $(window).resize(function() {
    sizeControl();
  });
</script>


<?php get_footer(); ?>
