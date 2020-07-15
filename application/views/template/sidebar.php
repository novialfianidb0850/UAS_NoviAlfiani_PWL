  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/dist/img/novi.jpg');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Novi Alfiani</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 mr-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <!-- Query Menu -->
            <?php
            $role_id = $this->session->userdata('role_id');
              $queryMenu = "SELECT `user_menu`.`id`,`menu`
                            FROM `user_menu` JOIN `user_acces_menu` 
                              ON `user_menu`.`id` = `user_acces_menu`.`menu_id`
                           WHERE `user_acces_menu`.`role_id` = $role_id
                           ORDER BY `user_acces_menu`.`menu_id` ASC
                           ";
              $menu = $this->db->query($queryMenu)->result_array();
            ?>
            <!-- Looping Menu -->
            <?php foreach ($menu as $m):?>
            <a class="nav-link active">
              <i class="fas fa-bars"></i>
              <p>
                <?php echo $m['menu'];?>
              </p>
            </a>
          </li>
            <!-- Siapkan Sub Menu -->
            <?php 
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                            FROM `user_sub_menu` JOIN `user_menu` 
                              ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                           WHERE `user_sub_menu`.`menu_id` = $menuId
                           AND `user_sub_menu`.`is_active` = 1
            ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach ($subMenu as $sm) :?>
            <li class="nav-item has-treeview">            
            <a href="<?php echo base_url($sm['url']); ?>" class="nav-link">
              <i class="<?php echo $sm['icon']; ?>"></i>
              <p>
                <?php echo $sm['title']; ?>
              </p>
            </a>
            </li>

            <?php endforeach;?><!-- Penutup Foreach SubMenu -->
          


          <?php endforeach;?><!-- Penutup Foreach Menu -->
          <li class="nav-item has-treeview menu-open">
            <a class="nav-link active">
              <i class="fas fa-bars"></i>
              <p>
                KELUAR
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('index.php/login/logout');?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->