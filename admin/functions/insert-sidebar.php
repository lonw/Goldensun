<?php
//panggil file config.php untuk menghubung ke server
include('../../inc/config.php');

$target_dir = "../uploads/";
$name = $_POST['name'];
$link = $_POST['link'];
$lang = $_POST['lang'];
$target_file = $target_dir . basename($_FILES["attachment"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (!empty($name)) {

  if((!empty($target_file))||(!empty($link))){
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["attachment"]["tmp_name"]);
        if($check !== false) {
            echo "File is a file - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 1;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["attachment"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "pdf" && $imageFileType != "exe" && $imageFileType != "zip" && $imageFileType != "doc" && $imageFileType != "docx" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $sql="INSERT INTO sidebar (`name`, `link`, `lang`) VALUES ('$name','$link','$lang')";
      $res = mysql_query($sql) or die (mysql_error());
        echo "The file ". basename( $_FILES["attachment"]["name"]). " has been uploaded.";
        header('location:../sidebar.php?message=success');
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
          $sql="INSERT INTO sidebar (`name`, `link`, `attachment`, `lang`) VALUES ('$name','$link','$target_file','$lang')";
          $res = mysql_query($sql) or die (mysql_error());
            echo "The file ". basename( $_FILES["attachment"]["name"]). " has been uploaded.";
            header('location:../sidebar.php?message=success');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

    }
  }
  else {
    header('location:../sidebar.php?message=error');
  }
}
else {
  header('location:../add-sidebar.php?message=error');
}
?>
