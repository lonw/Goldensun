<?php
  require_once '../inc/config.php';
	//Set values for page
	$title = ((isset($_GET['title']) && $_GET['title'] != '')?sanitize($_GET['title']):'');
	$current_page = 'about';
	#title
	$query = mysql_query("SELECT * FROM page WHERE target = '$title' AND lang = 1");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM page WHERE id = '$id'");
	}
	$data = mysql_fetch_array($query);
	$page_title =  'About US';
	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');
	include_once('./includes/submenu.php');
?>

<!--About-->
      <section id="about" class="space">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 about-block">
                      <img src="/images/who-we-are.jpg" class="img-responsive" alt="About">
                  </div>
                  <div class="col-sm-6 about-block">
                      <h3>About Us</h3>
                      <p>Golden Sun Capital is a professional financial company engaged in financial loans, entrusted financial management, investment and financial management, with senior practitioners, and with 25 banks and 40 financial institutions to join forces, we are committed to all types of customers to provide the most valuable financial Services to the customer's financing needs for the first, to provide customers with the best financial solutions. Whether you are a new immigrant, an international student, a refugee, or a self-employed person, a real estate investor, or a poor credit, whether you are required to apply for land loans, construction loans, industrial investment, venture capital, etc. All of the funds can be tailored to suit your loan plan.</p>
                    </div>
                  <div class="col-sm-6 about-block">

                            <h3> </h3>
                      <p>Golden Sun Capital efficiently helps you solve the problem. The company has a number of registered financial planners, certified public accountants, is committed to providing you with professional financial products, insurance products and tax planning, all kinds of government welfare application services.</p>
                  </div>
              </div>
          </div>
      </section>
      <!--Our Team-->
      <section id="team" class="space">
        <!--Main Heading-->
        <div class="col-sm-12 main-heading text-center">
          <h2>Dedicated Team</h2>
        </div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-3 team-block">
                      <div class="inner">
                          <img src="/images/team02.jpg" class="img-responsive" alt="team">
                         <div class="team-text">
                           <div class="name">Nancy Li</div>
                           <div class="designation">Chairman & Founder</div>
                           <div class="name"><i class="fa fa-phone"></i> 647-860-9577</div>
                           <p>Ms. Nancy Li, one of the founders of Golden Sun Capital, has extensive loan experience and success stories and is also the founder of several cross-border electricity providers.</p>

                         </div>
                      </div>
                  </div>
                <div class="col-sm-3 team-block">
                  <div class="inner">
                    <img src="/images/team03.jpg" class="img-responsive" alt="team">
                    <div class="team-text">
                      <div class="name">Summer Xu</div>
                      <div class="designation">CEO & Founder</div>
                      <div class="name"><i class="fa fa-phone"></i> 416-938-1777</div>
                      <p>Chief Executive Officer. Summer Xu is one of the founders of Golden Sun Capital, has a wealth of exchange experience and success stories.</p>

                    </div>
                  </div>
                </div>
                <div class="col-sm-3 team-block">
                  <div class="inner">
                    <img src="/images/team04.jpg" class="img-responsive" alt="team">
                    <div class="team-text">
                      <div class="name">Joanna Qin</div>
                      <div class="designation">CEO & Founder</div>
                      <div class="name"><i class="fa fa-phone"></i> 416-875-9068</div>
                      <p>Chief Financial Officer. Ms. Joanna Qin is one of the founders of Golden Sun Capital, CPA, CA. Company / personal / family tax declaration, taxation and modification insurance financial planning.</p>

                    </div>
                  </div>
                </div>
                <div class="col-sm-3 team-block">
                  <div class="inner">
                    <img src="/images/team05.jpg" class="img-responsive" alt="team">
                    <div class="team-text">
                      <div class="name">Yingshan Huang</div>
                      <div class="designation">Marketing Manager</div>
                      <div class="name"><i class="fa fa-phone"></i> 647-993-5855</div>
                      <p>Marketing Manager. Member of Golden Sun Capital, responsible for foreign exchange, loans, tax returns and other business. With a wealth of exchange experience.</p>

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
