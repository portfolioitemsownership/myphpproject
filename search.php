
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
		

		
	
		
								<?php session_start(); ?>

								<center>
								<form method="GET" action="search.php">

									<input type="text" name="search">
									<input type="submit" name="submit" value="search database">

								</form>
								</center>
								<hr />
								<u>Results:</u>&nbsp

								<?php

								if(!isset($_SESSION['name'])){

								echo "Access denied!";

								}else{

								if(isset($_REQUEST['submit'])) {

									$search = $_GET['search'];
									$terms = explode(" ", $search);
									$query = "SELECT * FROM users WHERE ";
									
									$i=0;
									foreach($terms as $each){		
										$i++;
										if($i==1){
											$query .= "concat_ws('',name,email) LIKE '%$each%' ";
										}else{
											$query .= "OR concat_ws('',name,email) LIKE '%$each%' ";
										}
									}
									
									mysql_connect("localhost", "root", "");
									mysql_select_db("testsite");
									
									$query = mysql_query($query);
									$num = mysql_num_rows($query);
									
									if($num > 0 && $search!=""){
									
										echo "$num result(s) found for <b>$search</b>!";
									
										while($row = mysql_fetch_assoc($query)){
										
											$id = $row['id'];
											$name = $row['name'];
											$email = $row['email'];
											$password = $row['password'];
										
											echo "<br /><h3>name: $name(id: $id)</h3>email: $email<br />password: $password<br />";
										
										}
									
									} else {
									
										echo "No results found!";
									
									}

									mysql_close();

								} else {

									echo "Please type any word...";

								}

								}

								?>

	

	
		
		
		</div>
	
		<div id='footer'>
		
		
		
		
		
		</div>
		
		
		</div>
		
		
		
		
		
		
		
		
		
		
		</body>


</html>










































