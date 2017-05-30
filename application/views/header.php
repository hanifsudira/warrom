<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $page?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        #middle-finger{
            position: relative;
            float: left;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="#" class="simple-text">
                Witel Jakarta Barat
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <?php if ($tipe == 1){?>
                <?php echo '<li class="active">';}else{?>
                <?php echo '<li>';}?>
                    <a href="<?php echo base_url()?>">
                        <i class="material-icons">dashboard</i>
                        <p>NAL Indihome</p>
                    </a>
                </li>
                <?php if ($tipe == 2){?>
                <?php echo '<li class="active">';}else{?>
                <?php echo '<li>';}?>
                    <a href="<?php echo base_url()?>welcome/assurance">
                        <i class="material-icons">library_books</i>
                        <p>Assurance</p>
                    </a>
                </li>
                <?php if ($tipe == 3){?>
                <?php echo '<li class="active">';}else{?>
                <?php echo '<li>';}?>
                    <a href="<?php echo base_url()?>welcome/reportps">
                        <i class="material-icons">bubble_chart</i>
                        <p>Chart</p>
                    </a>
                </li>
                <?php if ($tipe == 4){?>
                <?php echo '<li class="active">';}else{?>
                <?php echo '<li>';}?>
                    <a href="<?php echo base_url()?>welcome/target">
                        <i class="material-icons">content_paste</i>
                        <p>Target NAL</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <p class="navbar-brand" ><?php echo $fulltitle?></p>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Logout</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>