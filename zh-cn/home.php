<?php
	//Set values for page
	$page_title = "首 页";
	$current_page = "home";
	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');
	//Banner start
	include_once('./includes/banner.php');
?>


        <!--Action-->
        <section class="action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 action-block pull-left">
                        <h2 class="title">阳光快道，加速财富积累实现双赢 </h3>
                    </div>
                    <div class="col-sm-3 action-block text-right">
                        <a target="_blank" href="https://www5.fsco.gov.on.ca/mbsweblist/ShowLicence.aspx?M11002760~" class="sppb-btn sppb-btn-default sppb-btn- sppb-btn-sm">资格认证</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Services-->
        <section id="services" class="space">
            <div class="container">
                <div class="row">
                    <div class="service-block col-sm-4 hidden-xs">
                        <img class="sppb-img-responsive" src="/images/wood-floring.jpg" alt="service">
                        <a href="page.php?title=Residential Mortgage&category=Loan" target="_parent">
                            <h3 class="title">房屋贷款</h3>
                        </a>
                        <p>房屋贷款，也被称为房屋抵押贷款，是由购房者向贷款银行填报房屋抵押贷款的申请表，
													并提供合法文件、收入证明、房屋买卖合同，贷款银行经过审核合格，向购房者承诺贷款。
													银行在合同规定的期限内把所贷出的资金直接划入售房单位在银行的账户上。</p>
                        <a target="_parent" href="page.php?title=Residential Mortgage&category=Loan" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
                    </div>
                    <div class="service-block col-sm-4  hidden-xs">
                        <img class="sppb-img-responsive" src="/images/22-360x240.jpg" alt="service">
                        <a href="page.php?title=Commercial Mortgage&category=Loan" target="_parent">
                            <h3 class="title">商业贷款</h3>
                        </a>
                        <p>商业贷款是用于补充工业和商业企业的流动资金的贷款，一般为短期贷款，通常为9个月，最多不超过一年，
													但也有少量中长期贷款。这类贷款是商业银行贷款的主要组成部分，一般占贷款总额的三分之一以上，执行法定贷款利率。</p>
                        <a target="_parent" href="page.php?title=Commercial Mortgage&category=Loan" class="simple">了解更多<i class="fa fa-long-arrow-right"></i> </a>
                    </div>
                    <div class="service-block col-sm-4">
                        <div class="service-list">
                            <div class="pull-left">
                                <img class="img-responsive" src="/images/service3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="title">
                                    <a href="page.php?title=Private Loan&category=Loan" target="_parent">私人贷款</a>
                                </h4>
                                <p>私人之间借贷属于民间借贷的一种。首先，民间借贷是合法的；其次民间借贷必须以相关法律、法规为依据。</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="pull-left">
                                <img class="img-responsive" src="/images/construction-laws_small.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="title">
                                    <a href="page.php?title=Commercial Leasing&category=Loan" target="_parent">租赁贷款</a>
                                </h4>
                                <p>融资租赁公司将钱打给银行，银行再以贷款形式向客户一次或多次放款，客户向融资租赁公司还租金。</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="pull-left">
                                <img class="img-responsive" src="/images/construction_small.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="title">
                                    <a href="page.php?title=Debt Consolidation Loans&category=Financial" target="_parent">债务重组</a>
                                </h4>
                                <p>债务重组又称债务重整，是指债权人在债务人发生财务困难情况下，以资产清偿债务、债务转为资本均为债务重组。</p>
                            </div>
                        </div>
                        <div class="service-list">
                            <div class="pull-left">
                                <img class="img-responsive" src="/images/Engineers-working_small.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="title">
                                    <a href="page.php?title=Financial Investment&category=Financial" target="_parent">投资理财</a>
                                </h4>
                                <p>投资理财是指投资者合理安排资金，运用资产管理和分配达到保值增值的目的，从而加速资产的增长。</p>
                            </div>
                        </div>
                        <div class="button">
                            <a target="_parent" href="services.php" class="simple">全部相关<i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio-->
        <section id="portfolio" class="space bg-color">
            <div class="container">
                <!--Main Heading-->
                <div class="col-sm-12 no-padding main-heading text-center">
                    <h2>金太阳金融</h2>
                </div>
                <div class="row">
                    <div id="mod-sp-simpleportfolio" class="sp-simpleportfolio sp-simpleportfolio-view-items layout-gallery-space ">
                        <div class="sp-simpleportfolio-filter">
                            <ul>
                                <li class="active" data-group="all"><a href="#">整体</a></li>
                                <li data-group="renovation"><a href="#">接待处</a></li>
                                <li data-group="interior"><a href="#">会议室</a></li>
                                <li data-group="architechture"><a href="#">办公室</a></li>
                            </ul>
                        </div>
                        <div class="sp-simpleportfolio-items sp-simpleportfolio-columns-4">
                            <div class="sp-simpleportfolio-item" data-groups='["renovation","architechture"]'>
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="/images/portfolio-6-1140x760_600x400.jpg" alt="金太阳金融集团">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="/images/portfolio-6-1140x760_600x400.jpg" data-featherlight="image">查看</a>
                                                    <a class="btn-view" href="#">详细</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                    <a href="#">
                                                        欢迎光临                                   </a>
                                                </h3>
                                                <div class="sp-simpleportfolio-tags">
                                                    金太阳金融集团  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item" data-groups='["interior"]'>
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="/images/portfolio-7-1140x760_600x400.jpg" alt="金太阳金融集团">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="/images/portfolio-7-1140x760_600x400.jpg" data-featherlight="image">查看</a>
                                                    <a class="btn-view" href="#">详细</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                    <a href="#">
                                                        欢迎光临                                    </a>
                                                </h3>
                                                <div class="sp-simpleportfolio-tags">
                                                    金太阳金融集团 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item" data-groups='["renovation","interior"]'>
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="/images/shutterstock_12727267_600x400.jpg" alt="金太阳金融集团">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="/images/shutterstock_12727267_600x400.jpg" data-featherlight="image">查看</a>
                                                    <a class="btn-view" href="#">详细</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                    <a href="#">
                                                        欢迎光临                                  </a>
                                                </h3>
                                                <div class="sp-simpleportfolio-tags">
                                                    金太阳金融集团 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item" data-groups='["renovation"]'>
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="/images/shutterstock_20049397_600x400.jpg" alt="金太阳金融集团">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="/images/shutterstock_20049397_600x400.jpg" data-featherlight="image">查看</a>
                                                    <a class="btn-view" href="#">详细</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                    <a href="#">
                                                        欢迎光临                                    </a>
                                                </h3>
                                                <div class="sp-simpleportfolio-tags">
                                                    金太阳金融集团 </div>
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
        <!--about-->
        <section id="about" class="space">
            <div class="container">
                <div class="row">
                    <div class="about-block col-sm-5">
                        <img class="sppb-img-responsive" src="/images/who-we-are.jpg" alt="">
                        <center><h2 class="title">我们承诺</h2></center>
                        <p>无论您是新移民，留学生，难民，还是自顾人士，房产投资者，或信用欠佳者，首付款不足者，还是您需要申请土地贷款，建筑贷款，
												工业投资，创业投资等等，金太阳金融全部可以为您量身定制适合您的贷款方案。金太阳金融迅速，高效地协助您解决问题。公司拥有多个注册财务策划师，
												注册会计师，致力为您提供专业理财产品，保险产品及税务策划，各类政府福利申请服务。</p>
                    </div>
                    <div class="about-block col-sm-7">
                        <div class="heading">
                            <center><h2 class="title">金太阳金融业务</h2></center>
                            <p>金太阳金融是从事金融贷款，委托理财，投资理财的专业金融公司，拥有资深从业人员，并与25家银行和40家金融机构强强联手合作，
															我们致力为各类客户提供最有价值的金融服务，以客户的融资需求为先，为客户提供最佳的金融方案。</p>
                        </div>
                        <div class="about-item">
                            <div class="col-xs-6 no-padding">
                                <div class="about-list">
                                    <div class="pull-left">
                                        <div class="sppb-icon">
                                            <span class="icon-home"></span>
                                        </div>
                                    </div>
                                    <div class="sppb-media-body">
                                        <h4 class="title">房屋贷款</h4>
                                        <p>利率低、审批快</p>
                                    </div>
                                </div>
                                <div class="about-list">
                                    <div class="pull-left">
                                        <div class="sppb-icon">
                                            <span class="icon-briefcase"></span>
                                        </div>
                                    </div>
                                    <div class="sppb-media-body">
                                        <h4 class="title">商业贷款</h4>
                                        <p>利率低、审批快</p>
                                    </div>
                                </div>
                                <div class="about-list">
                                    <div class="pull-left">
                                        <div class="sppb-icon">
                                            <span class="icon-user"></span>
                                        </div>
                                    </div>
                                    <div class="sppb-media-body">
                                        <h4 class="title">私人贷款</h4>
                                        <p>利率低、审批快</p>
                                    </div>
                                </div>
																<div class="about-list">
																		<div class="pull-left">
																				<div class="sppb-icon">
																						<span class="icon-book-open"></span>
																				</div>
																		</div>
																		<div class="sppb-media-body">
																				<h4 class="title">委托理财</h4>
																				<p>可靠、审批快</p>
																		</div>
																</div>
                            </div>
                            <div class="col-xs-6 no-padding">
                                <div class="about-list">
                                    <div class="pull-left">
                                        <div class="sppb-icon">
                                            <span class="icon-key"></span>
                                        </div>
                                    </div>
                                    <div class="sppb-media-body">
                                        <h4 class="title">租赁贷款</h4>
                                        <p>利率低、审批快</p>
                                    </div>
                                </div>
                                <div class="about-list">
                                    <div class="pull-left">
                                        <div class="sppb-icon">
                                            <span class="icon-pie-chart"></span>
                                        </div>
                                    </div>
                                    <div class="sppb-media-body">
                                        <h4 class="title">债务重组</h4>
                                        <p>效率高、重组快</p>
                                    </div>
                                </div>
                                <div class="about-list">
                                    <div class="pull-left">
                                        <div class="sppb-icon">
                                            <span class="icon-calculator"></span>
                                        </div>
                                    </div>
                                    <div class="sppb-media-body">
                                        <h4 class="title">投资理财</h4>
                                        <p>收益好、审批快</p>
                                    </div>
                                </div>
																<div class="about-list">
																		<div class="pull-left">
																				<div class="sppb-icon">
																						<span class="icon-trophy"></span>
																				</div>
																		</div>
																		<div class="sppb-media-body">
																				<h4 class="title">创业投资</h4>
																				<p>可靠、审批快</p>
																		</div>
																</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--counter-->
        <section id="counter" class="space blue-overlay parallax1">
            <div class="container">
                <div class="row">
                    <div class="counter-heading col-sm-7">
                        <div class="heading">
                            <h2 class="title">金太阳金融的专业贷款顾问和风险评估顾问
                                <span>助您建设理想物业</span></h2>
                        </div>
                        <div class="counter-base col-sm-12 no-padding">
                            <div class="col-sm-4 counter-block">
                                <div class="count">530</div>
                                <h3>成功案例</h3>
                            </div>
                            <div class="col-sm-4 counter-block">
                                <div class="count">180</div>
                                <h3>衷心反馈</h3>
                            </div>
                            <div class="col-sm-4 counter-block">
                                <div class="count">930</div>
                                <h3>客户关注</h3>
                            </div>
                        </div>
                    </div>
                    <div class="counter col-sm-5">
                        <img class="img-responsive" src="/images/cost-img.png" alt="Counter">
                    </div>
                </div>
            </div>
        </section>
        <?php include_once('./includes/news.php'); ?>
        <!--Testimonials-->
        <section id="testimonials" class="blue-overlay parallax4">
            <div class="container">
                <div class="col-sm-12 main-heading text-center">
                    <h2 class="title">集团宗旨</h2>

                </div>
                <div class="row">
                    <div class="col-sm-12 testimonial-block">
                        <div id="sync1" class="owl-carousel owl-theme text-center">
                            <div class="item">
                                <p>共享阳光 创新生活</p>
                                <div class="name"></div>
                            </div>
                            <div class="item">
                                <p>专业严谨  诚信持久</p>
                                <div class="name"></div>
                            </div>
                            <div class="item">
                                <p>阳光快道，加速财富积累实现双赢</p>
                                <div class="name"></div>
                            </div>
                        </div>
                        <div id="sync2" class="owl-carousel">
                            <div class="item">
                                <img src="/images/team3.jpg" alt="Testimonial">
                            </div>
                            <div class="item ">
                                <img src="/images/team8.jpg" alt="Testimonial">
                            </div>
                            <div class="item">
                                <img src="/images/team1.jpg" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--partner logo -->
        <section class="partner-logo space">
            <div class="container">
							<b>合作伙伴</b>
                <div class="row">
                    <div class="col-sm-2">
                        <a target="_parent" href="#"><img class="img-responsive" src="/images/140x95-1.png" alt="Client 1"></a>
                    </div>
                    <div class="col-sm-2">
                        <a target="_parent" href="#"><img class="img-responsive" src="/images/140x95-2.png" alt="Client 2"></a>
                    </div>
                    <div class="col-sm-2">
                        <a target="_parent" href="#"><img class="img-responsive" src="/images/140x95-3.png" alt="Client 3"></a>
                    </div>
                    <div class="col-sm-2">
                        <a target="_parent" href="#"><img class="img-responsive" src="/images/140x95-4.png" alt="Client 4"></a>
                    </div>
                    <div class="col-sm-2">
                        <a target="_parent" href="#"><img class="img-responsive" src="/images/140x95-5.png" alt="Client 5"></a>
                    </div>
                    <div class="col-sm-2">
                        <a target="_parent" href="#"><img class="img-responsive" src="/images/140x95-6.png" alt="Client 6"></a>
                    </div>
                </div>
            </div>
        </section>

<!-- Page's footer starts here -->
<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
