//  модальное окно для новостей
var topNews = document.querySelectorAll('.top-news');

var myModal = document.querySelector('#myModal .modal-body');


$(document).ready(function () {

    // Вставляем title из data-title
    function _inToHeaderTitle(arg) {
        if (arg) {
            var modalHeaderTitle = document.querySelector('.modal-header__title');
            modalHeaderTitle.innerHTML = arg;
        }
    }

    topNews.forEach(function (item, i) {

        item.onclick = function (e) {

            var _data = e.target;

            _inToHeaderTitle(_data.dataset.title);

            if (_data.dataset.imgCount || _data.dataset.linkCount) {

                // находим блок hidden по data атрибуту
                var dataLink = document.querySelectorAll('.news-box__content_hidden')[_data.dataset.imgCount || _data.dataset.linkCount];

                if (dataLink) {
                    // Выдергиваем данные из блока hidden и вставляем в модалку
                    myModal.innerHTML = dataLink.innerHTML;

                    $('#myModal').modal('show');
                }
            }
        }
    });
});



