<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bit-CON | Brasov</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/inscriere.css">
    <script src="js/inscriere.js"></script>
  <script src="js/particles.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
   <script src='http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
   <script src="js/index.js" type="text/javascript"></script>
  @include('partials._style')
  <style>
  #particles-js {
  width: 100%;
  height: 1020px;
  margin-bottom: 0;
  z-index: 0;
  position: absolute;
  top: 0;
  left: 0;
  user-select: none;
  
}
  
</style>
 </head>

  
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
   <div id="particles-js"></div>
    <div class="wrapper">
        @include('partials._nav')<br>
        @include('partials._inscriete')
        @include('partials._footer')
    </div>
   


</body>
</html>
