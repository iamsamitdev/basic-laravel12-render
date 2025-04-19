@extends('layouts.backend')
@section('title') Reports & Analytics @parent @endsection

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container mx-auto py-6">
    <!-- Header Section with Period Selector -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <h1 class="text-2xl font-semibold text-gray-900 mb-4 md:mb-0">รายงานและการวิเคราะห์</h1>
        <div class="flex flex-wrap gap-3">
            <select class="border rounded-lg px-4 py-2 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 cursor-pointer">
                <option>รายวัน</option>
                <option>รายสัปดาห์</option>
                <option selected>รายเดือน</option>
                <option>รายปี</option>
            </select>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center space-x-2 cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                <span>ดาวน์โหลดรายงาน</span>
            </button>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <!-- Revenue Card -->
        <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg shadow-lg text-white p-6">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm opacity-75">รายได้ทั้งหมด</p>
                    <h3 class="text-3xl font-bold mt-2">฿458,690</h3>
                    <p class="text-sm mt-2 flex items-center text-green-300">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        +12.5% จากเดือนที่แล้ว
                    </p>
                </div>
                <div class="p-3 bg-white/10 rounded-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Orders Card -->
        <div class="bg-gradient-to-br from-purple-600 to-purple-800 rounded-lg shadow-lg text-white p-6">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm opacity-75">จำนวนคำสั่งซื้อ</p>
                    <h3 class="text-3xl font-bold mt-2">1,285</h3>
                    <p class="text-sm mt-2 flex items-center text-green-300">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        +8.2% จากเดือนที่แล้ว
                    </p>
                </div>
                <div class="p-3 bg-white/10 rounded-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Average Order Value -->
        <div class="bg-gradient-to-br from-green-600 to-green-800 rounded-lg shadow-lg text-white p-6">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm opacity-75">มูลค่าเฉลี่ยต่อออเดอร์</p>
                    <h3 class="text-3xl font-bold mt-2">฿357</h3>
                    <p class="text-sm mt-2 flex items-center text-red-300">
                        <svg class="w-4 h-4 mr-1 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        -2.4% จากเดือนที่แล้ว
                    </p>
                </div>
                <div class="p-3 bg-white/10 rounded-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Customer Satisfaction -->
        <div class="bg-gradient-to-br from-pink-600 to-pink-800 rounded-lg shadow-lg text-white p-6">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm opacity-75">ความพึงพอใจลูกค้า</p>
                    <h3 class="text-3xl font-bold mt-2">94.5%</h3>
                    <p class="text-sm mt-2 flex items-center text-green-300">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        +1.2% จากเดือนที่แล้ว
                    </p>
                </div>
                <div class="p-3 bg-white/10 rounded-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Sales Trend Chart -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-4 border-b border-gray-200 bg-gray-50">
                <h2 class="text-lg font-semibold text-gray-800">แนวโน้มยอดขาย</h2>
            </div>
            <div class="p-4">
                <div class="h-80">
                    <canvas id="salesTrendChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Category Distribution Chart -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-4 border-b border-gray-200 bg-gray-50">
                <h2 class="text-lg font-semibold text-gray-800">สัดส่วนการขายตามหมวดหมู่</h2>
            </div>
            <div class="p-4">
                <div class="h-80">
                    <canvas id="categoryChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Products Table -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-6">
        <div class="p-4 border-b border-gray-200 bg-gray-50 flex justify-between items-center">
            <h2 class="text-lg font-semibold text-gray-800">สินค้าขายดี</h2>
            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium cursor-pointer">ดูทั้งหมด →</button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">สินค้า</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ยอดขาย</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">รายได้</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">การเติบโต</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach(range(1, 5) as $index)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 flex-shrink-0">
                                    <img class="h-10 w-10 rounded object-cover" src="https://picsum.photos/200?random={{$index}}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">สินค้า {{ $index }}</div>
                                    <div class="text-sm text-gray-500">SKU-{{ str_pad($index, 6, '0', STR_PAD_LEFT) }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ rand(100, 999) }} ชิ้น</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">฿{{ number_format(rand(10000, 99999)) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @php
                                $growth = rand(-20, 40);
                                $growthClass = $growth >= 0 ? 'text-green-800 bg-green-100' : 'text-red-800 bg-red-100';
                                $growthSign = $growth >= 0 ? '+' : '';
                            @endphp
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $growthClass }}">
                                {{ $growthSign }}{{ $growth }}%
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script>
    // Sales Trend Chart
    const salesCtx = document.getElementById('salesTrendChart').getContext('2d');
    new Chart(salesCtx, {
        type: 'line',
        data: {
            labels: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
            datasets: [{
                label: 'ยอดขาย 2024',
                data: [30000, 35000, 32000, 38000, 42000, 45000, 48000, 50000, 52000, 55000, 58000, 62000],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                fill: true,
                tension: 0.3
            }, {
                label: 'ยอดขาย 2023',
                data: [28000, 32000, 30000, 35000, 38000, 40000, 42000, 45000, 47000, 49000, 51000, 54000],
                borderColor: 'rgb(209, 213, 219)',
                backgroundColor: 'rgba(209, 213, 219, 0.1)',
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        }
    });

    // Category Distribution Chart
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
        type: 'doughnut',
        data: {
            labels: ['อิเล็กทรอนิกส์', 'เสื้อผ้า', 'อาหาร', 'เครื่องสำอาง', 'อื่นๆ'],
            datasets: [{
                data: [35, 25, 20, 15, 5],
                backgroundColor: [
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(245, 158, 11, 0.8)',
                    'rgba(236, 72, 153, 0.8)',
                    'rgba(107, 114, 128, 0.8)'
                ]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
</script>
@endsection
