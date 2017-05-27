<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
////////////////////////////////////////////////////////////////
/*
I Made this code temporally meanwhile I find a better way to 
have title in the format Page title | section | website 
*/
////////////////////////////////////////////////////////////////

if (empty($section)) { 
 
 $section = $this->uri->segment(2);
    switch ($section) {
    case "settings":
	   $section = ucfirst($section);
	   $title = lang('settings_index_page');	
        break;	
	}
}

if (empty($section)) { 
 
 $section = $this->uri->segment(1);
   switch ($section) {
    case "admin":
	   $section = "Dashboard";
	   $title = lang('dashboard_index_page');	
        break;
    case "admin_updates":
        $section = "Updates";
	    $title = lang('updates_index_page');
        break;
    }
}
/* 
   This one is for load datatables files but as 
   I have problem with some controllers 
   where don't allow me to pass the variable
   I just made this validation to prevent errors
*/
if (empty($datatables)) { 
    $datatables = 0;
}
	
?>
<!DOCTYPE html>
<html lang="<?php echo $this->session->language_abbr; ?>">
	<head>
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NoIndex, NoFollow">	
    <!-- The Admin panel don't need to be available for google spider  -->
    <title><?php echo $title .' | '. $section . ' | '. $template['title']; ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>">
	<?php echo $template['metadata']; ?>
	<?php if ($datatables == 1 ) {  ?>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/dataTables.bootstrap.min.css"); ?>">
    <?php } ?>    
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/favicon.ico" />
  </head>

  <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $template['title']; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://open-blog.org" target="_blank">Help</a></li>
			<li><a href="<?php echo site_url(); ?>" target="_blank">View Site</a></li>
                <!-- everyone gets to see this if logged in -->
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                    <ul class="dropdown-menu">
					  <li><a href="<?php echo site_url('auth/change_password'); ?>"><b>Change Password</b></a></li>
                      <li><a href="<?php echo site_url('auth/edit_user/' . $this->ion_auth->get_user_id()); ?>"><b>Edit Profile</b></a></li>					
                      <li><a href="<?php echo site_url('auth/logout'); ?>"><b>Log Out</b></a></li>
                    </ul>
                  </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php echo $template['partials']['sidebar']; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	    	<br />
          <h1 class="page-header"><?php echo $section; ?></h1>

          <?php echo $template['partials']['flashdata']; ?>

            <?php echo $template['body']; ?>
			<hr />
            <div class="well text-right"><small>  &copy; Copyright 2010 - <?php echo date('Y'); ?> | Powered by <a href="http://open-blog.org" target="_blank">Open Blog</a></small></div>
        </div>
      </div>
    </div>
	
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script> 

    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.easing.1.3.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.ui.totop.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/2top.js"); ?>"></script>
	<?php if ($datatables == 1 ) {  ?>	
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.dataTables.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/dataTables.bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/datatables.js"); ?>"></script>
    <?php } ?> 	
  </body>
</html>