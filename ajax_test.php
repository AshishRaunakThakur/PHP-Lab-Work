<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="data">
        <h2 id="h2_data">
            This is my data
        </h2>
        <button onclick="changeData()">
            Click
</button>
    </div>

<script>

    function changeData()
    {
         const xhttp = new XMLHttpRequest();
       
         xhttp.onload = function()   {
           document.getElementById("h2_data").innerHTML = this.responseText;  
}
           xhttp.open("GET", "ajax_info.php", true);
           xhttp.send();

    }

</script>
</body>
</html>