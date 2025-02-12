
function toggleMenu(menuId) {
    let menu = document.getElementById(menuId);
    let header = menu.previousElementSibling; // Get the h3

    if (menu.style.display === "block") {
        menu.style.display = "none";
        header.classList.remove("active");
    } else {
        menu.style.display = "block";
        header.classList.add("active");
    }
}
