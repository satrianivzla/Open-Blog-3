<?php 
 /**
 * Navigation Main Page
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
            <a href="<?php echo site_url('admin_navigation'); ?>" class="btn btn-default"><?php echo lang('navigation_section_name'); ?></a>  
			<a href="#" class="btn btn-primary"><?php echo lang('navigation_index_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br />  
 
	<div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_navigation/add_nav'); ?>"><?php echo lang('index_add_new_nav'); ?> <i class="fa fa-plus" aria-hidden="true"></i></a></div>
	<br /> 

	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title"><?php echo lang('nav_hdr'); ?></h3>
	  </div>
	  <div class="panel-body">
	  
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo lang('tab_all_nav_items'); ?></a></li>
        <li role="presentation"><a href="#redirects" aria-controls="redirects" role="tab" data-toggle="tab"><?php echo lang('tab_nav_redirects'); ?></a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home">
		    <br /> &nbsp; <br />
            <div class="well"><?php echo lang('index_nav_desc'); ?></div>
			
         <?php if ( ! $navs ): ?>
			<br /> &nbsp; <br />
            <div class="alert alert-info alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong>  <br />  <?php echo lang('nav_no_redirects_found'); ?> 
			</div>
			
			<?php else: ?>				
        
              		
            <table id="listing" class="table table-striped table-bordered">
			    <thead>
                <tr>
                    <th><?php echo lang('title_main'); ?></th>	
                    <th><?php echo lang('title_view'); ?></th>				
                    <th><?php echo lang('title_edit'); ?></th>
                    <th><?php echo lang('title_delete'); ?></th>  
                 </tr>					
			    </thead>
                <tbody>		
                  <?php foreach ($navs as $nav): ?>	
                   <tr>
                    <td><?php echo $nav->title; ?></td>
                    <td><a href="<?php echo base_url($nav->url); ?>" target="_blank" class="btn btn-default btn-xs"> <i class="fa fa-search" aria-hidden="true"></i> <?php echo lang('title_view'); ?></a> </td>
                    <td> <a href="<?php echo base_url('admin_navigation/edit/' . $nav->id); ?>" class="btn btn-default btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo lang('title_edit'); ?></a> </td>
                    <td><a href="<?php echo base_url('admin_navigation/remove_nav/' . $nav->id); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> <?php echo lang('title_delete'); ?></a> </td>
				<?php endforeach ?>	
                </tbody>		
             <tfoot>
                <tr>
                    <th><?php echo lang('title_main'); ?></th>
                    <th><?php echo lang('title_view'); ?></th>			
                    <th><?php echo lang('title_edit'); ?></th>
                    <th><?php echo lang('title_delete'); ?></th>   
                 </tr>						
             </table>   
           <?php endif ?>


        </div>
        <div role="tabpanel" class="tab-pane fade" id="redirects">
           
		    <br /> &nbsp; <br />
		    <div class="well"> 
			 
			<?php echo lang('index_redirect_desc'); ?>
			</div>

           <?php if ( ! $redirects ): ?>
			<br /> &nbsp; <br />
            <div class="alert alert-info alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong>  <br />  <?php echo lang('nav_no_redirects_found'); ?> 
			</div>
			
			<?php else: ?>
			
			
            <table class="display table table-striped table-bordered">
			 <thead>
                <tr>
                    <th><?php echo lang('redir_from_label'); ?></th>
                    <th><?php echo lang('redir_to_label'); ?></th>
                    <th><?php echo lang('redir_type_label'); ?></th>
                    <th><?php echo lang('redir_http_label'); ?></th>
                    <th></th>
                </tr>
			 </thead>
             <tbody>
                <?php foreach ($redirects as $redir): ?>
                    <tr>
                    <td><?php echo $redir->old_slug; ?></td>
                    <td><?php echo $redir->new_slug; ?></td>
                    <td><?php echo $redir->type; ?></td>
                    <td><?php echo $redir->code; ?></td>
                    <td class="text-right">
                        <a href="<?php echo site_url('admin_navigation/edit_redirect/' . $redir->id); ?>" class="btn btn-default btn-xs"><?php echo lang('redir_edit_btn'); ?> <i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="<?php echo site_url('admin_navigation/remove_redirect/' . $redir->id); ?>" class="btn btn-danger btn-xs"><?php echo lang('redir_remove_btn'); ?> <i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
              <?php endforeach ?>
             </tbody>		
             <tfoot>
                <tr>
                    <th><?php echo lang('redir_from_label'); ?></th>
                    <th><?php echo lang('redir_to_label'); ?></th>
                    <th><?php echo lang('redir_type_label'); ?></th>
                    <th><?php echo lang('redir_http_label'); ?></th>
                    <th></th>
                </tr>
              </tfoot>				
            </table>

            <?php endif ?>
        </div>
    </div>	  
	  
	  
		 
	  </div>
	</div>


 


             <script>
                $('#sortable').sortable({
                    axis: 'y',
                    update: function (event, ui) {
                        var data = $(this).sortable('serialize');
                        $.ajax({
                            data: data,
                            type: 'POST',
                            url: '<?php echo base_url("admin_navigation/update_nav_order"); ?>'
                        });
                    }
                });
            </script>