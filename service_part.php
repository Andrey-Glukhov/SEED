
<div class = "services">
  <div class = "container-fluid">
<div class = "row">
  <?php $serv = new WP_Query( array( 'page_id' => 86 ) );

if ( $serv->have_posts() ) : while ( $serv->have_posts() ) : $serv->the_post();



  ?>


  <div class = "col-md-6 col-sm-12 service_type">
    <h1><?php the_title(); ?></h1>
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </div>
  <div class = "col-md-6 col-sm-12 service_list">


    <h2>Разработка вербального канала коммуникаций</h2>
    <p>Легенда бренда</p>

<p>Характер бренда (стиль и характер текста, ключевые слова)</p>

<p>Название торговой марки/бренда (Бренд-нейм)</p>

<p>Дескриптор  </p>

<p>Слоган</p>

<h2>Разработка визуального канала коммуникаций (бренл-дизайн)</h2>
<p>Разработка концепции дизайна  (Визуализация метафоры, создание бренд-персонажа)</p>

<p>Разработка логотипа и/или фирменного знака</p>

<p>Выбор фирменных цветов и их компоновки  (Цветовая гамма для фирменного знака, шрифтов, фонов и т.п)</p>

<p>Легенда бренда</p>

<p>Характер бренда (стиль и характер текста, ключевые слова)</p>

<p>Название торговой марки/бренда (Бренд-нейм)</p>

<p>Дескриптор  </p>

<p>Слоган</p>
<p>Легенда бренда</p>

<p>Характер бренда (стиль и характер текста, ключевые слова)</p>

<p>Название торговой марки/бренда (Бренд-нейм)</p>

<p>Дескриптор  </p>

<p>Слоган</p>
<p>Легенда бренда</p>

<p>Характер бренда (стиль и характер текста, ключевые слова)</p>

<p>Название торговой марки/бренда (Бренд-нейм)</p>

<p>Дескриптор  </p>

<p>Слоган</p>

  </div>
<?php endwhile; ?>
<?php endif; ?>
</div>

</div>

</div>