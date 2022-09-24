var links = document.getElementById('linking');

function openNav() {
    document.getElementById("myNav").style.height = "100%";
  }

links.addEventListener('click',  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  })  


  
  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }






  // ACCORDION 
  const accordion = document.getElementsByClassName('container');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('active')
  })
}
