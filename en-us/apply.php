<?php
  
	//Set values for page
	$page_title = "Loan Application";
	$current_page = "apply";
	//Load header
	include_once('./includes/header.php');
	//Navigation start
	include_once('./includes/navigation.php');

	if (isset($_GET['sent'])) {
  $type= ((isset($_POST['type']) && $_POST['type'] != '')?sanitize($_POST['type']):'');
  $name= ((isset($_POST['name']) && !empty($_POST['name']))?sanitize($_POST['name']):'');
  $sin= ((isset($_POST['sin']) && !empty($_POST['sin']))?sanitize($_POST['sin']):'');
  $gender= ((isset($_POST['gender']) && !empty($_POST['gender']))?sanitize($_POST['gender']):'');
  $ms= ((isset($_POST['ms']) && $_POST['ms'] != '')?sanitize($_POST['ms']):'');
  $bd= ((isset($_POST['bd']) && $_POST['bd'] != '')?sanitize($_POST['bd']):'');
  $phone= ((isset($_POST['phone']) && $_POST['phone'] != '')?sanitize($_POST['phone']):'');
  $email= ((isset($_POST['email']) && $_POST['email'] != '')?sanitize($_POST['email']):'');
  $address= ((isset($_POST['address']) && $_POST['address'] != '')?sanitize($_POST['address']):'');
  $paddress= ((isset($_POST['paddress']) && $_POST['paddress'] != '')?sanitize($_POST['paddress']):'');
  $cemployer= ((isset($_POST['cemployer']) && $_POST['cemployer'] != '')?sanitize($_POST['cemployer']):'');
  $pemployer= ((isset($_POST['pemployer']) && $_POST['pemployer'] != '')?sanitize($_POST['pemployer']):'');
  $jobtitle= ((isset($_POST['jobtitle']) && $_POST['jobtitle'] != '')?sanitize($_POST['jobtitle']):'');
  $pjobtitle= ((isset($_POST['pjobtitle']) && $_POST['pjobtitle'] != '')?sanitize($_POST['pjobtitle']):'');
  $jobtime= ((isset($_POST['jobtime']) && $_POST['jobtime'] != '')?sanitize($_POST['jobtime']):'');
  $pjobtime= ((isset($_POST['pjobtime']) && $_POST['pjobtime'] != '')?sanitize($_POST['pjobtime']):'');
  $aincome= ((isset($_POST['aincome']) && $_POST['aincome'] != '')?sanitize($_POST['aincome']):'');
  $propertyaddress= ((isset($_POST['propertyaddress']) && $_POST['propertyaddress'] != '')?sanitize($_POST['propertyaddress']):'');
  $houseprice= ((isset($_POST['houseprice']) && $_POST['houseprice'] != '')?sanitize($_POST['houseprice']):'');
  $martgage= ((isset($_POST['martgage']) && $_POST['martgage'] != '')?sanitize($_POST['martgage']):'');
  $closingdate= ((isset($_POST['closingdate']) && $_POST['closingdate'] != '')?sanitize($_POST['closingdate']):'');
  $cash= ((isset($_POST['cash']) && $_POST['cash'] != '')?sanitize($_POST['cash']):'');
  $bank= ((isset($_POST['bank']) && $_POST['bank'] != '')?sanitize($_POST['bank']):'');
  $otherassets= ((isset($_POST['otherassets']) && $_POST['otherassets'] != '')?sanitize($_POST['otherassets']):'');
  $holdaddress= ((isset($_POST['holdaddress']) && $_POST['holdaddress'] != '')?sanitize($_POST['holdaddress']):'');
  $cvalue= ((isset($_POST['cvalue']) && $_POST['cvalue'] != '')?sanitize($_POST['cvalue']):'');
  $pdate= ((isset($_POST['pdate']) && $_POST['pdate'] != '')?sanitize($_POST['pdate']):'');
  $apropertytax= ((isset($_POST['apropertytax']) && $_POST['apropertytax'] != '')?sanitize($_POST['apropertytax']):'');
  $oriprice= ((isset($_POST['oriprice']) && $_POST['oriprice'] != '')?sanitize($_POST['oriprice']):'');
  $ancondofees= ((isset($_POST['ancondofees']) && $_POST['ancondofees'] != '')?sanitize($_POST['ancondofees']):'');
  $mortgagebal= ((isset($_POST['mortgagebal']) && $_POST['mortgagebal'] != '')?sanitize($_POST['mortgagebal']):'');
  $maturitydate= ((isset($_POST['maturitydate']) && $_POST['maturitydate'] != '')?sanitize($_POST['maturitydate']):'');
  $monthlypayment= ((isset($_POST['monthlypayment']) && $_POST['monthlypayment'] != '')?sanitize($_POST['monthlypayment']):'');
  $rate= ((isset($_POST['rate']) && $_POST['rate'] != '')?sanitize($_POST['rate']):'');
  $ratetype= ((isset($_POST['ratetype']) && $_POST['ratetype'] != '')?sanitize($_POST['ratetype']):'');
  $termtype= ((isset($_POST['termtype']) && $_POST['termtype'] != '')?sanitize($_POST['termtype']):'');
      if ($_POST) {
      // insert into database
      $insertSql = "INSERT INTO application(`type`, `name`, `sin`, `gender`, `ms`, `bd`, `phone`, `email`, `address`, `paddress`,`cemployer`, `pemployer`,
      `jobtitle`, `pjobtitle`, `jobtime`, `pjobtime`, `aincome`, `propertyaddress`, `houseprice`, `martgage`,
      `closingdate`, `cash`, `bank`, `otherassets`, `holdaddress`, `cvalue`, `pdate`, `apropertytax`, `oriprice`, `ancondofees`,
      `mortgagebal`, `maturitydate`, `monthlypayment`, `rate`, `ratetype`, `termtype`)
      VALUES ('$type','$name','$sin','$gender','$ms','$bd','$phone','$email','$address','$paddress',
        '$cemployer','$pemployer','$jobtitle','$pjobtitle','$jobtime','$pjobtime','$aincome','$propertyaddress','$houseprice','$martgage',
        '$closingdate','$cash','$bank','$otherassets','$holdaddress','$cvalue','$pdate','$apropertytax','$oriprice','$ancondofees','$mortgagebal',
        '$maturitydate','$monthlypayment','$rate','$ratetype','$termtype')";
      mysql_query($insertSql);
      echo'<h4 class="bg-success" style="color:green;" align="center">&nbsp;提交成功 - Succeed </h4>';
      }
}?>
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
					<!--From-->
					<section id="about" class="space">
						<div class="container">
								<div class="row">
									<div class="col-md-12">
									<!-- Form Start-->
									<h4 class="new-customtext" style="text-align:center;">Goldensun Capital - Loan Application</h4>
									<form class="form-horizontal" action="apply.php?sent=true" method="post" accept-charset="utf-8" enctype="multipart/form-data">
									<fieldset>
									<!-- Form Name -->
									<legend class="bg-success">Basic Information</legend>
									<span>( Please fill in previous address if curerent < 3 year )</span>
									<!-- Multiple Checkboxes (inline) -->
									<div class="form-group">
									<label class="col-md-4 control-label" for="checkboxes">Type of Mortgage :</label>
									<div class="col-md-4">
									<select name="type" class="form-control" required>
									<option value="" required>Select</option>
									<option value="房屋贷款" >房屋贷款</option>
									<option value="商业贷款" >商业贷款</option>
									<option value="私人贷款" >私人贷款</option>
									<option value="租赁贷款" >租赁贷款</option>
									<option value="二次贷款" >二次贷款</option>
                  <option value="重新贷款" >重新贷款</option>
                  <option value="预批贷款" >预批贷款</option>
                  <option value="小生意贷款" >小生意贷款</option>
									</select>
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="name">Name  :</label>
									<div class="col-md-4">
									<input id="name" name="name" type="text" class="form-control input-md" required>
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="textinput">SIN # :</label>
									<div class="col-md-4">
									<input id="sin" name="sin" type="text"  class="form-control input-md" required>
									</div>
									</div>
									<!-- Multiple Radios (inline) -->
									<div class="form-group">
									<label class="col-md-4 control-label" for="radios">Gender :</label>
									<div class="col-md-4">
									<label class="radio-inline" for="gender">
									<input type="radio" name="gender" value="1" required>
									Male
									</label>
									<label class="radio-inline" for="gender">
									<input type="radio" name="gender" value="2">
									Female
									</label>
									</div>
									</div>
									<!-- Multiple Checkboxes (inline) -->
									<div class="form-group">
									<label class="col-md-4 control-label" for="checkboxes">Marital Status :</label>
									<div class="col-md-5">
									<label class="radio-inline" for="ms">
									<input type="radio" name="ms" value="1" required>
									Married
									</label>
									<label class="radio-inline" for="ms">
									<input type="radio" name="ms" value="2">
									Single
									</label>
									<label class="radio-inline" for="ms">
									<input type="radio" name="ms" value="3">
									Common Law
									</label>
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="bd">Birth Date :</label>
									<div class="col-md-4">
									<input id="bd" name="bd" type="text" placeholder="YYYY/MM/DD " class="form-control input-md" required>
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="phone">Phone # :</label>
									<div class="col-md-4">
									<input id="phone" name="phone" type="text"  class="form-control input-md" required>
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="email">Email :</label>
									<div class="col-md-4">
									<input id="email" name="email" type="email"  class="form-control input-md" required>
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="address">Address :</label>
									<div class="col-md-4">
									<input id="address" name="address" type="text"  class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="add_fields_placeholder">Curerent Address< 3 year ?: </label>
									<div class="col-md-4"><select name="add_fields_placeholder" id="add_fields_placeholder" class="form-control">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
									</select></div>
									</div>
									<!-- Text input-->
									<div class="form-group" id="basicfield">
									<label class="col-md-4 control-label" for="paddress">Previous Address :</label>
									<div class="col-md-4">
									<input id="basic" name="paddress" type="text" class="form-control input-md">
									</div>
									</div>
									<br>
									<!-- Form Name -->
									<legend class="bg-success">Basic Information</legend>
									<span>( Please fill in previous employment information if curerent < 3 year )</span>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="cemployer">Current Employer:</label>
									<div class="col-md-4">
									<input id="cemployer" name="cemployer" type="text"  class="form-control input-md" required>
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="jobtitle">Job Title :</label>
									<div class="col-md-4">
									<input id="jobtitle" name="jobtitle" type="text"  class="form-control input-md" required>
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="jobtime">Time at job :</label>
									<div class="col-md-4">
									<input id="jobtime" name="jobtime" type="text" placeholder="YYYY/MM/DD " class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="add_jobs_placeholder">Curerent Job< 3 year ?: </label>
									<div class="col-md-4"><select name="add_jobs_placeholder" id="add_jobs_placeholder" class="form-control">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
									</select></div>
									</div>
									<!-- Text input-->
									<div class="form-group" id="jobfield1">
									<label class="col-md-4 control-label" for="pemployer">Previous Employer :</label>
									<div class="col-md-4">
									<input id="job1" name="pemployer" type="text"  class="form-control input-md">
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group" id="jobfield2">
									<label class="col-md-4 control-label" for="pjobtitle">Previous Job Title ：</label>
									<div class="col-md-4">
									<input id="job2" name="pjobtitle" type="text"  class="form-control input-md">
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group" id="jobfield3">
									<label class="col-md-4 control-label" for="pjobtime">Time at job ：</label>
									<div class="col-md-4">
									<input id="job3" name="pjobtime" type="text" placeholder="YYYY/MM/DD " class="form-control input-md" >
									</div>
									</div>
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="aincome">Annual Income:</label>
									<div class="col-md-4">
									<input id="aincome" name="aincome" type="text" placeholder="$" class="form-control input-md">
									</div>
									</div>
									<br>
									<legend class="bg-success">Subject Property</legend>
									<div class="col-md-6">
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="propertyaddress">Property Address :</label>
									<div class="col-md-4">
									<input id="propertyaddress" name="propertyaddress" type="text"  class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="houseprice">House Price :</label>
									<div class="col-md-4">
									<input id="houseprice" name="houseprice" type="text" placeholder="$" class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="martgage">Martgage Amount :</label>
									<div class="col-md-4">
									<input id="martgage" name="martgage" type="text" placeholder="$" class="form-control input-md" required>
									</div>
									</div>
									</div><div class="col-md-6">
									<div class="form-group">
									<label class="col-md-4 control-label" for="closingdate">Closing Date:</label>
									<div class="col-md-4">
									<input id="closingdate" name="closingdate" type="text" placeholder="YYYY/MM/DD " class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="cash">Cash :</label>
									<div class="col-md-4">
									<input id="cash" name="cash" type="text" placeholder="$" class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="bank">Bank :</label>
									<div class="col-md-4">
									<input id="bank" name="bank" type="text"  class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="otherassets">Other Assets:</label>
									<div class="col-md-4">
									<input id="otherassets" name="otherassets" type="text" placeholder="$" class="form-control input-md" required>
									</div>
									</div>
									</div>
									<br>
									<legend class="bg-success">Properties</legend>
									<div class="col-md-12">
									<div class="col-md-6">
									<!-- Text input-->
									<div class="form-group">
									<label class="col-md-4 control-label" for="holdaddress">Address :</label>
									<div class="col-md-4">
									<input id="holdaddress" name="holdaddress" type="text"  class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="cvalue">Current Value :</label>
									<div class="col-md-4">
									<input id="cvalue" name="cvalue" type="text" placeholder="$" class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="pdate">Purchase Date :</label>
									<div class="col-md-4">
									<input id="pdate" name="pdate" type="text" placeholder="YYYY/MM/DD " class="form-control input-md" required>
									</div>
									</div>
									<div class="form-group">
									 <label class="col-md-4 control-label" for="apropertytax">Annual Property Tax:</label>
									 <div class="col-md-4">
									<input id="apropertytax" name="apropertytax" type="text" placeholder="$" class="form-control input-md" required>
									 </div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label" for="oriprice">Original Price :</label>
										<div class="col-md-4">
									<input id="oriprice" name="oriprice" type="text" placeholder="$" class="form-control input-md" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label" for="ancondofees">Annual Condo Fees :</label>
										<div class="col-md-4">
									<input id="ancondofees" name="ancondofees" type="text" placeholder="$" class="form-control input-md" required>
										</div>
									</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
													<label class="col-md-4 control-label" for="mortgagebal">Mortgage Balance :</label>
													<div class="col-md-4">
											 <input id="mortgagebal" name="mortgagebal" type="text" placeholder="$" class="form-control input-md" required>
													</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
													<label class="col-md-4 control-label" for="maturitydate">Maturity Date :</label>
													<div class="col-md-4">
											 <input id="maturitydate" name="maturitydate" type="text" placeholder="YYYY/MM/DD " class="form-control input-md" required>
													</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
													<label class="col-md-4 control-label" for="monthlypayment">Monthly Payment :</label>
													<div class="col-md-4">
											 <input id="monthlypayment" name="monthlypayment" type="text" placeholder="$" class="form-control input-md" required>
													</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
													<label class="col-md-4 control-label" for="rate">Rate :</label>
													<div class="col-md-4">
											 <input id="rate" name="rate" type="text"  class="form-control input-md" required>
													</div>
										</div>
									</div>
									<div class="col-md-6">
										<!-- Multiple Checkboxes (inline) -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="checkboxes">Rate Type :</label>
											<div class="col-md-5">
												<label class="radio-inline" for="checkboxes-0">
													<input type="radio" name="ratetype" value="1" required>
													Fixed
												</label>
												<label class="radio-inline" for="checkboxes-1">
													<input type="radio" name="ratetype" value="2">
													Variable
												</label>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<!-- Multiple Checkboxes (inline) -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="checkboxes">Term Type :</label>
											<div class="col-md-4">
												<select name="termtype" class="form-control" required>
													<option value="">Select</option>
													<option value="Closed">Closed</option>
													<option value="Open">Open</option>
													<option value="">Convertible</option>
												</select>
											</div>
										</div>
									</div>

									</div>
									<br>
								</fieldset><p><input type="checkbox"  name="terms" required> &nbsp; &nbsp; I accept the <u>Terms and Conditions</u></p>
									<!-- Button -->
									<div class="form-group" align="center">
										<label class="col-md-12 control-label" for="singlebutton"></label>
										<div class="col-md-12">
											<a href="home.php" class="btn btn-success">Back</a>
											<button type="submit" name="sent" class="btn btn-success">Submit</button>
											<button type="reset" class="btn btn-success">Clear</button>

										</div>
									</div>
									</form>
									<!-- Form End-->
									</div>
									</div>
						</div>
					</section>


<!-- Page's footer starts here -->
<?php include_once('./includes/footer.php'); ?>

 <script type="text/javascript">
  $(document).ready(function()
                    {
                    $("#add_fields_placeholder").change(function()
          {
              if($(this).val() == "No")
          {
              $("#basicfield").show();
              $("#basic").attr("required", "required");


          }
          else
          {
              $("#basicfield").hide();
              $("#basic").removeAttr("required", "required");

          }
              });
              $("#basicfield").hide();
              $("#basic").removeAttr("required", "required");

  });

  $(document).ready(function()
                    {
                    $("#add_jobs_placeholder").change(function()
          {
              if($(this).val() == "No")
          {
              $("#jobfield1").show();
              $("#jobfield2").show();
              $("#jobfield3").show();
              $("#job1").attr("required", "required");
              $("#job2").attr("required", "required");
              $("#job3").attr("required", "required");

          }
          else
          {
              $("#jobfield1").hide();
              $("#jobfield2").hide();
              $("#jobfield3").hide();
              $("#job1").removeAttr("required", "required");
              $("#job2").removeAttr("required", "required");
              $("#job3").removeAttr("required", "required");

          }
              });

              $("#jobfield1").hide();
              $("#jobfield2").hide();
              $("#jobfield3").hide();
              $("#job1").removeAttr("required", "required");
              $("#job2").removeAttr("required", "required");
              $("#job3").removeAttr("required", "required");

  });


</script>
<?php include_once('./includes/sidemenu.php'); ?>
<?php include_once('./includes/bottomscriptwithmap.php'); ?>
