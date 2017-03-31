<?php
$current_page = 'sidebar';
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
                                <div class="muted pull-left">Edit Useful Link</div>
                            </div>
                            <?php
                							$id = $_GET['id'];
                							$query = mysql_query("SELECT * FROM links WHERE id='$id'") or die(mysql_error());
                							$data = mysql_fetch_array($query);
                							?>
                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="edit_products" method="post" enctype="multipart/form-data" action="functions/update_sidebar.php">
                                     <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                     <fieldset>
                                       <div class="control-group">
                                         <label class="control-label" for="focusedInput">Language</label>
                                         <div class="controls">
                                           <select id="select01" class="chzn-select" name="lang">
                                             <option value="<?php echo $data['lang']; ?>"><?php if($data['lang']==1) {echo "English";}elseif($data['lang']==0) {echo "中文";};?></option>
                                             <option value="1">English</option>
                                             <option value="0">中文</option>
                                           </select>
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label">Title</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="name" type="text" value="<?php echo $data['title']; ?>" placeholder="Title">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label">Website URL</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="link" type="text" value="<?php echo $data['link']; ?>" placeholder="http://www.example.com">
                                         </div>
                                       </div>
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">Attachment</label>
                                          <div class="controls">
                                            <?php if (!empty($data['attachment'])) {echo '<a href="admin/'.$data['attachment'].'" target="_blank"><i class="icon-download"></i></a>'; }?>
                                            <input class="input-file uniform_on" id="fileInput" name="attachment" type="file" accept="image/gif, image/jpeg, image/x-png, application/msword, application/pdf, application/x-zip-compressed, application/msexcel, application/rtf, video/x-msvideo, video/quicktime, video/x-mpeg2" />
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
