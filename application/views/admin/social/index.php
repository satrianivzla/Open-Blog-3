<?php 
 /**
 * Social Links
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
            <a href="<?php echo site_url('admin_social'); ?>" class="btn btn-default"><?php echo lang('social_section_name'); ?></a> 
			<a href="#" class="btn btn-primary">Index</a>
         </div>		 
		 <br /> &nbsp; <br /> 
		 
 <div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_social/add'); ?>"><?php echo lang('social_add_new'); ?> <i class="fa fa-plus" aria-hidden="true"></i></a> </div>
 <br />

		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><?php echo lang('social_hdr'); ?></h3>
		  </div>
		  <div class="panel-body">
		  
		  <div class="well"><?php echo lang('social_hdr_help_txt'); ?></div>

		  <?php
				 
				if (empty($social)) { ?>   

				<div class="alert alert-warning alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong><?php echo lang('error_title_important'); ?></strong>
				  <br /> 
				  <?php echo lang('error_no_social_links'); ?>
				</div>
				  
				<?php } else  { ?>

               <table id="listing" class="table table-striped table-bordered">
                  <thead>
					<tr>
						<th><?php echo lang('title_name'); ?></th>
						<th><?php echo lang('social_form_url'); ?></th>
						<th><?php echo lang('enabled'); ?></th>
						<th><?php echo lang('title_edit'); ?></th>
						<th><?php echo lang('title_delete'); ?></th>  
					</tr>
				</thead>
                <tbody>	
					<?php foreach ($social as $item): ?>
						<tr>
						<td><?php echo $item['name']; ?></td>
						<td><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['url']; ?></a></td>
						<td><?php echo ($item['enabled'] == '1') ? lang('yes') : lang('no'); ?></td>
						<td>
							<a href="<?php echo site_url('admin_social/edit/' . $item['id']); ?>" class="btn btn-default btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo lang('social_edit_btn'); ?></a>
						</td>
						<td><a href="<?php echo site_url('admin_social/remove/' . $item['id']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> <?php echo lang('social_delete_btn'); ?></a>
						</td>
					</tr>
				  <?php endforeach ?>
                  </tbody>		
                    <tfoot>
                        <tr>
						<th><?php echo lang('title_name'); ?></th>
						<th><?php echo lang('social_form_url'); ?></th>
						<th><?php echo lang('enabled'); ?></th>
						<th><?php echo lang('title_edit'); ?></th>
						<th><?php echo lang('title_delete'); ?></th>  
					</tr>
                    </tfoot>
            </table> 
				<?php } ?>		  
						  
		  
		  </div>
		</div>
