const dropdown = document.querySelectorAll('.dropdown');
dropdown.forEach(drop =>{
 drop.addEventListener('click',function(){
  this.classList.toggle('dropdown--active');
 })
})

let swiper = new Swiper(".mySwiper", {
 slidesPerView: 1,
 loop: true,
 speed: 1500,
 pagination: {
   el: ".swiper-pagination",
   type: "fraction",
 },
 navigation: {
   nextEl: ".swiper-button-next",
   prevEl: ".swiper-button-prev",
 },
});

let moreInfoSwiper = new Swiper(".more-info__swiper", {

  // slidesPerView: "auto",
        // centeredSlides: true,
        spaceBetween: 30,
  slidesPerView: 4,
  // loop: true,
  // speed: 1500,
  // slidesPerView: "auto",
  centeredSlides: true,
  // pagination: {
  //   el: ".swiper-pagination",
  //   type: "fraction",
  // },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
 });

