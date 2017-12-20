    ?><!DOCTYPE html>
<html>

<head>
    <?php
        include "php/header.php";
        include "php/connection.php";
    ?>   
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Points</title>
    
    
<style>
    
    
    
    #container
    {
        position: absolute;
        height: 80%;
        width: 140%;
        margin-left: -10px;
        margin-top: -14px;

        background-color: white;
    }    
    
    
    #couponcontainer
    {
        position: absolute;
        height: 100%;
        width: 22%;
    }
        
   
    #productN
    {
        top: 10%;
        height: 40%;
        width: 60%;
        position: relative;
        padding-left: 5%;   
        font-size: 21px;
        margin: 0;
        
    }
    
    #prosent
    {
        bottom: 0%;
        position: relative;
        padding-left: 5%;
        font-size: 40px;    
        z-index: 1;
        margin: 0;
        
    }
    
    #productPicture
    {
        position: relative;
        max-height: 100%;
        max-width: 100%;
        display: block;
        margin: auto auto;
        
        
    }
    
    #couponBuild
    {
        height: 15%;
        position: relative;
        widows: 100%;
        border-bottom: 1px solid #d6d7d8;
        display: flex;
        margin: 2.1%;
    }
    
    #couponText
    {
        height: 100%;
        width: 100%;
        position: relative;
        font-family: sans-serif;
    }
    
    #couponFrame
    {
        height: 90%;
        width: 30%;
        vertical-align: middle;
        
    }
    
    #gameContainer
    {
        width: 78%;
        height: 100%;
        position: absolute;
        left: 22%;
            
    }
    
    #wheel
    {
        left: 10%;
        position: absolute;
        max-height: 100%;
        max-width: 100%;
        top: 19%; 
    }
    
    #spinButton
    {
        position: absolute;
        bottom: 6%;
        left: 16%;
        
    }
    
    #hola
    {
        position: absolute;
        bottom: 17%;
        font-family: sans-serif;
        left: 15%;
        border-bottom: 2px solid #000000;
        font-size:24px;
    }
    
    #lykken
    {
        position: absolute;
        top: 7%;
        font-family: sans-serif;
        left: 13.5%;
        font-size: 40px;
    }
    
    #poeng
    {
        position: absolute;
        top: 2%;
        font-family: sans-serif;
        left: 50%;
        font-size: 40px;
        margin: 0;
    }
    
    #sjekk
    {
        position: absolute;
        top: 22%;
        left: 40%;
        font-size: 40px;
        margin: 0;
    }
    
    #kupBut
    {
        position: absolute;
        top: 53%;
        left: 41%;
        font-size: 40px;
        margin: 0;
    }
    
    #button1
    {
        position: absolute;
        top: 3.5%;
        right: 3%;
        margin: 0;
    }
    
    #button2
    {
        position: absolute;
        top: 20.5%;
        right: 3%;
        margin: 0;
    }
    
    #button3
    {
        position: absolute;
        top: 37.5%;
        right: 3%;
        margin: 0;
    }
    
    #button4
    {
        position: absolute;
        top: 53.5%;
        right: 3%;
        margin: 0;
    }
    
    #button5
    {
        position: absolute;
        top: 70.5%;
        right: 3%;
        margin: 0;
    }
    
    #button6
    {
        position: absolute;
        top: 87.5%;
        right: 3%;
        margin: 0;
    }
    
    </style>

</head>
<body>

<div id="container">
    
    <div id="couponcontainer">
        <?php
        
            $kuponger = $pdo->query('SELECT * FROM kuponger');
            
            while($row = $kuponger->fetch())
            {
                echo '<div id="couponBuild">';
                echo '<div id="couponFrame">';
                echo "<img id='productPicture' src='{$row['Bildet']}'>";
                echo '</div>';
                echo '<div id="CouponText">';
                echo '<p id="productN">'. $row['Navn'].'';
                echo '</p>';
                echo '<p id="prosent">'. $row['Rabatt'].'%';
                echo '</p>';
                echo '</div>';
                echo '</div>';
            }
        
        
        ?>
        <img id="button1" src="images/minibuy.png">
        <img id="button2" src="images/minibuy.png">
        <img id="button3" src="images/minibuy.png">
        <img id="button4" src="images/minibuy.png">
        <img id="button5" src="images/minibuy.png">
        <img id="button6" src="images/minibuy.png">
    </div>
    
    <div id="gameContainer">
        <p id="hola">1 Poeng for å spinne!</p>
        <img id="wheel" src="images/wheely.png">
        <img id="spinButton" src="images/spinwin.png">
        <img id="sjekk" src="images/sjekkkupong.png">
        <img id="kupBut" src="images/kuponger.png">
        <p id="lykken">PRØV LYKKEN</p>
        <p id="poeng">Dine poeng: 10</p>
        
        
        
    </div>
    

</div>
    

</body>
</html>