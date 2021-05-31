<?php 
        require('includes/dbconnect.php'); 

        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }

        $sql = 'SELECT * FROM posts WHERE id = :id';
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $id]);
    
        $post = $query->fetch();
        

        if(isset($_POST['submit'])){
            $target = "Image/".basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];

            $title = $_POST['title'];
            $paragraph = $_POST['paragraph'];
            $sql = 'UPDATE posts SET title = :title, paragraph = :paragraph, image = :image WHERE id =:id';
            $query = $pdo->prepare($sql);
            $query->bindParam(':title', $title);
            $query->bindParam(':paragraph', $paragraph);
            $query->bindParam(':image', $image);
            $query->bindParam('id', $id);

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
                <input class="input-text" type="text"  name="title" 
                value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="paragraph">Description: </label>
                <input value="<?php echo $post['paragraph']; ?>" class="input-text"id="paragraph" name="paragraph" placeholder="Write something.." style="height:100px;">
            </div>
            <div class="form-group">
                <label for="image">Choose image</label>
                <input type="file" value="<?php echo $post['image']; ?>" name="image" >
            </div>
           <input class="contact-btn" type="submit" name="submit" value="Submit">

        </form>
    </div>
    </main>
   