<?php 
 /**
 * Dashboard main page
 * 
 * @access  public
 * @author  Simon Montaño
 * @version 3.0
 * Last Updated: May 04, 2017
*/
?>

         <div class="btn-group btn-breadcrumb">
            <a href="<?php echo site_url('admin'); ?>" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
            <a href="<?php echo site_url('admin'); ?>" class="btn btn-default"><?php echo lang('dashboard_page_name'); ?></a>
			<a href="#" class="btn btn-primary"><?php echo lang('dashboard_index_page'); ?></a> 
         </div>		 
		 <br /> &nbsp; <br /> 


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo lang('dashboard_title'); ?></h3>
  </div>
  <div class="panel-body">
  
  
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-6"> 
        <div class="panel status panel-success">
            <div class="panel-heading">
                <h1 class="panel-title text-center"><?php echo $post_count; ?></h1>
            </div>
            <div class="panel-body text-center">                        
                <strong><?php echo lang('dashboard_box_published'); ?></strong>
            </div>
        </div>          
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6"> 
        <div class="panel status panel-success">
            <div class="panel-heading">
                <h1 class="panel-title text-center"><?php echo $active_comments_count; ?></h1>
            </div>
            <div class="panel-body text-center">                        
                <strong><?php echo lang('dashboard_box_comments'); ?></strong>
            </div>
        </div>  
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6"> 
        <div class="panel status panel-danger">
            <div class="panel-heading">
                <h1 class="panel-title text-center"><?php echo $modded_comments_count; ?></h1>
            </div>
            <div class="panel-body text-center">                        
                <strong><?php echo lang('dashboard_box_moderation'); ?></strong>
            </div>
        </div>  
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6"> 
        <div class="panel status panel-warning">
            <div class="panel-heading">
                <h1 class="panel-title text-center"><?php echo $notification_count; ?></h1>
            </div>
            <div class="panel-body text-center">                        
                <strong><?php echo lang('dashboard_box_subscriptions'); ?></strong>
            </div>
        </div>  
    </div>
</div>

<!-- last OB News -->
<div class="row">
    <div class="col-xs-12">
        <h2 class="page-header"><?php echo lang('openblog_news_title'); ?></h2>
        <?php if ($news): ?>
            <?php foreach ($news as $item): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $item->title; ?> <span class="pull-right"><?php echo $item->date_posted; ?></span></h3>
                </div>
                <div class="panel-body">
				   
                    <?php echo $item->excerpt; ?> 
					 <br /> &nbsp; <br />
					 <span class="pull-right"><a href="http://open-blog.org" class="btn btn-primary" target="_blank"><?php echo lang('openblog_message'); ?></a></span>
                </div>
            </div>
            <?php endforeach ?>

        <?php else: ?>
		
		   <div class="alert alert-info alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong><?php echo lang('error_title_important'); ?></strong> <br />
			  <?php echo lang('error_no_openblog_news'); ?>
			</div>

        <?php endif ?>
    </div>
</div>
  
  
  </div>
</div>
