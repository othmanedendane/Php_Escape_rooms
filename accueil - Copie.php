<?php
//1)Connexion PHP avec mysql
include("connexion.php");
//2)requete SQL de selection des recettes
$selection=mysqli_query($connect,"select * from room limit 0,8");
//3)$Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3> List </h3>
            <table border ='3'>
                <th>Rooms </th> 
                <th>Location </th> 
                <th>Level </th>
                <th>Photo </th>  
                <th>Price </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td> <td>$resultat[1]</td> <td>$resultat[2]</td> 
        <td><img src='./images/$resultat[3]'style = height:10%;width:30%;align=center > </td> <td>$resultat[4]</td> ";
    
    }
    echo"</table>";
}

else
{
    echo "";
}


?>