const menu = document.getElementById("logoutTampil");
const trigger = document.getElementById("buttonLogout");

if (menu && trigger) {
    const closeMenu = () => {
        menu.classList.add("hidden");
    };

    const toggleMenu = () => {
        menu.classList.toggle("hidden");
    };

    trigger.addEventListener("click", (event) => {
        toggleMenu();
    });

    document.addEventListener("click", (event) => {
        if (!menu.contains(event.target) && !trigger.contains(event.target)) {
            closeMenu();
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeMenu();
        }
    });
}
