<!DOCTYPE html>
<html lang="fr en-GB">
	<head>
		<title>Vincent BUNIAZET</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" href = "style/main.css"/>
		<link rel = "stylesheet" href = "style/Header.css"/>
		<link rel = "stylesheet" href = "style/footer.css"/>
		<link rel = "stylesheet" href = "style/mesCompetencesCode.css"/>
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
            <li><a href="envoyerMail.php">Contact E-mail</a></li>
            <li><a href="annexe.php">Annexes</a></li>
          </ul>
        </nav>
      <nav lang="en-GB">
        <ul>
          <li><a href="main.php">Profil</a></li>
          <li><a href="mesCompetencesCode.php">My programming languages</a></li>
          <li><a href="envoyerMail.php">E-mail contact</a></li>
          <li><a href="annexe.php">Appendices</a></li>
        </ul>
      </nav>
			<div class="flags">
				<button class="flagFR" onclick="changeLangage('FR');changeTitle()"></button>
				<button  class="flagEN" onclick="changeLangage('EN');changeTitle()"></button>
			</div>
		</header>
		
		<h1 lang="fr">Alternant ingénieur informatique</h1>
		<h1 lang="en-GB">Computeur science alternate</h1>
		<button id="menuBurger" onclick="afficherMenu()"><i class="fa-solid fa-bars"></i></button>
		<nav lang="fr" class="menuVisibleComplet">
      <ul>
        <li id = "close"><a onclick="masquerMenu()"><i class="fa-solid fa-xmark"></i></a></li>
        <li><hr></li>
        <li><a href="main.php">Profil</a></li>
        <li><hr></li>
        <li><a href="mesCompetencesCode.php">Mes Langages de Programation</a></li>
        <li><hr></li>
        <li><a href="envoyerMail.php">Contact E-mail</a></li>
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
          <li><a href="envoyerMail.php">E-mail contact</a></li>
          <li><hr></li>
        <li><a href="annexe.php">Appendices</a></li>
        </ul>
    </nav>

    <section id="sectionLang">
	    <!--<canvas class="canvaAngleHaut" height="200" width="200"></canvas>-->
	    <table id="languages">
	    	<tr lang="fr">
			    <th>Classement</th>
			    <th>Langage</th>
			    <th>Niveau</th>
			    <th>Niveau d'expertise</th>
			    <th>Projets associé</th>
				</tr>
				<tr lang="en-GB">
				    <th>Ranking</th>
				    <th>Language</th>
				    <th>Rating</th>
				    <th>Expert level</th>
				    <th>Projects</th>
				</tr>
	    	<template id="langageTemplate">
	    		<tr>
	    			<td>{{Classement}}</td>
				    <td>{{Langage}}</td>
				    <td><div class="levelBar"><div class="level" style="width: {{Niveau}}%"><div class="value">{{Niveau}}%</div></div></div></td>
				    <td>{{NiveauExpertise}}</td>
				    <td>
				    	<span lang="fr">{{ProjetsFR}}</span>
				    	<span lang="en-GB">{{ProjetsEN}}</span>
				    </td>
	    		</tr>
	    	</template>	

	    </table>
	    <!--<canvas class="canvaAngleBas" height="200" width="200"></canvas>-->
	   </section>

    <h2 id="MeContacterFR" lang="fr">Pour me<br> contacter</h2>
		<h2 id="MeContacterGB" lang="en-GB">Contact me</h2>
	<footer class="contact">
			<ul>
				<li>
					<img src="ressource/img/linkedin.png" style="width: 25px; height: 25px" alt="">
					Linkedin : <a href="https://www.linkedin.com/in/vincent-buniazet-1b69b01b4"> Vincent BUNIAZET</a><br>
					<i class="fa-solid fa-envelope"></i> e-mail : <a href="envoyerMail.php"> Vincent BUNIAZET </a>
				</li>
			</ul>
		<div class="flags">
			<button class="flagFR" onclick="changeLangage('FR');changeTitle()"></button>
			<button  class="flagEN" onclick="changeLangage('EN');changeTitle()"></button>
		</div>
		</footer>
		<button  id="chevron" onclick="remonterScroll()" type="button"><i   class="fa-solid fa-chevron-up"></i></button>
		<script src="main.js"></script>
		<script src="gererProgrammation.js"></script>
		<script src="gestionLang.js"></script>
		<script>changeLangage("");changeTitle()</script>
	</body>
</html>