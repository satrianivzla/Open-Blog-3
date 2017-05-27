<?php 
 /**
 * Add a new Post
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
            <a href="<?php echo site_url('admin_posts'); ?>" class="btn btn-default"><?php echo lang('posts_hdr'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('posts_add_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 

        <br />

		<div class="row">
			<div class="col-xs-12">
			
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
			<h3 class="panel-title"><?php echo lang('index_add_new_post'); ?></h3>
		  </div>
		  <div class="panel-body">
 		
				<?php echo form_open_multipart(current_url()); ?>
				<p><?php echo lang('add_post_subheading'); ?></p>
			<div class="row">

				<div class="col-xs-8">
				
					<div class="panel panel-default">
					  <div class="panel-body">

					<div class="form-group<?php if (form_error('title')) { ?> has-error has-feedback <?php } ?>">
						<label for="title" class="control-label"><?php echo lang('post_form_title_text'); ?></label>
						<?php echo form_input(['name' => 'title', 'id' => 'title',  'class' => 'form-control', 'placeholder' => lang('post_form_title_text') ]); ?>
                        <?php if (form_error('title')) { echo form_error('title'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('post_form_title_help_text'); ?></p>
						<?php } ?>							
					</div>

					<div class="form-group<?php if (form_error('status')) { ?> has-error has-feedback <?php } ?>">
						<label for="status" class="control-label"><?php echo lang('post_form_status_text'); ?></label>
						<?php echo form_dropdown('status',['published' => lang('post_form_status_active'), 'draft' => lang('post_form_status_inactive')] , 'draft', [  'id' => 'status', 'class' => 'form-control']); ?>
                        <?php if (form_error('status')) { echo form_error('status'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('post_form_status_help_text'); ?></p>
						<?php } ?>	 					
					</div>

					<div class="form-group<?php if (form_error('content')) { ?> has-error has-feedback <?php } ?>">
						<label for="content" class="control-label"><?php echo lang('post_form_content_text'); ?></label>
						<?php echo form_textarea(['name' => 'content', 'id' => 'content', 'value' => set_value('content'), 'class' => 'form-control', 'placeholder' => lang('post_form_content_text')]); ?>
                        <?php if (form_error('content')) { echo form_error('content'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('post_form_content_help_text'); ?></p>
						<?php } ?>	 							
					</div>

					<div class="form-group<?php if (form_error('excerpt')) { ?> has-error has-feedback <?php } ?>">
						<label for="excerpt" class="control-label"><?php echo lang('post_form_excerpt_text'); ?></label>
						<?php echo form_textarea(['name' => 'excerpt', 'id' => 'excerpt', 'class' => 'form-control', 'placeholder' => lang('post_form_excerpt_text')]); ?>
                        <?php if (form_error('excerpt')) { echo form_error('excerpt'); } else { ?>
								<p class="help-block"><?php echo $this->lang->line('post_form_excerpt_help_text'); ?></p>
						<?php } ?>	 						
					</div>
					  

					  </div>
					</div>
				
				</div>

				<div class="col-xs-4">
				
				<div class="panel panel-default">
				  <div class="panel-body">
				  
			 	<h4><?php echo lang('optional_hdr'); ?></h4>

					<div class="form-group">
						<label for="excerpt"><?php echo lang('cats_hdr'); ?></label>
						<?php echo form_multiselect('cats[]', $cats, null, ['id' => 'cats[]', 'class' => 'form-control']); ?>
						<p class="help-block"><?php echo lang('post_form_cats_help_text') ?></p>
					</div>

					<div class="form-group">
						<label for="feature_image"><?php echo lang('post_form_feature_image_text'); ?></label>
						<?php echo form_upload(['name' => 'feature_image', 'id' => 'feature_image', 'class' => 'form-control']); ?>
						<p class="help-block"><?php echo lang('post_add_form_feature_image_help_text'); ?></p>						
					</div>

					<div class="form-group">
						<label for="url_title"><?php echo lang('post_form_url_title_text'); ?></label>
						<?php echo form_input(['name' => 'url_title', 'id' => 'url_title', 'class' => 'form-control', 'placeholder' => lang('post_form_url_title_text') ]); ?>
						<p class="help-block"><?php echo lang('post_add_form_url_title_help_text'); ?></p>						
					</div>

					<p class="help-block"><?php echo lang('optional_help_text'); ?></p>
					<div class="form-group">
						<label for="meta_title"><?php echo lang('post_form_meta_title_text'); ?></label>
						<?php echo form_input(['name' => 'meta_title', 'id' => 'meta_title', 'class' => 'form-control', 'placeholder' => lang('post_form_meta_title_text')]); ?>
						<p class="help-block"><?php echo lang('post_form_meta_title_help_text'); ?></p>						
					</div>

					<div class="form-group">
						<label for="meta_keywords"><?php echo lang('post_form_meta_keywords_text'); ?></label>
						<?php echo form_input(['name' => 'meta_keywords', 'id' => 'meta_keywords', 'class' => 'form-control', 'placeholder' => lang('post_form_meta_keywords_text') ]); ?>
						<p class="help-block"><?php echo lang('post_form_meta_keywords_help_text'); ?></p>						
					</div>

					<div class="form-group">
						<label for="meta_description"><?php echo lang('post_form_meta_desc_text'); ?></label>
						<?php echo form_input(['name' => 'meta_description', 'id' => 'meta_description', 'class' => 'form-control', 'placeholder' => lang('post_form_meta_desc_text')]); ?>
						<p class="help-block"><?php echo lang('post_form_meta_desc_help_text'); ?></p>						
					</div>				  
				  
					 
				  </div>
				</div>
				
					
				</div>
					<br /> &nbsp; <br />				
					<div class="form-group">
						<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('save_post_btn');?>">
					</div>

			</div>
			</form>		
					
		  </div>
		</div>
		
		  </div>
		</div>
	
<script>
var simplemde = new SimpleMDE({
	forceSync: true,
    element: document.getElementById("content")
});
</script>