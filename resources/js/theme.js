document.addEventListener("DOMContentLoaded", () => {

    const body = document.body;
    const themeIcon = document.getElementById("themeIcon");

    function applyTheme(mode) {
        (mode === 'dark')
            ? body.classList.add("dark")
            : body.classList.remove("dark");

        themeIcon.classList.toggle("bx-sun", mode === "dark");
        themeIcon.classList.toggle("bx-moon", mode !== "dark");
    }

    // load awal
    applyTheme(localStorage.getItem("theme") || "light");

    // tombol click
    document.getElementById("themeToggle").addEventListener("click", () => {
        const isDark = body.classList.toggle("dark");
        localStorage.setItem("theme", isDark ? "dark" : "light");
        applyTheme(isDark ? "dark" : "light");
    });

});
