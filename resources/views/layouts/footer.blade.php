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

            <!-- Quick Links -->
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
                    &copy; 2025 Shreeyash Construction. All rights reserved.
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
