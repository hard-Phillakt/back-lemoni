//  Глобальный класс карточки товара start
function GlobalOptionsCard() {

// 1. optGuests (гости)
// 2. optGlaze (глазурь)
// 3. optDecore (декор)
// 4. optString (надпись)
// 5. optString-format (формат надписи)
// 6. optPackaging (упаковка)


// global price для отображения текущей суммы с опциями ##############################################################

    var customClass = document.querySelector('.custom_class');

    var cardGoodsPrice = document.querySelector('.card-goods__price span');

    // Итог в карточке товара
    var dvizhCartPrice = document.querySelector('.dvizh-cart-price-total span');

    var glogalPrice = {};

    function _setGlogalPrice(nameOpt, priceOpt) {

        var cardGoodsPriceOldState = parseInt(cardGoodsPrice.dataset.oldstate);

        console.log(cardGoodsPrice);

        glogalPrice[nameOpt] = parseInt(priceOpt);

        glogalPrice['card-price'] = cardGoodsPriceOldState;

        console.log('glogalPrice obj: ', glogalPrice);

        var glogalPriceTotal = 0;

        if(glogalPrice){

            for(var key in glogalPrice){

                glogalPriceTotal += glogalPrice[key];
            }

            if(glogalPriceTotal){
                customClass.dataset.price = glogalPriceTotal;
                dvizhCartPrice.innerHTML = glogalPriceTotal;
                // console.log(glogalPriceTotal);
            }

        }
    }


// ###################################################################################################################








// боксы фильтров
    var dvizhOption = document.querySelectorAll('.dvizh-option');
    var dvizhOption_label_input = document.querySelectorAll('.dvizh-option label input');


//  делаем из radio -> checkbox ###################################################################################
    for (var i = 0; i < dvizhOption_label_input.length; i++) {
        dvizhOption_label_input[i].setAttribute('type', 'checkbox');
    }


//  задаём классы отступов всем обёрткам ##########################################################################
    for (var i = 0; i < dvizhOption.length; i++) {
        dvizhOption[i].classList.add('mt-45');
        // в пустой div mt-35
        dvizhOption[i].children[1].classList.add('mt-35');
        dvizhOption[i].children[1].classList.add('wrapper-options');
    }


// 1. optGuests (гости) ###########################################################################################
    this.optGuests = function (box_count, classNameBox, count) {

        var dvizhOption = document.querySelectorAll('.dvizh-option')[box_count];

        // задаём класс боксу
        dvizhOption.classList.add(classNameBox);

        // колекции lable из боксов (выборка по боксу)
        var dvizhOption_label = document.querySelectorAll('.dvizh-option')[box_count].children[1].children;

        // декремент по гостям
        var left_btn = dvizhOption_label[count[0]].children[0];
        left_btn.setAttribute('type', 'button');
        left_btn.setAttribute('value', '-');

        var dvizhOption_inputGuests = dvizhOption_label[count[1]].children[0];
        dvizhOption_inputGuests.setAttribute('type', 'text');
        dvizhOption_inputGuests.classList.add('optGuests__input');
        dvizhOption_inputGuests.value = 5;
        dvizhOption_inputGuests.disabled = true;

        // инкримент по гостям
        var right_btn = dvizhOption_label[count[2]].children[0];
        right_btn.setAttribute('type', 'button');
        right_btn.setAttribute('value', '+');


        // делаем выборку цены товара
        var cardGoods__price = document.querySelector('.card-goods__price span');
        // началная сумма
        var price = parseInt(cardGoods__price.innerText);

        if (cardGoods__price) {

            // делаем выборку кнопки "В корзину"
            var custom_class = document.querySelector('.custom_class');

            // мнимальное колличество гостей
            var guest = 5;
            var total = 0;

            // текущая сумма
            var summ = 0;

            //текущий вес в кг
            var kgTotal = 1;

            // function декримент
            function leftBtnDecriment() {
                if (dvizhOption_inputGuests.value > 5) {
                    summ -= price / 100 * 20;
                    total = price + summ;
                    guest--;

                    console.log(total);
                    // cardGoods__price.innerHTML = total;
                    cardGoods__price.dataset.oldstate = total;

                    _setGlogalPrice('card-price', total);

                    // добавляю в дата атрибут сумму после декримента
                    custom_class.dataset.price = total;
                    dvizhOption_inputGuests.value = guest;

                    // уменьшаю кг в value
                    kgTotal -= .20;

                    // toFixed фиксирую шлак
                    dvizhOption_inputKg.value = kgTotal.toFixed(2) + ' кг';

                    console.log(kgTotal);
                }
            }

            // декримент
            left_btn.onclick = function (e) {
                e.preventDefault();

                leftBtnDecriment();
            };



            // function инкремент
            function rightBtnIncrement() {
                summ += price / 100 * 20;
                total = price + summ;
                guest++;

                console.log(total);
                // cardGoods__price.innerHTML = total;
                cardGoods__price.dataset.oldstate = total;

                _setGlogalPrice('card-price', total);

                // добавляю в дата атрибут сумму после инкремент
                custom_class.dataset.price = total;
                dvizhOption_inputGuests.value = guest;


                // увеличиваю кг в value
                kgTotal += .20;

                // toFixed фиксирую шлак
                dvizhOption_inputKg.value = kgTotal.toFixed(2) + ' кг';

                console.log(kgTotal);
            }

            // инкремент
            right_btn.onclick = function (e) {
                e.preventDefault();

                rightBtnIncrement();
            };

        }


        // декремент по кг
        var left_btnKg = dvizhOption_label[count[3]].children[0];
        left_btnKg.setAttribute('type', 'button');
        left_btnKg.setAttribute('value', '-');


        var dvizhOption_inputKg = dvizhOption_label[count[4]].children[0];
        dvizhOption_inputKg.setAttribute('type', 'text');
        dvizhOption_inputKg.classList.add('optGuests__input');
        dvizhOption_inputKg.value = 1 + ' кг';
        dvizhOption_inputKg.disabled = true;


        // инкримент по кг
        var right_btnKg = dvizhOption_label[count[5]].children[0];
        right_btnKg.setAttribute('type', 'button');
        right_btnKg.setAttribute('value', '+');


        if (dvizhOption_inputKg) {
            // декремент по кг
            left_btnKg.onclick = function (e) {
                e.preventDefault();

                // function декримент
                leftBtnDecriment();
            };

            // инкримент по кг
            right_btnKg.onclick = function (e) {
                e.preventDefault();

                // function инкремент
                rightBtnIncrement();
            };
        }


    };
// optGuests(0, 'optGuests', [0, 1, 2]);


// 2. optGlaze (глазурь) ##########################################################################################
    this.optGlaze = function (box_count, classNameBox, count, optGlazePrice) {

        // console.log(optGlazePrice);






        var dvizhOption = document.querySelectorAll('.dvizh-option')[box_count];

        // задаём класс боксу
        dvizhOption.classList.add(classNameBox);

        // колекции lable из боксов (выборка по боксу)
        var dvizhOption_label = document.querySelectorAll('.dvizh-option')[box_count].children[1].children;

        for (var i = 0; i < dvizhOption_label.length; i++) {

            // добавляем цены в data-price input-a

            if(optGlazePrice){
                dvizhOption_label[i].children[0].setAttribute('data-price', optGlazePrice[i]);
            }


            dvizhOption_label[i].onclick = function (e) {
                // убираем дубль click с label
                // e.preventDefault();


                // добавляю price glaze и прайс из data-price
                if(optGlazePrice){

                    _setGlogalPrice('glaze', this.children[0].dataset.price);
                }


                for (var i = 0; i < dvizhOption_label.length; i++) {
                    dvizhOption_label[i].classList.remove('optGlaze__circle_true');
                }

                this.classList.add('optGlaze__circle_true');

            };

            dvizhOption_label[i].children[0].setAttribute('type', 'radio');

            dvizhOption_label[i].setAttribute('style', 'background: #' + count[i] + ';');

            dvizhOption_label[i].classList.add('optGlaze__circle');

        }

        // optDesabled удаляем node из опций
        if (dvizhOption.classList[2] == 'optDesabled') {
            setTimeout(function () {
                dvizhOption.remove();
            }, 10);
        }

    };
// optGlaze(1, 'optGlaze', ['C76445', 'F5ECDF', 'C75A5A', '8CA5E3', '8CE3A5', 'E38CCB']);


// 3. optDecore (декор) ###########################################################################################
    this.optDecore = function (box_count, classNameBox, arr, type, btnLR, miniTitle, optDecorePrice, nameDataPrice) {

        var dvizhOption = document.querySelectorAll('.dvizh-option')[box_count];
        // задаём класс боксу
        dvizhOption.classList.add(classNameBox);

        // колекции lable из боксов (выборка по боксу)
        var dvizhOption_label = document.querySelectorAll('.dvizh-option')[box_count].children[1].children;


        // dvizhOption_label.append();

        for (var i = 0; i < dvizhOption_label.length; i++) {

            // проверяем наналичие данных
            if(optDecorePrice && nameDataPrice){
                // добавляем цены в data-price input-a
                dvizhOption_label[i].children[0].setAttribute('data-price', optDecorePrice[i]);
            }


            // через параметр подставляем checkbox || radio
            dvizhOption_label[i].children[0].setAttribute('type', type);

            dvizhOption_label[i].classList.add('optDecore__input');

            dvizhOption_label[i].style.background = 'url("/img/card-opt/' + arr[i][0] + '.png")';

            dvizhOption_label[i].setAttribute('data-img', i);

            //  обрабатываем click
            dvizhOption_label[i].children[0].onclick = function () {

                // проверяем наналичие данных
                if(optDecorePrice && nameDataPrice){
                    // добавляю price glaze и прайс из data-price
                    _setGlogalPrice(nameDataPrice, this.dataset.price);
                }




                // console.log(this.parentNode.parentNode);
                var node = this.parentNode.parentNode;

                var count_node = node.children.length;


                // после события click очищаем классы и фоны
                for (var i = 0; i < count_node; i++) {
                    node.children[i].className = 'optDecore__input';
                    node.children[i].style.background = 'url("/img/card-opt/' + arr[i][0] + '.png")';
                    // console.dir(node.children[i].className);
                }


                if (this.labels[0].classList[0] == 'optDecore__input') {

                    this.labels[0].classList.remove('optDecore__input');
                    this.labels[0].classList.add('optDecore__input_check');

                    this.labels[0].style.background = 'url("/img/card-opt/' + arr[this.labels[0].dataset.img][1] + '.png")';

                    this.checked = true;

                    // console.log(this.checked);

                } else {

                    this.labels[0].classList.remove('optDecore__input_check');
                    this.labels[0].classList.add('optDecore__input');

                    this.labels[0].style.background = 'url("/img/card-opt/' + arr[this.labels[0].dataset.img][0] + '.png")';

                    this.checked = false;

                    // console.log(this.checked);

                }


            }

        }


        if (miniTitle) {

            for (var i = 0; i < dvizhOption_label.length; i++) {

                var spanMiniTitle = document.createElement('span');

                spanMiniTitle.classList.add('span_mini-title');
                spanMiniTitle.innerHTML = miniTitle[i];

                dvizhOption_label[i].append(spanMiniTitle);

            }
        }


        // устанавливаем кнопки для слайдера
        if (btnLR == true) {
            var span_btnLeft = document.createElement('span');
            span_btnLeft.classList.add('button-card__left');

            var span_btnRight = document.createElement('span');
            span_btnRight.classList.add('button-card__right');


            dvizhOption.children[1].append(span_btnRight);
            dvizhOption.children[1].prepend(span_btnLeft);
        }

        // optDesabled удаляем node из опций
        if (dvizhOption.classList[2] == 'optDesabled') {
            setTimeout(function () {
                dvizhOption.remove();
            }, 10);
        }

    }
// optDecore(2, 'optDecore', arrOptDecore, 'radio', true, miniTitle);


// 4. optString (надпись) #########################################################################################
    this.optString = function (box_count, classNameBox, count, nameDataPrice, optStringPrice) {


        var dvizhOption = document.querySelectorAll('.dvizh-option')[box_count];
        // задаём класс боксу
        dvizhOption.classList.add(classNameBox);

        // колекции label из боксов (выборка по боксу)
        var dvizhOption_input = document.querySelector('.' + classNameBox + ' input');

        // console.log(dvizhOption_input);

        dvizhOption_input.setAttribute('type', 'text');
        dvizhOption_input.setAttribute('placeholder', 'Введите текст');
        dvizhOption_input.id = 'optString__input';

        dvizhOption_input.setAttribute('value', '');

        dvizhOption_input.classList.add('optString__input');

        var text = dvizhOption_input.value;


        // проверяем наналичие данных
        if(optStringPrice && nameDataPrice){

            dvizhOption_input.onblur = function () {

                if(dvizhOption_input.value != ''){
                    // добавляю price glaze и прайс из data-price
                    _setGlogalPrice(nameDataPrice, optStringPrice);
                } else {
                    // добавляю price glaze и прайс из data-price
                    _setGlogalPrice(nameDataPrice, 0);
                }
            };

        }



        // dvizhOption_label

        // optDesabled удаляем node из опций
        if (dvizhOption.classList[2] == 'optDesabled') {
            setTimeout(function () {
                dvizhOption.remove();
            }, 10);
        }

    }
// optString(3, 'optString', [0]);


// 5. optPieces (добавление конфет в шт.) #########################################################################
    this.optPieces = function (box_count, classNameBox, count) {

        var dvizhOption = document.querySelectorAll('.dvizh-option')[box_count];

        // задаём класс боксу
        dvizhOption.classList.add(classNameBox);

        var optPiecesStrong = document.querySelector('.optPieces .dvizh-option-heading strong');

        // количество шт
        optPiecesStrong ? optPiecesStrong.innerHTML = 'Количество шт:' : false;

        // колекции lable из боксов (выборка по боксу)
        var dvizhOption_label = document.querySelectorAll('.dvizh-option')[box_count].children[1].children;

        // декремент по гостям
        var left_btn = dvizhOption_label[count[0]].children[0];
        left_btn.setAttribute('type', 'button');
        left_btn.setAttribute('value', '-');

        var dvizhOption_inputPieces = dvizhOption_label[count[1]].children[0];
        dvizhOption_inputPieces.setAttribute('type', 'text');
        dvizhOption_inputPieces.classList.add('optGuests__input');
        dvizhOption_inputPieces.value = 1;
        dvizhOption_inputPieces.disabled = true;

        // инкримент по гостям
        var right_btn = dvizhOption_label[count[2]].children[0];
        right_btn.setAttribute('type', 'button');
        right_btn.setAttribute('value', '+');

        // очищаем все инпуты с type 'checkbox'
        for (var i = 0; i < dvizhOption_label.length; i++) {
            if (dvizhOption_label[i].children[0].type == 'checkbox') {
                dvizhOption_label[i].children[0].remove();
            }
        }

        var cardGoods__price = document.querySelector('.card-goods__price span');

        // началная сумма
        var price = parseInt(cardGoods__price.innerText);

        var total = parseInt(cardGoods__price.innerText);

        var custom_class = document.querySelector('.custom_class');

        var c = 1;

        function increment() {

            total += price;

            c++;

            dvizhOption_inputPieces.value = c;

            custom_class.dataset.count = c;

            _setGlogalPrice('card-price', total);

            // cardGoods__price.innerHTML = total;
            dvizhCartPrice.innerHTML = total;

        }

        function decrement() {

            if (price < total) {

                total -= price;

                c--;

                custom_class.dataset.count = c;

                dvizhOption_inputPieces.value = c;
            }

            _setGlogalPrice('card-price', total);

            // cardGoods__price.innerHTML = total;
            dvizhCartPrice.innerHTML = total;
        }

        left_btn.onclick = function () {
            decrement();
        };

        right_btn.onclick = function () {
            increment();
        };

    }
    
}
//  Глобальный класс карточки товара  end


// картинки для опций Выберите декор:
var arrOptDecore2 = [
    ['decore__1_clear', 'decore__1_check'],
    ['decore__1_clear', 'decore__1_check'],
    ['decore__1_clear', 'decore__1_check'],
    ['decore__1_clear', 'decore__1_check']
];



//  Заголовки опций
var miniTitle = [
    ['Кремом'],
    ['На прянике'],
    ['Топер '],
    ['Открытка'],
    ['блюдо']
];

// картинки для опций Формат поздравительной надписи:
var arrOptDecore4 = [
    ['optString__0_clear', 'optString__0_check'],
    ['optString__1_clear', 'optString__1_check'],
    ['optString__2_clear', 'optString__2_check'],
    ['optString__3_clear', 'optString__3_check'],
];

// картинки для опций Выберите упаковку:
var arrOptDecore5 = [
    ['optString__5_clear', 'optString__5_check'],
    ['optString__5_clear', 'optString__5_check'],
    ['optString__5_clear', 'optString__5_check'],
    ['optString__5_clear', 'optString__5_check']
];

