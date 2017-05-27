<?php 
 /**
 * Links Main Page
 * 
 * @access       public
 * @author       Enliven Appications
 * @version      3.0
 * Last Updated  May 04, 2017
 * used bootstrap panels, breadcrumbs and alerts; Changed way to show validation messages, also added some language variables and deleted a javascript code used here to reorder links
 * @author       Simon Montaño
*/
?>  

        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('admin'); ?>" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
            <a href="<?php echo site_url('admin_links'); ?>" class="btn btn-default"><?php echo lang('links_hdr'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('links_index_page'); ?></a>
         </div>		  
		 <br /> &nbsp; <br /> 

<div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_links/add_link') ?>"><?php echo lang('index_add_new_link') ?> <i class="fa fa-plus" aria-hidden="true"></i></a></div>
 <br />

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo lang('links_hdr'); ?></h3>
  </div>
  <div class="panel-body">
 
 <?php
	 
	if (empty($links)) { ?>   

	<div class="alert alert-warning alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong><?php echo lang('error_title_important'); ?></strong> 
	  <br />
	  <?php echo lang('error_no_links'); ?>
	</div>
	  
	<?php } else  { ?> 
    
  <table id="listing" class="table table-striped table-bordered">
        <thead>
            <tr>
				<th><?php echo lang('title_name'); ?></th>
				<th><?php echo lang('social_form_url'); ?></th>
				<th><?php echo lang('title_url_target'); ?></th>
				<th><?php echo lang('title_description'); ?></th>
				<th><?php echo lang('title_visible'); ?></th>
				<th><?php echo lang('title_order'); ?></th>
				<th><?php echo lang('title_edit'); ?></th>
				<th><?php echo lang('title_delete'); ?></th>				
		    </tr>
		 </thead>
        <tbody>	
		<?php foreach ($links as $link): ?>
        <tr>
        <td><?php echo $link->name; ?></td>
        <td><a href="<?php echo $link->url; ?>" target="_blank"><?php echo $link->url; ?></a></td>
        <td><?php echo $link->target; ?></td>
        <td><?php echo $link->description; ?></td>
        <td><?php echo $link->visible; ?></td>
        <td><?php echo $link->position; ?></td>
        <td>
            <a href="<?php echo site_url('admin_links/edit_link/' . $link->id); ?>" class="btn btn-default btn-xs">
			<i class="fa fa-pencil" aria-hidden="true"></i> <?php echo lang('link_edit_btn'); ?></a>
		</td>	
        <td>
		    <a href="<?php echo site_url('admin_links/remove_link/' . $link->id); ?>" class="btn btn-danger btn-xs">
			<i class="fa fa-trash" aria-hidden="true"></i> <?php echo lang('link_remove_btn'); ?></a>
        </td>
    </tr>
  <?php endforeach ?>
  </tbody>		
        <tfoot>
            <tr>
				<th><?php echo lang('title_name'); ?></th>
				<th><?php echo lang('social_form_url'); ?></th>
				<th><?php echo lang('title_url_target'); ?></th>
				<th><?php echo lang('title_description'); ?></th>
				<th><?php echo lang('title_visible'); ?></th>
				<th><?php echo lang('title_order'); ?></th>
				<th><?php echo lang('title_edit'); ?></th>
				<th><?php echo lang('title_delete'); ?></th>				
            </tr>
        </tfoot>

    </table> 
	
	<?php } ?>
 
  </div>
</div>
