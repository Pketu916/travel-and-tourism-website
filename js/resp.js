document.addEventListener("DOMContentLoaded", function() {
    const burger = document.querySelector('.burger');
    const navbar = document.querySelector('.navbar');
    const navList = document.querySelector('.nav-list');

    // Function to toggle responsive classes
    function toggleResponsiveClasses() {
        navList.classList.toggle('v-class-resp');
        navbar.classList.toggle('h-nav-resp');
    }

    if (burger) {
        burger.addEventListener('click', () => {
            toggleResponsiveClasses();
        });
    }

    // Get all navigation links and add event listeners to toggle classes
    const navLinks = document.querySelectorAll('.nav-list li a');
    navLinks.forEach(link => {
        link.addEventListener('click', toggleResponsiveClasses);
    });
});
