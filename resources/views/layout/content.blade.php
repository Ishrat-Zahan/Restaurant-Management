@extends('layout.erp.app')
@section('page')

<style>
    .stat-card {
        background: #fff;
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }
    
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    
    .stat-card .icon-box {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 15px;
    }
    
    .stat-card .icon-box.blue { background: #e0f2fe; color: #0284c7; }
    .stat-card .icon-box.green { background: #dcfce7; color: #16a34a; }
    .stat-card .icon-box.orange { background: #ffedd5; color: #ea580c; }
    .stat-card .icon-box.purple { background: #f3e8ff; color: #9333ea; }
    
    .stat-card .stat-value {
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 5px;
    }
    
    .stat-card .stat-label {
        font-size: 14px;
        color: #6b7280;
        font-weight: 500;
    }
    
    .chart-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        border: 1px solid #f0f0f0;
        overflow: hidden;
        margin-bottom: 25px;
    }
    
    .chart-card .card-header {
        padding: 20px 25px;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .chart-card .card-header h3 {
        font-size: 18px;
        font-weight: 600;
        color: #1f2937;
        margin: 0;
    }
    
    .chart-card .card-body {
        padding: 25px;
    }
    
    .chart-container {
        position: relative;
        height: 300px;
    }
    
    .page-header {
        margin-bottom: 30px;
    }
    
    .page-header h1 {
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }
    
    .page-header p {
        color: #6b7280;
        margin: 5px 0 0;
    }
    
    .quick-stats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 30px;
    }
    
    @media (max-width: 1200px) {
        .quick-stats {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 576px) {
        .quick-stats {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="main_content_iner overly_inner">
    <div class="container-fluid p-0">
        
        <!-- Page Header -->
        <div class="page-header">
            <h1>Dashboard</h1>
            <p>Welcome back! Here's what's happening with your restaurant today.</p>
        </div>
        
        <!-- Quick Stats -->
        <div class="quick-stats">
            <div class="stat-card">
                <div class="icon-box blue">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-value">৳ {{ number_format($todayRevenue, 0) }}</div>
                <div class="stat-label">Today's Revenue</div>
            </div>
            
            <div class="stat-card">
                <div class="icon-box green">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-value">৳ {{ number_format($monthlyRevenue, 0) }}</div>
                <div class="stat-label">Monthly Revenue</div>
            </div>
            
            <div class="stat-card">
                <div class="icon-box orange">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="stat-value">{{ $totalOrders }}</div>
                <div class="stat-label">Total Orders</div>
            </div>
            
            <div class="stat-card">
                <div class="icon-box purple">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="stat-value">{{ $totalReservations }}</div>
                <div class="stat-label">Total Reservations</div>
            </div>
        </div>
        
        <!-- Charts Row 1 -->
        <div class="row">
            <div class="col-lg-8">
                <div class="chart-card">
                    <div class="card-header">
                        <h3><i class="fas fa-chart-bar me-2" style="color: #DD5903;"></i> Monthly Revenue</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="chart-card">
                    <div class="card-header">
                        <h3><i class="fas fa-pie-chart me-2" style="color: #DD5903;"></i> Menu by Category</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="categoryChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Charts Row 2 -->
        <div class="row">
            <div class="col-lg-6">
                <div class="chart-card">
                    <div class="card-header">
                        <h3><i class="fas fa-calendar me-2" style="color: #DD5903;"></i> Reservations Trend</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="reservationChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="chart-card">
                    <div class="card-header">
                        <h3><i class="fas fa-shopping-bag me-2" style="color: #DD5903;"></i> Daily Orders (Last 7 Days)</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="dailyOrderChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Additional Stats Row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="stat-card">
                    <div class="icon-box green">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="stat-value">{{ $totalMenuItems }}</div>
                    <div class="stat-label">Menu Items</div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="stat-card">
                    <div class="icon-box blue">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-value">{{ $totalCustomers }}</div>
                    <div class="stat-label">Total Customers</div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="stat-card">
                    <div class="icon-box orange">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-value">{{ $pendingOrders }}</div>
                    <div class="stat-label">Pending Orders</div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Chart colors
    const primaryColor = '#DD5903';
    const primaryLight = 'rgba(221, 89, 3, 0.1)';
    const colors = ['#DD5903', '#16a34a', '#0284c7', '#9333ea', '#f59e0b', '#ef4444'];
    
    // 1. Monthly Revenue Chart (Bar)
    new Chart(document.getElementById('revenueChart'), {
        type: 'bar',
        data: {
            labels: {!! $monthLabels !!},
            datasets: [{
                label: 'Revenue (৳)',
                data: {!! $monthlyRevenueData !!},
                backgroundColor: primaryColor,
                borderRadius: 8,
                borderSkipped: false,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: '#f0f0f0' }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });
    
    // 2. Category Chart (Doughnut)
    new Chart(document.getElementById('categoryChart'), {
        type: 'doughnut',
        data: {
            labels: {!! $categoryLabels !!},
            datasets: [{
                data: {!! $categoryCounts !!},
                backgroundColor: colors,
                borderWidth: 0,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: { padding: 15, usePointStyle: true }
                }
            },
            cutout: '65%'
        }
    });
    
    // 3. Reservations Chart (Line)
    new Chart(document.getElementById('reservationChart'), {
        type: 'line',
        data: {
            labels: {!! $monthLabels !!},
            datasets: [{
                label: 'Reservations',
                data: {!! $reservationData !!},
                borderColor: '#16a34a',
                backgroundColor: 'rgba(22, 163, 74, 0.1)',
                tension: 0.4,
                fill: true,
                pointBackgroundColor: '#16a34a',
                pointRadius: 5,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: '#f0f0f0' }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });
    
    // 4. Daily Orders Chart (Line)
    new Chart(document.getElementById('dailyOrderChart'), {
        type: 'line',
        data: {
            labels: {!! $dayLabels !!},
            datasets: [{
                label: 'Orders',
                data: {!! $dailyOrderData !!},
                borderColor: '#0284c7',
                backgroundColor: 'rgba(2, 132, 199, 0.1)',
                tension: 0.4,
                fill: true,
                pointBackgroundColor: '#0284c7',
                pointRadius: 5,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: '#f0f0f0' }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });
});
</script>

@endsection
