<?php require('includes/dbconnect.php'); ?>
<?php require('includes/header.php'); ?>
<link rel="stylesheet" href="../style/main.css">
<link  href="https://fonts.googleapis.com/css?family=Share"  rel="stylesheet" />
    <?php 
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			
            $sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
            $query = $pdo->prepare($sql);
            $query->bindParam('name', $name);
            $query->bindParam('email', $email);
            $query->bindParam('password', $password);
			
            $query->execute();
            header("Location: users.php");
        }
    ?> 
  <main>
    
  <div class="mt-2">
        <div class="container">
          <br>
            <h1>Add new user </h1>
            <form action="add_users.php" method="post">
                <input class="input-text" type="text" name="name" placeholder="Enter your name"><br>
                <input class="input-text" type="text" name="email" placeholder="Enter your email"><br>
                <input class="input-text" type="password" name="password" placeholder="Enter your password"><br>
                <div>
                        <label for="role">Role:</label>
                        <select name="role">
                            <option value="admin">admin</option>
                            <option value="guest">guest</option>
                        </select>
                    </div>
                <input type="submit" name="submit" class="contact-btn" value="Submit">
            </form>
        </div>
    </div>
  </main>
 <?php require('../includes/footer.php'); ?>
  </body>
</html>

