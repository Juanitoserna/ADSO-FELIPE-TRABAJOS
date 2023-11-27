let nav = document.querySelector('nav');

window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
		console.log("entro aqui 1");
		nav.classList.add('navbar-dark', 'shadow');
	} else {
		console.log("entro aqui 2");
		nav.classList.remove('navbar-dark', 'shadow');
	}
});

// Define una función para activar el modo oscuro
function activateDarkMode() {
  // Obtiene la referencia al botón de alternar el modo oscuro por su ID 'modo'
  const toggleDarkModeButton = document.getElementById('modo');

  // Obtiene la referencia al elemento <body> del documento HTML
  const body = document.body;

  // Obtiene la referencia al elemento con ID 'darkModeIcon'
  const darkModeIcon = document.getElementById('darkModeIcon');

  // Verifica si el botón existe antes de intentar agregar el evento de escucha
  if (toggleDarkModeButton) {
    // Agrega un evento de escucha al botón de alternar modo oscuro
    toggleDarkModeButton.addEventListener('click', () => {
      // Alterna la presencia de la clase 'dark-mode' en el elemento <body>
      body.classList.toggle('dark-mode'); // Aplica o quita la clase 'dark-mode'

      // Cambia el icono según el modo oscuro
      if (body.classList.contains('dark-mode')) {
        // Si el modo oscuro está activado, cambia el icono a luna
        darkModeIcon.classList.remove('fa-sun');
        darkModeIcon.classList.add('fa-moon');
      } else {
        // Si el modo oscuro está desactivado, cambia el icono a sol
        darkModeIcon.classList.remove('fa-moon');
        darkModeIcon.classList.add('fa-sun');
      }
    });
  }
}

// Llama a la función para activar el modo oscuro cuando el documento esté listo cuando cargue la pagina por haci decirlo
document.addEventListener('DOMContentLoaded', activateDarkMode);






		