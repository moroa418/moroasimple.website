<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sports Bags Store</title>
  <link rel="stylesheet" href="style css">
  <style>
   .hero {
      background: url('bege.jpg') no-repeat center/cover;
     
      height:200vh;
      
      justify-content: center;
      align-items: center;
      flex-direction: column;
      color: white;
      text-align: center;
    }
    .hero img{
      max-width:100%;
      height: 100px;
    }

    /* Navigation */
    nav {
      background: #222;
      color: white;
      display: flex;
      justify-content: space-between;
      padding: 15px 30px;
      position: sticky;
      top: 0;
    }
    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
    }
    nav a:hover {
      color: #f39c12;
    }

    /* Hero Section */
    
    .hero h1 {
      font-size: 3em;
      margin: 0;
    }
    .hero button {
      margin-top: 20px;
      padding: 12px 25px;
      background: #f39c12;
      border: none;
      border-radius: 25px;
      color: white;
      font-size: 18px;
      cursor: pointer;
    }
    .hero button:hover {
      background: #d35400;
    }

    /* services*/
    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 1px;
    }
    .services {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .services img {
      max-width: 100%;
      border-radius: 10px;
    }
    .services h1 {
      margin: 15px 0 10px;
    }
    .services p {
      font-weight: bold;
      color: #f39c12;
    }
    

    /* product*/
    .products {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 40px;
    }
    .products {
      border: 1px solid #68323216;
      border-radius: 1px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0);
    }
    .products img {
      max-width: 40%;
      border-radius: 1px;
    }

    .products h1 {
      margin: 15px 0 10px;
    }
    .products p {
      font-weight: bold;
      color: #f39c12;
    }

    /* About Section */
    .about {
      padding: 50px;
      background: #f4f4f4;
      text-align: center;
    }
   .blog h3{
      color:black;
    }

    /* Footer */
    footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 20px;
    }
    footer a {
      color: #f39c12;
      margin: 0 10px;
      text-decoration: none;
    }
     /* blog*/
    .blog {
      background:pink;     
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 40px;
    }
    .blog {
      border: 1px solid #68323216;
      border-radius: 1px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0);
    }
    .blog img {
      max-width: 40vh;
      border-radius: 1px;
    }

    .blog h1 {
      margin: 15px 0 10px;
    }
    .blog p {
      font-weight: bold;
      color: #f39c12;
    }
 iframe {
  width: 100%;
  height: 600px;
  border: 0;
  margin-top: 20px;
  border-radius: 10px;
}

details{
  width: 60px;
  height: 90px;
  box-shadow: #fff ts 0;
}
  </style>
</head>
<body>
  



  <!-- Navigation -->
  <div>
    <nav>
    <div class="logo"><strong>KarrySports Store</strong></div>
    <div class="nav-links">
      <a href="index.php">Home</a>
      <a href="services.php">Services</a>
      <a href="about.php">About</a>
      <a href="blog.php">Blog</a>
      <a href="contacts.php">Contact Us</a>
      
  </nav>
  </div>
  <!-- Hero Section -->
  <div class="hero">
    <h1>Durable Sports Bags for Every Athlete</h1>
    <p>Carry your game in style</p>
    <a href="products.php"><button>Shop Now</button></a> 
  </div>

  <!-- services -->
   <h1>Our Services</h1>
  <section class="services">
    <div class="services">
      <img src="custom.jpg" alt="custom">
      <h3>Bag Customization</h3>
      <p>we personalize your bag with your name,Number or team logo</p>
    </div>
    <div class="services">
      <img src="bulk.jpg" alt="bulk">
      <h3>Bulk Orders</h3>
      <p>Special discounts for schools, gyms <br>
       and sports clubs ordering in bulk</p>
    </div>
    <div class="services">
      <img src="fast.jpg" alt="fast">
      <h3>Fast Delivery</h3>
      <p>We deliver your bag right at your <br>
    doorsteps</p>
    </div>


    <div class="services">
      <img src="repair.jpg" alt="repair">
      <h3>Repair</h3>
      <p>All bags comes with a warrsnty <br>
    and we also provide repair Services</p>
    </div>
  </section>

  <!-- Featured Products -->
   <H1>OUR PRODUCTS</H1>
  <section class="products">
    <div class="products">
      
      <h3>Training Bag</h3>
       <img src="train2.jpg" alt="train2">
      <p>M39.99</p>
      
    </div>
    <div class="products">
      
      <h3>Backpack Pro</h3>
       <img src="back.jpg" alt="back">
      <p>M49.99</p>
    </div>
    <div class="products">
     
      <h3>Gym Duffel</h3>
       <img src="duffle.jpg" alt="duffle">
      <p>M29.99</p>
    </div>
  </section>

  <!-- about -->
  <section class="about">
    <div class="about">
    <h2>About US</h2>
    <p>We provide high-quality sports bags designed for athletes, gym-goers,
         and adventurers. Our mission is to combine durability with style.</p>
</div>
  </section>

    <!-- Footer -->
  <footer>
   
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27914.374868285213!2d28.
      2109594!3d-29.00820015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e8d1754c1932c3f%3A0xa00cf853f5371d0!2sPitseng!5e0!3m2!1sen!2sls!4v1756973469873!5m2!1sen!2sls" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>   
      <p>
      <a href="#">Facebook</a> |
      <a href="#">WhatsApp</a> |
      <a href="#">Instagram</a>
    </p>
  </footer>

  <!--blog -->
  <H1>OUR BLOG</H1>
  <h2>Latest News & Tips</h2>
<section class="blog">
  <div class="blog">
     
    <p>Explore trends, gear reviews, and packing hacks for athletes on the go.</p>
    <img src="train.jpg" alt="train">
</div>

  <div class="blog">
      <h3>Top 5 Sports Bags of 2025</h3>
      <img src="bags.jpg" alt="bags" />
      <p>We tested durability, style, and storage. Here's what made the cut.</p>
      <a href="#">Read More</a>
      
    </div>

    <div class="blog">
     
      <h3>Smart Packing for Game Day</h3>
       <img src="paka.jpg" alt="paka " />
      <p>Don't forget your essentials. Our checklist keeps you ready.</p>
      <a href="#">Read More</a>
    
</section>


    <h1>Sports Bags</h1>
    <p>Contact Us</p>

    <div class="container">
      <h2>We Would Love to Hear From You</h2>
      <form action="process.php" method="POST">

      <input type="text" placeholder="Your FullName: " required><br><br>
      <input type="email" placeholder="Yor Email Address" required><br><br>
      <textarea name="massage" rows="4" placeholder="Leave us a massage here" required></textarea><br><br>
      <button type="submit">Sent massage</button>

     </form>
     <div class="contact_info">
      <p><strong>Email:</strong> chere@gmail.com</p>
      <p><strong>Phone:</strong>+266 5222</p>
      <p><strong>Location:</strong>Leribe,Pitseng</p>
      </div>
     
     <nav>
      <a href="index.php">Explore</a>
     </nav>   

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27914.374868285213!2d28.2109594!3d-29.00820015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e8d1754c1932c3f%3A0xa00cf853f5371d0!2sPitseng!5e0!3m2!1sen!2sls!4v1756973469873!5m2!1sen!2sls" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
         referrerpolicy="no-referrer-when-downgrade">
    </iframe>
   
     <p>
      <a href="#">Facebook</a> |
      <a href="#">WhatsApp</a> |
      <a href="#">Instagram</a>
    </p>

  

</body>
</html>