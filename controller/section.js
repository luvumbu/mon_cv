function button_connection() {

	let email = document.getElementById("email").value;
	let password1 = document.getElementById("password1").value;

	let verif_email = false;
	let verif_password1 = false;
	let all_verif = false;
	if (email == "") {
		document.getElementById("error_mail_c").className = "";
		verif_email = false;
	} else {
		document.getElementById("error_mail_c").className = "display_none";
		verif_email = true;
	}
	if (password1 == "") {
		document.getElementById("error_password_c").className = "";
		verif_password1 = false;
	} else {
		document.getElementById("error_password_c").className = "display_none";
		verif_password1 = true;
	}

	if (verif_email == true &&
		verif_password1 == true) {
		all_verif = true;

		var ok = new Information("class/php/connexion.php"); // création de la classe 
		ok.add("login", "root"); // ajout de l'information pour lenvoi 
		ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
		console.log(ok.info()); // demande l'information dans le tableau
		ok.push(); // envoie l'information au code pkp 

	} else {
		all_verif = false;

	}



	document.getElementById("submit_button").className = "spinner-border text-primary";
	document.getElementById("submit_button").innerHTML = "";

	setTimeout(function () {
		document.getElementById("submit_button").className = "btn btn-primary";
		document.getElementById("submit_button").innerHTML = "Submit";

 
			Ajax("section_info","pages/connexion.php") ; 
	}, 3000);

}

function button_incription() {
 
	let email = document.getElementById("email").value;
	let nom = document.getElementById("nom").value;
	let prenom = document.getElementById("prenom").value;
	let adresse_physique = document.getElementById("adresse_physique").value;
	let naissance = document.getElementById("naissance").value;
	let password1 = document.getElementById("Password1").value;
	let password2 = document.getElementById("Password2").value;

	let email_verif = false;
	let nom_verif = false;
	let prenom_verif = false;
	let adresse_physique_verif = false;
	let naissance_verif = false;
	let password1_verif = document.getElementById("Password1").value;
	let password2_verif = false;
	let all_verif = false;


	if (email == "") {
		document.getElementById("error_mail").className = "";
		email_verif = false;

	} else {
		document.getElementById("error_mail").className = "display_none";
		email_verif = true;
	}

	if (nom == "") {
		document.getElementById("error_nom").className = "";
		nom_verif = false;
	} else {
		document.getElementById("error_nom").className = "display_none";
		nom_verif = true;
	}

	if (prenom == "") {
		document.getElementById("error_prenom").className = "";
		prenom_verif = false;
	} else {
		document.getElementById("error_prenom").className = "display_none";
		prenom_verif = true;
	}
	if (adresse_physique == "") {
		document.getElementById("error_adresse_physique").className = "";
		adresse_physique_verif = false;
	} else {
		document.getElementById("error_adresse_physique").className = "display_none";
		adresse_physique_verif = true;

	}
	if (naissance == "") {
		document.getElementById("error_naissance").className = "";
		naissance_verif = false;

	} else {
		document.getElementById("error_naissance").className = "display_none";
		naissance_verif = true;

	}
	if (password1 == "") {
		document.getElementById("error_password1").className = "";
		password1_verif = false;
	} else {
		document.getElementById("error_password1").className = "display_none";
		password1_verif = true;

	}
	if (password2 == "") {
		document.getElementById("error_password2").className = "";
		password2_verif = false;
	} else {
		document.getElementById("error_password2").className = "display_none";
		password2_verif = true;
	} 


	if(password1_verif==true && password2_verif==true){
		if(password1==password2){
			password1_verif=true;
			password2_verif=true;
		}
		else {
			password1_verif=false;
			password2_verif=false;
			alert("Les mot de passe ne sont pas identiques");

		}
	}

	if (email_verif == true &&
		nom_verif == true &&
		prenom_verif == true &&
		adresse_physique_verif == true &&
		naissance_verif == true &&
		password1_verif == true &&
		password2_verif == true) {

		all_verif = true;
	} else {

		all_verif = false;
	}


	if (all_verif == true) {
		document.getElementById("submit_button").className = "spinner-border text-primary";
		document.getElementById("submit_button").innerHTML = "";


		var ok = new Information("class/php/inscription.php"); // création de la classe 
 // ajout dest information envoie php 

 let email = document.getElementById("email").value;


 ok.add("email", email); // ajout de l'information pour lenvoi 
 ok.add("nom", nom); // ajout de l'information pour lenvoi 
 ok.add("prenom", prenom); // ajout de l'information pour lenvoi 
 ok.add("adresse_physique", adresse_physique); // ajout de l'information pour lenvoi 
 ok.add("naissance", naissance); // ajout de l'information pour lenvoi 
 ok.add("password1", password1); // ajout de l'information pour lenvoi 
 
//  
//  
//  
//  
//  
 // fin de lajout 
		console.log(ok.info()); // demande l'information dans le tableau
		ok.push(); // envoie l'information au code pkp 

		setTimeout(function () {
			document.getElementById("submit_button").className = "btn btn-primary";
			document.getElementById("submit_button").innerHTML = "Submit";
      

			Ajax("section_info","pages/inscription.php") ; 
		}, 3000);
	}
	// if(email_verif==true &&  nom_verif == true && prenom_verif == true && adresse_physique_verif==true  ){
	// 		alert("Tout est ok")
	// 	}
	// 	else {
	// 		alert("pas ok "); 
	// 	}


}