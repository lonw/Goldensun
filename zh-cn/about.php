<?php
  require_once '../inc/config.php';
	//Set values for page
	$title = ((isset($_GET['title']) && $_GET['title'] != '')?sanitize($_GET['title']):'');
	$current_page = 'about';
	#title
	$query = mysql_query("SELECT * FROM page WHERE target = '$title' AND lang = 0");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM page WHERE id = '$id'");
	}
	$data = mysql_fetch_array($query);
	$page_title =  '公司简介';
	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');
	include_once('./includes/submenu.php');
?>
<!--About-->
<section class="space" id="about">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="col-sm-6 about-block"><img alt="About" class="img-responsive" src="/images/who-we-are.jpg" /></div>

<div class="col-sm-6 about-block">
<h3>公司简介</h3>

<p>金太阳金融是从事金融贷款，委托理财，投资理财的专业金融公司，拥有资深从业人员，并与25家银行和40家金融机构强强联手合作， 我们致力为各类客户提供最有价值的金融服务，以客户的融资需求为先，为客户提供最佳的金融方案。无论您是新移民，留学生，难民，还是自顾人士，房产投资者，或信用欠佳者，首付款不足者，还是您需要申请土地贷款，建筑贷款， 工业投资，创业投资等等，金太阳金融全部可以为您量身定制适合您的贷款方案。</p>
</div>

<div class="col-sm-6 about-block">
<h3>&nbsp;</h3>

<p>金太阳金融迅速，高效地协助您解决问题。公司拥有多个注册财务策划师， 注册会计师，致力为您提供专业理财产品，保险产品及税务策划，各类政府福利申请服务。</p>
</div>
</div>
</div>
</div>
</section>
<!--Our Team-->

<section class="space" id="team"><!--Main Heading-->
<div class="col-sm-12 main-heading text-center">
<h2>核心团队</h2>
</div>

<div class="container">
<div class="row">
<div class="col-sm-3 team-block">
<div class="inner"><img alt="team" class="img-responsive" src="/images/team02.jpg" />
<div class="team-text">
<div class="name">Nancy Li</div>

<div class="name">+1 647-860-9577</div>

<div class="name">Chairman &amp; Founder</div>

<p>董事长 <b>Nancy Li</b>女士：金太阳金融(Goldensun Capital)的创始人之一, 拥有丰富的贷款经验和成功案例，亦是多家跨境电商的创办人。</p>
<!-- <ul class="sppb-person-social">
                       <li><a target="_parent" href="#"><i class="fa fa-facebook"></i></a></li>
                       <li><a target="_parent" href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a target="_parent" href="#"><i class="fa fa-google-plus"></i></a></li>
                       <li><a target="_parent" href="#"><i class="fa fa-linkedin"></i></a></li>
                       <li><a target="_parent" href="#"><i class="fa fa-behance"></i></a></li>
                     </ul> --></div>
</div>
</div>

<div class="col-sm-3 team-block">
<div class="inner"><img alt="team" class="img-responsive" src="/images/team03.jpg" />
<div class="team-text">
<div class="name">Summer Xu</div>

<div class="name">+1 416-938-1777</div>

<div class="name">CEO &amp; Founder</div>

<p>首席執行官 <b>Summer Xu</b>女士: 金太阳金融(Goldensun Capital)的创始人之一，具备丰富的汇兑经验和成功案例。</p>
<!-- <ul class="sppb-person-social">
                  <li><a target="_parent" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-behance"></i></a></li>
                </ul> --></div>
</div>
</div>

<div class="col-sm-3 team-block">
<div class="inner"><img alt="team" class="img-responsive" src="/images/team04.jpg" />
<div class="team-text">
<div class="name">Joanna Qin <small class="designation">CPA,CA</small></div>

<div class="name">+1 416-875-9068</div>

<div class="name">CFO &amp; Founder</div>

<p>首席财务官 <b>Joanna Qin</b>女士: 金太阳金融(Goldensun Capital)的创始人之一，注册会计师 CPA,CA。公司/个人/家庭税务申报，补税及修改，保险理财规划。</p>
<!-- <ul class="sppb-person-social">
                  <li><a target="_parent" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-behance"></i></a></li>
                </ul> --></div>
</div>
</div>

<div class="col-sm-3 team-block">
<div class="inner"><img alt="team" class="img-responsive" src="/images/team05.jpg" />
<div class="team-text">
<div class="name">Yingshan Huang</div>

<div class="name">+1 647-993-5855</div>

<div class="name">Marketing Manager</div>

<p>市场经理<b> Yingshan Huang</b>女士: 金太阳金融(Goldensun Capital)的成员之一, 负责汇兑、贷款、报税等业务。具备丰富的汇兑经验。</p>
<!-- <ul class="sppb-person-social">
                  <li><a target="_parent" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a target="_parent" href="#"><i class="fa fa-behance"></i></a></li>
                </ul> --></div>
</div>
</div>
</div>
</div>
</section>


<!-- Page's footer starts here -->
<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
