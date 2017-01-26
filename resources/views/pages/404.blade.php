@extends('layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
div1 {
	float: left;
    width: 14.28%;
    height: 920px;
    background-color: red;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation: example 1s infinite;
    animation-delay: 1s;
    z-index: 0;
    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    0%   {background-color: while;}
    25%  {background-color: yellow;}
    50%  {background-color: cyan;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color: purple;}
    25%  {background-color: red;}
    50%  {background-color: blue;}
    100% {background-color: white;}
}
div2 {
	float: left;
    width: 14.28%;
    height: 920px;
    background-color: red;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example2;
    animation: example2 1s infinite;
    animation-delay: 1.5s;
    z-index: 0;
    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example2 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example2 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
div3 {
	float: left;
    width: 14.28%;
    height: 920px;
    background-color: red;
    -webkit-animation-name: example3; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example3;
    animation: example3 1s infinite;
    animation-delay: 1.2s;
    z-index: 0;
    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example3 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example3 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
div4 {
	float: left;
    width: 14.28%;
    height: 920px;
    background-color: red;
    -webkit-animation-name: example4; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example4;
    animation: example4 1s infinite;
    animation-delay: 1.7s;
    z-index: 0;
    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example4 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example4 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
div5 {
	float: left;
    width: 14.28%;
    height: 920px;
    background-color: red;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example2;
    animation: example 1s infinite;
    animation-delay: 1.6s;
    z-index: 0;
    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example3 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example3 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
div6 {
	float: left;
    width: 14.28%;
    height: 920px;
    background-color: red;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example2;
    animation: example 1s infinite;
    animation-delay: 1.1s;
    z-index: 0;
    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example3 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example3 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
div7 {
	float: left;
    width: 14.28%;
    height: 920px;
    background-color: red;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example2;
    animation: example 40s infinite;
    animation-delay: 0.9s;
    z-index: 0;
    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example3 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example3 {
    0%   {background-color: red;}
    25%  {background-color: yellow;}
    50%  {background-color: blue;}
    100% {background-color: green;}
}
h1{
	z-index: 2;
    left: 0;
    line-height: 200px;
    margin: auto;
    margin-top: 15%;
    position: absolute;
    top: 50%;
    width: 100%;

}
.text{ 


}
.wrapper{
	position: relative; 
   	width: 100%;
   	 vertical-align: middle;
   
}
</style>
</head>
<body>


<div class="wrapper">

<h1 style="font-size: 25vw; color: black;" align="center">404</h1>

<div1></div1>
<div2></div2>
<div3></div3>
<div4></div4>
<div5></div5>
<div6></div6>
<div7></div7>
</div>

</body>
</html>



@endsection