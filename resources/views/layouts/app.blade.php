<!DOCTYPE html>
<html lang="en" x-data>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Shreeyash Construction')</title>
  <meta name="description" content="Leading civil contractor in Maharashtra..." />
  <meta name="keywords" content="asphalt contractor Maharashtra, ..."/>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  <!-- Header -->
  <header x-data="{ navOpen: false }" class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="{{ url('/') }}" class="flex items-center">
        <img src="{{ asset('storage/logo/logor.png') }}" alt="Logo" class="h-16 w-auto"/>
      </a>
      <button @click="navOpen = !navOpen" class="md:hidden focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <nav :class="navOpen ? 'block' : 'hidden'" class="w-full md:flex md:items-center md:space-x-6 md:w-auto">
        <a href="{{ route('home') }}" class="block py-2 md:py-0 text-gray-700 hover:text-yellow-600 font-medium">Home</a>
        <a href="{{ route('about') }}" class="block py-2 md:py-0 text-gray-700 hover:text-yellow-600 font-medium">About</a>

        <!-- Services dropdown -->
        <div class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="flex w-full md:w-auto items-center justify-between py-2 md:py-0 text-gray-700 hover:text-yellow-600 font-medium focus:outline-none">
            Services
            <svg class="w-4 h-4 ml-1 transform" :class="{ 'rotate-180': open }" fill="currentColor" viewBox="0 0 20 20">
              <path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"/>
            </svg>
          </button>
          <div x-show="open" @click.away="open = false" x-transition class="md:absolute md:top-full md:left-0 mt-2 md:w-64 bg-white rounded shadow-lg z-50 py-2">
            <a href="{{ route('asphalt_paving') }}" class="block px-4 py-2 hover:bg-yellow-100">Asphalt / Bitumen Road</a>
            <a href="{{ route('inset_concrete_paving') }}" class="block px-4 py-2 hover:bg-yellow-100">Concrete Road (Inset & Offset)</a>
            <a href="{{ route('asphalt_compaction') }}" class="block px-4 py-2 hover:bg-yellow-100">Asphalt Compaction</a>
            <a href="{{ route('gsb_wmm_laying') }}" class="block px-4 py-2 hover:bg-yellow-100">GSB & WMM Laying</a>
            <a href="{{ route('base_layer_subgrade_preparation') }}" class="block px-4 py-2 hover:bg-yellow-100">Base Layer & Subgrade</a>
            <!-- Add other services similarly -->
          </div>
        </div>

        <a href="{{ route('project') }}" class="block py-2 md:py-0 text-gray-700 hover:text-yellow-600 font-medium">Projects</a>
        <a href="{{ route('contact_us') }}" class="block py-2 md:py-0 text-gray-700 hover:text-yellow-600 font-medium">Contact</a>

        <a href="{{ route('contact_us') }}" class="hidden md:inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded font-medium ml-4">
          Get Quote
        </a>
      </nav>
    </div>
  </header>

  <!-- Main content -->
  <main class="flex-grow">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <a href="{{ url('/') }}">
          <img src="{{ asset('storage/logo/logor.png') }}" alt="Logo" class="h-16 mb-4"/>
        </a>
        <p class="text-gray-400 text-sm mb-2">Civil Contractors – Maharashtra</p>
        <p class="text-gray-300 text-sm">
          Premier civil contracting company specializing in road construction, industrial infrastructure, and comprehensive project execution across Maharashtra.
        </p>
      </div>
      <div>
        <h4 class="text-lg font-bold mb-4">Quick Links</h4>
        <ul class="space-y-2 text-gray-300 text-sm">
          <li><a href="{{ url('/') }}" class="hover:text-yellow-400">Home</a></li>
          <li><a href="{{ route('about') }}" class="hover:text-yellow-400">About Us</a></li>
          <li><a href="{{ route('project') }}" class="hover:text-yellow-400">Projects</a></li>
          <li><a href="{{ route('testimonials') }}" class="hover:text-yellow-400">Testimonials</a></li>
          <li><a href="{{ route('contact_us') }}" class="hover:text-yellow-400">Contact Us</a></li>
          <li><a href="{{ route('company_profile') }}" class="hover:text-yellow-400">Company Profile</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-lg font-bold mb-4">Our Services</h4>
        <ul class="space-y-2 text-gray-300 text-sm">
          <li><a href="{{ route('road_construction') }}" class="hover:text-yellow-400">Road Construction</a></li>
          <li><a href="{{ route('industrial_infrastructure') }}" class="hover:text-yellow-400">Industrial Infrastructure</a></li>
          <li><a href="{{ route('land_development') }}" class="hover:text-yellow-400">Land Development</a></li>
          <li><a href="{{ route('water_drainage') }}" class="hover:text-yellow-400">Water & Drainage</a></li>
          <li><a href="{{ route('compound_wall') }}" class="hover:text-yellow-400">Compound Wall Construction</a></li>
          <li><a href="{{ route('residencial_commercial') }}" class="hover:text-yellow-400">Residential & Commercial Civil Work</a></li>
          <li><a href="{{ route('retrofiting_demolition') }}" class="hover:text-yellow-400">Retrofitting & Demolition</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-lg font-bold mb-4">Contact Info</h4>
        <div class="space-y-2 text-gray-300 text-sm">
          <p><i class="fas fa-map-marker-alt text-yellow-400 mr-2"></i>Crescent Pearl, Veena Nagar, Katrang Road, Khopoli, Maharashtra 410203</p>
          <p><i class="fas fa-phone text-yellow-400 mr-2"></i>+91 93262 16153</p>
          <p><i class="fas fa-envelope text-yellow-400 mr-2"></i>sc@shreeyashconstruction.co.in</p>
        </div>
      </div>
    </div>
    
    <div class="border-t border-gray-700 mt-8 pt-6 text-gray-400 text-sm text-center">
      &copy; 2025 Shreeyash Construction. All rights reserved.
    </div>
  </footer>

</body>
</html>
