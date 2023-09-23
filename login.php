<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Lato:ital,wght@0,400;1,100&family=Lumanosimo&family=Tektur:wght@800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Fuggles&display=swap" rel="stylesheet">
</head>
</head>
<body>
    <div>
    <div class="right-side">
        <div class="heading">
            <h2 class="first-header">Get Your Dream Job</h2>
            
        </div>
        <div class="menu">
            <a href="index.php"><i class="fa-solid fa-house"></i></i>Home</a>
            <a href="findajob.php"><i class="fa-regular fa-lightbulb"></i></i></i>Find a job</a>
            <a href="employer.php"><i class="fa-solid fa-user-tie"></i>Employer</a>
            <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
            <a href="register.php"><i class="fa-regular fa-address-card"></i>Register</a>
            
        </div>
        <div class="profile">
            <div class="profile-name">
                <h4><a href="">James Kimura</a></h4>
                <p>Web Developer<sup>Pro</sup></p>
            </div>
        </div>
    </div>
    </div>
<div class="main-wrapper">


<div class="breadcrumb-wrapper">

    <div class="container1">
    
        <ol class="breadcrumb-list">

        </ol>
        
    </div>
    
</div>


<div class="login-container-wrapper">	

    <div class="container">
    
        <div class="row">
        
            <div class="col-md-10 col-md-offset-1">
            
                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3">
                    <?php
                    include 'check_reply.php';	
                    ?>
                    <form name="frm" action="app/auth.php" method="POST" autocomplete="off">
                    <div class="login-box-wrapper">
                
                    <div class="modal-header">
                    <h4 class="modal-title text-center">Access your account</h4>
                    </div>

                    <div class="modal-body">
                                                    
                    <div class="row gap-20">

                                    
                    <div class="col-sm-12 col-md-12">

                    <div class="form-group"> 
                    <label>Email Address</label><br>
                    <input class="form-control" placeholder="Enter your email address" name="email" required type="text"> 
                    </div>
                                    
                     </div>
                                    
                    <div class="col-sm-12 col-md-12">
                                    
                    <div class="form-group"> 
                    <label>Password</label><br>
                    <input class="form-control" placeholder="Enter your password" name="password" required type="password"> 
                    </div>
                                    
                    </div>


            
                      <div class="col-sm-12 col-md-12">
                    <div class="login-box-link-action">
                    <a data-toggle="modal" onclick = "reset_text()" href="#forgotPasswordModal" id="ew">Forgot password?</a> 
                    </div>
                  </div>	

                                
                                    
                                    
</div>

</div>

<div class="modal-footer text-center">
<button type="submit" class="btn btn-primary">Login</button>
</div>
                            
</div>
</form>
<div id="forgotPasswordModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Restore your forgotten password</h4>
				</div>

				<div class="modal-body">
					<div class="row gap-20">
						
						<div class="col-sm-12 col-md-12">
							<p class="mb-20">Enter the email address associated to your account, we will send you the link to reset your password</p>
						</div>
						
						<div class="col-sm-12 col-md-12">
				
							<div class="form-group"> 

								<label>Email Address</label>
								<input id="mymail" autocomplete="off" name="email" class="form-control" placeholder="Enter your email address" type="email" required> 
							</div>
						
						</div>


						
						<div class="col-sm-12 col-md-12">
							<div class="login-box-box-action">
								Return to <a data-dismiss="modal">Log-in</a>
								<p id="data"></p>
							</div>
							
						</div>
						
					</div>
				</div>
				
				<div class="modal-footer text-center">
					<button  onclick="update(mymail.value)" type="submit" class="btn btn-primary">Restore</button>
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
		
			</div>
									
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
</body>
</html>