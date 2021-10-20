<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traffic Management System</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../css/crime_header.css">
	<link rel="stylesheet" href="../css/modal_login.css">
	<link rel="stylesheet" href="../sweetalert/dist/sweetalert.css">

	<script src="../jvscript/jquery.min.js"></script>
	<script src="../jvscript/jquery-1.11.0.min.js"></script>
	<script src="../jquery/jquery.js" type="text/javascript"></script>
	<script src="../jquery/jquery.maskedinput.js" type="text/javascript">
	</script><script src="../jvscript/bootstrap.min.js"></script>

</head>
<body>
<div id="myModal" class="modal" onselectstart="return false">
    <div class="vertical-alignment-helper">
		<div class="modal-dialog modal-login vertical-align-center">
			<div class="modal-content">
				<form action="php_files/User_login_update.php" method="post" autocomplete='off' >
					
					<div  class="modal-header" id="crime_header"><span id=''>Malawi Police Service
						<h3 id="crime_header2" class='logo2'>Traffic Management System</h3>
					</div>	
					
					<!--<div class="modal-header2">				
						<h4 class="modal-title">Sign in</h4>
					</div>-->
					
					<center>
						<div class="modal-body">				
							<div class="form-group">
								<div class="clearfix">
									<label>Username</label>
								</div>
								<input type="text" name='username' class="form-control" required="required" placeholder='Username' autocomplete='off'>
							</div>
							
							<div class="form-group">
								<div class="clearfix">
									<label>Password</label>
								</div>
								<input type="password" id='passfld' name='password'class="form-control" required="required" placeholder='Password' autocomplete='off'>
							</div>
						</div>
					</center>
					
					<div class="modal-footer">
						<center><input type="submit" name='submit' class="btn btn-primary" value="Sign in" ></center>
					</div>
				</form>
			</div>
		</div>
	</div>	
</div>
<script>
	$(document).ready(function(){		
		$("#myModal").modal({
			backdrop: "static",
			keyboard: false
		});
		
		$(function(){  
			var passElem = $("#passfld");
			passElem.focus(function() { 
				passElem.prop("type", "password");                                             
			});
		});
	});	
</script>     
</body>
</html> 
