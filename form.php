<html>

	<head>
		<title>Issue</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="all" />
		
		<script>
			function doc()
			{
		
				var name1,a,pass,mail,dot,len,atrate,add;
				name1=document.myForm.first.value;
				name2=document.myForm.last.value;
				a=document.myForm.number.value;
				mail=document.myForm.email.value;
				add=document.myForm.prblm.value;
				dot=mail.indexOf(".");
				atrate=mail.indexOf("@");
				len=a.length;
	
				if(name1=="" || name2=="")
				{
					alert("Enter a name.");
					return false;
				}
				else if(len<10)
				{
					alert("Invalid number.");
					return false;
				}
				else if(dot==-1 || atrate==-1)
				{
					alert("Enter a valid email address.");
					return false;
				}
				else
				{
					alert("Information Successfully Submitted.");
					return true;
				}
	
			}
		</script>

	</head>

	<body>
		<div class="header">
			<div class="logo">
				<a href="index.html"><img src="images/logo1.png"></a>
			</div>
			<div class="top-menu">
				<ul>
					<li><a href="index.html" >Home</a></li>
					<li class="active"><a href="form.php" >Issue</a></li>
					<li><a href="services.html">Services</a></li>
			  		<li><a href="about.html">AboutUs</a></li>
			  		<li><a href="about.html#contact">ContactUs</a></li>
			  		<li><a href="faq.php">FAQs</a></li>
				</ul>
			</div>
		</div>

		<div class=banner>
		<div class="clear">
		<div class="validate">
			<form class="myForm" id="form" method="post" action="default.php" onsubmit="return doc()">

				<center>
	
				<legend id="l"> <h1>Register Your Issue</h1> </legend>
	
				<b>Name:<br></b>
				<input type="text" name="first" placeholder="FirstName">
				<input type="text" name="last" placeholder="LastName"><br><br><br>

				<b>Email:<br></b>
				<input type="text" name="email" placeholder="example@gmail.com"/><br><br><br>

				<b>Phone No:<br></b>
				<input type="text" name="number" placeholder="+91-**********"/><br><br><br>

				<b>Issue:<br></b>
				<textarea name="prblm" rows=4 cols=25 placeholder="Enter Your Issue"></textarea><br><br>

				<input type="submit" value="Submit">&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset">
	
				</center>

			</form>
			
		</div>
		</div>
		</div>

		<div class="footer">
			<div class="footer-grid">
				<img src="images/abt.png"/>
				<p>Copyright &copy; 2016 TechForU - All Rights Reserved</p>

			</div>
		</div>

	</body>

</html>
