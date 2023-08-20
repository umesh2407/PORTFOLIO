
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umesh Choudhary - Web developer , Programmer , Data Anaylst </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
    <div class="sidebar">
        
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/intro.html">My Intro</a></li>
                <li><a href="/services.html">Services</a></li>
                <li><a href="/project.html">Projects</a></li>
                <li><a href="/contact.html">Contact Me</a></li>
                

            </ul>
        </nav>
    </div>
      <div class="main">
        <div class="contactform">
    <h2>Contact with me for any Enquiry</h2>
    <form action="connect.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required><br><br>
      <div class="subm">
      <input type="submit" name="submit" value="Submit">
      </div>
    </form>
  </div>
  </div>  
  </body>
  </html>
