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
    label{
        font-size:1.3rem;
    }
</style>
<body>
<div class="col-lg-5 col-md-5 col-sm-12">
<form>
<div>
<h5>
    請輸入密碼<br>
    密碼正確才可進行修改
</h5>
<label for="exampleInputPassword1">密碼</label>
    <input type="password" name="密碼">
    <p>
    <p>
    <p>
<button type="button" class="btn btn-outline-success">取消</button>
<button type="button" class="btn btn-success">確定</button>
</div>
</form>
<div id="static">
密碼正確!!開始修改
</div>
</div>
</body>
</html>