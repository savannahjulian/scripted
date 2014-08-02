<? /* Point of Interest */ ?>

<section class="narrative-section poi">

  <div class="wrapper frame">

    <? if ( $section['icon'] ) { ?>
      <div class="column col-1 greedy mobile-quarter icon">
        <img src="<?= $section['icon']['sizes']['thumbnail'] ?>" alt="Point of Pride" />
      </div>
    <? } ?>

    <? if ( $section['text'] ) { ?>
      <div class="column col-12 text">
        <?= $section['text'] ?>
      </div>
    <? } ?>

  </div>
  
  <? # pp($section); ?>

</section>