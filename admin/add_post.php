<?php 
        require('includes/dbconnect.php'); 
        if(isset($_POST['upload'])){
            $target = "Image/".basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];

            $title = $_POST['title'];
            $paragraph = $_POST['paragraph'];
            $sql = 'INSERT INTO posts (title, paragraph, image) VALUES (:title, :paragraph, :image)';
            $query = $pdo->prepare($sql);
            $query->bindParam(':title', $title);
            $query->bindParam(':paragraph', $paragraph);
            $query->bindParam(':image', $image);

            if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                $msg="Error";
            }
            else{
                $msg="Success";
            }

            $query->execute();
            
            header("Location: ../blog.php");
        }
    ?>


    <?php 
        require('includes/header.php'); 
    ?>
  
    <link
      href="https://fonts.googleapis.com/css?family=Share"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../style/main.css" />

    <main>
        <div class="container">
        <a href="../blog.php">See all posts</a>
        <h1>Add new post</h1>
        <form role="form" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
            <div class="form-group">
                <label for="title">Title:</label>
                <input class="input-text" type="text"  name="title" >
            </div>
            <div class="form-group">
                <label for="paragraph">Description: </label>
                <textarea class="input-text"id="paragraph" name="paragraph" placeholder="Write something.." style="height:100px;"> </textarea>
            </div>
            <div class="form-group">
                <label for="image">Choose image</label>
                <input    type="file" name="image" >
            </div>
           <input type="submit" name="upload" class="contact-btn">

        </form>
    </div>
    </main>
   