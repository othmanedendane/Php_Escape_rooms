<?php
include("connexion.php");
$selection=mysqli_query($connect,"select * from room limit 0,8");
$nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3></h3>
            <table border ='1'>
                <th> Rooms </th> 
                <th> Location </th> 
                <th> Level </th>
                <th> Photo </th>  
                <th> Price </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td>  <td>$resultat[1]</td>  <td>$resultat[2]</td> <td><img src='./images/$resultat[3]'style = height:10%;width:30%;align=center'>  </td><td>$resultat[4]</td>";
    
    }
    echo"</table>";
}

else
{
    echo "";
}
?>