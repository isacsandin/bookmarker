<?php
use Cake\Core\Configure;

$controller = strtolower($this->request->controller);
$action = strtolower($this->request->action);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <?= $this->Html->meta(['http-equiv'=>'X-UA-Compatible','content'=>'IE=edge']); ?>
    <?= $this->Html->meta("viewport","width=device-width, initial-scale=1"); ?>
    <?= $this->Html->meta("description",""); ?>
    <?= $this->Html->meta("author",""); ?>
    <?= $this->Html->meta('icon') ?>

    <title><?= $this->fetch('title') ?></title>

    <!-- Bootstrap Core CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>

    <!-- Custom CSS -->
    <?= $this->Html->css('sb-admin.css') ?>

    <!-- Morris Charts CSS -->
    <?= $this->Html->css('plugins/morris.css') ?>

    <!-- Custom Fonts -->
    <?= $this->Html->css('font-awesome/css/font-awesome.min.css') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?=' class="' . implode(' ', [$this->request->controller, $this->request->action]) . '" '?> >

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?=Configure::read('App.title');?></a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li <?= $controller == "pages"?"class='active'":"" ?> >
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                        Pages <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li <?= isset($page) && $page == "dashboard"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                "<i class=\"fa fa-fw fa-dashboard\"></i> Dashboard",
                                ['controller' => 'pages','action' => 'dashboard'],
                                ['escape' => false]
                            );?>
                        </li>
                        <li <?= isset($page) && $page == "charts"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                "<i class=\"fa fa-fw fa-bar-chart-o\"></i> Charts",
                                ['controller' => 'pages','action' => 'charts'],
                                ['escape' => false]
                            );?>
                        </li>
                        <li <?= isset($page) && $page == "tables"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                "<i class=\"fa fa-fw fa-table\"></i> Tables",
                                ['controller' => 'pages','action' => 'tables'],
                                ['escape' => false]
                            );?>
                        </li>
                        <li <?= isset($page) && $page == "forms"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                "<i class=\"fa fa-fw fa-edit\"></i> Forms",
                                ['controller' => 'pages','action' => 'forms'],
                                ['escape' => false]
                            );?>
                        </li>
                        <li <?= isset($page) && $page == "elements"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                "<i class=\"fa fa-fw fa-desktop\"></i> Bootstrap Elements",
                                ['controller' => 'pages','action' => 'elements'],
                                ['escape' => false]
                            );?>
                        </li>
                        <li <?= isset($page) && $page == "grid"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                "<i class=\"fa fa-fw fa-wrench\"></i> Bootstrap Grid",
                                ['controller' => 'pages','action' => 'grid'],
                                ['escape' => false]
                            );?>
                        </li>
                        <li <?= isset($page) && $page == "blank"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                "<i class=\"fa fa-fw fa-file\"></i> Blank Page",
                                ['controller' => 'pages','action' => 'blank'],
                                ['escape' => false]
                            );?>
                        </li>
                    </ul>
                </li>

                <li <?= $controller == "users"?"class='active'":"" ?> >
                    <a href="javascript:;" data-toggle="collapse" data-target="#users">
                        Users <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="users" class="collapse">
                        <li <?= isset($page) && $page == "dashboard"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                __("List Users"),
                                ['controller' => 'users','action' => 'index'],
                                ['escape' => false]
                            );?>
                        </li>
                        <li <?= isset($page) && $page == "charts"?"class='active'":"" ?> >
                            <?=$this->Html->link(
                                __("Add User"),
                                ['controller' => 'users','action' => 'add'],
                                ['escape' => false]
                            );?>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#relacionados">
                        Relacionados <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="relacionados" class="collapse">
                            <?=$this->fetch('tb_actions')?>
                        </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <?=$this->fetch('title') ?>
                        <small><?=$this->fetch('subtitle') ?></small>
                    </h1>
                    <?= $this->Html->getCrumbList([ 'firstClass' => false, 'lastClass' => 'active', 'class' => 'breadcrumb' ], 'Home'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <?= $this->Flash->render() ?>
                </div>
            </div>
            <!-- /.row -->

            <?= $this->fetch('content') ?>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?= $this->Html->script('jquery.js') ?>

<!-- Bootstrap Core JavaScript -->
<?= $this->Html->script('bootstrap.min.js') ?>

<!-- Morris Charts JavaScript -->
<?= $this->Html->script('plugins/morris/raphael.min.js') ?>
<?= $this->Html->script('plugins/morris/morris.min.js') ?>
<?= $this->Html->script('plugins/morris/morris-data.js') ?>
<?= $this->fetch('script') ?>
</body>

</html>
