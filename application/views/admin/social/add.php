<?php 
 /**
 * Adding a New Social Link
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
            <a href="<?php echo site_url('admin_social'); ?>" class="btn btn-default"><?php echo lang('social_section_name'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('social_add_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 


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
			    		<div class="well"><?php echo lang('add_social_subheading'); ?></div>
                    <fieldset>
			    	  	<div class="form-group<?php if (form_error('name')) { ?> has-error has-feedback <?php } ?>">
						<label for="name" class="col-lg-2 control-label"><?php echo $this->lang->line('social_form_name'); ?></label>
						<div class="col-lg-10">
			    		    <?php echo form_input(['name'=> 'name', 'id' => 'name', 'class' => "form-control", 'placeholder' => lang('social_form_name'), 'value' => set_value('name')]); ?>
			    		    <?php if (form_error('name')) { echo form_error('name'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('social_form_name'); ?></p>
							<?php } ?>							
			    		</div>
						</div>						
						
			    		<div class="form-group<?php if (form_error('url')) { ?> has-error has-feedback <?php } ?>">
						<label for="url" class="col-lg-2 control-label"><?php echo $this->lang->line('social_form_url'); ?></label>
						<div class="col-lg-10">
			    			<?php echo form_input(['name'=> 'url', 'id' => 'url', 'class' => "form-control", 'placeholder' => lang('social_form_url'), 'value' => set_value('url')]); ?>
                            <?php if (form_error('name')) { echo form_error('url'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('social_form_url'); ?></p>
							<?php } ?>							
			    		</div>							
			    		</div>
						
			    		<div class="form-group<?php if (form_error('enabled')) { ?> has-error has-feedback <?php } ?>">
						<label for="enabled" class="col-lg-2 control-label"><?php echo $this->lang->line('social_form_status'); ?></label>
						<div class="col-lg-10">			    			 
			    			<?php							 
							echo form_dropdown('enabled', ['0' => lang('no'), '1' => lang('yes')], '1', 'id="enabled" class="form-control"'); ?>
                            <?php if (form_error('enabled')) { echo form_error('enabled'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('social_form_enabled'); ?></p>
							<?php } ?>							
			    		</div>								
			    		</div>
							<br /> &nbsp; <br />					
						
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('save_social_btn'); ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
 