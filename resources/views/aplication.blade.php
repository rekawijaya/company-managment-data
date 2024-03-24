@extends('layouts.main')

@section('container')
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-teal-900 text-white">
        <div class="p-4">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
            <!-- Navigation Links -->
            <ul class="mt-6">
                <li id="finance-b" class="mb-2"><a href="#" class="block font-semibold text-2xl px-4 py-2 hover:bg-teal-800">Finance</a></li>
                <li id="inventory-b" class="mb-2"><a href="#" class="block font-semibold text-2xl px-4 py-2 hover:bg-teal-800">Inventory</a></li>
                <li id="sales-b" class="mb-2"><a href="#" class="block font-semibold text-2xl px-4 py-2 hover:bg-teal-800">Sales</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </div>
    </div>
    <!-- Content Area -->
    <div class="flex-1 bg-gray-100">
        <div class="p-8">
            @include('partials.dashboardNav')
        </div>
    </div>
</div>
@vite('resources/js/script.js')
@endsection