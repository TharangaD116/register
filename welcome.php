<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>wel come</title>

    <link rel="stylesheet" href="body.css">
</head>
<body>
    <?php
    echo "<h1>Wel come " .$_SESSION['username'] . "</h1>";
    ?>
    <header id="header-1">
        <div class="container">
            <div class="logo">
                <h2>your logo</h2>
            </div>
            <nav id="navbar">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Testimonials</li>
                    <li>Pricing</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </div>
        
    </header>
    
        <div class="label">
            
            <p>this template is alive</p>
        </div>

   
  <div class="text">
    <h1>about our team</h1>
    <p> bio= tharanga dilshan bandara </p>
   

  </div>
  <div class="text2">
      <h1>OUR TEAM MEMBERS</h1>
      <P> Lorem ipsum dolor sit amet consectetur adipisicing elit. </P>
  </div>
  <div class="block">
    <div class="n1">
        
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta tenetur corrupti consequuntur repellendus, itaque, sequi omnis necessitatibus harum autem, quibusdam libero? Possimus est molestias nisi saepe, aspernatur dicta rem sunt.</p>
    </div>
    <div class="n2">
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis fugit possimus labore beatae facilis dicta. Aliquam veniam tempore vitae? Nostrum quisquam nihil aliquid a laboriosam praesentium est consectetur beatae numquam.</p>
    </div>
    <div class="n3">
        
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam consequatur minima voluptates laudantium. Quod, a. Facere odio sed, inventore quaerat odit saepe nulla architecto accusantium molestias quasi dolorem provident nobis!</p>
    </div>
    <div class="n4">
        
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam consequatur minima voluptates laudantium. Quod, a. Facere odio sed, inventore quaerat odit saepe nulla architecto accusantium molestias quasi dolorem provident nobis!</p>
    </div>
    
    
  </div>
  <div>
  <button type="button" class="btn btn-info my-3" ><a href="logout.php" >logout</a></button>
  </div>
</body>
</html>