<h3>Liste des membres inscrits </h3>
<?php
//1)Connexion PHP avec mysql
include("../connexion.php");
//2)requete SQL de selection des recettes
$selection=mysqli_query($connect,"select * from membre limit 0,3");
//3)$Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "  <table >	
                <th> ID </th> 
                <th> Nom </th> 
                <th> Prenom </th>
                <th> Telephone </th>  
				<th> Adresse </th>
				<th> Birthday </th>
				<th> Login </th>
				<th> photo </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr> <td>$resultat[0]</td>   <td>$resultat[1]</td> <td>$resultat[2]</td> <td>$resultat[3]</td> <td>$resultat[4]</td> <td>$resultat[5]</td> <td>$resultat[6]</td> <td><img src='../images/$resultat[8]'style = height:30%;width:50%;align=center'></td>";
    }
    echo"</table>";
}
else
{
    echo "";
}
?>