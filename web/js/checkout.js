

var dvizhDownArr = document.querySelectorAll('.dvizh-downArr');
var dvizhUpArr = document.querySelectorAll('.dvizh-upArr');
var buttonDelete = document.querySelectorAll('.delete');

var CartWrappPrice = document.querySelectorAll('[data-li]');

// считаем сумму опций из блока по data
// вычетаем из price сумму options
for(var i = 0; i < CartWrappPrice.length; i++){

    var summOptions = 0;

    var price = document.querySelectorAll('[data-price-id="' + CartWrappPrice[i].dataset.li + '"]');
    var options = document.querySelectorAll('[data-options-id="' + CartWrappPrice[i].dataset.li + '"]');

    for(var x = 0; x < options.length; x++){

        summOptions += parseInt(options[x].innerText);

        console.log(parseInt(options[x].innerText));
    }

    price[0].innerHTML = parseInt(price[0].innerText) - summOptions + '.00';
}


// Костыль для корректного отображения =(
for (var i = 0; i < dvizhDownArr.length; i++){

    dvizhDownArr[i].onclick = function (e) {
        // e.preventDefault();

        setTimeout(function () {
            window.location.reload(true);
        },10);
    };

    dvizhUpArr[i].onclick = function (e) {
        // e.preventDefault();

        setTimeout(function () {
            window.location.reload(true);
        },10);
    };
    
    buttonDelete[i].onclick = function (e) {
        // e.preventDefault();

        setTimeout(function () {
            window.location.reload(true);
        },10);
    };

}


