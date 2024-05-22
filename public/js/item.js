document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const nameInput = document.getElementById('name');
    const makerInput = document.getElementById('maker');
    const priceInput = document.getElementById('price');
    const stockInput = document.getElementById('stock');

    form.addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        let isValid = true;

        if (nameInput.value.trim() === '') {
            setErrorFor(nameInput, '商品名を入力してください。');
            isValid = false;
        } else {
            setSuccessFor(nameInput);
        }

        if (makerInput.value.trim() === '') {
            setErrorFor(makerInput, 'メーカー名を入力してください。');
            isValid = false;
        } else {
            setSuccessFor(makerInput);
        }

        if (priceInput.value.trim() === '') {
            setErrorFor(priceInput, '価格を入力してください。');
            isValid = false;
        } else if (!isPositiveInteger(priceInput.value.trim())) {
            setErrorFor(priceInput, '価格は正の整数で入力してください。');
            isValid = false;
        } else {
            setSuccessFor(priceInput);
        }

        if (stockInput.value.trim() === '') {
            setErrorFor(stockInput, '在庫数を入力してください。');
            isValid = false;
        } else if (!isPositiveInteger(stockInput.value.trim())) {
            setErrorFor(stockInput, '在庫数は正の整数で入力してください。');
            isValid = false;
        } else {
            setSuccessFor(stockInput);
        }

        return isValid;
    }

    function setErrorFor(input, message) {
        const formGroup = input.parentElement;
        const small = formGroup.querySelector('small');
        formGroup.className = 'form-group error';
        small.innerText = message;
    }

    function setSuccessFor(input) {
        const formGroup = input.parentElement;
        formGroup.className = 'form-group success';
    }

    function isPositiveInteger(value) {
        return /^[1-9]\d*$/.test(value);
    }
});