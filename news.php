<?php

include("header.php");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prothom_alo";


$page_id = $_GET['id'];

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT * FROM `news` WHERE id = {$page_id}";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);



?>

    <section>
		<div class="main-details">
			<div class="main-details-1">
				<div class="heading-box-1">
					<p> <a href="#"> টেলিভিশন </a></p>
					<h2><?php echo $row['title']; ?></h2>
					<div class="social">
						<div class="socil-icon-1">
							<p><?php echo $row['category']; ?></p>
						</div></p>
							<p><?php echo $row['date']; ?></p>
						</div>
						<div class="socil-icon-2">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-tiktok"></i>
							<i class="fa-brands fa-linkedin"></i>
							<i class="fa-brands fa-youtube"></i>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>

<section>
		<div class="main-details">
			 <div class="read-news">
			 	<div class="news-box">
			 		<div class="news-img">
			 			<img src="images/news1.png">
			 			<p>আজ ৪ নভেম্বর, কাণ্ডজ্ঞান খাটানোর দিনছবি: সংগৃহীত</p>
			 		</div>
			 		<div class="news-info">
			 			<p><?php echo $row['details'] ?></p>
			 		</div>
			 		<div class="news-info-writter">
			 			<p>ডেজ অব দ্য ইয়ার অবলম্বনে </p>
			 		</div>
			 		<div class="button-3">
			 			<p> <a href="#">একটু থামুন </a>থেকে আরও পড়ুন </p>
			 			<button> <a href="">বিচিত্র খবর</a> </button>
			 			<button> <a href="">একটু থামুন</a> </button>
			 			<button> <a href="">বিলিভ ইট অর নট</a> </button>
			 		</div>
			 	</div>
			 	<div class="aside-ad">
			 		<div class="free-add-2"> 
						<img src="image/img.png"> 
						<p><a href="#">বিচিত্র খবর নিয়ে আরও পড়ুন</a></p>
					</div>
					<div class="aside-news">
						<div class="aside-news-title">
							<p><a href="#">চুরির এক যুগ পর চিরকুটে ক্ষমা চেয়ে টাকা ফেরত দিল চোর</a> </p>
						</div>
						<div class="aside-news-read">
							<p> <a href="#">গত মঙ্গলবার রাতের কোনো এক সময়ে ওই বাজারের পোলট্রি ব্যবসায়ী কাইয়ুম...</a> </p>
							<p class="aside-news-img">
							 	<a href="#"> <img src="images/img8.png"> </a>
							 </p>
						</div>
					</div>
					<div class="aside-news">
						<div class="aside-news-title">
							<p><a href="#">চুরির এক যুগ পর চিরকুটে ক্ষমা চেয়ে টাকা ফেরত দিল চোর</a> </p>
						</div>
						<div class="aside-news-read">
							<p> <a href="#">গত মঙ্গলবার রাতের কোনো এক সময়ে ওই বাজারের পোলট্রি ব্যবসায়ী কাইয়ুম...</a> </p>
							<p class="aside-news-img">
							 	<a href="#"> <img src="images/img8.png"> </a>
							 </p>
						</div>
					</div>
					<div class="free-add-2"> 
						<img src="image/img.png"> 
						<p><a href="#">বিচিত্র খবর নিয়ে আরও পড়ুন</a></p>
					</div>
			 	</div>
			 </div>
		</div>
	</section>


<?php

include("footer.php");

?>
