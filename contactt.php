		        <html>

				<head>
		
				<link rel='stylesheet' type='text/css' href='style.css'/>
					
				</head>
				
				
			
				<body>
				
				
				
				
				<div id='wrapper'>
				
				<div id='header'>
				<img src='images/logo1.jpg'/ style='height:200px;width:200px;float:left;margin:0px;padding:0px;'>
							
				
				
				
				
				
				 <div id='login' style='float:right;margin-top:-50px;'>
			      
                    </div>	
				
				</div>
				<div id='menu'>
				
				
						<ul>
						<li><a href='index.php'>Home</li></a>
						<li><a href='aboutt.php'>About</li></a>
						<li><a href='regi.php'>registration</li></a>
						<li><a href='routine.php'>Your Class Routine</li></a>
						<li><a href='contactt.php'>Contact US</li></a>
						</ul>
						
						 <div class='shaown2'>
					<img src="images/dg8.gif" name="hr1"><img 
					src="images/dg8.gif" name="hr2"><img 
					src="images/dgc.gif"><img 
					src="images/dg8.gif" name="mn1"><img 
					src="images/dg8.gif" name="mn2"><img 
					src="images/dgc.gif"><img 
					src="images/dg8.gif" name="se1"><img 
					src="images/dg8.gif" name="se2"><img 
					src="images/dgam.gif" name="ampm"></div>

					<script type="text/javascript">
					// (c) 2000-2014 ricocheting.com
					dg = new Array();
					dg[0]=new Image();dg[0].src="dg0.gif";
					dg[1]=new Image();dg[1].src="dg1.gif";
					dg[2]=new Image();dg[2].src="dg2.gif";
					dg[3]=new Image();dg[3].src="dg3.gif";
					dg[4]=new Image();dg[4].src="dg4.gif";
					dg[5]=new Image();dg[5].src="dg5.gif";
					dg[6]=new Image();dg[6].src="dg6.gif";
					dg[7]=new Image();dg[7].src="dg7.gif";
					dg[8]=new Image();dg[8].src="dg8.gif";
					dg[9]=new Image();dg[9].src="dg9.gif";
					dgam=new Image();dgam.src="dgam.gif";
					dgpm=new Image();dgpm.src="dgpm.gif";

					function dotime(){ 
						var d=new Date();
						var hr=d.getHours(),mn=d.getMinutes(),se=d.getSeconds();

						// set AM or PM
						document.ampm.src=((hr<12)?dgam.src:dgpm.src);

						// adjust from 24hr clock
						if(hr==0){hr=12;}
						else if(hr>12){hr-=12;}

						document.hr1.src = getSrc(hr,10);
						document.hr2.src = getSrc(hr,1);
						document.mn1.src = getSrc(mn,10);
						document.mn2.src = getSrc(mn,1);
						document.se1.src = getSrc(se,10);
						document.se2.src = getSrc(se,1);
					}

					function getSrc(digit,index){
						return dg[(Math.floor(digit/index)%10)].src;
					}

					window.onload=function(){
						dotime();
						setInterval(dotime,1000);
					}

					</script>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
				</div>
				<div id='content'>
				<div id='cont'>
				
				
				
				<h1 style='float:left;	margin:0px;color:#fff;border-bottom:2px dotted #fff;'>
				Contact
				</h1>
				<p style='float:left;background:#49ACA9;margin-top:15px;margin-left:80px;'>
				You can simply communicate with me.
				</p>
				<form method='post' action='simpleform.php'>
				
				<div id='left1'>
				<p style='margin-bottom:17px;'>
				Name</br>
				</p>
				<input type='text' name='cname'>
				<p style='margin-bottom:17px;'>
				Email</br>
				</p>
				<input type='email' name='cname'>
				<p style='margin-bottom:17px;'>
				Phone no:</br>
				</p>
				<input type='text' name='cname'>
				<h3 style='color:#fff;'>
				Tell me a little about my work
				</h3>
				
							<textarea cols='45'  rows='4' name='kkkk'>
							
							
								
							
							</textarea>
							<input type='submit' value='Go'>
				
				</div>
				<div id='left2'>
				<p style='margin-bottom:17px;'>
				Web Address</br>
				</p>
				<input type='text' name='cname'>
				<p style='margin-bottom:17px;'>
				FB id</br>
				</p>
				<input type='text' name='cname'>
				<p style='margin-bottom:17px;'>
				Phone no:</br>
				</p>
				<input type='textarea' name='cname'>
				</div>
				
				
				
				
				
				
				</form>
				</div>
				</div>
				
			
				<div id='footer'>
			

				
				
				</div>
				</div>
				
				
				
				
				
				
				
				
				
				
		
				</body>


		</html>



















