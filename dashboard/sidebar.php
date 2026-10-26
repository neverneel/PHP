<!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <?php
            // if(isset($_SESSION['userData']['role']) && $_SESSION['userData']['role'] === 'admin'){
            ?>
            <li class="nav-item nav-category">Menu</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#users-menu" aria-expanded="false" aria-controls="users-menu">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="users-menu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="users.php">All Users</a></li>
                  <li class="nav-item"> <a class="nav-link" href="addUser.php">Add User</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
              <?php
            // }
            ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#blogs-menu" aria-expanded="false" aria-controls="blogs-menu">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Blogs</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="blogs-menu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="users.php">All Blogs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="addBlog.php">Add Blog</a></li>
                  <li class="nav-item"> <a class="nav-link" href="addCategory.php">Add Category</a></li>
                </ul>
              </div>
            </li>
            
            
            
            
            
            
          </ul>
        </nav>
        <!-- partial -->