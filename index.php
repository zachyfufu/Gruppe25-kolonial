<!DOCTYPE html>
<html>

<head>
    <script src="//code.jquery.com/jquery-1.11.0.min.js">




    </script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php include "php/header.php";
          include "php/connection.php";
    ?>


<div id="wrappie">

<div id="container">
    <div id="reminder">
        <p id="reminderTxt"> Zachary, du har 3 gratis leveringer til gode! <br> Halder du for over kr. 600,- får du leveringer gratis. Gjelder tirsdag-torsdag. <br><br> Gyldig til 29. desember 2017. </p>
    </div>
    
    <div id="meny" >
        <img id="menybilde" src="images/menyer.png">
    </div>

    <h1 id="finnFrem">Finn frem</h1>
    <h1 id="dineTilbud">Dine tilbud</h1>

    
    <div id="produktmeny">
        <p>Frukt og grønt</p>
        <p>Brød og frokostblandinger<br></p>
        <p>Meieriprodukter og egg<br></p>
        <p>Kjøtt og kylling<br></p>
        <p>Fisk og sjømat<br></p>
        <p>Oster<br></p>
        <p>Pålegg<br></p>
        <p>Midager og tilbehør<br></p>
        <p>Drikkevarer<br></p>
        <p>Mel og bakeingredienser<br></p>
        <p>Kaker, kjeks, desserter og is<br></p>
        <p>Snacks og godteri<br></p>
        <p>Hygieneartikler<br></p>
        <p>Legemidler og helsekost<br></p>
        <p>Tørkepapir og vask<br></p>
        <p>Magasiner og bøker<br></p>
        <p>Husholdning og tekstil<br></p>
        <p>Dyremat<br></p>
        <p>Snus og tobakk<br></p>

    </div>
    <div id="items">

        <?php
        $varer = $pdo->query('SELECT * FROM varer');
        while ($row = $varer->fetch())
        {
                echo '<div id="productDiv">';
                    echo "<img id='productIcon' src='{$row['bildeURL']}'>";
                         echo '<button id="btn" onclick="window.location.href = \'php/addToCart.php?id=' . $row['id'] . '\'"/>Kjøp</button>';
                    echo '</div>';

                echo '<div id="prisDiv">';
                    echo '<p id="pris">kr&nbsp' . $row['pris'] . '</p>';
                 echo '</div>';
        }


        $cartIsEmpty = false;


        ?>



    </div>

</div>

<?php include "php/footer.php" ?>

 

</div>
    
</body>


</html>