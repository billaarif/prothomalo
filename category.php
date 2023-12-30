<?php

include "header.php";

global $conn;

$category = "";

if (isset($_GET['category'])) {

	$category = $_GET['category'];

}
// $category_page = 

//$_GET['category=politics'];
	

$posts_per_page = 9;

if (isset($_GET['page'])) {

	$news_limit = ($_GET['page'] - 1 )  * $posts_per_page;

	// sir ai page ar value tai to url a paci na 

}else{
	$news_limit = 0;
}

$sql = "SELECT * FROM `news` WHERE category = '{$category}' LIMIT $news_limit, $posts_per_page";

$sql1 = "SELECT * FROM `news` WHERE category = '{$category}'";

$result = mysqli_query($conn, $sql);

$result1 = mysqli_query($conn, $sql1);




$total_rows = mysqli_num_rows($result1);
$total_page = intval( ceil($total_rows / $posts_per_page) );






?>


<main>
		<div class="container">

			<div class="content-area">
				<div class="content">
					
					

					<div class="row">

<!-- use while loop  -->
						<?php

						while ( $row = mysqli_fetch_assoc($result)) {


						?>

						<div class="col-3">
							<div class="news-card">
								<div>
									<img src="images/news-img.jpg">
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
						$param = "?page=";	
						if ( $category != "" ) {
							$param = "?category={$category}&page=";
						}
					for ($i=1; $i <= $total_page ; $i++) { 
						echo "<li> <a href={$param}{$i}> {$i} </a> </li>";
							}

							echo "</ul>";
					?>
						
				</div>

			</div>	

		</div>	

	</section>

<!-- Sport section start from here -->


    <?php

include("footer.php");

?>
