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
 <link rel="stylesheet" type="text/css" href="./style/style.css"/>
</head>

<body>
<section class="clearfix">
	
	</section>
	
<header class="clearfix">
<form method="post">
    <div class="container">
			<div class="header-left">
				<h3>BIENVENUE</h3>
			</div>
			<div class="header-right">
			  <center>
             
            <nav>
                <a href="index.php?lien=accueil"> Accueil </a>
                <a href="index.php?lien=login"> Login </a>
                <a href="index.php?lien=inscrire"> Inscrire </a>
                <a href="index.php?lien=recherche"> recherche </a>
            </nav>
	</br></br>			
        </div>
        <!--Section details -->
        <div style="width:80%;"> 
        <!--Section PHP -->    
            <?php
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
                    
                     case"login":
                        include("login.php");
                    break;
                    
                     case"inscrire":
                        include("inscrire.php");
                    break;
                    
                     case"recherche":
                        include("recherche.php");
                    break;
                    
                }
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