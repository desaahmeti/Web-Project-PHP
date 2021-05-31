<?php require('includes/header.php') ?>
 


    <link
      href="https://fonts.googleapis.com/css?family=Share"
      rel="stylesheet"/>
    <link rel="stylesheet" href="style/main.css" />

  
    <main>
        <div class="container">
          <div class="Logini">
            <h1>Login</h1>
            <form id="log-in"action="login.php" method="POST">
            <?php echo display_error(); ?>

              <div>
                  <input class="input-text"id="m2" type="text" data-validation="required email" placeholder="Enter your email" name="email">
              </div>
                <div>
                  <input class="input-text"id="m3" type="password" data-validation="required password" placeholder="and password" name="password">
                </div>
                <div>
                  <input type="submit" name="login_btn" class="contact-btn" value="Submit">
                </div>  
                
                <p>Dont have an account? <a href="signup.php">Signup here</a></p>
            </form>
        </div>
        </div>
    </main>

<?php require ('includes/footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>
  <script>
		$.validate({
			errorMessageClass: "error",
		});
	</script>