let infoWeight = document.querySelector("#infoWeight");
let infoSize = document.querySelector("#infoSize");

let infoWeightValue = infoWeight.textContent;
let infoSizeValue = infoSize.textContent;

let weightBtn = document.querySelector(".btn_weight");
let heightBtn = document.querySelector(".btn_height");

let editWeight = false;
let editSize = false;

let updateWeightLink = document.querySelector("#updateWeightLink");
let updateSizeLink = document.querySelector("#updateSizeLink");

let input = document.createElement('input');

weightBtn.addEventListener("click", () => {
    editWeight = !editWeight;

    if (editWeight) {
        input.type = "text";
        input.className = "input-infos-weight";
        input.value = infoWeightValue.trim();
        input.name = "weight"
        infoWeight.parentNode.replaceChild(input, infoWeight);
        weightBtn.innerHTML = "Valider mon poids";
    } else {
        infoWeight.innerHTML = infoWeightValue;
        weightBtn.innerHTML = "Modifier mon poids";
        let url = `./index.php?action=updateWeight&weight=${input.value}`;
        window.location.href = url.replace(/ /g, "");
    }
})

heightBtn.addEventListener("click", () => {
    editSize = !editSize;

    if (editSize) {
        input.type = "text";
        input.className = "input-infos-size";
        input.value = infoSizeValue.trim();
        input.name = "size"
        infoSize.parentNode.replaceChild(input, infoSize);
        heightBtn.innerHTML = "Valider ma taille";
    } else {
        infoSize.innerHTML = infoSizeValue;
        heightBtn.innerHTML = "Modifier ma taille";
        let url = `./index.php?action=updateSize&size=${input.value}`;
        window.location.href = url.replace(/ /g, "");
    }
})

function getIMC(poids, taille) {
    return (poids / (taille * taille)).toFixed(1);
}
console.log(infoWeightValue);
console.log(infoSizeValue);

let IMCContent = document.querySelector("#imc");
if (infoWeightValue && infoSizeValue) {
    let IMCValue = getIMC(infoWeightValue, infoSizeValue / 100);
    IMCContent.innerHTML = IMCValue;
} else {
    IMCContent.innerHTML = "";
}

let imcImage = document.querySelector("#IMCImage");
console.log("imcImage");
let imc = IMCContent.textContent;
imc = parseFloat(imc);
function getImageImc() {
    console.log(imc);
    if (imc < 18.5) {
        imcImage.src = "./Asset/souspoids.png";
    } else if (imc >= 18.5 && imc < 24.9) {
        imcImage.src = "./Asset/Normal.png";
    } else if (imc >= 25 && imc < 29.9) {
        imcImage.src = "./Asset/surpoids.png";
    } else if (imc >= 30 && imc < 34.9) {
        imcImage.src = "./Asset/Obésité.png";
    } else if (imc >= 35) {
        imcImage.src = "./Asset/obésité_sévère.png";
    }
}
getImageImc();

//--------------------------Input pour le choix de la famille d'aliment--------------------//

// Récupère tous les éléments .hexagon-item
var hexagonItems = document.querySelectorAll('.hexagon-item');

// Boucle sur chaque élément .hexagon-item
hexagonItems.forEach(function(hexagonItem) {
  // Récupère l'input radio associé
  var radioInput = hexagonItem.querySelector('input[type="radio"]');
  // Ajoute un écouteur d'événements sur le clic de l'élément .hexagon-item
  hexagonItem.addEventListener('click', function() {
    // Désactive le style des autres éléments
    hexagonItems.forEach(function(item) {
      item.classList.remove('selected');
    });
    // Active le style sur l'élément cliqué
    hexagonItem.classList.add('selected');
    // Sélectionne l'input radio associé
    radioInput.checked = true;
  });
});
////////// Vérif Inscription et Log in ///////////
// Log in
let email = document.getElementById('#mail');
let password = document.getElementById('#pw');

// Sign in
let createName = document.getElementById('#nom');
let createFirstname = document.getElementById('#prenom');
let createMail = document.getElementById('#email');
let createPw = document.getElementById('#motdepasse');

// Log in Password

function checkPassword(password) {
        // Vérifie la longueur
    if (password.length < 8) {
      return "Le mot de passe doit contenir au moins 8 caractères.";
    }
        // Vérifie si il y a une lettre minuscule et une majuscule
    if (!password.match(/[a-z]/) || !password.match(/[A-Z]/)) {
      return "Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule.";
    }
        // Vérifie si il y a au moins un chiffre
    if (!password.match(/\d/)) {
      return "Le mot de passe doit contenir au moins un chiffre.";
    }
  
    return "Le mot de passe est valide.";
  }

// Sign in Password

function checkPw(createPw) {
        // Vérifie la longueur
    if (createPw.length < 8) {
      return "Le mot de passe doit contenir au moins 8 caractères.";
    }
        // Vérifie si il y a une lettre minuscule et une majuscule
    if (!createPw.match(/[a-z]/) || !createPw.match(/[A-Z]/)) {
      return "Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule.";
    }
        // Vérifie si il y a au moins un chiffre
    if (!createPw.match(/\d/)) {
      return "Le mot de passe doit contenir au moins un chiffre.";
    }
  
    return "Le mot de passe est valide.";
  }

// Exemple d'utilisation pour les tests :
// console.log(checkPassword("Abcd1234")); // Renvoie "Le mot de passe est valide."
// console.log(checkPassword("abcd1234")); // Renvoie "Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule."
// console.log(checkPassword("abcd")); // Renvoie "Le mot de passe doit contenir au moins 8 caractères."
// console.log(checkPassword("abcdefgh")); // Renvoie "Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule."
// console.log(checkPassword("12345678")); // Renvoie "Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule."

// Log in mail

function checkEmail(email) {
    // Vérifie s'il y a un seul symbole "@"
    if (email.indexOf("@") === -1 || email.indexOf("@") !== email.lastIndexOf("@")) {
      return "L'adresse email doit contenir un seul symbole '@'.";
    }
    return "L'adresse email est valide.";
}

// // Sign in mail

function checkMail(createMail) {
    // Vérifie s'il y a un seul symbole "@"
    if (createMail.indexOf("@") === -1 || createMail.indexOf("@") !== createMail.lastIndexOf("@")) {
      return "L'adresse email doit contenir un seul symbole '@'.";
    }
    return "L'adresse email est valide.";
}
  // Exemple d'utilisation pour les tests :
// console.log(checkEmail("johndoe@example.com")); // Renvoie "L'adresse email est valide."
// console.log(checkEmail("johndoeexample.com")); // Renvoie "L'adresse email doit contenir un seul symbole '@'."


function validateName(createName) {
    // Vérifie que le nom contient uniquement des lettres et des espaces
    const regex = /^[a-zA-Z\s]*$/;
    if (!regex.test(createName)) {
      return false;
    }
  
    // Vérifie que le nom a une longueur comprise entre 2 et 50 caractères
    if (createName.length < 2 || createName.length > 50) {
      return false;
    }
  
    return true;
  }
    // Exemple d'utilisation pour les tests :
// console.log(validateName("Yasmine")); // Renvoie "Le nom est valide."
// console.log(validateName("Yasmine2000")); // Renvoie "Le nom ne doit pas contenir de chiffre."
// console.log(validateName("Ok")); // Renvoie "Le nom doit avoir plus de 2 caractères."
  
  function validateFirstname(createFirstname) {
    // Vérifie que le nom contient uniquement des lettres et des espaces
    const regex = /^[a-zA-Z\s]*$/;
    if (!regex.test(createFirstname)) {
      return false;
    }
  
    // Vérifie que le nom a une longueur comprise entre 2 et 50 caractères
    if (createFirstname.length < 2 || createFirstname.length > 50) {
      return false;
    }
  
    return true;
  }

      // Exemple d'utilisation pour les tests :
// console.log(validateFirstname("Yasmine")); // Renvoie "Le nom est valide."
// console.log(validateFirstname("Yasmine2000")); // Renvoie "Le nom ne doit pas contenir de chiffre."
// console.log(validateFirstname("Ok")); // Renvoie "Le nom doit avoir plus de 2 caractères."

////////// RÉCAPITULATIF DE MENU ///////////


// let legume = document.getElementById('#legume');
// let legumeSec = document.getElementById('#legumeSec');
// let feculent = document.getElementById('#feculent');
// let viande = document.getElementById('#viande');
// let oeuf = document.getElementById('#oeuf');
// let poisson = document.getElementById('#poisson');
// let fruitDeMer = document.getElementById('#fruitDeMer');

// let list = "";

// // legume
// $('document').ready(function() {
//   $('body').on('click', legume , function() {
//     var elementId = $(this).attr('id');
//     $.ajax({
//       url: 'controller.php',
//       type: 'POST',
//       data: { id: elementId },
//       success: function(response) {
//         // Traitement de la réponse du serveur
//         list = response;
//       },
//       error: function() {
//         // Traitement des erreurs
//       }
//     });
//   });
// });

// // legume sec
// $('document').ready(function() {
//   $('body').on('click', legumeSec , function() {
//     var elementId = $(this).attr('id');
//     $.ajax({
//       url: 'controller.php',
//       type: 'POST',
//       data: { id: elementId },
//       success: function(response) {
//         // Traitement de la réponse du serveur
//         list = response;
//       },
//       error: function() {
//         // Traitement des erreurs
//       }
//     });
//   });
// });

// // feculent
// $('document').ready(function() {
//   $('body').on('click', feculent , function() {
//     var elementId = $(this).attr('id');
//     $.ajax({
//       url: 'controller.php',
//       type: 'POST',
//       data: { id: elementId },
//       success: function(response) {
//         // Traitement de la réponse du serveur
//         list = response;
//       },
//       error: function() {
//         // Traitement des erreurs
//       }
//     });
//   });
// });

// // viande
// $('document').ready(function() {
//   $('body').on('click', viande , function() {
//     var elementId = $(this).attr('id');
//     $.ajax({
//       url: 'controller.php',
//       type: 'POST',
//       data: { id: elementId },
//       success: function(response) {
//         // Traitement de la réponse du serveur
//         list = response;
//       },
//       error: function() {
//         // Traitement des erreurs
//       }
//     });
//   });
// });

// // oeuf
// $('document').ready(function() {
//   $('body').on('click', oeuf , function() {
//     var elementId = $(this).attr('id');
//     $.ajax({
//       url: 'controller.php',
//       type: 'POST',
//       data: { id: elementId },
//       success: function(response) {
//         // Traitement de la réponse du serveur
//         list = response;
//       },
//       error: function() {
//         // Traitement des erreurs
//       }
//     });
//   });
// });

// // poisson
// $('document').ready(function() {
//   $('body').on('click', poisson, function() {
//     var elementId = $(this).attr('id');
//     $.ajax({
//       url: 'controller.php',
//       type: 'POST',
//       data: { id: elementId },
//       success: function(response) {
//         // Traitement de la réponse du serveur
//         list = response;
//       },
//       error: function() {
//         // Traitement des erreurs
//       }
//     });
//   });
// });

// // fruit de mer
// $('document').ready(function() {
//   $('body').on('click', fruitDeMer , function() {
//     var elementId = $(this).attr('id');
//     $.ajax({
//       url: 'controller.php',
//       type: 'POST',
//       data: { id: elementId },
//       success: function(response) {
//         // Traitement de la réponse du serveur
//         list = response;
//       },
//       error: function() {
//         // Traitement des erreurs
//       }
//     });
//   });
// });


  

  document.querySelectorAll('.category').addEventListener('click', function(e) {
    e.preventDefault();
    location.href = 'Controllers/controller.php?action=category';
    document.querySelector('.list').innerHtml = location.href;
  });
