<?php 
  $db = mysqli_connect('localhost', 'root', '', 'notice');
  
  $name="";
  $course="";
  $year="";
  $username="";
  $password="";

  if(isset($_POST['register'])){
	  $name=$_POST['name'];
	  $course=$_POST['course'];
	  $year=$_POST['year'];
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  
	  $sql_u="Select * from user where username='$username'";
	  $res_u=mysqli_query($db,$sql_u);
	  
	  if(mysqli_num_rows($res_u)>0){
		  $name_error="Username already taken";
	  }
	  else{
		  $query="Insert into user values(NULL,'$username','$password','$name','$course','$year')";
		  $result=mysqli_query($db,$query);
		  echo "User registered";
		  
		  exit();
	  }
  }
?>