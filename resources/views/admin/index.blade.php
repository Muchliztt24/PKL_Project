@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="card shadow rounded-4">
            <div class="card-header bg-info text-white text-center fw-bold rounded-top-4">
                Dashboard Admin
            </div>
            <div class="card-body">
                <p class="text-center mb-4">Selamat datang di dashboard admin.</p>

                {{-- Chart --}}
                <canvas id="chartPendaftaran" height="100"></canvas>
                <h5 class="text-center mt-4">Tren Pendaftaran</h5>
                <canvas id="lineChart" height="80" class="mt-2"></canvas>
                <div class="d-flex justify-content-center mt-5">
                    <div style="max-width: 500px; width: 100%;">
                        <h4>Persentase Pendaftar per Ekstrakurikuler</h4>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('chartPendaftaran').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($chartLabels),
                datasets: [{
                    label: 'Jumlah Pendaftar per Tahun',
                    data: @json($chartJumlah),
                    backgroundColor: 'rgba(0, 191, 255, 0.5)', // biru langit transparan
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: @json($chartLabels),
                datasets: [{
                    data: @json($chartJumlah),
                    backgroundColor: [
                        '#4dc9f6',
                        '#f67019',
                        '#f53794',
                        '#537bc4',
                        '#acc236',
                        '#166a8f',
                    ],
                    borderColor: '#fff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: @json($chartLabels),
                datasets: [{
                    label: 'Jumlah Pendaftar',
                    data: @json($chartJumlah),
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.3, // garis agak melengkung
                    pointBackgroundColor: 'white',
                    pointBorderColor: 'rgba(75, 192, 192, 1)',
                    pointRadius: 5
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>
@endpush
