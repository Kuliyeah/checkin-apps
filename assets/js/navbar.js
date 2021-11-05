$(document).ready(function() {
    $("#nav_tentang").addClass("nav_active");
    let mainNavLinks = document.querySelectorAll("nav div div ul li a");
    let mainSections = document.querySelectorAll("main section");

    let lastId;
    let cur = [];

    window.addEventListener("scroll", event => {
        let fromTop = window.scrollY;

        mainNavLinks.forEach(link => {
            let section = document.querySelector(link.hash);
            if (section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
                link.classList.add("nav_active");
            } else {
                $("#nav_tentang").addClass("nav_active");
                link.classList.remove("nav_active");
            }
        });
    });
});