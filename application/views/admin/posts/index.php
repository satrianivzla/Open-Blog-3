<?php 
 /**
 * Posts
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
            <a href="<?php echo site_url('admin_posts'); ?>" class="btn btn-default"><?php echo lang('posts_hdr'); ?></a> 
			<a href="#" class="btn btn-primary"><?php echo lang('posts_index_page'); ?></a>
         </div>		 
		 <br /> &nbsp; <br /> 

	 <div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_posts/add_post'); ?>"><?php echo lang('index_add_new_post'); ?> <i class="fa fa-plus" aria-hidden="true"></i></a></div>
	 <br />

	 <div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title"> <?php echo lang('posts_hdr'); ?></h3>
	  </div>
	  <div class="panel-body">
	  
	<?php
	 	if (empty($posts)) { ?>   

		<div class="alert alert-info alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong><?php echo lang('error_title_important'); ?></strong> 
		  <br /> 
		   <?php echo lang('error_no_posts'); ?>
		</div>
	  
	<?php } else  { ?> 
    
  <table id="listing" class="table table-striped table-bordered">
     <thead>
		<tr>
			<th><?php echo lang('title_main'); ?></th>
			<th><?php echo lang('title_creation_date'); ?></th>
			<th><?php echo lang('title_status'); ?></th>
			<th><?php echo lang('title_edit'); ?></th>
			<th><?php echo lang('title_delete'); ?></th>  
		</tr>
     </thead>
     <tbody>		
    <?php foreach ($posts as $post): ?>
        <tr>
			<td><?php echo $post->title; ?></td>
			<td><?php echo $post->date_posted; ?></td>
			<td><?php echo $post->status; ?></td>
			<td>
				<a href="<?php echo  site_url('admin_posts/edit_post/' . $post->id); ?>" class="btn btn-default btn-xs"> <i class="fa fa-pencil" aria-hidden="true"></i> <?php echo  lang('post_edit_btn'); ?></a>
			</td>	
			<td>
				<a href="<?php echo  site_url('admin_posts/remove_post/' . $post->id); ?>" class="btn btn-danger btn-xs"> <i class="fa fa-trash" aria-hidden="true"></i> <?php echo lang('post_remove_btn'); ?></a>
			</td>
       </tr>
    <?php endforeach ?>
        </tbody>		
        <tfoot>
            <tr> 
 			<th><?php echo lang('title_main'); ?></th>
			<th><?php echo lang('title_creation_date'); ?></th>
			<th><?php echo lang('title_status'); ?></th>
			<th><?php echo lang('title_edit'); ?></th>
			<th><?php echo lang('title_delete'); ?></th>  
		</tr> 
		</tfoot>
      </table>
		<?php } ?>  
		
	  </div>
	</div>
 

 