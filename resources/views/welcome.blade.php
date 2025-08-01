@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

      <!-- Home Page -->
    <div id="home-page" class="active">
      
        <section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
            <!-- Background Video -->
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                <source src="{{ asset('storage/logo/project/timeline/t4.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Optional gradient behind text (for better contrast) -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent z-10"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-left">
                <h4 class="text-3xl md:text-5xl font-bold text-white mb-4 drop-shadow-[0_2px_6px_rgba(0,0,0,0.8)] font-display">
                    Building Roads. Building Trust.
                    <span class="block text-yellow-400 drop-shadow-[0_2px_6px_rgba(0,0,0,0.8)]">Across Maharashtra</span>
                </h4>

                <p class="text-lg md:text-xl text-white mb-6 max-w-2xl drop-shadow-[0_2px_6px_rgba(0,0,0,0.8)] font-sans">
                    Expert civil contractors for roads, infrastructure, and turnkey construction in Mumbai, Pune, Raigad, and beyond.
                </p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact_us') }}">
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 px-6 py-3 rounded-lg text-base font-semibold transition-colors shadow-lg font-sans">
                            <i class="fas fa-calculator mr-2"></i>Get a Quote
                        </button>
                    </a>

                    <button 
                        onclick="document.getElementById('visitModal').classList.remove('hidden')" 
                        class="border-2 border-white text-white hover:bg-white hover:text-gray-800 px-6 py-3 rounded-lg text-base font-semibold transition-colors shadow-lg font-sans"
                    >
                        <i class="fas fa-calendar-alt mr-2"></i>Schedule Site Visit
                    </button>
                </div>
            </div>


        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Core Services</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">From asphalt road construction in Maharashtra to industrial infrastructure development and residential-commercial project execution, Shreeyash Construction offers end-to-end solutions with quality workmanship, local expertise, and turnkey project delivery.</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="service-card bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition-all">
                        <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-road text-gray-800 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Road Construction</h3>
                        <p class="text-gray-600 mb-6">We specialize in asphalt road paving, concrete road construction, GSB & WMM laying, and complete road development solutions across Maharashtra, including Raigad, Khopoli, and Patalganga MIDC. Backed by expert teams and modern equipment, we ensure roads that are durable, smooth, and built to last.</p>
                        {{-- <button onclick="showPage('services')" class="text-yellow-600 hover:text-yellow-700 font-semibold">Learn More →</button> --}}
                    </div>
                    
                    <div class="service-card bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition-all">
                        <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-industry text-gray-800 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Industrial Infrastructure</h3>
                        <p class="text-gray-600 mb-6">Shreeyash Construction delivers industrial sheds, compound walls, drainage systems, and water supply infrastructure for MIDC zones and private industrial clients. Our turnkey approach ensures timely delivery, safety, and scalable civil execution for Patalganga, Taloja, Roha, and surrounding MIDCs.</p>
                        {{-- <button onclick="showPage('services')" class="text-yellow-600 hover:text-yellow-700 font-semibold">Learn More →</button> --}}
                    </div>
                    
                    <div class="service-card bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition-all">
                        <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-building text-gray-800 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Construction Projects</h3>
                        <p class="text-gray-600 mb-6">We handle residential and commercial construction projects including bungalows, retail units, interior civil work, and renovations. Trusted by clients in Khopoli, Karjat, and across Raigad, we bring precision, speed, and local expertise to every project — small or large.</p>
                        {{-- <button onclick="showPage('services')" class="text-yellow-600 hover:text-yellow-700 font-semibold">Learn More →</button> --}}
                    </div>
                </div>
            </div>
        </section>
  <!-- Why Choose Us -->
        <section class="py-20 bg-gray-800 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose Shreeyash Construction?</h2>
                    <p class="text-xl text-gray-300">Maharashtra’s Trusted Civil Contractor
Leading the way in civil construction, roadwork, and industrial infrastructure across Mumbai, Pune, Khopoli, Raigad, and MIDC zones, Shreeyash Construction is the preferred choice for quality-focused clients.</p>
                </div>
                
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-award text-gray-800 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Quality Workmanship</h3>
                        <p class="text-gray-300">From asphalt roads in Khopoli to industrial sheds in Patalganga MIDC, we use premium materials and skilled manpower to deliver long-lasting results that meet MORTH/IRC standards.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clock text-gray-800 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Timely Delivery</h3>
                        <p class="text-gray-300">Our project tracking systems and streamlined site execution help complete jobs within strict deadlines — whether it's GSB/WMM laying in Karjat or factory RCC works in Taloja.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-gray-800 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Expert Team</h3>
                        <p class="text-gray-300">Led by experienced civil engineers and site heads, our team brings technical precision and site-level control to every job — from stormwater drains to residential villas in Karjat.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-yellow-400 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-gray-800 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Maharashtra Coverage</h3>
                        <p class="text-gray-300">With active worksites in Mumbai, Pune, Khopoli, Karjat, Taloja, Nagothane, Patalganga, and more — our local access ensures faster mobilization, less downtime, and better compliance.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    </div>
    <div id="visitModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl shadow-xl w-full max-w-sm p-4 relative">
            <button onclick="document.getElementById('visitModal').classList.add('hidden')" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl font-bold">
                &times;
            </button>

            <h2 class="text-xl font-bold mb-4 text-gray-800 text-center">Schedule a Site Visit</h2>

            <form action="{{ route('site.visit.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2 mt-1 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <div class="mb-3">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required class="w-full border border-gray-300 rounded px-3 py-2 mt-1 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <div class="mb-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2 mt-1 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <div class="mb-3">
                    <label for="date" class="block text-sm font-medium text-gray-700">Preferred Date</label>
                    <input type="date" id="date" name="date" required class="w-full border border-gray-300 rounded px-3 py-2 mt-1 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Additional Message</label>
                    <textarea id="message" name="message" rows="2" class="w-full border border-gray-300 rounded px-3 py-2 mt-1 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                </div>

                <button type="submit" class="bg-orange-600 text-white w-full py-2 rounded hover:bg-orange-700 transition-colors text-sm font-semibold">
                    Submit Request
                </button>
            </form>
        </div>
    </div>

@endsection
