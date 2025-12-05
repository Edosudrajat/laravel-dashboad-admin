import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {
    const ctx = document.getElementById('mainChart');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr'],
            datasets: [
                {
                    label: 'Employees',
                    data: [0, 10, 5, 30],
                    borderWidth: 3,
                    tension: 0.4,     // membuat curve
                    fill: false,
                },
                {
                    label: 'Mentors',
                    data: [0, 5, 20, 10],
                    borderWidth: 3,
                    tension: 0.4,
                    fill: false,
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    labels: {
                        color: getComputedStyle(document.body).color // baca warna teks UI
                    }
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: getComputedStyle(document.body).color
                    },
                    grid: {
                        color: 'rgba(100,100,100,0.1)'
                    }
                },
                y: {
                    ticks: {
                        color: getComputedStyle(document.body).color
                    },
                    grid: {
                        color: 'rgba(100,100,100,0.1)'
                    }
                }
            }
        }
    });
});
