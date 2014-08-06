<section class="header orange">
  <div class="wrapper">
    <div class="column col-10">
      <h1 class="bold"><?= se_page_title($post) ?></h1>
      <? if ( ! is_archive() and ! is_singular(array('se_event')) and has_excerpt() ) { ?>
        <div class="page-intro">
          <?= the_excerpt(); ?>
        </div>
      <? } ?>
    </div>
  </div>
</section>