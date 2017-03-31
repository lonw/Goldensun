<!--header-->
<header id="sp-header">
		<div class="container">
				<div class="row">
						<div id="sp-menu" class="col-sm-12 col-md-12">
								<div class="sp-column ">
										<div class='sp-megamenu-wrapper'>
												<a class="hidden-xl hidden-lg hidden-md" id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a>
												<ul class="sp-megamenu-parent menu-fade-up hidden-sm hidden-xs">
														<li class="sp-menu-item <?php if ($current_page == "home") { ?>current-item active<?php } ?>"><a href="home.php">首 页</a></li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "about") { ?>current-item active<?php } ?>"><a href="#">关于我们</a>
																<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																		<div class="sp-dropdown-inner">
																				<ul class="sp-dropdown-items">
																						<li class="sp-menu-item"><a href="about.php?title=公司简介">公司简介</a></li>
																						<li class="sp-menu-item"><a href="home.php#news">最新消息</a></li>
																				</ul>
																		</div>
																</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "Loan") { ?>current-item active<?php } ?>"><a href="services.php">贷款服务</a>
																<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																		<div class="sp-dropdown-inner">
																				<ul class="sp-dropdown-items">
																						<li class="sp-menu-item"><a href="page.php?title=Residential Mortgage&category=Loan">房屋贷款</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Commercial Mortgage&category=Loan">商业贷款</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Private Loan&category=Loan">私人贷款</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Commercial Leasing&category=Loan">租赁贷款</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Secondary Mortgage&category=Loan">二次贷款</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Refinancing&category=Loan">重新贷款</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Pre-approval&category=Loan">预批贷款</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Small Business&category=Loan">小生意贷款</a></li>

																				</ul>
																		</div>
																</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "Financial") { ?>current-item active<?php } ?>"><a href="#">金融服务</a>
																<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																		<div class="sp-dropdown-inner">
																				<ul class="sp-dropdown-items">
																						<li class="sp-menu-item"><a href="page.php?title=Exchange&category=Financial">货币兑换</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Financial Investment&category=Financial">投资理财</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Financial Trusts&category=Financial">委托理财</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Venture Capital&category=Financial">创业投资</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Debt Consolidation Loans&category=Financial">债务重组</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Registered Education Savings Plans&category=Financial">教育储蓄</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Insurance&category=Financial">保险业务</a></li>
																				</ul>
																		</div>
																</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "apply") { ?>current-item active<?php } ?>"><a href="apply.php">申请贷款</a>
															<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																	<div class="sp-dropdown-inner">
																			<ul class="sp-dropdown-items">
																					<li class="sp-menu-item"><a href="page.php?title=Calculator&category=apply">贷款计算</a></li>
																					<li class="sp-menu-item"><a href="page.php?title=FAQ&category=apply">常见问题</a></li>
																			</ul>
																	</div>
															</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "taxes") { ?>current-item active<?php } ?>"><a href="#">税务服务</a>
															<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																	<div class="sp-dropdown-inner">
																			<ul class="sp-dropdown-items">
																				<li class="sp-menu-item"><a href="page.php?title=Corporate Tax&category=taxes">公司税务</a></li>
																				<li class="sp-menu-item"><a href="page.php?title=Personal Tax&category=taxes">个人税务</a></li>
																				<li class="sp-menu-item"><a href="page.php?title=Audit/Accounting Services&category=taxes">审计及会计</a></li>
																				<li class="sp-menu-item"><a href="http://longqin.ca/query-form/" target="_blank">公司注册及注销</a></li>
																			</ul>
																	</div>
															</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "real_estate") { ?>current-item active<?php } ?>"><a href="#">地产投资</a>
															<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																	<div class="sp-dropdown-inner">
																			<ul class="sp-dropdown-items">
																				<li class="sp-menu-item"><a href="sold_real_estate.php?title=佛州 -- 奥兰多 Orlando / 坦帕Tampa已售房&category=">置业案例</a></li>
																				<li class="sp-menu-item"><a href="real_estate.php?title=奥兰多&category=">奥兰多在售房源</a></li>
																				<li class="sp-menu-item"><a href="real_estate.php?title=坦帕&category=">坦帕在售房源</a></li>
																			</ul>
																	</div>
															</div>
														</li>
														<li class="sp-menu-item <?php if ($current_page == "contact") { ?>current-item active<?php } ?>"><a href="contact.php?hire=1">加入我们</a></li>
												</ul>
										</div>
								</div>
						</div>
				</div>
		</div>
</header>
