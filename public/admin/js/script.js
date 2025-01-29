// nav_menu_item
// nav_parent_link
// dropdown-menu
// const navparentlink = document.querySelectorAll('.nav_parent_link');
// const dropdownmenu = document.querySelectorAll('.dropdown-menu');
// addEventListenerAll(navparentlink, 'click', function() {
//     this.nextElementSibling.classList.toggle('active');
//     this.classList.toggle('active');
// });

const navparentlink = document.querySelectorAll('.nav_parent_link');
const dropdownmenu = document.querySelectorAll('.dropdown-menu');

// navparentlink.forEach(link => {
//     link.addEventListener('mouseover', function() {
//         this.nextElementSibling.classList.add('show');
//         this.classList.add('show');
//     });
//     link.addEventListener('mouseout', function() {
//         this.nextElementSibling.classList.remove('show');
//         this.classList.remove('show');
//     });
// });

navparentlink.forEach(link => {
    link.addEventListener('mouseover', function() {
        this.nextElementSibling.classList.add('show');
        this.classList.add('show');
    });
    link.addEventListener('mouseout', function() {
        if (!this.nextElementSibling.matches(':hover')) {
            this.nextElementSibling.classList.remove('show');
            this.classList.remove('show');
        }
    });
});

dropdownmenu.forEach(menu => {
    menu.addEventListener('mouseover', function() {
        this.classList.add('show');
        this.previousElementSibling.classList.add('show');
    });
    menu.addEventListener('mouseout', function() {
        if (!this.previousElementSibling.matches(':hover')) {
            this.classList.remove('show');
            this.previousElementSibling.classList.remove('show');
        }
    });
});