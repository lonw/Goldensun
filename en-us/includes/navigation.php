<!--header-->
<header id="sp-header">
		<div class="container">
				<div class="row">
						<div id="sp-menu" class="col-sm-12 col-md-12">
								<div class="sp-column ">
										<div class='sp-megamenu-wrapper'>
												<a class="hidden-xl hidden-lg hidden-md" id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a>
												<ul class="sp-megamenu-parent menu-fade-up hidden-sm hidden-xs">
														<li class="sp-menu-item <?php if ($current_page == "home") { ?>current-item active<?php } ?>"><a href="home.php">Home</a></li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "about") { ?>current-item active<?php } ?>"><a href="#">About</a>
																<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																		<div class="sp-dropdown-inner">
																				<ul class="sp-dropdown-items">
																						<li class="sp-menu-item"><a href="about.php?title=About Us">Company</a></li>
																						<li class="sp-menu-item"><a href="home.php#news">News</a></li>
																				</ul>
																		</div>
																</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "Loan") { ?>current-item active<?php } ?>"><a href="#">Loan</a>
																<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																		<div class="sp-dropdown-inner">
																				<ul class="sp-dropdown-items">
																						<li class="sp-menu-item"><a href="page.php?title=Residential Mortgage&category=Loan">Residential Mortgage</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Commercial Mortgage&category=Loan">Commercial Mortgage</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Private Loan&category=Loan">Private Mortgage</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Commercial Leasing&category=Loan">Commercial Leasing</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Secondary Mortgage&category=Loan">Second Mortgage</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Refinancing&category=Loan">Refinance</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Pre-approval&category=Loan">Pre-Approval</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Small Business&category=Loan">Small Business</a></li>

																				</ul>
																		</div>
																</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "Financial") { ?>current-item active<?php } ?>"><a href="#">Finance</a>
																<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																		<div class="sp-dropdown-inner">
																				<ul class="sp-dropdown-items">
																						<li class="sp-menu-item"><a href="page.php?title=Exchange&category=Financial">Exchange</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Financial Investment&category=Financial">Financial Investment</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Financial Trusts&category=Financial">Financial Trusts</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Venture Capital&category=Financial">Venture Capital</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Debt Consolidation Loans&category=Financial">Debt Consolidation</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Registered Education Savings Plans&category=Financial">Registered Education Savings Plans</a></li>
																						<li class="sp-menu-item"><a href="page.php?title=Insurance&category=Financial">Insurance</a></li>
																				</ul>
																		</div>
																</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "apply") { ?>current-item active<?php } ?>"><a href="apply.php">Apply Now</a>
															<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																	<div class="sp-dropdown-inner">
																			<ul class="sp-dropdown-items">
																					<li class="sp-menu-item"><a href="page.php?title=Calculator&category=apply">Calculator</a></li>
																					<li class="sp-menu-item"><a href="page.php?title=FAQ&category=apply">FAQ</a></li>
																			</ul>
																	</div>
															</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "taxes") { ?>current-item active<?php } ?>"><a href="#">Tax Services</a>
															<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																	<div class="sp-dropdown-inner">
																			<ul class="sp-dropdown-items">
																				<li class="sp-menu-item"><a href="page.php?title=Corporate Tax&category=taxes">Corporate Tax</a></li>
																				<li class="sp-menu-item"><a href="page.php?title=Personal Tax&category=taxes">Personal Tax</a></li>
																				<li class="sp-menu-item"><a href="page.php?title=Audit/Accounting Services&category=taxes">Audit/Accounting Services</a></li>
																				<li class="sp-menu-item"><a href="http://longqin.ca/query-form/" target="_blank">Business Registration</a></li>
																			</ul>
																	</div>
															</div>
														</li>
														<li class="sp-menu-item sp-has-child <?php if ($current_page == "real_estate") { ?>current-item active<?php } ?>"><a href="#">Real Estate</a>
															<div class="sp-dropdown sp-dropdown-main sp-menu-right">
																	<div class="sp-dropdown-inner">
																			<ul class="sp-dropdown-items">
																				<li class="sp-menu-item"><a href="sold_real_estate.php?title=FL -- Orlando / Tampa&category=">Sold</a></li>
																				<li class="sp-menu-item"><a href="real_estate.php?title=奥兰多&category=">Orlando</a></li>
																				<li class="sp-menu-item"><a href="real_estate.php?title=坦帕&category=">Tampa</a></li>
																			</ul>
																	</div>
															</div>
														</li>
														<li class="sp-menu-item <?php if ($current_page == "contact") { ?>current-item active<?php } ?>"><a href="contact.php?hire=1">Contact</a></li>
												</ul>
										</div>
								</div>
						</div>
				</div>
		</div>
</header>
