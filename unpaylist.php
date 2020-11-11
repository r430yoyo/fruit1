<?php include('header.php')?>
<head>
<style type="text/css">

.nav-link{
    color:green;
}
table,td,th {
  border:1px solid brown;
}
table{
  width:80%;
  margin:10 10 10 10px;
}
th{
  background-color:#551d0c;
  color:white;
}
tr{
  border:2px solid #551d0c;
}
.tdb{
    border-bottom: double #551d0c;
}
.container{
  margin-top: 2rem;
}
</style>
</head>
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
    <div class="col-lg-9 col-md-8 col-sm-12">   
      <table>
        <th colspan="6">未付款訂單</th>
        <tbody>
          <tr>
            <td>訂單序號</td>
            <td>下單日期</td>
            <td>總金額</td>
            <td>訂單狀態</td>
            <td>出貨狀態</td>
            <td>可否修改</td>
          </tr>
          <tr class=tdb>
            <td>A123456789</td>
            <td>2020.11.03</td>
            <td>$2000</td>
            <td>待處理</td>
            <td>尚未出貨</td>
            <td>可</td>
          </tr>
        </tbody>
      </table>
      </br>
      <table>
        <tr>
          <td>訂單序號</td>
          <td>下單日期</td>
          <td>總金額</td>
          <td>訂單狀態</td>
          <td>出貨狀態</td>
          <td>可否修改</td>
        </tr>
        <tr class=tdb>
          <td>A123456789</td>
          <td>2020.11.03</td>
          <td>$2000</td>
          <td>待處理</td>
          <td>尚未出貨</td>
          <td>可</td>
        </tr>
      </table>
    </div>
  </div>
</div>
</body>
</html>
<?php include('footer.php')?>