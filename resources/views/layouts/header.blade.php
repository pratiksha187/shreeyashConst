<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <header x-data="{ navOpen: false }" class="bg-white shadow sticky top-0 z-50">

  <nav class="bg-white shadow" x-data="{ servicesOpen: false, roadOpen: false, infraOpen: false, landOpen: false, waterOpen: false, compoundOpen: false, residentialOpen: false, retrofitOpen: false }">
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
        <li class="relative" @click.outside="servicesOpen = false; roadOpen = false; infraOpen = false; landOpen = false; waterOpen = false; compoundOpen = false; residentialOpen = false; retrofitOpen = false;">
          <button @click="servicesOpen = !servicesOpen" class="text-gray-700 hover:text-yellow-600 font-medium flex items-center focus:outline-none">
            Services
            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"/>
            </svg>
          </button>

          <!-- Dropdown Menu -->
          <div x-show="servicesOpen" x-transition x-cloak class="absolute bg-white shadow-lg rounded mt-2 py-2 w-64 z-50">

            <!-- Road Construction -->
            <div class="relative">
              <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="roadOpen = !roadOpen">
                {{-- <span class="flex-1">Road Construction</span> --}}
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
                {{-- <span class="flex-1">Industrial Infrastructure</span> --}}
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
                {{-- <span class="flex-1">Land Development</span> --}}
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
                {{-- <span class="flex-1">Compound Wall Construction</span> --}}
                
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
                {{-- <span class="flex-1">Residential & Commercial Civil Work</span> --}}
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
