(function() {
"use strict";
var x = 0;
/* DOM element */
	let elContainer = document.getElementById('container'); 	

/* Smiður fyrir spurningu */
	function Question(question, answers, correctAnswer) {
		this.question = question; 					/* Spurning (strengur) */
		this.answers = answers; 					/* fylki með svarmöguleikum */
		this.correctAnswer = correctAnswer; 		/* Rétt svar (strengur) */
	}

/* Gögn (fylki af objectum) */
	let questions = [
				new Question('Hvaða ár var hljómsveitin stofnuð?', ['2008', '2009', '2010', '2011'], '2009'),
				new Question('Hvað heitir fyrsta plata hljómsveitarinnar?', ['Baldur', 'Með Vættum', 'Vögguvísur Yggdrasils'], 'Baldur'),
				new Question('Hvað eru margir gítarleikarar í hljómsveitinni?', ['3', '4'], '3'),
				new Question('Hvað heitir trommuleikarinn?', ['Baldur', 'Jón Geir', 'Björgvin', 'Gunnar'], 'Jón Geir'),
		];

/* Shuffle questions */
	function shuffleArray(array) {
	 let m = array.length, t, i;
	 // While there remain elements to shuffle…
	 while (m) {
			 // Pick a remaining element…
			 i = Math.floor(Math.random() * m--);
			 // And swap it with the current element.
			 t = array[m];
			 array[m] = array[i];
			 array[i] = t;
	 }
	 // return array;  þurfum ekki að skila honum
	}
	// notum shuffle á fylkið með gögnunum (objects) 
	shuffleArray(questions);  


/* Template */
	Question.prototype.getTemplate = function(){
	 	let tmplAnswers = "";
	 	for(let i = 0; i < this.answers.length; i++) {
	 		   tmplAnswers += "<span> <div class='flexed'> <h2>" + this.answers[i] + "</h2> </div> </span>";
	 	}
	 	return "<div class='spurning'> <h1>" + this.question + "</h1> </div> <div class='svor'>" + tmplAnswers + "</div>";
	 		
	};

/* Birtum fyrstu spurningu ásamt svarmöguleikum úr fylkinu */
	elContainer.innerHTML = questions[0].getTemplate();


elContainer.addEventListener('click', function(e) {
  if(e.target.nodeName.toLowerCase() === 'span' || e.target.nodeName.toLowerCase() === 'h2') {
 		// bætum við css class active
 		e.target.className = "active";
 		// svarmöguleiki birtur í console
 		window.console.log(e.target.textContent);
 		x++;
 		elContainer.innerHTML = questions[x].getTemplate();
 		
	}
});

elContainer.addEventListener('click', function(e){
 if (e.target.elContainer.innerHTML === Question.question(correctAnswer)) { //  ef textinn í targetinu er sá sami og correctAnswer í Question
	 	// þá bætum við css class correct (litar bakgrunninn grænann)
	 	e.target.className = "correct";

	 	window.console.log(e.target.textContent);// ef þetta myndi virka þá myndi ég setja þennann kóða í fallið fyrir ofan þetta.
 	}
});

})();