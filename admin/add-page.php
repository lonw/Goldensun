<?php
$current_page = 'post';
include "includes/header.php";
include "includes/navigation.php";
?>

        <div class="container-fluid">
            <div class="row-fluid">
              <?php include "includes/sidebar2.php";?>

              <div class="span10">
                <div class="row-fluid">
                <!--/span-->
                <div class="span12" id="content">
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
                                <div class="muted pull-left">Add page</div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="input_products" enctype="multipart/form-data" method="post" action="functions/insert-products.php">
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Language</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select" name="type">
                                              <option value="0">中文</option>
                                              <option value="1">English</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Title</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="title" type="text" placeholder="Title">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Category</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="categories" type="text" placeholder="Categories">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="photo">产品图片:</label>
                                            <div class="controls">
                                          <input type="file" name="photo[]" id="photo"class="input-xlarge focused" multiple>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                           <textarea id="ckeditor_full" class="input-xlarge textarea" name="description" placeholder="Description ..." style="width: 400px; height: 200px"></textarea>
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
                </div>
            </div>
<?php include "includes/footer.php" ?>
