// ===== Sidebar Toggle (Hamburger Menu) =====
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('#hamburger');
    const sidebar = document.querySelector('#sidebar');
    const mainContent = document.querySelector('main');
    const menuItems = document.querySelectorAll('.menu-item');

    if (hamburger && sidebar) {
      hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('active');
        sidebar.classList.toggle('active');
        if (mainContent) {
          mainContent.classList.toggle('shifted');
        }
      });
    }

    // ===== Submenu Toggle =====
    menuItems.forEach(item => {
      item.addEventListener('click', function () {
        this.classList.toggle('active');
      });
    });
  });

  // ===== Dropdown User Toggle =====
  function toggleDropdown() {
    document.getElementById("dropdown-menu").classList.toggle("show");
  }

  // ===== Close Dropdown on Outside Click =====
  window.onclick = function(event) {
    if (!event.target.closest('.user-dropdown')) {
      const dropdown = document.getElementById("dropdown-menu");
      if (dropdown && dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
      }
    }
  }