// Menu start

var navMenuIconlink = document.querySelectorAll('.nav-menu-icon__link');
var headerFullMenu = document.querySelector('.header-full-menu');

if (navMenuIconlink[1] || navMenuIconlink[0]) {
    navMenuIconlink[1].onclick = function (e) {
        e.preventDefault();

        if (headerFullMenu.classList[2] == 'close-menu') {
            headerFullMenu.classList.remove('close-menu');
        }

    };

    navMenuIconlink[0].onclick = function (e) {
        e.preventDefault();

        if (headerFullMenu.classList[2] != 'close-menu') {
            headerFullMenu.classList.add('close-menu');
        }

    }

}

// Menu end


// active menu, sidebar, footer start

var menuNavA = document.querySelectorAll('.header-box-full__ul .link__a');
var menuSideBarA = document.querySelectorAll('.news-sidebar .link__a');
var menuFooterA = document.querySelectorAll('.footer__ul .link__a_w');

function ActiveItem(data) {
    var element = data;
    this.activeItem(element);
}

ActiveItem.prototype = {
    activeItem: function (el) {
        el.forEach(function (item, i) {
            if (item.pathname == window.location.pathname && item.classList[1] !== 'link__a_w') {
                item.classList.add('active-link-a');
            }

            if(item.classList[1] == 'link__a_w' && item.pathname == window.location.pathname){
                item.classList.add('active-link-a_w');
            }
        });
    }
};

var menu = new ActiveItem(menuNavA);
var sidebar = new ActiveItem(menuSideBarA);
var footer = new ActiveItem(menuFooterA);

// active menu, sidebar, footer end





// Filter Cake-category-type-product

var filterSidebarCatalog__box_ul = document.querySelectorAll('.filter-sidebar-catalog__box_ul span');

filterSidebarCatalog__box_ul.forEach(function (item, i) {

    item.onclick = function () {

        if (item.children[0].classList[2] == 'chek-true') {

            item.children[0].classList.remove('chek-true');
            item.children.checked = false;

        } else {
            item.children[0].classList.add('chek-true');
            item.children[1].checked = true;
        }

    }

});

// Filter Cake-category-type-product end


// 

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

})


// Slider  Revievs

var wpper = document.querySelector('.swiper-container');

if (wpper) {
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}


// pjax call-back
$(document).on('pjax:success', function () {

    var count = $('#delivery-form')[0].length;

    for (var i = 0; i < count; i++) {

        // очищаем поля формы кроме кнопки
        if ($('#delivery-form')[0][i].nodeName != 'BUTTON') {
            $('#delivery-form')[0][i].value = '';
        }

    }

});


// Ajax delivery data
$(document).ready(function () {

    // console.log($('#delivery-form')[0]);

    // $('#delivery-form').on('submit', function (e) {
    //     e.preventDefault();

    //     $.ajax({
    //         type: 'post',
    //         url: '/delivery',
    //         data: $(this).serialize(),
    //         success: function (res) {
    //             console.log(res);
    //         },
    //         error: function (err) {
    //             console.log(err);
    //         }
    //     });
    //
    // })

});

