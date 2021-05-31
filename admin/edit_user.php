<link rel="stylesheet" href="../style/main.css">
<link  href="https://fonts.googleapis.com/css?family=Share"  rel="stylesheet" />
<?php 
	require 'includes/dbconnect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM users WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $user = $query->fetch();
	
	if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = 'UPDATE users SET name = :name, email = :email WHERE id = :id ';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('id', $id);

        $query->execute();
		
        header("Location: users.php");
    }
?>
  <?php 
        require('includes/header.php');   ?>
  
  <main>
  <div class="mt-2">
        <div class="container">
          <br>
            <h1>Edit user </h1>
        <form method="post">
            <input class="input-text" type="text" name="name" value=" <?php echo $user['Name']?>" placeholder="Enter your name"><br>
            <input class="input-text" type="text" name="email" value=" <?php echo $user['Email']?>" placeholder="Enter your email"><br>
            <input class="input-text" type="text" name="user_type" value=" <?php echo $user['user_type']?>" placeholder="Enter your email"><br>
            <input type="submit" class="contact-btn" name="submit" value="Submit">
        </form>
    </div>
</div>
</main>
<?php  require('includes/footer.php'); ?>
  
