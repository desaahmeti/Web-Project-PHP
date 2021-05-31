
<?php require('includes/header.php'); 

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $success='';
 

  $sql = 'INSERT INTO contacts (name, email, message, gender,age) VALUES (:name, :email, :message, :gender,:age)';

  $query = $pdo->prepare($sql);
  $query->bindParam('name', $name);
  $query->bindParam('email', $email);
  $query->bindParam('message', $message);
  $query->bindParam('gender', $gender);
  $query->bindParam('age', $age);

    if($query->execute()) {
      $success = "Your message was sent";
  } else {
      $success = "A problem occurred while sending your message";
  }

 
  if(empty($name)) {
      echo "<p>Name is required</p>";
  } 
  else if(empty($message)) {
      echo "<p>Message is required is required</p>";
  } 
  else if(empty($email)) {
      echo "<p>Email is required</p>";
  } 
  
}
?>
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
        <div class="contact">
        <?php 
            if(!empty($success)) {
                echo "<p>$success</p>";
            }  
        ?>
          <h1>CONTACT</h1>
          <form id="contact" method="post" action="contact.php">
            <!-- Name -->
            <div>
              <label for="contact_name">Name:</label>
              <input  class="input-text" type="text" id="contact_name" name="name"
              data-validation="required length" 
					    data-validation-length="min2">
            </div>
            <!-- Email -->
            <div>
              <label for="contact_email">Email:</label>
              <input  class="input-text" type="email" id="contact_email" name="email" data-validation="required email"
>
            </div>						
                
            <!-- Message -->
            <div>
              <label for="contact_message">Message:</label>
              <textarea class="input-text" rows="4" cols="50" id="contact_message" name="message" data-validation="required"></textarea> 										
            </div>	 
            <div>
              <label for="contact_gender">Gender:</label>
              <input type="radio" name="gender" value="Male">M
              <input type="radio" name="gender" value="Female"> F<br>
            </div>					
            <div>
              <label for="contact_gender">Age:</label>
              <select name="age">
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
              </select>
            </div>					
            <!-- Submit Button -->
            <div id="contact_submit">				
              <button type="submit" name="submit" class="contact-btn" value="Submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <?php require('includes/footer.php'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>
  <script>
		$.validate({
			errorMessageClass: "error",
		});
	</script>

</body>
</html>