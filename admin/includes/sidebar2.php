<div class="span2" id="sidebar">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li <?php if ($current_page == 'dashboard') {;?> class="active"<?php }; ?>>
          <a href="index.php"><i class="icon-chevron-right"></i>Dashboard</a>
        </li>
        <li <?php if ($current_page == 'menubar') {;?> class="active"<?php }; ?>>
            <a href="menubar.php"><i class="icon-chevron-right"></i>Navigation</a>
        </li>
        <li <?php if ($current_page == 'news') {;?> class="active"<?php }; ?>>
            <a href="news.php"><i class="icon-chevron-right"></i>News Management</a>
        </li>
        <li <?php if ($current_page == 'post') {;?> class="active"<?php }; ?>>
            <a href="page.php"><i class="icon-chevron-right"></i>Page Management</a>
        </li>
        <li <?php if ($current_page == 'products') {;?> class="active"<?php }; ?>>
            <a href="products.php"><i class="icon-chevron-right"></i>Post Management</a>
        </li>
        <li <?php if ($current_page == 'affiliate') {;?> class="active"<?php }; ?>>
            <a href="affiliate.php"><i class="icon-chevron-right"></i>Affiliate
              <?php
              $result = mysql_query("SELECT count(*) FROM feedback");
              $row = mysql_fetch_row($result);
              $num = $row[0];
              ?><b>(<?php echo $num;?>)</b></a>
        </li>
        <li <?php if ($current_page == 'sidebar') {;?> class="active"<?php }; ?>>
            <a href="sidebar.php"><i class="icon-chevron-right"></i>Useful Links</a>
        </li>
        <li <?php if ($current_page == 'user') {;?> class="active"<?php }; ?>>
            <a href="user.php"><i class="icon-chevron-right"></i>Admin</a>
        </li>
    </ul>
</div>
