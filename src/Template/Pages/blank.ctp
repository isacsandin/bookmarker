<?php
$this->Html->addCrumb('Pages', '/pages');
$this->Html->addCrumb('Blank', ['controller' => 'Pages', 'action' => 'display', 'blank']);

$this->assign('title', 'Blank');
$this->assign('subtitle', 'just a blank page :)');
?>

