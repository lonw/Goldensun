<?php
	//Set values for page
	$page_title = "贷款服务";
	$current_page = "Loan";

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
                            <li><span>网站位置:</span><a href="home.php">首 页</a></li>
                            <li class="active"><?php echo $page_title; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--Services-->
        <section id="services" class="space">
            <div class="container">
                <div class="row">
									<p>
						&nbsp;</p>

				<h2 style="margin-top: 0px; padding: 5px 15px; margin-bottom: 10px; color: rgb(5, 70, 0); font-family: 'Microsoft YaHei'; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><center>您可以选择以下任何一种申请方式：</center></h2>
				<div class="col-sm-6">
					<p style="margin-top: 0px; padding: 5px 15px; margin-bottom: 10px; color: rgb(0, 0, 0); line-height: 25px; font-family: 'Microsoft YaHei'; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
							<h4 class="new-customtext">申请方式 :</h4><br>
							<ul style="padding: 0px 15px 15px 40px; margin: 0px;list-style:decimal;">
								<li>点击菜单<a href="apply.php">“申请贷款”</a>链接  </li>
								<li>下载贷款申请表：&nbsp;
								<img alt="pdf" height="20" src="/images/pdf-icon.jpg" width="20" /><span class="Apple-converted-space">&nbsp;</span><a href="download/Application.pdf" style="text-decoration: none; color: rgb(102, 102, 102);" target="_blank">Application Form</a><span class="Apple-converted-space">&nbsp;</span></li>
								<li>申请贷款电话 ：647-860-9577 或 905-604-5622</li>
							</ul>
					</p>
				</div>
				<div class="col-sm-6"><br><br><br>
					<ul style="padding: 0px 15px 15px 40px; margin: 0px; list-style:decimal;">
								<li value="4">填写贷款申请表，保存之后，email发送至 info@goldensunca.com</li>
								<li>填写贷款申请表，保存并打印；或打印贷款申请表，手工填写，传真或使用电子邮件给我们。传真：+1 905-604-5922 </li>
						</ul>
						<p>&nbsp;</p>
						</div>
						<div class="col-sm-12">
							<h2 style="margin-top: 0px; padding: 5px 15px; margin-bottom: 10px; color: rgb(5, 70, 0); font-family:
							 'Microsoft YaHei'; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing:
							 normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;
								-webkit-text-stroke-width: 0px;">
								<center>相关服务：</center></h2><br>
										<div class="service-block col-sm-3 col-xs-6">
												<img class="sppb-img-responsive" src="/images/services/1.jpg" alt="service">
												<a href="#" target="_parent">
														<h3 class="title">房屋贷款</h3>
												</a>
												<p></p>
												<a target="_parent" href="mortgages.php" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
										</div>
										<div class="service-block col-sm-3 col-xs-6">
												<img class="sppb-img-responsive" src="/images/services/2.jpg" alt="service">
												<a href="#" target="_parent">
														<h3 class="title">商业贷款</h3>
												</a>
												<p></p>
												<a target="_parent" href="business-loan.php" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
										</div>
										<div class="service-block col-sm-3 col-xs-6">
												<img class="sppb-img-responsive" src="/images/services/3.jpg" alt="service">
												<a href="#" target="_parent">
														<h3 class="title">私人贷款</h3>
												</a>
												<p></p>
												<a target="_parent" href="personal-loan.php" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
										</div>
										<div class="service-block col-sm-3 col-xs-6">
												<img class="sppb-img-responsive" src="/images/services/4.jpg" alt="service">
												<a href="#" target="_parent">
														<h3 class="title">租赁贷款</h3>
												</a>
												<p></p>
												<a target="_parent" href="lease.php" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
										</div>
										<div class="service-block col-sm-3 col-xs-6">
												<img class="sppb-img-responsive" src="/images/services/5.jpg" alt="service">
												<a href="#" target="_parent">
														<h3 class="title">债务重组</h3>
												</a>
												<p></p>
												<a target="_parent" href="debt-consolidation.php" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
										</div>
										<div class="service-block col-sm-3 col-xs-6">
												<img class="sppb-img-responsive" src="/images/services/6.jpg" alt="service">
												<a href="#" target="_parent">
														<h3 class="title">投资理财</h3>
												</a>
												<p></p>
												<a target="_parent" href="investments.php" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
										</div>
										<div class="service-block col-sm-3 col-xs-6">
												<img class="sppb-img-responsive" src="/images/services/7.jpg" alt="service">
												<a href="#" target="_parent">
														<h3 class="title">委托理财</h3>
												</a>
												<p></p>
												<a target="_parent" href="trust.php" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
										</div>
										<div class="service-block col-sm-3 col-xs-6">
												<img class="sppb-img-responsive" src="/images/services/8.jpg" alt="service">
												<a href="#" target="_parent">
														<h3 class="title">创业投资</h3>
												</a>
												<p></p>
												<a target="_parent" href="venture-capital.php" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
										</div>
										</div>

                </div>
            </div>
        </section>

<!-- Page's footer starts here -->
<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
