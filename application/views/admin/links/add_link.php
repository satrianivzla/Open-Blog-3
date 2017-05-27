<?php 
 /**
 * Add New Link
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
            <a href="<?php echo site_url('admin_links'); ?>" class="btn btn-default"><?php echo lang('links_hdr'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('index_add_new_link'); ?></a>
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
			<?php echo form_open(current_url()); ?>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><?php echo lang('index_add_new_link'); ?></h3>
			 	</div>
			  	<div class="panel-body">
			       		<div class="well">
						     <?php echo lang('add_link_subheading'); ?>
						</div>

                    <fieldset>
			    	  	<div class="form-group<?php if (form_error('name')) { ?> has-error has-feedback <?php } ?>">
						  <label for="name" class="col-lg-2 control-label"><?php echo $this->lang->line('link_form_name'); ?></label>
					      <div class="col-lg-10">
			    		    <?php echo form_input(['name'=> 'name', 'id' => 'name', 'class' => "form-control", 'placeholder' => lang('link_form_name'), 'value' => set_value('name')]); ?>
                            <?php if (form_error('name')) { echo form_error('name'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('link_form_name_help'); ?></p>
							<?php } ?>				    		
						</div>
						</div>
						
			    		<div class="form-group<?php if (form_error('url')) { ?> has-error has-feedback <?php } ?>">
	                        <label for="url" class="col-lg-2 control-label"><?php echo $this->lang->line('link_form_urlname'); ?></label>
					      <div class="col-lg-10">		    			
							<?php echo form_input(['name'=> 'url', 'id' => 'url', 'class' => "form-control", 'placeholder' => lang('link_form_url'), 'value' => set_value('url')]); ?>
                           <?php if (form_error('url')) { echo form_error('url'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('link_form_url_help'); ?></p>
							<?php } ?>				    		
						</div>							
			    		</div>						
						
			    		<div class="form-group<?php if (form_error('target')) { ?> has-error has-feedback <?php } ?>">
			    			 <label for="target" class="col-lg-2 control-label"><?php echo $this->lang->line('link_form_url_target'); ?></label>
							  <div class="col-lg-10">
							<?php echo form_dropdown('target', ['_blank' => lang('blank_window'), '_self' => lang('same_window')], ($this->input->post('target'))?$this->input->post('target'):null, 'id="target" class="form-control"'); ?>
                            <?php if (form_error('target')) { echo form_error('target'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('link_form_target_help'); ?></p>
							<?php } ?>				    		
						</div>								
			    		</div>
						
			    		<div class="form-group<?php if (form_error('description')) { ?> has-error has-feedback <?php } ?>">
			    			 <label for="description" class="col-lg-2 control-label"><?php echo $this->lang->line('link_form_desc'); ?></label>
							  <div class="col-lg-10">
							 <?php echo form_input(['name'=> 'description', 'id' => 'description', 'class' => "form-control", 'placeholder' => lang('link_form_desc'), 'value' => set_value('description')]); ?>
		                     <?php if (form_error('description')) { echo form_error('description'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('link_form_description_help'); ?></p>
							<?php } ?>						 
			    		</div>
						</div>	
						
			    		<div class="form-group<?php if (form_error('visible')) { ?> has-error has-feedback <?php } ?>">
						    <label for="visible" class="col-lg-2 control-label"><?php echo $this->lang->line('link_form_visibility'); ?></label>
							 <div class="col-lg-10">
			    			<?php echo form_dropdown('visible', ['1' => lang('visible'), '0' => lang('not_visible')], ($this->input->post('visible'))?$this->input->post('visible'):null, ' id="visible" class="form-control"'); ?>
                            <?php if (form_error('visible')) { echo form_error('visible'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('link_form_visibility_help'); ?></p>
							<?php } ?>								
			    		</div>
						</div>
						
			    		<div class="form-group<?php if (form_error('position')) { ?> has-error has-feedback <?php } ?>">
			    			 <label for="position" class="col-lg-2 control-label"><?php echo $this->lang->line('link_form_position'); ?></label>
							 <div class="col-lg-10">
							 <?php echo form_input(['name'=> 'position', 'id' => 'position', 'class' => "form-control", 'placeholder' => lang('link_form_position'), 'value' => set_value('position')]); ?>
							  <?php if (form_error('position')) { echo form_error('position'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('link_form_position_help'); ?></p>
							<?php } ?>	
			    		</div>
						</div>
						<br /> &nbsp; <br />	
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('save_link_btn'); ?>">
			    	</fieldset>
			      
			    </div>
			</div>
	        </form>	 
</div>