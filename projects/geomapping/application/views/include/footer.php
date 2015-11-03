</div>
<!-- END WRAPPER -->
<script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td>
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                </td>
                <td>
                    {% if (!i && !o.options.autoUpload) { %}
                        <button class="btn btn-primary start" disabled>
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>

        <!-- The template to display files available for download -->
        <script id="template-download" type="text/x-tmpl">

        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview">
                        {% if (file.thumbnailUrl) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                        {% } %}
                    </span>
                </td>
                <td>
                    <p class="name">
                        {% if (file.url) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                        {% } else { %}
                            <span>{%=file.name%}</span>
                        {% } %}
                    </p>
                    {% if (file.error) { %}
                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                    {% } %}
                </td>
                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td>
                    {% if (file.deleteUrl) { %}
                        <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                        <input type="checkbox" name="delete" value="1" class="toggle">
                    {% } else { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
</div>
 <!--Footer Starts added by palak on 31stmar-->
 <!-- BEGIN MANDATORY SCRIPTS -->
    <
    <script src="<?=base_url();?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END MANDATORY SCRIPTS -->
	  
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?=base_url();?>assets/plugins/backstretch/backstretch.min.js"></script>
    <script src="<?=base_url();?>assets/js/account.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
	  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
                
                	var x_lat = document.getElementById("lat");
                	var x_lng = document.getElementById("lng");
                	$(document).ready(function(){
                    	get_location();
                	});

                	function get_location() {
                    	
                	    if (navigator.geolocation) {
                	        navigator.geolocation.getCurrentPosition(showPosition);
                	    } else { 
                	        x.innerHTML = "Geolocation is not supported by this browser.";
                	    }
                	}

                	function showPosition(position) {
                	    x_lat.innerHTML = position.coords.latitude; 
                	    x_lng.innerHTML = position.coords.longitude; 
						document.getElementById('lat1').value = position.coords.latitude;
						document.getElementById('lng1').value = position.coords.longitude; 
                	    var x_centre = position.coords.latitude + "," + position.coords.longitude;
                	    //alert(x_lng.innerHTML);

                	   
                	    lat = position.coords.latitude ;
                	    lon = position.coords.longitude;
                	    latlon = new google.maps.LatLng(lat, lon);
                	    mapholder = document.getElementById('map1')
                	    mapholder.style.height = '300px';
                	    mapholder.style.width = '1050px';
                	    //mapholder.style.padding='10px';

                	    var myOptions = {
                	    center:latlon,zoom:9,
                	    mapTypeId:google.maps.MapTypeId.ROADMAP,
                	    mapTypeControl:false,
                	    navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
                	    }
                	    
                	    var map = new google.maps.Map(document.getElementById("map1"), myOptions);
                	    var marker = new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
                	    
                	}
                
				</script>

    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="<?=base_url();?>assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-select/bootstrap-select.js"></script>
    <script src="<?=base_url();?>assets/plugins/icheck/icheck.js"></script>
    <script src="<?=base_url();?>assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
    <script src="<?=base_url();?>assets/plugins/nprogress/nprogress.js"></script>
    <script src="<?=base_url();?>assets/plugins/charts-sparkline/sparkline.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/breakpoints/breakpoints.js"></script>
    <script src="<?=base_url();?>assets/plugins/numerator/jquery-numerator.js"></script>
    <!-- END MANDATORY SCRIPTS -->
	  <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?=base_url();?>assets/plugins/parsley/parsley.js"></script>
    <script src="<?=base_url();?>assets/plugins/parsley/parsley.extend.js"></script>
	  <!-- BEGIN PAGE LEVEL SCRIPTS  File uplaod -->
    <script src="<?=base_url();?>assets/plugins/dropzone/dropzone.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/tmpl.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/load-image.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/canvas-to-blob.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/jquery.blueimp-gallery.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
    <script src="<?=base_url();?>assets/plugins/jquery-file-upload/js/main.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS TABLE -->
 <script src="<?=base_url();?>assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
    <script src="<?=base_url();?>assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="<?=base_url();?>assets/plugins/datatables/dataTables.tableTools.js"></script>
	  <script src="<?=base_url();?>assets/js/table_editable.js"></script>
     <script src="<?=base_url();?>assets/js/table_dynamic.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->

	  <script src="<?=base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>
    <script src="<?=base_url();?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="<?=base_url();?>assets/plugins/pickadate/picker.js"></script>
    <script src="<?=base_url();?>assets/plugins/pickadate/picker.date.js"></script>
    <script src="<?=base_url();?>assets/plugins/pickadate/picker.time.js"></script>
   <!-- END  PAGE LEVEL SCRIPTS -->

   <script src="<?=base_url();?>assets/plugins/magnific/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/gallery-mixitup/jquery.mixitup.js"></script>
    <script src="<?=base_url();?>assets/js/gallery.js"></script>
    
    <!-- END  PAGE LEVEL SCRIPTS -->
        
    <script src="<?=base_url();?>assets/js/application.js"></script>
	
	<!-- BEGIN PAGE LEVEL SCRIPTS form wizrd-->
    <script type="text/javascript" src="<?=base_url();?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
  
</body>

</html>