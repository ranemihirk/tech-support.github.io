<html>

	<head>
		<title>FAQs</title>
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
					<li><a href="form.php" >Issue</a></li>
					<li><a href="services.html">Services</a></li>
			  		<li><a href="about.html">AboutUs</a></li>
			  		<li><a href="about.html#contact">ContactUs</a></li>
			  		<li class="active"><a href="faq.php">FAQs</a></li>
				</ul>
			</div>
		</div>

		<div class=banner>
		<div class="clear">
		<div class="ques">
			<table>
				<tr>
				    <th >First Name</th>
				    <th >Last Name</th>
				    <th >Issue</th>
				</tr>
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
				
				$sql = "SELECT fname, lname, issue FROM report";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) 
				    {
					echo "<tr>";
					echo "<td>".$row['fname']."</td>";
					echo "<td>".$row['lname']."</td>";
					echo "<td>".$row['issue']."</td>";
					echo "</tr>";
				    }
				} else {
				    echo "0 results";
				}
				$conn->close();
			?> 
			</table>
		<div class="clear1">
			<section id="contact">
				<div class="contactus" align="center">
					<form class="query" action="mailto:mihir@xdistro.xyz" method="post" enctype="text/plain" >
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
