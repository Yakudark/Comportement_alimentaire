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