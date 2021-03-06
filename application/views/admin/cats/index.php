<?php 
 /**
 * Manage Categories
 * 
 * @access       public
 * @author       Enliven Appications
 * @version      3.0
 * Last Updated  May 04, 2017
 * used bootstrap panels, breadcrumbs and alerts; added JQuery Datatables; Updated validation and also added some language variables 
 * @author       Simon Montaño
*/
?>
        <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('admin'); ?>" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
            <a href="<?php echo site_url('admin_cats'); ?>" class="btn btn-default"><?php echo lang('categories_section_name'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('categories_index_page'); ?></a>
         </div>		 
		 <br /> &nbsp; <br />

 <div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_cats/add_cat'); ?>"><?php echo lang('index_add_new_cat'); ?> <i class="fa fa-plus" aria-hidden="true"></i></a></div>
 <br />
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo lang('cats_hdr'); ?> </h3>
  </div>
  <div class="panel-body">
 
	<?php
	 
	if (empty($cats)) { ?>   

	<div class="alert alert-warning alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong><?php echo lang('error_title_important'); ?></strong> <br />  <?php echo lang('error_no_categories'); ?>
	</div>
	  
	<?php } else  { ?> 
    
  <table id="listing" class="table table-striped table-bordered">
        <thead>
            <tr>
				<th><?php echo lang('title_name'); ?></th>
				<th><?php echo lang('title_slug'); ?></th>
				<th><?php echo lang('title_description'); ?></th>
				<th><?php echo lang('title_edit'); ?></th>
				<th><?php echo lang('title_delete'); ?></th>				
            </tr>
        </thead>
        <tbody>
           <?php foreach ($cats as $cat): ?>
				<tr>
				<td><?php echo $cat->name; ?></td>
				<td><a href="<?php echo site_url('blog/category/' . $cat->url_name); ?>" target="_blank"><?php echo $cat->url_name; ?></a></td>
				<td><?php echo $cat->description; ?></td>
				<td>
					<a href="<?php echo site_url('admin_cats/edit_cat/' . $cat->id); ?>" class="btn btn-default btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo lang('cat_edit_btn'); ?></a></td>
				<td>					
					<a href="<?php echo site_url('admin_cats/remove_cat/' . $cat->id); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> <?php echo lang('cat_remove_btn'); ?></a>
				</td>
			</tr>
		  <?php endforeach ?>
       </tbody>		
        <tfoot>
            <tr>
				<th><?php echo lang('title_name'); ?></th>
				<th><?php echo lang('title_slug'); ?></th>
				<th><?php echo lang('title_description'); ?></th>
				<th><?php echo lang('title_edit'); ?></th>
				<th><?php echo lang('title_delete'); ?></th>					
            </tr>
        </tfoot>

    </table> 
	
	<?php } ?>
	
   </div>
</div>
