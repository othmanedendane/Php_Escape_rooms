<table width=100% border="1px">
<tr>
    <td width="50%" align="center">
    <img src = "../photos/livre.jpg" style = "height:50%;width:80%">
    </td>
    <!-- Formulaire de login -->
    <td valign="top"> 
        <h3> DELETE ESCAPE ROOM </h3>
        <form method="post"> <!--formulaire-->
           <table>
               
                <tr><td>ROOM NAME</td><td><input type="text" name="roomname" value=""> </td> </tr>
               <tr><td></td><td><input type="submit" name="delete" value="DELETE"> </td> </tr>
            </table>
            </form>
         <!-- Debut :::Section PHP-->      
             <?php
                //1)Recuperation des donnees transmises par post
                if(isset($_POST["delete"]))
                {
                    
                   $id=$_POST["roomname"];
                    
                    //2)connection avec mysql
                    $connect = mysqli_connect('localhost','root','','cm1_projet') or die ("Erreur de connxion avec la BD!");
                    include("../connexion.php");
                    //3)Requete sql d'ajout de changement
                    $insertion=mysqli_query($connect,"delete from room where id = '$id'") or die("Erreur de requête sql!!");
                    //4)analyse et affichage des resultats de la requête
                    $nbre=mysqli_affected_rows($connect);
                    if($nbre >0)
                    {
                        echo "Supression de $id réussi";
                    }
                    else
                    {
                        echo "aucune supression de livre!";
                    }
                    
                    
                }
              ?>      
                      
        </td>
</tr>

</table>