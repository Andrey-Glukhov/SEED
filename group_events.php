<?php
/**
*Template Name: Group Events Page
*/
get_header();
$group_page = new WP_Query( array( 'post_type' => 'page', 'p' => 99 ));
if($group_page->have_posts() ) : while ( $group_page->have_posts() ) : $group_page->the_post();
?>

<div class = "container-fluid group_wraper d-flex align-items-end">
  <div class = "row overlay">
    <div class="col-12">
      <h2>Private Events.</h2>
    </div>
    <div class = "col-12">
      <div class = "about_row">
        <div class = "group_text"><?php the_field('group_info'); ?>
        </div>
        <div style="text-align:center; width:100%;"><button class = "group_link" onclick="window.open('<?php the_field('group_link'); ?>','_blank')">OFFERTE AANVRAGEN</button></div>
      </div>
    </div>
    <div class="col-12 about_logo">
      <img src="http://mavis-rotterdam.nl/wp-content/uploads/2019/10/Mavis-emblem-white_Tekengebied-1.png"/>
    </div>

  </div>
</div>
<div id="JiSlider_one" class="jislider" style="width: 100%; height: 90%;">

  <ul>
    <?php $g_images = acf_photo_gallery('group_events_slider', $post->ID);
    if( count($g_images) ):?>
    <?php foreach( $g_images as $g_image ):
      $full_g_image_url= $g_image['full_image_url'];
      $id_g_image = $g_image['id'];?>
      <li>
        <img src="<?php echo $full_g_image_url?>">
      </li>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
