<?php
session_start();
if (!isset($_SESSION['username'])) {
	$_SESSION['msg']="You must log in first to view this page";
	header('location:log.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location:log.php');
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body style="background-color: lightblue">

<br><br>
<div style="text-align: center;" >
	<h1>This is the home page</h1>
<?php if (isset($_SESSION['success'])):?> 
	
	<div>
		<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
		</h3>
	</div>

<?php endif ?>

<br><br>
<?php if (isset($_SESSION['username'])): ?>

	<h3>Welcome  <strong><?php echo $_SESSION['username'];?></strong></h3><br><br>
	<a class="btn btn-primary" href="index.php?logout='1'">Logout</a>
	
<?php endif ?>
        
    </div>
</body>
</html>