<? $voice = get_fields(); ?>

<div class="wrapper student-voice">

  <div class="column col-3 tablet-quarter mobile-full">
    <? include get_partial('post-meta') ?>
  </div>

  <div class="column col-7 push-1 tablet-three-quarters">
    <div class="post-content">
      <? the_content() ?>

      <? if ( isset($voice['signoff']) ) { ?>
        <div class="sign-off">
          <?= $voice['signoff'] ?>
        </div>
      <? } ?>
    </div>

  </div>
  
</div>