@extends('layouts.app')

@section('title', 'Land Development Specialists – Shreeyash Construction')
@section('meta')
  <meta name="title" content="Land Development Specialists – Shreeyash Construction">
  <meta name="description" content="End-to-end land development solutions in Maharashtra. Shreeyash Construction ensures quality planning, design, and execution.">
@endsection

@section('content')

<script src="https://cdn.tailwindcss.com"></script>

<style>
  :root {
    --primary: #b8994c; /* Gold */
    --dark: #333333;    /* Charcoal Gray */
    --light: #f5f5f5;   /* Light Background */
  }

  body {
    box-sizing: border-box;
    color: var(--dark);
    background-color: var(--light);
  }

  .btn-primary {
    background-color: var(--primary);
    color: white;
    transition: background 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #a1843f;
  }

  .service-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
  }

  footer {
    background-color: var(--dark);
    color: white;
  }
      /* ttt */
.top-bar {
    background: transparent;
    color: #e5e7eb;
    font-size: 13px;
    padding: 6px 0;
}

.top-bar {
    display: flex;
    gap: 10px;
    align-items: center;
    align-content: flex-start;
    justify-content: center;
}
.btn {
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 6px;
   --bs-btn-color: #ffffff;
  border: none;
  cursor: pointer;
  text-decoration: none;
  display: inline-block;
}

.btn.primary {
  background-color: #d3ab35;
  color: white;
}


  .tag-container {
    margin-top: 15px;
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    align-content: stretch;
    justify-content: center;
  }

</style>

<!-- ================= HERO SECTION ================= -->
<header class="relative text-white py-24 bg-center bg-cover"
  style="background-image: url('{{ asset('storage/land_dev.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Land Development</h1>
    <p class="text-xl mb-2">Top-rated Land Development Experts in Maharashtra</p>
    <p class="text-lg opacity-90 mb-8">
      Transforming raw land into ready-to-build construction sites with precision & trust.
    </p>
    <div class="top-bar">
      <a href="#contact" class="btn primary">Get a Fast Quote</a>

      <a href="tel:+919326216153" class="btn outline">Call +91 93262 16153</a>
      <!-- <button class="btn secondary">WhatsApp</button> -->
    </div>
    
   
  </div>
</header>

<!-- ================= INTRO SECTION ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-8xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Why Shreeyash Construction?</h2>

    <p class="text-lg text-gray-700 mb-4 leading-relaxed">
      Shreeyash Construction provides comprehensive land development services in Maharashtra — helping
      landowners and developers transform raw plots into construction-ready assets.
      We specialize in <strong>earthwork, grading, road access, and compaction</strong>, using advanced machinery and
      expert teams to ensure accuracy, compliance, and long-term stability.
    </p>

    <p class="text-gray-600">
      Whether it’s residential layouts, industrial estates, or commercial zones, our precision-driven
      land development process ensures optimal site preparation for all project types.
    </p>
  </div>
</section>


<!-- ================= SERVICES SECTION ================= -->
<section id="services" class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">
      Our Core Land Development Services
    </h2>

    <div class="grid md:grid-cols-2 gap-8">
      @php
        $services = [
          [
            'title' => 'Plot Leveling, Grading, and Road Access',
            'desc' => 'We offer precise plot leveling and grading services to shape land for residential layouts, industrial projects, or commercial use. Our services also include the creation of temporary or permanent road access, ensuring smooth logistics and project readiness.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l2-2 6 6 6-6 2 2"/><path d="M3 6h18v6H3z"/></svg>',
            'image' => asset('storage/PlotLeveling.jpg'),
            'link' => route('plot_leveling_grading_road_access'),
          ],
          [
            'title' => 'Earth Cutting, Filling & Compaction',
            'desc' => 'With a strong fleet of JCBs, tippers, and compactors, we handle bulk earth cutting and filling work with precision and efficiency. Our expert team ensures proper backfilling, soil compaction, and layer-wise leveling that meets structural and regulatory standards.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><path d="M3 9h18"/></svg>',
            'image' => asset('storage/cut.jpg'),
            'link' => route('earth_cutting_filling_compaction'),
          ]
        ];
      @endphp

      @foreach($services as $service)
        <a href="{{ $service['link'] }}"
           class="group block bg-white border border-gray-200 p-6 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-[1.02] hover:border-[var(--primary)] hover:bg-orange-50 cursor-pointer">
          
          <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" 
               class="w-full h-48 object-cover rounded-lg mb-4">

          <div class="flex items-center mb-4">
            {!! str_replace('class="', 'class="transition-transform duration-300 group-hover:rotate-6 ', $service['icon']) !!}
            <h3 class="ml-3 text-xl font-semibold text-gray-800 group-hover:text-[var(--primary)] transition-colors duration-300">
              {{ $service['title'] }}
            </h3>
          </div>

          <p class="text-gray-700 text-sm leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
            {{ $service['desc'] }}
          </p>
        </a>
      @endforeach
    </div>
  </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-8xl mx-auto px-6">

    <h3 class="text-3xl font-semibold text-[var(--primary)] text-center mb-10">
      Why Choose Us
    </h3>

    <div class="flex flex-wrap justify-center gap-4">

      <div class="px-5 py-3 bg-white border border-gray-200 rounded-full shadow-sm flex items-center gap-2">
        <span class="text-[var(--primary)] text-lg">✅</span>
        <span class="text-gray-700 font-medium">Experienced Land Development Team</span>
      </div>

      <div class="px-5 py-3 bg-white border border-gray-200 rounded-full shadow-sm flex items-center gap-2">
        <span class="text-[var(--primary)] text-lg">✅</span>
        <span class="text-gray-700 font-medium">Advanced Machinery (JCBs, Compactors, Dumpers)</span>
      </div>

      <div class="px-5 py-3 bg-white border border-gray-200 rounded-full shadow-sm flex items-center gap-2">
        <span class="text-[var(--primary)] text-lg">✅</span>
        <span class="text-gray-700 font-medium">Quality Earthwork & Grading</span>
      </div>

      <div class="px-5 py-3 bg-white border border-gray-200 rounded-full shadow-sm flex items-center gap-2">
        <span class="text-[var(--primary)] text-lg">✅</span>
        <span class="text-gray-700 font-medium">Timely Project Delivery</span>
      </div>

      <div class="px-5 py-3 bg-white border border-gray-200 rounded-full shadow-sm flex items-center gap-2">
        <span class="text-[var(--primary)] text-lg">✅</span>
        <span class="text-gray-700 font-medium">Compliance with Local Regulations</span>
      </div>

      <div class="px-5 py-3 bg-white border border-gray-200 rounded-full shadow-sm flex items-center gap-2">
        <span class="text-[var(--primary)] text-lg">✅</span>
        <span class="text-gray-700 font-medium">Serving Maharashtra</span>
      </div>

    </div>

  </div>
</section>
<!-- ================= CONTACT FORM ================= -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Contact Us</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to start your construction project? Get in touch with our team for a detailed consultation and quote.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Get a Free Quote</h3>
               
                <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Full Name *</label>
                            <input type="text" name="name" id="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                                placeholder="Enter your full name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Mobile Number *</label>
                            <input type="tel" name="mobile" id="mobile" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                                placeholder="+91 XXXXX-XXXXX">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Project Type *</label>
                            <select name="project_type" id="project_type" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                                <option value="">Select Project Type</option>
                                <option value="Asphalt Road Construction">Asphalt Road Construction</option>
                                <option value="Concrete Road Construction">Concrete Road Construction</option>
                                <option value="Residential Construction">Residential Construction</option>
                                <option value="Commercial Construction">Commercial Construction</option>
                                <option value="Industrial Shed">Industrial Shed</option>
                                <option value="Land Development">Land Development</option>
                                <option value="Compound Wall">Compound Wall</option>
                                <option value="Drainage & Sewer">Drainage & Sewer</option>
                                <option value="Water Supply">Underground Water Supply</option>
                                <option value="Renovation">Retrofitting & Renovation</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Location *</label>
                            <select name="location" id="location" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                                <option value="">Select Location</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Pune">Pune</option>
                                <option value="Raigad">Raigad</option>
                                <option value="Khopoli">Khopoli</option>
                                <option value="Nagothane">Nagothane</option>
                                <option value="Other Maharashtra Location">Other Maharashtra Location</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Project Details</label>
                        <textarea name="message" id="message" rows="4"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                            placeholder="Please describe your project requirements, timeline, and any specific details..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-800 py-4 rounded-lg text-lg font-semibold transition-colors">
                        <i class="fas fa-paper-plane mr-2"></i>Send Quote Request
                    </button>
                </form>
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <h4 class="font-bold text-gray-800 mb-4">Quick Contact Options</h4>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/919326216153" class="flex items-center justify-center bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i>WhatsApp Chat
                        </a>
                        <a href="tel:+919326216153" class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                            <i class="fas fa-phone mr-2"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div>
                <div class="bg-gray-800 text-white p-8 rounded-xl mb-8">
                    <h3 class="text-2xl font-bold mb-6">Contact Information</h3>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-yellow-400 p-3 rounded-lg mr-4 mt-1">
                                <i class="fas fa-map-marker-alt text-gray-800"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2">Head Office</h4>
                                <p class="text-gray-300">
                                    Crescent Pearl - B, B-G/1,<br>
                                    Veena Nagar, Katrang Road,<br>
                                    Nr. St. Anthony Church, Khopoli,<br>
                                    Maharashtra 410203
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-yellow-400 p-3 rounded-lg mr-4 mt-1">
                                <i class="fas fa-phone text-gray-800"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2">Phone Number</h4>
                                <p class="text-gray-300">
                                    Office: +91 93262 16153
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-yellow-400 p-3 rounded-lg mr-4 mt-1">
                                <i class="fas fa-envelope text-gray-800"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2">Email</h4>
                                <p class="text-gray-300">sc@shreeyashconstruction.co.in</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-yellow-400 p-3 rounded-lg mr-4 mt-1">
                                <i class="fas fa-clock text-gray-800"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-2">Working Hours</h4>
                                <p class="text-gray-300">
                                    Monday - Saturday: 9:00 AM - 6:00 PM<br>
                                    Emergency: 24/7 Available
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>
</section>


@endsection
