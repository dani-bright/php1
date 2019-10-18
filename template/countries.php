<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span{
            margin: 0 5px;
        }
    </style>
</head>
<body>
<div id="countries"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script>
    axios.get("http://localhost:8001/countries").then(data => {
        console.log(data.data.data.countries);
        let result = "";
        data.data.data.countries.forEach((country) => {
            result+= "<p>"+"<span>"+country.id+"</span>" +"<span>"+country.name+"</span>" +"<span>"+country.CityId+"</span>"+"</p>";
        })

        document.getElementById("countries").innerHTML = result;

    })
</script>
</body>
</html>