<?php
//1) recuperation du nom recherché
if(isset($_POST["recherche"]))
{
    $search=$_POST["search"];
   
//2)Connexion avec MYSQL
    include("../connexion.php");
//3)Requete SQL de selection de recette
    $selection=mysqli_query($connect,"select * from room where nom='$search'");
    $nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
   echo "<h3> Liste des services </h3>
            <table border ='1'>
                <th>id</th> 
                <th> nom </th> 
                <th> level </th>
                <th> photo </th>  
                <th> prix </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td> <td>$resultat[1]</td> <td>$resultat[2]</td> 
        <td><img src='../photos/$resultat[3]'style = height:70%;width:50%;align=center ></td> <td>$resultat[4]</td>";
        
         echo"</table>";
    echo "<td>sous-total : $resultat[4]</td><br>";
        $x = 0.05;  
        echo "tps : ";
        echo $resultat[4] * $x;
        echo "<br>";
        $y = 0.0975;
        echo "tva : ";
        echo $resultat[4] * $y;
        echo "<br>";
        echo "Total : ";
        echo $resultat[4] + ($resultat[4] * $x) + ($resultat[4] * $y);
    
    }
    
}

   
//2)Connexion avec MYSQL
    include("../connexion.php");
//3)Requete SQL de selection de recette
    $selection=mysqli_query($connect,"select * from room where id='$search'");
    $nbre=mysqli_num_rows($selection);

if($nbre > 0)
{
     echo "<h3> Liste des services </h3>
            <table border ='1'>
                <th>id</th> 
                <th> nom </th> 
                <th> level </th>
                <th> photo </th>  
                <th> prix </th>";
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td> <td>$resultat[1]</td> <td>$resultat[2]</td> 
        <td><img src='../photos/$resultat[3]'style = height:70%;width:50%;align=center ></td> <td>$resultat[4]</td>";
        
         echo"</table>";
    echo "<td>sous-total : $resultat[4]</td><br>";
        $x = 0.05;  
        echo "tps : ";
        echo $resultat[4] * $x;
        echo "<br>";
        $y = 0.0975;
        echo "tva : ";
        echo $resultat[4] * $y;
        echo "<br>";
        echo "Total : ";
        echo $resultat[4] + ($resultat[4] * $x) + ($resultat[4] * $y);
    
    }
   
}






   
//2)Connexion avec MYSQL
    include("../connexion.php");
//3)Requete SQL de selection de recette
    $selection=mysqli_query($connect,"select * from room where level='$search'");
    $nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3> Liste des services </h3>
            <table border ='1'>
                <th>id</th> 
                <th> nom </th> 
                <th> level </th>
                <th> photo </th>  
                <th> prix </th>";
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td> <td>$resultat[1]</td> <td>$resultat[2]</td> 
        <td><img src='../photos/$resultat[3]'style = height:70%;width:50%;align=center ></td> <td>$resultat[4]</td>";
        
         echo"</table>";
    echo "<td>sous-total : $resultat[4]</td><br>";
        $x = 0.05;  
        echo "tps : ";
        echo $resultat[4] * $x;
        echo "<br>";
        $y = 0.0975;
        echo "tva : ";
        echo $resultat[4] * $y;
        echo "<br>";
        echo "Total : ";
        echo $resultat[4] + ($resultat[4] * $x) + ($resultat[4] * $y);
    
        
    }
    
}
    
}

else
{
    echo "Aucun service trouvé dans la base de donnees ";
}
    

    
    
    
/*if($resultat[3] = "25$")
{
     echo "      <th>Stotal</th> 
                <th> titre </th> "; 

}

elseif($resultat[3] = "20$")
{
    echo "<th>Stotal</th> 
                <th> auteur </th> ";
}
 else
{
    echo "non";
}   
    
    
  */  

?>