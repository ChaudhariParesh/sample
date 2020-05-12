<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">	
  <title>Blog Admin</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/components.css">
  <style type="text/css">
.alert{
    position: fixed;
    width: auto;
    right: 11px;
    bottom: 0;
    z-index:9999;
}
.alert-danger{
    color:#fff;
    background:#e91e1e;
}
.alert-success{
    color:#fff;
    background:#009688;
}

  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?=base_url();?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?=base_url();?>update_profile" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="<?=base_url();?>setting" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?=base_url();?>check_logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=base_url();?>dashboard">Admin</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?=base_url();?>dashboard">Admin</a>
          </div>
          <ul class="sidebar-menu">
			 <li><a class="nav-link" href="<?=base_url();?>dashboard"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
              <li class="menu-header"> Data Management</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span> Data Management</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url();?>list_contact">Contact List</a></li>
				  <li><a class="nav-link" href="<?=base_url();?>list_enquiry">Enquiry list</a></li> 
                </ul>
              </li>
              <li class="menu-header"> Management</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span> Management</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url();?>add-user"> </a></li>
                  <li><a class="nav-link" href="<?=base_url();?>list-user"> </a></li>
                </ul>
              </li>
                 <li class="menu-header"></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span></span></a>
                <ul class="dropdown-menu">
                 
              <!--   <li><a class="nav-link" href="<?=base_url();?>">i.List</a></li>
                  <li><a class="nav-link" href="<?=base_url();?>">ii. Link</a></li>
                  <li><a class="nav-link" href="<?=base_url();?>">iii. Sort Description</a></li>
                  <li><a class="nav-link" href="<?=base_url();?>">iv. Description</a></li>
                  <li><a class="nav-link" href="<?=base_url();?>">v.Publish Date</a></li>
                  <li><a class="nav-link" href="<?=base_url();?>">  vi. Published By</a></li>
                  <li><a class="nav-link" href="<?=base_url();?>list-blog">vii. Image</a></li>  -->
                        <li><a class="nav-link" href="<?=base_url();?>list-blog"> </a></li>
                    </ul>
              </li>
              <li><a class="nav-link" href="<?=base_url();?>check_logout"><i class="fas fa-pencil-ruler"></i> <span>Logout</span></a></li>
            </ul>
           <?php /* <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>*/?>
        </aside>
      </div>
<?php if($this->session->flashdata('success')){?>
<div class="alert alert-success" role="alert">
<?=$this->session->flashdata('success')?>
</div>
<?php }else if($this->session->flashdata('error')){?>
<div class="alert alert-danger" role="alert">
<?=$this->session->flashdata('error')?>
</div>
<?php }?>
