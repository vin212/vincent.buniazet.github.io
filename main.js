//masquerMenu();
function dessinerAngleHaut()
{
	var elems = document.getElementsByClassName("canvaAngleHaut")
	for (var elem = 0; elem < elems.length; elem++ )
	{
		console.log(elems[elem]);
		var ctx = elems[elem].getContext('2d');

		ctx.fillStyle = 'rgb(201,127,0)'
		ctx.fillRect(0, 0, 40, 40);
		ctx.fillRect(50, 0, 40, 40);
		ctx.fillRect(100, 0, 40, 40);
		ctx.fillRect(150, 0, 40, 40);

		ctx.fillRect(50, 50, 40, 40);
		ctx.fillRect(100, 50, 40, 40);
		ctx.fillRect(150, 50, 40, 40);

		ctx.fillRect(100, 100, 40, 40);
		ctx.fillRect(150, 100, 40, 40);

		ctx.fillRect(150, 150, 40, 40);
		ctx.stroke();
	}
}

function dessinerAngleBas()
{

	elems=document.getElementsByClassName("canvaAngleBas")
	for (var elem = 0; elem < elems.length; elem++ )
	{
		console.log(elems[elem]);
		var ctx = elems[elem].getContext('2d');

		ctx.fillStyle = 'rgb(201,127,0)'
		ctx.fillRect(0, 150, 40, 40);
		ctx.fillRect(50, 150, 40, 40);
		ctx.fillRect(100, 150, 40, 40);
		ctx.fillRect(150, 150, 40, 40);

		ctx.fillRect(0, 100, 40, 40);
		ctx.fillRect(50, 100, 40, 40);
		ctx.fillRect(100, 100, 40, 40);

		ctx.fillRect(0, 50, 40, 40);
		ctx.fillRect(50, 50, 40, 40);

		ctx.fillRect(0, 0, 40, 40);



		ctx.stroke();
	}
}

function dessingerRondPourcentage()
{
	dessinerPourcentage_70();
	dessinerPourcentage_80();
	dessinerPourcentage_90();
	dessinerPourcentage_87();
}

function dessinerPourcentage_70()
{
	elems=document.getElementsByClassName("cana70")
	for (var elem = 0; elem < elems.length; elem++ )
	{
		console.log(elems[elem]);
		var ctx = elems[elem].getContext('2d');

		ctx.beginPath();
		ctx.lineWidth=30
		ctx.strokeStyle = 'rgb(05,29,64)'
		ctx.arc(100, 100, 80, 0,Math.PI*2);
		ctx.stroke();
		ctx.beginPath();
		ctx.lineWidth=25
		ctx.strokeStyle = 'rgb(255,255,255)'
		ctx.arc(100, 100, 80, 0,Math.PI*2);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle = 'rgb(201,127,0)'
		ctx.lineWidth=25
		ctx.arc(100, 100, 80,-70*(Math.PI*2)/100+3*Math.PI/2,0+3*Math.PI/2);
		ctx.stroke();

		ctx.beginPath()
		ctx.fillStyle = 'rgb(255,255,255)'
		ctx.textAlign="center"
		ctx.textBaseline="middle"
		ctx.font = '50px Barlow Condensed';
		ctx.fillText('70%', 100, 100);
		ctx.fill();
	}
}

function dessinerPourcentage_80()
{
	elems=document.getElementsByClassName("cana80")
	for (var elem = 0; elem < elems.length; elem++ )
	{
		console.log(elems[elem]);
		var ctx = elems[elem].getContext('2d');

		ctx.beginPath();
		ctx.lineWidth=30
		ctx.strokeStyle = 'rgb(05,29,64)'
		ctx.arc(100, 100, 80, 0,Math.PI*2);
		ctx.stroke();
		ctx.beginPath();
		ctx.lineWidth=25
		ctx.strokeStyle = 'rgb(255,255,255)'
		ctx.arc(100, 100, 80, 0,Math.PI*2);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle = 'rgb(201,127,0)'
		ctx.lineWidth=25
		ctx.arc(100, 100, 80,-80*(Math.PI*2)/100+3*Math.PI/2,0+3*Math.PI/2);
		ctx.stroke();

		ctx.beginPath()
		ctx.fillStyle = 'rgb(255,255,255)'
		ctx.textAlign="center"
		ctx.textBaseline="middle"
		ctx.font = '50px Barlow Condensed';
		ctx.fillText('80%', 100, 100);
		ctx.fill();
	}
}

function dessinerPourcentage_90()
{
	elems=document.getElementsByClassName("cana90")
	for (var elem = 0; elem < elems.length; elem++ )
	{
		console.log(elems[elem]);
		var ctx = elems[elem].getContext('2d');

		ctx.beginPath();
		ctx.lineWidth=30
		ctx.strokeStyle = 'rgb(05,29,64)'
		ctx.arc(100, 100, 80, 0,Math.PI*2);
		ctx.stroke();
		ctx.beginPath();
		ctx.lineWidth=25
		ctx.strokeStyle = 'rgb(255,255,255)'
		ctx.arc(100, 100, 80, 0,Math.PI*2);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle = 'rgb(201,127,0)'
		ctx.lineWidth=25
		ctx.arc(100, 100, 80,-90*(Math.PI*2)/100+3*Math.PI/2,0+3*Math.PI/2);
		ctx.stroke();

		ctx.beginPath()
		ctx.fillStyle = 'rgb(255,255,255)'
		ctx.textAlign="center"
		ctx.textBaseline="middle"
		ctx.font = '50px Barlow Condensed';
		ctx.fillText('90%', 100, 100);
		ctx.fill();
	}
}

function dessinerPourcentage_87()
{
	elems=document.getElementsByClassName("cana87")
	for (var elem = 0; elem < elems.length; elem++ )
	{
		console.log(elems[elem]);
		var ctx = elems[elem].getContext('2d');

		ctx.beginPath();
		ctx.lineWidth=30
		ctx.strokeStyle = 'rgb(05,29,64)'
		ctx.arc(100, 100, 80, 0,Math.PI*2);
		ctx.stroke();
		ctx.beginPath();
		ctx.lineWidth=25
		ctx.strokeStyle = 'rgb(255,255,255)'
		ctx.arc(100, 100, 80, 0,Math.PI*2);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle = 'rgb(201,127,0)'
		ctx.lineWidth=25
		ctx.arc(100, 100, 80,-87*(Math.PI*2)/100+3*Math.PI/2,0+3*Math.PI/2);
		ctx.stroke();

		ctx.beginPath()
		ctx.fillStyle = 'rgb(255,255,255)'
		ctx.textAlign="center"
		ctx.textBaseline="middle"
		ctx.font = '50px Barlow Condensed';
		ctx.fillText('87%', 100, 100);
		ctx.fill();
	}
}

function changeSize()
{
	/*console.log("ici")*/
	if (afficher)
	{
		afficherMasquerMenu()
	}
}

function changeScroll()
{

	elem = document.getElementById("header")

	menuBurger = document.getElementById("menuBurger");

	if (afficher)
	{
		afficherMasquerMenu()
	}

	if (elem.getBoundingClientRect().height < window.scrollY && affichagePossible)
	{
		console.log("afficher")
		menuBurger.classList.add("afficherBurger");
	}
	else
	{
		menuBurger.classList.remove("afficherBurger");
	}
}

dessinerAngleHaut();
dessinerAngleBas();

dessingerRondPourcentage();

elem = document.getElementsByClassName("Competence")
var afficher = false;
var afficherDeroulant = false;
var affichagePossible = true;
window.addEventListener('resize', changeSize, false);
window.addEventListener('scroll',changeScroll, false);



function scrollToPosi(idElem)
{
	//masquerMenu();
	document.getElementById(idElem).scrollIntoView();	
	masquerMenu();
}

function  remonterScroll()
{
	window.scrollTo(0,0)
}

function afficherMasquerMenu()
{
	elems = document.getElementsByClassName("menuCacher");
	elemsIcon = document.getElementsByClassName("iconMenuBurger")
	if (!afficher)
	{
		afficher = true
		for (var elem = 0; elem < elems.length; elem++ )
		{
			elems[elem].classList.add("activer");
		}

		for (var elem = 0; elem < elemsIcon.length; elem++ )
		{
			elemsIcon[elem].classList.remove("fa-ellipsis");
			elemsIcon[elem].classList.add("fa-xmark");
		}
	}
	else
	{
		afficher = false;
		console.log("ok")
		for (var elem = 0; elem < elems.length; elem++ )
		{
			elems[elem].classList.remove("activer");
		}

		console.log(elemsIcon)
		for (var elem = 0; elem < elemsIcon.length; elem++ )
		{
			elemsIcon[elem].classList.add("fa-ellipsis");
			elemsIcon[elem].classList.remove("fa-xmark");
		}
	}
}

function masquerMenu()
{

	if (afficherDeroulant)
	{
		afficherDeroulant = false;
		menuBurgers = document.getElementsByClassName("menuVisibleComplet");
		for (e = 0; e < menuBurgers.length; e++)
		{
	   		menuBurgers[e].animate([
	    		{top:  0},
	   			{top: "-100vh"}
				], 
				{duration: 170}).onfinish = function() {
	    			continuer()
					};
		}
	}
}

function continuer()
{
	console.log("continuer")
	menuBurgers = document.getElementsByClassName("menuVisibleComplet");
	for (e = 0; e < menuBurgers.length; e++)
	{
		menuBurgers[e].classList.remove("activer");
	}
	

	affichagePossible = true;
	changeScroll()
}

function afficherMenu()
{
	if (!afficherDeroulant)
	{
		afficherDeroulant = true;
		menuBurgers = document.getElementsByClassName("menuVisibleComplet");
		for (e = 0; e < menuBurgers.length; e++)
		{
			menuBurgers[e].style.zIndex = 30
		menuBurgers[e].animate([
	  // étapes/keyframes
	  { top: "-100vh" },
	  { top: 0}
		], {
		  // temporisation
		  duration: 170,
		}).onfinish = function(){

		console.log("afficher")

		for (e = 0; e < menuBurgers.length; e++)
		{
			menuBurgers[e].classList.add("activer");
		}
		

		menuBurger = document.getElementById("menuBurger");
		menuBurger.classList.remove("afficherBurger");

		affichagePossible = false;};

		}
	}
}

function download()
{
	document.location.href="download.php"; 
}
