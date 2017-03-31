<?php
//panggil file config.php untuk menghubung ke server
include('../../inc/config.php');

//tempat menyimpan file
// $namafolder="../uploads/";
$house_num = $_POST['house_num'];
$type = $_POST['type'];
$title = $_POST['title'];
$price = $_POST['price'];
$rooms_detail = $_POST['rooms_detail'];
$categories = $_POST['categories'];
$address = $_POST['address'];
$sizes = $_POST['sizes'];
$description = $_POST['description'];
// $archive = $_POST['archive'];
// $img_products = $_FILES['nama_file']['type'];


$dbpath = '';

if (!empty($title)&&!empty($house_num)) {
//tangkap data dari form
if (!empty($_FILES["photo"]["name"]))
{

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
	 $insertSql = "INSERT INTO products (`house_num`, `type`, `title`, `price`, `rooms_detail`, `categories`, `image`, `address`, `sizes`, `description`)
	 VALUES ('$house_num','$type','$title','$price','$rooms_detail','$categories','$dbpath','$address','$sizes','$description')";
	$res = mysql_query($insertSql) or die (mysql_error());
	 if ($res)
	 {
		 header('location:../products.php?message=success&num='.$house_num);
	 }
	}
}
else {
	$sql = "INSERT INTO products (`house_num`, `type`, `title`, `price`, `rooms_detail`, `categories`, `address`, `sizes`, `description`) VALUES ('$house_num','$type','$title','$price','$rooms_detail','$categories','$address','$sizes','$description')";
	$res = mysql_query($sql) or die (mysql_error());
if ($res)
{
header('location:../products.php?message=success&num='.$house_num);
}
}
}
else {
  header('location:../add-products.php?message=error');
}
?>
