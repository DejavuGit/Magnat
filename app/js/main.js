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

