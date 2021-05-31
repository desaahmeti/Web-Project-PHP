
<?php 
	include('../functions.php');
?>
 <header>
      <div class="container">
        <div class="left-side">
          <h1><a href="index.php">Portfolio World</a></h1>
        </div>
        <div class="right-side">
          <div class="menu">
            <ul>
              <li><a href="../index.php">Homepage</a></li>
              <!-- <li><a href="#">About me</a></li> -->
              <li><a href="../blog.php">Gallery</a></li>
              <li><a href="../contact.php">Contact me</a></li>
              <?php if(isset($_SESSION['user'])): ?>
              <li><a href="dashboard.php">Dashboard</a></li> 
                <li class="user">Welcome <a class="username" href="#">
                <?php echo $_SESSION['user']['Name']; ?>
                </a></li>
                  <li><a href="../index.php?logout='1'">Logout</a></li>
                  <li  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</li> 
                  <?php else: ?>
                  <li><a href="../login.php">Login</a></li>
                  <li><a href="../signup.php">Signup</a></li>
              <?php endif; ?>

            </ul>
          </div>
        </div>
      </div>
    </header>