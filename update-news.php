<?php


include("header.php");

// if (empty($_SESSION['id'])) {

//     header( "Location: http://localhost/last_alo_c/login.php" );

//     exit();
    
// }



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("config.php");

    $title = $_POST['title'];
    $category = $_POST['category'];
    $details = $_POST['details'];
    $table_name = "news";
    

$news_id = $_GET['id'];

    $sql = "UPDATE `news` SET title = '{$title}', category = '{$category}', details = '{$details}' WHERE id = '{$news_id}'";

            
   $result = mysqli_query($conn, $sql) or die("show the result");

        if (isset($result)) {
            header("Location: http://localhost/web_development_career/full_dainamic_alo/users.php");
        }else{
            echo "<p> Can Not Update Your News </p>";
        }

    
}

?>



    <section class="add_news-box-bg">
        <div class="add_news-bg">
            <div class="add_news">

                <?php

                     include("config.php");

                     $news_id = $_GET['id'];

                     $sql = "SELECT * FROM `news` WHERE id = '{$news_id}'";

                     $result = mysqli_query($conn, $sql) or die("Connection Failed");

                     if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            
                 ?>
            <form action="" method="post">
                <div class="add-news-box"> 
                    <div class="add_news_title">
                        <p class="title">Add  News</p>
                    </div>
                    <div class="title_name">
                        <label  class="title-all" for="title">News Title :</label>
                        <input type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="news title" required>
                    </div>

<!-- just display time -->

                    <div class="category">
                        <label  class="title-all" for="category">Category :</label>
                        <select name="category">
                            <option value=""><?php echo $row['category']; ?></option>
                            <option value="politics">রাজনীতি</option>
                            <option value="bangladesh">বাংলাদেশ</option>
                            <option value="crime">অপরাধ</option>
                            <option value="world">বিশ্ব</option>
                            <option value="trade">বাণিজ্য</option>
                            <option value="opinion">মতামত</option>
                            <option value="sport">খেলা</option>
                            <option value="entertainment">বিনোদন</option>
                            <option value="job">চাকরি</option>
                        </select>
                    </div>
                    <div class="news_details">
                        <label  class="title-all display-title" for="title">Details :</label>

                        <textarea style="font-size: 20px; padding: 10px;" id="details" name="details"  rows="10" cols="50">
                             <?php echo $row['details']; ?>
                        </textarea>
                    </div>
                    <div class="news_submit">
                        <input type="submit" value="Submit">
                    </div>
                </div>
                </from>

                <?php 

            }

                }
                 ?>   
            </div>
        </div>
    </section>


<?php

include("footer.php");

?> 