<?php
$current_page = 'user';
include "includes/header.php";
include "includes/navigation.php";?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include "includes/sidebar.php";?>
                <!--/span-->
                <div class="span9" id="content">
                    <!-- morris graph chart -->
                    <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">User Management</div>
                            </div>
                            <?php
							$id = $_GET['id'];
							$query = mysql_query("select * from users where id='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="edit_user" method="post" action="functions/update-user.php">
                                     <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Username</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="username" type="text" value="<?php echo $data['username']; ?>" disabled >
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Password</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="password" type="password" value="<?php echo $data['password']; ?>">
                                          </div>
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                          <button type="reset" class="btn">Reset</button>
                                        </div>
                                      </fieldset>
                                    </form>
                                </div>
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
    </body>

</html>
