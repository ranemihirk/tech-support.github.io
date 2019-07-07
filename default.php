<html>

	<head>
		<title>Successful</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="all" />
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
		<div class="success">
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "tech-support";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$fname=$_POST['first'];
			$lname=$_POST['last'];
			$email=$_POST['email'];
			$no=$_POST['number'];
			$issue=$_POST['prblm'];
			$sql = "insert into report (fname, lname, email, number, issue)
			values ('".$fname."', '".$lname."', '".$email."', '".$no."','".$issue."');";


			if (mysqli_query($conn, $sql)) {
			    echo "Issue Submitted.";
			} 
			else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}



			mysqli_close($conn);
		?>


		<div class="clear1">
			<section id="contact">
				<div class="contactus" align="center">
					<form id="query" action="mailto:mihir@xdistro.xyz" method="post" enctype="text/plain" >
						<legend>Ask a Question</legend>
						<input type="text" placeholder="Name" name="name"/><br />
						<input type="text" placeholder="Number" name="number"/><br />
						<input type="text" placeholder="Email" name="mail"/><br />
						<input type="text" placeholder="Question" name="question"/><br />
						<input type="submit" value="Send" name="submit"/>
					</form>
				</div>
			</section>
		</div>
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
