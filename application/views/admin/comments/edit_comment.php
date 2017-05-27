<?php 
 /**
 * Edit Comments
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
            <a href="<?php echo site_url('admin_comments'); ?>" class="btn btn-default"><?php echo lang('comments_section_name'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('comments_edit_page'); ?></a>
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

			<?php if (isset($message)): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $message; ?>
				</div>
			<?php endif ?>
	</div>
</div>
		
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title"><?php echo lang('comment_edit_hdr'); ?></h3>
			  </div>
			  <div class="panel-body">
				 		<?php echo form_open(current_url()); ?>
		<p><?php echo lang('comment_edit_subheading'); ?></p>		
		<div class="row">

			<div class="col-xs-8">
				<div class="form-group">
					<label for="content"><?php echo lang('comment_form_field_content'); ?></label>
					<div class="well help-block"><?php echo lang('comment_form_field_content_hlp_txt'); ?></div>
					<?php echo form_textarea(['name' => 'content', 'id' => 'content', 'class' => 'form-control', 'value' => $comment['content'], 'placeholder' => lang('comment_form_field_content')]); ?>
				</div>

				<div class="form-group">
					<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('comments_save_btn');?>">
				</div>
			</div>

			<div class="col-xs-4">
			
			<div class="panel panel-default">
				  <div class="panel-heading">
					<h3 class="panel-title"><?php echo lang('comment_details_hdr'); ?></h3>
				  </div>
				  <div class="panel-body">
						<p><b><?php echo lang('comments_blog_post_hdr'); ?></b>: <?php echo $comment['post_title']; ?> (<?php echo $comment['post_id']; ?>)</p>
						<p><b><?php echo lang('comments_comment_id'); ?></b>: <?php echo $comment['id']; ?></p>
						<p><b><?php echo lang('comments_author'); ?></b>: <?php echo $comment['display_name']; ?></p>
						<p><b><?php echo lang('comments_date_posted'); ?></b>: <?php echo $comment['date']; ?></p>
						<p><b><?php echo lang('comments_author_ip'); ?></b>: <?php echo $comment['author_ip']; ?></p>
						<p><b><?php echo lang('comments_current_status'); ?></b>: <?php echo ($comment['modded'] == 1) ? "Moderated" : "Published"; ?></p>
				  </div>
			</div>
			</div>
			</div>
			</form>
		  </div>
			</div>	
