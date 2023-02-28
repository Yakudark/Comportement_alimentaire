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
        // infoWeight.textContent = "";
        weightBtn.innerHTML = "Valider mon poids";
        // updateWeightLink.href = "";

    } else {
        infoWeight.innerHTML = infoWeightValue;
        weightBtn.innerHTML = "Modifier mon poids";
        console.log(input.value)
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
        console.log(input.value)
        let url = `./index.php?action=updateSize&size=${input.value}`;
        window.location.href = url.replace(/ /g, "");
    }
})
