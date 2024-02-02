window.addEventListener("click", (e) => {
    document.querySelectorAll(".dropdown").forEach((dropdown) => {
        if (!dropdown.contains(e.target)) dropdown.open = false;
    });
});
