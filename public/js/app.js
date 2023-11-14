window.addEventListener('DOMContentLoaded', (event) => {
    let referenceField = document.getElementById('reference');
    if(referenceField) {
        if (referenceField.value.trim() === '') {
            let randomString = generateRandomString(8);
            referenceField.value = randomString;
        }
    }
    let eanField = document.getElementById('ean_code');
    if(eanField) {
        if (eanField.value.trim() === '') {
            let randomNumber = generateRandomNumber(13);
            eanField.value = randomNumber;
        }
    }
});

function generateRandomString(length) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    let randomString = '';

    for (let i = 0; i < length; i++) {
        let randomIndex = Math.floor(Math.random() * characters.length);
        randomString += characters.charAt(randomIndex);
    }

    return randomString;
}

function generateRandomNumber(length) {
    const characters = '0123456789';
    let randomNumber = '';

    for (let i = 0; i < length; i++) {
        let randomIndex = Math.floor(Math.random() * characters.length);
        randomNumber += characters.charAt(randomIndex);
    }

    return randomNumber;
} 