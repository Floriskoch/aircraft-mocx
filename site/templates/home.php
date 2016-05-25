<?php snippet('header'); ?>

<div id="content">
<?php foreach($pages->visible() as $section) {
    snippet($section->uid(), array('data' => $section));
} ?>

</div>
<?php snippet('footer'); ?>