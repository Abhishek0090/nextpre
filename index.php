<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
             width : 100%;
            height: 400px;
            margin: 6% auto;
            background: #fff;
            border-radius: 5;
            position: relative;
            display: flex;
  align-items: center;
  justify-content: center;
  flex-direction : column;
        }
    </style>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row" id= "data" style="border : 2px solid red";>

        <input type="text" >Name :</input>
        <input type="text"> email :</input>
        <input type="text">Password :</input>
        <button onclick="loaddata()">Next</button>
    </div>
    <input type="hidden" id="formid" value="1">
    <br>
</div>
</body>
<script>
    function loaddata(){
        var formid = $('#formid').val();
        $.ajax({
                    url: 'action.php',
                    type: "POST",
                    dataType: 'text',
                    data : {
                        action : formid
                    }
                }).done(function (result){
                    $('#data').html(result);
                    $('#formid').val(formid+1);
                });
    }
</script>
                 
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</html>