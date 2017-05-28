 <?php 
 /**
 * Updates Main Page
 * 
 * @access       public
 * @author       Enliven Appications
 * @version      3.0
 * Last Updated  May 04, 2017
 * used bootstrap panels, breadcrumbs and alerts; Changed way to show validation messages and also added some language variables 
 * @author       Simon Montaño
*/
 	
?>
         <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('admin'); ?>" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
            <a href="<?php echo site_url('admin_updates'); ?>" class="btn btn-default"><?php echo lang('updates_hdr'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('updates_index_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 
		 
 	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title"><?php echo lang('updates_hdr'); ?></h3>
	  </div>
	  <div class="panel-body">
		
 <?php 
	  if ($update_avail && $update_avail['status'] == 'failed'): ?>
 
 		<div class="alert alert-danger alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong><?php echo lang('error_title_important_news'); ?> <br /> </strong> <?php echo $update_avail['message']; ?>
		</div>
		
  <?php else: ?>
	<div class="well"><?php echo lang('updates_subheader'); ?></div>
  <!-- Boxes  -->
    	<div class="col-sx-12 col-sm-6 col-lg-6">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-thumbs-o-up"></i></div>
					<div class="info">
						<h5 class="title"><?php echo lang('updates_ob_install_text'); ?></h5>
						<h3><?php echo $this->config->item('ob_version'); ?></h3>						
			 
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>       
			
        <div class="col-xs-12 col-sm-6 col-lg-6">
			<div class="box">							
				<div class="icon">
				    <div class="image"><i class="fa fa-flag"></i></div>
					<div class="info">
    					<h5 class="title"><?php echo lang('updates_ob_current_stable_text'); ?></h5>
				        <h3><?php echo $update_avail['current_version']; ?></h3>
						
					</div>
				<div class="space"></div>
			</div> 
		</div>
			
     </div>   	    
		<!-- /Boxes -->	

<div class="clearfix"> <br /> &nbsp; <br />  </div>

<div class="row">
  <div class="col-xs-12 text-center">
    <?php if ($this->config->item('ob_version') == $update_avail['current_version']): ?>
	
		<div class="alert alert-success alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong><?php echo lang('error_title_congratulation'); ?></strong>  <h4><?php echo lang('updates_install_up_to_date_text'); ?></h4>
		</div>
   
    <?php elseif ($this->config->item('ob_version') < $update_avail['current_version']): ?>
    <h4><?php echo lang('updates_update_available'); ?></h4>
    <a href="http://addons.open-blog.org" class="btn btn-warning btn-lg btn-block" target="_blank"><?php echo lang('updates_download_btn'); ?></a>
    <!-- <a href="<?php echo base_url('admin_updates/do_update'); ?>" class="btn btn-warning btn-lg btn-block"><?php echo lang('updates_update_now_btn'); ?></a> -->

    <?php endif ?> 
  </div>
</div>		
		
 <?php endif ?>
 
   </div>
	</div>
