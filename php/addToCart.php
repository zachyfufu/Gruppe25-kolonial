

<?php

include "connection.php";

$id = $_GET["id"];
header("Location: ../index.php");

$selectProduct = $pdo->prepare('SELECT * FROM varer WHERE id = :id');
$selectProduct->bindValue(':id', $id, PDO::PARAM_INT);
$selectProduct->execute();

$navn = null;
$bildeURL = null;
$pris = null;

while ($row = $selectProduct->fetch(PDO::FETCH_ASSOC))
{
    $navn = $row['navn'];
    $bildeURL = $row['bildeURL'];
    $pris = $row['pris'];
    $pris = $row['pris'];
}


$insertProduct = $pdo->prepare("INSERT INTO handlekurv(navn, bildeURL, pris)
        VALUES(:navn,:bildeURL,:pris)");
$insertProduct->bindValue(':navn', $navn, PDO::PARAM_INT);
$insertProduct->bindValue(':bildeURL', $bildeURL, PDO::PARAM_INT);
$insertProduct->bindValue(':pris', $pris, PDO::PARAM_INT);

$insertProduct->execute();
?>

