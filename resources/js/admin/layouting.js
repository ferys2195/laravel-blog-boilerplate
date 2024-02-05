document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk mengatur min-height pada elemen main
    const setMainMinHeight = () => {
        const brand = document.getElementById("brand").offsetHeight;
        const menuItemLayout = document.getElementById("menu-item-layout");

        menuItemLayout.style.minHeight = `calc(100vh - ${brand}px)`;

        const headerHeight = document.querySelector("header").offsetHeight;
        const footerHeight = document.querySelector("footer").offsetHeight;
        document.querySelector("main").style.minHeight = `calc(100vh - ${
            footerHeight + headerHeight
        }px)`;
    };
    // Panggil fungsi saat DOM dimuat, saat window diresize, dan sekali saat memulai
    setMainMinHeight();
    window.addEventListener("resize", function () {
        setMainMinHeight();
    });
});
