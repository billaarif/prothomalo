<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prothom_alo";

if (isset($_SESSION['name'])) {
	
	$name = $_SESSION['name'];
}




//create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	
	die("Connection failed". mysqli_connect_error());

}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>প্রথম আলো । বাংলা নিউজ পেপার </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">
	<link rel="stylesheet" type="text/css" href="css/sport-news.css">
	<link rel="stylesheet" type="text/css" href="css/users.css">
	<link rel="icon" type="image/x-icon" style="background: none;" href="images/favicon1.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- Header Section Start -->

	<header> 
		<div class="main-menu">
			<div class="main-icon">
				<div class="logo-box-hide">
					<a href="index.php"><img src="images/logo.png"></a>
				</div>
				<div class="menu-icon-box">
					<i class="fa-solid fa-bars"></i>
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
				<div class="date-time"> 
                    <p>বুধবার, ০১ নভেম্বর ২০২৩</p>
                    <?php if (!empty($_SESSION['id'])) {
                    	echo "<p>Hi {$name} </p>";
                    }?>
                </div>
			</div>
			<div class="logo-box">
				<a href="index.php"><img src="images/logo.png"></a>
			</div>
			<div class="main-icon">
				<div class="login_button">
					<?php
						if (!empty($_SESSION['id'] ) ) {
							echo '<p class="Add-Edit"><a href="users.php">Add & Edit</a></p>';
							echo '<button> <a href="logout.php">Logout</a></button>';
						}else{
							echo '<p><i class="fa-regular fa-bell"></i></p>';
							echo '<button> <a href="login.php">Login</a></button>';
						}
					?>
				</div>
				<div class="edition"> <h4> বাংলা <span>Edition</span></h4> </div>
			</div>	
		</div>

<!-- Nave_bar Section Start -->

		<nav class="nav-bar">
            
			<div class="main-nav">
				<div class="responcive">
					<i class=" big  fa-solid fa-bars"></i>
				</div>
				<div class="nav-menu">
					<p> <a href="index.php">সর্বশেষ</a> </p>
					<p> <a href="category.php?category=politics">রাজনীতি</a> </p>
					<p> <a href="category.php?category=bangladesh">বাংলাদেশ</a> </p>
					<p> <a href="category.php?category=crime">অপরাধ</a> </p>
					<p> <a href="category.php?category=world">বিশ্ব</a> </p>
					<p> <a href="category.php?category=trade">বাণিজ্য</a> </p>
					<p> <a href="category.php?category=opinion">মতামত</a> </p>
					<p> <a href="category.php?category=sport">খেলা</a> </p>
					<p> <a href="category.php?category=entertainment">বিনোদন</a> </p>
					<p> <a href="category.php?category=job">চাকরি</a> </p>
				</div>
				<div class="responcive-2">
					<i class="big fa-solid fa-magnifying-glass"></i>
				</div>
			</div>
		</nav>
	</header>

<!-- Add Section Start -->

	<section>
		<div class="free-add">
			
		</div>
	</section>