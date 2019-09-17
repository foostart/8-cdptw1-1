$(document).ready(function (){
                var swiper = new Swiper('.swiper-container', {
					autoplay: {
						delay: 4000,
					},
                   slidesPerView: 1,
                   spaceBetween: 30,
                   loop: true,      
                   navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                });
            });