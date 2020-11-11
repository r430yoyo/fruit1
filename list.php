<?php include('header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style type="text/css">
.nav-link{
    color:green;
}
.container{
  margin-top: 3rem;
}
</style>
</head>
<body >
<div class="container">
  <div class="row">
    <div class="col-lg-1 col-md-3 col-sm-12"></div>
      <div class="col-lg-2 col-md-3 col-sm-12">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="car.php">購物車</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">會員資料修改</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">訂單查詢</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">聯絡客服</a>
          </li>
        </ul>
      </div>
    <div class="col-lg-9 col-md-3 col-sm-12">
      <img src="images/list.png" width="100%">
      <form action="" method="post" name="form1" id="form1">
      <table width="100%" border="0" align="center" cellpadding="20" cellspacing="1" bgcolor="#C6C6C6">
          <tr>
            <td align="center" bgcolor="brown">編碼</td>
            <td align="center" bgcolor="brown">品名</td>
            <td align="center" bgcolor="brown">尺寸/重量</td>
            <td align="center" bgcolor="brown">價格</td>
            <td align="center" bgcolor="brown">數量</td>
            <td align="center" bgcolor="brown">小計</td>
          </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF">2001</td>
            <td align="center" bgcolor="#FFFFFF">酪梨</td>
            <td align="center" bgcolor="#FFFFFF">顆</td>
            <td align="center" bgcolor="#FFFFFF">70</td>
            <td align="center" bgcolor="#FFFFFF">2</td>
            <td align="right" bgcolor="#FFFFFF">140元</td>
          </tr>
          <tr>  
            <td colspan="8" align="right" bgcolor="#FFFFFF">100</td>
          </tr>
          <tr>
            <td colspan="5" align="center" bgcolor="#FFFFFF">運費</td>
            <td colspan="8" align="right" bgcolor="#FFFFFF">100</td>
          </tr>
          <tr>
            <td colspan="5" align="center" bgcolor="#FFFFFF" >總額</td>
            <td colspan="8" align="right" bgcolor="#FFFFFF" >300</td>
          </tr>
          <tr>
            <td colspan="8" align="center" bgcolor="#FFFFFF">
            <p>~ 本 次 訂 單 已 完 成 ~</p>  
            </td>
          </tr>
          <tr>
            <td colspan="8" align="center" bgcolor="#FFFFFF">
            <input type="button" value="會員專區">
            <input type="button" value="登出">
            </td>
          </tr>
          </form> 
              
    </div>
  </div>
</div>
</body>
<!-- <?php include('footer.php')?> -->
</html>