<!DOCTYPE html>
<html lang="en">
  <head>
          <title>LPU Book</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="author" content="Akash Kumar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="title" content="test">

    <link rel="shortcut icon" href="./icon.jpg"/>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <script src="bootstrap/js/jquery-1.9.0.min.js"></script>
    <script>
var i = 0;
var txt = "My Phone Book  (All are Dummy Records)";
var speed = 30;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

  </head>
  <body style="background-color:#a2c3c3;" onload="typeWriter()">
      <nav class="navbar navbar-expand-sm bg-dark navbar-light">
   <a class="navbar-brand" href="#">
    <img src="icon.jpg" alt="Logo" style="width:50px;">
  </a>
  ...
</nav>
   

    <div class="container mainbody">
      <div class="page-header" >
        <h1 ><b id="demo"></h1>
      </div>
      
    