
















<html>

		<head>
		<title>
		unknown
		</title>
		<link rel='stylesheet' type='text/css' href='style.css'/>
		</head>
		
		
		
		<body>
		
		
		
		
		<div id='wrapper'>
		
		<div id='header'>
		<img src='images/logo1.jpg'/ style='height:200px;width:300px;margin:0px;padding:0px;'>
		
	              <div id='login' style='float:right;margin-top:-50px;'>
	
	
	
	
	
		

				
				

			



				<div align='center'>
				<form method='post' action='login.php'>
				<table border='1' width='25%'>
				<tr><td>Name: </td><td><input type='text' name='name' maxlength='15'/></td></tr><br />
				<tr><td>Password: </td><td><input type='password' name='password' maxlength='15'/></td></tr><br />
				<tr><td>Remember me?: </td><td><input type='checkbox' name='remember'/></td></tr><br />
				</table>
				<p>
				<input type='submit' value='login' /><p>
				</form>
				<a href='form.php'>Register?</a>
				</div>

			
				
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>	
		
		</div>
		<div id='menu'>
		
		
				<ul>
				<li><a href='index.php'>Home</li></a>
				<li><a href='about.php'>About</li></a>
				<li><a href='elearning.php'>Elearning</li></a>
				<li><a href='search.php'>Search</li></a>
				<li><a href='contact.php'>Contact</li></a>
				
				
				
				
				</ul>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</div>
		<div id='content'>
		

		
		
		<h3 style='border:2px solid green;'>
						
								<h3>Edit User: <?php echo base64_decode($_REQUEST['names']);?></h3>

				<form ENCTYPE="multipart/form-data" method="POST" action="change.php">
				<table border="1" width="60%">

				<tr><td width="30%">Name: </td><td><input type="text" name="newname" 
				value="<?php echo base64_decode($_REQUEST['names']);?>"> </td></tr>

				<tr><td width="30%">Email: </td><td><input type="text" name="newemail" 
				value="<?php echo base64_decode($_REQUEST['emails']);?>"> </td></tr>

				<tr><td width="30%">New Password: </td><td><input type="password" name="newpassword" 
				value=""> </td></tr></table><p>

				Change picture:<input type='file' name='newupload' /><p>

				<input type="submit" name="submit" value="Save & Update" />
				<input type="hidden" name="id" value="<?php echo base64_decode($_REQUEST['ids']);?>">
				</form>



				<?php include('links.php'); ?>
		
		</h3>
		
		

	
		
		
		</div>
	
		<div id='footer'>
		
		
		
		
		
		</div>
		
		
		</div>
		
		
		
		
		
		
		
		
		
		
		</body>


</html>





























