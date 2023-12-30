


<?php


include("header.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $journalist_id = $_SESSION['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    //$folder = $_POST['poster_link'];
    $category = $_POST['category'];
    $details = $_POST['details'];
    $table_name = "news";




        $file_name = $_FILES['poster_link']['name'];
        $tmp_name = $_FILES['poster_link']['tmp_name'];
        
        
        $folder = "images/".$file_name;

        move_uploaded_file($tmp_name, $folder);

        

        //$image_link = "img/ ". $file_name;
   


    $sql = "INSERT INTO $table_name (`journalist_id`, `title`, `date`, `category`, `details`, `poster_link`) VALUES ($journalist_id, '$title', ' $date', '$category', '$details', '$folder')";

            
    $result = mysqli_query($conn, $sql) or die("show the result");

 
    
};

?>



    <section class="add_news-box-bg">
        <div class="add_news-bg">
            <div class="add_news">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="add-news-box"> 
                    <div class="add_news_title">
                        <p class="title">Add  News</p>
                    </div>
                    <div class="title_name">
                        <label  class="title-all" for="title">News Title :</label>
                        <input type="text" name="title" placeholder="news title" required>
                    </div>
                    <div class="category">
                        <label  class="title-all" for="category">Category :</label>
                        <select name="category">
                            <option value="">Select Option</option>
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
                    <div class="add_time">
                        <label  class="title-all" for="title">Date Time :</label>
                        <input class="date"  type="date" name="date">
                    </div>
                    <div class="add_file">
                        <label  class="title-all" for="title">Images :</label>
                        <input class="file"  type="file" name="poster_link" multiple>
                    </div>
                    <div class="news_details">
                        <label  class="title-all display-title" for="title">Details :</label>

                        <textarea style="font-size: 20px;" id="details" name="details" rows="7" cols="30">

                        </textarea>
                    </div>
                    <div class="news_submit">
                        <input type="submit" value="Submit">
                    </div>
                </div>
                </from>   
            </div>
        </div>
    </section>


<?php

include("footer.php");

?>    