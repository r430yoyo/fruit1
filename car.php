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
</style>
</head>
<body >
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
                <li><a href="unpaylist.php">未付款訂單</a>
                </li>
                <li><a href="alllist.php">所有訂單</a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">聯絡客服</a>
          </li>
        </ul>
      </div>
    <div class="col-lg-9 col-md-9 col-sm-12">
      <img src="images/carsalse.png" width="100%">
      <div>
        <form action="" method="post" name="form1" id="form1">
        <table width="100%" border="0" align="center" cellpadding="20" cellspacing="1" bgcolor="#C6C6C6">
            <tr>
              <td align="center" bgcolor="green">編碼</td>
              <td align="center" bgcolor="green">品名</td>
              <td align="center" bgcolor="green">尺寸/重量</td>
              <td align="center" bgcolor="green">價格</td>
              <td align="center" bgcolor="green">數量</td>
              <td align="center" bgcolor="green">..</td>
              <td align="center" bgcolor="green">小計</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF">2001</td>
              <td align="center" bgcolor="#FFFFFF">酪梨</td>
              <td align="center" bgcolor="#FFFFFF">顆</td>
              <td align="center" bgcolor="#FFFFFF">70</td>
              <td align="center" bgcolor="#FFFFFF">2</td>
              <td align="center" bgcolor="#FFFFFF"><img src="images/trash.jpg" width="50" height="70"></td>
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
              <input type="button" value="繼續購物">
              <input type="button" value="修改訂單">
              <input type="button" value="結帳" submit="list.php">
              </td>
            </tr>
        </form>
      </div> 
    </div>
  </div>
</div>
</body>
</html>
 <?php include('footer.php')?> 