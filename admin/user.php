<?php
$current_page = 'user';
include "includes/header.php";
include "includes/navigation.php";?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include "includes/sidebar.php";?>
                <!--/span-->
                <div class="span9" id="content">
            <?php
						if (!empty($_GET['message']) && $_GET['message'] == 'success') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							echo '<h4>Succeed to add a user</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'update') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							echo '<h4>Succeed to modify a user</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							echo '<h4>Succeed to delete a user</h4>';
							echo '</div>';
						}?>

					<div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">User List</div>
            </div>
            <div class="block-content collapse in">
            	 <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
										$query = mysql_query("select * from users");

										$no = 1;
										while ($data = mysql_fetch_array($query)) {
										?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $data['username']; ?></td>
												<td><?php echo md5($data['password']); ?></td>
												<td><a href="edit-user.php?id=<?php echo $data['id']; ?>" class="btn"><i class="icon-edit"></i></a> <a href="functions/delete-user.php?id=<?php echo $data['id']; ?>" class="btn"><i class="icon-trash"></i></a></td>
											</tr>
										<?php
											$no++;
										}
										?>
                </tbody>
            </table>
            </div>
          <div class="navbar navbar-inner block-header">
          	 <a href="add-user.php" class="btn"><i class="icon-plus"></i> Add more</a>
          </div>
      </div>
      <!-- /block -->
  </div>


    </div>
</div>
<?php include "includes/footer.php";?>
