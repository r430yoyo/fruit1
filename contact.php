<?php include('header.php');?>
<head>
<style type="text/css">
#head{
    background-color:green;
    font-size:1.5rem;
    color:white;
    text-align:center;
    margin-bottom:3vh;
    margin-top:3vh;
}
h5{
    color:green;
}
label{
    color:green;
    font-size:1.3rem;
}
.btn-primary {
    color: #fff;
    background-color: green;
    border-color: green;
}
.btn-primary:hover{
    background-color: green;
}
.btn-primary:active{
    background-color: green;
}
.btn-primary:focus{
    background-color: green;
}
.row>button{
  margin-top: 2rem;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>
<div class="container">
  <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-12 offset-1">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="car.php">購物車</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit.php">會員資料修改</a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link active">訂單查詢</a>
            <ul>
              <li><a href="unpaylist.php">未付款訂單</a></li>
              <li><a href="alllist.php">所有訂單</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">聯絡客服</a>
          </li>
        </ul>
      </div>
    <div class="col-lg-8 col-md-8 col-sm-12 offset-1">
      <div id="head">聯絡客服</div>
      <h5>客服專線：04-22546285 
      </br>
      (平日 9:00-22:30、週日13:30-18:00)</h5>
      <h5>客服信箱：fruitTohow@gmail.com</h5>
      <form>
        <div >
          <label for="exampleFormControlTextarea1">意見箱:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <div class="row">
            <button type="button" class="btn btn-primary btn-lg">送出</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<hr>
</body>
</html>
<?php include('footer.php');?>