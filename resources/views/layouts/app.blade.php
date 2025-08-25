<!DOCTYPE html>
<html lang="en" x-data>
<!--  -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Shreeyash Construction')</title>
 <link rel="icon" type="image/png" href="{{ asset('storage/logo/logor.png') }}" sizes="32x32" />
  <link rel="apple-touch-icon" href="{{ asset('storage/logo/logor.png') }}" />

  {{-- META RESOLUTION: prefer @section('meta'), else @push('meta'), else fallback --}}
  @php
    // Capture any pushed meta content from child views (stacks)
    $pushedMeta = trim($__env->yieldPushContent('meta'));
  @endphp

  @hasSection('meta')
    {{-- If child used @section('meta') --}}
    @yield('meta')
  @elseif (!empty($pushedMeta))
    {{-- If child used @push('meta') --}}
    {!! $pushedMeta !!}
  @else
    {{-- Fallback meta only when neither section nor stack provided --}}
    <meta name="description" content="Shreeyash Construction delivers roads, civil & industrial infrastructure projects across Maharashtra with quality and on-time execution.">
  @endif

  {{-- extra head assets (fonts, page CSS, OG tags, canonicals, etc.) --}}
  @stack('head')

  {{-- global styles/scripts --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VQKZ0NE0RS"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-VQKZ0NE0RS');
  </script>
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
  <header x-data="{ navOpen: false }" class="bg-white shadow sticky top-0 z-50">
    <nav class="bg-white shadow"
         x-data="{ servicesOpen: false, roadOpen: false, infraOpen: false, landOpen: false, waterOpen: false, compoundOpen: false, residentialOpen: false, retrofitOpen: false }"
         @click.outside="servicesOpen = false; roadOpen = false; infraOpen = false; landOpen = false; waterOpen = false; compoundOpen = false; residentialOpen = false; retrofitOpen = false;">
      <div class="container mx-auto px-4 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
          <img src="{{ asset('storage/logo/logor.png') }}" alt="Logo" class="h-16 w-auto object-contain">
        </a>

        <!-- Navigation -->
        <ul class="flex space-x-6 items-center">
          <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-yellow-600 font-medium">Home</a></li>
          <li><a href="{{ route('about') }}" class="text-gray-700 hover:text-yellow-600 font-medium">About</a></li>

          <!-- Services Dropdown -->
          <li class="relative">
            <button @click="servicesOpen = !servicesOpen"
                    class="text-gray-700 hover:text-yellow-600 font-medium flex items-center focus:outline-none">
              Services
              <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"/>
              </svg>
            </button>

            <div x-show="servicesOpen" x-transition x-cloak class="absolute bg-white shadow-lg rounded mt-2 py-2 w-64 z-50">

              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="roadOpen = !roadOpen">
                  <a href="/road-construction" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Road Construction</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="roadOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('asphalt_paving') }}" class="block px-4 py-2 hover:bg-yellow-100">Asphalt / Bitumen Road</a>
                  <a href="{{ route('inset_concrete_paving') }}" class="block px-4 py-2 hover:bg-yellow-100">Concrete Road (Inset & Offset)</a>
                  <a href="{{ route('asphalt_compaction') }}" class="block px-4 py-2 hover:bg-yellow-100">Asphalt Compaction</a>
                  <a href="{{ route('gsb_wmm_laying') }}" class="block px-4 py-2 hover:bg-yellow-100">GSB & WMM Laying</a>
                  <a href="{{ route('base_layer_subgrade_preparation') }}" class="block px-4 py-2 hover:bg-yellow-100">Base Layer & Subgrade</a>
                </div>
              </div>

              <!-- Industrial Infrastructure -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="infraOpen = !infraOpen">
                  <a href="{{ route('industrial_infrastructure') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Industrial Infrastructure</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="infraOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('industrial_shed_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Industrial Shed Work</a>
                  <a href="{{ route('factory_building_civil_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Factory Building Civil Work</a>
                </div>
              </div>

              <!-- Land Development -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="landOpen = !landOpen">
                  <a href="{{ route('land_development') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Land Development</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="landOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('plot_leveling_grading_road_access') }}" class="block px-4 py-2 hover:bg-yellow-100">Plot Leveling, Grading, Access</a>
                  <a href="{{ route('earth_cutting_filling_compaction') }}" class="block px-4 py-2 hover:bg-yellow-100">Earth Cutting & Compaction</a>
                </div>
              </div>

              <!-- Water & Drainage -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="waterOpen = !waterOpen">
                  <a href="{{ route('water_drainage') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Water & Drainage</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="waterOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('storm_water_drainage') }}" class="block px-4 py-2 hover:bg-yellow-100">Storm Water Drainage</a>
                  <a href="{{ route('underground_water_supply') }}" class="block px-4 py-2 hover:bg-yellow-100">Underground Water Supply</a>
                  <a href="{{ route('drainage_line_sewer_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Drainage & Sewer Work</a>
                  <a href="{{ route('rcc_chamber_installation') }}" class="block px-4 py-2 hover:bg-yellow-100">RCC / Precast Chamber</a>
                  <a href="{{ route('precast_u_drain') }}" class="block px-4 py-2 hover:bg-yellow-100">Precast U Drain</a>
                </div>
              </div>

              <!-- Compound Wall -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="compoundOpen = !compoundOpen">
                  <a href="{{ route('compound_wall') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Compound Wall Construction</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="compoundOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('ucr_masonry_compound_walls') }}" class="block px-4 py-2 hover:bg-yellow-100">UCR Masonry Compound Walls</a>
                  <a href="{{ route('precast_compound_walls') }}" class="block px-4 py-2 hover:bg-yellow-100">Precast Compound Walls</a>
                  <a href="{{ route('fencing_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Fencing Work</a>
                </div>
              </div>

              <!-- Residential & Commercial -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="residentialOpen = !residentialOpen">
                  <a href="{{ route('residencial_commercial') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Residential & Commercial Civil Work</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="residentialOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('bungalow_construction') }}" class="block px-4 py-2 hover:bg-yellow-100">Bungalow Construction</a>
                  <a href="{{ route('commercial_unit_civil_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Commercial Unit Civil Work</a>
                </div>
              </div>

              <!-- Retrofitting & Demolition -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="retrofitOpen = !retrofitOpen">
                  <a href="{{ route('retrofiting_demolition') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Retrofitting & Demolition</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="retrofitOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('structural_modification') }}" class="block px-4 py-2 hover:bg-yellow-100">Structural Modification</a>
                  <a href="{{ route('repair_strengthening_reinforcement') }}" class="block px-4 py-2 hover:bg-yellow-100">Reinforcement & Repairs</a>
                  <a href="{{ route('demolition_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Demolition Work</a>
                </div>
              </div>

            </div>
          </li>

          <li><a href="{{ route('project') }}" class="text-gray-700 hover:text-yellow-600 font-medium">Projects</a></li>
          <li><a href="{{ route('contact_us') }}" class="text-gray-700 hover:text-yellow-600 font-medium">Contact</a></li>
        </ul>

        <!-- Quote button -->
        <a href="{{ route('contact_us') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded font-medium">Get Quote</a>
      </div>
    </nav>
  </header>

  <!-- Main content -->
  <main class="flex-grow">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-8">
        <!-- Company Info -->
        <div>
          <div class="flex items-center mb-6">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
              <img src="{{ asset('storage/logo/logor.png') }}"
                   alt="Shreeyash Construction Logo"
                   class="h-16 w-auto max-w-[200px] object-contain">
            </a>
          </div>
          <p class="text-sm text-gray-400 mb-4">Civil Contractors - Maharashtra</p>
          <p class="text-gray-300 mb-4">
            Premier civil contracting company specializing in road construction, industrial infrastructure, and comprehensive project execution across Maharashtra.
          </p>
          <div class="flex space-x-4">
            <div class="bg-yellow-400 p-2 rounded">
              <i class="fas fa-certificate text-gray-800"></i>
            </div>
            <div class="bg-yellow-400 p-2 rounded">
              <i class="fas fa-industry text-gray-800"></i>
            </div>
            <div class="bg-yellow-400 p-2 rounded">
              <i class="fas fa-file-invoice text-gray-800"></i>
            </div>
          </div>
        </div>

        <div>
          <h4 class="text-lg font-bold mb-6">Quick Links</h4>
          <ul class="space-y-3">
            <li><a href="{{ url('/') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Home</a></li>
            <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">About Us</a></li>
            <li><a href="{{ route('project') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Projects</a></li>
            <li><a href="{{ route('testimonials') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Testimonials</a></li>
            <li><a href="{{ route('contact_us') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Contact Us</a></li>
            <li><a href="{{ route('company_profile') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Company Profile</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div>
          <h4 class="text-lg font-bold mb-6">Our Services</h4>
          <ul class="space-y-3 text-sm">
            <li><a href="{{ route('road_construction') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Road Construction</a></li>
            <li><a href="{{ route('industrial_infrastructure') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Industrial Infrastructure</a></li>
            <li><a href="{{ route('land_development') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Land Development</a></li>
            <li><a href="{{ route('water_drainage') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Water & Drainage</a></li>
            <li><a href="{{ route('compound_wall') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Compound Wall Construction</a></li>
            <li><a href="{{ route('residencial_commercial') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Residential & Commercial Civil Work</a></li>
            <li><a href="{{ route('retrofiting_demolition') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Retrofitting & Demolition</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h4 class="text-lg font-bold mb-6">Contact Info</h4>
          <div class="space-y-4 text-sm">
            <div class="flex items-start">
              <i class="fas fa-map-marker-alt text-yellow-400 mr-3 mt-1"></i>
              <div>
                <p class="text-gray-300">Crescent Pearl - B, B-G/1,</p>
                <p class="text-gray-300">Veena Nagar, Katrang Road,</p>
                <p class="text-gray-300">Nr. St. Anthony Church, Khopoli, Maharashtra 410203</p>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-phone text-yellow-400 mr-3"></i>
              <p class="text-gray-300">+91 93262 16153</p>
            </div>
            <div class="flex items-center">
              <i class="fas fa-envelope text-yellow-400 mr-3"></i>
              <p class="text-gray-300">sc@shreeyashconstruction.co.in</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Row -->
      <div class="border-t border-gray-700 mt-12 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="text-gray-400 text-sm mb-4 md:mb-0">
            &copy; {{ date('Y') }} Shreeyash Construction. All rights reserved.
          </div>

          <!-- Social Icons -->
          <div class="flex space-x-4">
            <a href="https://www.facebook.com/shreeyashconstruction/" target="_blank" class="text-gray-300 hover:text-yellow-400 transition-colors">
              <i class="fab fa-facebook-f text-lg"></i>
            </a>
            <a href="https://www.instagram.com/shreeyashconstruction?igsh=MWphMmoxc3Z3c3hieQ==" target="_blank" class="text-gray-300 hover:text-yellow-400 transition-colors">
              <i class="fab fa-instagram text-lg"></i>
            </a>
            <a href="https://www.linkedin.com/company/shreeyash-construction/" target="_blank" class="text-gray-300 hover:text-yellow-400 transition-colors">
              <i class="fab fa-linkedin-in text-lg"></i>
            </a>
            <a href="https://wa.me/919326216153" target="_blank" class="text-gray-300 hover:text-yellow-400 transition-colors">
              <i class="fab fa-whatsapp text-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  {{-- page-specific scripts --}}
  @stack('scripts')
</body>
</html>
