<?php 
 /**
 * Edit Redirect
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
			<a href="#" class="btn btn-primary"><?php echo lang('redir_edit_title'); ?></a> 
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
			<h3 class="panel-title"><?php echo lang('nav_redir_edit_hdr'); ?></h3>
		  </div>
		  <div class="panel-body">
		  
			<p><?php echo lang('nav_redir_edit_subheading'); ?></p>
			
	<?php echo form_open(current_url()); ?>
	<div class="row m-t-m">
		<div class="col-xs-8">
			<div class="form-group">
				<label for="old_slug"><?php echo lang('nav_redir_form_old_slug_text'); ?></label>
				
				<?php echo form_input(['name' => 'old_slug', 'id' => 'old_slug', 'class' => 'form-control', 'value' => (set_value('old_slug')) ? set_value('old_slug') : $redir['old_slug'], 'placeholder' => lang('nav_redir_form_old_slug_text') ]); ?>
				<p class="help-block"><?php echo lang('nav_redir_form_old_slug_desc'); ?></p>
				
	  		</div>

	  		<div class="form-group">
				<label for="new_slug"><?php echo lang('nav_redir_form_new_slug_text'); ?></label>
				
				<?php echo form_input(['name' => 'new_slug', 'id' => 'new_slug', 'class' => 'form-control', 'value' => (set_value('new_slug')) ? set_value('new_slug') : $redir['new_slug'], 'placeholder' => lang('nav_redir_form_old_slug_text') ]); ?>
				<p class="help-block"><?php echo lang('nav_redir_form_new_slug_desc'); ?></p>
				
	  		</div>

	  		<div class="form-group">
				<label for="status"><?php echo lang('nav_redir_form_code_text'); ?></label>
				
				<?php echo form_dropdown('code',['301' => lang('page_form_redirect_perm'), '302' => lang('page_form_redirect_temp')] , $redir['code'], ['id' => 'code', 'class' => 'form-control']); ?>
				<p class="help-block"><?php echo lang('nav_redir_form_code_desc') ;?></p>
				
	  		</div>

	  		<div class="form-group">
				<label for="status"><?php echo lang('nav_redir_form_type_text'); ?></label>
				
				<?php echo form_dropdown('type',['page' => lang('nav_form_type_page'), 'post' => lang('nav_form_type_post')] , $redir['type'], ['id' => 'type', 'class' => 'form-control']); ?>
				<p class="help-block"><?php echo lang('nav_redir_form_type_desc'); ?></p>
	  		</div>
	  		
		</div>

		<div class="form-group">
			<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('redir_edit_btn'); ?>">
		</div>	
	</div>
    </form>			
			
		  </div>
		</div>
		
	</div>
</div>

 