const sellingPriceInput = document.getElementById("selling_price");
const quantityInput = document.getElementById("quantity");
const discountInput = document.getElementById("discount");
const priceHvatInput = document.getElementById("price_hvat");
const priceVvatInput = document.getElementById("price_vvat");
const totalHvatInput = document.getElementById("total_hvat");
const totalInput = document.getElementById("total");

// Fonction de calcul
function calculateAndFillFields() {
    // Obtenez les valeurs des champs d'entrée
    const sellingPrice = parseFloat(sellingPriceInput.value) || 0;
    const quantity = parseFloat(quantityInput.value) || 0;
    const discount = parseFloat(discountInput.value) || 0;

    // Calculs
    const totalHvat = sellingPrice * quantity - discount;
    const totalVvat = totalHvat * 1.21; // TVA à 21%

    // Préremplissez les champs avec les résultats
    priceHvatInput.value = sellingPrice.toFixed(2);
    priceVvatInput.value = (sellingPrice * 1.21).toFixed(2);
    totalHvatInput.value = totalHvat.toFixed(2);
    totalInput.value = totalVvat.toFixed(2);
}

// Ajoutez un gestionnaire d'événements "input" à chaque champ
sellingPriceInput.addEventListener("input", calculateAndFillFields);
quantityInput.addEventListener("input", calculateAndFillFields);
discountInput.addEventListener("input", calculateAndFillFields);

// Appelez la fonction initiale pour les valeurs par défaut
calculateAndFillFields();