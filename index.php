<html>

<head>

    <?php include "php/connection.php"; ?>

    <style>

        #container
        {
            position: absolute;
            height: 1000px;
            width: 140%;
            margin-left: -10px;
            margin-top: -16px;

            background-color: white;
        }

        #påminnelse
        {
            position: absolute; top: 4%;
            margin-left: -1%;
            width: 80%;
            height: 23%;
        }

        #julemeny
        {
            position: absolute; top: 30%; left: 15%;
            height: 40%;
            width: 70%;
        }

        #produkterMeny
        {
            position: absolute; top: 19%;
        }

        #productIcon
        {
            position: relative; bottom: 700px; left: 100px;
            height: 200px;
            width: 100px;
        }

        #varer
        {
            display: inline;
            width: 70%;
            background-color: #2C242F;
            height: 80%;
        }



    </style>

</head>

<body>

<?php
include "php/header.php";
$stmt = $pdo->query('SELECT * FROM varer');

?>

<div id="container">

    <img id="påminnelse" src="images/påminnelse.png">
    <div id="produkterMeny"><img src="images/produkterMeny.jpg"</div>


    <div id="julemeny"><img id="juleImg" src="images/juleImage.jpg"</div>

    <div id="varer">

        <?php
            while ($row = $stmt->fetch())
             {
                 echo '<p id="productName">'. $row['navn'].'';
                echo "<img id='productIcon' src='{$row['bildeURL']}'>";
             }

        ?>

    </div>

</div>

<?php
include "php/footer.php";
?>

</body>

</html>
