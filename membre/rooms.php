<h3>Bienvenue membre</h3>

<?php
//1)Connexion PHP avec mysql
include("../connexion.php");
//2)requete SQL de selection des recettes
$selection=mysqli_query($connect,"select * from room limit 0,7");
//3)$Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3> Room Lists </h3>
            <table border ='1'>
                
                <th> name </th> 
                <th> level </th>
                <th> prix </th>"; 
    

    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[1]</td> <td>$resultat[2]</td> <td>$resultat[4]</td>";
    
    }
    echo"</table>";
}

else
{
    echo "";
}


?>