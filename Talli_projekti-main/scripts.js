const projekti = "projekti"
document.addEventListener('DOMContentLoaded', function () {
  // Get the current page URL
  var currentPage = window.location.pathname.split('/').pop();
  
  // Define the mapping of pages to nav links
  var navLinks = {
      'index.php': 'nav-home',
      'koulutukset.php': 'nav-koulutukset',
      'yhteydenotto.php': 'nav-yhteydenotto',
      'rekisteroityminen.php': 'nav-rekisteroityminen',
      'login.php': 'nav-kirjaudu'
  };

  // Remove 'active' class from all nav links
  for (var key in navLinks) {
      if (navLinks.hasOwnProperty(key)) {
          var link = document.getElementById(navLinks[key]);
          if (link) {
              link.classList.remove('active');
          }
      }
  }

  // Add 'active' class to the current nav link
  if (navLinks[currentPage]) {
      var activeLink = document.getElementById(navLinks[currentPage]);
      if (activeLink) {
          activeLink.classList.add('active');
      }
  }
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'
  console.log('form validation start')
   const forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  forms.forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        }
      form.classList.add('was-validated')
    }, false)
  })
})()
