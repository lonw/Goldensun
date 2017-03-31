<?php
  require_once '../inc/config.php';
	//Set values for page
	$title = ((isset($_GET['title']) && $_GET['title'] != '')?sanitize($_GET['title']):'');
	$current_page = ((isset($_GET['category']) && $_GET['category'] != '')?sanitize($_GET['category']):'');
	#title
	$query = mysql_query("SELECT * FROM page WHERE target = '$title' AND lang = 0");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM page WHERE id = '$id'");
	}
	$data = mysql_fetch_array($query);
	$page_title =  $data['title'];
	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');
	include_once('./includes/submenu.php');

	if(!empty($data['js'])){
			echo $data['js'];
	}
?>
<!-- content start -->
<section class="space" id="portfolio">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
<!-- content from database -->
<?php echo $data['content']; ?>
<!-- content from database -->
</div>
</div>
</div>
</section>
<!-- content end -->
<!-- Page's footer starts here -->
<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
