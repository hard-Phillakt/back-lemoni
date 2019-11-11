



// Menu start

var navMenuIconlink = document.querySelectorAll('.nav-menu-icon__link');
var headerFullMenu = document.querySelector('.header-full-menu');

if(navMenuIconlink[1] || navMenuIconlink[0]){
    navMenuIconlink[1].onclick = function (e) {
        e.preventDefault();

        if (headerFullMenu.classList[2] == 'close-menu') {
            headerFullMenu.classList.remove('close-menu');
        }

    }

    navMenuIconlink[0].onclick = function (e) {
        e.preventDefault();

        if (headerFullMenu.classList[2] != 'close-menu') {
            headerFullMenu.classList.add('close-menu');
        }

    }

}

// Menu end




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

if(wpper){
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}


