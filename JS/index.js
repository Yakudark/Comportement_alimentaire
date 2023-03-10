
// if (typeof document === 'undefined') {
//     const jsdom = require('jsdom-global')();
// }
if (typeof window.TESTING === 'undefined') {
    window.TESTING = false;
}


function getIMC(poids, taille) {
    return parseFloat((poids / (taille * taille)).toFixed(1));
}

if (window.TESTING !== true) {
    let infoWeight = document.querySelector("#infoWeight");
    let infoSize = document.querySelector("#infoSize");

    let infoWeightValue;
    let infoSizeValue
    if (infoWeight && infoSize) {
        infoWeightValue = infoWeight.textContent;
        infoSizeValue = infoSize.textContent;
    }

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
        weightBtn.style.backgroundColor = "blue";
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
        heightBtn.style.backgroundColor = "blue";
    })
    console.log(infoWeightValue);
    console.log(infoSizeValue);
    infoSizeValue = infoSizeValue.replace(/ /g, "")
    infoWeightValue = infoWeightValue.replace(/ /g, "")

    let IMCContent = document.querySelector("#imc");
    console.log("premier" + infoWeightValue + "deu" + infoSizeValue)
    if (infoWeightValue !== "" && infoSizeValue !== "") {
        let IMCValue = getIMC(infoWeightValue, infoSizeValue / 100);
        if (isNaN(IMCValue)) {
            IMCContent.innerHTML = "";
        } else {
            IMCContent.innerHTML = IMCValue;
        }
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
        } else {
            imcImage.src = "./Asset/noweight.png";
        }
    }
    getImageImc();
}

//--------------------------Input pour le choix de la famille d'aliment--------------------//

if (window.TESTING !== true) {
    // Récupère tous les éléments .hexagon-item
    var hexagonItems = document.querySelectorAll('.hexagon-item');

    // Boucle sur chaque élément .hexagon-item
    hexagonItems.forEach(function (hexagonItem) {
        // Récupère l'input radio associé
        var radioInput = hexagonItem.querySelector('input[type="radio"]');
        // Ajoute un écouteur d'événements sur le clic de l'élément .hexagon-item
        hexagonItem.addEventListener('click', function () {
            // Désactive le style des autres éléments
            hexagonItems.forEach(function (item) {
                item.classList.remove('selected');
            });
            // Active le style sur l'élément cliqué
            hexagonItem.classList.add('selected');
            // Sélectionne l'input radio associé
            radioInput.checked = true;
        });
    });

    //Récupérer le nom des catégories
    let listAliment = document.querySelector("#listAliment");
    for (let i = 0; i < hexagonItems.length; i++) {
        hexagonItems[i].addEventListener('click', (e) => {
            e.preventDefault();
            let radioInput = hexagonItems[i].querySelector('input[type="radio"]');
            let category = radioInput.value.toLowerCase();
            category = category.toLowerCase();

            fetch('Controllers/controllers.php?action=getAllFoodFromCategory', {
                method: 'POST',
                body: JSON.stringify({ category: category }),
                headers: {
                    'Content-Type': 'application/json'
                },
                cache: 'no-cache'
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(text => {
                    console.log('Response from server:', text);
                    try {
                        const data = JSON.parse(text);
                        console.log('JSON data from server:', data);
                        listAliment.innerHTML = `<option>Choisissez votre aliment</option>`
                        for (let i = 0; i < data.length; i++) {
                            listAliment.innerHTML += `<option value=${data[i].id} name="food">${data[i].name_food}</option>`
                        }
                    } catch (err) {
                        console.error('Error parsing JSON data:', err);
                    }
                })
                .catch(error => {
                    console.error('Error in fetch request:', error);
                });
        })
    }




    ////////// Vérif Inscription et Log in ///////////
    // Log in
    let email = document.getElementById('#mail');
    let password = document.getElementById('#pw');

    // Sign in
    let createName = document.getElementById('#nom');
    let createFirstname = document.getElementById('#prenom');
    let createMail = document.getElementById('#email');
    let createPw = document.getElementById('#motdepasse');


    // Password

    // let mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

    // if (!PWD_REGEX.test(createPw.value)) {
    //     alert("Votre mot de passe n'est pas valide.")
    // };

    // if (!PWD_REGEX.test(pw.value)) {
    //     alert("Votre mot de passe n'est pas valide.")
    // }

    // Exemple d'utilisation pour les tests :
    // console.log(checkPassword("Abcd1234")); // Renvoie "Le mot de passe est valide."
    // console.log(checkPassword("abcd1234")); // Renvoie "Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule."
    // console.log(checkPassword("abcd")); // Renvoie "Le mot de passe doit contenir au moins 8 caractères."
    // console.log(checkPassword("abcdefgh")); // Renvoie "Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule."
    // console.log(checkPassword("12345678")); // Renvoie "Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule."

    // Mail

    // Email valide

    // mysite@ourearth.com
    // my.ownsite@ourearth.org
    // mysite@you.me.net

    // Email invalide

    // mysite.ourearth.com [@ is not present] 
    // mysite@.com.my [ tld (Top Level domain) can not start with dot "." ]
    // @you.me.net [ No character before @ ]
    // mysite123@gmail.b [ ".b" is not a valid tld ]
    // mysite@.org.org [ tld can not start with dot "." ]
    // .mysite@mysite.org [ an email should not be start with "." ]
    // mysite()*@gmail.com [ here the regular expression only allows character, digit, underscore, and dash ]
    // mysite..1234@yahoo.com [double dots are not allowed]

    // function validateName(createFirstname);
    // function ValidateEmail(createMail);

    // Exemple d'utilisation pour les tests :
    // console.log(validateName("Yasmine")); // Renvoie "Le nom est valide."
    // console.log(validateName("Yasmine2000")); // Renvoie "Le nom ne doit pas contenir de chiffre."
    // console.log(validateName("Ok")); // Renvoie "Le nom doit avoir plus de 2 caractères."




    // -------------Progress bar--------------------------

    // Récupération du nombre de calories (ex: 2000)
    let calories = parseFloat(document.getElementById("kcalNecessary").textContent);
    // let calories = document.getElementById("kcalNecessary").innerHTML;

    // Calcul de la largeur de la barre de progression en pourcentage
    let progressWidth = (calories - 1000) / (4000 - 1000) * 100;

    // Détermination de la classe à appliquer en fonction du nombre de calories
    let progressClass = '';
    if (calories < 1500) {
        progressClass = 'low';
    } else if (calories < 2500) {
        progressClass = 'medium';
    } else {
        progressClass = 'high';
    }

    // Modification de la classe de la progression et de sa largeur en fonction du nombre de calories
    let progressBar = document.querySelector('.progress');
    progressBar.classList.add(progressClass);
    progressBar.style.width = progressWidth + '%';

    // Récupération de l'élément input dans la vueUser pour le choix du grammage
    var mealQuantity = document.getElementById("mealQuantity");

    // Ajout de l'événement "keydown" sur l'élément input
    mealQuantity.addEventListener("keydown", function (event) {
        // Vérification si la touche saisie est une lettre
        if (/^[a-zA-Z]$/.test(event.key)) {
            // Annulation de l'événement si c'est une lettre
            event.preventDefault();
        }
    });
}
//Fonction de calcul des kcal en fonction de la quantité
function kcalPerQuantity(quantity, kcalPer100g) {
    let kcal = (quantity * kcalPer100g) / 100;
    return kcal;
}

// -------------------------------------------------------------------------------------------------------
function ValidateEmail(email) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        return (true)
    }
    // alert("Votre adresse mail n'est pas valide.")
    return (false)
};

function validateName(createName) {
    // Vérifie que le nom contient uniquement des lettres et des espaces
    const regex = /^[a-zA-Z][a-zA-Z-éÉèÈàÀùÙâÂêÊîÎôÔûÛïÏëËüÜçÇ]{2,24}$/;
    if (!regex.test(createName)) {
        // alert("Votre nom n'est pas valide.")
        return false;
    }
    return true;
}

// module.exports = { getIMC, kcalPerQuantity, ValidateEmail, validateName };

/// Chart des 10 derniers jours ///

// On récupère le total de calorie par jour dans vueRecap.php
// let caloParJour = parseFloat(document.getElementById("total_kcal_jour").textContent);
// console.log(caloParJour);


// tableau des 10 jours en fonction de la date d'ajd
const today = new Date();

let tab = [];

for (let i = 0; i <= 10; i++) {
    const date = new Date(today);
    date.setDate(today.getDate() - i);

    // fonction pour formater la date
    tab[i] = date.toLocaleDateString(); 
}

// On récupère la calorie optimal à consommer par jour dans vueUser.php
let moyenneCal = parseFloat(document.getElementById("kcalNecessary").textContent);


function chart(){
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: [tab[9] , tab[8] , tab[7], tab[6], tab[5], tab[4], tab[3],tab[2] , tab[1], tab[0]],
        datasets: [
        {
          label: 'Calories consommées',
          data: [4000, 1700, 2000, 1400, 1233, 1800, 1600, 1500, 4000, 3000],
          borderWidth: 2,
          borderColor: '#3FC068',
          backgroundColor : '#3FC068'
        },
        {
        label: 'Nombre de calories optimal à consommer',
        data: [moyenneCal, moyenneCal, moyenneCal, moyenneCal, moyenneCal, moyenneCal, moyenneCal, moyenneCal, moyenneCal, moyenneCal],
        borderWidth: 3,
        borderColor: '#dbb71d'
        }]
    },
    options: {

        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    },
    })
    }
    chart();
