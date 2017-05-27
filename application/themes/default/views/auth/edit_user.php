<div class="container">
    <div class="row">
   	<div class="col-lg-8">
	<?php 
		   if (validation_errors()) {  ?>
			<div class="alert alert-danger alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>¡Important!</strong> <br /> 
			  You must check and fix form error messages to allow you to continue.
 
			</div>
         <?php } ?>

	
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo lang('edit_user_heading'); ?></h3>
        </div>
          <div class="panel-body">
            <?php echo form_open(uri_string()); ?>
             <div class="well"><?php echo lang('edit_user_subheading'); ?></div>
                    <fieldset>
              <div class="form-group<?php if (form_error('first_name')) { ?> has-error has-feedback <?php } ?>">
				<label for="first_name" class="col-lg-3 control-label"><?php echo $this->lang->line('users_form_first_name'); ?></label>
				<div class="col-lg-9">
                  <?php echo form_input($first_name); ?>
                  <?php if (form_error('first_name')) { echo form_error('first_name'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_first_name_help'); ?></p>
				<?php } ?>							
			    </div>  				  
              </div>
			  
			  
              <div class="form-group<?php if (form_error('last_name')) { ?> has-error has-feedback <?php } ?>">
				<label for="last_name" class="col-lg-3 control-label"><?php echo $this->lang->line('users_form_last_name'); ?></label>
				<div class="col-lg-9">
                  <?php echo form_input($last_name); ?>
                  <?php if (form_error('last_name')) { echo form_error('last_name'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_last_name_help'); ?></p>
				<?php } ?>							
			    </div> 					  
              </div>
			  			  
               <div class="form-group<?php if (form_error('company')) { ?> has-error has-feedback <?php } ?>">
				<label for="company" class="col-lg-3 control-label"><?php echo $this->lang->line('users_form_company'); ?></label>
				<div class="col-lg-9">
                  <?php echo form_input($company); ?>
                  <?php if (form_error('company')) { echo form_error('company'); } else { ?>
				  <p class="help-block"><?php echo $this->lang->line('users_form_company_help'); ?></p>
				<?php } ?>							
			    </div> 						  
              </div>
			  
              <div class="form-group<?php if (form_error('phone')) { ?> has-error has-feedback <?php } ?>">
				<label for="phone" class="col-lg-3 control-label"><?php echo $this->lang->line('users_form_phone'); ?></label>
				<div class="col-lg-9">
                  <?php echo form_input($phone); ?>
                  <?php if (form_error('phone')) { echo form_error('phone'); } else { ?>
			 	  <p class="help-block"><?php echo $this->lang->line('users_form_phone_help'); ?></p>
				<?php } ?>							
			    </div>					  
              </div>
			  
              <div class="form-group<?php if (form_error('password')) { ?> has-error has-feedback <?php } ?>">
				  <label for="password" class="col-lg-3 control-label"><?php echo $this->lang->line('users_form_password'); ?></label>
				  <div class="col-lg-9">
                  <?php echo form_input($password); ?>
                  <?php if (form_error('password')) { echo form_error('password'); } else { ?>
			 	  <p class="help-block"><?php echo $this->lang->line('users_form_password_help'); ?></p>
				<?php } ?>					  
              </div>
              </div>
			  
			  <div class="form-group<?php if (form_error('password_confirm')) { ?> has-error has-feedback <?php } ?>">
				<label for="password_confirm" class="col-lg-3 control-label"><?php echo $this->lang->line('users_form_password_confirm'); ?></label>
				<div class="col-lg-9">
                  <?php echo form_input($password_confirm); ?>
				    <?php if (form_error('password_confirm')) { echo form_error('password_confirm'); } else { ?>
			 	  <p class="help-block"><?php echo $this->lang->line('users_form_password_confirm_help'); ?></p>
				<?php } ?>							
			    </div>						  
              </div>
              
			  <div class="clearfix"></div>
              <br /> &nbsp; <br />

              <?php if ($this->ion_auth->is_admin()): ?>
			  <div class="well">
              <div class="form-group">
                <h3><?php echo lang('edit_user_groups_heading');?></h3>
                <p class="text-center">Add or remove a user from a group by checking or unchecking the corrosponding box.</p>
                <?php foreach ($groups as $group):?>
                    <?php
                        $gID=$group['id'];
                        $checked = null;
                        $item = null;
                        foreach($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked= ' checked="checked"';
                            break;
                            }
                        }
                    ?>
                    <div class="checkbox">
                    <label>
                      <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                    </label>
                  </div>
                <?php endforeach?>
                  </div>
                <?php endif ?>
              </div>
                <?php echo form_hidden('id', $user['id']);?>
                <?php echo form_hidden($csrf); ?>
                <br /> &nbsp; <br />
              <input class="btn btn-lg btn-default btn-block" type="submit" value="Edit User">
            </fieldset>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>