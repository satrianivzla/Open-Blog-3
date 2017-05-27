<?php 
 /**
 * Editing Post
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
			<a href="#" class="btn btn-primary"><?php echo lang('posts_edit_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 

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
 
	</div>
</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><?php echo lang('index_edit_post'); ?></h3>
		  </div>
		  <div class="panel-body">
			 	<div class="well"><?php echo lang('add_post_subheading'); ?></div>
		<?php echo form_open_multipart(current_url()); ?>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo lang('posts_basics_label'); ?></a></li>
    <li role="presentation"><a href="#advanced" aria-controls="advanced" role="tab" data-toggle="tab"><?php echo lang('posts_advanced_label'); ?></a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
         <br /> &nbsp; <br />	
		<div class="row m-t-m">
			<div class="col-xs-8">
			
				<div class="panel panel-default">
				  <div class="panel-body">
				  
                 <div class="form-group">
					<label for="title"><?php echo lang('post_form_title_text'); ?></label>				
					<?php echo form_input(['name' => 'title', 'id' => 'title', 'class' => 'form-control', 'value' => $post['title'], 'placeholder' => lang('post_form_title_text') ]); ?>
					<p class="help-block"><?php echo lang('post_form_title_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="status"><?php echo lang('post_form_status_text'); ?></label>
					<?php echo form_dropdown('status',['published' => lang('post_form_status_active'), 'draft' => lang('post_form_status_inactive')] , $post['status'], ['id' => 'status', 'class' => 'form-control']); ?>
					<p class="help-block"><?php echo lang('post_form_status_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="content"><?php echo lang('post_form_content_text'); ?></label>					
					<?php echo form_textarea(['name' => 'content', 'id' => 'content', 'class' => 'form-control', 'value' => $post['content'], 'placeholder' => lang('post_form_content_text')]); ?>
					<p class="help-block"><?php echo lang('post_form_content_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="excerpt"><?php echo lang('post_form_excerpt_text'); ?></label>
					<?php echo form_textarea(['name' => 'excerpt', 'id' => 'excerpt', 'class' => 'form-control', 'value' => $post['excerpt'], 'placeholder' => lang('post_form_excerpt_text')]); ?>
					<p class="help-block"><?php echo lang('post_form_excerpt_help_text'); ?></p>
		  		</div>			  
					 
				  </div>
				</div>			
			    
			</div>

			<div class="col-xs-4">
			
			<div class="panel panel-default">
			  <div class="panel-body">
			  
			  	<h4><?php echo lang('optional_hdr') ?></h4>

				<div class="form-group">
					<label for="excerpt"><?php echo lang('cats_hdr'); ?></label>
					<p class="help-block"><?php echo lang('post_form_cats_help_text'); ?></p>
					<?php echo form_multiselect('cats[]', $post['cats'], $post['selected_cats'], ['id' => 'cats[]','class' => 'form-control']); ?>
		  		</div>

				<div class="form-group">
					<label for="feature_image"><?php echo lang('post_form_feature_image_text'); ?></label>
					<?php if($post['feature_image']): ?>
			          <img src="<?php echo base_url('uploads/' . $post['feature_image']) ?>" class="img-responsive" alt="<?php echo $post['title']; ?>"  title="<?php echo $post['title']; ?>">
			        <?php endif ?>					
					<p class="help-block"><?php echo lang('post_edit_form_feature_image_help_text') ?></p>
					<?php echo form_upload(['name' => 'feature_image', 'id' => 'feature_image', 'class' => 'form-control' ]); ?>
		  		</div>

				<p class="help-block"><?php echo lang('optional_help_text'); ?></p>
				<div class="form-group">
					<label for="meta_title"><?php echo lang('post_form_meta_title_text'); ?></label>
					<?php echo form_input(['name' => 'meta_title', 'id' => 'meta_title', 'class' => 'form-control', 'value' => $post['meta_title'], 'placeholder' => lang('post_form_meta_title_text')]); ?>
					<p class="help-block"><?php echo lang('post_form_meta_title_help_text'); ?></p>					
		  		</div>

		  		<div class="form-group">
					<label for="meta_keywords"><?php echo lang('post_form_meta_keywords_text'); ?></label>
					<p class="help-block"><?php echo lang('post_form_meta_keywords_help_text'); ?></p>
					<?php echo form_input(['name' => 'meta_keywords', 'id' => 'meta_keywords', 'class' => 'form-control', 'value' => $post['meta_keywords'], 'placeholder' => lang('post_form_meta_keywords_text') ]); ?>
		  		</div>

		  		<div class="form-group">
					<label for="meta_description"><?php echo lang('post_form_meta_desc_text'); ?></label>
					<p class="help-block"><?php echo lang('post_form_meta_desc_help_text'); ?></p>
					<?php echo form_input(['name' => 'meta_description', 'id' => 'meta_description', 'class' => 'form-control', 'value' => $post['meta_description'], 'placeholder' => lang('post_form_meta_desc_text')]); ?>
		  		</div>
			 
			  </div>
			</div>
			
			</div>	 

    </div>
    <div role="tabpanel" class="tab-pane fade" id="advanced">
        
		<br /> &nbsp; <br />	
    	<div class="row m-t-m">
			<div class="col-xs-8">
			
			<div class="panel panel-default">
			   <div class="panel-body">
			   
              	<div class="form-group">
					<label for="url_title"><?php echo lang('post_form_url_title_text'); ?></label>					
					<?php echo form_input(['name' => 'url_title', 'id' => 'url_title', 'class' => 'form-control', 'value' => $post['url_title'], 'placeholder' => lang('post_form_url_title_text') ]); ?>
					<p class="help-block"><?php echo lang('post_form_url_title_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="status"><?php echo lang('post_form_redirect_text'); ?></label>
					<?php echo form_dropdown('redirection',['none' => lang('post_form_redirect_none'), '301' => lang('post_form_redirect_perm'), '302' => lang('post_form_redirect_temp')] , '301', ['id' => 'redirection', 'class' => 'form-control']); ?>
					<p class="help-block"><?php echo lang('post_form_redirect_help_text'); ?></p>					
		  		</div>				 
				  </div>
				</div>

		  	</div>
		  </div>

    </div>

  </div>
   
	<div class="form-group">
		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('save_post_btn'); ?>">
	</div>
</div>
 
</form>		
		  </div>
		</div>		



<script>
var simplemde = new SimpleMDE({
	forceSync: true,
    element: document.getElementById("content")
});
</script>