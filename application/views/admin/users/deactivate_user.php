<?php 
 /**
 * Add Category
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
            <a href="<?php echo site_url('admin_users'); ?>" class="btn btn-default"><?php echo lang('users_section_name'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('deactivate_heading');?></a>
         </div>		 
		 <br /> &nbsp; <br /> 
 
    <div class="row">
	 
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"><?php echo lang('deactivate_heading');?> </h3>
			 	</div>
			  	<div class="panel-body">
			    	<?php echo form_open("admin/admin_users/deactivate/".$user['id']);?>
			    	<?php echo form_hidden($csrf); ?>
  					<?php echo form_hidden(array('id'=>$user['id'])); ?>
			    	<div class="alert alert-danger"><?php echo sprintf(lang('deactivate_subheading'), $user['username']);?></div>
                    <fieldset>
			    	  	<div class="form-group">
			    		    <div class="radio">
							  <label>
							    <input type="radio" name="confirm" value="yes" />
							    <?php echo lang('users_form_yes_label'); ?>
							  </label>
							</div>
							<div class="radio">
							  <label>
							    <input type="radio" name="confirm" value="no" checked="checked" />
							    <?php echo lang('users_form_no_label'); ?>
							  </label>
							</div>
			    		</div>
			    		<input class="btn btn-lg btn-default btn-block" type="submit" value="<?php echo lang('users_form_desactive_user_btn'); ?>">
			    	</fieldset>
			      	</form>
			    </div>
			</div>		 
	</div>
 