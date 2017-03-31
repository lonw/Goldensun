<?php
$current_page = 'dashboard';
include "includes/header.php";
include "includes/navigation.php";?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include "includes/sidebar.php";?>
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="index.php">Overall History in Wealth Class</a>
	                                    </li>
	                                </ul>
                            	</div>
                        	</div>
                    	</div>

                    <div class="row-fluid">
                        <div class="span12">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">New Messages <a href="affiliate.php"><small>[Mail Box]</small></a></div>
                                    <div class="pull-right"><span class="badge badge-info">New</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                  <table class="table table-striped">
                                           <thead>
                                               <tr>
                                                   <th>Id</th>
                                                   <th>Message</th>
                                                   <th>Name</th>
                                                   <th>Email</th>
                                                   <th>Tel #</th>
                                                   <th>Recieved</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <?php
                         $per_page = 15;

                         $page_query = mysql_query("SELECT COUNT(*) FROM feedback");
                         $pages = ceil(mysql_result($page_query, 0) / $per_page);

                         $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                         $start = ($page - 1) * $per_page;

                         $query = mysql_query("SELECT * FROM feedback ORDER BY id DESC LIMIT $start, $per_page");

                         while ($data = mysql_fetch_array($query)) {
                         ?>
                           <tr>
                             <td><?php echo $data['id']; ?></td>
                             <td><?php echo utf8Substr($data['content'],0,25); ?>...</td>
                             <td><?php echo $data['name']; ?></td>
                             <td><?php echo $data['email']; ?></td>
                             <td><?php echo $data['phone']; ?></td>
                             <td><?php $datetime = explode(" ",$data['get_date']);
                             echo $datetime[0]; ?></td>
                                                   </tr>
                         <?php
                         }
                         ?>
                                           </tbody>
                                       </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>

                    </div>


                </div>
            </div>
<?php include "includes/footer.php";?>
