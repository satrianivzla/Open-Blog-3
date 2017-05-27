        <div class="col-sm-3 col-md-2 col-xs-12 sidebar">
          <ul class="nav nav-sidebar">
            <?php foreach ($this->template->admin_nav as $nav): ?>
            <li class="<?php echo ($this->template->active_link == $nav['name'])? "active": ''; ?>"><?php echo $nav['link']; ?></li>
            <?php endforeach ?>
           
          </ul>


        </div>