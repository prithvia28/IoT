<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "library1";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


  
$query="select s.s_id,s.name,s.email,s.class, count(v.s_id) as warnings from student as s, permanent_data as v where s.s_id=v.s_id and v.date BETWEEN '2019-10-13' AND '2019-11-14' group by v.s_id having s.s_id=v.s_id and warnings>30";
$result= mysqli_query($conn,$query);
// $query1="select s.s_id,s.name,s.email,s.class, count(v.s_id) as warnings from student as s, violations as v group by v.s_id having s.s_id=v.s_id and warnings>5" ;
// $result1= mysqli_query($conn,$query1);
$query1="select count(s_id) from permanent_data where time BETWEEN '8:00:00' AND '12:00:00'";
$result1= mysqli_query($conn,$query1);
$query2="select count(s_id) from permanent_data where time BETWEEN '12:00:01' AND '17:00:00'";
$result2= mysqli_query($conn,$query2);
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<style>
		.table{
			color: white;
			position: absolute;
			top: 150px;
			left: 400px;
		border-color: white;
		}
		.table1{
			color: white;
			position: absolute;
			bottom: 50px;
			left: 400px;
		border-color: white;
		}
		
		p{
			color:white;	
		}
		.button {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
		</style>
		
        
	</head>
	<body>
		<div class="container">
		   	<table class="table" margin-right="centre" border="1px" style="width: 600px; line-height: 40px;">
			<tr>
				<th colspan="5"><h2>List of students with warnings>30 in a month</h2></th>
			</tr>	
			<tr>
				<th>Student id</th>
				<th>Name</th>
				<th>Email</th>
                <th>Class</th>
                <th>Warnings</th>
				
			</tr>
			<?php
			
			while($rows=mysqli_fetch_assoc($result))
			{
				
			?>
				<tr>
					<td><?php echo $rows['s_id'] ?></td>
					<td><?php echo $rows['name'] ?></td>
					<td><?php echo $rows['email'] ?></td>
					<td><?php echo $rows['class'] ?></td>
					<td><?php echo $rows['warnings'] ?></td>
				</tr>
			<?php
			}
			?>
           </table> 
           <?php
           $rows1=mysqli_fetch_assoc($result1);
           $rows2=mysqli_fetch_assoc($result2);
           ?>
           <p style="margin-top:400px;margin-left:350px;font-family: 'Times New Roman', Times, serif;
  font-size:30px;">Number of violations between 8:00 to 12:00: <?php echo $rows1['count(s_id)'] ?> violations</p>
  <p style="margin-top:100px;margin-left:350px;font-family: 'Times New Roman', Times, serif;
  font-size:30px;">Number of violations between 12:00 to 17:00: <?php echo $rows2['count(s_id)'] ?> violations</p>
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
			new gnMenu( document.getElementById( 'gn-menu' ) );
		
		</script>
	</body>
</html>