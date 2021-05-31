<?php 
require('dbconnect.php'); 
  $query = $pdo->query('SELECT * FROM posts order by date desc limit 3');
  $posts= $query->fetchAll();
?>
<main class="homepage">
      <section class="section-1">
        <div class="container">
          <div class="left-side">
            <div class="icon">
              <img src="images/icon.png" alt="" />
            </div>
            <div class="text">
              <h1>Welcome to myportfolio</h1>
              <p class="italic">
                Hii...My name is Hakan Dogan.Iam 20 years old.Iam from
                Turkey.I’m a freelance designer and developer from turkey. I’m
                done vbulletin, css, html, wordpress templates.If you wanna show
                it templates please show my portfolio.
              </p>
            </div>
          </div>
          <div class="right-side">
            <div class="icon">
              <img src="images/icon2.png" alt="" />
            </div>
            <div class="text">
              <h1>Latest Works</h1>
            </div>
            <ul>
              <li>Lorem ipsum dolor now lorem ipsum dolor now<span><img src="images/arrow.png" alt=""
                /></span>
              </li>
              <li>
                Lorem ipsum dolor now lorem ipsum dolor now<span
                  ><img src="images/arrow.png" alt=""
                /></span>
              </li>
              <li>
                Lorem ipsum dolor now lorem ipsum dolor now<span
                  ><img src="images/arrow.png" alt=""
                /></span>
              </li>
              <li>
                Lorem ipsum dolor now lorem ipsum dolor now<span
                  ><img src="images/arrow.png" alt=""
                /></span>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section-3">
        <div class="container">
          <div class="index-post products2">
              <br>
              <h1>Posts from gallery</h1>
              <br>
              <div class="gallery">
                <?php foreach ($posts as $post): ?>
                <div class="product-item">
                  <h3 id="hd3"><?php echo $post['title']; ?></h3>
                  <div class="post-content">
                    <img src="images/<?php echo $post['image'] ?> " alt="image" width="200px " height="150">
                    <p> <?php echo $post['paragraph']; ?></p>
                  </div>
                  <!-- <div class="crud">
                    <a href="edit_post.php?id=<?php echo $post['ID'] ?>">Edit</a>
                    <a href="delete_post.php?id=<?php echo $post['ID'] ?>">Delete</a>
                  </div> -->
                  <span><?php echo $post['date']; ?></span>
                  <hr>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
      </section>
      <section class="section-2">
          <div class="container">
            <div class="left-side">
            <div class="text">
                <h1>Who i am?<span>-I'm a crazy web designer!</span></h1>
                <hr />
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
                officia eligendi suscipit dolore, facere eaque, nam quod ex
                corrupti, vero molestias rerum blanditiis consequuntur odio maxime
                veniam eius iusto obcaecati.
                </p>
            </div>
            <div class="text">
                <h1>What do i do?<span>-I'm done every work:)</span></h1>
                <hr />
                <ul>
                <li>* Website Design</li>
                <li>* Website XHTML & CSS Development</li>
                <li>* Wordpress Website Integration</li>
                <li>* Joomla Website Integration</li>
                <li>* Drupal Website Integration</li>
                <li>* Search Engine Optimisation</li>
                <li>* Logo and Graphic Design</li>
                <li>* Blog Post Writing Services</li>
                </ul>
            </div>
            </div>
            <div class="right-side">
            <div class="text">
                <h1>My weblog<span>-web design kits</span></h1>
                <hr />
            </div>
            <div class="icon">
                <img src="images/icon3.png" alt="" />
            </div>
            <div class="inner-text">
                <p>Moviex skin is released now!</p>
                <p>Price: 40$</p>
                <p>vBulletin 3.7x, 3.8x</p>
                <p>Psd, Xml Files are included</p>
            </div>
            <div class="button-group">
                <button class="btn-first blue-btn">Read Post</button>
                <button class="btn-first orange-btn">Buy This Skin</button>
            </div>
            <div class="bottom-text">
                <p>what is my<span>weblog?</span></p>
                <p>
                I shared free web design elements, wordpress skins free css & html
                templates, fonts etc..
                </p>
                <a href="#" class="text-center">>> Go to my<span>weblog</span></a>
            </div>
            </div>
            <div id="medium-content">
              <div class="slideri">
                <div id="slider1" class="jSlider">
                  <div><img src="images/1.jpg "alt="" /></div>
                  <div><img src="images/2.jpg" alt="" /></div>
                  <div><img src="images/3.jpg" alt="" /></div>
                </div>
              </div>
            </div>
        </div>
      </section>
     
    </main>