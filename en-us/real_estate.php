<?php
	//Set values for page
	$page_title = $_GET['title'];
	$current_page = "real_estate";

	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');
	$query = mysql_query("SELECT * FROM products WHERE type = '$page_title'");
	$data = mysql_fetch_array($query);
?>

	<!--Breadcrumb-->
	<section id="breadcrumb" class="space">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 breadcrumb-block">
					<h2><?php echo $data['address'];?></h2>
				</div>
				<div class="col-sm-6 breadcrumb-block text-right">
					<ol class="breadcrumb">
						<li><span>You are here:</span><a href="home.php">Home </a></li>
						<li class="active"><?php echo $data['address'];?></li>
						<!-- <?=var_dump($page_title)?> -->
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
							                <h3><?php echo $data['address'];?></h3>
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
							        <div id="carousel-example" class="carousel slide" data-ride="carousel" data-interval="false">
							            <!-- Wrapper for slides -->
							            <div class="carousel-inner">
							                <div class="item active">
							                    <div class="row">
																		<?php
																		$query = mysql_query("SELECT * FROM products WHERE type = '$page_title' AND available = 1 LIMIT 0,5");
																		while ($data = mysql_fetch_array($query)) : ?>
							                        <div class="col-xs-6 col-sm-6 col-md-4">
							                            <div class="col-item">
							                                <div class="photo">
																								<?php $images=explode(",",$data['image']); ?>
							                                    <img src="..<?php echo $images[0]; ?>" class="img-responsive" alt="" />
							                                </div>
							                                <div class="info">
							                                    <div class="row">
							                                        <div class="price col-md-12">
							                                            <h5><?php echo $data['title']; ?></h5>
							                                            <h5 class=""><?php echo asDollars($data['price']); ?> USD</h5>
							                                        </div>
							                                    </div>
							                                    <div class="separator clear-left">
							                                        <p class="btn-details">
							                                            <i class="fa fa-list"></i><a href="real_estate_detail.php?id=<?php echo $data['id']; ?>" class="hidden-sm">Read more</a></p>
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
																		$query = mysql_query("SELECT * FROM products WHERE type = '$page_title' AND available = 1 LIMIT 5,9");
																		while ($data = mysql_fetch_array($query)) : ?>
							                        <div class="col-xs-6 col-sm-6 col-md-4">
							                            <div class="col-item">
							                                <div class="photo">
																								<?php $images=explode(",",$data['image']); ?>
							                                    <img src="..<?php echo $images[0]; ?>" class="img-responsive" alt="" />
							                                </div>
							                                <div class="info">
							                                    <div class="row">
							                                        <div class="price col-md-12">
							                                            <h5><?php echo $data['title']; ?></h5>
							                                            <h5 class=""><?php echo asDollars($data['price']); ?> USD</h5>
							                                        </div>
							                                    </div>
							                                    <div class="separator clear-left">
							                                        <p class="btn-details">
							                                            <i class="fa fa-list"></i><a href="real_estate_detail.php?id=<?php echo $data['id']; ?>" class="hidden-sm">Read more</a></p>
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
