<html>

<head>

    <?php
        include "php/header.php";
        include "php/connection.php";
    ?>

    <style>

        #container
        {
            position: absolute;
            height: 60%;
            width: 140%;
            margin-left: -10px;
            margin-top: -14px;

            background-color: white;
        }

        #emptyHandlekurv
        {
            margin-left: 25%;
            margin-top: 4%;
        }

        #filledHandlekurv
        {
            position: inherit;
            margin-left: 25%;
            margin-top: 5%;
        }

        #vareBar
        {
            background-color: #F8F8F6;
            width: 1200px;
            height: 6%;
            z-index: 1;
            margin-top: -900px;
            margin-left: 405px;
            position: absolute;
            border-top: 1px solid #d6d7d8;
            border-bottom: 1px solid #d6d7d8;
        }



        #productName
        {
            position: relative; top: -850px; left: -5px;
            margin-left: 410px;
            margin-top: 10px;
            margin-bottom: 30px;
            padding-left: 70px;
            width: 1127px;
            height: 30px;
            z-index: 1;
            border-bottom: 1px solid #d6d7d8;
            font-size: 13px;
        }

        #productIcon
        {
            height: 35px;
            position: relative; right: 40px; bottom: 30px;
            display: block;

        }

        #fortsett
        {
            position: absolute; left: 1480px; top: 550px;
        }




    </style>

</head>

<body>


<div id="container">
    <?php

    $items = $pdo->query('SELECT * FROM handlekurv');
    $rowNumber = $items->rowCount();


        if($rowNumber == 0)
        {
                echo '<img id="emptyHandlekurv" src="images/emptyHandlekurv.jpg">';
        }

        elseif($rowNumber > 0)
        {
            echo '<div id="container2">';
                echo '<img id="filledHandlekurv" src="images/filledHandlekurv.jpg">';
                echo '<div id="vareBar"></div>';
                echo '<img id="fortsett" src="images/fortsett.jpg">';

                while ($row = $items->fetch())
                {
                     echo '<p id="productName">'. $row['navn'].'';
                     echo "<img id='productIcon' src='{$row['bildeURL']}'>";
                }
            echo '</div>';

        }

    ?>


</div>


</body>


</html>
