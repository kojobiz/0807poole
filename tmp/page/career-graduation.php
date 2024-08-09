<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>career/mv.jpg?04" alt="">
  <p class="bg-green c-pagettl__ttl">
    進路・進学
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->


<section class="page__inner">
  <div class="content">

    <section>
      <h1 class="c-secttl is-red"><?php the_title(); ?></h1>

      <section class=" mt70">
        <h2 class="c-secttl-box">進路状況</h2>
        <img class="mt30 img7681200" src="<?php echo $imagePath ?>career/graduation/img01_shinrojokyo.jpg" alt="大学進学率91.9%、国公立を含む難関有名大学に76.3%が進学" width="1200" height="1073">
      </section>

      <section class=" mt70">
        <h2 class="c-secttl-box">合格大学一覧</h2>
        <img class="mt30" src="<?php echo $imagePath ?>career/graduation/img02_daigaku.jpg" alt="国公立8名、関関同立24名、産近甲龍56名、主要女子大71名、首都圏18名、医歯薬看護系74名、食物栄養系12名、芸術系12名" width="1200" height="620">
      </section>

      <section class="mt70">
        <h2 class="c-secttl-box">指定校推薦一覧</h2>
        <img class="mt30" src="<?php echo $imagePath ?>career/graduation/img03_suisen.jpg" alt="指定校推薦の対象となるコース在籍者160名に対し、150大学以上、800名以上の指定校枠が付与されております" width="1200" height="649">
      </section>

      <div class="c-btnList mt100">
        <a href="<?php echo esc_url(home_url('/career/guidance/')); ?>">進路指導</a>
        <a href="<?php echo esc_url(home_url('/career/graduation/')); ?>">進路実績</a>
      </div><!-- /.c-btnList -->


  </div><!-- /.content -->
</section><!-- /.page -->