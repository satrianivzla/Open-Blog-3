<?php 
 /**
 * Manage Comments
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
            <a href="<?php echo site_url('admin_comments'); ?>" class="btn btn-default"><?php echo lang('comments_section_name'); ?></a> 
			<a href="#" class="btn btn-primary"><?php echo lang('comments_index_page'); ?></a>
         </div>		 
		 <br /> &nbsp; <br /> 
 
		 <div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title"><?php echo lang('comments_hdr'); ?> </h3>
		  </div>
		  <div class="panel-body">
		  
  <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo lang('comments_tab_moderated'); ?></a></li>
        <li role="presentation"><a href="#active-comments" aria-controls="active-comments" role="tab" data-toggle="tab"><?php echo lang('comments_tab_active'); ?></a></li>
    </ul>
    <br /> &nbsp; <br /> 
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home">
				
            <?php if (empty($modded_comments)){ ?>
 			 <br /> &nbsp; <br />
			<div class="alert alert-info alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> <br /> &nbsp; <br />  <h4><?php echo lang('comments_no_comments_found_mod'); ?></h4>
			</div>          
            <?php } else { ?>
             <table id="listing" class="table table-condensed table-responsive">
			 <thead>		
                <tr>
                    <th><?php echo lang('comments_tbl_hdr_post_title'); ?></th>
                    <th><?php echo lang('comments_tbl_hdr_author'); ?></th>
                    <th><?php echo lang('comments_tbl_hdr_date'); ?></th>
                    <th></th>
                </tr>   
                </thead>
                <tbody>				
                <?php foreach ($modded_comments as $com): ?>
                <tr>
                    <td><?php echo $com['post_title']; ?></td>
                    <td><?php echo $com['display_name']; ?></td>
                    <td><?php echo $com['date']; ?></td>
                    <td class="text-right">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#moddedModal<?php echo $com['id']; ?>"><?php echo lang('comments_btn_view'); ?></button>
                        <a href="<?php echo site_url('admin_comments/accept_comment/' . $com['id']); ?>" class="btn btn-xs btn-default"><?php echo lang('comments_btn_accept'); ?></a>
                        <a href="<?php echo site_url('admin_comments/edit_comment/' . $com['id']); ?>" class="btn btn-xs btn-default"><?php echo lang('comments_btn_edit'); ?></a>
                        <a href="<?php echo site_url('admin_comments/remove_comment/' . $com['id']); ?>" class="btn btn-xs btn-danger"><?php echo lang('comments_btn_remove'); ?></a>
                    </td>
                </tr>
                <?php endforeach ?>
				  </tbody>		
				  <tfoot>
				  <tr>
                    <th><?php echo lang('comments_tbl_hdr_post_title'); ?></th>
                    <th><?php echo lang('comments_tbl_hdr_author'); ?></th>
                    <th><?php echo lang('comments_tbl_hdr_date'); ?></th>
                    <th></th>				  
	              </tr>		
		          </tfoot>   			  
            </table>

  		<?php } ?>
      
        </div>

        <div role="tabpanel" class="tab-pane fade" id="active-comments">
		 
            <?php if (empty($active_comments)){ ?>
			
			    <br /> &nbsp; <br />
				<div class="alert alert-info alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong><?php echo lang('error_title_important'); ?></strong> <br /> &nbsp; <br /> <h4><?php echo lang('comments_no_comments_found_act'); ?></h4>
				</div>			
			
			<?php } else { ?>
              <table class="display table table-condensed table-responsive">
              <thead>
   	    		<tr>
                    <th><?php echo lang('comments_tbl_hdr_post_title'); ?></th>
                    <th><?php echo lang('comments_tbl_hdr_author'); ?></th>
                    <th><?php echo lang('comments_tbl_hdr_date'); ?></th>
                    <th></th>
                </tr>   
                </thead>
                <tbody>					
                <?php foreach ($active_comments as $com): ?>
                <tr>
                    <td><?php echo $com['post_title']; ?></td>
                    <td><?php echo $com['display_name']; ?></td>
                    <td><?php echo $com['date']; ?></td>
                    <td class="text-right">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#activeModal<?php echo $com['id'] ?>"><?php echo lang('comments_btn_view') ?></button>
                        <a href="<?php echo site_url('admin_comments/hide_comment/' . $com['id']); ?>" class="btn btn-xs btn-warning"><?php echo lang('comments_btn_hide'); ?></a>
                        <a href="<?php echo site_url('admin_comments/edit_comment/' . $com['id']); ?>" class="btn btn-xs btn-default"><?php echo lang('comments_btn_edit'); ?></a>
                        <a href="<?php echo site_url('admin_comments/remove_comment/' . $com['id']); ?>" class="btn btn-xs btn-danger"><?php echo lang('comments_btn_remove'); ?></a>
                    </td>
                </tr>
                <?php endforeach ?>
				  </tbody>		
				  <tfoot>
   	    		   <tr>
                    <th><?php echo lang('comments_tbl_hdr_post_title'); ?></th>
                    <th><?php echo lang('comments_tbl_hdr_author'); ?></th>
                    <th><?php echo lang('comments_tbl_hdr_date'); ?></th>
                    <th></th>
                   </tr>   	
		          </tfoot>  				
            </table>			
			<?php } ?>		 

           </div>
         </div>		 
	   </div>
	</div>
 <!-- modals -->
<?php foreach ($active_comments as $com): ?>
    <!-- Modal -->
<div class="modal fade" id="activeModal<?php echo $com['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $com['display_name']; ?> : <?php echo $com['date']; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $com['content']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('button_close'); ?></button>
        <a href="<?php echo site_url('admin_comments/hide_comment/' . $com['id']); ?>" class="btn btn-warning"><?php echo lang('comments_btn_hide'); ?></a>
        <a href="<?php echo site_url('admin_comments/edit_comment/' . $com['id']); ?>" class="btn btn-default"><?php echo lang('comments_btn_edit'); ?></a>
        <a href="<?php echo site_url('admin_comments/remove_comment/' . $com['id']); ?>" class="btn btn-danger"><?php echo lang('comments_btn_remove'); ?></a>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>

<?php foreach ($modded_comments as $com): ?>
<!-- Modal -->
<div class="modal fade" id="moddedModal<?php echo $com['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $com['display_name']; ?> : <?php echo $com['date']; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $com['content']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('button_close'); ?></button>
        <a href="<?php echo site_url('admin_comments/accept_comment/' . $com['id']); ?>" class="btn btn-success"><?php echo lang('comments_btn_accept'); ?></a>
        <a href="<?php echo site_url('admin_comments/edit_comment/' . $com['id']); ?>" class="btn btn-default"><?php echo lang('comments_btn_edit'); ?></a>
        <a href="<?php echo site_url('admin_comments/remove_comment/' . $com['id']); ?>" class="btn btn-danger"><?php echo lang('comments_btn_remove'); ?></a>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
