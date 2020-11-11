
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
.container{
  margin-top: 2rem;
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
            <a class="nav-link active">訂單查詢</a>
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
    <div class="col-lg-7 col-md-7 col-sm-12 offset-1">
      <div id="head">
      會員資料修改
      </div>
      <form>
      <div>
        <p>
        <label for="exampleInputPassword1">用戶名稱</label>
        <input type="username" name="用戶名稱">
        </br>
        <label for="exampleInputPassword1">電子信箱</label>
        <input type="email" name="電子信箱">
        <br>
        <div class="form-check form-check-inline">性別 &ensp;
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">男</label>&ensp;
          <div class="form-check form-check-inline">
            <input class="form-check" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">女</label>
          </div>
        </div> 
        </p>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">郵寄地址</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
          <p>
          <label for="exampleInputPassword1">帳號</label>
          <input type="account" name="帳號">
          <br>
          <label for="Password">舊密碼</label>
          <input type="Password" name="舊密碼">
          <br>
          <label for="Password">新密碼</label>
          <input type="Password" name="新密碼">
          <br>
          <label for="Password">再次輸入新密碼</label>
          <input type="Password" name="再次輸入新密碼">
          </p>
          <div>
            <button type="button" class="btn btn-primary btn-lg">送出修改</button>
          </div>
      </div>
    </form>
    <div id="static">
    <p>資料修改成功!!請重新登入 ~~</p></div>
  </div>
  </div>
</div>
</body>
<?php include('footer.php');?>