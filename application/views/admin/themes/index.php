<?php 
 /**
 * Themes Main Page
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
            <a href="<?php echo site_url('admin_social'); ?>" class="btn btn-default"><?php echo lang('themes_hdr'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('themes_index_page'); ?></a>
         </div>		  
		 <br /> &nbsp; <br /> 

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo lang('themes_hdr'); ?></h3>
  </div>
  <div class="panel-body">
  
    <div class="well"><?php echo lang('themes_subheader'); ?></div>
	
	<?php foreach($themes as $theme): ?>
	<div class="col-sm-6 col-md-4">
  
    <div class="panel panel-default">
	  <div class="panel-body">
 
		 <div class="thumbnail" >
			  <img src="<?php echo base_url('application/themes/' . $theme->path . '/' . $theme->image); ?>" alt="<?php echo $theme->description; ?>" title="<?php echo $theme->description; ?>">
		 </div>
  
	  </div>
	  <div class="panel-footer">
	 
           <div class="caption">
				<h3><?php echo $theme->name; ?></h3>
				 <p><?php echo $theme->description; ?></p>
				 <p><?php echo lang('theme_author_title'); ?>: <?php echo $theme->author; ?></p>
				 <p><?php echo lang('theme_author_email'); ?>: <?php echo $theme->author_email; ?></p>
				 <p><?php echo lang('themes_theme_type_desc'); ?>: <?php echo ($theme->is_admin == 1) ? lang('themes_type_admin') : lang('themes_type_front');  ?></p>
				 <p><?php echo lang('theme_version') ?>: <?php echo $theme->version; ?></p>
				 <p><b><?php echo ($theme->is_active == 1) ? lang('themes_theme_in_use') : lang('themes_theme_not_in_use');  ?></b></p>
			     <p><?php if ($theme->is_active == 0): ?> <a href="<?php echo site_url('admin_themes/activate/' . $theme->id) ?>" class="btn btn-default"><?php echo lang('themes_activate_theme'); ?></a> <?php endif ?></p>
			  </div>
			</div>	 	  
	  </div>
	</div>
  <?php endforeach ?>
  </div>
</div>
 