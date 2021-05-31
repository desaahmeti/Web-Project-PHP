<?php 
include('includes/header.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You are'nt allowed to view this page";
	header('location: ../index.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?><?php include('Server.php');  ?> 


    <link href="https://fonts.googleapis.com/css?family=Share"  rel="stylesheet"/>
    <link rel="stylesheet" href="../style/main.css" />
    <main>
        <div class="container">
        <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
            <br><br>
            <a href="add_post.php" class="contact-btn">Add post</a><br>  
            <a href="add_users.php"class="contact-btn">Add user</a><br>
            <a href="users.php"class="contact-btn">Users</a><br>
        </div>
    </main>
<style>
    .contact-btn{
        padding-top: 10px;
    float: none;
    display: block;
    text-align: center;
    height: 30px;
    margin:0;
    }
</style>

<?php 
        require('includes/footer.php'); 
    ?>