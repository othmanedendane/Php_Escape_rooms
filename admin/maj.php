<table width=100% border="1px">
<tr>
    <td width="50%" align="center">
    <img src = "../photos/livre.jpg" style = "height:50%;width:80%">
    </td>
    <!-- Formulaire de login -->
    <td valign="top"> 
        <h3> UPDATE ESCAPE ROOM </h3>
        <form method="post"> <!--formulaire-->
           <table>
               
               <tr><td>Room Name </td><td><input type="text" name="roomname" value=""> </td> </tr>
               <tr><td>Room Location </td><td><input type="text" name="roomlocation" value=""> </td> </tr>
               <tr><td>Level </td><td><input type="text" name="level" value=""> </td> </tr>
               <tr><td>Photo</td><td><input type="file" name="photo" value=""> </td></tr>
			   <tr><td>Prix </td><td><input type="text" name="prix" value=""> </td> </tr>
              
               
               <tr><td></td><td><input type="submit" name="maj" value="UPDATE"> </td> </tr>
            </table>
            </form>
         <!-- Debut :::Section PHP-->      
             <?php
                //1)Recuperation des donnees transmises par post
                if(isset($_POST["maj"]))
                {
                    
                    $id=$_POST["roomname"];
                    $nom=$_POST["roomlocation"];
                    $level=$_POST["level"];
                    $photo=$_POST["photo"];
                    $prix=$_POST["prix"];                  

                    //2)connection avec mysql
                    $connect = mysqli_connect('localhost','root','','cm1_projet') or die ("Erreur de connxion avec la BD!");
                    include("../connexion.php");
                    //3)Requete sql d'ajout de changement
                    $insertion=mysqli_query($connect,"update room set id = '$id', nom = '$nom', level = '$level', photo = '$photo', prix = '$prix' where id='$id'") or die("Erreur de requête sql!!");
                    //4)analyse et affichage des resultats de la requête
                    $nbre=mysqli_affected_rows($connect);
                    if($nbre >0)
                    {
                        echo "Changement de $id réussi";
                    }
                    else
                    {
                        echo "aucun changement de livre!";
                    }
                    
                    
                }
              ?>      
                    
               
         <!-- fin :::Section PHP-->      
        </td>
</tr>

</table>