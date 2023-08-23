
export default function dropdown() {
  document.addEventListener('DOMContentLoaded', function() {
      const menuItemsWithChildren = document.querySelectorAll('.menu-item-has-children');

      menuItemsWithChildren.forEach(function(item) {
          const submenu = item.querySelector('.sub-menu');
          const link = item.querySelector('a');

          link.addEventListener('click', function(event) {
              event.preventDefault();
              submenu.classList.toggle('show');
          });
      });
  });
}
