<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="<?php echo $this->session->language_abbr; ?>">
	<head>
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php // echo $page['title']; ?> | <?php echo $template['title']; ?></title>
    <!-- if you create CDN links, do that first before echoing $template['metadata'] so you can override default CDN settings -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>">
    <!-- add css and js before echoing $template['metadata'] -->    
	<?php $this->template->append_css('default.css'); ?>
	
    <!-- echo css, js, and other metadata as defined -->
    <?php echo $template['metadata']; ?>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	
 <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/favicon.ico" />	
	</head>
	<body>
		<!-- temp -->

<div class="wrapper">

    <div class="box">
        <div class="row">

          <?php if ( $this->ion_auth->logged_in() ): ?>
          <div class="container-fluid">
          <nav class="navbar navbar-inverse" id="admin-navbar">
            
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Admin</a>
              </div>

              
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="admin-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <?php if ($this->template->admin_nav): ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <?php foreach ($this->template->admin_nav as $nav): ?>
                      <li><?= $nav ?></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                <?php endif ?>
                <!-- everyone gets to see this if logged in -->
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                    <ul class="dropdown-menu">
					  <li><a href="<?php echo site_url('auth/change_password') ?>"><b>Change Password</b></a></li>
                      <li><a href="<?php echo site_url('auth/edit_user/' . $this->ion_auth->get_user_id()) ?>"><b>Edit Profile</b></a></li>					
                      <li><a href="<?php echo site_url('auth/logout') ?>"><b>Log Out</b></a></li>
                    </ul>
                  </li>


                </ul>
              </div><!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
          </nav>
          </div>
          <?php endif ?>
            <!-- sidebar -->
            <div class="column col-sm-3" id="sidebar">
                <a class="logo" href="#"><?php echo substr ($template['title'], 0, 1 ) ; ?></a>
                  <?php echo $template['partials']['nav']; ?>
              
            </div>
            <!-- /sidebar -->
          
            <!-- main -->
            <div class="column col-sm-9" id="main">
			<div class="padding">
			 <div class="full col-sm-9">
			<div class="text-right">
			  <?php if ($this->template->lang_picker): ?>
                          <div class="col-sn-2">
                            <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Choose Language <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <?php foreach ($this->template->lang_picker as $lang): ?>
                                <li><?php echo $lang; ?></li>
                                <?php endforeach ?>
                                
                              </ul>
                            </div>
                          </div>
                        <?php endif ?>
			 </div>
			
			
                
                   
                      <div class="row">
                        <div class="col-sm-12">
                            <h2 class="page-header"><?php echo $template['title']; ?></h2>
                        </div>
                      
                      </div>
                        
                        <!-- content -->
                        <br /> &nbsp; <br />

      
                        <?php echo $template['body']; ?>

                            <?php echo $template['partials']['social']; ?>
                            

                      <div class="col-sm-12">
                          <div class="page-header text-muted divider" id="blog-links">
                            <?php echo lang('blog_links_hdr'); ?>
                          </div>
                        </div>

                          
                        <div class="row">

                          <div class="col-sm-3">
                            <?php echo $template['partials']['links']; ?>
                          </div>


                          <div class="col-sm-3">
                            <?php echo $template['partials']['archives']; ?>
                          </div>


                          <div class="col-sm-3">
                            <?php echo $template['partials']['categories']; ?>
                          </div>

                          <div class="col-sm-3">
                            <?php echo $template['partials']['notices']; ?>
                          </div>

                        </div>
                        
                        <hr>

                        <div class="row" id="footer">    
                          <div class="col-sm-6">
                            <p class="">
                            Theme: <a href="http://www.bootply.com" target="_blank">Bootply</a> | Powered by <a href="http://open-blog.org"  target="_blank">Open Blog</a>
                            </p>
                          </div>
                          <div class="col-sm-6 text-right">
                            <p>
                             &copy; Copyright <?php echo date('Y'); ?> | <a href="#"><?php echo $template['title']; ?></a>
                            </p>
                          </div>
                        </div>
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->

        </div>
    </div>
</div>

<!-- temp -->

     <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script> 
     <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.easing.1.3.js"); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.ui.totop.js"); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("assets/js/2top.js"); ?>"></script>		
	</body>
</html>