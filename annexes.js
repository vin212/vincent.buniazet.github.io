var myJson

var toto = '{"formation":false,"company":false,"competence":false,"loisir":false,"qualitees":false,"projetPerso":false,"icone":false,"autre":false}'
var valeur = JSON.parse(toto)
//console.log("ok")
fetch("ressource/json/annexe.json").then(function(response) {
    return response.json();
    })
.then(function(json){
	//console.log(json)
	//console.log(json['3DConception']['src'])

	for (var val in json)
	{
		//console.log(val)
		center = document.getElementById("images");
		myTemplayte = document.getElementById("imageTemplate")
		let clone = document.importNode(myTemplayte.content, true);
	        newContent = clone.firstElementChild.innerHTML  // remplace {{modèle}}
	            .replace(/{{imageLink}}/g, json[val]['src']) // et {{couleur}} par
	            .replace(/{{imageTitle}}/g, val)
	        clone.firstElementChild.innerHTML = newContent;

	        //console.log(clone.firstElementChild)
	        clone.firstElementChild.classList.add(json[val]['type'])
	      	clone.firstElementChild.classList.add(json[val]['categorie'])


	        center.append(clone.firstElementChild);
	        //console.log(json[val]['type'])
	      
    }

    myJson = json
})

/*import Lightbox from './photoswipe-lightbox.esm.js';
const lightbox = new Lightbox({
  gallery: '#images',
  children: '.image',
  pswpModule: () => import('./photoswipe.esm.js')
});
lightbox.init();
*/
console.log('finish')

function afficherImage(title)
{
	//console.log("afficherIagme")
	body = document.getElementsByTagName("body")[0]

	var div = document.createElement('div');
	div.id = 'containerImage';
	var span = document.createElement('span')
	var img = document.createElement('img')
	span.id = 'printImg'
	img.src = myJson[title]['src']
	var description = document.createElement('span')
	description.id = 'descriptionImg'

	lang = localStorage.getItem("lang")
	if (lang == null || lang == "FR")
	{
		description.innerText = myJson[title]["description"]["fr"]
	}
	else
	{
		description.innerText = myJson[title]["description"]["en"]
	}
	


	//console.log(myJson[title]["description"]["fr"])

	var i = document.createElement('i')
	i.classList.add("fa-solid")
	i.classList.add("fa-xmark")
	//console.log("fermer image")
	i.onclick  = function fermerImage()
	{
		containerImage  = document.getElementById("containerImage")
		containerImage.remove()
		body.style.overflow= "scroll";
	}
	span.appendChild(img)
	span.appendChild(description)
	div.appendChild(i)
	div.appendChild(span)
	body.appendChild(div)

	body.style.overflow= "hidden";

	//console.log("fermer image")
}

function filtrer(event,type)
{
	//console.log(event)
	var checkbox = event.target;
	valeur[type] = checkbox.checked
	console.log(valeur)

	for (e in valeur)
	{
		//console.log(e)
		if (valeur[e])
		{
			changerValeur(valeur[e],e)
		}
	}

	for (e in valeur)
	{
		//console.log(e)
		if (!valeur[e])
		{
			changerValeur(valeur[e],e)
		}
	}
	//changerValeur(checkbox.checked,type)
	//console.log(checkbox.checked)
	//console.log(type)

}

function changerValeur(boolean,type)
{

console.log("boolean : " + boolean + " type : " + type)
	images  = document.getElementById("images")
	var elements = images.getElementsByClassName(type) 
	//console.log(elements)
	if (!boolean)
	{
		//console.log(elements)
		for (var elem = 0 ; elem < elements.length; elem++)
		{
			//console.log(elements[elem])
			elements[elem].style.display = "none"
		}
	}
	else
	{
		for (var elem = 0 ; elem < elements.length; elem++)
		{
			//console.log(elements[elem])
			elements[elem].style.display = "initial"
		}

	}

	if (type == "icone")
	{
		changerValeur(boolean,"logo")
	}

}