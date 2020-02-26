<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "library1";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);



// $query="select s.s_id,s.name,s.email,s.class, count(v.s_id) as warnings from student as s, violations as v group by v.s_id having s.s_id=v.s_id and warnings>10 and status=1" ;
$query = "select * from student where status=1";
$result = mysqli_query($conn, $query);
$red = mysqli_num_rows($result);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Library</title>
	<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
	<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
	<style>
		.table {
			color: white;
			position: absolute;
			top: 400px;
			left: 400px;
			border-color: white;

		}

		.shape {
			position: absolute;

			height: 150px;
			width: 300px;
			background-color: white;
			border-radius: 80px;
			margin-bottom: 30px;
			float: left;
			margin-right: 20px;
		}

		.chair {
			position: absolute;

			height: 50px;
			width: 50px;
			background-color: white;

			margin-bottom: 30px;
			float: left;
			margin-right: 20px;
		}

		.chair1 {
			left: 250px;
			top: 90px;
		}

		.chair2 {
			left: 400px;
			top: 90px;
		}

		.chair3 {
			left: 250px;
			top: 320px;
		}

		.chair4 {
			left: 400px;
			top: 320px;
		}

		.chair5 {
			left: 850px;
			top: 90px;
		}

		.chair6 {
			left: 1000px;
			top: 90px;
		}

		.chair7 {
			left: 850px;
			top: 320px;
		}

		.chair8 {
			left: 1000px;
			top: 320px;
		}

		.shape1 {
			border-radius: 1px;
			left: 200px;
			top: 150px;
		}

		.shape2 {
			border-radius: 1px;
			left: 800px;
			top: 150px;
		}

		.shape3 {
			border-radius: 1px;
			left: 200px;
			top: 400px;
		}

		.shape4 {
			border-radius: 1px;
			left: 800px;
			top: 400px;
		}

		.red {
			background-color: red;
		}

		p {
			color: black;
			font-family: courier;
			font-size: 160%;
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="container">
		<?php
		if ($red == 1) {
			?>
			<div class="shape shape1">
				<p>Table 1</p>
			</div>
			<div class="shape shape2">
				<p>Table 2</p>
			</div>
			<div class="chair chair1 red"></div>
			<div class="chair chair2"></div>
			<div class="chair chair3"></div>
			<div class="chair chair4"></div>
			<div class="chair chair5"></div>
			<div class="chair chair6"></div>
			<div class="chair chair7"></div>
			<div class="chair chair8"></div>

		<?php
		} elseif ($red == 2) {
			?>
			<div class="shape shape1">
				<p>Table 1</p>
			</div>
			<div class="shape shape2">
				<p>Table 2</p>
			</div>
			<div class="chair chair1 red"></div>
			<div class="chair chair2 red"></div>
			<div class="chair chair3"></div>
			<div class="chair chair4"></div>
			<div class="chair chair5"></div>
			<div class="chair chair6"></div>
			<div class="chair chair7"></div>
			<div class="chair chair8"></div>

		<?php
		} else {
			?>
			<div class="shape shape1">
				<p>Table 1</p>
			</div>
			<div class="shape shape2">
				<p>Table 2</p>
			</div>
			<div class="chair chair1"></div>
			<div class="chair chair2"></div>
			<div class="chair chair3"></div>
			<div class="chair chair4"></div>
			<div class="chair chair5"></div>
			<div class="chair chair6"></div>
			<div class="chair chair7"></div>
			<div class="chair chair8"></div>
		<?php
		}
		?>

		<table class="table" margin-right="centre" border="1px" style="width: 600px; line-height: 30px;">
			<tr>
				<th colspan="5">
					<h2>Student Record</h2>
				</th>
			</tr>
			<tr>
				<th>Student id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Class</th>
				<!-- <th>Warnings</th> -->

			</tr>
			<?php
			while ($rows = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $rows['s_id'] ?></td>
					<td><?php echo $rows['name'] ?></td>
					<td><?php echo $rows['email'] ?></td>
					<td><?php echo $rows['class'] ?></td>
					<!-- <td><?php echo $rows['warnings'] ?></td> -->
				</tr>
			<?php
			}
			?>


		</table>
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<li class="gn-search-item">
								<input placeholder="Search" type="search" class="gn-search">
								<a class="gn-icon gn-icon-search" href="http://localhost/GoogleNexusWebsiteMenu/search.php"><span>Search</span></a>
							</li>
							<li>
								<a class="gn-icon gn-icon-archive" href="http://localhost/GoogleNexusWebsiteMenu/layout.php">Layout</a>

							<li><a class="gn-icon gn-icon-article" href="http://localhost/GoogleNexusWebsiteMenu/table.php">Students Info</a></li>
							<li><a class="gn-icon gn-icon-article" href="http://localhost/GoogleNexusWebsiteMenu/warnings.php">Warnings</a></li>
							<li><a class="gn-icon gn-icon-archive" href="http://localhost/GoogleNexusWebsiteMenu/list.php">Blacklist</a></li>

						</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>
			<li><a href="landing.html"><span>Home</span></a></li>
			<li><a href="http://localhost/Login_v18/index.php"><span>Logout</span></a></li>
		</ul>


	</div><!-- /container -->

	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script>
		new gnMenu(document.getElementById('gn-menu'));
		setTimeout(function() {
			location.reload();
		}, 3000);
	</script>
</body>

</html>