<!DOCTYPE html >
<html>
  <?php require_once('../../controller/header.php'); ?>
  <body>
    <?php require_once('../../controller/navbar.php'); ?>

    <div class="wrapper">
        <div class="container">
            <div class="row">
              <div class="col-md-12 card-box" id="map" style="min-height:480px"></div>
            </div>

            <?php require_once('../../controller/bottombar.php'); ?>

        </div>
    </div>

    <?php require_once('../../controller/footer.php'); ?>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-7.2750, 112.737414),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://localhost/SIG_Dukcapil/controller/api/api_echo.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              // create element div
              var infowincontent = document.createElement('div');
              // create element strong
              var strong = document.createElement('strong');
              // print/echo element name
              strong.textContent = name;
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var strong = document.createElement('strong');
              // print/echo element name
              strong.textContent = type;
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address;
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = point;
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));
              infowincontent.appendChild(document.createElement('br'));

              /*
              var text = document.createElement('a');
              text.textContent = 'Dashboard';
              infowincontent.appendChild(text).setAttribute("href","../../view/dashboard_1/index.php?id='"+id+"'");
              infowincontent.appendChild(text).setAttribute("target","_");
              infowincontent.appendChild(text).setAttribute("class","btn btn-primary waves-effect waves-light");
              infowincontent.appendChild(text).setAttribute("data-animation","contentscale");
              infowincontent.appendChild(text).setAttribute("data-plugin","custommodal");
              infowincontent.appendChild(text).setAttribute("data-overlaySpeed","100");
              infowincontent.appendChild(text).setAttribute("data-overlayColor","#36404a");
              infowincontent.appendChild(document.createElement('br'));

              $(document).ready(function(){
                  $("#myBtn").click(function(){
                      $("#custom-modal").modal("show");
                  });
              });
              */

              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('mouseover', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
              marker.addListener('mouseout', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.close(map, marker);
              });
              var id = markerElem.getAttribute('id');
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(window.open('http://localhost/SIG_Dukcapil/view/dashboard_1/index.php?id='+id));
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACUzpYrmPJA4xzHUVJsCwSB9y_SmAaQSE&callback=initMap">
    </script>

  </body>
</html>
