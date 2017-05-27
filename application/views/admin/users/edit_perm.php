<?php 
 /**
 * Add Category
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
            <a href="<?php echo site_url('admin_users'); ?>" class="btn btn-default"><?php echo lang('users_section_name'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('edit_perm_heading'); ?></a>
         </div>		 
		 <br /> &nbsp; <br /> 
 
    <div class="row">
		 
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><?php echo lang('edit_perm_heading'); ?></h3>
			 	</div>
			  	<div class="panel-body">
			    	<?php echo form_open(current_url()); ?>
			    		<div class="well text-center"><?php echo lang('edit_perm_subheading'); ?></div>
                    <fieldset>
			    	  	<div class="form-group<?php if (form_error('perm_name')) { ?> has-error has-feedback <?php } ?>">
							<label for="perm_name" class="col-lg-2 control-label"><?php echo $this->lang->line('permission_form_name_label'); ?></label>
							<div class="col-lg-10">
			    		    <?php echo form_input($perm_name); ?>
                            <?php if (form_error('perm_name')) { echo form_error('perm_name'); } else { ?>
		                         <p class="help-block"><?php echo $this->lang->line('permission_form_name_help'); ?></p>
							<?php } ?>							
							</div>   							
			    		</div>
											
			    		<div class="form-group<?php if (form_error('perm_description')) { ?> has-error has-feedback <?php } ?>">
							<label for="perm_description" class="col-lg-2 control-label"><?php echo $this->lang->line('permission_form_description_label'); ?></label>
							<div class="col-lg-10">
			    			<?php echo form_input($perm_description); ?>
			    		    <?php if (form_error('perm_description')) { echo form_error('perm_description'); } else { ?>
		                       <p class="help-block"><?php echo $this->lang->line('permission_form_description_help'); ?></p>
						    <?php } ?>							
						</div>  						
						</div>
						 <br /> &nbsp; <br />
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('edit_perm_heading'); ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>		 
	</div>
 