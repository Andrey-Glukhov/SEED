
<div class = "services">
  <div class = "container-fluid">
    <div class = "row">
    <a class="close_button">
              <span></span>
              <span></span>
            </a>
      <div class = "col-md-6 col-sm-12 service_type">
        <h1><?php 
        the_title();
        $service_page_id = get_field('page_id');
        ?></h1>
        
      </div>
      <div class = "col-md-6 col-sm-12 service_list">
       
        <?php
        $level_counter=0;
        if( have_rows('service_descr') ):  //1-level 
          echo '<ul class="service_level1">';          
          while( have_rows('service_descr') ) : the_row();
            echo '<li>';
            the_sub_field('service_title');
            if( have_rows('service_names') ):  //2-level
              echo '<ul class="service_level2">';
              while( have_rows('service_names') ) : the_row();
                echo '<li>';
                the_sub_field('single_name');
                if( have_rows('single_details') ):  //3-level
                  echo '<ul class="service_level3">';
                    while( have_rows('single_details') ) : the_row();
                    echo '<li data-toggle="collapse" data-target="#' . $service_page_id . $level_counter . '_level4">';
                      the_sub_field('service_item');
                      if( have_rows('service_subitems') ):  //4-level
                        echo '<ul class="service_level4 collapse" id="' . $service_page_id . $level_counter . '_level4">';
                        while( have_rows('service_subitems') ) : the_row();
                          echo '<li>';
                          the_sub_field('service_line');
                          echo '</li>';
                        endwhile;
                        echo '</ul>';
                      endif;   //4-level
                      $level_counter++;
                      echo '</li>';
                    endwhile;
                    echo '</ul>';
                  endif;   //3-level
                  echo '</li>';
                endwhile;
                echo '</ul>';
              endif;  //2-level
              echo '</li>';
            endwhile;
            echo '</ul>';
          endif;  //1-level
          ?>
      </div>
    </div>
  </div>
</div>
