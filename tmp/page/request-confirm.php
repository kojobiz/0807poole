<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>request/mv.jpg" alt="">
  <h1 class="bg-red c-pagettl__ttl">
    <?php the_title();?>
  </h1>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->



<div class="content p-contact">

  <div class="p-contact__inner">
    <p class="mb30">内容をご確認後「送信」ボタンをクリックしてください。</p>
    <?php the_field('contact');?>

  </div><!-- /.p-contact__inner -->
</div><!-- /.content -->