$(document).ready(function (){
  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      

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