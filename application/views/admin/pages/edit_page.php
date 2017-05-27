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
			<a href="#" class="btn btn-primary"><?php echo lang('pages_edit_page'); ?></a>
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
		
		 <?php echo form_open(current_url()); ?>
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><?php echo lang('index_edit_page'); ?></h3>
		  </div>
		  <div class="panel-body">
			 <div class="well"><?php echo lang('add_page_subheading'); ?></div>
	<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo lang('page_basics_label'); ?></a></li>
    <li role="presentation"><a href="#advanced" aria-controls="advanced" role="tab" data-toggle="tab"><?php echo lang('page_advanced_label'); ?></a></li>
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
					<label for="title"><?php echo lang('page_form_title_text'); ?></label>
					<?php echo form_input(['name' => 'title', 'id' => 'title', 'class' => 'form-control', 'value' => $page['title'], 'placeholder' => lang('page_form_title_text') ]); ?>
					<p class="help-block"><?php echo lang('page_form_title_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="status"><?php echo lang('page_form_status_text'); ?></label>
					<?php echo form_dropdown('status',['active' => lang('page_form_status_active'), 'inactive' => lang('page_form_status_inactive')] , $page['status'], ['id' => 'status' , 'class' => 'form-control']); ?>
					<p class="help-block"><?php echo lang('page_form_status_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="content"><?php echo lang('page_form_content_text') ?></label>
					<?php echo form_textarea(['name' => 'content',  'id' => 'content', 'class' => 'form-control', 'value' => $page['content'], 'placeholder' => lang('page_form_content_text')]) ?>
					<p class="help-block"><?php echo lang('page_form_content_help_text') ?></p>
		  		</div>
				
			  </div>
			</div>				
				
			</div>

			<div class="col-xs-4">
			
			<div class="panel panel-default">
			  <div class="panel-body">
			
				<h4><?php echo lang('optional_hdr'); ?></h4>
				<p class="help-block"><?php echo lang('optional_help_text'); ?></p>
			
    			<div class="form-group">
					<label for="meta_title"><?php echo lang('page_form_meta_title_text'); ?></label>
					<?php echo form_input(['name' => 'meta_title', 'id' => 'meta_title', 'class' => 'form-control', 'value' => $page['meta_title'], 'placeholder' => lang('page_form_meta_title_text')]); ?>
					<p class="help-block"><?php echo lang('page_form_meta_title_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="meta_keywords"><?php echo lang('page_form_meta_keywords_text'); ?></label>
					<?php echo form_input(['name' => 'meta_keywords', 'id' => 'meta_keywords', 'class' => 'form-control', 'value' => $page['meta_keywords'], 'placeholder' => lang('page_form_meta_keywords_text') ]) ?>
					<p class="help-block"><?php echo lang('page_form_meta_keywords_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="meta_description"><?php echo lang('page_form_meta_desc_text'); ?></label>
					<?php echo form_input(['name' => 'meta_description',  'id' => 'meta_description',   'class' => 'form-control', 'value' => $page['meta_description'], 'placeholder' => lang('page_form_meta_desc_text')]); ?>
					<p class="help-block"><?php echo lang('page_form_meta_desc_help_text'); ?></p>
		  		</div>

		  		<div class="checkbox">
		    		<label>
		      			<input type="checkbox" name="is_home"<?php echo ($page['is_home'] == '1') ? ' checked' : ''; ?>> <?php echo lang('page_form_home_text'); ?>
		    		</label>
					<p class="help-block"><?php echo lang('page_form_home_help_text'); ?></p>
		  		</div>
			
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
					<label for="url_title"><?php echo lang('page_form_url_title_text'); ?></label>
					<?php echo form_input(['name' => 'url_title', 'id' => 'url_title', 'class' => 'form-control', 'value' => $page['url_title'], 'placeholder' => lang('page_form_url_title_text') ]); ?>
					<p class="help-block"><?php echo lang('page_form_url_title_help_text'); ?></p>
		  		</div>

		  		<div class="form-group">
					<label for="status"><?php echo lang('page_form_redirect_text'); ?></label>
					<?php echo form_dropdown('redirection',['none' => lang('page_form_redirect_none'), '301' => lang('page_form_redirect_perm'), '302' => lang('page_form_redirect_temp')] , '301', ['class' => 'form-control', 'id' => 'redirection']); ?>
					<p class="help-block"><?php echo lang('page_form_redirect_help_text'); ?></p>
		  		</div>
			  </div>
			</div>		    

		  	</div>
		  </div>
       
    </div>

  </div>
    <br /> &nbsp; <br />
	<div class="form-group">
		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('save_page_btn');?>">
	</div>		 
			 
		  </div>
		</div>		

		</form>
   </div>
</div>


<script>
var simplemde = new SimpleMDE();
</script>