<?php

/*$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "library";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$output=NULL;
$search =$_POST['id'];

  
$query="select * from student where s_id='$search'";
$result= mysqli_query($conn,$query);


$conn -> close();*/
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
    p{color:white;
font-family: courier;
  font-size: 160%;
  text-align: center;
top: 200px;
}
.details{
    color:white;
font-family: 'Times New Roman', Times, serif;
  font-size: 160%;
  position: absolute;
top: 150px;
left: 400px;

}
.search{
	position: absolute;
top: 55px;
left: 220px;	
}
.table{
			position: absolute;
			top: 150px;
			left: -20%;
		border-color: white;
		
		}
.warnings{
	position: absolute;
	font-family: 'Times New Roman', Times, serif;
  font-size: 100%;
			top: 200px;
			left: -20%;
}
    </style>
	</head>
	<body>
		<div class="container">
            <form class="details" method="POST">
					Student id: <input type="text" name="id"><br>
					<input type="submit" name="search" value="Search" class="search" />
					
					<?php

					
					$dbhost = "localhost";
					$dbuser = "root";
					$dbpass = "";
					$db = "library";

					$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
					$output=NULL;
				if(isset($_POST['search']))
				{
					$search =$_POST['id'];

					
					$query="select * from student where s_id='$search'";
					$query2="select count(s_id) from violations where s_id='$search'";
					$result= mysqli_query($conn,$query);
					$warnings=mysqli_query($conn,$query2);
					


					$conn -> close();
					?>
					<table class="table"  border="1px" style="width: 800px; line-height: 25px;">
			
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
				
				while($rows1=mysqli_fetch_assoc($warnings))
			{
				?>
				<p class="warnings">Number of warnings: <?php echo $rows1['count(s_id)'] ?> </p>
			<?php
			}
			}
			?>
    
            </form>
        
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