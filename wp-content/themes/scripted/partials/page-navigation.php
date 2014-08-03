<? $nearby = se_page_links($post) ?>
<div class="page-navigation side-nav">
  <ul>
    <? foreach ( $nearby as $p ) { ?>
      <? $link_classes = array('menu-item') ?>
      <? if ( is_page($p->ID) ) array_push($link_classes, 'current-menu-item') ?>
      <li class="<?= join($link_classes, ' ') ?>">
        <a href="<?= get_permalink($p) ?>">
          <?= get_the_title($p) ?>
        </a>
      </li>
    <? } ?>
  </ul>
</div>