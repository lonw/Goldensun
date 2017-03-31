<?php
$current_page = 'news';
include "includes/header.php";
include "includes/navigation.php";
?>
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
                                <div class="muted pull-left">Edit news</div>
                            </div>
              <?php
							$id = $_GET['id'];
							$query = mysql_query("SELECT * FROM news WHERE id='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="edit_page" method="post" enctype="multipart/form-data" action="functions/update-page.php">
                                     <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                     <fieldset>

                                       <div class="control-group">
                                         <label class="control-label">Title</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="title" type="text" value="<?php echo $data['title']; ?>"  placeholder="Title">
                                         </div>
                                       </div>

                                       <div class="control-group">
                                          <textarea id="ckeditor_full" class="input-xlarge textarea" name="description" placeholder="Description ..." style="width: 400px; height: 200px"><?php echo $data['description']; ?></textarea>
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
<?php include "includes/footer.php" ?>
