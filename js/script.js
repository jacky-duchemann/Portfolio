// Script pour le parallax entre le titre et la vidéo //
window.addEventListener('scroll', function() {
    //selectionne l'element avec la classe 'banner__video'
  const parallax = document.querySelector('.typewriter-container__title');
  const parallax2 = document.querySelector('.about-me');
  console.log(parallax);
    // Stocke la position actuelle du défilement de la page
  let scrollPosition = window.scrollY;
    // Transformation pour deplacer l'element verticalement en fonction de la position du défilement
  parallax.style.transform = 'translateY(' + scrollPosition * 0.3 + 'px)'; /* Ajustez 0.6 selon la vitesse souhaitée, ici l'element se deplace a 60% de la vitesse du defilement de la page*/
  parallax2.style.transform = 'translateY(' + scrollPosition * 0.05 + 'px)';
});


// Affichage de la modale au clic sur l'item "contact" dans le menu
document.addEventListener("DOMContentLoaded", function() {
  const contactMenu = document.getElementById('menu-item-18');
  const modal = document.querySelector('.contact-modal');

  contactMenu.addEventListener('click', function(event) {
      event.preventDefault(); // empêche le comportement par defaut du lien
      console.log("Bien cliquer Jacky le beau gosse !");
      modal.style.display = "block";
  })

  window.onclick = function(event) {
      if (event.target === modal) {
          modal.style.display = "none";
      }
  }

});