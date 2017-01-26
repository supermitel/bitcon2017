<center><div id="contact" class="container-fluid bg-grey" style="background-color: rgba(0, 67, 38, .8); color: white; position: relative;">
  <br><Br><BR>
  <h2 class="text-center" style="color: white;">CONTACT</h2>
  <div class="row">
    
      <p>Contacteaza-ne pentru mai multe detalii !</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Brasov, RO</p>
      <p><span class="glyphicon glyphicon-phone"></span> +40 771 588 107</p>
      <p><span class="glyphicon glyphicon-envelope"></span> academiadeinfo@gmail.com</p><br><br>
    
   
      <div class="row">
     
        <div class="col-sm-4 col-md-offset-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-4 col-md-offset-4 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <div class="row">
      <div class="col-sm-4 col-md-offset-4 form-group">
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="6"></textarea><br>
      </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-md-offset-4 form-group">
          <button class="btn btn-default pull-center" type="submit" style="width: 100px;">Trimite</button>
        </div>
      </div>
    </div>
  </div>


</center>
<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(45.651142 , 25.602888);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>