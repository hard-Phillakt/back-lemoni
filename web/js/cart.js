// Скрипты для корзины


// var arr_options = {};

var custom_class = document.querySelector('.custom_class');

// var custom_options = custom_class.dataset.options;


var dvizh_option = document.querySelectorAll('.dvizh-option');
var dvizhOptionValues_before = document.querySelectorAll('.dvizh-option-values-before');


// console.log(dvizhOptionValues_before);


// dvizhOptionValues_before.forEach(function (item, i) {
//     item.onclick = function (e) {
//         // e.preventDefault();
//
//         setTimeout(function () {
//             // console.log(1);
//             custom_class.dataset.options = '{}';
//         },100)
//     }
// });


for (var i = 0; i < dvizh_option.length; i++) {
    dvizh_option[i].children[1].children[0].remove();
}

// var label_btn = dvizh_option[0].children[1].children;
//
//
var dvizh_option_label = document.querySelectorAll('.dvizh-option label');
// var dvizh_option_label2 = document.querySelectorAll('.dvizh-option label input');
//
// // console.log(dvizh_option_label2[11].value);
//
// console.log(dvizh_option_label);
//
// // Цена товара в карточке
// var priceElement = document.querySelector('.price-element').innerText;
// var priceElement = 1000;


//
// console.log(priceElement);

for (var i = 0; i < dvizh_option_label.length; i++) {
    // dvizh_option_label[i].children[0].attributes[0].value = 'checkbox';
}


custom_class.onclick = function (e) {
    e.preventDefault();

    var cardGoods__price = document.querySelector('.card-goods__price span').innerText;
    // началная сумма
    var priceElement = parseInt(cardGoods__price);

    console.log(priceElement);

    var arr_options = {};
    var item_summ = null;

    dvizh_option_label.forEach(function (item, i) {

        console.log(item.children[0].checked);

        if (item.children[0].checked) {


            console.log(item.children[0].value);


            // у ключа опции title-50 разрезаю его на массив ["title", "50"]
            item_price = item.children[0].value.split('-')[1];

            item_summ += parseInt(item_price);


            // arr_options[item.children[0].value] = item.innerText;

            // console.log('item.children[0].value :', item.children[0].value);
            // console.log('item.children[0].value.split', item.children[0].value.split('-')[1]);

            // arr_options[item.children[0].value] = item.children[0].value.split('-')[2];
            arr_options[i] = item.children[0].value;
            // arr_options[item.children[0].value];

            // Добавляем объект опций в data-options

            console.log(JSON.stringify(arr_options));

            custom_class.dataset.options = JSON.stringify(arr_options);

            // У кнопки "заказать" есть data-price нужно запихнуть сумму товара из всех опций.
            custom_class.dataset.price = item_summ + priceElement;

            // custom_class.dataset.comment = 'img-test.png';

            // Костыль для корректного отображения
            // setTimeout(function () {
            //     if(custom_class.dataset.options = JSON.stringify(arr_options)){
            //         window.location.reload(true);
            //     }
            // }, 100);

        } else {

            // setTimeout(function () {
            //     if(custom_class.dataset.price = parseInt(priceElement)){
            //         window.location.reload(true);
            //     }
            // }, 100);
        }


    });


};
// Скрипты для корзины end


// Скрипты для удаления опций у товара в корзине
// var deleteOption = document.querySelectorAll('.delete-option');
//
//
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

