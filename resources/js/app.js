import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    const navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if (navbarBurgers.length > 0) {

        // Add a click event on each of them
        navbarBurgers.forEach(function (el) {
            el.addEventListener('click', function () {

                // Get the "main-nav" element
                const target = document.getElementById('main-nav');

                // Toggle the class on "main-nav"
                target.classList.toggle('hidden');

            });
        });
    }

    const accordionItems = document.querySelectorAll('#accordion-collapse-heading-1');

    accordionItems.forEach(item => {
        // Listen for the 'show' event when a tab is opened
        item.addEventListener('show.bs.collapse', function() {
            console.log("triggered");
            // Remove custom class from all accordion items
            accordionItems.forEach(item => {
                item.classList.remove('active');
            });

            // Add custom class to the active item
            item.classList.add('active');
        });

        // Optionally, listen for 'hide' event to remove the class if needed
        item.addEventListener('hide.bs.collapse', function() {
            item.classList.remove('active');
        });
    });

    const select = document.getElementById('date');
    const dateOut = document.querySelector('.camp_date');
    const links = document.querySelectorAll('.data-register-link');

    // Keep each link's pristine base URL so repeated changes don't stack
    const baseUrls = Array.from(links, a => a.getAttribute('data-base') || a.href);

    function applySelection() {
        const opt = select.options[select.selectedIndex];
        const value = opt.value;                       // "0", "1", "2" — your internal id
        const text  = opt.textContent.trim();          // "December 22, 2025" — user-facing date

        if (dateOut) dateOut.textContent = text;

        links.forEach((a, i) => {
            const url = new URL(baseUrls[i], window.location.origin);
            // Choose whichever param(s) you want your controller to read:
            //url.searchParams.set('date', text);          // human-readable date
            url.searchParams.set('date_id', value);      // internal id (optional)
            a.href = url.toString();
        });
    }

    if (!select) return;
    select.addEventListener('change', applySelection);
    applySelection(); // initialize on page load

});
