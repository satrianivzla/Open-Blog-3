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

			<?php if (isset($message)): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $message; ?>
				</div>
			<?php endif ?>
			
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><?php echo lang('index_add_new_cat'); ?></h3>
			 	</div>
			  	<div class="panel-body">
			    	<?php echo form_open(current_url());?>
			    		<p><?php echo lang('add_cat_subheading'); ?></p>
						<br />
                    <fieldset>
			    	  	<div class="form-group<?php if (form_error('name')) { ?> has-error has-feedback <?php } ?>">
						<label for="name" class="col-lg-2 control-label"><?php echo $this->lang->line('cat_form_name'); ?></label>
						<div class="col-lg-10">
			    		    <?php echo form_input(['name'=> 'name', 'id' => 'name', 'class' => "form-control", 'placeholder' => lang('cat_form_name'), 'value' => set_value('name')]); ?>
                             <?php if (form_error('name')) { echo form_error('name'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('cat_form_name_help'); ?></p>
							<?php } ?>							
			    		</div>
						</div>
			    		<div class="form-group<?php if (form_error('url_name')) { ?> has-error has-feedback <?php } ?>">
						<label for="url_name" class="col-lg-2 control-label"><?php echo $this->lang->line('cat_form_url_slug'); ?></label>
						<div class="col-lg-10">
			    			<?php echo form_input(['name'=> 'url_name', 'id' => 'url_name', 'class' => "form-control", 'placeholder' => lang('cat_form_url'), 'value' => set_value('url_name')]); ?>
                             <?php if (form_error('url_name')) { echo form_error('url_name'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('cat_form_url_name_help'); ?></p>
							<?php } ?>								
			    		</div>
						</div>
			    		<div class="form-group<?php if (form_error('description')) { ?> has-error has-feedback <?php } ?>">
						<label for="description" class="col-lg-2 control-label"><?php echo $this->lang->line('cat_form_desc'); ?></label>
						<div class="col-lg-10">
			    			<?php echo form_input(['name'=> 'description', 'id' => 'description', 'class' => "form-control", 'placeholder' => lang('cat_form_desc'), 'value' => set_value('description')]); ?>
                             <?php if (form_error('description')) { echo form_error('description'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('cat_form_description_help'); ?></p>
							<?php } ?>								
			    		</div>
						</div>
						<br /> &nbsp; <br />
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('save_cat_btn'); ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		 </div>
	</div>
