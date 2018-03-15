<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index1.php" class="logo"><strong>Developed</strong> by MidWan</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>


							<!-- Content -->
								<section>
									<header class="main">
										<h1>Student's Fees Record</h1>
									</header>




									<h2 align="center"><p class="large"><font color="black"><b>Setia Tropika Branch</b></p></h2>
                                        <table border="1px" width="100%" color="black">
                                          <tr>
                                            <th><font color="black"><b>Student ID</font></th>
                                            <th><font color="black"><b>Name</font></th>
                                            <th><font color="black"><b>January</font></th>
                                            <th><font color="black"><b>February</font></th>
                                            <th><font color="black"><b>March</font></th>
                                            <th><font color="black"><b>April</font></th>
                                            <th><font color="black"><b>May</font></th>
                                            <th><font color="black"><b>June</font></th>
                                            <th><font color="black"><b>July</font></th>
                                            <th><font color="black"><b>August</font></th>
                                            <th><font color="black"><b>September</font></th>
                                            <th><font color="black"><b>October</font></th>
                                            <th><font color="black"><b>November</font></th>
                                            <th><font color="black"><b>December</font></th>
                                            <th><font color="black"><b>Payment</font></th>
                                          </tr>
                                          <?php
                                            mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
                                            mysql_select_db("first_db") or die("Cannot connect to database"); //connect to database
                                            $query = mysql_query("Select * from list WHERE branch='setia tropika'"); // SQL Query


                                            //initialize var months
                                            $jan = 0;
                                            $feb = 0; 
                                            $mac = 0;
                                            $april = 0;
                                            $may = 0; 
                                            $jun = 0; 
                                            $july = 0; 
                                            $aug = 0; 
                                            $sept = 0; 
                                            $oct = 0; 
                                            $nov = 0; 
                                            $dec = 0;

                                            while($row = mysql_fetch_array($query))
                                            {
                                              Print "<tr>";
                                                Print '<td align="center">'. $row['id'] . "</td>";
                                                Print '<td align="center">'. $row['details'] . "</td>";
                                                Print '<td align="center">'. $row['jan']. "</td>";
                                                Print '<td align="center">'. $row['feb']. "</td>";
                                                Print '<td align="center">'. $row['mac']. "</td>";
                                                Print '<td align="center">'. $row['april']. "</td>";
                                                Print '<td align="center">'. $row['may']. "</td>";
                                                Print '<td align="center">'. $row['jun']. "</td>";
                                                Print '<td align="center">'. $row['july']. "</td>";
                                                Print '<td align="center">'. $row['aug']. "</td>";
                                                Print '<td align="center">'. $row['sept']. "</td>";
                                                Print '<td align="center">'. $row['oct']. "</td>";
                                                Print '<td align="center">'. $row['nov']. "</td>";
                                                Print '<td align="center">'. $row['dece']. "</td>";
                                                Print '<td align="center"><a href="updatefees.php?id='. $row['id'] .'">Update</a></td>';
                                              Print "</tr>";
                                                
                                              //Sum value each months
                                                $jan += $row['jan'];
                                                $feb += $row['feb']; 
                                                $mac += $row['mac'];
                                                $april += $row['april'];
                                                $may += $row['may']; 
                                                $jun += $row['jun']; 
                                                $july += $row['july']; 
                                                $aug += $row['aug']; 
                                                $sept += $row['sept']; 
                                                $oct += $row['oct']; 
                                                $nov += $row['nov']; 
                                                $dec += $row['dece'];

                                            }

                                            //Print total value
                                            Print "<tr>";
                                                Print '<td align="center">'."</td>";
                                                Print '<td align="center">'."</td>";
                                                Print '<td align="center">'. $jan . "</td>";
                                                Print '<td align="center">'. $feb . "</font></td>";
                                                Print '<td align="center">'. $mac . "</font></td>";
                                                Print '<td align="center">'. $april . "</font></td>";
                                                Print '<td align="center">'. $may . "</font></td>";
                                                Print '<td align="center">'. $jun . "</font></td>";
                                                Print '<td align="center">'. $july. "</font></td>";
                                                Print '<td align="center">'. $aug. "</font></td>";
                                                Print '<td align="center">'. $sept. "</font></td>";
                                                Print '<td align="center">'. $oct. "</font></td>";
                                                Print '<td align="center">'. $nov. "</font></td>";
                                                Print '<td align="center">'. $dec. "</font></td>";

                                              Print "</tr>";
                                          ?>
                                        </table>






				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">



							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index1.php">Homepage</a></li>
										<li><a href="userinfo.php">User Information</a></li>
										<li><a href="addstudent.php">Add Student</a></li>										
										<li><a href="studentinfo.php">Student Information</a></li>
										<li>
                                            <span class="opener">Fees Record</span>
                                            <ul>
                                                <li><a href="bandarputrarecord.php">Bandar Putra Branch</a></li>
                                                <li><a href="bukitindahrecord.php">Bukit Indah Branch</a></li>
                                                <li><a href="johorbahrurecord.php">Johor Bahru Branch</a></li>
                                                <li><a href="johorjayarecord.php">Johor Jaya Branch</a></li>
                                                <li><a href="mutiararinirecord.php">Mutiara Rini Branch</a></li>
                                                <li><a href="pasirgudangrecord.php">Pasir Gudang Branch</a></li>
                                                <li><a href="pulaiperdanarecord.php">Pulai Perdana Branch</a></li>
                                                <li><a href="setiatropikarecord.php">Setia Tropika Branch</a></li>
                                                <li><a href="skudairecord.php">Skudai Branch</a></li>
                                                <li><a href="sriputrirecord.php">Sri Putri Branch</a></li>
                                                <li><a href="tamannusaperintis.php">Taman Nusa Perintis Branch</a></li>
                                                <li><a href="tamanuniversitirecord.php">Taman Universiti Branch</a></li>
                                            </ul>
                                        </li>										<li>
											<span class="opener">Dynamic Report</span>
											<ul>
												<li><a href="bargraf.php">Monthly Profit</a></li>
												<li><a href="annual.php">Annual Profit</a></li>
											</ul>
										</li>
                                        <li><a href="logout.php">Log Out</a></li>

									</ul>
								</nav>


                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>Get in touch</h2>
                                    </header>
                                    <p>Any inquiries please contact the moderator through the list of contact option below:</p>
                                    <ul class="contact">
                                        <li class="fa-envelope-o"><a href="#">S.Aizad93@gmail.com</a></li>
                                        <li class="fa-phone">+6 016 221 9858</li>
                                        <li class="fa-facebook"><a href="https://web.facebook.com/syazwan.aizad?ref=bookmarks">Facebook</a></li>
                                    </ul>
                                </section>



							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>


	</body>
</html>