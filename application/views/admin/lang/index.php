<?php 
 /**
 * Language Main Page
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
            <a href="<?php echo site_url('admin_lang'); ?>" class="btn btn-default"><?php echo lang('languages_hdr'); ?></a> 
			<a href="#" class="btn btn-primary"><?php echo lang('languages_index_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 

 <div class="text-right"><a class="btn btn-default btn-sm" href="<?php echo site_url('admin_lang/add_lang'); ?>"><?php echo lang('index_add_new_lag'); ?> <i class="fa fa-plus" aria-hidden="true"></i></a></div>
 <br />

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo lang('languages_hdr'); ?></h3>
  </div>
  <div class="panel-body">
  <div class="well">
      <?php echo lang('languages_hdr_help_txt'); ?>
  </div>
  
 	<?php
	 
	if (empty($langs)) { ?>   

	<div class="alert alert-warning alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong><?php echo lang('error_title_important'); ?></strong> 
	  <br />
	  <?php echo lang('error_no_languages'); ?>
	</div>
	  
	<?php } else  { ?>  
  
    <table id="listing" class="table table-striped table-bordered">
        <thead>
            <tr>
				<th><?php echo lang('languages_table_lang_h'); ?></th>
				<th><?php echo lang('languages_table_abbr_h'); ?></th>
				<th><?php echo lang('languages_table_is_default_h'); ?></th>
				<th><?php echo lang('languages_table_enabled_h'); ?></th>
                <th><?php echo lang('languages_make_default_btn'); ?></th>		
                <th><?php echo lang('enabled'); ?> </th>					
            </tr>
        </thead>
        <tbody>
			<?php foreach ($langs as $item): ?>
					<tr>
					<td><?php echo ucfirst($item['language']); ?></td>
					<td><?php echo $item['abbreviation']; ?></td>
					<td><?php if ($item['is_default'] == '1')  { ?><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo lang('yes'); ?> </button> <?php } else { ?><button type="button" class="btn btn-default btn-xs"><?php echo lang('no'); ?> </button> <?php  } ?> </td>
					<td><?php if ($item['is_avail'] == '1')  { ?><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo lang('yes'); ?> </button> <?php } else { ?><button type="button" class="btn btn-default btn-xs"><?php echo lang('no'); ?> </button> <?php  } ?></td>
					<td>
						<?php if ($item['is_default'] == '0'): ?>
							<a href="<?php echo site_url('admin_lang/make_default/' . $item['id']); ?>" class="btn btn-default btn-xs"><i class="fa fa-check" aria-hidden="true"></i>  <?php echo lang('languages_make_default_btn'); ?></a>
						<?php endif ?>
					</td>
					<td>	
						<?php if ($item['is_avail'] == '1'): ?>
							<?php if ($item['is_default'] == '0'): ?>
							<a href="<?php echo site_url('admin_lang/disable/' . $item['id']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo lang('languages_disable_btn'); ?></a>
							<?php endif ?>
						<?php else: ?>
							<a href="<?php echo site_url('admin_lang/enable/' . $item['id']); ?>" class="btn btn-primary btn-xs"><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo lang('languages_enable_btn'); ?></a>
						<?php endif ?>            
					</td>
				</tr>
			  <?php endforeach ?>  
			</tbody>		
        <tfoot>
            <tr>
				<th><?php echo lang('languages_table_lang_h'); ?></th>
				<th><?php echo lang('languages_table_abbr_h'); ?></th>
				<th><?php echo lang('languages_table_is_default_h'); ?></th>
				<th><?php echo lang('languages_table_enabled_h'); ?></th>
                <th><?php echo lang('languages_make_default_btn'); ?></th>		
                <th><?php echo lang('enabled'); ?> </th> 				 		
            </tr>
        </tfoot>
	
	</table>
    <?php } ?>
  </div>
</div>

<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><?php echo lang('error_title_beware'); ?></strong> 
  <br /> 
  <?php echo lang('languages_help_text'); ?>
</div>

