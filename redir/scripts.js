var languageChange = false;
var seconds = 0;
//var langSelectorOne = document.getElementById('lang1');
/*var langSelectorTwo = document.getElementById('lang2');
var englishContent = document.getElementsByClassName('english');
var secondLangContent = document.getElementsByClassName('language2');
var linkLangOne = englishContent[englishContent.length-1].getElementsByTagName('a')[0].getAttribute("href");
var linkLangTwo = secondLangContent[secondLangContent.length-1].getElementsByTagName('a')[0].getAttribute("href");*/
var locationHref = 'http://www.testuj.trinac.pl';


/*langSelectorOne.addEventListener("click", function(){
	for (var i=0; i < englishContent.length; i++) {
	  englishContent[i].className = "english";
	  secondLangContent[i].className = "language2 hide";
	  langSelectorOne.className = "active_language";
	  langSelectorTwo.className = "";	  
	};
	
	languageChange = true;
	locationHref = linkLangOne;
});


langSelectorTwo.addEventListener("click", function(){
	for (var i=0; i < englishContent.length; i++) {
	  englishContent[i].className = "english hide";
	  secondLangContent[i].className = "language2";
	  langSelectorOne.className = "";
	  langSelectorTwo.className = "active_language";	  
	};
	
	languageChange = true;
	locationHref = linkLangTwo;
});
*/


function intervalFunc() {
	if (languageChange) {
		seconds = 0;
		languageChange = false;
	};
	
	seconds++;		
	
	if (seconds > 9) {		
		window.location = locationHref;
		clearInterval(timer);
	};
}

var timer = setInterval(intervalFunc,500);


