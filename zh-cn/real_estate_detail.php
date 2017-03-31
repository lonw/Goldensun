<?php
	//Set values for page
	$page_title = "地产金融";
	$current_page = "real_estate";
	$id = $_GET['id'];
	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');
	$query = mysql_query("SELECT * FROM products where id =$id");
	$data = mysql_fetch_array($query);
?>

	<!--Breadcrumb-->
	<section id="breadcrumb" class="space">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 breadcrumb-block">
					<h2><?php echo $page_title; ?></h2>
				</div>
				<div class="col-sm-6 breadcrumb-block text-right">
					<ol class="breadcrumb">
						<li><span>网站位置:</span><a href="home.php">首 页</a></li>
						<li class="active"><?php echo $page_title; ?></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<!--Portfolio-->
	<section id="portfolio" class="space">

				<div class="container">
					<div class="row">


					<div class="col-lg-12">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="Xcontent14"><H2><?php echo $data['title']; ?></H2></div><hr>
						</div>
							<div  class="col-lg-6 col-md-6 col-sm-12">
								<ul>
									<?php $images=explode(",",$data['image']); ?>
									<div class="Xcontent06 col-md-12 col-sm-12"><img class="img-responsive" style="max-height:350px;" src="..<?php echo $images[0];?>"></div>
									<ol id="ul_top_hypers" class="Xcontent08 col-md-12 col-sm-12">
										<?php $img ="";
										foreach ($images as $image) {
											$image = trim($image);
											// $img .='<div class="Xcontent07"><img class="img-responsive" src="'.$image.'"></div>';
											echo '<div class="Xcontent07"><img class="img-responsive" src="..'.$image.'"></div>';
										}
										 ?>
									</ol>
									</ul>
								</div>
									<div class="col-lg-6 col-md-6 col-sm-12">

									<div id="house_detail">

										<div class="Xcontent15"><?php if ($data['available']==1) {
											echo '<img src="../images/X11.png">';
										} else {
											echo '<img src="../images/X12.png">';
										}?></div>
										<div class="Xcontent16"><p><?php echo $data['description']; ?></p></div>
										<div class="Xcontent26">
										<p class="Xcontent27">内部结构图:</p><?php $img_inside=explode(",",$data['img_inside']); ?>
										<?php foreach ($img_inside as $image) {
											$image = trim($image);
											// $img .='<div class="Xcontent07"><img class="img-responsive" src="'.$image.'"></div>';
											echo '<div class="Xcontent29"><img class="img-responsive" src="..'.$image.'"></div>';
										} ?>
										</div>
										<div class="Xcontent17">
											<p class="Xcontent18">售价:</p>
											<p class="Xcontent19"><span><?php echo asDollars($data['price']); ?></span> 美元 <small>起</small></p>
											<div class="Xcontent20">
												<p class="Xcontent21">户型:</p>
												<p class="Xcontent22"><?php echo $data['categories']; ?></p>
											</div>
											<div class="Xcontent30">
												<p class="Xcontent21">面积:</p>
												<div class="Xcontent22"><?php echo $data['sizes']; ?></div>

												<!-- <div class="Xcontent33"><img src="images/shangpinxiangqing/16.png"></div> -->
											</div>
											<div class="Xcontent30">
												<p class="Xcontent21">房间数:</p>
												<div class="Xcontent22"><?php echo $data['rooms_detail']; ?></div>

												<!-- <div class="Xcontent33"><img src="images/shangpinxiangqing/16.png"></div> -->
											</div>
											<div class="Xcontent30">
												<p class="Xcontent21">别墅号码:</p>
												<div class="Xcontent22"><?php echo $data['house_num']; ?></div>

												<!-- <div class="Xcontent33"><img src="images/shangpinxiangqing/16.png"></div> -->
											</div>
											<div class="Xcontent23">
												<p class="Xcontent21">地区:</p>
												<p class="Xcontent22"><?php echo $data['address']; ?></p>
											</div>

										</div>

									</div>

							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<main>
									<input class="tab1" id="tab1" type="radio" name="tabs" checked>
									<label class="tab1"  id="tab1" for="tab1"><?php echo $data['tab_st']; ?></label>

									<input class="tab2"  id="tab2" type="radio" name="tabs">
									<label class="tab2"  id="tab2" for="tab2"><?php echo $data['tab_nd']; ?></label>

									<input class="tab3"  id="tab3" type="radio" name="tabs">
									<label class="tab3"  id="tab3" for="tab3"><?php echo $data['tab_rd']; ?></label>

									<input class="tab4"  id="tab4" type="radio" name="tabs">
									<label class="tab4"  id="tab4" for="tab4"><?php echo $data['tab_th']; ?></label>

									<section id="content1">
										<?php echo $data['tab_desc_st']; ?>
									</section>

									<section id="content2">
										<?php echo $data['tab_desc_nd']; ?>
									</section>

									<section id="content3">
									 <?php echo $data['tab_desc_rd']; ?>
									</section>

									<section id="content4">
									<?php echo $data['tab_desc_th']; ?>
									</section>

										</main>
						</div>
					</div>


				</div>
			</div>

	</section>
	<script>
		$(document).ready(function(){
	var $miaobian=$('.Xcontent08>div');
	var $huantu=$('.Xcontent06>img');
	var $miaobian1=$('.Xcontent26>div');
	$miaobian.mousemove(function(){miaobian(this);});
	$miaobian1.click(function(){miaobian1(this);});
	function miaobian(thisMb){
		for(var i=0; i<$miaobian.length; i++){
			$miaobian[i].style.borderColor = '#dedede';
		}
		thisMb.style.borderColor = '#cd2426';

		$huantu[0].src = thisMb.children[0].src;
	}
	function miaobian1(thisMb1){
		for(var i=0; i<$miaobian1.length; i++){
			$miaobian1[i].style.borderColor = '#dedede';
		}
	//		thisMb.style.borderColor = '#cd2426';
		$miaobian.css('border-color','#dedede');
		thisMb1.style.borderColor = '#cd2426';
		$huantu[0].src = thisMb1.children[0].src;
	}
			$(".Xcontent33").click(function(){
			var value=parseInt($('.input').val())+1;
			$('.input').val(value);
		})

		$(".Xcontent32").click(function(){
			var num = $(".input").val()
			if(num>0){
				$(".input").val(num-1);
			}

		})

		})
	</script>

<!-- Page's footer starts here -->
<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
