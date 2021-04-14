<?php
//1)Connexion PHP avec mysql
include("../connexion.php");
//2)requete SQL de selection des recettes
$selection=mysqli_query($connect,"select * from room limit 0,8");
//3)$Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3> Available List </h3>
            <table border ='1'>
               <th> Rooms </th> 
                <th> Location </th> 
                <th> Level </th>
                <th> Photo </th>  
                <th> Price </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td>  <td>$resultat[1]</td>  <td>$resultat[2]</td> <td><img src='../images/$resultat[3]'style = height:30%;width:50%;align=center'></td><td>$resultat[4]</td>";
    
    }
    echo"</table>";
}

else
{
    echo "";
}

?>
<form method="post">
<br>
     <td> <a href="indexadmin.php?lien=addroom"> Add à room </a> </td></tr>
    <br>
    <td> <a href="indexadmin.php?lien=maj"> Update à room </a> </td></tr>
    <br>
        <td> <a href="indexadmin.php?lien=delete"> Delete à room </a> </td></tr>
</form>

