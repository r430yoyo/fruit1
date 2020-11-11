
<?php include('header.php')?>
<head>
    
<style>
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: green;
}
a{
    color:green;
}
a:hover{
    color:green;
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
#static{
    width:80%;
    height:30vh;
    background:yellow;
    border:3px red dashed;
    margin-top:5%;
    text-align:center;
    line-height:30vh;
    font-size:1.3rem;
}
.container{
  margin-top:2rem ;
}
 /* ul {
    list-style: none;
} */
</style>
<script>
 $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
</head>

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
    <div class="col-lg-8 col-md-7 col-sm-12 offset-1">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">會員登入</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">會員註冊</a>
        </li>
      </ul>
      <div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form>
              <div>
                <label for="exampleInputPassword1">帳號</label>
                <input type="id" name="帳號名稱">請輸入帳號
                <p>
                <label for="exampleInputPassword1">密碼</label>
                <input type="passward" name="密碼">密碼錯誤
                <br>
                <a href="forget.php">忘記密碼</a>
                <p>
                <label for="exampleInputPassword1">驗證碼</label>
              </div>
              <div>
                <button type="button" class="btn btn-primary btn-lg">登入</button>
              </div>
            </form>
            <div id=static>登入成功</div>
            </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <form>
            <div>
                <label for="exampleInputPassword1">用戶名稱</label>
                <input type="username" name="用戶名稱">
                &ensp;請輸入真實姓名<p> </br>  
                <label for="exampleInputPassword1">電子信箱</label>
                <input type="email" name="電子信箱" >&ensp;格式錯誤</p>
                <p>生日：<input type="text" id="datepicker"></p>
                <div class="form-check form-check-inline">性別 &ensp;
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">男</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">女</label> 
                </div>
              <p>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">郵寄地址</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <label for="exampleInputPassword1">帳號</label>
              <input type="account" name="帳號">
              </p>
              <label for="Password">密碼</label>
              <input type="Password" name="密碼">
              <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">訂閱電郵與簡訊案
              </div>
              <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">我同意網站服務條款及隱私政策電子信箱</div>
              <div>
                <button type="button" class="btn btn-primary btn-lg">立即加入</button>
              </div>
            </div>
          </form>
          <div id="static">
          註冊成功!!
          初次購物請登入會員
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<hr>
</body>
</html>
<?php include('footer.php')?>