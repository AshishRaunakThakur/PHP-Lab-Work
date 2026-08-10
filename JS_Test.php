<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="data">
        <h2>
            This is my data
        </h2>
        <button onclick="changeData()">
            Click
</button>
    </div>

<script>

    function changeData(){
    var data=document.getElementsByTagName('h2')[0].innerText;

    var element=document.getElementsByTagName('h2')[0];
    element.innerHTML= data + " = This is customized from JS";
    element.style.color="green";
    }
</script>
</body>
</html>