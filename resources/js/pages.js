document.addEventListener("DOMContentLoaded", () => {

    function switchPage(pageName) {
        document.querySelectorAll('.page-content').forEach(p => p.classList.add('hidden'));
        document.getElementById("page-" + pageName).classList.remove('hidden');

        document.querySelectorAll('.nav-item').forEach(item =>
            item.classList.toggle(
                "active",
                item.dataset.page === pageName
            )
        );

        localStorage.setItem("activePage", pageName);

        const searchBar = document.getElementById('searchBar');
        searchBar.classList.toggle('hidden', pageName !== "mahasiswa");
    }

    // Load page awal
    const savedPage = localStorage.getItem("activePage") || "dashboard";
    switchPage(savedPage);

    // nav klik tanpa onclick=""
    document.querySelectorAll(".nav-item").forEach(item => {
        item.addEventListener("click", () => {
            switchPage(item.dataset.page);
        });
    });
});
