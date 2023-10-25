function explodeDate(param, date = "") {
	if (
		param != "null" ||
		param != null ||
		param != "" ||
		typeof param !== object
	) {
		if (date != "") {
			var date = param.split(" ")[0].split("-");
			var heure = param.split(" ")[1];
			return date[2] + "/" + date[1] + "/" + date[0] + " " + heure;
		} else {
			var date = param.split(" ")[0].split("-");
			return date[2] + "/" + date[1] + "/" + date[0];
		}
	}
	return param;
}

function separateurMilliers(nombre) {

	return nombre.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

$('input[type="number"]').on('blur', function () {

	if ($(this).val().replace(/\s/g, '') == '') {

		$(this).val(0)
	}
})

function arrondirValeurs(valeur) {
	if (Number.isInteger(valeur)) {
		// Si c'est un entier, retourner tel quel
		return valeur;
	} else {
		// Si c'est un nombre décimal, arrondir à 2 chiffres après la virgule
		return parseFloat(valeur.toFixed(2));
	}
}

function progressHandler(){

	_('madiv').style.display="block";
}

function completeHandler(){

	_('madiv').style.display="none";
}


function alert(callback) {
  Swal.fire({
      title: 'Saisissez votre mot de passe pour supprimer ',
      input: 'password',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Oui je supprime !',
      // showLoaderOnConfirm: true,
      reverseButtons: true,
      cancelButtonText: 'Annuler',
      text: "Cette action est irreversible !",
      customClass: {
          input: 'border-black border-1 text-center',
      }
  }).then((result) => {
      if (result.isConfirmed) {
          if ($.trim(document.getElementById('swal2-input').value) != "") {
              callback()
              return
          }
          notif("warning", "Information !",
              "Veuillez entrer votre mot de passe pour continuer !!")
      }
  })

}