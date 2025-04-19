@extends('layouts.backend')

@section('title')
    Dashboard
    @parent
@endsection

@section('styles')
    <!-- Chart.js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Dashboard</h1>
    
    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Card 1 -->
        <div class="bg-blue-600 rounded-lg shadow-md overflow-hidden">
            <div class="p-4 text-white">
                <div class="flex justify-between">
                    <div>
                        <h5 class="text-sm font-medium">ผู้ใช้ทั้งหมด</h5>
                        <h2 class="text-2xl font-bold mt-1">1,250</h2>
                    </div>
                    <div class="self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-blue-700 px-4 py-2">
                <a href="#" class="text-sm text-white flex justify-between items-center">
                    <span>ดูรายละเอียด</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-green-600 rounded-lg shadow-md overflow-hidden">
            <div class="p-4 text-white">
                <div class="flex justify-between">
                    <div>
                        <h5 class="text-sm font-medium">รายได้ประจำเดือน</h5>
                        <h2 class="text-2xl font-bold mt-1">฿35,200</h2>
                    </div>
                    <div class="self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-green-700 px-4 py-2">
                <a href="#" class="text-sm text-white flex justify-between items-center">
                    <span>ดูรายละเอียด</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="bg-yellow-500 rounded-lg shadow-md overflow-hidden">
            <div class="p-4 text-white">
                <div class="flex justify-between">
                    <div>
                        <h5 class="text-sm font-medium">คำสั่งซื้อใหม่</h5>
                        <h2 class="text-2xl font-bold mt-1">64</h2>
                    </div>
                    <div class="self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-yellow-600 px-4 py-2">
                <a href="#" class="text-sm text-white flex justify-between items-center">
                    <span>ดูรายละเอียด</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="bg-red-600 rounded-lg shadow-md overflow-hidden">
            <div class="p-4 text-white">
                <div class="flex justify-between">
                    <div>
                        <h5 class="text-sm font-medium">ข้อความรอดำเนินการ</h5>
                        <h2 class="text-2xl font-bold mt-1">18</h2>
                    </div>
                    <div class="self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-red-700 px-4 py-2">
                <a href="#" class="text-sm text-white flex justify-between items-center">
                    <span>ดูรายละเอียด</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Chart 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-4 py-3 bg-gray-50 border-b border-gray-200 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
                <h5 class="font-medium text-gray-700">รายได้รายเดือน</h5>
            </div>
            <div class="p-4">
                <div class="h-64">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Chart 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-4 py-3 bg-gray-50 border-b border-gray-200 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <h5 class="font-medium text-gray-700">จำนวนผู้ใช้ใหม่</h5>
            </div>
            <div class="p-4">
                <div class="h-64">
                    <canvas id="usersChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-4 py-3 bg-gray-50 border-b border-gray-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            <h5 class="font-medium text-gray-700">คำสั่งซื้อล่าสุด</h5>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">เลขที่</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ลูกค้า</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">วันที่</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">สถานะ</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">จำนวนเงิน</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">การดำเนินการ</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ORD-001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">สมชาย ใจดี</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">01/03/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">สำเร็จ</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">฿1,200</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 bg-blue-100 hover:bg-blue-200 px-3 py-1 rounded-md">ดู</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ORD-002</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">สมหญิง รักดี</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">02/03/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">รอจัดส่ง</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">฿3,500</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 bg-blue-100 hover:bg-blue-200 px-3 py-1 rounded-md">ดู</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ORD-003</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">วิชัย สุขใจ</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">05/03/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">กำลังจัดส่ง</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">฿850</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 bg-blue-100 hover:bg-blue-200 px-3 py-1 rounded-md">ดู</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ORD-004</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">นิภา ใสสะอาด</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">06/03/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">ยกเลิก</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">฿2,100</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 bg-blue-100 hover:bg-blue-200 px-3 py-1 rounded-md">ดู</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ORD-005</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">สมศักดิ์ มั่งมี</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">07/03/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">สำเร็จ</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">฿4,250</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 bg-blue-100 hover:bg-blue-200 px-3 py-1 rounded-md">ดู</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script>
    // กราฟรายได้
    var revenueCtx = document.getElementById('revenueChart').getContext('2d');
    var revenueChart = new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
            datasets: [{
                label: 'รายได้ (บาท)',
                data: [25000, 30000, 28500, 35200, 38000, 42000, 45000, 43000, 47500, 50200, 52000, 55000],
                backgroundColor: 'rgba(16, 185, 129, 0.2)',
                borderColor: 'rgba(16, 185, 129, 1)',
                borderWidth: 2,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
    
    // กราฟผู้ใช้
    var usersCtx = document.getElementById('usersChart').getContext('2d');
    var usersChart = new Chart(usersCtx, {
        type: 'bar',
        data: {
            labels: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
            datasets: [{
                label: 'ผู้ใช้ใหม่',
                data: [65, 78, 82, 95, 110, 125, 132, 145, 150, 162, 170, 180],
                backgroundColor: 'rgba(59, 130, 246, 0.5)',
                borderColor: 'rgba(59, 130, 246, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
@endsection