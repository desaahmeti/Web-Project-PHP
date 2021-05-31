<link href="https://fonts.googleapis.com/css?family=Share"rel="stylesheet"
/>
<link rel="stylesheet" href="../style/main.css" />
<?php
	require('includes/dbconnect.php');
	$query = $pdo->query('SELECT * FROM users');
    $users = $query->fetchAll();
 
    require('includes/header.php'); 
  
?>
    <main>
 	<div class="mt-2">
        <div class="container">
        <br>
      <h1>USERS</h1>
      <br>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?php echo $user['Name']; ?></td>
                            <td><?php echo $user['Email']; ?></td>
                            <td><?php echo $user['user_type']; ?></td>
                            <td><a href="edit_user.php?id=<?php echo $user['ID']; ?>">Edit</a></td>
                            <td><a href="delete_user.php?id=<?php echo $user['ID']; ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <a style="float:right;" href="add_users.php">Add a new user</a>
        </div>
    </div>

</main>
 <?php require('includes/footer.php'); ?>
  </body>
</html>


