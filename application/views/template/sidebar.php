 <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			  <!-- quey menu -->
			   <?php
					$role_id = $this->session->userdata('role_id');
					$queryMenu = "SELECT `user_menu`.`id`, `menu`
								FROM `user_menu` JOIN `user_access_menu` 
								ON `user_menu`.`id` = `user_access_menu`.`menu_id` 
								WHERE `user_access_menu`.`role_id` = $role_id
								ORDER BY `user_access_menu`.`menu_id` ASC ";

					$menu = $this->db->query($queryMenu)->result_array();

					?>
	
              <div class="menu_section">
	<!-- looping menu -->
		<?php foreach ($menu as $m) : ?>
			 <h3><?= $m['menu']; ?></h3>

			 <!-- SIAPKAN SUB MENU -->
			 <?php
			$menuId = $m['id'];
			$querySubMenu = "SELECT * FROM `user_sub_menu` WHERE `menu_id` = $menuId 
								 AND `is_active` = 1 ";
			$subMenu = $this->db->query($querySubMenu)->result_array();
			?>
			<?php foreach ($subMenu as $sm) : ?>
			<?php if ($title == $sm['title']) : ?>
			 <ul class="nav side-menu active">
				 <?php else : ?>
			 <ul class="nav side-menu ">
			<?php endif; ?>
			   <li><a href="<?= base_url($sm['url']); ?>"><i class="<?= $sm['icon']; ?>" >
			</i> <?= $sm['title']; ?> <span class="<?= $sm['cevron_down']; ?>"></span> </a>
			
			</li>
			<?php endforeach; ?>
		<?php endforeach; ?><br />
		
                  </li>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('auth/logout'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>