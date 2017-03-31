<?php
	//Set values for page
	$page_title = "Contact";
	$current_page = "contact";

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
                        <h2><?php echo $page_title; ?></h2>
                    </div>
                    <div class="col-sm-6 breadcrumb-block text-right">
                        <ol class="breadcrumb">
                            <li><span>You are here:</span><a href="home.php">Home</a></li>
                            <li class="active"><?php echo $page_title; ?></li>
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
                            <h3>Contact us</h3>
                        </div>
                        <ul class="address">
                            <li><i class="fa fa-map-marker"></i>7270 Woodbine Ave, Suite 203, Markham</li>
                            <li><a href="tel:+0883462543"><i class="fa fa-phone"></i>+1 905-604-5622</a> </li>
                            <li><a href="mailto:info@goldensunca.com "><i class="fa fa-envelope"></i>info@goldensunca.com</a> </li>
                            <li><i class="fa fa-fax"></i>+1 905-604-5922</li>
                            <li><i class="fa fa-clock-o"></i>Mon - Fri: 10:00 - 18:00</li>
                        </ul>
                        <ul class="sppb-person-social">
                            <li><a target="_parent" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_parent" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_parent" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a target="_parent" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_parent" href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8 contact-block">
                        <div class="col-sm-12 main-heading">
                            <h3>Contact us</h3>
                        </div>
                        <form id="contact-form">
                            <div class="form-group col-sm-6 padding-right">
                                <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                                <input type="email" class="form-control" name="mail" id="mail" required placeholder="Email">
                            </div>
                            <div class="form-group col-sm-12 no-padding">
                                <input type="text" class="form-control" name="website" id="website" placeholder="Subject">
                            </div>
                            <div class="form-group col-sm-12 no-padding">
                                <textarea class="form-control" name="comment" id="comment" placeholder="Message"></textarea>
                            </div>
                            <div class="col-sm-12 button no-padding">
                                <input type="submit" id="submit_contact" class="sppb-btn sppb-btn-default" value="Send Message">
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
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
