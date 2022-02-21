// navbar-toggler add class
document.querySelector(".navbar-toggler").addEventListener("click", function() {
    navbarButton = document.querySelector(".navbar-toggler");
    navbarMenu = document.querySelector(".offcanvas-menu");
    if (
        navbarButton.classList.contains("collapsed") ||
        navbarMenu.classList.contains("show")
    ) {
        navbarButton.classList.remove("collapsed");
    } else {
        navbarButton.classList.add("collapsed");
    }
});
//

// header accordion add class
document
    .querySelectorAll(".control button.btn-accordion")
    .forEach(function(button) {
        button.addEventListener("click", () => {
            if (button.classList.contains("collapsed")) {
                button.closest(".control").classList.remove("opened");
            } else {
                button.closest(".control").classList.add("opened");
            }
        });
    });
//

// scrollTo next section
document.querySelectorAll(".scrollTo").forEach(function(button) {
    button.addEventListener("click", () => {
        button.closest("section").nextElementSibling.scrollIntoView();
    });
});
//

// start video with placeholder

document.querySelectorAll(".placeholder").forEach(function(div) {
    div.addEventListener("click", () => {
        div.classList.add("d-none");
    });
});
//
