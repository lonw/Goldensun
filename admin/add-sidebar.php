<?php
$current_page = 'sidebar';
include "includes/header.php";
include "includes/navigation.php";?>

        <div class="container-fluid">
            <div class="row-fluid">

              <?php include "includes/sidebar.php";?>

                <!--/span-->
                <div class="span9" id="content">
                  <?php
          						if (!empty($_GET['message']) && $_GET['message'] == 'error') {
          							echo '<div class="alert alert-error">' ;
          							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
          							echo '<h4>Enter the valid data</h4>';
          							echo '</div>';
          						}
                  	?>
                   <!-- Add User -->
                    <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Useful Link</div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="input_products" enctype="multipart/form-data" method="post" action="functions/insert-sidebar.php">
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Language</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select" name="lang">
                                              <option value="1">English</option>
                                              <option value="0">中文</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Title</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="name" type="text" placeholder="Title">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Website URL</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="link" type="text" placeholder="http://www.example.com">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">Attachment</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" name="attachment" type="file" accept="image/gif, image/jpeg, image/x-png, application/msword, application/pdf, application/x-zip-compressed, application/msexcel, application/rtf, video/x-msvideo, video/quicktime, video/x-mpeg2" />
                                          </div>
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
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
