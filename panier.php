<?php 
require_once("connexion.php");
$sql="SELECT * from produits where reference=?";
$stmt = $db->prepare($sql);
$infos;
$_SESSION["panier"]["1"]=1;
$_SESSION["panier"]["2"]=2;

foreach($_SESSION["panier"] as $ref => $qte){
    $stmt->execute(array($ref));
    $produit=$stmt->fetch(PDO::FETCH_ASSOC);
    $ligne["reference"] =  $produit["reference"];
    $ligne["designation"] =  $produit["designation"];
    $ligne["qte"] =  $qte;
    $ligne["total"] =  $qte * $produit["prixPromo"];
    $infos[]=$ligne;
}
?>
<table class="table">
    <tr>
    <th>reference</th>
    <th>designation</th>
    <th>qte</th>
    <th>total</th>
    </tr>
    <?php if(isset($infos)):
        foreach($infos as $row):
    ?>
            <tr>
            <td><?=$row["reference"]?></td>
            <td><?=$row["designation"]?></td>
            <td><?=$row["qte"]?></td>
            <td><?=$row["total"]?></td>
            </tr>
        <?php  endforeach;
        endif;
        ?>
</table>