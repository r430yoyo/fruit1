<?php include('header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
form{
    color:green;
    
}
#static{
    width:80%;
    height:30vh;
    background:yellow;
    border:3px red dashed;
    margin-top:5%;
    text-align:center;
    line-height:30vh;
    font-size:1.3rem;
    color:red;
}
label{
    font-size:1.3rem;
}
.container{
    margin-top: 2rem;
}
</style>
<body>
<div class="container">
    <div class="row">
    <div class="col-lg-2 col-md-3 col-sm-12 offset-1" >
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
    <div class="col-lg-9 col-md-5 col-sm-12 ">
        <form>
            <div>
                <h6>請填寫以下資料<br>將寄送新密碼至您的信箱</h6>
                <label for="exampleInputPassword1">會員姓名</label>
                <input type="username" name="會員姓名">
                    <p>
                <label for="email">信箱</label>
                <input type="email" name="信箱">
                <p>
                <button type="button" class="btn btn-success">送出</button>
            </div>
        </form>
        <div id="static">
        新密碼已寄出請重新登入
        </div>
    </div>
    </div>
</div>
</body><p></p>
</html>
<?php include('footer.php')?>