document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk mengatur min-height pada elemen main
    const setMainMinHeight = () => {
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
