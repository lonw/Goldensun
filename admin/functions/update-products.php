<?php
include('../../inc/config.php');

$id = $_POST['id'];
$house_num = $_POST['house_num'];
$type = $_POST['type'];
$title = $_POST['title'];
$price = $_POST['price'];
$rooms_detail = $_POST['rooms_detail'];
$categories = $_POST['categories'];
$address = $_POST['address'];
$sizes = $_POST['sizes'];
$description = $_POST['description'];

$dbpath = '';
$inside_dbpath = '';
		// echo "phot 1 is empty";
if (empty($_FILES['photo']['name'][0]) && empty($_FILES['inside_photo']['name'][0])) {
	$query = mysql_query("UPDATE products SET house_num='$house_num', type='$type', title='$title', price='$price', rooms_detail='$rooms_detail', categories='$categories', address='$address', sizes='$sizes', description='$description' where id='$id'") or die(mysql_error());
	if ($query){header('location:../products.php?message=update&num='.$house_num);}
// echo "phot 1 and photo 2 is empty";
}
elseif (empty($_FILES['photo']['name'][0])) {
	$inside_photoCount = count($_FILES['inside_photo']['name']);
	if($inside_photoCount  > 0) {
	 for ($i=0; $i < $inside_photoCount; $i++) {
		 //   //for show the data of the image that was uploaded --delevelop mode
			 $inside_name = $_FILES['inside_photo']['name'][$i];
			 $inside_nameArray = explode('.',$name);
			 $inside_fileName = $nameArray[0];
			 $inside_fileExt = $nameArray[1];
			 $inside_mime = explode('/',$_FILES['inside_photo']['type'][$i]);
			 $inside_mimeType = $mime[0];
			 $inside_mimeExt = $mime[1];
			 $inside_tmpLoc[] = $_FILES['inside_photo']['tmp_name'][$i];
			 $inside_fileSize = $_FILES['inside_photo']['size'][$i];
			 $inside_uploadName = md5(microtime().$i).'.'.$fileExt;
			 $inside_uploadPath[] = BASEURL.'images/inside/'.$inside_uploadName;
			 if ($i !=0) {
				 $inside_dbpath .= ',';
			 }
			 $inside_dbpath .= '/images/inside/'.$inside_uploadName;
			 if ($inside_fileSize > 4194304){
				 $errors[] = '内部图片太大,只能上传每张图片4MB以下.';
			 }
			 if($inside_fileExt != $inside_mimeExt && ($inside_mimeExt == 'jpeg' && $inside_fileExt != 'jpg')){
				 $errors[] = '内部图片档案后续不符，请联络管理员.';
			 }
	 }
	}
	if(!empty($errors)){
	 echo display_errors($errors);
	 echo "The type of images that you send Must be .jpg .gif .png";
	}
	else {
	 //upload file
	 if ($inside_photoCount > 0) {
		 for ($i=0; $i < $inside_photoCount; $i++) {
			 move_uploaded_file($inside_tmpLoc[$i],$inside_uploadPath[$i]);
		 }
	 }
	 // insert into database
	 $insertSql = "UPDATE products SET house_num='$house_num', type='$type', title='$title', price='$price', rooms_detail='$rooms_detail', categories='$categories', img_inside='$inside_dbpath',address='$address', sizes='$sizes', description='$description' where id='$id'";
	$res = mysql_query($insertSql) or die (mysql_error());
	 if ($res)
	 {
		 header('location:../products.php?message=update&num='.$house_num);
	 }
	}

}
		// echo "phot 2 is empty";
elseif (empty($_FILES['inside_photo']['name'][0])) {
	$photoCount = count($_FILES['photo']['name']);
	// File check field
	if($photoCount  > 0) {
	 for ($i=0; $i < $photoCount; $i++) {
		 //   //for show the data of the image that was uploaded --delevelop mode
			 $name = $_FILES['photo']['name'][$i];
			 $nameArray = explode('.',$name);
			 $fileName = $nameArray[0];
			 $fileExt = $nameArray[1];
			 $mime = explode('/',$_FILES['photo']['type'][$i]);
			 $mimeType = $mime[0];
			 $mimeExt = $mime[1];
			 $tmpLoc[] = $_FILES['photo']['tmp_name'][$i];
			 $fileSize = $_FILES['photo']['size'][$i];
			 $uploadName = md5(microtime().$i).'.'.$fileExt;
			 $uploadPath[] = BASEURL.'images/products/'.$uploadName;
			 if ($i !=0) {
				 $dbpath .= ',';
			 }
			 $dbpath .= '/images/products/'.$uploadName;
			 if ($fileSize > 4194304){
				 $errors[] = '档案太大,只能上传每张图片4MB以下.';
			 }
			 if($fileExt != $mimeExt && ($mimeExt == 'jpeg' && $fileExt != 'jpg')){
				 $errors[] = '档案后续不符，请联络管理员.';
			 }
	 }
 }
	if(!empty($errors)){
	 echo display_errors($errors);
	 echo "The type of images that you send Must be .jpg .gif .png";
	}
	else {
	 //upload file
	 if ($photoCount > 0) {
		 for ($i=0; $i < $photoCount; $i++) {
			 move_uploaded_file($tmpLoc[$i],$uploadPath[$i]);
		 }
	 }
	 // insert into database
	 $insertSql = "UPDATE products SET house_num='$house_num', type='$type', title='$title', price='$price', rooms_detail='$rooms_detail', categories='$categories', image='$dbpath',address='$address', sizes='$sizes', description='$description' where id='$id'";
	$res = mysql_query($insertSql) or die (mysql_error());
	 if ($res){
		 header('location:../products.php?message=update&num='.$house_num);
	 }
	}
}
else {
		$photoCount = count($_FILES['photo']['name']);
		$inside_photoCount = count($_FILES['inside_photo']['name']);
		// File check field
		if($photoCount  > 0) {
		 for ($i=0; $i < $photoCount; $i++) {
			 //   //for show the data of the image that was uploaded --delevelop mode
				 $name = $_FILES['photo']['name'][$i];
				 $nameArray = explode('.',$name);
				 $fileName = $nameArray[0];
				 $fileExt = $nameArray[1];
				 $mime = explode('/',$_FILES['photo']['type'][$i]);
				 $mimeType = $mime[0];
				 $mimeExt = $mime[1];
				 $tmpLoc[] = $_FILES['photo']['tmp_name'][$i];
				 $fileSize = $_FILES['photo']['size'][$i];
				 $uploadName = md5(microtime().$i).'.'.$fileExt;
				 $uploadPath[] = BASEURL.'images/products/'.$uploadName;
				 if ($i !=0) {
					 $dbpath .= ',';
				 }
				 $dbpath .= '/images/products/'.$uploadName;
				 if ($fileSize > 4194304){
					 $errors[] = '档案太大,只能上传每张图片4MB以下.';
				 }
				 if($fileExt != $mimeExt && ($mimeExt == 'jpeg' && $fileExt != 'jpg')){
					 $errors[] = '档案后续不符，请联络管理员.';
				 }
		 }
		}
		// File check field
		if($inside_photoCount  > 0) {
		 for ($i=0; $i < $inside_photoCount; $i++) {
				 $inside_name = $_FILES['inside_photo']['name'][$i];
				 $inside_nameArray = explode('.',$name);
				 $inside_fileName = $nameArray[0];
				 $inside_fileExt = $nameArray[1];
				 $inside_mime = explode('/',$_FILES['inside_photo']['type'][$i]);
				 $inside_mimeType = $mime[0];
				 $inside_mimeExt = $mime[1];
				 $inside_tmpLoc[] = $_FILES['inside_photo']['tmp_name'][$i];
				 $inside_fileSize = $_FILES['inside_photo']['size'][$i];
				 $inside_uploadName = md5(microtime().$i).'.'.$fileExt;
				 $inside_uploadPath[] = BASEURL.'images/inside/'.$inside_uploadName;
				 if ($i !=0) {
					 $inside_dbpath .= ',';
				 }
				 $inside_dbpath .= '/images/inside/'.$inside_uploadName;
				 if ($inside_fileSize > 4194304){
					 $errors[] = '内部图片太大,只能上传每张图片4MB以下.';
				 }
				 if($inside_fileExt != $inside_mimeExt && ($inside_mimeExt == 'jpeg' && $inside_fileExt != 'jpg')){
					 $errors[] = '内部图片档案后续不符，请联络管理员.';
				 }
		 }
		}
		if(!empty($errors)){
		 echo display_errors($errors);
		 echo "The type of images that you send Must be .jpg .gif .png";
		}
		else {
		 //upload file
		 if ($photoCount > 0) {
			 for ($i=0; $i < $photoCount; $i++) {
				 move_uploaded_file($tmpLoc[$i],$uploadPath[$i]);
			 }
		 }
		 if ($inside_photoCount > 0) {
			 for ($i=0; $i < $inside_photoCount; $i++) {
				 move_uploaded_file($inside_tmpLoc[$i],$inside_uploadPath[$i]);
			 }
		 }
		 // insert into database
		 $insertSql = "UPDATE products SET house_num='$house_num', type='$type', title='$title', price='$price', rooms_detail='$rooms_detail', categories='$categories', image='$dbpath',img_inside='$inside_dbpath',address='$address', sizes='$sizes', description='$description' where id='$id'";
		$res = mysql_query($insertSql) or die (mysql_error());
		 if ($res){
			 header('location:../products.php?message=update&num='.$house_num);
		 }
		}
	// echo "photo 1 and phot 2 not is empty";
}
?>
