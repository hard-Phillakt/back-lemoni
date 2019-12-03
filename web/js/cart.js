// Скрипты для корзины

var custom_class = document.querySelector('.custom_class');

var dvizh_option = document.querySelectorAll('.dvizh-option');

var dvizhOptionValues_before = document.querySelectorAll('.dvizh-option-values-before');

for (var i = 0; i < dvizh_option.length; i++) {
    dvizh_option[i].children[1].children[0].remove();
}

var dvizh_option_label = document.querySelectorAll('.dvizh-option label');

for (var i = 0; i < dvizh_option_label.length; i++) {
    // dvizh_option_label[i].children[0].attributes[0].value = 'checkbox';
}

window.onload = function () {

    custom_class.onclick = function (e) {
        e.preventDefault();

        // выборка по kg из инпута
        if (document.querySelector('.optGuests')) {

            var dvizhOption_label = document.querySelectorAll('.optGuests .wrapper-options label')[4].children[0].value;

            var dvizhOption_labelKg = dvizhOption_label.split(' ')[0];
        }

        // var cardGoods__price = document.querySelector('.card-goods__price span').innerText;
        var cardGoods__price = document.querySelector('.card-goods__price span');

        // началная сумма
        var priceElement = parseInt(cardGoods__price.innerText);

        var arr_options = {};

        var item_summ = null;

        var textField = document.querySelector('#optString__input');

        dvizh_option_label.forEach(function (item, i) {

                if (item.children[0] && item.children[0].checked) {

                    // у ключа опции title-50 разрезаю его на массив ["title", "50"]
                    var item_price = item.children[0].value.split('-')[1];

                    console.log(item_price);

                    item_summ += parseInt(item_price);

                    arr_options[item.children[0].value.split('-')[2]] = item.children[0].value;

                    // Данные из input-ов кладём в опции
                    custom_class.dataset.options = JSON.stringify(arr_options);

                    console.log('item_summ: ', item_summ);

                    console.log('priceElement: ', priceElement);

                    // У кнопки "заказать" есть data-price нужно положить сумму товара из всех опций.
                    // custom_class.dataset.price = priceElement + item_summ;

                    // console.log(cardGoods__price);

                    // custom_class.dataset.price = parseInt(cardGoods__price.dataset.oldstate) + item_summ;

                    // Костыль для корректного отображения
                    // setTimeout(function () {
                    //     if(custom_class.dataset.options = JSON.stringify(arr_options)){
                    //         window.location.reload(true);
                    //     }
                    // }, 100);

                } else {

                    JSON.stringify(arr_options['optGuests_kg'] = dvizhOption_labelKg);

                    custom_class.dataset.options = JSON.stringify(arr_options);

                    // custom_class.dataset.price = priceElement;

                    // Костыль для корректного отображения
                    // setTimeout(function () {
                    //     if(custom_class.dataset.options = JSON.stringify(arr_options)){
                    //         window.location.reload(true);
                    //     }
                    // }, 100);
                }

                if (textField && textField.value) {

                    JSON.stringify(arr_options['description'] = 'description-10.00-' + textField.value);

                    custom_class.dataset.options = JSON.stringify(arr_options);

                    // custom_class.dataset.price = parseInt(cardGoods__price.dataset.oldstate) + item_summ;

                    // custom_class.dataset.price = priceElement + item_summ + parseInt(arr_options.description.split('-')[1]);

                }

        });

    };

// Скрипты для корзины end


// Скрипты для удаления опций у товара в корзине
// var deleteOption = document.querySelectorAll('.delete-option');

// deleteOption.forEach(function (item, i) {
//
//
//     item.onclick = function () {
//
//         console.log(this);
//
//         $.ajax({
//             type: 'POST',
//             url: '/del-option/',
//             data: {
//                 id: this.dataset.id,
//                 option: this.dataset.option
//             },
//             success: function (response) {
//                 console.log(response);
//
//                 if (response == 'ok') {
//                     window.location.reload(true);
//                 }
//
//             }
//         })
//
//     }
//
// });

};