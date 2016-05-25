<nav class="clearfix" role="navigation">

  <ul class="list-inline pull-right">
    <?php $items = $pages->visible()->not('about')->not('intro'); ?>
    <?php foreach($items as $item): ?>
    <li><a <?php e($item->isOpen(), ' class="active"') ?> href="#<?php echo strtolower($item->title()); ?>"><?php echo strtolower($item->title()->html()) ?></a></li>
    <?php endforeach ?>
    <li>
      <ul class="languages">
        <?php foreach($site->languages() as $language): ?>
        <li<?php e($site->language() == $language, ' class="active"') ?>>
          <a href="<?php echo $page->url($language->code()) ?>"><?php echo html($language->code()) ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </li>
  </ul>

</nav>
