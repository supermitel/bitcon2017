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
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <script src="js/particles.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
   <script src='http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
   <script src="js/index.js" type="text/javascript"></script>
  @include('partials._style')
 </head>


  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    @include('partials._logInModal')
    <div id="particles-js"></div>
    <div class="wrapper">
        @include('partials._nav')
        @include('partials._content')
        @include('partials._footer')
    </div>

   


</body>
</html>
