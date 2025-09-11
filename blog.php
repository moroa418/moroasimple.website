<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sports Bag Blog</title>
  <link rel="stylesheet" href="blog.css" />
  <style>
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
 

  </style>
</head>
<body>
  
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
     
    <a href="index.php"> <button>READ MORE</button></a>
</section>


 
</body>
</html>