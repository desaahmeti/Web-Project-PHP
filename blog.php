<link rel="stylesheet" type="text/css" href="style/main.css">
<link href="https://fonts.googleapis.com/css?family=Share" rel="stylesheet"
    />
<?php 
require('includes/dbconnect.php'); 
  $query = $pdo->query('SELECT * FROM posts order by date desc limit 4');
  $posts= $query->fetchAll();
?>

<?php require('includes/header.php'); ?>
<main>
  <div class="container">
    <div class="products2">
      <br>
      <h1>GALLERY</h1>
      <br>
        <?php foreach ($posts as $post): ?>
        <div class="product-item">
          <h3 id="hd3"><?php echo $post['title']; ?></h3>
           <div class="post-content">
             <img src="images/<?php echo $post['image'] ?> " alt="image" width="200px " height="150">
             <p> <?php echo $post['paragraph']; ?></p>
           </div>
          <div class="crud">
            <a href="admin/edit_post.php?id=<?php echo $post['ID'] ?>">Edit</a>
            <a href="admin/delete_post.php?id=<?php echo $post['ID'] ?>">Delete</a>
          </div>
          <span><?php echo $post['date']; ?></span>
          <hr>
        </div>
        <?php endforeach; ?>
	  </div>
  </div>
</main>	

<form role="forms" method="POST" enctype="multipart/form-data"></form>

<?php require('includes/footer.php'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- <script src="js/jquery.bxslider.min.js"></script> -->
<!-- <script type="text/javascript">
	$(document).ready(function(){
 	 $('.bxslider').bxSlider();
	});
</script> -->