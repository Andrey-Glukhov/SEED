<?php get_header();
/**
*Template Name: Home Page
*/
?>
<div class="left_overlay"></div>
<div class="right_overlay"></div> 
<div class="page_container">
 <div class="page_block">
 
 </div>
 <div class="grass_block">
 
 </div>
 

</div>

<script type="text/javascript">
    $(document).ready(function () {
        // init controller
        var controller = new ScrollMagic.Controller();

        // create a scene
        var sceneLeft = new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: 300, // the scene should last for a scroll distance of 100px
          offset: 100 // start this scene after scrolling for 50px
})
.setTween('.left_overlay',{left:'-50vw'})
.addIndicators()
.addTo(controller); // assign the scene to the controller

var sceneRight = new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: 600, // the scene should last for a scroll distance of 100px
          offset: 100 // start this scene after scrolling for 50px
})
.setTween('.right_overlay',{left:'100vw'})
.addIndicators()
.addTo(controller); // assign the scene to the controller
    });
    console.log('Ready!');
</script>

<?php get_footer(); ?>
