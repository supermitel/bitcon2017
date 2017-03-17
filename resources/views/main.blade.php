@extends('layout')

@section('content')

<div class="jumbotron text-center"> 
   
  <img src="/images/logo.png" class="logo-img"> 
  
  <p>Brasov IT - Contest 2017</p> 
  
</div>

<!-- Container (About Section) -->
<div id="about" class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2>About BIT-CON</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p style="background-color: #eee;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <br>
    </div><br><br>
    <div class="col-sm-4">
        <img src="/images/network.png" style="width: 20vw;">
    </div>
  </div>
</div>

<div class="container-section" style="background-color: rgba(0, 67, 38, .8); color: white;">
   <div class="container">
  <div class="row"><br><Br>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8" >
      <h2 style="color: white;">Our Values</h2><br>
      <h4 style="color: white;"><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p style="color: white;"><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
  </div>
  </div>



<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center" style="background-color: rgba(3, 134, 159, .3);">
  <h2>CATEGORII</h2>
  
  <br>

  <div class="row slideanim">
 <center>
    <div class="col-sm-4">
     <center>
      <div class="object">
      <object data="/images/desktop.svg" type="image/svg+xml" class="category"> </object>
      </div>
      <h4>Desktop</h4>
      <p></p>
    </div>
    <div class="col-sm-4">
     <center>
    <div class="object">
       <object data="/images/mobile.svg" type="image/svg+xml" class="category"> </object>
    </div>   
      <h4>Mobile</h4>
      <p></p>
    </div>
    <div class="col-sm-4">
     <center>
    <div class="object">
       <object data="/images/embedded.svg" type="image/svg+xml" class="category"> </object>
    </div>   
      <h4>Embedded</h4>
      <p></p>
    </div>
    </center>
  </div>

  <br><br>
  <div class="row slideanim">
  <center>
    <div class="col-sm-6">
    <div class="object">
      <object data="/images/web.svg" type="image/svg+xml" class="category"> </object>
      </div>
      <h4>Web</h4>
      <p></p>
    </div>
    <div class="col-sm-6">
    <div class="object">
      <object data="/images/security.svg" type="image/svg+xml" class="category"> </object>
      </div>
      <h4>Security</h4>
      <p></p>
    </div>
   </center>  
  </div>
</div>
</div>

<!-- Container (Portfolio Section) -->
<br>
  
  <center><h2>Organizatori</h2></center>
  <style>
  h3{
    color: black;
  }
  </style>
  <div class="row">
    <div class="col-sm-6">
    <b><center>
      <h3> Universitatea TRANSILVANIA din Brașov </h3>
      <h3> Facultatea de Inginerie Electrică și Știința Calculatoarelor</h3>
      <h3> Departamentul de Automatică și Tehnologia Informației</h3>
    </center></b>  
    </div>
    <div class="col-sm-6">
    <br>
      <b><center><h2 style="color: black;"> Academia de Informatică Brașov </h2></center></b>
    </div>  

   </div>  
    
   <br> 



<!-- Container (Pricing Section) -->


<!-- Container (Contact Section) -->

<div id="contact" class="container-fluid bg-grey" style="background-color: rgba(0, 67, 38, .8); color: white; position: relative;">
  <h2 class="text-center" style="color: white;">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contacteaza-ne pentru mai multe detalii !</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Brasov, RO</p>
      <p><span class="glyphicon glyphicon-phone"></span> +40 771 588 107</p>
      <p><span class="glyphicon glyphicon-envelope"></span> academiadeinfo@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

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
@endsection
