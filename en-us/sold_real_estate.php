<?php
	//Set values for page
	$page_title = $_GET['title'];
	$current_page = "real_estate";

	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');

?>

	<!--Breadcrumb-->
	<section id="breadcrumb" class="space">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 breadcrumb-block">
					<h2>所有已售房源</h2>
				</div>
				<div class="col-sm-6 breadcrumb-block text-right">
					<ol class="breadcrumb">
						<li><span>网站位置:</span><a href="home.php">首 页 </a></li>
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
						<div class="col-md-3 col-sm-3">
							<div class="container">
								<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
													<div id="imaginary_container">
															<div class="input-group stylish-input-group">
																	<input type="text" class="form-control"  placeholder="Search" >
																	<span class="input-group-addon">
																			<button type="submit">
																					<span class="glyphicon glyphicon-search"></span>
																			</button>
																	</span>
															</div>
													</div>
											</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="container">
							    <div class="row">
							        <div class="row">
							            <div class="col-md-9">
							                <h3><?php echo $page_title;?></h3>
							            </div>
							            <div class="col-md-3">
							                <!-- Controls -->
							                <div class="controls pull-right">
							                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
							                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
							                            data-slide="next"></a>
							                </div>
							            </div>
							        </div>
							        <div id="carousel-example" class="carousel slide">
							            <!-- Wrapper for slides -->
							            <div class="carousel-inner">
							                <div class="item active">
							                    <div class="row">
																		<?php
																		$query = mysql_query("SELECT * FROM products  WHERE available = 0 ORDER BY id DESC LIMIT 0,6");
																		while ($data = mysql_fetch_array($query)) : ?>
							                        <div class="col-xs-12 col-sm-6 col-md-4">
							                            <div class="col-item">
							                                <div class="photo">
																								<?php $images=explode(",",$data['image']); ?>
							                                    <img src="..<?php echo $images[0]; ?>" class="img-responsive" alt="" />
							                                </div>
							                                <div class="info">
							                                    <div class="row">
							                                        <div class="price col-md-12">
							                                            <h5><?php echo $data['title']; ?></h5>
																													<div class="opp">
							                                            <h3 class="text-danger"><b><?php echo asDollars($data['price']); ?> <small class="text-danger">美元 (成交)
																													<br><?php echo $data['sizes'];echo '|'.$data['rooms_detail'];  ?></small>
																														</b></h3>
																													<small><i class="fa fa-map-marker" style="color:#ff0311;"></i>&nbsp;<?php echo $data['type']; ?><br>
																														<i class="fa fa-calendar" style="color:#ff0311;"></i>&nbsp;于 <?php $datatime = explode(" ",$data['release_date']); echo $datatime[0]; ?>发布</small> &nbsp;

																													</div>
																													<?php if ($data['available']==1) {
																														echo '<img src="../images/X11.png">';
																													} else {
																														echo '<img src="../images/X12.png">';
																													}?>
							                                        </div>

							                                    </div>
							                                    <div class="separator clear-left">
							                                        <p class="btn-details">
							                                            <i class="fa fa-list"></i><a href="real_estate_detail.php?id=<?php echo $data['id']; ?>" class="hidden-sm">了解更多</a></p>
							                                    </div>
							                                    <div class="clearfix">
							                                    </div>
							                                </div>
							                            </div>
							                        </div>
																		<?php endwhile;?>


							                    </div>
							                </div>
							                <div class="item">
							                    <div class="row">
																		<?php
																		$query = mysql_query("SELECT * FROM products  WHERE available = 0 ORDER BY id DESC LIMIT 6,9");
																		while ($data = mysql_fetch_array($query)) : ?>
							                        <div class="col-xs-12 col-sm-6 col-md-4">
							                            <div class="col-item">
							                                <div class="photo">
																								<?php $images=explode(",",$data['image']); ?>
							                                    <img src="..<?php echo $images[0]; ?>" class="img-responsive" alt="" />
							                                </div>
							                                <div class="info">
							                                    <div class="row">
							                                        <div class="price col-md-12">
							                                            <h5><?php echo $data['title']; ?></h5>
																													<div class="opp">
							                                            <h3 class="text-danger"><b><?php echo asDollars($data['price']); ?> <small class="text-danger">美元 (成交)
																													<br><?php echo $data['sizes'];echo '|'.$data['rooms_detail']; ?></small>
																														</b></h3>
																													<small><i class="fa fa-map-marker" style="color:#ff0311;"></i>&nbsp;<?php echo $data['type']; ?><br>
																														<i class="fa fa-calendar" style="color:#ff0311;"></i>&nbsp;于 <?php $datatime = explode(" ",$data['release_date']); echo $datatime[0]; ?>发布</small> &nbsp;

																													</div>
																													<?php if ($data['available']==1) {
																														echo '<img src="../images/X11.png">';
																													} else {
																														echo '<img src="../images/X12.png">';
																													}?>
							                                        </div>
							                                    </div>
							                                    <div class="separator clear-left">
							                                        <p class="btn-details">
							                                            <i class="fa fa-list"></i><a href="real_estate_detail.php?id=<?php echo $data['id']; ?>" class="hidden-sm">了解更多</a></p>
							                                    </div>
							                                    <div class="clearfix">
							                                    </div>
							                                </div>
							                            </div>
							                        </div>
																		<?php endwhile;?>


							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>

							</div>


					</div>
				</div>
			</div>

	</section>


<!-- Page's footer starts here -->
<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
