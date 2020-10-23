
<div class = "services">
  <div class = "container-fluid">
    <div class = "row">
      <div class = "col-md-6 col-sm-12 service_type">
        <h1><?php 
        the_title();
        ?></h1>
        
      </div>
      <div class = "col-md-6 col-sm-12 service_list">
        <div class="row">
          <div class="col-12">
            <a class="close_button"><p>Close</p><p>X</p></a>
          </div>
        </div>
        <?php
        if( have_rows('service_descr') ):  //1-level
          while( have_rows('service_descr') ) : the_row();
            echo '<br>-1';
            the_sub_field('service_title');
            if( have_rows('service_names') ):  //2-level
              while( have_rows('service_names') ) : the_row();
                echo '<br>---2';
                the_sub_field('single_name');
                if( have_rows('single_details') ):  //3-level
                    while( have_rows('single_details') ) : the_row();
                      echo '<br>------3';
                      the_sub_field('service_item');
                      if( have_rows('service_subitems') ):  //4-level
                        while( have_rows('service_subitems') ) : the_row();
                          echo '<br>---------4';
                          the_sub_field('service_line');
                        endwhile;
                      endif;   //4-level
                    endwhile;
                  endif;   //3-level
                endwhile;
              endif;  //2-level
            endwhile;
          endif;  //1-level
          ?>
      </div>
    </div>
  </div>
</div>
