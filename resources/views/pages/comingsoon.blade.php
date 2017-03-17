<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

<!--JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="js/inscriere.js"></script>


<script src='http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script src="/js/index.js" type="text/javascript"></script>
<!--STYLES-->
 <link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/inscriere.css">

<style>
body{
  height: 100%;
  overflow:hidden;
  position: relative;
}
.wrapper{
  position: relative;
  text-align: center;
}
h1{
  color: #fff;
  text-align: center;
  font-size: 74px;
  letter-spacing: 10px;
}
#del-countdown{
  width: 850px;
  margin: 15% auto;
}
@media screen and (max-width: 780px) {
    #clock  {
        position: relative;
        display: block;
        clear: both;
        margin-left: 25%;
    }
    #del-countdown{
      position: relative;
      display: inline-table;
    }
    #clock span{
      clear: both;
      position: relative;
      display: block;
      clear: both;
      width: 200px;
      position: relative;
      display: inline-table;

    }
    #units span{
      clear: both;
      position: relative;
      display: block;
      clear: both;
      padding-top: 15px;
      position: relative;
      display: inline-table;
    }

}
#clock span{
  float: left;
  text-align: center;
  font-size: 3.5vw;
  margin: 0 2.5%;
  color: #fff;
  padding: 20px;
  width: 20%;
  border-radius: 20px;
  box-sizing: border-box;
}
#clock span:nth-child(1){
  background: #fa5559;
}
#clock span:nth-child(2){
  background: #26c2b9;
}
#clock span:nth-child(3){
  background: #f6bc58;
}
#clock span:nth-child(4){
  background: #2dcb74;
}
#clock:after{
  content: "";
  display: block;
  clear: both;
}
#units span{
  float: left;
  width: 25%;
  text-align: center;
  margin-top: 30px;
  color: #ddd;
  text-transform: uppercase;
  font-size: 20px;
  letter-spacing: 2px;
  text-shadow: 1px 1px 1px rgba(10,10,10, 0.7);
}

span.turn{
  animation: turn 0.7s ease forwards;
}

@keyframes turn{
  0%{transform: rotateX(0deg)}
  100%{transform: rotateX(360deg)}
}
.wrapper{
    background-color: rgba(42, 120, 75, 0.5);
    height: 100%;
    width: 100%;
}
img{
  filter:drop-shadow(5px 5px 5px black);
}
</style>
</head>
<body>
<div id="particles-js"></div>
<div class="wrapper">
<div class="content">
  <div class="row">


  <div id="del-countdown">
    <img src="/images/logo.png">
    <h2> Coming Soon </h2>
    <h2> Brasov IT Contest - HACKATON </h2>

    <div class="col-xs-6 col-sm-12">
    <div id="clock">
    </div>
  </div>
  <div class="col-xs-6 col-sm-12">
    <div id="units">
      <span>Days</span>
      <span>Hours</span>
      <span>Minutes</span>
      <span>Seconds</span>
    </div>
  </div>
  </div>
</div></div>
  <script src="/js/countdown.js"></script>
</div>
</div>
</body>
</html>
