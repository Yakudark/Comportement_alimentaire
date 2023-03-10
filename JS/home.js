// // ---------Calcul IMC balance Vue Accueil--------------//

function rangeSlide1(value) {
    document.getElementById('rangeValue').innerHTML = value;
    calculateImc();
}

const range1 = document.getElementById('range1');
const range2 = document.getElementById('range2');

range1.addEventListener('input', () => {
    document.getElementById('rangeValue').innerHTML = range1.value;
    calculateImc();
});

range2.addEventListener('input', () => {
    document.getElementById('secondRangeValue').innerHTML = range2.value;
    calculateImc();
});


function calculateImc() {
    const weight = parseInt(document.getElementById('rangeValue').innerHTML);
    const height = parseInt(document.getElementById('secondRangeValue').innerHTML);
    const imc = (weight / ((height / 100) * (height / 100))).toFixed(2);
    console.log(imc);
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