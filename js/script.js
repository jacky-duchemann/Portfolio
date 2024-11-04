// Script pour l'effet de  parallax //
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


/* effet de transition loader */
/*document.addEventListener("DOMContentLoaded", function () {
  const loader = document.querySelector("loader");
  const internalLinks = document.querySelectorAll("a[href^='/'], a[href^='#']");
  console.log(loader);
  internalLinks.forEach(link => {
      link.addEventListener("click", function (event) {
          // Empêche la navigation automatique
          event.preventDefault();
          
          // Affiche le loader
          loader.classList.add("visible");

          // Attend un instant puis charge la nouvelle page
          setTimeout(() => {
              window.location.href = this.href;
          }, 1500); // Délai de 500ms pour voir l'effet de chargement
      });
  });
});*/

// Affichage de la modale au clic sur l'item "contact" dans le menu
document.addEventListener("DOMContentLoaded", function() {
  const contactMenu = document.getElementById('menu-item-52');
  const modal = document.querySelector('.modal');
  const close = document.getElementById('close-btn');
  const btnContact = document.querySelectorAll('.btn-contact');

  // ouverture modale au clique sur le menu Contact
  if (!contactMenu) {
      console.log("Lien contact introuvable");
  } else {
      contactMenu.addEventListener('click', function(event) {
          event.preventDefault();
          console.log("Clique sur le lien contact");
          modal.style.display = "block";
      });
  }
  // ouverture modal au clique sur un CTA 
  btnContact.forEach(function(button) {
    button.addEventListener('click', function(event) {
      event.preventDefault();
      modal.style.display = "block";
    });
  });

  window.onclick = function(event) {
      if (event.target === modal) {
          console.log("Clique en dehors de la modale");
          modal.style.display = "none";
      }
  }

  close.addEventListener('click', function() {
    modal.style.display = "none";
    console.log("La modale se ferme !");
  })
});

/* ouverture modale au clic sur les CTA */
document.addEventListener("DOMContentLoaded", function() {
  const btnContact = document.querySelectorAll('.btn-contact');
  
})