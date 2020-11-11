<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
<style type="text/css">
.dropbtn {
  background-color: #ffffff;
  color: green;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown:hover 
.dropbtn {
  background-color:green; 
  color:#ffffff;
}
.dropbtn:hover .grape a:hover{
  display: block;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown:hover 
.dropdown-content {
  display: block;
}
.dropdown-content a:hover {
  color:#ffffff;
}
.dropdown::before{
  content:'';
  width: 95px;
  height:50px;
  background: url("images/grape01.png") no-repeat;
  position:absolute;
  bottom:50px;
}
.dropdown:hover::before{
  content:'';
  width: 95px;
  height:100px;
  background: url("images/grape.png") no-repeat;
  position:absolute;
  bottom:60px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="images/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <div class="dropdown">
      <!-- <div class="grape"></div> -->
      <button class="dropbtn">關於我們</button>
       <div class="dropdown-content">
        <a href="idea.php">創立理念</a>
        <a href="contactus.php">聯絡我們 </a>
        <a href="QA.php">常見Q&A</a>
      </li>
      <li class="nav-item">
      <div class="dropdown">
      <!-- <div class="grape"></div> -->
      <button class="dropbtn"><a href="hotsale.php">熱銷排行</a></button>
       <div class="dropdown-content">
      </li>
      <li class="nav-item">
      <div class="dropdown">
      <!-- <div class="grape"></div> -->
       <button class="dropbtn">新鮮現貨</button>
       <div class="dropdown-content">
        <a href="timefruit.php">當季水果</a>
        <a href="timefruit2.php">四季水果</a>
      </li>
      <li class="nav-item">
      <div class="dropdown">
      <!-- <div class="grape"></div> -->
       <button class="dropbtn"><a href="place.php">產地介紹</a></button>
       <div class="dropdown-content">
      </li>
      <li class="nav-item">
       <div class="dropdown">
       <!-- <div class="grape"></div> -->
       <button class="dropbtn"><a href="news.php">健康新知</a></button>
       <div class="dropdown-content">
      </li>
      <li class="nav-item">
      <div class="dropdown">
      <!-- <div class="grape"></div> -->
       <button class="dropbtn"><a href="login.php">會員專區</a></button>
       <div class="dropdown-content">
      </li>
      <li class="nav-item">
        <div class="dropdown">
        <!-- <div class="grape"></div> -->
       <button class="dropbtn"><a href="car.php">購物車區</a></button>
       <div class="dropdown-content">
      </li>
       <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
      </div>
     
  </div>
</ul>
</nav>
<div><img src="images/bg1920x500.jpg" width="100%" height="400px"></div> 
</body>
</html>