<!DOCTYPE html>
<html>
<head>
    <title> Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    /*background-image: url(banckground-login.png);*/
    height:100%;
    background-color:black;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    /*opacity: 0.3;*/
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}
    #map {
        height: 100%;
      }
    h1,h2
    {
        color: white;
        font-family: 'Montserrat', 'sans-serif';
    }
    .b1
    {
        text-decoration: none;
        color: white;
    }
    .div2
    {
        background-image: url(banckground-login.png);
        
    }
    a
    {
        text-decoration:none;
        color: black;
        font-family: 'Montserrat', 'sans-serif';
    }
    td.a
    {
        color:white;
    }
    td
    {
        color:black;
        background-color: white;
        border:1px solid antique white;
        padding: 10px;
    }
    button
    {
        text-decoration: none;
        padding: 28px;
        font-size: 20px;
        text-align: center;
        color: black;
        border: 2px solid antiquewhite;
        background-color:white;
    }
    button:hover
    {
        text-decoration: none;
        padding: 24px;
        font-size: 16px;
        text-align: center;
        color: white;
        border: 1px solid antiquewhite;
        background-color:floralwhite;
    }
    a:hover
    {
        text-decoration:none;
        color: #700202;
        font-family: 'Montserrat', 'sans-serif';
    }
    </style>
<body>
    <center>
        <h1> Welcome to the Dashboard! </h1>
        <h2> Switch on your location to help us find you.</h2>
    </center>
    
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=xxxxxxxxxxxxxxxxxxxxxxxxxxxx_XQ  
&callback=initMap">   //Use the API Key in place of the xxx. Obtain the API Key by making Google Cloud account. Key used is not disclosed. 
    </script>
    <center>
    <h1> Quick Services</h1>
    <hr>
    <h2> Book your cab </h2>
    <button class="b1"> 
    <a href="ola.com" > BOOK YOUR OLA CAB </a> </button> <!--Ola API rights belong to me. Cannot be disclosed.  -->

    
    <button class="b1"><a href="uber.com"> BOOK AN UBER</a></button><br>  <!--//Deeplink removed because API rights belong to my account -->

    <h2> Book Your Bus </h2>
    <button class="b1"><a href="Redbus.in"> BOOK YOUR BUS</a></button> <!--//RedBus API link removed. -->
    <br>
    <h2> Get Details about the Local Bus Service </h2>
    <button class="b1"><a href="http://www.mybmtc.com/"> BMTC BUS TIMINGS</a></button>
    <button class="b1"><a href="http://www.mybmtc.com/"> OPEN MYBMTC APP</a> </button>
<br>
        <div class="div2"><br>
    <h1> Emergency Contact</h1> <hr>
    <button class="b1"><a href="https://api.whatsapp.com/send?phone= YOUR NUMBER &text= YOUR MESSAGE "> EMERGENCY WHATSAPP SERVICE </a></button>
    <button class="b1"id="c"><a href="https://api.whatsapp.com/send?phone= YOUR NUMBER &text=http://maps.google.com/maps?q=lat,long"> SEND LOCATION </a></button>
        <table border="2px solid black">
        <tr><td>Police</td><td><a href="tel:+900300400"> 900 300 400</a></td></tr><br><br>
        <tr><td>Ambulance </td><td><a href="tel:+900300400"> 900 300 400</a></td></tr><br><br>
        <tr><td>Your emergency contact numbers </td><td> <a href="tel:+900300400"> 900 300 400 <br> 900 300 400</a></td></tr><br><br>
    </table>
            
        </div>
    </center>  
    </body>