<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="LogAdmin.css" rel="stylesheet"/>
    
</head>

<body> 


 <!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
      
	 <center>   
	 
	 <form class="modal-content animate" action="admin/admin.php" method="post">
    <div class="imgcontainer">
<img src="img/log.png" alt="Admin" class="avatar">
    </div>

				<div class="container">
		<label for="username"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="username" required>

<br>
<br>
		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" required>

<br>
<br>
		<button type="submit"> Login</button> 
		
<br>
<br>

      <label>
        <input type="checkbox" checked="un checked" name="remember"> Remember me
      </label>
    </div> 
<br>
<br>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="ChangPswAdm.php"><Forgot Password?></a></span>
   </div>
  </form> </center>
</div> 

</body>
</html>

<?php 
session_start ();
$username = 'Admin';
$password = '8085208749';
if (isset($_POST ['submit'])){
	 $username = $_POST ['username'];
	 $password = $_POST ['password'];
	 
	 if ($username =="Admin" && $password =="8085208749"){
	 echo 'window.open("Admin/Admin.php"';
	 }
	 
	 else {
		echo "Username or Password incorrect";
		
		}}
	 ?>
	 

                    
	
   
