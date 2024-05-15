<!DOCTYPE html>
<html lang="fr en-GB">
	<head>
		<title>Annexes Vincent BUNIAZET</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" href = "style/main.css"/>
		<link rel = "stylesheet" href = "style/Header.css"/>
		<link rel = "stylesheet" href = "style/footer.css"/>
		<link rel = "stylesheet" href = "style/annexes.css"/>
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
            <li><a href="">Annexes</a></li>
          </ul>
        </nav>
      <nav lang="en-GB">
        <ul>
          <li><a href="main.php">Profil</a></li>
          <li><a href="mesCompetencesCode.php">My programming languages</a></li>
          <li><a href="envoyerMail.php">E-mail contact</a></li>
          <li><a href="">Appendices</a></li>
        </ul>
      </nav>
			<div class="flags">
				<button class="flagFR" onclick="changeLangage('FR')"></button>
				<button  class="flagEN" onclick="changeLangage('EN')"></button>
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
		<section id="Annexes">
			<canvas class="canvaAngleHaut" height="200" width="200"></canvas>
				<h2 lang="fr">Annexes</h2>
				<h2 lang="en-GB">Appendices</h2>

				<ul id="checkboxs">
					<li>
						<input type="checkbox" class="formation" onchange="filtrer(event,'formation')" value="formation" >
						<span lang="fr"> Formation </span>
						<span lang="en-GB"> Courses </span>
					</li>
					<li > 
						<input type="checkbox" class="company" onchange="filtrer(event,'company')" value="company" >
						<span lang="fr"> Experience professionel </span>
						<span lang="en-GB"> Professional experiences </span>
					</li>
					<li>
						<input type="checkbox" class="competence" onchange="filtrer(event,'competence')" value="competence" >
						<span lang="fr"> Compétence </span>
						<span lang="en-GB"> Skills </span>
					</li>
					<li>
						<input type="checkbox" class="loisir" onchange="filtrer(event,'loisir')" value="loisir" >
						<span lang="fr"> Loisir </span>
						<span lang="en-GB"> Interests </span>
					</li>
					<li>
						<input type="checkbox" class="qualitees" onchange="filtrer(event,'qualitees')" value="qualitees" >
						<span lang="fr"> Qualités </span>
						<span lang="en-GB"> Qualitys </span>
					</li>
					<li>
						<input type="checkbox" class="projetPerso" onchange="filtrer(event,'projetPerso')" value="projetPerso" >
						<span lang="fr"> Projet personnel </span>
						<span lang="en-GB"> Personal project </span>
					</li>
					<li>
						<input type="checkbox" class="autre" onchange="filtrer(event,'autre')" value="autre">
						<span lang="fr"> Autre </span>
						<span lang="en-GB"> Other </span>
					</li>
					<li>
						<input type="checkbox" class="icone" onchange="filtrer(event,'icone')" value="icone">
						<span> Icons/Logo </span>
					</li>
				</ul>

			<div id="images">
			</div>

				<template id="imageTemplate">
					<div class='image' >
						<img src={{imageLink}} onclick="afficherImage('{{imageTitle}}')">
						<span class="titleImage" onclick="afficherImage('{{imageTitle}}')">{{imageTitle}}</span>
					</div>
				</template>
			<canvas class="canvaAngleBas" height="200" width="200"></canvas>





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
			<button class="flagFR" onclick="changeLangage('FR')"></button>
			<button  class="flagEN" onclick="changeLangage('EN')"></button>
		</div>
		</footer>
		<button  id="chevron" onclick="remonterScroll()" type="button"><i   class="fa-solid fa-chevron-up"></i></button>
		<script src="main.js"></script>
		<script src="gestionLang.js"></script>
		<script>changeLangage("")</script>
		<script src="annexes.js"></script>
	</body>
</html>