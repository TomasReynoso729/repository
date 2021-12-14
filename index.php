<?php 
 session_start();
 if(!isset($_SESSION[username])){
 header('Location: sign.html');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Foods</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <header>

        <a href="#" class="logo"><img src=" " alt="logo">
        </a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#recipe">Recipe</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">
                    <?php if(isset($_SESSION['username'])){ echo$_SESSION['username'];}?>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
  
                </div>
            </div>
        </nav>

    </header>

  <!-- Home Page -->

    <section class="home" id="home">

        <div class="content">
            <h1>Find A Delicious Meal to Make!</h1>
            <p>We have recipes and tutorials on how to make each one at home.</p>
            <a href="service.php"><button class="btn">Click Here!</button></a>
        </div>

    </section>
 
  <!-- Recipe Section-->

    <section class="recipe" id="recipe">

        <h1 class="heading">Recipes</h1>

        <div class="box-container">

            <div class="box" data-aos="fade-left">
                <img src="img/p1.jpg" alt="">
                <h3>Pizza</h3>
                <div class="icons">
                    <a href="https://tasty.co/recipe/pizza-dough" class="far fa-newspaper"></a>
                    <a href="https://www.youtube.com/watch?v=sv3TXMSv6Lw" class="fab fa-youtube"></a>
                </div>
            </div>
         
          <div class="box" data-aos="fade-left">
                <img src="img/p2.jpg" alt="">
                <h3>Peppermint Bark</h3>
                <div class="icons">
                    <a href="https://tasty.co/recipe/peppermint-bark"
                        class="far fa-newspaper"></a>
                    <a href="https://www.youtube.com/watch?v=5i-EtJ1erV8" class="fab fa-youtube"></a>
                </div>
            </div>
         
          <div class="box" data-aos="fade-left">
                <img src="img/p3.jpg" alt="">
                <h3>Chocolate Chip Cookies</h3>
                <div class="icons">
                    <a href="https://tasty.co/recipe/chocolate-chip-cookies"
                        class="far fa-newspaper"></a>
                    <a href="https://www.youtube.com/watch?v=3vUtRRZG0xY" class="fab fa-youtube"></a>
                </div>
            </div>
            
         <div class="box" data-aos="fade-left">
                <img src="img/p4.jpg" alt="">
                <h3>Brownies</h3>
                <div class="icons">
                    <a href="https://tasty.co/recipe/ultimate-brownies"
                        class="far fa-newspaper"></a>
                    <a href="https://www.youtube.com/watch?v=lIb_741_dIw" class="fab fa-youtube"></a>
                </div>
            </div>
          
         <div class="box" data-aos="fade-left">
                <img src="img/p5.jpg" alt="">
                <h3>Fried-Chicken Sandwich</h3>
                <div class="icons">
                    <a href="https://tasty.co/recipe/buttermilk-fried-chicken-sandwich"
                        class="far fa-newspaper"></a>
                    <a href="https://www.youtube.com/watch?v=gGnkF1_vHV0" class="fab fa-youtube"></a>
                </div>
            </div>
         
         <div class="box" data-aos="fade-left">
                <img src="img/p6.jpg" alt="">
                <h3>Chicken Alfredo</h3>
                <div class="icons">
                    <a href="https://tasty.co/recipe/easy-chicken-alfredo-penne"
                        class="far fa-newspaper"></a>
                    <a href="https://www.youtube.com/watch?v=CTTsN3QggDc" class="fab fa-youtube"></a>
                </div>
            </div>
        
         <div class="box" data-aos="fade-left">
                <img src="img/p7.jpg" alt="">
                <h3>Butter Chicken</h3>
                <div class="icons">
                    <a href="https://tasty.co/recipe/easy-butter-chicken"
                        class="far fa-newspaper"></a>
                    <a href="https://www.youtube.com/watch?v=VHfhCXkJh34" class="fab fa-youtube"></a>
                </div>
            </div>  
         
         <div class="box" data-aos="fade-left">
                <img src="img/p8.jpg" alt="">
                <h3>Chicken Fajita Quesadilla</h3>
                <div class="icons">
                    <a href="https://tasty.co/recipe/chicken-fajita-quesadilla"
                        class="far fa-newspaper"></a>
                    <a href="https://www.youtube.com/watch?v=urk37CYz5PU" class="fab fa-youtube"></a>
                </div>
            </div>  
         
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/gallary.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 60, once: false, duration: 2000,
            useClassNames: false,
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,
        });
    </script>

</body>

</html>
