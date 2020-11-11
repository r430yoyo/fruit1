<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.nav-link{
    color:green;
}
img{
    width: 100%;
    height: auto;
}
.container{
  margin-top: 3rem;
}
</style>
<body>
<div class="container">
  <div class="row">
      <div class="col-lg-1 col-md-3 col-sm-12"></div>
      <div class="col-lg-2 col-md-3 col-sm-12">
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
      <div class="col-lg-9 col-md-6 col-sm-12"><img src="images/sale.jpg"></div>
  </div>
</div>
</body>
</html>
<?php include('footer.php');?>