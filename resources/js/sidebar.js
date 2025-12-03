document.addEventListener("DOMContentLoaded", () => {
    let sidebarOpen = true;

    const sidebar = document.getElementById('sidebar');
    const icon = document.getElementById('collapseIcon');
    const logo = document.getElementById('logoContainer');

    if (!sidebar) return;

    function toggleSidebar() {
        sidebarOpen = !sidebarOpen;

        sidebar.classList.toggle('w-64');
        sidebar.classList.toggle('w-20');

        icon.classList.toggle('bx-chevron-left');
        icon.classList.toggle('bx-chevron-right');

        logo.classList.toggle('justify-center');

        document.querySelectorAll('.sidebar-text').forEach(t => t.classList.toggle('hidden'));
        document.querySelectorAll('.nav-item').forEach(i => {
            i.classList.toggle('justify-center');
            i.classList.toggle('px-0');
            i.classList.toggle('px-4');
        });
    }

    // tombol collapse
    document.querySelectorAll("[data-toggle='sidebar']").forEach(btn => {
        btn.addEventListener("click", toggleSidebar);
    });
});
