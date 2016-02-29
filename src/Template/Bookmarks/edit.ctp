<?php

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $bookmark->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $bookmark->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($bookmark); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Bookmark']) ?></legend>
    <?php
    echo $this->Form->input('user_id', ['options' => $users]);
    echo $this->Form->input('title');
    echo $this->Form->input('description');
    echo $this->Form->input('url');
    echo $this->Form->input('tags._ids', ['options' => $tags]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
