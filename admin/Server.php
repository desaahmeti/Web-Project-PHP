<?php
// session_start();

$username = "";
$email = "";
$errors = array();
$title = "";
$paragraph = "";
$image="";

// connect to the database
$db =mysqli_connect('localhost','root','','portfolio');
// if the register button is clicked
if(isset($_POST['register'])) {
	$name = ($_POST['name']);
	$password =($_POST['password']);
	$email =($_POST['email']);
  
	if(empty($name))
	{
		array_push($errors, "Username is required");
	}
	if(empty($password))
	{
		array_push($errors, "Password is required");
	}
	if(empty($email))
	{
		array_push($errors, "Email is required");
	}
  
	//if there are no errors, save user to database
	
	if(count($errors)==0){
		$password = md5($password); //encrypt password
		$sql = "INSERT INTO accounts (name, password, email, country, adresa) VALUES ('$name','$password','$email','$country','$adresa')";
		mysqli_query($db, $sql);
		header('location: Home.php');
	}
}

if(isset($_POST['login'])) {
	$name = ($_POST['name']);
	$password =($_POST['password']);
	if(empty($name))
	{
		array_push($errors, "Username is required");
	}
	if(empty($password))
	{
		array_push($errors, "Password is required");
	}
	if(count($errors)==0)
	{
		$password = md5($password);
		$query = "SELECT * FROM users WHERE name='$name' AND password = '$password'";
		$result = mysqli_query($db, $query);
		if(mysqli_num_rows($result) == 1)
		{
		$_SESSION['name']=$name;
		$_SESSION['success']="You are now logged in";
		header('location: admin/add_post.php');
		}else
		{
			array_push($errors,"Wrong username/password combination");
			
			
		}
	}
}

//logout
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['name']);
	header('location: Login.php');
}

if(isset($_POST['upload'])){
    $target = "Images/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];

    $title = $_POST['title'];
    $paragraph = $_POST['paragraph'];
    $sql = "INSERT INTO posts (title, paragraph, image) VALUES ('$title', '$paragraph', '$image')";
    $query = mysqli_query($db, $sql);
    

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg="Upload successful";
    }
    else{
        $msg="Upload failed";
    }

    header("Location: add_post.php");
}
