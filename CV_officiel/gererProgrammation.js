
console.log("ok")

fetch("ressource/json/langage.json").then(function(response) {
    return response.json();
    })
.then(function(json){
	for ( val in json)
	{
		/*console.log(val)*/
		center = document.getElementById("languages");
		myTemplayte = document.getElementById("langageTemplate")
		let clone = document.importNode(myTemplayte.content, true);
	        newContent = clone.firstElementChild.innerHTML  // remplace {{modèle}}
	            .replace(/{{Classement}}/g, json[val]['placement']) // et {{couleur}} par
	            .replace(/{{Langage}}/g, val)
	            .replace(/{{Niveau}}/g, json[val]['niveau'])
	            .replace(/{{NiveauExpertise}}/g, json[val]['expertise'])
	            .replace(/{{ProjetsFR}}/g, json[val]['projet associer']["fr"])
	            .replace(/{{ProjetsEN}}/g, json[val]['projet associer']["en"])
	        clone.firstElementChild.innerHTML = newContent;
	        /*clone.firstElementChild.classList.add(json[val]['type'])
	      	clone.firstElementChild.classList.add(json[val]['categorie'])*/
	        center.append(clone.firstElementChild);
	        changeTitle()
	        /*console.log("change lang")*/
	        changeLangage("")
	}
	})

function changeTitle()
{
	/*console.log(localStorage.getItem("lang"))*/
	document.querySelectorAll("#languages").forEach(function(table){
		let labels = []
		table.querySelectorAll("tr").forEach(function(tr){
			
			/*console.log(tr.lang)
			console.log(localStorage.getItem("lang"))*/
			if (tr.lang=='fr' && (localStorage.getItem("lang") == "FR" || localStorage.getItem("lang") == ""))
			{
				/*console.log("fr lang")*/
				tr.querySelectorAll("th").forEach(function(th){
					labels.push(th.innerText)
				})
			}
			else if (tr.lang=='en-GB' && localStorage.getItem("lang") == "EN")
			{
				/*console.log("en lang ici")*/
				tr.querySelectorAll("th").forEach(function(th){
					labels.push(th.innerText)
				})
			}
		})
		table.querySelectorAll("td").forEach(function(td, i){
			//console.log(i)
			td.setAttribute('data-label',labels[i%labels.length])
		})
		/*console.log(localStorage.getItem("lang"))*/

	})

}

//changeTitle()