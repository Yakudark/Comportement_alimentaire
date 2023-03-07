
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
}

//--------------------------Input pour le choix de la famille d'aliment--------------------//

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

//Fonction de calcul des kcal en fonction de la quantité
function kcalPerQuantity(quantity, kcalPer100g) {
    let kcal = (quantity * kcalPer100g) / 100;
    return kcal;
}
// ---------Calcul IMC balance Vue Accueil--------------//
function rangeSlide1(value) {
    document.getElementById('rangeValue').innerHTML = value;
    calculateImc();
}

function rangeSlide2(value) {
    document.getElementById('secondRangeValue').innerHTML = value;
    calculateImc();
}

function calculateImc() {
    const weight = parseInt(document.getElementById('rangeValue').innerHTML);
    const height = parseInt(document.getElementById('secondRangeValue').innerHTML);
    const imc = (weight / ((height / 100) * (height / 100))).toFixed(2);
    document.getElementById('imcValue').innerHTML = imc;
    console.log(imcValue);

    let category;
    if (imc < 18.5) {
        category = "Maigre";
    } else if (imc < 25) {
        category = "Normal";
    } else if (imc < 30) {
        category = "Surpoids";
    } else {
        category = "Obésité";
    }
    document.getElementById('imcCategory').innerHTML = category;
}

// -------------Progress bar--------------------------
// Récupération du nombre de calories (ex: 2000)
let calories = 2600;

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

