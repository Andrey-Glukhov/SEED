<?php
/**
*Template Name: About Page
*/
get_header();
$about_page = new WP_Query( array( 'post_type' => 'page', 'p' => 2 ));
if($about_page->have_posts() ) : while ( $about_page->have_posts() ) : $about_page->the_post();
?>

<div class = "about_background" style="background-image:url(<?php the_field('about_image'); ?>)">
</div>
<div class="about_wrap">
  <div class="container">
    <div class="row">
      <div class="col-12 about_title">
        <h2>ABOUT</h2>
      </div>
      <?php if( have_rows('about_info') ): ?>
        <?php while( have_rows('about_info') ): the_row();
        ?>
        <div class="col-md-6 col-sm-12 menu_content">
          <?php the_sub_field('col_one'); ?>
        </div>
        <div class="col-md-6 col-sm-12 menu_content">
          <?php the_sub_field('col_two'); ?>

        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    <div class="col-12 about_logo">
      <img src="http://mavis-rotterdam.nl/wp-content/uploads/2019/10/Mavis-emblem-white_Tekengebied-1.png"/>
    </div>

  </div>
</div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
