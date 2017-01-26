<!DOCTYPE html>
<html lang="en">
<head>

@include('partials._head')
 </head>


  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    @include('partials._logInModal')
    <div id="particles-js"></div>
    <div class="wrapper">
        @include('partials._nav')
      <div class="padding" style="padding-top: 30px">  
        @yield('content')
        @include('partials._footer')
      </div>
    </div>

   


</body>
</html>
