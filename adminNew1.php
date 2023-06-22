<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-image: url("road.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
        
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .button-container button {
            margin-bottom: 10px;
            background-color: #A6C62F ;
            color: black;
            padding: 20px 40px; /* Adjust the padding to make the buttons larger */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button-container button:hover {
            background-color: #FFFFFF;
        }

        .logout-button {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .logout-button button {
            background-color: #A6C62F;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-button button:hover {
            background-color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button type="button" onclick="location.href='adminNew.php'">Insert and Delete Expert</button>
        <button type="button" onclick="location.href='DataShowExpert.php'">Expert Data</button>
        <button type="button" onclick="location.href='DataShowUser.php'">User Data</button>
    </div>

    <div class="logout-button">
        <button type="button" onclick="location.href='adminLogin.php'">Logout</button>
    </div>
</body>
</html>
