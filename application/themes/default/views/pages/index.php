

	<div class="row">    
      <div class="col-sm-12" id="recent">
	  
	  <div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><?php echo $page['title']; ?></h3>
		  </div>
		  <div class="panel-body">
			<?php echo $page['content']; ?> 
		  </div>
		</div>
			  
	  
         
       
            <?php if ( $this->ion_auth->is_admin() || $this->ion_auth->in_group('editor') || $this->ion_auth->logged_in() && $this->session->userdata('user_id') == $post->author  ): ?>
			 <h4>
                <small class="text-muted">
                <a class="btn btn-default text-muted" href="<?php echo site_url('admin_pages/edit_page/' . $page['id']); ?>"><?php echo lang('btn_edit'); ?></a> 
				 <br />         
                </small>
            </h4>
            <?php endif ?>
           
      </div>

    </div>