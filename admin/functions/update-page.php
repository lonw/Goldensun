<?php
//panggil file config.php untuk menghubung ke server
include('../../inc/config.php');

//tempat menyimpan file
// $namafolder="../uploads/";
$id = $_POST['id'];
$lang = $_POST['lang'];
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];
// $archive = $_POST['archive'];
// $img_products = $_FILES['nama_file']['type'];
$dbpath = '';
$inside_dbpath = '';
if (!empty($_FILES["photo"]["name"]))
{

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
			 // if($mimeType != 'image'){
			 //   $errors[] = 'The file must be an image.';
			 // }
			 // if (!in_array($fileExt, $allowed)) {
			 //   $errors[] = 'The file extension must be a png, jpg, jpeg, or gif.';
			 // }
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
	 $insertSql = "UPDATE page SET  title='$title', lang='$lang', category='$category', img='$dbpath', content='$content' where id='$id'";
	$res = mysql_query($insertSql) or die (mysql_error());
	 if ($res)
	 {
		 header('location:../page.php?message=success&title='.$title);
	 }
	}
}
else
{
	$query = mysql_query("UPDATE page SET  title='$title', lang='$lang', category='$category', content='$content' where id='$id'") or die(mysql_error());

		if ($query)
	{

		header('location:../page.php?message=update&title='.$title);

	}
}
?>
