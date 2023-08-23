export default function essHamburger() {
  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const navWrapper = document.querySelector('.js-nav-wrapper');
  const menuLinks = navWrapper.querySelectorAll('a');
  const subMenus = navWrapper.querySelectorAll('.sub-menu');

  if (!hamburgerMenu) {
    return;
  }

  hamburgerMenu.addEventListener('click', function() {
    navWrapper.classList.toggle('show');
    hamburgerMenu.classList.toggle('open');
    hamburgerMenu.classList.toggle('close');
  });

  menuLinks.forEach(link => {
    link.addEventListener('click', function(event) {
      if (link.parentElement.classList.contains('menu-item-has-children')) {
        // Po kliknięciu w link z klasą menu-item-has-children, pokazuj lub ukrywaj sub-menu
        const subMenu = link.nextElementSibling;
        if (subMenu && subMenu.classList.contains('sub-menu')) {
          if (subMenu.style.opacity === '1') {
            subMenu.style.opacity = '0';
            subMenu.style.visibility = 'hidden';
            subMenu.style.maxHeight = '0';
          } else {
            subMenu.style.opacity = '1';
            subMenu.style.visibility = 'visible';
            subMenu.style.maxHeight = '200px';
          }
        }
        event.preventDefault(); // Zapobiegnij przejściu do linku
        return;
      }

      if (navWrapper.classList.contains('show')) {
        navWrapper.classList.remove('show');
        hamburgerMenu.classList.toggle('open');
        hamburgerMenu.classList.toggle('close');
      }
    });
  });

  const subMenuLinks = navWrapper.querySelectorAll('.sub-menu a');
  subMenuLinks.forEach(link => {
    link.addEventListener('click', function() {
      const parentSubMenu = link.closest('.sub-menu'); 
      if (parentSubMenu) {
        parentSubMenu.style.opacity = '0';
        parentSubMenu.style.visibility = 'hidden';
        parentSubMenu.style.maxHeight = '0';
      }
    });
  });
}
