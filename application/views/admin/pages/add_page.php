<?php 
 /**
 * Pages
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
            <a href="<?php echo site_url('admin_navigation'); ?>" class="btn btn-default"><?php echo lang('pages_section_name'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('pages_add_page'); ?></a> 
         </div>		  
		 <br /> &nbsp; <br />  

<div class="row">
	<div class="col-xs-12">

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
			<h3 class="panel-title"><?php echo lang('index_add_new_page'); ?></h3>
		  </div>
		  <div class="panel-body">
			<div class="well"><?php echo lang('add_page_subheading'); ?></div>

<?php echo form_open(current_url()); ?>	
<div class="row">

	<div class="col-xs-8">
	
	<div class="panel panel-default">
	  <div class="panel-body">
	 		<div class="form-group<?php if (form_error('title')) { ?> has-error has-feedback <?php } ?>">
			<label for="title" class="control-label"><?php echo lang('page_form_title_text'); ?></label>
			<?php echo form_input(['name' => 'title', 'id' => 'title', 'class' => 'form-control', 'placeholder' => lang('page_form_title_text') ]); ?>
            <?php if (form_error('title')) { echo form_error('title'); } else { ?>
				<p class="help-block"><?php echo lang('page_form_title_help_text'); ?></p>
			<?php } ?>				
  		</div>

  		<div class="form-group<?php if (form_error('status')) { ?> has-error has-feedback <?php } ?>">
			<label for="status" class="control-label"><?php echo lang('page_form_status_text'); ?></label>
			<?php echo form_dropdown('status',['active' => lang('page_form_status_active'), 'inactive' => lang('page_form_status_inactive')] , 'inactive', ['id' => 'status' , 'class' => 'form-control']); ?>
			<p class="help-block"><?php echo lang('page_form_status_help_text'); ?></p>
  		</div>

  		<div class="form-group<?php if (form_error('content')) { ?> has-error has-feedback <?php } ?>">
			<label for="content" class="control-label"><?php echo lang('page_form_content_text'); ?></label>
			<?php echo form_textarea(['name' => 'content', 'id' => 'content', 'class' => 'form-control', 'placeholder' => lang('page_form_content_text')]); ?>
			 <?php if (form_error('content')) { echo form_error('content'); } else { ?>
			<p class="help-block"><?php echo lang('page_form_content_help_text'); ?></p>
			<?php } ?>
  		</div>
	  </div>
	</div>

	</div>

	<div class="col-xs-4">
	
		<div class="panel panel-default">
		  <div class="panel-body">
	 		<h4><?php echo lang('optional_hdr') ?></h4>
		    <div class="well help-block"><?php echo lang('optional_help_text'); ?></div>
		
		<div class="form-group<?php if (form_error('meta_title')) { ?> has-error has-feedback <?php } ?>">
			<label for="meta_title" class="control-label"><?php echo lang('page_form_meta_title_text'); ?></label>
			<?php echo form_input(['name' => 'meta_title',  'id' => 'meta_title', 'class' => 'form-control', 'placeholder' => lang('page_form_meta_title_text')]); ?>
			<p class="help-block"><?php echo lang('page_form_meta_title_help_text'); ?></p>
  		</div>

  		<div class="form-group<?php if (form_error('meta_keywords')) { ?> has-error has-feedback <?php } ?>">
			<label for="meta_keywords" class="control-label"><?php echo lang('page_form_meta_keywords_text'); ?></label>
			<?php echo form_input(['name' => 'meta_keywords', 'id' => 'meta_keywords', 'class' => 'form-control', 'placeholder' => lang('page_form_meta_keywords_text') ]); ?>
			<p class="help-block"><?php echo lang('page_form_meta_keywords_help_text'); ?></p>
  		</div>

  		<div class="form-group<?php if (form_error('meta_description')) { ?> has-error has-feedback <?php } ?>">
			<label for="meta_description" class="control-label"><?php echo lang('page_form_meta_desc_text'); ?></label>		
			<?php echo form_input(['name' => 'meta_description',  'id' => 'meta_description', 'class' => 'form-control', 'placeholder' => lang('page_form_meta_desc_text')]); ?>
			<p class="help-block"><?php echo lang('page_form_meta_desc_help_text'); ?></p>
  		</div>

  		<div class="checkbox">
    		<label>
      			<input type="checkbox" name="is_home"> <?php echo lang('page_form_home_text'); ?>
    		</label>
			<p class="help-block"><?php echo lang('page_form_home_help_text'); ?></p>
  		</div>
		  </div>
		</div>
        
	</div>
		
		
  		<div class="form-group">
			<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('save_page_btn'); ?>">
  		</div>
  		
		
 </div>		
</form>				
			
		  </div>
		</div>				

	</div>
</div>
		


		
<script>
var simplemde = new SimpleMDE();
</script>

		
