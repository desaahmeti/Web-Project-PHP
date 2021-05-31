<?php require ('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio World</title>
    <link
      href="https://fonts.googleapis.com/css?family=Share"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/main.css" />
  </head>
  <body>

<main>
    <div class="container">
        <?php 
            if(!empty($message)) {
                echo "<p>$message</p>";
            } 
            
        ?>
            <div class="signup">
                <h1>Register</h1>
                
                <form id="sign-up"action="signup.php" method="post">
                <?php echo display_error(); ?>

                    <div>
                        <input class="input-text"  value="<?php echo $name; ?>" id="m4" type="text" name="name"   data-validation="required length" data-validation-length="min3" placeholder="Enter your name">
                    </div>
                    <div>
                        <input class="input-text"  value="<?php echo $email; ?>"id="m5" type="text" name="email" data-validation="required email"  placeholder="Enter your email">
                    </div>
                    <div>
                        <input class="input-text" id="m6" type="password" name="password" data-validation="required password"  placeholder="Enter your password">
                    </div>
                 	
                    <div>
                        <button type="submit" name="register_btn" class="contact-btn" value="Submit">Submit</button>
                    </div>
                   
                    <span>Already registred? <a href="login.php">Login here</a></span>
                </form>
            </div>
   
    </div>
        </main>
        
<?php require ('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>
  <script>
		$.validate({
			errorMessageClass: "error",
		});
	</script>
