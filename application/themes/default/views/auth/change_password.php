 
    <div class="row">
 	<?php 
		   if (validation_errors()) {  ?>
			<div class="alert alert-danger alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> 
			  <br /> 
			 <?php echo lang('error_general_message'); ?>
			</div>
         <?php } else {  ?>
    		<div class="alert alert-info alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong>  
			  <p class="text-center"><?php echo lang('password_change_message'); ?></p>
			</div>
	        <?php }  ?>						
            <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title"><?php echo lang('password_change_title'); ?></h3>
                        </div>
                        <div class="panel-body">
                        <?php echo form_open("auth/change_password");?>
                        <fieldset>
						
							<div class="form-group<?php if (form_error('old')) { ?> has-error has-feedback <?php } ?>">
								<label for="old" class="col-lg-3 control-label"><?php echo $this->lang->line('change_password_old_password_label'); ?></label>
								  <div class="col-lg-9">
                                  <?php echo form_input($old_password);?>
								  <?php if (form_error('old')) { echo form_error('old'); } else { ?>
									  <p class="help-block"><?php echo $this->lang->line('users_form_login_identity_help'); ?></p>
									<?php } ?>							
								  </div> 										  
                              </div>
							  
                              <div class="form-group<?php if (form_error('new')) { ?> has-error has-feedback <?php } ?>">
								<label for="new" class="col-lg-3 control-label"><?php echo $this->lang->line('change_password_validation_new_password_label'); ?></label>
								  <div class="col-lg-9">
                                  <?php echo form_input($new_password);?>
                                  <?php if (form_error('new')) { echo form_error('new'); } else { ?>
									  <p class="help-block"><?php echo $this->lang->line('users_form_login_identity_help'); ?></p>
									<?php } ?>							
								  </div> 									  
                              </div>
							  
                              <div class="form-group<?php if (form_error('new_confirm')) { ?> has-error has-feedback <?php } ?>">
								<label for="new_confirm" class="col-lg-3 control-label"><?php echo $this->lang->line('change_password_confirm_password_label'); ?></label>
								  <div class="col-lg-9">
                                  <?php echo form_input($new_password_confirm);?>
                                  <?php if (form_error('new_confirm')) { echo form_error('new_confirm'); } else { ?>
									  <p class="help-block"><?php echo $this->lang->line('users_form_login_identity_help'); ?></p>
									<?php } ?>							
								  </div> 									
                              </div>
							  
                              <?php echo form_input($user_id);?>
                              <div class="clearfix"> <br />&nbsp; <br /> </div>

                           
                              <input class="btn btn-lg btn-default btn-block" type="submit" value="Change Password">
							   <br /> &nbsp; <br />
                        </fieldset>
                        </form>
                      </div>
                  </div>
           
      </div>
 
