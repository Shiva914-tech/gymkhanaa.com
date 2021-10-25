<!DOCTYPE html>
<html>
<head>

<title>LOGIN</title>
	
	<link href="CSS/nav.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
</head>
<body>
	<!--  NAVBAR -->

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <img alt="Fitness Academy" class="navbar-brand" href="index.html" src="img/logo.png">
    <button class="navbar-toggler" data-target="#navbarMenu" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item">
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index1.php">Login</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>
<form action="login.php" method="post">
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
</html>