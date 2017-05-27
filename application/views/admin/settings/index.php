 <?php 
 /**
 * Settings Main Page
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
            <a href="<?php echo site_url('settings'); ?>" class="btn btn-default"><?php echo lang('settings_section_name'); ?></a> 
			<a href="#" class="btn btn-primary"><?php echo lang('settings_index_page'); ?></a> 
         </div>		  
		 <br /> &nbsp; <br /> 
  
    <!-- Nav tabs -->

     <?php echo validation_errors(); ?>
     <?php if (isset($message)): ?>
         <?php echo $message; ?>
     <?php endif ?> 

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><?php echo lang('settings_hdr'); ?></h3>
		  </div>
		  <div class="panel-body">
		  
		   <div class="well"><?php echo lang('settings_help_txt'); ?></div>
			 
     <ul class="nav nav-tabs" role="tablist">
        <?php $count = 0 ?>
        <?php foreach ($settings as $tab): ?>
        <li role="presentation"<?php if ($count == 0) echo ' class="active"' ?>><a href="#<?php echo $tab->tab; ?>" aria-controls="<?php echo $tab->tab; ?>" role="tab" data-toggle="tab"><?php echo ucfirst($tab->tab); ?></a></li>
        <?php $count++; ?>
        <?php endforeach ?>
    </ul>

    <!-- Tab panes -->
    <?php echo form_open(); ?>
    <div class="tab-content">
        <?php 
		  $count = 0; 
		  $counts = 0; 
		?>
        <?php foreach ($settings as $tab): ?>
        <div role="tabpanel" class="tab-pane fade<?php echo ($count == 0) ? ' in active': ''; ?>" id="<?php echo $tab->tab ; ?>">
		    
            <?php foreach ($tab->list as $item): ?>
		    <div class="form-group">
                <label for="<?php echo $item->name; ?>" class="col-sm-2 control-label"><?php echo lang($item->name . '_label'); ?></label>
                <div class="col-sm-10">                   
                    <?php echo $item->input; ?>
					 <span id="helpBlock<?php echo $counts; ?>" class="help-block"><?php echo lang($item->name . '_desc'); ?></span>
                    <hr>
                </div>
            </div>
			<?php $counts++; ?>
            <?php endforeach ?>
        </div>
    <?php $count++; ?>
    <?php endforeach ?>
    </div>
    <div class="text-right">
        <input type="submit" class="btn btn-default" value="<?php echo lang('save_settings'); ?>">
    </div>
    <?php echo form_close(); ?>		 
			 
		  </div>
		</div>