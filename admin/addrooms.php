<table width=100% border="1px">
<tr>
    <td width="50%" align="center">
    <img src = "../images/add.png" style = "height:40%;width:60%">
    </td>
    <!-- Formulaire de login -->
    <td valign="top"> 
        <h3> ADD ANOTHER ESCAPE ROOM </h3>
        <form method="post"> <!--formulaire-->
           <table>
               
               <tr><td>Room Name </td><td><input type="text" name="roomname" value=""> </td> </tr>
               <tr><td>Room Location </td><td><input type="text" name="roomlocation" value=""> </td> </tr>
               <tr><td>Level </td><td><input type="text" name="level" value=""> </td> </tr>
               <tr><td>Photo</td><td><input type="file" name="photo" value=""> </td></tr>
			   <tr><td>Prix </td><td><input type="text" name="prix" value=""> </td> </tr>
               <tr><td></td><td><input type="submit" name="inscrire" value="Inscrire"> </td> </tr>
            </table>
            </form>
         <!-- Debut :::Section PHP-->      
            <?php
                //1)Recuperation des donnees transmises par post
                if(isset($_POST["inscrire"]))
                {
                    
                    $id=$_POST["roomname"];
                    $nom=$_POST["roomlocation"];
                    $level=$_POST["level"];
                    $photo=$_POST["photo"];
                    $prix=$_POST["prix"];

                    //2)connection avec mysql
                    include("../connexion.php");
                    //3)Requete sql d'ajout de nouveau membre
                    $insertion=mysqli_query($connect,"insert into room values(
                    '$id','$nom','$level','$photo','$prix')") or die("Erreur de requête sql!!");
                    //4)analyse et affichage des resultats de la requête
                    $nbre=mysqli_affected_rows($connect);
                    if($nbre >0)
                    {
                        echo "Ajoute de $nbre réussi";
                    }
                    else
                    {
                        echo "Aucune ajoute de room!";
                    }
                    
                    
                }
              ?>      
                    
  
        </td>
</tr>

</table>