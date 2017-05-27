 
    <div class="row">
	
	<?php 
		   if (validation_errors()) {  ?>
			<div class="alert alert-danger alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>¡Important!</strong> <br /> 
			  You must check and fix form error messages to allow you to continue.
		   <?php  // Debe corregir los campos del formulario que estan resaltados en color rojo para poder continuar. ?>
			</div>
         <?php } ?>		
	 
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><?php echo lang('forgot_password_heading'); ?></h3>
			 	</div>
			  	<div class="panel-body">
			     	<div class="well text-center"><?php echo lang('forgot_password_subheading'); ?></div>
			    	<?php echo form_open("auth/forgot_password"); ?>
                    <fieldset>
			    	  	<div class="form-group<?php if (form_error('identity')) { ?> has-error has-feedback <?php } ?>">
			           	<label for="identity" class="col-lg-2 control-label"><?php echo $this->lang->line('login_identity_label'); ?></label>
			             <div class="col-lg-10">
			    		    <?php echo form_input($identity); ?>
							 <?php if (form_error('identity')) { echo form_error('identity'); } else { ?>
			              	  <p class="help-block"><?php echo $this->lang->line('users_form_login_identity_help'); ?></p>
			            	<?php } ?>							
			              </div>						
			    		</div>
						<br /> &nbsp; <br />
			    		
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('reset_password_submit_btn'); ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		 
	</div>
 