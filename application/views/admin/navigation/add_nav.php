<?php 
 /**
 * Create New Navigation
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
            <a href="<?php echo site_url('admin_navigation'); ?>" class="btn btn-default"><?php echo lang('navigation_section_name'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('navigation_add_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 

    <div class="row"> 
	<div class="col-lg-12">
		<?php 
		   if (validation_errors()) {  ?>
			<div class="alert alert-danger alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> 
			  <br /> 
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
				<h3 class="panel-title"><?php echo lang('nav_new_hdr'); ?></h3>
			  </div>
			  <div class="panel-body">
				<p><?php echo lang('edit_nav_subheading'); ?></p>

		<?php echo form_open(current_url()); ?>
		 
			<div class="form-group<?php if (form_error('title')) { ?> has-error has-feedback <?php } ?>">
			   <label for="title" class="col-lg-2 control-label"><?php echo $this->lang->line('nav_form_title_text'); ?></label>
			   <div class="col-lg-10">
			   <?php echo form_input(['name' => 'title', 'id' => 'title', 'class' => 'form-control', 'value' => set_value('title'), 'placeholder' => lang('nav_form_title_text') ]); ?>
               <?php if (form_error('title')) { echo form_error('title'); } else { ?>
					<p class="help-block"><?php echo $this->lang->line('nav_form_title_help_text'); ?></p>
			    <?php } ?>							
			    </div>			   
		 	</div>

	  		<div class="form-group<?php if (form_error('description')) { ?> has-error has-feedback <?php } ?>">
				<label for="description" class="col-lg-2 control-label"><?php echo lang('nav_form_desc_text'); ?></label>
				<div class="col-lg-10">
				<?php echo form_input(['name' => 'description', 'id' => 'description', 'class' => 'form-control', 'value' => set_value('description'), 'placeholder' => lang('nav_form_desc_text') ]); ?>
                <?php if (form_error('description')) { echo form_error('description'); } else { ?>
					<p class="help-block"><?php echo $this->lang->line('nav_form_desc_help_text'); ?></p>
			    <?php } ?>							
			    </div>			 
	  		</div>
			
			<br /> &nbsp; <br />
			<div class="well">  
				<h4><?php echo lang('nav_right_side_hdr'); ?></h4>
				<p><?php echo lang('nav_right_side_desc'); ?></p>
			</div>
			<br /> &nbsp; <br />	
	        
			<?php /* Hay que validar el valor en blanco de este dropdown */ ?>
			<div class="form-group<?php if (form_error('page')) { ?> has-error has-feedback <?php } ?>">
				<label for="page" class="col-lg-2 control-label"><?php echo lang('nav_form_choose_page'); ?></label>
				<div class="col-lg-10">
				<?php echo form_dropdown('page', $page_slugs, '', 'id="page" class="form-control"'); ?>
                <?php if (form_error('page')) { echo form_error('page'); } else { ?>
					<p class="help-block"><?php echo $this->lang->line('nav_form_choose_page_help_text'); ?></p>
			    <?php } ?>							
			    </div>				
	  		</div>	
            <?php /* Hay que validar el valor en blanco de este dropdown */ ?>
	  		<div class="form-group<?php if (form_error('post')) { ?> has-error has-feedback <?php } ?>">
			  <label for="post" class="col-lg-2 control-label"><?php echo $this->lang->line('nav_form_choose_post'); ?></label>
		  	 <div class="col-lg-10">
		 		<?php echo form_dropdown('post', $post_slugs, '', 'id="post" class="form-control"'); ?>
                <?php if (form_error('post')) { echo form_error('post'); } else { ?>
					<p class="help-block"><?php echo $this->lang->line('nav_form_choose_post_help_text'); ?></p>
				<?php } ?>					
	  		</div>	
			</div>
			
			<br /> &nbsp; <br />	
			
			<?php /*
			<div class="form-group">
				<label for="url"><?= lang('nav_form_url_text') ?></label>
				<p class="help-block"><?= lang('nav_form_url_help_text') ?></p>
				<?= form_input(['name' => 'url', 'class' => 'form-control', 'value' => set_value('url'), 'placeholder' => lang('nav_form_url_text_example') ]) ?>
	  		</div>
			*/ ?>

				<div class="form-group">
					<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('nav_save_btn');?>">
				</div>		  		
	 </form>				
				
			  </div>
			</div>	
</div>
</div>