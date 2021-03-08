const modal		= document.getElementById("modal") /*Je selectione la div qui affiche mon choix de monstre*/
				, button	=	document.getElementById("monstre") /*Je selectione les image de monstre de la div*/
				, close		=	document.getElementById("close"); /*je selectione la croix de la div des monstres*/

let talentAPI, monstreAPI, armeAPI; /*J'initialise des variable d'API qui contienne les valeur récupéré de la BDD*/

button.addEventListener("click", () => modal.style.display = "block"); /*J'affiche ma div lors du click sur l'image*/

close.addEventListener("click", () => modal.style.display = "none");  /*Je ferme la div quand je clique sur la croix*/

for (const element of document.querySelectorAll(".img_monstre")) {
	element.addEventListener('click', (event) => {   /*Lorsque je clique sur une image pour séléctioner, elle ferme la div*/
		modal.style.display = "none" 
	})
  }


const modal_talent		= document.getElementById("modal_talent")
				, button_talent	=	document.getElementById("talent")
				, close_talent		=	document.getElementById("close_talent")
				, button_selec_talent = document.getElementsByClassName("img_talent");

button_talent.addEventListener("click", () => modal_talent.style.display = "block");

close_talent.addEventListener("click", () => modal_talent.style.display = "none");

for (const element of document.querySelectorAll(".img_talent")) {
	element.addEventListener('click', (event) => {
		modal_talent.style.display = "none" 
	})
}


const modal_arme		= document.getElementById("modal_arme")
, button_arme	=	document.getElementById("arme")
, close_arme		=	document.getElementById("close_arme")
, button_selec_arme = document.getElementsByClassName("img_arme");

button_arme.addEventListener("click", () => modal_arme.style.display = "block");

close_arme.addEventListener("click", () => modal_arme.style.display = "none");




for (const element of document.querySelectorAll(".img_arme")) {
	element.addEventListener('click', (event) => {
	modal_arme.style.display = "none" 
})
}
							











 function talent(form1, name) {
	var elements = document.getElementsByClassName("img_talent") ; /*Je selectione la div des talent*/
	var num_talent = form1; /*Je récupère la value du talent*/
	console.log(form1); /*J'affiche dans mas console la value récupéré pour un éventuelle débug*/

	fetch("API/talent.php", {
		method: "post",   /*J'envoie la value du talent grace a l'API afin de faire un SELECT dans la BDD*/
		body: JSON.stringify({
			idtalent: form1	
		})
	})
	.then( ( res ) => res.json() )
	.then( ( res ) => talentAPI = res )
	.catch( ( err ) => console.error( err ) )

	
	alert("Vous avez choisie : " + name); /*J'afiche le choix du talent */
	}


function monstre(form2, name) {
	var elements = document.getElementsByClassName("img_monstre") ;
	var num_monstre = form2;
	console.log(form2);

	fetch("API/monstre.php", {
		method: "post",
		body: JSON.stringify({
			idmonstre: form2	
		})
	})
	.then( ( res ) => res.json() )
	.then( ( res ) => monstreAPI = res )
	.catch( ( err ) => console.error( err ) )

	alert("Vous avez choisie : " + name);
	}


function arme(form3, name) {
	var elements = document.getElementsByClassName("img_arme") ;
	var num_arme = form3;
	console.log(form3);

	fetch("API/weapon.php", {
		method: "post",
		body: JSON.stringify({
			idarme: form3	
		})
	})
	.then( ( res ) => res.json() )
	.then( ( res ) => armeAPI = res )
	.catch( ( err ) => console.error( err ) ) 


	
	alert("Vous avez choisie : " + name);
	}







document.getElementById("Combat").addEventListener("click", () => {

	if (!monstreAPI || !armeAPI || !talentAPI) { 
		return alert("Il vous manque un element à choisir"); /*Le message s'affiche si une des variable n'est pas récupéré car l'utilisateur ne les a pas tous sélectioner*/
	}

	result = monstreAPI['Vie'] / (armeAPI['Attaque'] * talentAPI['Boost']); /*J'effectue le calcul de mon combat*/
	alert("Il faut mettre au moins " + ~~result +  " coups pour pouvoir tuer le " + monstreAPI['NomM'] + " avec " + armeAPI["Nom"] + " et le talent:" + talentAPI["Nom"]);	/*J'affiche le résultat du calcul ainsie que les facteurs du calcul*/
	
}, true)
