<?php 
 /**
 * Add Languages
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
            <a href="<?php echo site_url('admin_lang'); ?>" class="btn btn-default"><?php echo lang('languages_hdr'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('index_add_new_lag'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 

<div class="container">
    <div class="row">
	 
		<?php 
		   if (validation_errors()) {  ?>
			<div class="alert alert-danger alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> <br /> 
			   <?php echo lang('error_general_message'); ?>
 			</div>
         <?php } ?>

			<?php if (isset($message)): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $message; ?>
				</div>
			<?php endif ?>
			
			
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><?php echo lang('index_add_new_social'); ?></h3>
			 	</div>
			  	<div class="panel-body">
			    	<?php echo form_open(current_url()); ?>
			    		<p><?php echo lang('add_social_subheading'); ?></p>
                    <fieldset>
			    	  	<div class="form-group">
			    		    <?php echo form_input(['name'=> 'name', 'id' => 'name', 'class' => "form-control", 'placeholder' => lang('social_form_name'), 'value' => set_value('name')]); ?>
			    		</div>
			    		<div class="form-group">
			    			<?php echo form_input(['name'=> 'url', 'id' => 'url', 'class' => "form-control", 'placeholder' => lang('social_form_url'), 'value' => set_value('url')]); ?>
			    		</div>
			    		<div class="form-group">
			    			<label><?php echo lang('social_form_active'); ?></label>
			    			<?php echo form_dropdown('enabled', ['0' => lang('no'), '1' => lang('yes')], '1', 'id="enabled", class="form-control"'); ?>
			    		</div>
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('save_social_btn'); ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
