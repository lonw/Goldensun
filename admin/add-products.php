<?php
$current_page = 'products';
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
                                <div class="muted pull-left">Add products</div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="input_products" enctype="multipart/form-data" method="post" action="functions/insert-products.php">
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label">House#</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="house_num" type="text" placeholder="#">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Area</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select" name="type">
                                              <option value="奥兰多">奥兰多</option>
                                              <option value="坦帕">坦帕</option>
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
                                          <label class="control-label">Price</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="price" type="text" placeholder="$">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Rooms Detail</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="rooms_detail" type="text" placeholder="Rooms Detail">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Categories</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="categories" type="text" placeholder="Categories">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Address</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="address" type="text" placeholder="Address">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Sizes</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="sizes" type="text" placeholder="Sizes">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="photo">House's Picture::</label>
                                            <div class="controls">
                                          <input type="file" name="photo[]" id="photo"class="input-xlarge focused" multiple>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="photo">Floorplans:</label>
                                            <div class="controls">
                                          <input type="file" name="inside_photo[]" id="inside_photo" class="input-xlarge focused" multiple>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                           <textarea id="ckeditor_full" class="input-xlarge textarea" name="description" placeholder="Description ..." style="width: 400px; height: 200px"></textarea>
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
                </div>
            </div>
<?php include "includes/footer.php" ?>
