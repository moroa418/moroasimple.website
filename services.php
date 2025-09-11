<html>
    <head>
        <title></title>
        <style>
                .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 1px;
    }
    .services {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .services img {
      max-width: 50px;
      border-radius: 10px;
    }
    .services h1 {
      margin: 15px 0 10px;
    }
    .services p {
      font-weight: bold;
      color: #f39c12;
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
        </style>
    </head>
    <body>
        
    <nav>
    <div class="logo"><strong>KarrySports Store</strong></div>
    <div class="nav-links">
      <a href="index.php">Home</a>
      <a href="services.php">Services</a>
      <a href="about.php">About</a>
      <a href="blog.php">Blog</a>
      <a href="contacts.php">Contact Us</a>
      
 
  </div>
        </nav>
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
      <img src="repair.jpg" alt="repair Bag 3">
      <h3>Repair</h3>
      <p>All bags comes with a warrsnty <br>
    and we also provide repair Services</p>
    </div>
  </section>

    </body>
</html>