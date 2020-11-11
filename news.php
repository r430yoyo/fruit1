<?php include('header.php');?>
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
th{
    background-color:green;
    color:white;
    font-size:1.5rem;
}
td{
    border-bottom: solid green ;
    height:5vh;
    font-size:1rem
}
.row>nav{
    margin-left:auto;
    margin-right:auto;
    
}
.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: green;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.page-link:hover {
  z-index: 2;
  color: green;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}
.container{
  margin-top: 3rem;
}
</style>
<body>
<div class="container">
  <div class="col-lg-12 col-md-12 col-sm-12">   
  <table class="table table-border-less">
      <th colspan="3" style="height:8vh" >
          每天吃一點，健康跟著多一點
      </th>
      <tr>
      <td style="width:10vw">發布日期</td>
      <td style="width:30vw">標題</td>
      <td style="width:7vw">點閱率</td>
      </tr>
      <tr>
      <td>2020.11.5</td>
      <td><a href="detail.php">[打破迷思]酪梨吃多了，會高血壓！?</a></td>
      <td>27</td>
      </tr>
      <tr>
      <td>2020.10.31</td>
      <td>[打破迷思]香蕉吃多了，會高血壓！?</td>
      <td>25</td>
      </tr>
  </table>
  <div class="row">
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
  </div>
  </div>
</div>
</body>
</html>
<?php include('footer.php');?>