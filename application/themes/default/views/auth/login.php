 
    <div class="row">
	
	<?php 
		   if (validation_errors()) {  ?>
			<div class="alert alert-danger alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> 
			  <br /> 
			 <?php echo lang('error_general_message'); ?>
			</div>
         <?php } ?>	
   
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo lang('login_heading'); ?></h3>
        </div>
          <div class="panel-body">
            <?php echo form_open("auth/login"); ?>
              <fieldset>
                <div class="form-group<?php if (form_error('identity')) { ?> has-error has-feedback <?php } ?>">
				<label for="identity" class="col-lg-2 control-label"><?php echo $this->lang->line('login_identity_label'); ?></label>
			      <div class="col-lg-10">
                  <input class="form-control" placeholder="<?php echo lang('index_email_th'); ?>" id="identity" name="identity" type="text" autofocus>
                  <?php if (form_error('identity')) { echo form_error('identity'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_login_identity_help'); ?></p>
				<?php } ?>							
			    </div> 						  
              </div>
			  
              <div class="form-group<?php if (form_error('password')) { ?> has-error has-feedback <?php } ?>">
				<label for="password" class="col-lg-2 control-label"><?php echo $this->lang->line('login_password_label'); ?></label>
			      <div class="col-lg-10">
                <input class="form-control" placeholder="<?php echo lang('login_password_label'); ?>" id="password" name="password" type="password">
                   <?php if (form_error('password')) { echo form_error('password'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_login_password_help'); ?></p>
				<?php } ?>							
			    </div> 					
              </div>
			  
              <div class="checkbox">
                  <label>
                    <input name="remember" type="checkbox" value="<?php echo lang('login_remember_label'); ?>"> <?php echo lang('login_remember_label'); ?>
                  </label>
                </div>
                <br /> &nbsp; <br />
			  <input class="btn btn-lg btn-default btn-block" type="submit" value="Login">
              <p style="margin-top: 15px;" class="text-center">
                <a href="<?php echo site_url('auth/forgot_password'); ?>"><?php echo lang('login_forgot_password'); ?></a> 
                <?php if ( $this->config->item('allow_registrations') ): ?> | 
                <a class="" href="<?php echo site_url('auth/create_user'); ?>"><?php echo lang('create_user_heading'); ?></a>
                <?php endif ?>
              </p>
            </fieldset>
              </form>
          </div>
      </div>
     
  </div>
 