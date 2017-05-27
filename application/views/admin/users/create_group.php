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
			<a href="#" class="btn btn-primary"><?php echo lang('create_group_heading'); ?></a>
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
	 
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><?php echo lang('create_group_heading'); ?></h3>
			 	</div>
			  	<div class="panel-body">
			    	<?php echo form_open();?>
			    	<div class="well text-center"><?php echo lang('create_group_subheading'); ?></div>
                    <fieldset>
			    	  	<div class="form-group<?php if (form_error('group_name')) { ?> has-error has-feedback <?php } ?>">
						<label for="group_name" class="col-lg-2 control-label"><?php echo $this->lang->line('groups_form_name'); ?></label>
							<div class="col-lg-10">
								<?php echo form_input($group_name); ?>
								<?php if (form_error('group_name')) { echo form_error('group_name'); } else { ?>
								   <p class="help-block"><?php echo $this->lang->line('groups_form_name_help'); ?></p>
								<?php } ?>							
							</div>   			    		
						</div>
						
						<div class="form-group<?php if (form_error('description')) { ?> has-error has-feedback <?php } ?>">
						<label for="description" class="col-lg-2 control-label"><?php echo $this->lang->line('groups_form_description'); ?></label>
							<div class="col-lg-10">
			    			<?php echo form_input($description); ?>
							<?php if (form_error('description')) { echo form_error('description'); } else { ?>
								   <p class="help-block"><?php echo $this->lang->line('groups_form_description_help'); ?></p>
								<?php } ?>							
							</div> 
			    		</div>
                        <br /> &nbsp; <br />
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo $this->lang->line('groups_form_button'); ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>	 
	</div>
 