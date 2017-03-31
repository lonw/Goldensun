<?php
$current_page = 'post';
include "includes/header.php";
include "includes/navigation.php";
?>
        <div class="container-fluid">
            <div class="row-fluid">
                  <?php include "includes/sidebar.php";?>
                <!--/span-->
                <div class="span9" id="content">
                	<?php
      						if (!empty($_GET['message']) && $_GET['message'] == 'success') {
      							echo '<div class="alert alert-success">' ;
      							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      							echo '<h4>Success ! { '.$_GET['title'].' } Added</h4>';
      							echo '</div>';
      						}
      						else if (!empty($_GET['message']) && $_GET['message'] == 'update') {
      							echo '<div class="alert alert-success">' ;
      							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      							echo '<h4>Success !  { '.$_GET['title'].' } Updated</h4>';
      							echo '</div>';
      						}
      						else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
      							echo '<div class="alert alert-success">' ;
      							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      							echo '<h4>Success !  { '.$_GET['title'].' } Deleted</h4>';
      							echo '</div>';
      						}
            ?>

<div class="row-fluid">
  <!-- block -->
  <div class="block">
      <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">Page Managment <a href="#"><small>[Archive]</small></a></div>
      </div>
      <div class="block-content collapse in">
      	 <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Language</th>
                          <th>Title</th>
                          <th>Category</th>

                      </tr>
                  </thead>
                    <tbody>
                    <?php
											$per_page = 25;

											$page_query = mysql_query("SELECT COUNT(*) FROM page");
											$pages = ceil(mysql_result($page_query, 0) / $per_page);

											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;

											$query = mysql_query("SELECT * FROM page ORDER BY id DESC LIMIT $start, $per_page");

											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php if($data['lang']==1) {echo "English";}elseif($data['lang']==0) {echo "中文";};?></td>
													<td><a href="../zh-cn/page.php?id=<?php echo $data['id']; ?>" target="_blank"><?php echo utf8Substr($data['title'],0,25); ?></a></td>
                          <td><?php echo $data['category']; ?></td>
                          <td>
                          </td>
                          <td><a href="edit-page.php?id=<?php echo $data['id']; ?>" class="btn">
                          <i class="icon-edit"></i></a> <a href="functions/delete-page.php?id=<?php echo $data['id']; ?>" class="btn" onclick="return confirm('To continue ?')")><i class="icon-trash"></i></a></td>
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
                	 <a href="add-page.php" class="btn"><i class="icon-plus"></i> Add</a>
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
