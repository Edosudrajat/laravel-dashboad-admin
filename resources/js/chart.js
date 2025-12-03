import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {
    const ctx = document.getElementById('mainChart');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Mahasiswa',
                    data: [20, 22, 24, 23, 25, 26],
                    backgroundColor: 'rgba(99,102,241,0.8)',
                    borderRadius: 8,
                },
                {
                    label: 'Dosen',
                    data: [8, 9, 9, 10, 10, 10],
                    backgroundColor: 'rgba(239,68,68,0.8)',
                    borderRadius: 8,
                }
            ]
        }
    });
});
