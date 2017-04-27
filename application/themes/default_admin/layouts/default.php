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
    <title><?php echo $template['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/dataTables.bootstrap.min.css"); ?>">
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php echo $template['metadata']; ?>
    <link rel="icon" href="../../favicon.ico">
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
          <a class="navbar-brand" href="#"><?= $template['title'] ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://open-blog.org" target="_blank">Help</a></li>
            <li><a href="<?php echo site_url('auth/edit_user/' . $this->ion_auth->get_user_id()) ?>"><b>Edit Profile</b></a></li>			              
            <li><a href="<?php echo site_url('auth/logout') ?>"><b>Log Out</b></a></li>           
          </ul>
        </div>
      </div>
    </nav>


    <div class="container-fluid">
      <div class="row">
        <?php echo $template['partials']['sidebar']; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <?php echo $template['partials']['flashdata']; ?>

            <?php echo $template['body']; ?>
          	<hr />
            <div class="well text-right"><small>  &copy; Copyright 2010 - <?php echo date('Y'); ?> | Powered by <a href="http://open-blog.org" target="_blank">Open Blog</a></small></div>

        </div>
        </div>
      </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.dataTables.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/dataTables.bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/datatables.js"); ?>"></script>  
  </body>
</html>

 
