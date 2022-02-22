// turn off panel when rezise from mobile to deskop
const side_menu_id = document.getElementById("side_menu");
var side_menu = new bootstrap.Offcanvas(side_menu_id);
window.addEventListener("resize", function() {
    if (window.innerWidth >= 992 && side_menu_id.classList.contains("show")) {
        side_menu.hide();
    }
});
//

// notifications toast
var toastTrigger = document.getElementById("notificationsBtn");
var toastLiveExample = document.getElementById("notificationsToast");
if (toastTrigger) {
    toastTrigger.addEventListener("click", function() {
        var toast = new bootstrap.Toast(toastLiveExample);
        toast.show();
    });
}
//
