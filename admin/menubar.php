<?php
$current_page = 'menubar';
include "includes/header.php";
include "includes/navigation.php";
if (isset($_GET['selling_id'])) {
  $id = $_GET['selling_id'];
  $sql="UPDATE categories SET available='0' where id='$id'";
  $res = mysql_query($sql) or die (mysql_error());
  header('location:menubar.php?message=sold');
}
if (isset($_GET['sold_id'])) {
  $id = $_GET['sold_id'];
  $sql="UPDATE products SET available='1' where id='$id'";
  $res = mysql_query($sql) or die (mysql_error());
  header('location:menubar.php?message=selling');
}
?>
        <div class="container-fluid">
            <div class="row-fluid">
                  <?php include "includes/sidebar.php";?>
                <!--/span-->
                <div class="span9" id="content">
                	<?php
                  $title = ((isset($_GET['num']) && $_GET['num'] != '')?sanitize($_GET['num']):'');
      						if (!empty($_GET['message']) && $_GET['message'] == 'success') {
      							echo '<div class="alert alert-success">' ;
      							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      							echo '<h4>Success ! House#:  <b>'.$title.'</b> was Added</h4>';
      							echo '</div>';
      						}
      						else if (!empty($_GET['message']) && $_GET['message'] == 'update') {
      							echo '<div class="alert alert-success">' ;
      							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      							echo '<h4>Success ! House#:  <b>'.$title.'</b> was Updated</h4>';
      							echo '</div>';
      						}
      						else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
      							echo '<div class="alert alert-success">' ;
      							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      							echo '<h4>Success ! House#:  <b>'.$title.'</b> was Deleted</h4>';
      							echo '</div>';
      						}
                  else if (!empty($_GET['message']) && $_GET['message'] == 'sold') {
                    echo '<div class="alert alert-success">' ;
                    echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    echo '<h4>Success ! House#:  <b>'.$title.'</b> is Sold</h4>';
                    echo '</div>';
                  }
                  else if (!empty($_GET['message']) && $_GET['message'] == 'seling') {
                    echo '<div class="alert alert-success">' ;
                    echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    echo '<h4>Success ! House#:  <b>'.$title.'</b> is Selling</h4>';
                    echo '</div>';
                  }
            ?>

<div class="row-fluid">
  <!-- block -->
  <div class="block">
      <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">Menu Managment <a href="#"><small>[Archive]</small></a></div>
      </div>
      <div class="block-content collapse in">
      	 <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>ID#</th>
                          <th>Title</th>
                          <th>Link</th>
                          <th>Attachment</th>
                          <th>Language</th>
                      </tr>
                  </thead>
                    <tbody>
                    <?php
											$per_page = 25;

											$page_query = mysql_query("SELECT COUNT(*) FROM categories");
											$pages = ceil(mysql_result($page_query, 0) / $per_page);

											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;

											$query = mysql_query("SELECT * FROM categories LIMIT $start, $per_page");

											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php echo $data['id'];?></td>
													<td><?php echo $data['category']; ?></td>
                          <td><?php echo $data['link']; ?></td>
                          <td><?php echo $data['img']; ?></td>
                          <td><?php if($data['lang']==1) {echo "English";}elseif($data['lang']==0) {echo "中文";};?></td>
                          <td></td>
                          <td><?php if (isset($data['available'])== 1): ?>
                            <a href="menubar.php?selling_id=<?php echo $data['id']; ?>" class="btn">
                          <i class="icon-plus"></i></a>
                          <?php else: ?>
                            <a href="menubar.php?sold_id=<?php echo $data['id']; ?>" class="btn">
                          <i class="icon-minus"></i></a>
                          <?php endif; ?>
                          <a href="edit-menubar.php?id=<?php echo $data['id']; ?>" class="btn">
                          <i class="icon-edit"></i></a> <a href="functions/delete-menubar.php?id=<?php echo $data['id']; ?>" class="btn" onclick="return confirm('To continue ?')")><i class="icon-trash"></i></a></td>
                      </tr>
											<?php
                    };
											?>
                    </tbody>
                </table>
                <div align="center">
									<?php
									if($pages >= 1 && $page <= $pages)
									{
									  for($x=1; $x<=$pages; $x++)
									  {
										  //echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
									  	if($x == $page)
											echo ' <b><a href="?page='.$x.'">'.$x.'</a></b> | ';
										else
											echo ' <a href="?page='.$x.'">'.$x.'</a> |';
									  }
									}
									?>
                  </div>
                </div>
                <div class="navbar navbar-inner block-header">
                	 <a href="add-menubar.php" class="btn"><i class="icon-plus"></i> Add</a>
                </div>
            </div>
            <!-- /block -->
        </div>

    </div>
</div>
            <hr>
            <footer>
              <center>&copy; Goldensun Content Management System Version 1.0 beta</center>

            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>
