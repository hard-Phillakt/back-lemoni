

//  модальное окно для новостей
var newsBoxContent_link = document.querySelectorAll('.news-box__content_link');
var newsBoxContent_linkA = document.querySelectorAll('.news-box__content .link__a');

var myModal = document.querySelector('#myModal .modal-body');


$(document).ready(function () {


    for (var i = 0; i < newsBoxContent_link.length; i++) {
        
        
        if(newsBoxContent_link[i].tagName != 'SPAN'){

            newsBoxContent_link[i].onclick = function () {

                if (this.children[0].innerHTML) {
    
                    myModal.innerHTML = this.children[0].innerHTML;
    
                    $('#myModal').modal('show');
                }
    
            }

        }



        if (newsBoxContent_linkA.length != 0) {

            console.log(newsBoxContent_linkA);

            newsBoxContent_linkA[i].onclick = function () {

                if (this.children[0].innerHTML) {

                    myModal.innerHTML = this.children[0].innerHTML;

                    $('#myModal').modal('show');
                }

            }
        }


    }

})


