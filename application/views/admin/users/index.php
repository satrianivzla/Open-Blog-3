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
			<a href="#" class="btn btn-primary"><?php echo lang('users_index_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 

    <?php if (isset($message)): ?>
    <div>
        <?php echo $message; ?>
    </div>
    <?php endif ?>	

    	<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><?php echo lang('users_form_header'); ?></h3>
		  </div>
		  <div class="panel-body">
		
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo lang('users_form_users_label'); ?></a></li>
				<li role="presentation"><a href="#groups" aria-controls="groups" role="tab" data-toggle="tab"><?php echo lang('users_form_groups_label'); ?></a></li>
				<li role="presentation"><a href="#permissions" aria-controls="permissions" role="tab" data-toggle="tab"> <?php echo lang('users_form_permission_label'); ?></a></li>
			  </ul>
			  
 <!-- Tab panes -->
  <div class="tab-content">
    <!-- users -->
    <div role="tabpanel" class="tab-pane fade in active" id="home">
      <h1><?php echo lang('index_heading');?></h1>
        <p><?php echo lang('index_subheading');?></p>

        <div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_users/create_user') ?>"><?php echo lang('index_create_user_link') ?>   <i class="fa fa-plus" aria-hidden="true"></i></a></div>
        <br />
		
		<?php
	 
			if (empty($users)) { ?>   

			<div class="alert alert-warning alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> <br />  <?php echo lang('error_no_users'); ?>
			</div>
	  
	    <?php } else  { ?> 

         <table id="listing" class="table table-striped table-bordered">
		 <thead>
          <tr>
            <th><?php echo lang('index_fname_th');?></th>
            <th><?php echo lang('index_lname_th');?></th>
            <th><?php echo lang('index_email_th');?></th>
            <th><?php echo lang('index_groups_th');?></th>
            <th><?php echo lang('index_status_th');?></th>
            <th><?php echo lang('index_action_th');?></th>
          </tr>
		  </thead>
        <tbody>
          <?php foreach ($users as $user):?>
            <tr>
                    <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
              <td>
                <?php foreach ($user->groups as $group):
				 $user_group = strtolower(htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'));
					switch ($user_group) {
						case "admin":
							$group_icon = "fa fa-user";
							break;
						case "members":
						    $group_icon = "fa fa-users";
							break;
						case "editors":
							$group_icon = "fa fa-book";
							break;  
						case "hackers":
							$group_icon = "fa fa-user-secret";
							break;						
                        default:
 						    $group_icon = "fa fa-users";							
					}			
				?>
				<a href="<?php echo "admin_users/edit_group/".$group->id; ?>" class="btn btn-default"><i class="<?php echo $group_icon; ?>"></i> <?php echo ucfirst($user_group); ?> </a> &nbsp; 
                <?php endforeach?>
              </td>
              <td>
			  <?php if ($user->active) {  ?><a href="admin_users/deactivate/<?php echo $user->id; ?>" class="btn btn-default"><i class="fa fa-check"></i> <?php echo lang('index_active_link'); ?></a><?php } else { ?> <a href="admin_users/activate/<?php echo $user->id; ?>" class="btn btn-danger"><i class="fa fa-ban"></i> <?php echo lang('index_inactive_link'); ?></a> <?php } ?>
              </td>
              <td><a href="<?php echo "admin_users/edit_user/".$user->id; ?>" class="btn btn-warning">  <i class="fa fa-pencil"></i> <?php echo lang('edit_user_heading'); ?></a></td>
            </tr>
          <?php endforeach;?>
		   </tbody>		
        <tfoot>
          <tr>
            <th><?php echo lang('index_fname_th');?></th>
            <th><?php echo lang('index_lname_th');?></th>
            <th><?php echo lang('index_email_th');?></th>
            <th><?php echo lang('index_groups_th');?></th>
            <th><?php echo lang('index_status_th');?></th>
            <th><?php echo lang('index_action_th');?></th>
          </tr>		
		</tfoot>
		</table>
		
		<?php } ?>
		
    </div>
	
    <!-- groups -->
    <div role="tabpanel" class="tab-pane fade" id="groups">
        <h1><?php echo lang('edit_user_validation_groups_label') ?></h1>
          <div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_users/create_group'); ?>"><?php echo lang('index_create_group_link'); ?>  <i class="fa fa-plus" aria-hidden="true"></i></a></div>
         <br />
		 
	    <?php
	 
			if (empty($groups)) { ?>   

			<div class="alert alert-warning alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> <br />  <?php echo lang('error_no_groups'); ?>
			</div>
	  
	    <?php } else  { ?> 		 
		 
         <table class="display table table-striped table-bordered">
         <thead>         
		 <tr>
            <th><?php echo lang('create_group_name_label'); ?></th>
            <th><?php echo lang('create_group_desc_label'); ?></th>
            <th><?php echo lang('permissions_label'); ?></th>
            <th></th>
          </tr>
		  </thead>
		  <tbody>
          <?php foreach ($groups as $group):?>
            <tr>
                <td><?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8'); ?></td>
                <td>
                <?php if ($group->name == 'admin'): ?>
                <?php echo lang('users_form_unrestricted_label'); ?>
                <?php elseif ( ! $group->permissions ): ?>
                <?php echo lang('users_form_none_label'); ?>
                <?php else: ?>
                <?php foreach ($group->permissions as $perm): ?>
                <?php echo $perm->description; ?><br>
                <?php endforeach ?>
                <?php endif?>

              </td>
                <td class="text-right">
                  <?php if ($group->protected != 1): ?>
      			    <a href="<?php echo "admin_users/remove_group/".$group->id; ?>" class="btn btn-danger">  <i class="fa fa-ban"></i> <?php echo lang('remove_group_heading'); ?></a>				  
                  <?php endif ?>
				    <a href="<?php echo "admin_users/edit_group/".$group->id; ?>" class="btn btn-default">  <i class="fa fa-pencil"></i> <?php echo lang('edit_group_heading'); ?></a>
                </td>
            </tr>
          <?php endforeach; ?>
		   </tbody>		
           <tfoot>
			  <tr>
				<th><?php echo lang('create_group_name_label'); ?></th>
				<th><?php echo lang('create_group_desc_label'); ?></th>
				<th><?php echo lang('permissions_label'); ?></th>
				<th></th>		  
			  </tr>		
		  </tfoot>		  
        </table>
		
		<?php } ?>
    </div>

    <!-- permissions -->
    <div role="tabpanel" class="tab-pane fade" id="permissions">
      <h1><?php echo lang('permissions_label') ?></h1>
         <div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_users/create_perm'); ?>"><?php echo lang('index_create_perm_link'); ?>  <i class="fa fa-plus" aria-hidden="true"></i></a></div>
          <br />
		  
	    <?php
	 
			if (empty($permissions)) { ?>   

			<div class="alert alert-warning alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> <br />  <?php echo lang('error_no_permissions'); ?>
			</div>
	  
	    <?php } else  { ?> 		  

         <table class="display table table-striped table-bordered">
         <thead>  
		   <tr>
             <th><?php echo lang('permissions_name_label'); ?></th>
             <th></th>
          </tr>
		  </thead>
		  <tbody>		  
          <?php foreach ($permissions as $perm):?>
            <tr>
                <td><?php echo htmlspecialchars($perm->description,ENT_QUOTES,'UTF-8'); ?></td>
                
                <td class="text-right">
                  <?php if ($perm->protected != 1): ?>
    				<a href="<?php echo "admin_users/remove_perm/".$perm->id; ?>" class="btn btn-danger">  <i class="fa fa-ban"></i> <?php echo lang('remove_perm_heading'); ?></a>				  
	             <?php endif ?>
    				<a href="<?php echo "admin_users/edit_perm/".$perm->id; ?>" class="btn btn-default">  <i class="fa fa-pencil"></i> <?php echo lang('edit_perm_heading'); ?></a>
	            </td>
            </tr>
          <?php endforeach;?>
		   </tbody>		
           <tfoot>
			  <tr>
				 <th><?php echo lang('permissions_name_label'); ?></th>
				 <th></th>			  
			  </tr>		
		  </tfoot>				  
        </table>
		<?php } ?>
    </div> 

  </div>		  
  </div>
</div>
