<?php
session_start();
$con=mysqli_connect("localhost","root","","ecommerce");
if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query = "SELECT * FROM users where username='$username' && password='$password'";
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){

			while($row=mysqli_fetch_array($result)){
			if($row['username']==$username && $row['password']==$password){
				$_SESSION['username'] = $row['username'];
				header("location:products.php");
			}
		}
		}else{
			echo '<script>alert("Ooops.. Invalid User Details")</script>';
			echo "<script>window.open('login.php','_self')</script>";
		}
}
?>