<?php include "header.php"; 


if (empty($_SESSION['id'])) {

    header( "Location: http://localhost/last_alo_c/login.php" );

    exit();
    
}

$journalist_id = $_SESSION['id'];

$sql = "SELECT * FROM `news` WHERE journalist_id = {$journalist_id} ORDER BY id DESC";

$result = mysqli_query($conn, $sql) or die("Connection Failed");


?>
      <div class="container-100">
        
        <div class="user-head">
          <div>
            <h1>All News</h1>
          </div>
          <div>
            <p class="u-add-news"><a href="submit-news.php">  add news </a> </p>
          </div>    
        </div>
          <div class="u-table">
          <?php 

            if (mysqli_num_rows($result) > 0) {

         ?>
            <table class="content-table">
                <thead>
                    <th class="SNo">S.No.</th>
                    <th class="Title">Title</th>
                    <th class="Data">Data</th>
                    <th class="Edit">Edit</th>
                    <th class="Delete">Delete</th>
                </thead>
               <tbody>
                <?php 

                  while ($row = mysqli_fetch_assoc($result)) {
                 ?>
                  <tr>

                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td> <a href="update-news.php?id=<?php echo $row['id']; ?>"> <i class="fa-regular fa-pen-to-square"></a></i></td>
                    <td> <a href="delete_news.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></a></i></td>
                      
                  </tr>
                  <?php } ?>
                </tbody>
             </table>
             <?php } ?>
          </div>
      </div>



<?php include "footer.php"; ?>



<?php 

/*

* sir ami bujbo ki koray jai ai news gulo ai id thayke post kora hoyasay.

* and mail@ == tar nijer news ai condition ta ki vabay ran korbo .


* sir information asay show hobay but oi ta edit kortay parbay na taholay ki kora jai.

* sir image ar oita apni aktu dekhai den .


#sir IPS a monay hoy pani dawya lagbay ?

*/

 ?>
