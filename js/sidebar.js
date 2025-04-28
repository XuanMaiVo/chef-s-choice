document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll("#sidebar-menu li");

    menuItems.forEach(item => {
        item.addEventListener("click", function (e) {
            e.stopPropagation();

            menuItems.forEach(i => i.classList.remove("active"));
            this.classList.add("active");

            const link = this.querySelector("a");
            if (link && link.getAttribute("href") !== "#") {
                window.location.href = link.getAttribute("href");
            }
        });
    });
});
