function changeLangage(lang)
{

	if(lang != "")
	{
		localStorage.setItem("lang",lang);
	}
	lang = localStorage.getItem("lang",lang);
	if (lang == null)
	{
		lang = ""
	}

	frLang= document.querySelectorAll('*:lang(fr)')
	frLang.forEach(function(item){
		if (lang == "FR" || lang == "")
		{
  			item.style.removeProperty('display');;
  			item.style.visibility = "visible";
  		}
  		else  
  		{
  			item.style.display="none";
  			item.style.visibility = "hidden";
  		}
	});

	enLang= document.querySelectorAll('*:lang(en-GB)')
	enLang.forEach(function(item){
		/*console.log(lang);*/
		if (lang != "EN")
		{
  			item.style.display="none";
  			item.style.visibility = "hidden";
  		}
  		else
  		{
  			item.style.removeProperty('display');
  			item.style.visibility = "visible";

  		}
	});
	/*console.log("ok")*/
}