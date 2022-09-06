const dropdown = document.querySelectorAll('.dropdown');
dropdown.forEach(drop =>{
 drop.addEventListener('click',function(){
  this.classList.toggle('dropdown--active');
 })
})