<!doctype html>
<html lang="en">
<?php 
require 'settings.php'; 
require 'check-login.php';

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*16)-16;
}					
}else{
$page1 = 0;
$page = 1;	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Employers</title>
	

	
</head>
  <style>
  
    .autofit2 {
	height:100px;
	width:100px;
    object-fit:cover; 
  }
  
  </style>

<body class="not-transparent-header">


	<div class="container-wrapper">




			
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account for free</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as Employer</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as Employee</a>
						</div>

					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>
			
		</header>

		
		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="./">Home</a></li>
						<li><span>Employers</span></li>
					</ol>
					
				</div>
				
			</div>

			
			<div class="section sm">
			
				<div class="container">
				
					<div class="sorting-wrappper alt">
			
						<div class="GridLex-grid-middle">
						
							<div class="GridLex-col-3_sm-12_xs-12">
							
								<div class="sorting-header">
									<h3 class="sorting-title">Employers</h3>
								</div>
								
							</div>
							
							
						</div>

					</div>
					
					<div class="company-grid-wrapper top-company-2-wrapper">

						<div class="GridLex-gap-30">
						
							<div class="GridLex-grid-noGutter-equalHeight">
							<?php
							require 'db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                            $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY first_name LIMIT $page1,16");
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            foreach($result as $row)
                            {
		                    $complogo = $row['avatar'];
							?>
							<div class="GridLex-col-3_sm-4_xs-6_xss-12">
								
							<div class="top-company-2">
							<a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">
										
							<div class="image">
							<?php 
							if ($complogo == null) {
							print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
		
							</div>
											
							<div class="content">
							<h5 class="heading text-primary font700"><?php echo $row['first_name'];?></h5>
							<p class="texting font600"><?php echo $row['title'];?><p>
							<p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">Active job post(s)</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
							</div>
										
							</a>
										
							</div>
									
							</div>
							<?php
	
	                        }

	                        }catch(PDOException $e)
                             {

                             } ?>

							

								

								
							</div>
						
						</div>

					</div>
					
								<div class="pager-wrapper">
								
						        <ul class="pager-list">
							<?php
							require 'db_config.php';
							$total_records = 0;
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                            $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY first_name");
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            foreach($result as $row)
                            {
                            $total_records++;
	
	                        }

	                        }catch(PDOException $e)
                             {
                      
                             } ?>
							 
								<?php
								$records = $total_records/16;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="employers.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?>  href="employers.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="employers.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						        </ul>	
					
					            </div>

				</div>
			
			</div>

			
		</div>


	</div>

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>



</body>


</html>