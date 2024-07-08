<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="movie.css">
        
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            background-image: linear-gradient(
                rgba(0, 0, 0, 0.7), 
                rgba(0, 0, 0, 0.7)
            ), url(Image/bg.jpg);
            background-size: cover;
            background-position: center;
        }
        
    </style>
</head>
<body>
    <div class="headbar">
        <div class="user-greeting">
           
            <h1 class="welcome-text">Welcome, <?php echo $_SESSION['name']; ?></h1>
             <a href="javascript:history.back()" class="back-button">Back</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    
    
    <div class="wrapper">
        <img src="Image/blackpanther.jpg" alt="">
        <div class="text-box">
            <h2>Codename: BP</h2>
            <div class="buttons">
                <a href="movie4watch.php" class="watch-button">Watch</a>
                <a href="index4.php" class="review-button">Review</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
}else{
    header("Location: index.php");
    exit();
}
 ?>





