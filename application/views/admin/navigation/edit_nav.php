<?php 
 /**
 * Edit Navigation
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
			<a href="#" class="btn btn-primary"><?php echo lang('navigation_edit_page'); ?></a> 
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
			<h3 class="panel-title"><?php echo lang('nav_edit_hdr'); ?></h3>
		  </div>
		  <div class="panel-body">
			<p><?php echo lang('edit_nav_subheading'); ?></p>
	
  <?php echo form_open(current_url()); ?>

			<div class="form-group">
				<label for="title"><?php echo lang('nav_form_title_text'); ?></label>
				<p class="help-block"><?php echo lang('nav_form_title_help_text'); ?></p>
				<?php echo form_input(['name' => 'title', 'id' => 'title', 'class' => 'form-control', 'value' => (set_value('title')) ? set_value('title') : $nav['title'], 'placeholder' => lang('nav_form_title_text') ]); ?>
	  		</div>

	  		<div class="form-group">
				<label for="description"><?php echo lang('nav_form_desc_text'); ?></label>
				<p class="help-block"><?php echo lang('nav_form_desc_help_text'); ?></p>
				<?php echo form_input(['name' => 'description', 'id' => 'description', 'class' => 'form-control', 'value' => (set_value('description')) ? set_value('description') : $nav['description'], 'placeholder' => lang('nav_form_desc_text') ]); ?>
	  		</div>
			
	        <br /> &nbsp; <br />	
			<div class="well"> 
				<h4><?php echo lang('nav_right_side_hdr'); ?></h4>
				<p><?php echo lang('nav_right_side_desc'); ?></p>			
			</div>
	        <br /> &nbsp; <br />	
			
			<div class="form-group">
				<label for="page"><?php echo lang('nav_form_choose_page'); ?></label>
				<p class="help-block"><?php echo lang('nav_form_choose_page_help_text'); ?></p>
				<?php echo form_dropdown('page', $page_slugs, $nav['url'], 'id="page" class="form-control"'); ?>
	  		</div>	

	  		<div class="form-group">
				<label for="post"><?php echo lang('nav_form_choose_post'); ?></label>
				<p class="help-block"><?php echo lang('nav_form_choose_post_help_text'); ?></p>
				<?php echo form_dropdown('post', $post_slugs, $nav['url'], 'id="post" class="form-control"'); ?>
	  		</div>	
			
			<?php /*
			<!-- Developers, uncomment to use manual uri entry
			<div class="form-group">
				<label for="url"><?= lang('nav_form_url_text') ?></label>
				<p class="help-block"><?= lang('nav_form_url_help_text') ?></p>
				<?= form_input(['name' => 'url', 'class' => 'form-control', 'value' => set_value('url'), 'placeholder' => lang('nav_form_url_text_example') ]) ?>
	  		</div>
	  		-->	
			*/ ?>
			
	  		<h4><?php echo lang('optional_hdr'); ?></h4>
				
	  		<div class="form-group">
				<label for="redirection"><?php echo lang('nav_form_redirect_text'); ?></label>
				<p class="help-block"><?php echo lang('nav_form_redirect_help_text'); ?></p>
				<?php echo form_dropdown('redirection',['none' => lang('page_form_redirect_none'), '301' => lang('page_form_redirect_perm'), '302' => lang('page_form_redirect_temp')] , '301', ['id' => 'redirection' , 'class' => 'form-control' ]); ?>
	  		</div>

	  		<div class="form-group">
				<label for="type"><?php echo lang('nav_form_type_text'); ?></label>
				<p class="help-block"><?php echo lang('nav_form_type_help_text'); ?></p>
				<?php echo form_dropdown('type',['page' => lang('nav_form_type_page'), 'post' => lang('nav_form_type_post')] , 'page', ['id' => 'type', 'class' => 'form-control' ]); ?>
	  		</div>

	  		<div class="form-group">
			   <input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('nav_save_btn'); ?>">
		    </div>	
 
     </form>	
			
		  </div>
		</div>

 