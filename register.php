<?php

include("header.php");


global $conn;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	

			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = md5( $_POST['password'] );



			$sql = "INSERT INTO `journalist` (`name`, `email`, `password`) VALUES ('{$name}', '{$email}', '{$password}')";

			 $result =  mysqli_query($conn, $sql);

			if (isset( $result)) {

				header('Location: http://localhost/web_development_career/full_dainamic_alo/login.php');

				exit();
			}
				
}




?>



<div class="container-reg-log">
		<div class="logo-box">
            <a href="index.php"><img style="width: 250px;" src="images/logo.png"></a>
        </div>
    	<div class="form-group-1">
        	<h2>Registration Form</h2>
        </div>
        <div class="form-group-2">
	        <form class="form" action="#" method="post">
	            <div class="form-group"> 
	                <input type="text" id="name" name="name" placeholder="Name" required>
	            </div>
	            <div class="form-group">               
	                <input type="email" id="email" name="email" placeholder="Email" required>
	            </div>
	            <div class="form-group">    
	                <input type="password" id="pass" name="password" placeholder="Enter Password" required>
	            </div>
               <div class="form-group-3">
            		<button type="submit">Register</button>
         		</div>
	        </form>
        </div>
 
    </div>

<?php

include("footer.php");

?>    
