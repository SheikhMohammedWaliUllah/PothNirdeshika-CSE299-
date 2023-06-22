<!DOCTYPE html>

<html lang = "en">
    <head>
        <title>Location</title>
        <script src = "https://ajax.googlepis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src ="https://maps.googlepis.com/maps/api/js?key=AIzaSyBd-yOJJuyOrVtEViWg6YF-ENny5NqcGz8&libraries=places"></script>
    </head>
        <body>
            <input type="text" id ="location">

            <script type = "text/javascript">
                $(document).ready(function(){
                    var autocomplete;
                    var id = 'location';

                    autocomplete = new google.maps.places.Autocomplete((document.getElementByID(to)),{
                        types: ['geocode'],
                    })
                
                
                });
            </script>
         
        </body>
</html>