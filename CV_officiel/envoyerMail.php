<!DOCTYPE html>
<html lang="fr en-GB">
  <head>
    <title>Contact Vincent BUNIAZET</title>
    <script>
      var verifyCallback = function(response) {
        alert(response);
      };
      var widgetId1;
      var widgetId2;
      var onloadCallback = function() {
        grecaptcha.render('example3', {
          'sitekey' : '6Ldr0y0hAAAAACfN8zUMu0nL4XBfTQZe6Tnr0NYi',
          'callback' : verifyCallback,
          'theme' : 'white'
        });
      };
    </script>
    <link rel = "stylesheet" href = "style/main.css"/>
    <link rel = "stylesheet" href = "style/Header.css"/>
    <link rel = "stylesheet" href = "style/footer.css"/>
    <link rel = "stylesheet" href = "style/envoyerMail.css"/>

    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Exo+2:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">
  </head>
  <body>
    <header id="header">
      <img src="ressource/img/photo__identité_Vincent_BUNIAZET.jpg" alt="Vincent BUNIAZET's photo"/>
      <h2> Vincent BUNIAZET </h2>
      <button id="menuBurgerTel" onclick="afficherMenu()"><i class="fa-solid fa-bars"></i></button>
        <nav lang="fr">
          <ul>
            <li><a href="main.php">Profil</a></li>
            <li><a href="mesCompetencesCode.php">Mes Langages de Programation</a></li>
            <li><a href="">Contact E-mail</a></li>
            <li><a href="annexe.php">Annexes</a></li>
          </ul>
        </nav>
      <nav lang="en-GB">
        <ul>
          <li><a href="main.php">Profil</a></li>
          <li><a href="mesCompetencesCode.php">My programming languages</a></li>
          <li><a href="">E-mail contact</a></li>
          <li><a href="annexe.php">Appendices</a></li>
        </ul>
      </nav>
      <div class="flags">
        <button class="flagFR" onclick="changeLangage('FR')"></button>
        <button  class="flagEN" onclick="changeLangage('EN')"></button>
      </div>
    </header>
    <h1 lang="fr">Me contacter</h1>
    <h1 lang="en-GB">Contact me</h1>
    <button id="menuBurger" onclick="afficherMenu()"><i class="fa-solid fa-bars"></i></button>
    <nav lang="fr" class="menuVisibleComplet">
      <ul>
        <li id = "close"><a onclick="masquerMenu()"><i class="fa-solid fa-xmark"></i></a></li>
        <li><hr></li>
        <li><a href="main.php">Profil</a></li>
        <li><hr></li>
        <li><a href="mesCompetencesCode.php">Mes Langages de Programation</a></li>
        <li><hr></li>
        <li><a href="">Contact E-mail</a></li>
        <li><hr></li>
        <li><a href="annexe.php">Annexes</a></li>
      </ul>
    </nav>

    <nav lang="en-GB" class="menuVisibleComplet">
        <ul>
          <li id="close"><a onclick="masquerMenu()"><i class="fa-solid fa-xmark"></i></a></li>
          <li><hr></li>
          <li><a href="main.php">Profil</a></li>
          <li><hr></li>
          <li><a href="mesCompetencesCode.php">My programming languages</a></li>
          <li><hr></li>
          <li><a href="">E-mail contact</a></li>
          <li><hr></li>
        <li><a href="annexe.php">Appendices</a></li>
        </ul>
    </nav>

    <section id="meContacter">
      <h2> Me contacter </h2>
      <canvas class="canvaAngleHaut" height="200" width="200"></canvas>
      <!-- POSTs back to the page's URL upon submit with a g-recaptcha-response POST parameter. -->
      <form action="actionEnvoyerMail.php" method="POST">
        
               <div lang="fr" id="lastName">
          <label for="firstName" id="lastName" lang="fr">Nom*</label><br>
        </div>
        <div lang="en-GB" id="lastName">
          <label for="firstName" id="lastName" lang="en-GB">Last Name*</label><br>
        </div>
        <input type="text"  id="lastName" name="lastName" required><br>


        <div lang="fr" id="firstName">
      	 <label for="firstName"  lang="fr">Prenom* </label><br>
        </div>
        <div lang="en-GB" id="firstName">
      	  <label for="firstName" lang="en-GB">First Name* </label><br>
        </div>
      	<input type="text"  id="firstName" name="firstName" required><br>


 


        <div lang="fr">
      	  <label for="companyName" lang="fr">Nom de la sociétée*</label><br>
        </div>
        <div lang="en-GB">
      	  <label for="companyName" lang="en-GB">Company name*</label><br>
        </div>
      	<input type="text"  name="companyName" id="companyName" required><br>


        <div lang="fr">
      	  <label for="referenceEmail" lang="fr">Email de référence*</label><br>
        </div>
        <div lang="en-GB">
      	  <label for="referenceEmail" lang="en-GB">Reference email*</label><br>
        </div>
      	<input type="email"  name="referenceEmail" id="referenceEmail" required><br>


        <div lang="fr">
      	  <label for="ReferencePhoneNumber" lang="fr">Numéro de téléphone de référence</label><br>
        </div>
        <div lang="en-GB">
      	  <label for="ReferencePhoneNumber" lang="en-GB">Reference phone number</label><br>
        </div>
      	<input type="tel"  name="ReferencePhoneNumber" id="ReferencePhoneNumber"><br>

        <div lang="fr">
      	<label for="country" lang="fr">Pays*</label><br>
        </div>
        <div lang="en-GB">
      	<label for="country" lang="en-GB">Contry*</label><br>
        </div>
      	<select id="country" name="country" required>
      	<option value="" >--Select country--</option>
      	<?php 
  	    	$url = "https://restcountries.com/v2/all?fields=name";
  			//echo $_POST['g-recaptcha-response'];
  			$ch = curl_init();
  		    curl_setopt($ch, CURLOPT_URL, $url);
  		    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  		    $reponse=curl_exec($ch);
  		    $reponse = json_decode($reponse);
  		    foreach ($reponse as $value)
  		    {
  		    	echo("<option value=\"".$value->name."\">".$value->name."</option>");
  		    
  		    }
  		?>
  		</select><br>

        <div lang="fr">
      	<label for="object" lang="fr">Objet*</label><br>
        </div>
        <div lang="en-GB">
      	<label for="object" lang="en-GB">Object*</label><br>
        </div>
      	<select id="object" name="object" required>
      		<option lang="fr" value="" >--Sélectionner l'objet---</option>
      		<option lang="fr" value="Proposition d'empolis" >Proposition d'emplois</option>
      		<option lang="fr" value="Demande d'information suplémentaire" >Demande d'information suplémentaire</option>
      		<option lang="fr" value="Autre demande" >Autre demande</option>
      		<option lang="en-GB" value="" >--Select object--</option>
      		<option lang="en-GB" value="Job offer" >Job offer</option>
      		<option lang="en-GB" value="Request for additional information" >Request for additional information</option>
      		<option lang="en-GB" value="Other request" >Other request</option>
      	</select><br>

        <textarea name="message" placeholder="message" required></textarea>

        <div id="example3"></div>
        <br>
        <input type="submit" lang="fr" value="Envoyer">
        <input type="submit" lang="en-GB" value="Submit">
      </form>
      <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
          async defer>
      </script>
      <canvas class="canvaAngleBas" height="200" width="200"></canvas>
    </section>
    <h2 id="MeContacterFR" lang="fr">Alternant ingénieur informatique</h2>
    <h2 id="MeContacterGB" lang="en-GB">Computeur science alternate</h2>
    <footer class="contact">
      <ul>
        <li>
          <img src="ressource/img/linkedin.png" style="width: 25px; height: 25px" alt="">
          Ln : <a href="https://www.linkedin.com/in/vincent-buniazet-1b69b01b4"> Vincent BUNIAZET</a><br>
          <i class="fa-solid fa-envelope"></i> e-mail : <a href="envoyerMail.php"> Vincent BUNIAZET </a>
        </li>
      </ul>
    <div class="flags">
      <button class="flagFR" onclick="changeLangage('FR')"></button>
      <button  class="flagEN" onclick="changeLangage('EN')"></button>
    </div>
    </footer>
    <script src="main.js"></script>
    <script src="gestionLang.js"></script>
    <script>changeLangage("")</script>

    <?php 
      if (isset($_GET["succes"]) && $_GET["succes"] == 1)
      {
        echo "<script type='text/javascript'> window.alert('E-mail envoyer avec succès, un e-mail vous sera envoyer dans les plus bref délais. \\n E-mail succes send, e-mail was going to send on short deadlines.')</script>";
      }
      else if(isset($_GET["succes"]))
      {
        echo "<script type='text/javascript'> window.alert('Echec de l`\'envoie de l\'email, veuillez retenter ultérieurement \\n Failed to send e-mail, please, restart an other time' )</script>";
      }
    ?>
  </body>
</html>