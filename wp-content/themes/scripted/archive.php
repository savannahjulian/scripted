<? get_header(); ?>
<? include get_partial('hero') ?>

<? include get_partial('blog-latest') ?>

<section class="main archive">
  <div class="wrapper">

    <div class="column col-3 tablet-quarter mobile-full">
      <? include get_partial('blog-navigation') ?>
    </div>

    <div class="column col-7 tablet-three-quarters mobile-full">
      <? if ( have_posts() ) { ?>
        <? while ( have_posts() ) { the_post(); ?>
          <? include get_embed( get_post_type() ); ?>
        <? } ?>
      <? } ?>
      <? include get_partial('pagination') ?>
    </div>
    
  </div>
</section>

<? get_footer(); ?>