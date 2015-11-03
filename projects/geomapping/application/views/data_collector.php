 <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Data Collector</h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default map-panel">
                        <div class="panel-body">
                          <form method="post" action="<?=base_url();?>collector/data_capture">
                          </br>
                            <div class="row" style="padding-left:30px;">
                                <div class="col-md-4 col-sm-4 col-xs-4"><b>Current Location</b></div>
                                <div class="col-md-4 col-sm-4 col-xs-4" id="lat">Latitude</div>
                                <div class="col-md-4 col-sm-4 col-xs-4" id="lng">Longitude</div>
                                <input type="hidden" name="latitude" id="lat1" value=""/>
								                <input type="hidden" name="longitude" id="lng1" value=""/>
                            </div>
                       
                            <div class="row map_padding">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                   <!-- <div class="map" id="simple-map"></div>-->
                                   <div class="col-md-12 col-sm-12 col-xs-12" id="map1"></div>
                                </div>
                            </div>
                            <div class="panel-heading pull-right">
                              <input  name="Data Collector" value="Data Collector" type="submit" class="btn btn-primary">
						                </div>
						              </form>
                        </div>
                    </div>
                </div>
                
               <style>
               		#map1 {
               			height: 50%;
               			width: 100%!important;
               			margin: 0px;
               			padding: 0px;
               			}
               
               </style>
        
            <!-- END MAIN CONTENT -->

        </div>


<!--       
<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;	
}
</script>

</body>
</html>

-->
      