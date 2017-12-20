<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
    
    <?php
        include "php/header.php";
        include "php/connection.php";
    ?>   

<title>Kuponger</title>
    
<style>
    
    #container
    {
        height: 100%;
        width: 100%;
        position: absolute;
    }
    
    #mineKuponger
    {
        height: 30%;
        width: 60%;
        left: 20%;
        position: absolute;
        top: 25%;
        border-bottom: 1px solid #000000;
        
        
    }
    
    #dineKuponger
    {
        font-family: sans-serif;
        font-size: 40px;
        border-bottom: 1px solid #000000;
    }
    
    #kupongBox{
        position: relative;
        width: 700px;
        height: 200px;
    }
    
    #kupongImg{
        position: absolute;
        width: 10%;
        height: 40%;
        margin-left: 30px;
        
    }
    #frieleKaffe{
        position: inherit;
        max-height: 100%;
        max-width: 100%;
    }
    
    #kupongTxt{
        position: relative;
        height: 20%;
        width: 40%;
        top: 13%;
        left: 15%;
        font-family: sans-serif;
        font-size: 30px;
        
    }
    
    #bruk
    {
        position: absolute;
        right: 5%;
        bottom: 27.5%;
    }
    
</style>

</head>
<body>

<div id="container">
    <div id="mineKuponger">
        <h1 id="dineKuponger">Dine kuponger</h1>
        <div id="kupongImg">
            <img id="frieleKaffe" src="https://kolonial.no/media/uploads/public/279/372/645172-28cd3-product_detail.jpg">
        </div>
        <div id="kupongTxt"> Friele Frokostkaffe 20% rabatt</div>
        <a href="brukkupong.php">  <img id="bruk" src="images/bruk.png"></a>
    </div>
</div>

</body>
</html>