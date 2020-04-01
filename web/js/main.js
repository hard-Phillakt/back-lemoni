// Preloader

// var preloader = '<div class="wrapper"><div class="cssload-loader"></div></div>';

// Menu start
var navMenuIconlink = document.querySelectorAll('.nav-menu-icon__link');
var headerFullMenu = document.querySelector('.header-full-menu');

if (navMenuIconlink[1] || navMenuIconlink[0]) {
    navMenuIconlink[1].onclick = function (e) {
        e.preventDefault();

        if (headerFullMenu.classList[2] == 'close-menu') {
            headerFullMenu.classList.remove('close-menu');

            if (window.outerWidth < 768) {
                console.log('hidden');
                document.body.style.overflow = 'hidden';
            }

        }

    };

    navMenuIconlink[0].onclick = function (e) {
        e.preventDefault();

        if (headerFullMenu.classList[2] != 'close-menu') {
            headerFullMenu.classList.add('close-menu');

            if (window.outerWidth < 768) {
                document.body.style.overflow = '';
            }
        }

    }

}
// Menu end


// active menu, sidebar, footer start

var menuBlackA = document.querySelectorAll('.black-menu-link__a');
var menuNavA = document.querySelectorAll('.header-box-full__ul a');
var menuSideBarA = document.querySelectorAll('.news-sidebar .link__a');
var menuFooterA = document.querySelectorAll('.footer__ul .link__a_w');

function ActiveItem(data) {
    this.activeItem(data);
}

ActiveItem.prototype = {
    activeItem: function (el) {
        el.forEach(function (item, i) {

            // sidebar
            if (item.pathname == window.location.pathname && item.classList[1] !== 'link__a_w') {
                item.classList.add('active-link-a');
            }

            // footer
            if (item.classList[1] == 'link__a_w' && item.pathname == window.location.pathname) {
                item.classList.add('active-link-a_w');
            }

            // menu
            if (item.classList[1] == 'black-menu-link__a' && item.pathname == window.location.pathname) {
                item.classList.add('active-black-menu-link__a');
            }

        });
    }
};

// var menu = new ActiveItem(menuNavA);
var menuBlack = new ActiveItem(menuBlackA);
var sidebar = new ActiveItem(menuSideBarA);
var footer = new ActiveItem(menuFooterA);

// active menu, sidebar, footer end


// Filter Cake-category-type-product

function filterSidebarCatalog() {
    var filterSidebarCatalog__box_ul = document.querySelectorAll('.filter-sidebar-catalog__box_ul span');

    if (filterSidebarCatalog__box_ul) {
        filterSidebarCatalog__box_ul.forEach(function (item, i) {

            item.onclick = function (e) {

                if (item.children[0].classList[2] == 'check-true') {

                    item.children[0].classList.remove('check-true');

                    // After Pjax init script
                    document.querySelector('#reviews-id .button__rectangle') ? document.querySelector('#reviews-id .button__rectangle').disabled = true : false;

                } else {
                    item.children[0].classList.add('check-true');

                    // After Pjax init script
                    document.querySelector('#reviews-id .button__rectangle') ? document.querySelector('#reviews-id .button__rectangle').disabled = false : false;
                }

            }

        });
    }
}

filterSidebarCatalog();


// Filter Cake-category-type-product end

var filterSidebarCatalogBoxCompilation_ul = document.querySelectorAll('.filter-sidebar-catalog__box-compilation_ul span');

filterSidebarCatalogBoxCompilation_ul.forEach(function (item, i) {

    item.onclick = function () {

        filterSidebarCatalogBoxCompilation_ul.forEach(function (item, i) {

            item.classList.remove('link__active');
            item.children[0].checked = false;
        });

        item.classList.add('link__active');
        item.children[0].checked = true;

    }

});


// pjax call-back
$(document).on('pjax:success', function (e) {


    // колбек для заказа в один клик
    if (e.relatedTarget.classList[0] == 'master-class-form') {

        if ($('#one-click').modal('hide')) {

            setTimeout(function () {
                $('#modal-delivery').modal('show');
            }, 500);
        }

    }


    //  колбек для заказа из корзины
    if (document.querySelector('#delivery-form')) {

        if ($('#delivery-form')[0][0].value !== '' && $('#delivery-form')[0][1].value !== '') {

            $('.button__rectangle').prop('disabled', false);

            var count = $('#delivery-form')[0].length;

            // Callback Уведомление об успешном отправки сообщения
            // $('#modal-delivery').modal('show');

            for (var i = 0; i < count; i++) {
                // очищаем поля формы кроме кнопки
                if ($('#delivery-form')[0][i].nodeName != 'BUTTON' && $('#delivery-form')[0][i].nodeName != 'SELECT' && $('#delivery-form')[0][i].type != 'hidden' && $('#delivery-form')[0][i].name != 'check_issue_date') {

                    $('#delivery-form')[0][i].value = '';
                }
            }
        }
    }


    //  колбек для отзывов
    if (document.querySelector('#reviews-id')) {

        var count = $('#reviews-id')[0].length;

        for (var i = 0; i < count; i++) {
            // очищаем поля формы кроме кнопки
            if ($('#reviews-id')[0][i].type != 'submit' && $('#reviews-id')[0][i].type != 'checkbox') {
                $('#reviews-id')[0][i].value = '';
            }
        }

        $('#modal-review').modal('show');

        //Callback for review
        document.querySelector('#reviews-id .button__rectangle').disabled = true;

        // В колбеке инициализирую checkbox после pjax
        filterSidebarCatalog();
    }

});


$(document).on('pjax:send', function (e) {

    $('#delivery-form .button__rectangle').prop('disabled', true);
});


// Ajax sidebar-filter data
$(document).ready(function () {

    function FilterAjaxForm(fs, bg, tag) {

        var filterSidebar = document.querySelector(fs);

        var boxGoods = document.querySelector(bg);

        this.getData = function (url, tag) {

            $(filterSidebar).on('change', function (e) {

                // clearTagsLink
                clearTagsLink(tag);

                // add class for custom checkbox filter
                var element = e.target.previousElementSibling || e.target.nextElementSibling;
                element.classList[2] == 'check-true' ? element.classList.remove('check-true') : element.classList.add('check-true');

                $.ajax({
                    type: 'post',
                    url: url,
                    data: $(this).serialize(),
                    success: function (response) {
                        boxGoods.innerHTML = response;
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });

            });

        };

        var clearTagsLink = function (arg) {

            $(arg).each(function (i, item) {
                $(item).removeClass('tag-active');
            });
        }
    }

    var filterCake = new FilterAjaxForm('#sidebar-filter-cake', '#box-cake-goods');
    filterCake.getData('/cake-goods/ajax-goods', '.compilation-cake');

    var filterCandy = new FilterAjaxForm('#sidebar-filter-candy', '#box-candie-goods');
    filterCandy.getData('/candie-goods/ajax-goods', '.compilation-candie');


});


// Class tags
function TagsAjaxLink(url, data, box) {

    this.productsAjax = function (url, data, box) {
        $.ajax({
            type: 'post',
            url: url,
            data: data,
            success: function (res) {
                box.innerHTML = res;
            },
            error: function (err) {
                console.log(err);
            }
        });
    };
};
// Class tags end


// Compilation cake goods

var compilationCake = document.querySelectorAll('.compilation-cake');
var boxCakeGoods = document.querySelector('#box-cake-goods');

var tagCake = new TagsAjaxLink();

if (compilationCake) {
    compilationCake.forEach(function (item, i) {

        item.onclick = function (e) {
            e.preventDefault();

            if (!$(this).hasClass('tag-active')) {
                $(compilationCake).removeClass('tag-active');
                $(this).addClass('tag-active');
                tagCake.productsAjax('/cake-goods/ajax-goods', {compilation: this.dataset.count}, boxCakeGoods);
            }

            // X
            if ($(e.target).hasClass('tag-active__times')) {
                $(this).removeClass('tag-active');
                tagCake.productsAjax('/cake-goods/ajax-goods', $('#sidebar-filter-cake').serialize(), boxCakeGoods);
            }
        }
    });
}
// Compilation cake goods end


// Compilation candie goods
var compilationCadie = document.querySelectorAll('.compilation-candie');
var boxCandieGoods = document.querySelector('#box-candie-goods');

var tagCandy = new TagsAjaxLink();

if (boxCandieGoods) {

    compilationCadie.forEach(function (item, i) {

        item.onclick = function (e) {
            e.preventDefault();

            if (!$(this).hasClass('tag-active')) {
                $(compilationCadie).removeClass('tag-active');
                $(this).addClass('tag-active');
                tagCandy.productsAjax('/candie-goods/ajax-goods', {compilation: this.dataset.count}, boxCandieGoods);
            }

            // X
            if ($(e.target).hasClass('tag-active__times')) {
                $(this).removeClass('tag-active');
                tagCandy.productsAjax('/candie-goods/ajax-goods', $('#sidebar-filter-candy').serialize(), boxCandieGoods);
            }
        }
    });
}
// Compilation candie goods end

// Review
var revievsWrappBtn = document.querySelector('.revievs__wrapp-btn .button');
var shadowCheckbox = document.querySelector('.shadow-checkbox');
var filterSidebarCatalogBoxUl = document.querySelector('.filter-sidebar-catalog__box_ul');
var reviewformFile = document.querySelector('#reviewform-file');


if (revievsWrappBtn) {
    revievsWrappBtn.disabled = true;

    filterSidebarCatalogBoxUl.onclick = function () {
        if (shadowCheckbox.className == 'shadow-checkbox mr-15 check-true') {
            revievsWrappBtn.disabled = false

        } else {
            revievsWrappBtn.disabled = true;
        }
    };

}

var revievsWrappLink = document.querySelector('.revievs__wrapp-btn .link');

if (reviewformFile) {
    reviewformFile.onchange = function () {

        if (reviewformFile.files[0]) {
            revievsWrappLink.innerHTML = 'Загружено файлов 1';
        } else {
            revievsWrappLink.innerHTML = 'Добавить файлы';
        }
    }
}

// By card goods slider
$(document).ready(function () {

    var owl = document.querySelector('.owl-carousel');

    if (owl) {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })

    }

    // Scroll-to-top
    var scrollTo = document.querySelector('.scroll-to-top__wrapp');

    if (scrollTo) {
        scrollTo.onclick = function () {
            document.body.scrollIntoView({behavior: 'smooth'});
        };

        var hDocument = document.body.scrollHeight;

        var percent = Math.round(parseInt(hDocument) * 20 / 100);

        document.body.onscroll = function () {

            var pageYOffset = window.pageYOffset;

            if (parseInt(pageYOffset) >= (parseInt(percent))) {
                scrollTo.classList.remove('set-bottom');
            } else {
                scrollTo.classList.add('set-bottom');
            }

        };
    }


    // Filter checked true from main page
    function addClassCheckTrue(param) {
        $('.global-form__checkbox').each(function (index, item) {
            if ($(item).val() == param) {
                $(item).prop('checked', true);
                $(item).prev().addClass('check-true');
            }
        });
    }

    switch (window.location.search) {
        case '?param=muss':
            addClassCheckTrue('Мусcовый');
            break;
        case '?param=cake-muss':
            addClassCheckTrue('Мусовые пирожные');
            break;
        case '?param=diet':
            addClassCheckTrue('Диетические');
            break;
        case '?param=classic':
            if (window.location.pathname == '/cake') {
                addClassCheckTrue('Классический');
            } else {
                addClassCheckTrue('Классические пирожные');
            }
            break;
        case '?param=shadlaw':
            addClassCheckTrue('Шадлав');
            break;

        //   Candy bar all start

        case '?param=cookie':
            addClassCheckTrue('Пряники');
            break;
        case '?param=candy':
            addClassCheckTrue('Конфеты');
            break;
        case '?param=kulichi':
            addClassCheckTrue('Куличи');
            break;
        case '?param=lean-products':
            addClassCheckTrue('Постное');
            break;
        case '?param=muss-classic':
            addClassCheckTrue('Классические пирожные');
            addClassCheckTrue('Мусовые пирожные');
            break;
        case '?param=fruit-bouquets':
            addClassCheckTrue('Фруктовый букет');
            break;
        case '?param=marshmallows':
            addClassCheckTrue('Зефир');
            break;
        case '?param=trifles':
            addClassCheckTrue('Трайфлы');
            break;
    }


    // Search-button for page search

    var searchCount = 9;

    function balanceAjax() {
        !$('#balance-ajax').data('balance') ? $('#search-button').remove() : true;
    }

    $('#search-button').on('click', function () {

        $.ajax({
            type: 'get',
            url: '/search/ajax',
            data: {
                q: $(this).data('request'),
                count: searchCount = searchCount + 9
            },
            success: function (res) {

                $('#search-goods').html(res);

                $('#search-button-balance').html($('#balance-ajax').data('balance'));

                return balanceAjax();

            },
            error: function (err) {
                console.log(err);
            }
        });

    });

    // Search link in header

    $('.additional-modules__search').on('click', function () {

        if ($('.box-search').hasClass('view')) {
            $('.box-search').removeClass('view');
        } else {
            $('.box-search').addClass('view');
            $('body').css({
                overflow: 'hidden'
            });
        }
    });

    $('.box-search').on('click', function (e) {
        if (!$(e.target).hasClass('global-form__input')) {
            $('.box-search').removeClass('view');
            $('body').css({
                overflow: ''
            });
        }
    });


    // Gallery light-box

    var light = document.querySelectorAll('.light-box');
    if (light) {
        light.forEach(function (item, i) {
            item.dataset.lightbox = 'gallery';
        });
    }


    // Delivery Sberbank ###########################################################




    // Change delivery price

    if(window.location.pathname === '/delivery' || window.location.pathname === '/pickup')  {

        // Итого:
        var totalCart = 0;

        // Если сумма заказа меньше 5000 то доставка по умолчанию 300 (Белгород)
        var priceCity = parseInt($('.dvizh-cart-price span').html()) < 5000 ? 300 : 0;

        // Начальная цена (без доставки)
        var oldPrice = parseInt($('.dvizh-cart-price span').html());

        // Начальная цена + доставка
        var delivPrice = parseInt($('.dvizh-cart-price span').html()) + priceCity;

        // Отображаем цену достаки
        $('#total-delivery__courier').html(oldPrice);


        function changeDelivery() {

            // Если сумма заказа меньше 5000 то доставка по умолчанию 300 (Белгород)
            if(parseInt($('.dvizh-cart-price span').html()) < 5000){
                $('#total-delivery__courier').html(300);
            }else {
                $('#total-delivery__courier').html(0);
            }

            // Отображаем цену товара + достака
            $('.dvizh-cart-price span').html(delivPrice);


            // Условия для самовывоза
            if(window.location.pathname === '/pickup'){

                $('.dvizh-cart-price span').html(oldPrice);

                if($('.dvizh-cart-count').html() == 0){
                    $('.dvizh-cart-price span').html(0)
                }
            }

            // Если сумма доставки равна 0
            if(priceCity === 0 && $('#deliverycontact-city')){
                // Обнуляем первый options (Белгород)
                $('#deliverycontact-city')[0].options[0].label = 'Белгород — 0 руб';
                $('#deliverycontact-city')[0].options[0].value = 'Белгород — 0';

                $('#total-delivery__courier').html(0);
            }

            $('#deliverycontact-city').on('change', function () {

                // Режем строку в массив цена[1]
                var addresPrice = $(this).val().split('—');

                // Изменяем цену доствки в зависимости от города
                $('#total-delivery__courier').html(addresPrice[1]);

                // Цена доставки:
                // priceCity для изменения доставки в функцию СберБанка
                priceCity = parseInt(addresPrice[1]);

                // Итого + сумма корзины:
                totalCart = $('.dvizh-cart-price span').html(oldPrice + parseInt(addresPrice[1]));
            });
        }

        changeDelivery();


    }

    // Change delivery price end



    var openModal = false;

    function sbPay() {

        $.ajax({
            type: 'get',
            url: '/delivery/cart',
            data: {},
            success: function (res) {

                var sbData = JSON.parse(res);

                $('#SB__btn').on('click', function (e) {

                    var form = $('#delivery-form').serializeArray();

                    var inpVal = [];

                    $(form).each(function (i, item) {

                        $(item)[0].value ? inpVal.push($(item)[0].value) : false;

                        if((form.length - 1) <= inpVal.length){
                            openModal = true
                        }else {
                            openModal = false
                        }

                    });

                    var itemDesc = '';
                    var amount = 0;

                    for (var i = 0; i < sbData.length; i++) {
                        itemDesc += sbData[i].title + ' (' + sbData[i].count + ' шт.); ';
                        amount += parseInt(sbData[i].price) * parseInt(sbData[i].count);
                    }

                    if(openModal){

                        // Если заказ без доставки или не определен
                        if(window.location.pathname === '/pickup' || priceCity == undefined){
                            // Обнуляем доставку
                            priceCity = 0;
                        }

                        ipayCheckout({
                                amount: amount ? amount + priceCity : '',
                                currency: 'RUB',
                                order_number: '',
                                description: itemDesc + ' доставка: ' + priceCity + ' руб'
                            },
                            function (order) {

                                $.ajax({
                                    type: 'post',
                                    data: {
                                        order: JSON.stringify(order)
                                    },
                                    url: '/delivery/sb-order',
                                    success: function (res) {
                                        if(res === 'success') {
                                            // Callback success order
                                            $('#modal-delivery').modal('show');
                                        }
                                    },
                                    error: function (err) {
                                        console.log('err: ', err);
                                    }
                                });
                            },
                            function (order) {
                                showFailurefulPurchase(order)
                            }
                        )
                    }
                });
            },
            error: function (err) {
                console.log('err: ', err);
            }
        });
    }
    sbPay();

    // Callback pjax
    $(document).on('pjax:success', function (e) {

        sbPay();

        changeDelivery();

        if($('.dvizh-cart-count').html() == 0){
            $('.dvizh-cart-price span').html(oldPrice)
        }

    });

    // Delivery Sber bank end #########################################################





    // Pay One click SB ###############################################################

    var stateCard = {
        title: '',
        countPieces: 1,
        countKG: '',
        price: 0
    };

    $('#one-click-sb').on('click', function (e) {
        e.preventDefault();

        stateCard.title = $('.title.title__h2').html();
        stateCard.countPieces = $('.optGuests__input').eq(0).val();
        stateCard.countKG = $('.optGuests__input').eq(1).val();
        stateCard.price = $('.dvizh-cart-price-total span').html();

        var CakeCard = 'Товар: ' + stateCard.title + '; количество (гостей): ' + stateCard.countPieces + '; вес: ' + stateCard.countKG;
        var CandyCard = 'Товар: ' + stateCard.title + '; количество (штук): ' + stateCard.countPieces;

        ipayCheckout({
                amount: stateCard.price ? stateCard.price : '',
                currency: 'RUB',
                order_number: '',
                description: stateCard.countKG ? CakeCard : CandyCard
            },
            function (order) {

                $.ajax({
                    type: 'post',
                    data: {
                        order: JSON.stringify(order)
                    },
                    url: '/delivery/sb-order',
                    success: function (res) {
                        if(res === 'success') {
                            // Callback success order
                            $('#modal-delivery').modal('show');
                        }
                    },
                    error: function (err) {
                        console.log('err: ', err);
                    }
                });
            },
            function (order) {
                showFailurefulPurchase(order)
            }
        )

    });

    // Pay One click SB end ###############################################################






    // SB pay end

    // Gallery light-box end

    // Скрипт режет длину карточки товара. Но решил резать длину css в custom.css

    // $('.link__item .title').each(function (index, item) {
    //
    //     $('.link__item .title').eq(index).html().trim();
    //
    //     var string = $('.link__item .title').eq(index).html().trim().split('');
    //
    //     if(string.length > 20){
    //
    //         var newText = [];
    //
    //         for(var i = 0; i < string.length; i++){
    //
    //             if(i <= 18){
    //                 newText.push(string[i]);
    //             }
    //         }
    //
    //         $('.link__item .title').eq(index).html(newText.join('') + ' ...');
    //     }
    // });

});




// Delivery Pickup







