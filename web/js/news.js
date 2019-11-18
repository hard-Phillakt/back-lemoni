//  модальное окно для новостей
var newsBoxContent_link = document.querySelectorAll('.news-box__content_link');
var newsBoxContent_linkA = document.querySelectorAll('.news-box__content .link__a');

var news_box__img = document.querySelectorAll('.news-box__img');

// console.log(news_box__img);

var myModal = document.querySelector('#myModal .modal-body');


$(document).ready(function () {

    for (var i = 0; i < newsBoxContent_link.length; i++) {





        // news box
        if (newsBoxContent_link[i].tagName != 'SPAN') {

            // кликаем по картинке
            news_box__img[i].onclick = function (e) {

                if (this.dataset.imgCount) {

                    // находим ссылку по data атрибуту
                    var dataLink = document.querySelectorAll('.news-box__content_link')[this.dataset.imgCount];

                    if (dataLink.children[0].innerHTML) {

                        // Выдергиваем данные из блока hidden и вставляем в модалку
                        myModal.innerHTML = dataLink.children[0].innerHTML;

                        $('#myModal').modal('show');
                    }
                }

            };

            newsBoxContent_link[i].onclick = function (e) {
                e.preventDefault();

                if (this.children[0].innerHTML) {

                    // Выдергиваем данные из блока hidden и вставляем в модалку
                    myModal.innerHTML = this.children[0].innerHTML;

                    $('#myModal').modal('show');
                }

            }

        }


        // master-class box
        if (newsBoxContent_linkA.length != 0) {

            var dataTitle = document.querySelector('.modal-header__title');
            var masterclassformTitle_master = document.querySelector('#masterclassform-title_master');

            // кликаем по картинке
            news_box__img[i].onclick = function (e) {

                if (this.dataset.imgCount) {

                    // находим ссылку по data атрибуту
                    var dataLink = document.querySelectorAll('.news-box__content .link__a')[this.dataset.imgCount];

                    if (dataLink.children[0].innerHTML) {

                        dataTitle.innerHTML = dataLink.dataset.title;

                        // Выдергиваем данные из блока hidden и вставляем в модалку
                        myModal.innerHTML = dataLink.children[0].innerHTML;

                        // вставляем в скрытый input данные из data-title
                        masterclassformTitle_master.value = dataLink.dataset.title;

                        $('#myModal').modal('show');
                    }
                }

            };


            newsBoxContent_linkA[i].onclick = function (e) {
                e.preventDefault();

                if (this.children[0].innerHTML) {

                    dataTitle.innerHTML = this.dataset.title;

                    // Выдергиваем данные из блока hidden и вставляем в модалку
                    myModal.innerHTML = this.children[0].innerHTML;

                    // вставляем в скрытый input данные из data-title
                    masterclassformTitle_master.value = this.dataset.title;

                    $('#myModal').modal('show');
                }

            }


        }


    }

});


