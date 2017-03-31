<?php
$current_page = 'products';
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
                                <div class="muted pull-left">Edit products</div>
                            </div>
              <?php
							$id = $_GET['id'];
							$query = mysql_query("SELECT * FROM products WHERE id='$id'") or die(mysql_error());
							$data = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="edit_products" method="post" enctype="multipart/form-data" action="functions/update-products.php">
                                     <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                     <fieldset>
                                       <div class="control-group">
                                         <label class="control-label">House#</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="house_num" type="text" value="<?php echo $data['house_num']; ?>" placeholder="#">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="focusedInput">Area</label>
                                         <div class="controls">
                                           <select id="select01" class="chzn-select" name="type">
                                             <option value="奥兰多" <?php if($data['type']=="奥兰多") echo 'selected="selected"'; ?>>奥兰多</option>
                                             <option value="坦帕" <?php if($data['type']=="坦帕") echo 'selected="selected"'; ?>>坦帕</option>
                                           </select>
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label">Title</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="title" type="text" value="<?php echo $data['title']; ?>"  placeholder="Title">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label">Price</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="price" type="text" value="<?php echo $data['price']; ?>" placeholder="$">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label">Rooms Detail</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="rooms_detail" type="text" value="<?php echo $data['rooms_detail']; ?>" placeholder="Rooms Detail">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label">Categories</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="categories" type="text" value="<?php echo $data['categories']; ?>" placeholder="Categories">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label">Address</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="address" type="text" value="<?php echo $data['address']; ?>" placeholder="Address">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label">Sizes</label>
                                         <div class="controls">
                                           <input class="input-xlarge focused" name="sizes" type="text" value="<?php echo $data['sizes']; ?>" placeholder="Sizes">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="photo">House's Picture:</label>
                                         <?php
                                         $imgs=explode(",",$data['image']);
                                         foreach ($imgs as $img): ?>
                                         <img class="img-responsive" src="<?php echo $img?>" style="max-height:50px;" alt="">
                                         <?php endforeach; ?>
                                           <div class="controls">
                                         <input type="file" name="photo[]" id="photo" class="input-xlarge focused" multiple>
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="photo">Floorplans:</label>
                                           <div class="controls">
                                             <?php
                                             $imgs=explode(",",$data['img_inside']);
                                             foreach ($imgs as $img): ?>
                                             <img class="img-responsive" src="<?php echo $img?>" style="max-height:50px;" alt="">
                                             <?php endforeach; ?>
                                         <input type="file" name="inside_photo[]" id="inside_photo" class="input-xlarge focused" multiple>
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
