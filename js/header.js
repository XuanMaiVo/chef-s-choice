function toggleDropdown() {
    document.querySelector('.user-dropdown').classList.toggle('open');
}

document.addEventListener("DOMContentLoaded", function () {
    const userDropdown = document.querySelector(".user-dropdown");

    window.addEventListener("click", function (event) {
        if (!userDropdown.contains(event.target)) {
            userDropdown.classList.remove("open");
        }
    });
});
