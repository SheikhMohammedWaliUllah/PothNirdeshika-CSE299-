<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Distances Between Two Places App</title>
    <link href="Content/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        .go-back-button {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>
<body>

    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Showing the path</h1>
            <p>This part will help you see the path recommended for you</p>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label"><i class="fa-regular fa-circle-dot"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="from" placeholder="Origin" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="to" class="col-xs-2 control-label"><i class="fa-solid fa-location-dot"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="to" placeholder="Destination" class="form-control">
                    </div>
                </div>
            </form>
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg" onclick="calcRoute();"><i class="fas fa-map-signs"></i></button>
                <button class="btn btn-secondary btn-lg go-back-button" onclick="goBack();">Go Back</button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap"></div>
            <div id="output"></div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&libraries=places"></script>

    <script src="app.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>
</html>
