<html>
    <head>
        <title></title>
        <style>
          
             body {
  font-family: Arial, sans-serif;
  margin: 0;
  
    background-repeat: no-repeat;          
  background-size: cover;              
  background-position: center;           
}

header {
  background: rgba(34, 34, 34, 0.8);
  
  color: white;
  text-align: center;
  padding: 20px;
}

.container {
  width: 80%;
  max-width: 1000px;
  margin: 20px auto;
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

form {
  display: flex;
  flex-direction: column;
}

input, textarea {
  margin-bottom: 15px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
}

button {
  background: #0073e6;
  color: white;
  padding: 12px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background: #005bb5;
}

.contact-info {
  margin-top: 30px;
  text-align: center;
}

.contact-info p {
  margin: 8px 0;
}

iframe {
  width: 100%;
  height: 300px;
  border: 0;
  margin-top: 20px;
  border-radius: 10px;
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