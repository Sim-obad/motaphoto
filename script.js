
document.addEventListener('DOMContentLoaded', function () {
  const contactButton = document.getElementById('contactButton');
  const popup = document.querySelector('.pop-up');
  const closeButton = document.getElementById('closeButton');

  if (contactButton && popup && closeButton) {
      // Ouvrir la pop-up en cliquant sur le bouton "Contact" de la barre de navigation
      contactButton.addEventListener('click', function (event) {
          event.preventDefault();
          popup.style.display = 'block';
      });

      // Fermer la pop-up en cliquant à l'extérieur de la pop-up
      document.addEventListener('click', function (event) {
          if (!popup.contains(event.target) && event.target !== contactButton) {
              popup.style.display = 'none';
          }
      });

      // Fermer la pop-up en cliquant sur le bouton de fermeture
      closeButton.addEventListener('click', function () {
          popup.style.display = 'none';
      });
  }
});