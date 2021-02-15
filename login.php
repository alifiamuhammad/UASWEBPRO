<!DOCTYPE html>
<html>
	
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
body {
  background-image: url('images/retro.jpg');
}
</style>
</head>

<body>
	
     <form action="loginv.php" method="post">
	 <p>&larr; <a href="index.html">Home</a>
     	<h2>LOGIN</h2>
		 
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
<footer>
  <p>@Copyright by 1811010_ALIFIAMUHAMMAD_TIFRP18CIDA</p>
 </footer>
</html>