

deposit_form.addEventListener('change', function (evt) {
    var method = evt.target.dataset.show;

    if (method == 'usdt') {
        const usdtForm = document.getElementById('usdt-form');
        document.getElementById('submit-button').innerText = 'Проверить транзакцию';
        document.getElementById('submit').style.display = 'flex';


        usdtForm.style.display = 'flex';

    } else {
        const usdtForm = document.getElementById('usdt-form');
        document.getElementById('submit-button').innerText = 'Пополнить';
        document.getElementById('submit').style.display = 'flex';

        usdtForm.style.display = 'none';
    }
});

