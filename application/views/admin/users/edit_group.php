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
			<a href="#" class="btn btn-primary"><?php echo lang('edit_group_heading'); ?></a>
         </div>		 
		 <br /> &nbsp; <br /> 
 
    <div class="row">
	 
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><?php echo lang('edit_group_heading'); ?></h3>
			 	</div>
			  	<div class="panel-body">
			    	<?php echo form_open(current_url()); ?>
			    		<div class="well text-center"><?php echo lang('edit_group_subheading'); ?></div>
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
						
			    		<div class="form-group<?php if (form_error('group_description')) { ?> has-error has-feedback <?php } ?>">
						<label for="group_description" class="col-lg-2 control-label"><?php echo $this->lang->line('groups_form_description'); ?></label>
							<div class="col-lg-10">
			    			<?php echo form_input($group_description); ?>
                            <?php if (form_error('group_description')) { echo form_error('group_description'); } else { ?>
								   <p class="help-block"><?php echo $this->lang->line('groups_form_description_help'); ?></p>
								<?php } ?>							
							</div> 							
			    		</div>
						
						<div class="clearfix">  <br /> &nbsp; <br /> </div>

			    		<?php if ($group_id == 1): ?>
			    		<div class="alert alert-info alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong><?php echo lang('permissions_label'); ?></strong>   <br />
						  <p><?php echo lang('admin_perm_notice'); ?></p>
						</div>						
			    		
			    		<?php else: ?>
			    		<div class="alert alert-info alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong><?php echo lang('permissions_label'); ?></strong>   <br />						
			    		<p><?php echo lang('permissions_desc'); ?></p>
						</div>		
				    		<?php foreach ($group_perms as $perm): ?>
				    		<div class="checkbox">
							    <label>
							      <input type="checkbox" name="<?php echo $perm->id; ?>"<?php if ($perm->selected) echo ' checked'; ?>> <?php echo $perm->name; ?>
							    </label>
							  </div>
							<?php endforeach ?>
						<?php endif?>
                         <br /> &nbsp; <br />						
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('groups_form_edit_button'); ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
	</div>
 