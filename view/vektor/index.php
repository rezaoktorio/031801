<!DOCTYPE html >
<html>
  <?php require_once('../../controller/header.php'); ?>
  <body>
    <?php require_once('../../controller/navbar.php'); ?>

    <div class="wrapper">
        <div class="container">
            <div class="row">
              <div class="col-md-12 card-box" style="max-height:480px">
                <style>.embed-container {
                  position: relative; padding-bottom: 38%; height: 0; max-width: 100%;}
                  .embed-container iframe, .embed-container object, .embed-container iframe {
                    position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{
                      position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}
                    </style>
                <div class="embed-container">
                  <iframe width="300" height="115" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Kecamatan" src="//www.arcgis.com/apps/Embed/index.html?webmap=c8702f36fc6244aaa5c5f05d86e5f29b&amp;extent=112.5459,-7.3878,112.8823,-7.1736&zoom=true&previewImage=false&scale=true&basemap_gallery=true&disable_scroll=true&theme=light">
                  </iframe>
                </div>
              </div>
            </div>

            <?php require_once('../../controller/bottombar.php'); ?>

        </div>
    </div>

    <?php require_once('../../controller/footer.php'); ?>
  </body>
</html>
