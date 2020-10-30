
<div class="wrapper">
  <div class="menu-btn">
    <div class="animated-icon1"><span></span><span></span><span></span></div>
  </div>

  <div class="menu container-fluid" style="padding:0;">
    <div class="united">
      <div class="row group overlay">
        <div class="col-6">
          <div class="nav_content">
            <ul>
              <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'auto-navigation',
                'items_wrap' => '<div id="%1$s" class="navigation-bar %2$s">%3$s</div>',
                'item_spacing' => 'preserve'
              )
              );
              ?>
            </ul>
        </div>
      </div>
      <div class="col-6">
        

      </div>

    </div>
  </div>
</div>
</div>

<script>

var t1 = new TimelineMax({paused: true});

t1.to(".menu", 1.6, {

  top: 0,
  ease: Expo.easeInOut

});

t1.staggerFrom(".menu ul li", 1, {y: 100, opacity: 0, ease: Expo.easeOut}, 0.1);

t1.reverse();
$(document).on("click", ".menu-btn", function() {
  t1.reversed(!t1.reversed());
});

t1.reverse();
$(document).on("click", ".menu-item", function() {
  t1.reversed(!t1.reversed());

  $('.menu-btn').on('click', function () {
    if ($('.animated-icon1').hasClass('open')) {
      $('.animated-icon1').removeClass('open');
      $('.menu').removeClass('active');
    }else{
      $('.animated-icon1').addClass('open');
      $('.menu').addClass('active');
    };
  });
});
$(document).ready(function() {
  $('.menu-btn').on('click', function () {
    if ($('.animated-icon1').hasClass('open')) {
      $('.animated-icon1').removeClass('open');
      $('.menu').removeClass('active');
    }else{
      $('.animated-icon1').addClass('open');
      $('.menu').addClass('active');
    };
  });
});

</script>

<!--<nav class="navbar navbar-expand-md navbar-dark background_nav fixed-top">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-right" id="navbarNav">
here the php code goes
</div>
</nav>-->
