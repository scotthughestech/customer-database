<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer Database</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
        <?php if (isset($styles)): ?>
            <?php foreach ($styles as $style): ?>
                <link href="<?php echo base_url('assets/css/' . $style); ?>" rel="stylesheet">
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('view/index'); ?>">Customer Database</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url('add/index') ?>">Add</a></li>
                        <li><a href="<?php echo site_url('view/index') ?>">View</a></li>
                        <li><a href="<?php echo site_url('todo/index') ?>">Todo</a></li>
                        <li><a href="<?php echo site_url('utilities/index') ?>">Utilities</a></li>
                        <li><a href="<?php echo site_url('settings/index') ?>">Settings</a></li>
                        <li><a href="<?php echo site_url('login/logout') ?>">Logout</a></li>                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>  

        <div class="container">