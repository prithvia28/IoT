<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "library1";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


  
$query="select * from student";
$result= mysqli_query($conn,$query);

$conn -> close();
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
		.table{
			color: white;
			position: absolute;
			top: 150px;
			left: 400px;
		border-color: white;
		
		}
		</style>
        
	</head>
	<body>
		<div class="container">
		   	<table class="table" margin-right="centre" border="1px" style="width: 600px; line-height: 40px;">
			<tr>
				<th colspan="5"><h2>Student Record</h2></th>
			</tr>
			<t>
				<th>Student id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Class</th>
				
			</t>
			<?php
			while($rows=mysqli_fetch_assoc($result))
			{
			?>
				<tr>
					<td><?php echo $rows['s_id'] ?></td>
					<td><?php echo $rows['name'] ?></td>
					<td><?php echo $rows['email'] ?></td>
					<td><?php echo $rows['class'] ?></td>
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
									<!--<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul>-->
								</li>
								<li><a class="gn-icon gn-icon-article" href="http://localhost/GoogleNexusWebsiteMenu/table.php">Students Info</a></li>
								<li><a class="gn-icon gn-icon-article" href="http://localhost/GoogleNexusWebsiteMenu/warnings.php">Warnings</a></li>
								<li><a class="gn-icon gn-icon-archive" href="http://localhost/GoogleNexusWebsiteMenu/list.php">Blacklist</a></li>
								<!--<li>
									<a class="gn-icon gn-icon-archive">Archives</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul>
								</li>-->
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
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>