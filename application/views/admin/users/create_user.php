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
			<a href="#" class="btn btn-primary"><?php echo lang('create_user_heading'); ?></a>
         </div>		 
		 <br /> &nbsp; <br /> 
 
    <div class="row"> 
	<div class="col-lg-12">
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
            <h3 class="panel-title"><?php echo lang('create_user_heading'); ?></h3>
        </div>
          <div class="panel-body">
		  
		   <div class="well"><?php echo lang('create_user_subheading'); ?></div>
		  
            <?php echo form_open();?>

            <fieldset>
              <div class="form-group<?php if (form_error('first_name')) { ?> has-error has-feedback <?php } ?>">
				<label for="first_name" class="col-lg-2 control-label"><?php echo $this->lang->line('users_form_first_name'); ?></label>
				<div class="col-lg-10">
                <?php echo form_input($first_name);?>
                <?php if (form_error('first_name')) { echo form_error('first_name'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_first_name_help'); ?></p>
				<?php } ?>							
			    </div>             
			  </div>
              
			  <div class="form-group<?php if (form_error('last_name')) { ?> has-error has-feedback <?php } ?>">
				<label for="last_name" class="col-lg-2 control-label"><?php echo $this->lang->line('users_form_last_name'); ?></label>
				<div class="col-lg-10">
                  <?php echo form_input($last_name);?>
                <?php if (form_error('last_name')) { echo form_error('last_name'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_last_name_help'); ?></p>
				<?php } ?>							
			    </div>    				  
              </div>
			  
              <?php
                if($identity_column!=='email'): ?>
              <div class="form-group<?php if (form_error('identity')) { ?> has-error has-feedback <?php } ?>">
				<label for="identity" class="col-lg-2 control-label"><?php echo $this->lang->line('users_form_identity'); ?></label>
				<div class="col-lg-10">
                  <?php echo form_input($identity);?>
                  <?php if (form_error('identity')) { echo form_error('identity'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_identity_help'); ?></p>
				<?php } ?>							
			    </div> 				  
              </div>			  
              <?php endif ?>
			  
              <div class="form-group<?php if (form_error('company')) { ?> has-error has-feedback <?php } ?>">
				<label for="company" class="col-lg-2 control-label"><?php echo $this->lang->line('users_form_company'); ?></label>
				<div class="col-lg-10">
                  <?php echo form_input($company);?>
                  <?php if (form_error('company')) { echo form_error('company'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_company_help'); ?></p>
				<?php } ?>							
			    </div> 				  
              </div>
			  
              <div class="form-group<?php if (form_error('email')) { ?> has-error has-feedback <?php } ?>">
				<label for="email" class="col-lg-2 control-label"><?php echo $this->lang->line('users_form_email'); ?></label>
				<div class="col-lg-10">
                  <?php echo form_input($email);?>
                  <?php if (form_error('email')) { echo form_error('email'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_email_help'); ?></p>
				<?php } ?>							
			    </div>				  
              </div>
			  
              <div class="form-group<?php if (form_error('phone')) { ?> has-error has-feedback <?php } ?>">
				<label for="phone" class="col-lg-2 control-label"><?php echo $this->lang->line('users_form_phone'); ?></label>
				<div class="col-lg-10">
                  <?php echo form_input($phone);?>
                  <?php if (form_error('phone')) { echo form_error('phone'); } else { ?>
			 	  <p class="help-block"><?php echo $this->lang->line('users_form_phone_help'); ?></p>
				<?php } ?>							
			    </div>				  
              </div>
			  
              <div class="form-group<?php if (form_error('password')) { ?> has-error has-feedback <?php } ?>">
				<label for="password" class="col-lg-2 control-label"><?php echo $this->lang->line('users_form_password'); ?></label>
				<div class="col-lg-10">
                  <?php echo form_input($password);?>
                  <?php if (form_error('password')) { echo form_error('password'); } else { ?>
			 	  <p class="help-block"><?php echo $this->lang->line('users_form_password_help'); ?></p>
				<?php } ?>							
			    </div>					  
              </div>
			  			  
              <div class="form-group<?php if (form_error('password_confirm')) { ?> has-error has-feedback <?php } ?>">
				<label for="password_confirm" class="col-lg-2 control-label"><?php echo $this->lang->line('users_form_password_confirm'); ?></label>
				<div class="col-lg-10">
                   <?php echo form_input($password_confirm);?>
				   <?php if (form_error('password_confirm')) { echo form_error('password_confirm'); } else { ?>
			 	  <p class="help-block"><?php echo $this->lang->line('users_form_password_confirm_help'); ?></p>
				<?php } ?>							
			    </div>		
              </div>
              <br /> &nbsp; <br />
              <input class="btn btn-lg btn-default btn-block" type="submit" value="Create User">
            </fieldset>
			
			</form>
             
          </div>
      </div>
    </div>
    </div> 