<?php include('header.php');?>

<style>
h5,h1{
  color:green;
}
p{
  color:green;
}
.dashed{
  border-left-style:solid; 
  border-bottom-style:dashed;
  border-bottom-color:#00FF00;}
.green{
  background-color:green;
  color:white;
}
.container{
  margin-top: 2rem;
}
.F1{
  margin-right: auto;
  margin-left: auto;

}  
</style>
<body>
<div class="container">
  <div class="row ">
      <div class="col-md-6">
        <img src="images/mango.jpg" class="card-img" alt="...">
        <div style="height: 100px; margin-top:2rem">
          <div class="mh-100 d-inline-block" style="width:100px; height: 100px; background-color: white;margin-right:2rem"><img src="images/mango01.jpg">
          </div>
          <div class="mh-100 d-inline-block" style="width:100px; height: 100px; background-color: white;margin-right:2rem"><img src="images/mango01.jpg">
          </div>
          <div class="mh-100 d-inline-block" style="width:100px; height: 100px; background-color: white;margin-right:2rem"><img src="images/mango01.jpg">
          </div>
          <div class="mh-100 d-inline-block" style="width:100px; height: 100px; background-color: white;margin-right:0rem"><img src="images/mango01.jpg">
          </div>
        </div>
      </div>     
      <div class="col-md-4 offset-1 ">
          <h1>愛文芒果(品名)</h1></br>
            <p>愛文芒果(6入/盒)</p>
            <p>商品編號 H284335</P>
            <p>商品簡介  全台人氣特高,高甜度無酸,吃過都說讚</P>
            <p>商品規格
            <label>
              <select name="size" class="type1" id="size">
                <option>5</option>
                <option selected="selected">9</option>
                <option>6</option>
                <option>8</option>
              </select>
            </label>入*
            <label>
              <select name="qty" class="type1" id="size">
                <option>1</option>
                <option selected="selected">5</option>
                <option>2</option>
                <option>3</option>
              </select>
            </label>箱
          </p></br>
          <input type="image" name="tobuy" id="tobuy" src="images/car.png" alt="加入購物車" />  
      </div>
  </div>
  <hr>
  <div class="row">
    <img src="images/mango.jpg" alt="..." style="margin-right:auto;margin-left:auto;margin-bottom:2rem">
    <div class="F1">
      <p>愛文芒果產季：4～8月</p>
      </br>
      <p>玉井是台灣最早種植愛文芒果的地區</br>，因此有愛文芒果故鄉之美稱。</p>
      <p>皮紅肉黃，香氣濃。紅通通的外表像蘋果一樣，別稱是「蘋果檨」，因果肉金黃，又有「太陽果」之稱。</p>
    </div>
    <img src="images/mango.jpg" alt="..." style="margin-right:auto;margin-left:auto;margin-bottom:2rem">
    </br>
    <img src="images/mango.jpg" alt="..." style="margin-right:auto;margin-left:auto;margin-bottom:2rem">
    <div class="F1">
    <p>愛文芒果產季：4～8月</p>
    <p>玉井是台灣最早種植愛文芒果的地區，因此有愛文芒果故鄉之美稱。</p>
    <p>皮紅肉黃，香氣濃。紅通通的外表像蘋果一樣，別稱是「蘋果檨」，因果肉金黃，又有「太陽果」之稱。</p>
    <div class=green>
      <div> 其他推薦：</div>
        <div spry:region="recommand";>
          <div spry:repeat="recommand" spry:setrow="recommand">
            <div class="picklist">
              <div class="box"><img src="images/mango.jpg" width="98" height="82" /></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php include('footer.php');?>
