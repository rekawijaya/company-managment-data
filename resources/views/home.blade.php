@extends('layouts.main')

@section('container')
    <!-- Hero Section -->
    <section class="bg-cover text-white py-20" style="background-image: url(img/company.jpg)">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-semibold mb-4">Welcome to Company Name</h1>
            <p class="text-lg mb-8">We provide innovative solutions for your business</p>
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-full">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2">
                    <img src="img/company1.jpg" alt="About" class="rounded-lg">
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0 md:ml-8">
                    <h2 class="text-3xl font-semibold mb-4">About Us</h2>
                    <p class="text-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus
                        tincidunt ex, et lacinia est aliquet vel. Integer fermentum ante eget erat eleifend, in
                        facilisis libero tempus.</p>
                    <a href="/about" class="text-blue-500 hover:text-blue-600">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Company Name. All rights reserved.</p>
        </div>
    </footer>
@endsection