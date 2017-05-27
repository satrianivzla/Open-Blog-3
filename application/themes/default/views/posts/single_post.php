<?php if ($post): ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $post['title'] ?></h3>
  </div>
  <div class="panel-body">

  <div class="row">
	<div class="col-sm-12">
		 
		<?php if($post['feature_image']): ?>
          <img src="<?php echo base_url('uploads/' . $post['feature_image']); ?>" class="img-responsive" alt="<?php echo $post['title']; ?>" title="<?php echo $post['title']; ?>">
		  <?php else: ?>
		   <img src="<?php echo base_url('assets/images/no-image-header.jpg'); ?>" class="img-responsive" alt="<?php echo $post['title']; ?>" title="<?php echo $post['title']; ?>">
        <?php endif ?>
        <h4>
          <small class="text-muted">
          	<span class="glyphicon glyphicon-time" aria-hidden="true"><time class="post-date" datetime="<?php echo date("D, d M Y H:i:s T", strtotime($post['date_posted'])) ?>"></time></span> <?php echo $post['date_posted']; ?> |
          	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $post['display_name']; ?> | 
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo $post['views']; ?> | 
            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php echo $post['comment_count']; ?> | 
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
              <?php foreach ($post['categories'] as $cat): ?>
                <?php echo $cat->name; ?> 
              <?php endforeach ?> 
          </small>
        </h4>
		
		<br />
		
        <?php echo $post['content'] ?>
        <?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('editor') ): ?>
        <h4>
		   <small class="text-muted"></small>
			<br /><a class="btn btn-default text-muted" href="<?php echo site_url('admin_posts/edit_post/' . $post['id']) ?>"><?php echo lang('btn_edit'); ?></a>  
		</h4>	
            <?php endif ?>
      
	<hr />
      <h3 class="page-header"><?php echo lang('comments_title'); ?></h3>

      	<?php if ($post['comment_count'] > 0): ?>

		<?php foreach ($comments as $comment): ?>
		<article class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user">
                    	<i class="glyphicon glyphicon-user"></i> 
                    	<a href="#comment-<?php echo $comment->id; ?>"> <?php echo ucwords($comment->author); ?>
                    	</a>
                    </div>
                    <time class="comment-date" datetime="<?php echo date("D, d M Y H:i:s T", strtotime($comment->date)) ?>">
                    	<i class="glyphicon glyphicon-time"></i> 
                    	<?php echo $comment->date; ?>
                    </time>
                  </header>
                  <div class="comment-post">
                    <p>
                    	<?php echo $comment->content; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <?php endforeach; ?>
		<?php else: ?>
		
				<div class="alert alert-info alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong><?php echo lang('error_title_important'); ?></strong>  <br /><?php echo lang('no_comments'); ?>
				</div>


			  
			
		<?php endif; ?>

		<h2 class="page-header"><?php echo lang('leave_reply'); ?></h2>
		
		<?php if ($this->config->item('allow_comments') == '1' && $post['allow_comments'] != '0'): ?>
			
         <?php 
		   if (validation_errors()) {  ?>
			<div class="alert alert-danger alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> <br /> 
			   <?php echo lang('error_general_message'); ?>
 			</div>
         <?php } ?>
			
	 	<form class="form-horizontal" method="post" action="#">

	 		<?php if ( ! $this->ion_auth->logged_in() ): ?>
		  <div class="form-group<?php if (form_error('nickname')) { ?> has-error has-feedback <?php } ?>">
			<label for="nickname" class="col-lg-2 control-label"><?php echo $this->lang->line('comments_nicname'); ?></label>
			<div class="col-lg-10">
		      <input name="nickname" id="nickname" type="text" value="<?php echo set_value('nickname'); ?>" class="form-control" placeholder="<?php echo lang('nickname'); ?>"  />
               <?php if (form_error('nickname')) { echo form_error('nickname'); } else { ?>
					<p class="help-block"><?php echo $this->lang->line('cat_form_name_help'); ?></p>
			    <?php } ?>							
			 </div>			  
		  </div>
		  
		  <div class="form-group<?php if (form_error('email')) { ?> has-error has-feedback <?php } ?>">
			<label for="email" class="col-lg-2 control-label"><?php echo $this->lang->line('comments_email'); ?></label>
			<div class="col-lg-10">
		      <input name="email" id="email" type="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="<?php echo lang('email'); ?>"  />
              <?php if (form_error('email')) { echo form_error('email'); } else { ?>
					<p class="help-block"><?php echo $this->lang->line('cat_form_name_help'); ?></p>
			    <?php } ?>							
			 </div>					  
		  </div>

		<?php else: ?>

		<div class="form-group">
		      <input name="nickname" id="nickname" type="text" value="<?php echo $this->ion_auth->get_display_name(); ?>" class="form-control" placeholder="<?php echo lang('nickname'); ?>" disabled />
		  </div>


		<?php endif ?>
		  

		  <div class="form-group<?php if (form_error('comment')) { ?> has-error has-feedback <?php } ?>">
			<label for="comment" class="col-lg-2 control-label"><?php echo $this->lang->line('comments_title'); ?></label>
			<div class="col-lg-10">
		      <textarea name="comment" id="comment" rows="6" cols="46" class="form-control" placeholder="<?php echo lang('comments_title'); ?>"><?php echo set_value('comment'); ?></textarea>
               <?php if (form_error('comment')) { echo form_error('comment'); } else { ?>
					<p class="help-block"><?php echo $this->lang->line('comment_help_text'); ?></p>
			    <?php } ?>							
			 </div>				  
		  </div>
 
		  <?php if ($this->config->item('use_recaptcha') == 1): ?>
		  <div class="form-group">
			  <script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
			  <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('recaptcha_site_key') ?>"></div>
		  </div>
			<?php endif ?>

			<?php if ($this->config->item('use_honeypot') == 1): ?>
			<div style="position: absolute; left: -999em;">
				<input name="date_stamp_gotcha" id="date_stamp_gotcha" type="text" value="" class="form-control">
			</div>
			<?php endif ?>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input type="submit" name="submit" class="btn btn-primary" value="<?php echo lang('comment_submit'); ?>" />
		    </div>
		  </div>
		</form>

		
	</div>

		<?php else: ?>
			<?php if ($this->config->item('allow_comments') == '0'): ?>
				<p><?php echo lang('comments_disabled'); ?></p>
			<?php else: ?>
				<p><?php echo lang('comments_disabled_post'); ?></p>
			<?php endif ?>
		<?php endif; ?>
 
</div>

  
  
  
  </div>
</div>


<?php else: ?>
	<h2><?php echo lang('error_404_heading'); ?></h2>
	<p><?php echo lang('error_404_message'); ?></p>
<?php endif ?>
