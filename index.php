<!DOCTYPE html>
<html>
    <head>
        <title>
           Starlight Co
        </title>
        <link rel="stylesheet" type="text/css" href="loginnew.css">
         <style>
            nav {
    position: absolute;
    top: 20px; /* Adjust this value as needed */
    right: 20px; /* Adjust this value as needed */
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline-block;
    margin-left: 10px; /* Adjust spacing between items */
    
}

nav ul li a {
    width: 120px;
                display: block;
                text-decoration: none;
                text-align: center;
                background: transparent;
                font-size: 17px;
                color: white;
                padding: 20px 10px;
                font-family: Arial;
}

nav ul li a:hover{
    background: skyblue;
                color: black;
}



        </style>
    </head>
    <body>
        <nav>
            <ul>
                
                <li><a href="home.html">HOME</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </nav>
        
        <form action="login.php" method="post">
     	<h2>Welcome</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	
                 <div class="input-box">
     	<input type="text" name="uname" placeholder="User Name"><br>
                 </div>

     	
                 <div class="input-box">
     	<input type="password" name="password" placeholder="Password"><br>
                 </div>

     	<button type="submit">Login</button>
     </form>
    </body>
</html>

