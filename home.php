<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="adhome.css">
        
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
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: transparent;
            backdrop-filter: blur(30px);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .movie-list {
            list-style-type: none;
            padding: 0;
            
        }
        .movie-list li {
            margin-bottom: 10px;
        }
        .movie-list li a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            color: white;
        }
        .movie-list li a:hover {
            background-color: darkgreen;
        }
        .container h2 {
            margin-left: 300px;
            color: white; /* Set the color of the h1 heading to white */
        }
    </style>
</head>
<body>
    <div class="headbar">
        <div class="user-greeting">
            <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <br><br><br><br><br>
    
    <div class="container">
        <h2>Movie List</h2>
        <ul class="movie-list">
            <li><a href="movie1.php">65- Adam Driver</a></li>
            <li><a href="movie2.php">Guy Ritchie's The Covenant</a></li>
            <li><a href="movie3.php">Disney The Little Mermaid</a></li>
            <li><a href="movie4.php">Black Panther</a></li>
            <li><a href="movie5.php">Avatar: Way of Water </a></li>
            <li><a href="movie6.php">The Black Demon</a></li>
        </ul>
    </div>
</body>
</html>

<?php 
}else{
    header("Location: index.php");
    exit();
}
 ?>
