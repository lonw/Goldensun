<?php
	//Set values for page
	$page_title = "联系我们";
	$current_page = "contact";

	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');

  if (isset($_GET['add'])) {
	$title= ((isset($_POST['title']) && !empty($_POST['title']))?sanitize($_POST['title']):'');
  $email= ((isset($_POST['email']) && $_POST['email'] != '')?sanitize($_POST['email']):'');
  $name= ((isset($_POST['name']) && $_POST['name'] != '')?sanitize($_POST['name']):'');
  $phone= ((isset($_POST['phone']) && !empty($_POST['phone']))?sanitize($_POST['phone']):'');
	$content= ((isset($_POST['content']) && !empty($_POST['content']))?sanitize($_POST['content']):'');
  $attachment= ((isset($_POST['attachment']) && $_POST['attachment'] != '')?sanitize($_POST['attachment']):'');
	$dbpath = '';
	   $target_dir = "uploads/";
	   $target_file = $target_dir . basename($_FILES["attachment"]["name"]);
	   $uploadOk = 1;
	   $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	   $check = getimagesize($_FILES["attachment"]["tmp_name"]);
	  //  if($check !== false) {
	  //       echo "File is an image - " . $check["mime"] . ".";
	  //       $uploadOk = 1;
	  //   } else {
	  //       echo "File is not an image.";
	  //       $uploadOk = 0;
	  //   }
	      // Check if file already exists
	  //  if (file_exists($target_file)) {
	  //      echo "Sorry, file already exists.";
	  //      $uploadOk = 0;
	  //  }
	  //  // Check file size
	   if ($_FILES["attachment"]["size"] > 500000) {
	       echo "Sorry, your file is too large.";
	       $uploadOk = 0;
	   }
	   // Allow certain file formats
	  //  if($uploadOk == 0 ) {
	  //      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  //      $uploadOk = 0;
	  //  }
	   // Check if $uploadOk is set to 0 by an error
	   if ($uploadOk == 0) {
	       echo "Sorry, your file was not uploaded.";
	   // if everything is ok, try to upload file
	   }
		 else {
	       if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
	           echo "";


	       } else {
	           echo "Sorry, there was an error uploading your file.";
	       }
	   }
		 if ($_POST) {
				 // insert into database
				 $insertSql = "INSERT INTO feedback(`title`,`email`,`name`,`phone`,`content`,`attachment`)
				VALUES('$title','$email','$name','$phone','$content','$attachment')";
				 mysql_query($insertSql);
					 echo'<h4 class="bg-success" style="color:green;" align="center">&nbsp;提交成功 - Succeed </h4>';
					}

}?>

        <!--Breadcrumb-->
        <section id="breadcrumb" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 breadcrumb-block">
                        <h2>
													<?php
													if (isset($_GET['insurance'])) {echo "保险业务";}
													 elseif (isset($_GET['invest'])) {echo "投资咨询";}
													 elseif (isset($_GET['support'])) {echo "技术支援";}
													 else {
														echo $page_title;
													} ?>
												</h2>
                    </div>
                    <div class="col-sm-6 breadcrumb-block text-right">
                        <ol class="breadcrumb">
                            <li><span>网站位置:</span><a href="home.php">首 页</a></li>
                            <li class="active"><?php echo $page_title; ?>
														</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <!--Contact Us-->
        <section id="contact" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 contact-block">
                        <div class="col-sm-12 main-heading">
                            <h3>联络资料</h3>
                        </div>
                        <ul class="address">
														<li><i class="fa fa-clock-o"></i>Mon - Fri: 10:00 - 18:00</li>
                            <li><i class="fa fa-map-marker"></i>7270 Woodbine Ave, Suite 203, Markham</li>
                            <li><a href="tel:+0883462543"><i class="fa fa-phone"></i>+1 905-604-5622</a> </li>
                            <li><a href="mailto:info@goldensunca.com "><i class="fa fa-envelope"></i>info@goldensunca.com</a> </li>
                            <li><i class="fa fa-fax"></i>+1 905-604-5922</li>
                        </ul>
                        <ul class="sppb-person-social">
                            <li><a target="-_blank" href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>

                        </ul>
                    </div>
                    <div class="col-sm-8 contact-block">
                        <div class="col-sm-12 main-heading">
                            <h3>提交资料</h3>
                        </div>
                        <form id="contact-form" action="contact.php?add=true" method="post" accept-charset="utf-8" enctype="multipart/form-data">
													<div class="form-group col-sm-3 padding-right">
													<select name="title" id="title" class="form-control" required>
													<option value="" required>请选择标题</option>
													<?php if (isset($_GET['insurance'])) { ?>
													<option value="汽车保险" >汽车保险</option>
													<option value="房屋保险" >房屋保险</option>
													<option value="人寿保险" >人寿保险</option>
													<option value="医疗保险" >医疗保险</option>
													<option value="探亲、旅游(留学)保险" >探亲、旅游(留学)保险</option>
													<?php } ?>
													<?php if (isset($_GET['invest'])) { ?>
													<option value="房屋贷款" >申请贷款</option>
													<option value="业务咨询" >业务咨询</option>
													<?php } ?>
													<?php if (isset($_GET['support'])) { ?>
														<option value="技术困难" >技术困难</option>
														<option value="意见反馈" >意见反馈</option>
														<?php } ?>
													<?php if (isset($_GET['hire'])) { ?>
														<option value="员工招聘" >员工招聘</option>
														<option value="经纪合作" >经纪合作</option>
													<?php } ?>
													<option value="预约会议" >预约会议</option>
													</select>
													</div>
                            <div class="form-group col-sm-3 no-padding">
                                <input type="text" class="form-control" name="name" id="name" required placeholder="姓名">
                            </div>
                            <div class="form-group col-sm-3 no-padding">
                                <input type="email" class="form-control" name="email" id="email" required placeholder="邮箱">
                            </div>
                            <div class="form-group col-sm-3 no-padding">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="电话">
                            </div>
                            <div class="form-group col-sm-12 no-padding">
                                <textarea class="form-control" name="content" id="content" placeholder="请输入信息"></textarea>
                            </div>
														<div class="col-sm-6 button no-padding fileupload fileupload-new" data-provides="fileupload">
													    <span class="sppb-btn sppb-btn-default btn-file"><span class="fileupload-new">添加附件</span>
													    <span class="fileupload-exists">更改</span>         <input type="file" name="attachment" id="attachment"></span>
													    <span class="fileupload-preview"></span>
													    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
													  </div>
                            <div class="col-sm-12 button no-padding">
                                <input type="submit" name="add" class="sppb-btn sppb-btn-default" value="发送信息">
                                <div id="msg" class="message"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

				<!--Map-->
				<section id="map">
						<div class="container-fluid">
								<div class="row">
										<div class="col-sm-12 no-padding">
												<div class="sppb-addon-gmap-canvas" data-lat="43.820463" data-lng=" -79.351283" data-maptype="ROADMAP" data-mapzoom="15" data-mousescroll="false"></div>
										</div>
								</div>
						</div>
				</section>
<!-- Page's footer starts here -->
<?php include_once('./includes/footer.php'); ?>
<script src="./js/upload.js" type="text/javascript"></script>
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
