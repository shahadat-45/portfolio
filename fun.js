document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section'); // Select all sections
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link'); // Select all nav links

    function changeActiveLink() {
        let scrollPosition = window.scrollY + 200; // Adjust scroll position to activate links a bit earlier
        
        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                const id = section.getAttribute('id');
                navLinks.forEach((link) => {
                    link.classList.remove('active'); // Remove active class from all links
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active'); // Add active class to the current link
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', changeActiveLink);
});