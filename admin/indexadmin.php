<!DOCTYPE html>
<html lang="en">
<head>
  <title>Escape Games</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="../style/style.css"/>
</head>

<body>
<section class="clearfix">
	
	</section>
	
<header class="clearfix">
<form method="post">
    <div class="container">
			<div class="header-left">
				
			</div>
			<div class="header-right">
			  <center>
       
        <!--Section menu -->
        <nav>
		 <a > </a>
 <a > </a> 		 
                <a href="indexadmin.php?lien=accueil"> Home </a> 
                <a href="indexadmin.php?lien=rooms"> Rooms </a> 
                <a href="indexadmin.php?lien=membre"> Membre </a> 
                <a href="indexadmin.php?lien=update"> Update </a> 
                <a href="indexadmin.php?lien=deconnexion"> Deconnexion </a> 
            </nav>    
           
	</br></br>			
        </div>
        <!--Section details -->
			
        <div style="width:80%;"> 
        <!--Section PHP -->    
	
           <?php
            session_start();
            echo'<h1>  Bonjour '.$_SESSION["test"].'</h1></br>';
            //verifier si le lien est cliqué
            if(isset($_GET["lien"]))
            {
                $lien=$_GET["lien"];
                //selon la valeur du lien recuperée
                switch($lien)
                {
                    case"accueil":
                        include("accueil.php");
                    break;
                    
                     case"rooms":
                        include("rooms.php");
                    break;    
                                        
                     case"membre":
                        include("membre.php");
                    break;
                    
                     case"update":
                        include("update.php");
                    break;
                    
                     case"deconnexion":
                        echo"<script>window.location.href='../index.php'</script>";
                    break;
                    
                    case"recherche":
                        include("rechercheadmin.php");
                    break;
                    case"addrooms":
                        include("addrooms.php");
                    break;
                     case"maj":
                        include("maj.php");
                    break;
                     case"delete":
                        include("delete.php");
                    break;
                    
                }
            }
            else
            {
               include("accueil.php"); 
            }

            ?>
			</br>
			</header>
        </div>

    </center>
			</div>
		
		</form>
	
       
       

   
</body>
</html>