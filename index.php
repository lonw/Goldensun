<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php echo $page_title; ?> - 金太阳金融集团 | Golden Sun Capital Inc.</title>
    <meta name="keywords" content="加拿大,多伦多,金太阳,金融集团,Golden Sun Capital Inc,房屋贷款,商业贷款,私人贷款,租赁贷款,债务重组,投资理财,委托理财,创业投资">
    <meta name="description" content="多伦多金融公司，金太阳金融集团 Golden Sun Capital Inc. 加拿大多伦多最最值得信赖的金融机构。华人理财，选择金太阳金融，让您的财富稳健增值，一起开始财富人生">
    <meta name="author" content="金太阳金融集团">

</head>

<body>
<?php
    $lang = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    //to Get a Broswer Preferred language, and using the comma , separate the string as arrary "$lang"

if (preg_grep("/^zh.*/", $lang)) {
  //the $lang arrary, contained the zh keyword "中文" (/^zh.*/) , will redirect to the zh-cn/home.php page
  header("location: zh-cn/home.php");
  exit();
}
else {
  header("location: en-us/home.php");
  exit();
}


?>

</body>
</html>
