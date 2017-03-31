<?php
$current_page = 'affiliate';
include "includes/header.php";
include "includes/navigation.php";?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include "includes/sidebar.php";?>
                <!--/span-->
                <div class="span9" id="content">
                	<?php
						if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							echo '<h4>Success Delete</h4>';
							echo '</div>';
						}
                  	?>

                  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Affiliate System <a href="#"><small>[Archive]</small></a></div>
                            </div>
                            <div class="block-content collapse in">
                            	 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Message</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Tel #</th>
                                                <th>Recieved</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$per_page = 15;

											$page_query = mysql_query("SELECT COUNT(*) FROM feedback");
											$pages = ceil(mysql_result($page_query, 0) / $per_page);

											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;

											$query = mysql_query("SELECT * FROM feedback LIMIT $start, $per_page");

											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php echo $data['id']; ?></td>
                          <td><a href="affiliate.php?joinid=<?php echo $data['id']; ?>">Read<i class="icon-envelope"></i></a></td>
													<td><?php echo $data['name']; ?></td>
                          <td><?php echo $data['email']; ?></td>
                          <td><?php echo $data['phone']; ?></td>
                          <td><?php $datetime = explode(" ",$data['get_date']);
                          echo $datetime[0]; ?></td>
                          <td>
                            <!-- <a href="functions/delete-feedback.php?id=<?php echo $data['id']; ?>" class="btn" onclick="return confirm('To continue ?')")><i class="icon-zoom-in"></i></a> -->
                            <a href="functions/delete-feedback.php?id=<?php echo $data['id']; ?>" class="btn" onclick="return confirm('To continue ?')")><i class="icon-trash"></i></a>
                          </td>
                                                </tr>
											<?php
											}
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

                        </div>
                        <!-- /block -->
                    </div>
                    <?php if (isset($_GET['joinid'])) :?>


                       <div class="row-fluid">
                             <!-- block -->
                             <div class="block">
                                 <div class="navbar navbar-inner block-header">
                                     <div class="muted pull-left">Message <a href="#"></a></div>
                                 </div>
                                 <div class="block-content collapse in">
                                   <?php  $id = $_GET['joinid'];
                                 $query = mysql_query("SELECT * FROM feedback WHERE id = $id");
                                 $data = mysql_fetch_array($query);
                                 ?>
                                   <table class="table table-striped">
                                             <thead>
                                                 <tr><th>From :<?php echo $data['name']; ?></th>
                                                 </tr>
                                             </thead>
                                             <tbody><tr>
                               <td><?php echo $data['content']; ?><br><br><b>Attachment :</b>
                                 <a href="<?php echo $data['attachment']; ?>" target="_blank"><i class="icon-download"></i></a></td>
                                             </tr>
                                             </tbody>
                                         </table>
                                         <div align="center">

                                         </div>
                                 </div>

                             </div>
                             <!-- /block -->
                         </div>


                    <?php endif; ?>

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
