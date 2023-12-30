
<?php

include("header.php");

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prothom_alo";

$posts_per_page = 7;

if (isset($_GET['page'])) {

	$news_limit = ($_GET['page'] - 1 )  * $posts_per_page;

}else{
	$news_limit = 0;
}



$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	
  die("Connection failed: " . mysqli_connect_error());

}




//$category = "";

$sql = "SELECT * FROM `news`";

$sql_all = "SELECT * FROM `news` LIMIT $news_limit, $posts_per_page";

$sql_poli = "SELECT * FROM `news` WHERE category = 'politics'";
$sql_game = "SELECT * FROM `news` WHERE category = 'game'";





$result0 = mysqli_query($conn, $sql);

$result = mysqli_query($conn, $sql_all);

$poli_result = mysqli_query($conn, $sql_poli);

$game_result = mysqli_query($conn, $sql_game);




// here we get total rows numbers

			$total_rows = mysqli_num_rows($result0);

			

			


// total_page = total_rows/ $posts_per_page

			$total_page = ceil($total_rows / $posts_per_page);


//$row_game = mysqli_fetch_assoc($game_result); 

//aita dilay akta data  komay jasay kno sir



?>




<!-- Add Section Start -->


<main>
		<div class="container">

			<div class="content-area">
				<div class="content">
					
					<div class="row">
						<div class="col-1">
							<div class="featured-news">
								<div class="featured-image">
									<img src="images/news-img.jpg">
								</div>
								
								<?php if ($row = mysqli_fetch_assoc($result)) { ?>

									<div class="featured-details">
										<div class="title">
											<h2>
												<?php echo "<a href='news.php?id=".$row['id'] . "'>" . $row['title'] . "</a>"; ?>
											</h2>
										</div>

										<div class="news-details">
											<p> <?php echo $row['details']; ?> </p>

										</div>
									</div>
									
								<?php } ?>

							</div>
						</div>
					</div>

					<div class="row">

<!-- use while loop  -->
						<?php

						while ( $row = mysqli_fetch_assoc($result)) {


						?>

						<div class="col-3">
							<div class="news-card">
								<div>
									<a href="news.php?id=<?php echo $row['id']; ?>">
									    <?php echo '<img src="' . $row['poster_link'] . '">'; ?>
									</a>

								</div>
								<div>
									<div class="news-card-title">
										<h2>
											<a href="news.php?id=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a>
										</h2>
									</div>

									<div class="news-details">
										<p>
											<?php echo $row['details']; ?> 
										</p>
									</div>
								</div>
							</div>
						</div>

					<?php
					}

					?>	

<!-- while loop end	-->
				</div>

				</div>
				<div class="sidebar">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>	
		</div>
	</main>

<!-- pagination Section -->
	<section>
		<div class="container">

			<div class="content-area">

				<div class="pagination">
					
					<?php
						echo "<ul>";
	// for loop
					for ($i=1; $i < $total_page ; $i++) { 
						echo "<li> <a href=?page={$i}> {$i} </a> </li>";
							}

							echo "</ul>";
					?>
						
				</div>

			</div>	

		</div>	

	</section>

<!-- Sport section start from here -->


	<section>                    
		<div class="main-section spt-main">
			<div class="spt-main-1">
				<div class="spt-menu">
					<p class="spt-menu-p"> পঠিত </p>
					<p class="spt-menu-p"> আলোচিত </p>
					<p class="spt-menu-p"> সুখবর </p>
				</div>
				<?php while ($row_game = mysqli_fetch_assoc($game_result)) {
					
				?>
				<div class="spt-menu-box">
					<p class="number"> <?php echo $row_game['id']; ?> </p>
					<p class="stp-title"><a href="news.php?id=<?php echo $row_game['id']; ?>"> <?php echo $row_game['title']; ?></a> </p>
				</div>
				<?php } ?>
			</div>
			<div class="spt-main-2">
				<div class="heading-2-1">
					<p class="circle"></p>
					<p class="spt-menu-p">খেলা</p>
				</div>
				<div class="sport-news">
					<div class="spt-main-2-1">
						<div class="title-img">
							<img src="images/img11.png">
							<!-- <p class="img-11"> 
								সেমিফাইনালের আশা বাঁচিয়ে রাখতে নিউজিল্যান্ডের বিপক্ষে যে ব্যবধানে জিততে হবে পাকিস্তানকে 
							</p> -->
						</div>
						<div class="sub-title-img">

							<?php 
							 while ($row = mysqli_fetch_assoc($game_result)) {
								
							?>
							<div class="sub-title-img-1 border-right">
								<img src="images/img12.png">
								<p class="stp-title"> <?php echo $row['details']; ?> </p>
							</div>
						<?php } ?>


							<div class="sub-title-img-1">
								<img src="images/img13.png">
								<p class="stp-title"> পাকিস্তানের বিপক্ষে ১১ জনকে নামাতে পারবে তো নিউজিল্যান্ড </p>
							</div>
						</div>
					</div>	
					<div class="spt-main-2-2">
						<div class="aside-00">
							<img  style="max-width: 100%;" src="images/img3.png">
							<p>বাংলাদেশ দলের ঢাকায় ফেরার তাড়া বেশি, খোঁচা আকরামের</p>
						</div>
							<?php while ($row_game = mysqli_fetch_assoc($game_result)) {
					
				?>

						<div class="box-031 box-031-ex">
							<img src="images/img10.png">
							<span class="black"> সেই পাপিয়ার জামিন, মুক্তিতে ‘বাধা নেই’ </span>	
						</div>

						<?php } ?>
						
					</div>
				</div>	
			</div>
		</div>
	</section>


    <?php

include("footer.php");

?>
