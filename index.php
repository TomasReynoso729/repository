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
            <a href="#gallery">Gallery</a>
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
        <div class="video-container">
            <video src="img/v1.mp4" type="video/mp4" autoplay loop muted class="vid"></video>
        </div>

        <div class="content">
            <h1>Find A Delicious Meal to Make!</h1>
            <p>We have recipes and tutorials on how to make each one at home.</p>
            <a href="service.php"><button class="btn">Click Here!</button></a>
        </div>

    </section>
