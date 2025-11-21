<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<!-- HEADER -->
<header x-data="{ openMenu: false }" class="sticky top-0 z-50 bg-white shadow-lg">

    <!-- TOP BAR -->
    <div class="bg-yellow-600 text-white text-sm py-1">
        <div class="max-w-7xl mx-auto px-4 flex justify-between">
            <span><i class="fa-solid fa-phone mr-2"></i> +91 90000 00000</span>
            <span><i class="fa-solid fa-envelope mr-2"></i> info@shreeyashconstruction.com</span>
        </div>
    </div>

    <!-- MAIN NAV -->
    <nav class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <img src="{{ asset('storage/logo/logor.png') }}" class="h-14 object-contain" alt="Logo">
            <span class="font-bold text-xl text-gray-800 tracking-wide">Shreeyash Construction</span>
        </a>

        <!-- Desktop Nav -->
        <ul class="hidden lg:flex items-center space-x-8 font-medium">

            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link">About</a></li>

            <!-- SERVICES DROPDOWN -->
            <li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button class="nav-link flex items-center gap-1">
                    Services <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>

                <!-- LARGE MEGA MENU -->
                <div x-show="open"
                     x-transition
                     class="absolute left-0 top-full w-[900px] bg-white shadow-2xl rounded-lg p-6 grid grid-cols-3 gap-6 border">

                    <!-- COL 1 -->
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-2"><i class="fa-solid fa-road mr-2 text-yellow-600"></i>Road Construction</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li><a href="{{ route('asphalt_paving') }}" class="dropdown-item">Asphalt / Bitumen Road</a></li>
                            <li><a href="{{ route('inset_concrete_paving') }}" class="dropdown-item">Concrete Road</a></li>
                            <li><a href="{{ route('asphalt_compaction') }}" class="dropdown-item">Asphalt Compaction</a></li>
                            <li><a href="{{ route('gsb_wmm_laying') }}" class="dropdown-item">GSB / WMM Laying</a></li>
                        </ul>
                    </div>

                    <!-- COL 2 -->
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-2"><i class="fa-solid fa-industry mr-2 text-yellow-600"></i>Industrial Infra</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li><a href="{{ route('industrial_shed_work') }}" class="dropdown-item">Industrial Sheds</a></li>
                            <li><a href="{{ route('factory_building_civil_work') }}" class="dropdown-item">Factory Building Work</a></li>
                            <li><a href="{{ route('land_development') }}" class="dropdown-item">Land Development</a></li>
                            <li><a href="{{ route('earth_cutting_filling_compaction') }}" class="dropdown-item">Earthwork & Compaction</a></li>
                        </ul>
                    </div>

                    <!-- COL 3 -->
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-2"><i class="fa-solid fa-water mr-2 text-yellow-600"></i>Water & Drainage</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li><a href="{{ route('storm_water_drainage') }}" class="dropdown-item">Storm Water Drainage</a></li>
                            <li><a href="{{ route('underground_water_supply') }}" class="dropdown-item">Underground Water Supply</a></li>
                            <li><a href="{{ route('drainage_line_sewer_work') }}" class="dropdown-item">Drainage & Sewer Work</a></li>
                            <li><a href="{{ route('precast_u_drain') }}" class="dropdown-item">Precast U Drain</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li><a href="{{ route('project') }}" class="nav-link">Projects</a></li>
            <li><a href="{{ route('contact_us') }}" class="nav-link">Contact</a></li>
        </ul>

        <!-- CTA BUTTON -->
        <a href="{{ route('contact_us') }}" class="hidden lg:inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg shadow font-medium transition">
            Get Quote
        </a>

        <!-- MOBILE MENU BUTTON -->
        <button @click="openMenu = !openMenu" class="lg:hidden text-gray-800 text-2xl">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <!-- MOBILE MENU -->
    <div x-show="openMenu" x-transition class="lg:hidden bg-white shadow-inner p-4 space-y-3">

        <a href="{{ route('home') }}" class="mobile-link">Home</a>
        <a href="{{ route('about') }}" class="mobile-link">About</a>

        <details class="group">
            <summary class="mobile-link">Services</summary>
            <div class="pl-4 space-y-2">

                <details>
                    <summary class="mobile-sub">Road Construction</summary>
                    <div class="pl-4 space-y-1">
                        <a href="{{ route('asphalt_paving') }}" class="mobile-item">Asphalt Road</a>
                        <a href="{{ route('inset_concrete_paving') }}" class="mobile-item">Concrete Road</a>
                    </div>
                </details>

                <details>
                    <summary class="mobile-sub">Industrial Infra</summary>
                    <div class="pl-4 space-y-1">
                        <a href="{{ route('industrial_shed_work') }}" class="mobile-item">Industrial Shed</a>
                        <a href="{{ route('factory_building_civil_work') }}" class="mobile-item">Factory Work</a>
                    </div>
                </details>

                <details>
                    <summary class="mobile-sub">Water & Drainage</summary>
                    <div class="pl-4 space-y-1">
                        <a href="{{ route('storm_water_drainage') }}" class="mobile-item">Storm Drainage</a>
                        <a href="{{ route('underground_water_supply') }}" class="mobile-item">Water Supply</a>
                    </div>
                </details>

            </div>
        </details>

        <a href="{{ route('project') }}" class="mobile-link">Projects</a>
        <a href="{{ route('contact_us') }}" class="mobile-link">Contact</a>

        <a href="{{ route('contact_us') }}" class="block bg-yellow-500 text-center text-white py-2 rounded-lg font-semibold mt-2">
            Get Quote
        </a>
    </div>

</header>

<!-- EXTRA STYLES -->
<style>
    .nav-link {
        @apply text-gray-700 hover:text-yellow-600 transition font-medium cursor-pointer;
    }
    .dropdown-item {
        @apply hover:text-yellow-600 block py-1 transition;
    }
    .mobile-link {
        @apply block py-2 text-gray-800 font-medium border-b;
    }
    .mobile-sub {
        @apply py-2 text-gray-700 font-semibold cursor-pointer;
    }
    .mobile-item {
        @apply block py-1 text-gray-600;
    }
</style>
