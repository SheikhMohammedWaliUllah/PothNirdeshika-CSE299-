<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('path.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
    
        h1 {
            text-align: center;
            margin-top: 150px;
            color: #7d7 ;
        }
    
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 60px;
        }
    
        .button {
            padding: 10px 20px;
            font-size: 25px;
            background-color: #4B0082;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
        }
    
        .button:hover {
            background-color: #45a049;
        }
        
        /* Embedded navbar styles */
        .navbar {
            width: 90%;
            padding: 15px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    
        .logo {
            width: 70px;
            margin-top: -10px;
            cursor: pointer;
        }
    
        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin: 20px;
        }
    
        .navbar ul li a {
            text-decoration: none;
            text-transform: uppercase;
            color: rgb(179, 182, 0);
            font-weight: 600;
            padding: 15px;
        }
    
        li a:hover {
            background: white;
            transition: 0.5s;
        }
    
        .navbar a:hover {
            color: black;
        }
        
        /* Responsive styles */
        @media (max-width: 480px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }
    
            .navbar ul li {
                margin: 10px 0;
            }
    
            .container {
                max-width: 100%;
                padding: 10px;
            }
    
            h1 {
                font-size: 24px;
                margin-top: 80px;
            }
    
            .button-container {
                flex-direction: column;
                margin-top: 30px;
            }
    
            .button {
                padding: 8px 16px;
                font-size: 18px;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img class="logo" src="logo.jpg">
        <ul>
            <li><a id="homeButton" href="homepage.php">HOME</a></li>
            <li><a id="aboutButton" href="about.php">ABOUT</a></li>
            <li><a id="adminButton" href="user.php ">ADMIN</a></li>
            <li><a id="userButton" href="sns/index.php">USER</a></li>
        </ul>
    </div>

    <div class="container">
        <h1><marquee>Welcome to Expert Zone! How can I help you?</marquee></h1>

        <div class="button-container">
            <button class="button" onclick="location.href='Marker test/map.php'">Expert Location</button>
            <button class="button" onclick="location.href='Direction/index.php'">Route</button>
            <button class="button" onclick="location.href='Call Feature/index.php'">Call Expert</button>
        </div>
    </div>
</body>
</html>

