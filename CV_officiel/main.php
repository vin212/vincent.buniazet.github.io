<!DOCTYPE html>
<html lang="fr en-GB">
	<head>
		<title>Vincent BUNIAZET</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" href = "style/main.css"/>
		<link rel = "stylesheet" href = "style/Header.css"/>
		<link rel = "stylesheet" href = "style/APropos.css"/>
		<link rel = "stylesheet" href = "style/Formations.css"/>
		<link rel = "stylesheet" href = "style/ExperiencesPro.css"/>
		<link rel = "stylesheet" href = "style/Competence.css"/>
		<link rel = "stylesheet" href = "style/Interets.css"/>
		<link rel = "stylesheet" href = "style/Qualitys.css"/>
		<link rel = "stylesheet" href = "style/ProjetsPerso.css"/>
		<link rel = "stylesheet" href = "style/footer.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Exo+2:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css">
	</head>
	<body>
		<header id="header">
			<img src="ressource/img/photo__identité_Vincent_BUNIAZET.jpg" alt="Vincent BUNIAZET's photo"/>
			<h2> Vincent BUNIAZET </h2>
			<button id="menuBurgerTel" onclick="afficherMenu()"><i class="fa-solid fa-bars"></i></button>
			<nav lang="fr" class="menuVisible">
				<ul>
					<li><a onclick="scrollToPosi('APropos')">A mon propos</a></li>
					<li><a onclick="scrollToPosi('Formation')">Formation</a></li>
					<li><a onclick="scrollToPosi('ExperiencesPro')">Expériences Professionel</a></li>
					<li><a onclick="scrollToPosi('Competence')">Compétences</a></li>
					<li><a onclick="scrollToPosi('Interets')">En savoir plus</a></li>
					<li><a onclick="scrollToPosi('ProjetsPerso')">Projets personel</a></li>
					<li><a onclick="scrollToPosi('MeContacterFR')">Contact</a></li>
					<li><a onclick="afficherMasquerMenu()"><i style="font-size: 35px;" class="iconMenuBurger fa-solid fa-ellipsis"></i></a></li>
				</ul>
			</nav>
			<nav lang="en-GB" class="menuVisible">
				<ul>
					<li><a onclick="scrollToPosi('APropos')">About me</a></li>
					<li><a onclick="scrollToPosi('Formation')">Course</a></li>
					<li><a onclick="scrollToPosi('ExperiencesPro')">Experiences</a></li>
					<li><a onclick="scrollToPosi('Competence')">Skills</a></li>
					<li><a onclick="scrollToPosi('Interets')">for further information</a></li>
					<li><a onclick="scrollToPosi('ProjetsPerso')">Personal project</a></li>
					<li><a onclick="scrollToPosi('MeContacterGB')">Contact</a></li>
					<li><a onclick="afficherMasquerMenu()"><i class="iconMenuBurger fa-solid fa-ellipsis"></i></a></li>
				</ul>
			</nav>
			<nav lang="fr" class="menuCacher">
				<ul>
					<li><a href="mesCompetencesCode.php">Mes langages de programmation</a></li>
					<li><a href="envoyerMail.php">Contact E-mail</a></li>
					<li><a href="annexe.php">Annexes</a></li>
				</ul>
			</nav>
			<nav lang="en-GB" class="menuCacher">
				<ul>
					<li><a href="mesCompetencesCode.php">My programation language</a></li>
					<li><a href="envoyerMail.php">E-mail Contact</a></li>
					<li><a href="annexe.php">Annexes</a></li>
				</ul>
			</nav>
			<div class="flags">
				<button class="flagFR" onclick="changeLangage('FR')"></button>
				<button  class="flagEN" onclick="changeLangage('EN')"></button>
			</div>
		</header>
		
		<h1 lang="fr">Alternant ingénieur informatique</h1>
		<h1 lang="en-GB">Computeur science alternat</h1>
		<button id="menuBurger" onclick="afficherMenu()"><i class="fa-solid fa-bars"></i></button>
		
		<nav lang="fr" class="menuVisibleComplet">
			<ul>
				<li id = "close"><a onclick="masquerMenu()"><i class="fa-solid fa-xmark"></i></a></li>
				<li><hr></li>
				<li><a onclick="scrollToPosi('APropos')">A mon propos</a></li>
				<li><hr></li>
				<li><a onclick="scrollToPosi('Formation')">Formation</a></li>
				<li><hr></li>
				<li><a onclick="scrollToPosi('ExperiencesPro')">Expériences Professionnel</a></li>
				<li><hr></li>
				<li><a onclick="scrollToPosi('Competence')">Compétences</a></li>
				<li><hr></li>
				<li><a onclick="scrollToPosi('Interets')">En savoir plus</a></li>
				<li><hr></li>
				<li><a onclick="scrollToPosi('ProjetsPerso')">Projets personnel</a></li>
				<li><hr></li>
				<li><a onclick="scrollToPosi('MeContacterFR')">Contact</a></li>
				<li><hr></li>
				<li><a href="mesCompetencesCode.php">Mes langages de programmation</a></li>
				<li><hr></li>
				<li><a href="envoyerMail.php">Contact E-mail</a></li>
				<li><hr></li>
				<li><a href="annexe.php">Annexes</a></li>
				<li><hr></li>
			</ul>
		</nav>

		<nav lang="en-GB" class="menuVisibleComplet">
				<ul>
					<li id="close"><a onclick="masquerMenu()"><i class="fa-solid fa-xmark"></i></a></li>
					<li><hr></li>
					<li><a onclick="scrollToPosi('APropos')">About me</a></li>
					<li><hr></li>
					<li><a onclick="scrollToPosi('Formation')">Course</a></li>
					<li><hr></li>
					<li><a onclick="scrollToPosi('ExperiencesPro')">Experiences</a></li>
					<li><hr></li>
					<li><a onclick="scrollToPosi('Competence')">Skills</a></li>
					<li><hr></li>
					<li><a onclick="scrollToPosi('Interets')">for further information</a></li>
					<li><hr></li>
					<li><a onclick="scrollToPosi('ProjetsPerso')">Personal project</a></li>
					<li><hr></li>
					<li><a onclick="scrollToPosi('MeContacterGB')">Contact</a></li>
					<li><hr></li>
					<li><a onclick="scrollToPosi('MeContacterFR')">Contact</a></li>
					<li><hr></li>
					<li><a href="mesCompetencesCode.php">My programming language</a></li>
					<li><hr></li>
					<li><a href="envoyerMail.php">E-mail Contact</a></li>
					<li><hr></li>
					<li><a href="annexe.php">Annexes</a></li></i></a></li>
				</ul>
		</nav>


		<section id="APropos">
			<canvas class="canvaAngleHaut" height="200" width="200"></canvas>
				<h2 lang="fr">Qui suis-je ?</h2>
				<h2 lang="en-GB">Who am-I ?</h2>
				<p lang="fr">
					Etudiant en cinquième année d'école d'ingénieur à <b>CPE Lyon</b>, créatif et enthousiaste, avec de solides compétences en programmation et une bonne compréhension des algorithmes. Actuellement en alternance dans l'entreprise <b>Heliocity</b>.
				</p>
				<ul lang="fr">
					<h3 lang="fr">Quelques informations utile:</h3>
					<li class="born">
						<i class="fa-solid fa-user"></i> Né le 21/12/1999 (24 ans)
					</li >
					<li class="permis">
						<i class="fa fa-car" aria-hidden="true"></i> Permis B Véhiculé
					</li>
					<li class="language">
						<i class="fa-solid fa-language"></i> Anglais niveau B1 (Cambridge) (Objectif B2)
					</li>
					<li  class="nationality">
						<div class="flagFR"></div><div lang="fr">&thinsp;Français</div>
					</li>
					<li class="contact">
						<i class="fa-solid fa-envelope"></i> <a href="envoyerMail.php">Me contacter </a>
					</li>
				</ul>
				<p lang="en-GB">
					French student, 23 years, in engineer hight school in computer science and communication network on the school <b>CPE Lyon</b>, with important interests for the new technologies. Actually in internship for my graduation in engenier computer science in Finlande for two and half month at <b>AILiveSim Oy</b>.
				</p>
				
				<ul lang="en-GB">
					<h3 lang="en-GB">Utile information :</h3>
					<li class="born">
						<i class="fa-solid fa-user"></i> Born 12,21,1999 (23 years)
					</li>
					<li class="permis">
						<i class="fa fa-car" aria-hidden="true"></i> Driving Licence (French B)
					</li>
					<li class="language">
						<i class="fa-solid fa-language"></i> English level B1 (goal B2 Cambridge in end of 2023)
					</li>
					<li class="nationality">
						<div class="flagFR"></div> <div lang="en-GB">&thinsp;French </div>
					</li>
					<li class="contact">
						<i class="fa-solid fa-envelope"></i> <a href="envoyerMail.php">Contact me </a>
					</li>
				</ul>
			<canvas class="canvaAngleBas" height="200" width="200"></canvas>
		</section>
		<section id="Formation">
			<h2 lang="fr">Quelles sont mes formations ?</h2>
			<h2 lang="en-GB">What are my courses? </h2>
			<ul>
				<li class="uneFormationGauche"><img class="CPELogo" src="ressource/img/CPE.jpg" alt="CPE's logo"><br>
					<ul lang="fr">
						<li>(En cours) (Bachelor aquis) Ingénieur informatique et réseau de communication mention robotique</li>
						<li>CPE Lyon  (France- Rhône-Alpes - 69)</li>
						<li>Depuis septembre 2021</li>
						<li>En alternance</li>
					</ul>
					<ul lang="en-GB">
						<li>(In progress) Computer science engineer and communication network</li>
						<li>CPE Lyon  (France- Rhône-Alpes - 69)</li>
						<li>Since 2021</li>
						<li>Alternately</li>
					</ul>
				</li>
				<li><hr></li>

				<li class="uneFormationDroite"><img class="UGALogo" src="ressource/img/UGA.png" alt="University UGA's logo"><br>
					<ul lang="fr">
						<li>(Diplômé) Licence informatique</li>
						<li>Université Grenoble Alpes (UGA) (France- Rhône-Alpes - 38)</li>
						<li>Juillet 2021</li>
						<li>Participation à un concours de programmation (2021) 2eme équipe sur 30</li>
						<li>Obtention avec mention</li>
					</ul>
					<ul lang="en-GB">
						<li>(Graduated) Bachelor degree in computer sciences</li>
						<li>Université Grenoble Alpes (UGA) (France- Rhône-Alpes - 38)</li>
						<li>July 2021</li>
						<li>Participation to programming competition (2021) 2nd team on 30</li>
						<li>Graduated with mention</li>
					</ul>

				</li>
				<li><hr></li>

				<li class="uneFormationGauche"><img class="UGALogo" src="ressource/img/UGA.png" alt="University UGA's logo"><br>
					<ul lang="fr">
						<li> Licence mathématique</li>
						<li>Université Grenoble Alpes (UGA) (France- Rhône-Alpes - 38)</li>
						<li>2018-2019 (une année)</li>
					</ul>
					<ul lang="en-GB">
						<li> Bachelor 2 Mathematics</li>
						<li>Université Grenoble Alpes (UGA) (France- Rhône-Alpes - 38) </li>
						<li>2018-2019 (one year) </li>
					</ul>
				</li>
				<li><hr></li>
				<li class="uneFormationDroite"><img class="LbaLogo" src="ressource/img/LBA.jpg" alt="High school Boissy d'Anglas's logo"><br>
					<ul lang="fr">
						<li>(Diplômé) Baccalauréat Scientifique (S) mention science de l'ingénieur </li>
						<li>Lycée Boissy d'Anglas (France- Rhône-Alpes - 07)</li>
						<li>Juillet 2017</li>
						<li>Obtention avec mention</li>
					</ul>
					<ul lang="en-GB">
						<li>(Graduated) science Baccalauréat mention engineer science </li>
						<li>High school Boissy d'Anglas (France- Rhône-Alpes - 07)</li>
						<li>July 2017</li>
						<li>Graduated with mention</li>
					</ul>
				</li>

			</ul>
			
		</section>
		<section id="ExperiencesPro">
			<canvas class="canvaAngleHaut" height="200" width="200"></canvas>
			<h2 lang="fr">Quelles sont mes experiences <br> professionel ?</h2>
			<h2 lang="en-GB">What are my professional <br> experiences?</h2>
			<ul>
			<li class="uneExperienceGauche">
					<img class=HeliocityLogo src="ressource/img/heliocitylogo.png" alt="Heliocity's logo"><br>
					<ul lang="fr" >
						<li>Alternant ingéneiur informatique </li>
						<li>Heliocity  (France - Auvergne Rhône Alpes - 38)</li>
						<li>Depuis décembre 2023</li>
						<li>Conception d'une Interface web en VueJS 3</li>
		        		<li>Développement de l'autonomie </li>
		      			<li>Développement des compétences techniques et de bonne pratique</li>
					</ul>
					<ul lang="en-GB">
						<li>Rotation computer science engineer  </li>
						<li>Heliocity  (France - Auvergne Rhône Alpes - 38)</li>
						<li>Since december 2023</li>
						<li>Developement autonomy. </li>
		        		<li>Developement technical skills and good practrice</li>
					</ul>
				</li>
				<li><hr></li>
				<li class="uneExperienceDroite">
					<img class=MeropyLogo src="ressource/img/meropy.png" alt="Meropy's logo"><br>
					<ul lang="fr" >
						<li>Alternant ingénieur informatique </li>
						<li>Meropy  (France- Auvergne Rhône-Alpes - 38)</li>
						<li>Septembre 2021 à Fin Septembre 2023</li>
						<li>Conception d'une Interface humain machine sous QT avec base de donnée, gestion d'un cloud, utilisation d'API. Gestion du réseau interne.</li>
		        <li>Développement de l'autonomie et des capacités à communiquer.</li>
					</ul>
					<ul lang="en-GB">
						<li>Rotation computer science engineer </li>
						<li>Meropy  (France- Rhône-Alpes - 38)</li>
						<li>September 2021 to end september 2023</li>
						<li> Conception human machine interface on QT with data base, cloud management, use API, development my autonomy and capacity to exchange.
						</li>
					</ul>
				</li>
				<li><hr></li>

				<li class="uneExperienceGauche">
					<img class=AILiveSimLogo src="ressource/img/ailivesimlogo.png" alt="AILiveSim's logo"><br>
					<ul lang="fr" >
						<li>Mission à l'étranger, developpeur API ROS </li>
						<li>AILiveSim  (Finlande- Helsinki)</li>
						<li>Mi-juin à fin août 2023</li>
						<li>Conception d'une Interface ROS entre le logiciel AILiveSim et le client</li>
		        		<li>Développement de l'autonomie et des capacités à communiquer en distanciel.</li>
		      			<li>Découverte de gestion de projet en distanciel sur un gros projet.</li>
		      			<li>Découverte d'un nouveau pays et d'une nouvelle culture.</li>
					</ul>
					<ul lang="en-GB">
						<li>Internship aboard, API ROS developer </li>
						<li>AILiveSim  (Finlande- Helsinki)</li>
						<li>Half-June to end of August 2023</li>
						<li>Conception ROS interface between AILiveSim software and client </li>
		        		<li>Developement autonomy and skills in remote communication</li>
		      			<li>Discover project management in remote for big project</li>
		      			<li>Discover new contry and new culture</li>
					</ul>
				</li>
				<li><hr></li>
				<li class="uneExperienceDroite">
					<img class="TIBALogo" src="ressource/img/TIBA.png" alt="TIBA's logo"><br>
					<ul lang="fr">
						<li>Aide tricoteur </li>
						<li>TIBA (France -  Rhône-Alpes - 07)</li>
						<li>Juin 2016 et Juin 2017</li>
						<li>Travail saisonnier au sein d'une usine avec travail en équipe, développement de
         l'autonomie et des capacités à communiquer.</li>
					</ul>
					<ul lang="en-GB">
						<li>Helper knit </li>
						<li>TIBA (France -  Rhône-Alpes - 07)</li>
						<li>June 2016 and June 2017</li>
						<li>Annual work on factory in team, development autonomy and capacity to communicate</li>
					</ul>
				</li>
				<li><hr></li>
				<li class="uneExperienceGauche"> 
					<img class = CansonLogo src="ressource/img/canson.png" alt="Canson's logo"><br>
					<ul lang="fr">
						<li>Stage de découverte</li>
						<li>Canson  (France- Rhône-Alpes - 07)</li>
						<li>Avril 2014</li>
						<li>Apprentissage du fonctionnement et de l'organisation d'une grande entreprise avec les postes associés. </li>
					</ul>
					<ul lang="en-GB">
						<li>Discovery internship</li>
						<li>Canson  (France- Rhône-Alpes - 07)</li>
						<li>April 2014</li>
						<li>Learn functioning and management in big company and the different jobs. </li>
					</ul>
				</li>
				<li><hr></li>
				<li class="uneExperienceDroite">
					<img class=MSLogo src="ressource/img/MarcSeguin.png" alt="High Marc Seguin's logo"><br>
					<ul lang="fr">
						<li>Stage de découverte service informatique </li>
						<li>Lycée Marc Seguin Saint Charles</li>
						<li>Mai 2012</li>
						<li>Apprentissage de la gestion journalier d'une infrastructure. </li>
					</ul>
					<ul lang="en-GB">
						<li>Discovery internship on computer science service</li>
						<li>High school Marc Seguin Saint Charles</li>
						<li>May 2012</li>
						<li> Learned daily management infrastructure. </li>
					</ul>
				</li>
			</ul>
			<canvas class="canvaAngleBas" height="200" width="200"></canvas>
		</section>
		<section id="Competence">
			<h2 lang="fr">Quelles sont mes compétences particulières ?</h2>
			<h2 lang="en-GB">What are my skills?</h2>

			<div id="mesCompetences">
				<div class="languagePrograming bloc">
					<img src="ressource/img/c++.png" alt="c icone">
					<canvas class="cana90" height="200" width="200"></canvas><div class="txt"> 90%</div>
					<div lang="fr">Programation*</div>
					<div lang="en-GB">Programming*</div>
				</div>
				<div class="webDeveloppement bloc">
					<img src="ressource/img/html.png" alt="html icone">
					<canvas class="cana87" height="200" width="200"></canvas><div class="txt">87%</div>
					<div lang="fr">Web développement*</div>
					<div lang="en-GB">Web development*</div>
				</div>
				<div class="algorithm bloc" >
					<img src="ressource/img/algo_icone.png" id="Flowchart" alt="Flowchart icone">
					<canvas class="cana70" height="200" width="200"></canvas><div class="txt">70%</div>
					<div lang="fr">Algorithmie*</div>
					<div lang="en-GB">Algorithm*</div>
				</div>
				<div class="packOffice bloc">
					<img src="ressource/img/packoffice_logo.jpg" alt="PackOffice icone">
					<canvas class="cana80" height="200" width="200"></canvas><div class="txt">80%</div>
					<div lang="fr">Suite Office*</div>
					<div lang="en-GB">Pack Office*</div>
				</div>
				<div class="solidworks bloc">
					<img src="ressource/img/solidworks.jpg" alt="SolidWork	icone">
					<canvas class="cana80" height="200" width="200"></canvas><div class="txt">80%</div>
					<div lang="fr">SolidWork*</div>
					<div lang="en-GB">SolidWork*</div>
				</div>
			</div>
			<ul lang="fr">  
				<li>Programmation : C/C++ (maitriser), Python, php, SQL, Javascript  ... (plus de détail <a href="mesCompetencesCode.php">ici</a>)</li>
				<li>Développement web: chat, interface, gestion utilisateurs</li>
				<li>Algorithmie : algorithmes de génération, Polygoninfill, Dijkstra, tri ....</li>
				<li>Suite office : Word, Power Point, Excel, Outlook</li>
				<li>SolidWorks : pièce pour robot, aile d'avion</li>
			</ul>
			<ul lang="en-GB">  
				<li>Programming: C/C++ (to master ), Python, php, SQL, Javascript  ... (more detail <a href="mesCompetencesCode.php">here</a>)</li>
				<li>Web development: chat, interface, users management</li>
				<li>Algorithm: Generation map algorithm, Polygon infill, Dijkstra, three ....</li>
				<li>Pack Office: Word, Power Point, Excel, Outlook</li>
				<li>SolidWorks: Robot parts, aircraft wing </li>
			</ul>
		</section>
		<section id="Interets">
			<canvas class="canvaAngleHaut" height="200" width="200"></canvas>
			<h2 lang="fr">Quels sont mes loisirs ? </h2>
			<h2 lang="en-GB">What are my interests?</h2>
			<ul>
				<li class="Informatique">
					<img src="ressource/img/informatique.jpg" alt="computer image with code line"> 
					<div class="value" lang="fr">Informatique</div>
					<div class="value" lang="en-GB">Computer science</div>
				</li>
				<li class="Conception_3D" >
					<img src="ressource/img/3Dconception.jpg" alt="3D object image modelisation"> 
					<div class="value" lang="fr">Conception 3D</div>
					<div class="value" lang="en-GB">3D Conception </div>
				</li>
				<li class="Mathematiques">
					<img src="ressource/img/math.jpg" alt="math image with formula"> 
					<div class="value" lang="fr">Mathématiques </div>
					<div class="value" lang="en-GB">Mathematics </div>
				</li>
				<li class="Roller">
					<img src="ressource/img/patin_a_glace.jpg" alt="two shoes ice skating image, on ice"> 
					<div class="value" lang="fr">Patin à glace/Roller</div>
					<div class="value" lang="en-GB">Ice skating/rollerblades</div>
				</li>
				<li class="Ecriture" >
					<img src="ressource/img/ecrire.jpg" alt="old writing machine image with paper with text"> 
					<div class="value" lang="fr">Ecriture (romans d'anticipation)</div>
					<div class="value" lang="en-GB">Writing (anticipation novel)</div>
				</li>
				<li class="origami">
					<img src="ressource/img/origami.jpg" alt="orange traditional bird origami image">
					<div class="value" lang="fr">Origami</div>
					<div class="value" lang="en-GB">Origami</div>
				</li>
			</ul>
			<canvas class="canvaAngleBas" height="200" width="200"></canvas>
		</section>
		<section id="Qualitys">
			<h2 lang="fr">Quelles sont mes qualités?</h2>
			<h2 lang="en-GB">What are my qualities ?</h2>
			<ul>
				<li class="problems">
					<img src="ressource/img/resolution.png" alt="image, problems bar and solution"> 
					<div class="value" lang="fr">Capacité à résoudre des problèmes</div>
					<div class="value" lang="en-GB">Capacity to solve problems</div>
				</li>
				<li class="Logical">
					<img src="ressource/img/logique.jpg" alt="image, brain with logic and creative"> 
					<div class="value" lang="fr">Sens de la logique</div>
					<div class="value" lang="en-GB">Logical sens</div>
				</li>
				<li class="autonomie">
					<img src="ressource/img/autonomie.png" alt="image, man with many programing elements with him"> 
					<div class="value" lang="fr">Conduite autonome de projets </div>
					<div class="value" lang="en-GB">Autonomy conduce project</div>
				</li>
				<li class="rigoureux">
					<img src="ressource/img/rigoureux.png" alt="image, line with idea, planning, strategy and success"> 
					<div class="value" lang="fr">Rigoureux</div>
					<div class="value" lang="en-GB">Rigorous</div>
				</li>
				<li class="adaptation">
					<img src="ressource/img/adaptation.png" alt="image, one direction with differents arrow and solution at the end"> 
					<div class="value" lang="fr">Capacité d'adaptation</div>
					<div class="value" lang="en-GB">Adaptation</div>
				</li>
				<li class="challenge"> 
					<img src="ressource/img/challenge.png" alt="trophy image on podium">
					<div class="value" lang="fr">Goût des challenges</div>
					<div class="value" lang="en-GB">Liking challenge</div>
				</li>
			</ul>
		</section>
		<section id="ProjetsPerso">
			<canvas class="canvaAngleHaut" height="200" width="200"></canvas>
			<h2 lang="fr">Quels sont mes projets personnel ?</h2>	
			<h2 lang="en-GB">What are my personal project ?</h2>
			<ul id="ToutProjetsPerso">
				<li class="jeuVideo bloc">
					<h3 lang="fr">2020 Création d'un jeu 2D </h3>
					<h3 lang="en-GB">2020 Creation 2D video game </h3>
					<img src="ressource/img/jeuD2 Présentation général.png" alt="">
					<ul lang="fr">
						<li>• Utilisation des bibliothèques SDL</li>
						<li>• Programmation en C</li>
						<li>• Conception d'un jeu vidéo</li>
						<li>• Création d'algorithmes de génération de terrain</li>
						<li>• Interaction avec utilisateur (clavier, souris)</li>
						<li>• Gestion de terrain 2D</li>
					</ul>
					<ul lang="en-GB">
						<li>• Use library SDL</li>
						<li>• Programme in C</li>
						<li>• Conception video game</li>
						<li>• Create map generation algorithm</li>
						<li>• Interaction with user (key, mouse...)</li>
						<li>• Management 2D map</li>
					</ul>
				</li>
				<li><hr></li>
				<li class="robot bloc">  
					<h3 lang="fr">2019 Création de robot</h3>
					<h3 lang="en-GB">2019 Creation robot</h3>
					<img src="ressource/img/arduino_rsp.jpg" alt="arduino photo">
					<ul lang="fr">
						<li>• Interaction via une page web</li>
						<li>• Acquisition de données physiques  (température, luminosité)</li>
						<li>• Montage de robot </li>
						<li>• Programmation du robot (en arduino/c)</li>
						<li>• Utilisation d'une carte arduino et raspberry pi 3 B+</li>
						<li>• Contrôle de moteur </li>
						<li>• Montage électronique</li>
					</ul>
					<ul lang="en-GB">
						<li>• Interaction with website page</li>
						<li>• Capture physical data (temperature, luminosity)</li>
						<li>• Assembling robot </li>
						<li>• Robot programming (in C/arduino)</li>
						<li>• Use card arduino and Raspberry pi 3 B+</li>
						<li>• Control motor </li>
						<li>• Assembling electronic</li>
					</ul>
				</li>
				<li><hr></li>
				<li class="Impression bloc">
					<h3 lang="fr">2018 Impression 3D</h3>
					<h3 lang="en-GB">2018 3D printer</h3>
					<img src="ressource/img/imprimante_3D_ouverte.jpg" alt="3D printer photo">
					<ul lang="fr">
						<li>• Montage d’imprimante 3D</li>
						<li>• Création de pièces sous SolidWorks</li>
						<li>• Gestion de l’impression (température de la buse, paramètre du slicer)</li>
					</ul>
					<ul lang="en-GB">
						<li>• Assemble 3D printer</li>
						<li>• Create part on SolidWorks</li>
						<li>• Manage printing (nozzle temperature, slicer parameter)</li>
					</ul>
				</li>
			</ul>
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
		<button  title="Télécharger au formats '.pdf'" id="download" onclick="download()" type="button"><i class="fa-solid  fa-download" style="color: rgb(100,100,100)"></i></button>
		<script src="main.js"></script>
		<script src="gestionLang.js"></script>
		<script>changeLangage("")</script>
	</body>
</html>
