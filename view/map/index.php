<!DOCTYPE html >
<html>
  <?php require_once('../../controller/header.php'); ?>

  <body>
    <?php require_once('../../controller/navbar.php'); ?>

    <div class="wrapper">
        <div class="container">
          <div class="row">
						<div class="col-md-12 card-box">
							<h4 class=" m-t-0 header-title"><b>Iklan Layanan Masyarakat</b></h4>
							<p class="text-muted m-b-30 font-13">Berikut iklan layanan masyarakat dari Dinas Kependudukan dan Pencatatan Sipil Pemkot Surabaya.</p>
							<div  align="center">
                <div id="gallery" style="display:none;">

                  <?php 
                   $executeiklan = mysql_query("SELECT id_iklan, nama_iklan, tipe_iklan, embed_iklan, update_at,substring(embed_iklan, 18) as urliklan, update_at, status_iklan FROM iklan WHERE status_iklan='1' order by status_iklan asc, id_iklan desc");
                    while($rowiklan = mysql_fetch_array($executeiklan)) {

                      if($rowiklan['tipe_iklan']==1){
                        echo '
                          <img alt="Youtube Video"
                          data-type="youtube"
                          data-videoid="'.$rowiklan['urliklan'].'"
                          data-description="'.$rowiklan['nama_iklan'].'">
                        ';
                      }elseif($rowiklan['tipe_iklan']==2){
                        $src='../../'.$rowiklan['embed_iklan'];
                        echo '
                          <img alt="Preview Image"
                           data-image="'.$src.'"
                           data-description="'.$rowiklan['nama_iklan'].'">
                        ';
                      }

                    }
                  ?>                
                </div>
              </div>
					  </div>
				  </div>
				</div>

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
          downloadUrl('http://031801.webplussolution.com/controller/api/api_echo.php', function(data) {
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
                //infoWindow.open(window.open('http://localhost/SIG_Dukcapil/view/dashboard_1/index.php?id='+id));
                infoWindow.open(window.open('http://031801.webplussolution.com/view/dashboard_1/index.php?id='+id));
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

     <!-- carousel view map -->
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-common-libraries.js'></script> 
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-functions.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-thumbsgeneral.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-thumbsstrip.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-touchthumbs.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-panelsbase.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-strippanel.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-gridpanel.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-thumbsgrid.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-tiles.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-tiledesign.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-avia.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-slider.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-sliderassets.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-touchslider.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-zoomslider.js'></script> 
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-video.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-gallery.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-lightbox.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-carousel.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/js/ug-api.js'></script>
      <script type='text/javascript' src='../../assets/plugins/unitegallery/themes/default/ug-theme-default.js'></script>
      <link rel='stylesheet' href='../../assets/plugins/unitegallery/css/unite-gallery.css' type='text/css' />
      <link rel='stylesheet' href='../../assets/plugins/unitegallery/themes/default/ug-theme-default.css' type='text/css' />
      <script type="text/javascript">
        jQuery(document).ready(function(){
          jQuery("#gallery").unitegallery({
          slider_control_zoom:false,  
          slider_enable_zoom_panel: false,  
          gallery_autoplay:true,
          gallery_width:1200,   
          gallery_height:745 
          });
        });
      </script>
      <!-- carousel view map -->

  </body>
</html>
