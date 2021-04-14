<?php
session_start();

function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['libelleProduit'] = array();
      $_SESSION['panier']['qteProduit'] = array();
      $_SESSION['panier']['prixProduit'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}
function creationlistearticle()
{

  if (!isset($_SESSION['liste']))
  {
  $_SESSION['liste']=array();
  $_SESSION['liste']['libelle']=array("Room hard","Prison room","Room normal","Room kid", "Room family");
  $_SESSION['liste']['prix']=array(20,40,15,9,27);
}

}


echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>Votre panier</title>
</head>
<body>
<?php
if(isset($_POST["okay"]))
{




//recuperation  du prix exact
creationlistearticle();//creation du catalogue

$position = array_search($_POST["liste"],  $_SESSION['liste']['libelle']);

$prix=$_SESSION['liste']['prix'][$position];
//fin de recuperation du prix exacte



if (creationPanier())
  {
  $positionProduit = array_search($_POST["liste"],  $_SESSION['panier']['libelleProduit']);
  if ($positionProduit!==false)
    {
   echo"le libelle existe";
  $_SESSION['panier']['qteProduit'][$positionProduit] += $_POST["quantité"];
    }

  else
  {

    array_push( $_SESSION['panier']['libelleProduit'],$_POST["liste"]);
    array_push( $_SESSION['panier']['qteProduit'],$_POST["quantité"]);
    array_push( $_SESSION['panier']['prixProduit'],$prix);
  }

  }
  else
  {
    //le cas ou le panier n'existe pas encore 

    array_push( $_SESSION['panier']['libelleProduit'],$_POST["liste"]);
    array_push( $_SESSION['panier']['qteProduit'],$_POST["quantité"]);
    array_push( $_SESSION['panier']['prixProduit'],$prix);
  }

}

  echo '<form method="post" >';
   echo '<p>';
      echo '<select name="liste">';
        echo ' <option value="Room hard">Room hard</option>';
         echo '<option value="Prison room">Prison room</option>';
         echo '<option value="Room normal">Room normal</option>';
         echo '<option value="Room kid">Room kid</option>';
         echo '<option value="Room family">Room family</option>';
        
      echo '</select>';
       echo '<input type="text" id="qte" name="quantité">';
      echo '<input type="submit" name= "okay" value="ok" />';
   echo '</p>';
echo '</form>';

?>
<form method="post" action="panier.php">
<table style="width: 400px">
    <tr>
        <td colspan="4">Votre panier</td>
    </tr>
    <tr>
        <td>Libellé</td>
        <td>Quantité</td>
        <td>Prix Unitaire</td>
        <td>Action</td>
    </tr>


    <?php
    if (creationPanier())
    {
        $nbArticles=count($_SESSION['panier']['libelleProduit']);
        if ($nbArticles <= 0)
        echo "<tr><td>Votre panier est vide </ td></tr>";
        else
        {
            for ($i=0 ;$i < $nbArticles ; $i++)
            {
                echo "<tr>";
                echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
                echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
                echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">XXXXXXXX</a></td>";
                echo "</tr>";
            }

            echo "<tr><td colspan=\"2\"> </td>";
            echo "<td colspan=\"2\">";
            //echo "Total : ".MontantGlobal();
            echo "</td></tr>";

            echo "<tr><td colspan=\"4\">";
            //echo "<input type=\"submit\" value=\"Rafraichir\"/>";
            //echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

            echo "</td></tr>";
            var_dump($_SESSION["panier"]);
            //session_destroy();
        }
    }
    ?>
</table>
</form>
</body>
</html>