<?php
if(!empty($_POST['email']) && !empty($_POST['pass'])) {  
    $user=$_POST['email'];  
    $pass=$_POST['pass'];  
    $con=new mysqli('localhost','root','','login') or die(mysql_error());
  
    $query="SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'";  
    $result=$con->query($query);
    if($result->num_rows!=0)
    {
    while($row=$result->fetch_assoc())
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {
    session_start();  
    $_SESSION['sess_user']=$user;  
    
    /* Redirect browser */  
    header("Location: homepage.php");  
    }  
    } else {  
	echo "Invalid username or password!";  
	header("Location: index.html");
    
	
    }  
  
} else {  
    echo "All fields are required!";  
}
?>