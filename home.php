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
 <div class="nav_svg_block" data-tst=0>
 <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="road" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 0 1800 1080"
    preserveAspectRatio="xMidYMax" >
     <defs>
    <style>
      .cls-1 {
        fill: #ce6149;
      }
      .cls-2 {
        fill: none;
        stroke: none;
      }
    </style>
  </defs>
  <path d="M1298 315.49c-168.9 2.06-296.86 5.19-477.23 17.53-221.83 15.17-363.17 23-576.52 76.5-105.9 26.53-49.7 74.28-16.55 93 46 25.92 89.82 47.61 143.06 71.07 138.4 61 338.18 137.56 266.6 231.07-57.87 75.6-183.68 130.54-321.9 180.19C207.39 1023.63 139.84 1045.89 0 1080h1915.54c-294.37-255.53-534.86-359.69-743-421.33-288.9-85.55-490.8-85.39-630-126.36-308.5-90.81-4.1-119.52 35-124 120.46-13.84 232.29-29.84 348.68-40.23 100.38-9 324.25-14.12 556.78 9 620.45 61.57 624.77 630.45 1420.7 671.2 638.49 32.68 806.41-472.24 877.56-595.3 106.16-183.57 297.52-307.2 359.45-314.43 102.95-12 77.44 40.09 51 65.73-59.59 57.82-149.83 69.36-179.24 132.61-26.86 57.74-28.27 150.51 192.62 155.27C4364.74 495.57 4937 362.41 5103.23 359s285.31 12.57 309.67 46.95c30.93 43.65-15.68 79.38-204.33 102.51-151.27 18.54-332.36 16.28-556.71 97-237.95 85.6-299.18 177.2-295.72 288s184.25 174.22 502.94 174.23c367.77 0 567.05-66.64 762.4-107 128.51-26.55 523.18-26.87 751.79-60.19s337.16-105.11 403-153.6 119.68-92.58 156.82-89.59 54.47-100.92 148-170.19 148.91-183.59 263.22-221.7 143.3-79.66 175.56-124.69S7562.53 0 7562.53 0h-72.74s3.46 51.77-55.42 108.37-166.26 84.31-277.11 164-232.78 275.2-264 292-43.2 4.8-108 19.2-132.56 111.55-244.81 132c-637.22 116.1-740.29 58.55-1016.21 79.58-138.76 10.57-387 35-699.32 38-52.86.51-107-70.59 93.36-138.91 139-47.37 348.57-54.22 495.85-123.77 163.07-77 150.82-186.33 106.25-231.94s-136.78-57.36-256.79-59.76-723.41 70-805.11 78.79c-123.94 13.28-291.74 34-303.74 10s-4.8-43.2 45.6-62.41 118.08-71.45 127.39-98.81c16.58-48.71-2.6-119.79-91.15-138-68.17-14-234.38-18.23-396.59 106.77-118.15 91.05-262.75 338.39-382.75 436.79S3176 776.2 2810.86 740.58C2483 708.59 2186.07 304.68 1298 315.49z" fill="#ce6149"/>
  
<circle id="ellipse_1" cx="1044" cy="217.5" r="51.5" fill="#FF0000"/>
<circle id="ellipse_2" cx="2891" cy="675" r="70" fill="#FF0000"/>
<circle id="ellipse_3" cx="4211" cy="626" r="86" fill="#FF0000"/>
<circle id="ellipse_4" cx="6169" cy="689" r="52" fill="#FF0000"/>
<text id="txtlabel_2" fill="black" xml:space="preserve" style="white-space: pre" font-family="Roboto" font-size="24" letter-spacing="0em" opacity="0"><tspan x="2737" y="387.203">Accessibility on the web strives to ensure </tspan><tspan x="2737" y="415.203">that people with disabilities can access </tspan><tspan x="2737" y="443.203">sites and&#13;&#10;</tspan><tspan x="2737" y="471.203">applications. The general goal is to </tspan><tspan x="2737" y="499.203">provide content that is served and </tspan><tspan x="2737" y="527.203">structured in such a&#13;&#10;</tspan><tspan x="2737" y="555.203">way that use</tspan></text>
<text id="txtlabel_1" fill="black" xml:space="preserve" style="white-space: pre" font-family="Roboto" font-size="24" letter-spacing="0em" opacity="0"><tspan x="1004.4" y="104.541">sadsdasd&#10;</tspan><tspan x="1004.4" y="132.541">asdasdasdasa&#10;</tspan><tspan x="1004.4" y="160.541">sdas</tspan></text>

</svg>

</div>

<script type="text/javascript">

    var controller, sceneLeft, sceneRight;
    var pic_svg;
    var roadPath ;

    $(document).ready(function () {
        // init controller
        var win_height = $(window).height();
        controller = new ScrollMagic.Controller();
function createLeft() {
        // create a scene
return new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: win_height, // the scene should last for a scroll distance of 100px
          offset: 100 // start this scene after scrolling for 50px
})
.setTween('.left_overlay',{left:'-50vw'})
.addIndicators()
.addTo(controller); // assign the scene to the controller
}

function createRight() {
return new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: win_height,
          offset: 100 
})
.setTween('.right_overlay',{right:'-50vw'})
.addIndicators()
.addTo(controller); 
}
function createRoadScene1() {
return new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: win_height,
          offset: win_height 
})
.setTween('#road',{attr: {viewBox: "457 -100 1000 600"}})
.addIndicators()
.addTo(controller);
}
function createRoadScene2() {
return new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: win_height,
          offset: 2*win_height 
})
.setTween('#road',{attr: {viewBox: "2279 300 1300 900"}})
.addIndicators()
.addTo(controller); 
}

 function createRoadScene3() {
return new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: win_height, 
          offset: 3*win_height 
})
.setTween('#road',{attr: {viewBox: "3600 300 500 400"}})
.addIndicators()
.addTo(controller); 
}

function createRoadScene4() {
return new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: win_height,
          offset: 4*win_height 
})
.setTween('#road',{attr: {viewBox: "5486 400 1200 800"}})
.addIndicators()
.addTo(controller); 
}

function createTextScene1() {
return new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: win_height, 
          offset: win_height 
})
.setTween('#txtlabel_1',{opacity:1})
.addIndicators()
.addTo(controller); 
}

function createTextScene2() {
return new ScrollMagic.Scene({
          triggerElement: '.page_block',
          triggerHook: 0.1,
          duration: win_height, 
          offset: 2.5*win_height 
})
.setTween('#txtlabel_2',{opacity:1})
.addIndicators()
.addTo(controller); 
}

    sceneLeft = createLeft();
    sceneRight = createRight();
    sceneRoad1 = createRoadScene1();
    sceneRoad2 = createRoadScene2();
    sceneRoad3 = createRoadScene3();
    sceneRoad4 = createRoadScene4();
    sceneText1 = createTextScene1();
    sceneText2 = createTextScene2();

    // var timeoutDuration = 800;
    // var resizeTimeout = null;

    $(window).on('resize', function() {

        console.log('Resize!');
       
        $('.left_overlay').attr('style','');
        $('.right_overlay').attr('style','');
        sceneRight.setTween('.right_overlay',{right:'-50vw'});
        sceneLeft.setTween('.left_overlay',{left:'-50vw'});
    });

// SVG ********************************** 
// pic_svg = SVG('#road');
// roadPath = pic_svg.findOne('.cls-2');
// var pathLength = roadPath.length() 
// console.log(pathLength); 
// console.log(roadPath.pointAt(pathLength*0.5));   
    
}); 

</script>

<?php get_footer(); ?>
