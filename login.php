
<?php

include("header.php");

global $conn;

$err_email = $err_pass = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$email = $_POST['email'];

	$password = md5( $_POST['password'] );

	if (!isset($email) || empty($email)) {
		$err_email = " Enter your Email address ";
	}
	



	$sql = "SELECT * FROM journalist WHERE email = '{$email}' AND password = '{$password}'";


	$result =  mysqli_query($conn, $sql);


	$if_data_reach = $result->num_rows; 

	if ( $if_data_reach == 1 ) {

		
		$row = $result->fetch_assoc();

		 $saved_password = $row['password'];

		
		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];


		header('Location: http://localhost/web_development_career/full_dainamic_alo/');

	}else{
		$err_pass = 'your email or password  is incorrect';
	
	}	


		 /*if (empty($err_pass)) {

		$err_pass = 'Fill the password box';

		}elseif ( $password != $saved_password) {

		$err_pass = 'your password incorrect';

		}*/

}



mysqli_close($conn);



?>

<div class="container-reg-log">
        <div class="logo-box">
            <a href="index.php"><img style="width: 250px;" src="images/logo.png"></a>
        </div>
    	<div class="form-group-1">
        	<h2>Login Form</h2>
        </div>
        <div class="form-group-2">
	        <form class="form" action="" method="POST">
	            <div class="form-group">               
	                <input type="text" id="email" name="email" placeholder="Email">
	                <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
	                	echo "<span>{$err_email}</span>";
	                } ?>
	            </div>
	            <div class="form-group">    
	                <input type="password" id="pass" name="password" placeholder="Enter Password" required>
	                <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
	                	echo "<span>{$err_pass}</span>";
	                } ?>
	            </div>
	            <div class="form-group-3 login">
		            <button type="submit" value="submit"> Login</button>
		            <p class="forget"><a href="#">Forget Password</a></p>
					<p  class="account"> New to Prothom Alo ? <a href="register.php">Create an account</a> </p>
		         </div>
	        </form>
        </div>
         
    </div>


<?php

include("footer.php");

?>
