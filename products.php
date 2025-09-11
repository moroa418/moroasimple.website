<html>
    <head>
       <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>products</title>
  <link rel="stylesheet" href="style css">
  <style>
  
.products {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 40px;
    }
    .products{
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .products img {
      max-width: 100%;
      border-radius: 10px;
    }
    .products h1 {
      margin: 15px 0 10px;
    }
    .products p {
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
      <h1>OUR PRODUCTS</h1>

        <nav>
      <a href="index.php">Home</a>
      <a href="products.php">Products</a>
      <a href="blog.php" class="active">Blog</a>
      <a href="contacts.php">Contact</a>
    </nav>
         <section class="products">
    <div class="product">
      <img src="train.jpg" alt="train">
      <h3>Training Bag</h3>
      <p>M39.99</p>
    </div>
    <div class="product">
      <img src="back.jpg" alt="back">
      <h3>Backpack Pro</h3>
      <p>M49.99</p>
    </div>
    <div class="product">
      <img src="duffle.jpg" alt="duffle">
      <h3>Gym Duffel</h3>
      <p>M29.99</p>
    </div>
  </section>
    </body>
</html>