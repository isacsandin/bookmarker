<?php

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($tag); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Tag']) ?></legend>
    <?php
    echo $this->Form->input('title');
    echo $this->Form->input('bookmarks._ids', ['options' => $bookmarks]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
