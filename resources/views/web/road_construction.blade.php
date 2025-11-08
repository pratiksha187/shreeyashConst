@extends('layouts.app')

@section('title', 'Top Road Contractors in Maharashtra – Shreeyash Construction')

@section('meta')
<meta name="title" content="Top Road Contractors in Maharashtra – Shreeyash Construction">
<meta name="description" content="Expert road construction services across Maharashtra. Shreeyash Construction delivers quality roads with durability and precision.">
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

  .gradient-bg {
    background: linear-gradient(135deg, var(--primary) 0%, #c6aa5a 100%);
  }

  .btn-primary {
    background-color: var(--primary);
    color: white;
    transition: background 0.3s ease;
  }
  .btn-primary:hover { background-color: #a1843f; }

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

  .loading-spinner {
    border: 3px solid #f3f4f6;
    border-top: 3px solid var(--primary);
    border-radius: 50%;
    width: 20px;
    height: 20px;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
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

<header class="relative text-white py-24 bg-center bg-cover" style="background-image: url('{{ asset('storage/logo/main/roadconst.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Top-rated Road Construction Civil Work Systems in Maharashtra</h1>
    <p class="text-xl mb-2">Road Construction Experts in Maharashtra</p>
    <p class="text-lg opacity-90 mb-8">Building Strong Roads. Delivering Trusted Quality.</p>
    <div class="top-bar">
      <a href="#contact" class="btn primary">Get a Fast Quote</a>

      <a href="tel:+919326216153" class="btn outline">Call +91 93262 16153</a>
      <!-- <button class="btn secondary">WhatsApp</button> -->
    </div>
    
   

  </div>
</header>

<!-- ================= SERVICES SECTION ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">🏗️ Our Road Construction Services</h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- 1. Asphalt -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('storage/logo/main/roadconst.jpg') }}" alt="Asphalt Road Construction" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-bold text-gray-800 mb-3">1. Asphalt / Bitumen Road Construction</h3>
        <p class="text-gray-600 mb-4">Complete asphalt road solutions with high-quality bitumen, precise leveling, and advanced compaction techniques.</p>
        <p class="text-sm text-[var(--primary)] mb-4">Perfect for highways, industrial areas, and urban networks.</p>
        <a href="{{ route('asphalt_paving') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

      <!-- 2. CC Road -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('storage/logo/header/Cement.png') }}" alt="Cement Concrete Road Construction" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-bold text-gray-800 mb-3">2. Cement Concrete (CC) Road Construction</h3>
        <p class="text-gray-600 mb-4">Heavy-duty CC roads using M30+ grade concrete, laser screed leveling, and proper expansion joints.</p>
        <p class="text-sm text-[var(--primary)] mb-4">MORTH and IRC standards compliant.</p>
        <a href="{{ route('inset_concrete_paving') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

      <!-- 3. Compaction -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('storage/logo/header/Compaction.png') }}" alt="Asphalt Compaction Services" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-bold text-gray-800 mb-3">3. Asphalt Compaction Services</h3>
        <p class="text-gray-600 mb-4">Modern machinery including PTRs, tandem rollers, and pneumatic rollers for uniform density.</p>
        <p class="text-sm text-[var(--primary)] mb-4">Higher load capacity + minimal maintenance.</p>
        <a href="{{ route('asphalt_compaction') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

      <!-- 4. GSB -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('storage/logo/header/GSB.png') }}" alt="GSB and WMM Laying" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-bold text-gray-800 mb-3">4. GSB &amp; WMM Laying</h3>
        <p class="text-gray-600 mb-4">Expert Granular Sub-Base and Wet Mix Macadam laying with precision thickness control.</p>
        <p class="text-sm text-[var(--primary)] mb-4">Foundation for high-quality roads.</p>
        <a href="{{ route('gsb_wmm_laying') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

      <!-- 5. Subgrade -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('storage/logo/header/BaseLayer.png') }}" alt="Base Layer and Subgrade Preparation" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-bold text-gray-800 mb-3">5. Base Layer &amp; Subgrade Preparation</h3>
        <p class="text-gray-600 mb-4">Soil stabilization, subgrade compaction, and base leveling for lasting performance.</p>
        <p class="text-sm text-[var(--primary)] mb-4">MORTH specifications compliant.</p>
        <a href="{{ route('base_layer_subgrade_preparation') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

    </div>
  </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-12xl mx-auto px-6">
    <div class="bg-white border border-gray-200 shadow-sm rounded-2xl p-8">
      
      <h3 class="text-2xl font-semibold text-[var(--primary)] text-center mb-6">
        Why Choose Us
      </h3>

      <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-3 text-gray-700 text-base font-medium">

        <span class="flex items-center gap-2">
          <span class="text-[var(--primary)] text-lg">✔</span> MORTH / IRC Compliant
        </span>

        <span class="flex items-center gap-2">
          <span class="text-[var(--primary)] text-lg">✔</span> Experienced Team
        </span>

        <span class="flex items-center gap-2">
          <span class="text-[var(--primary)] text-lg">✔</span> Modern Equipment
        </span>

        <span class="flex items-center gap-2">
          <span class="text-[var(--primary)] text-lg">✔</span> Quality Control
        </span>

        <span class="flex items-center gap-2">
          <span class="text-[var(--primary)] text-lg">✔</span> Timely Delivery
        </span>

        <span class="flex items-center gap-2">
          <span class="text-[var(--primary)] text-lg">✔</span> Serving Maharashtra
        </span>

      </div>

    </div>
  </div>
</section>


<!-- ================= COVERAGE AREA ================= -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">📍 We Deliver Projects Across Maharashtra</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
      @foreach(['Pune','Mumbai','Thane','Raigad','Navi Mumbai','Konkan Region','Western Maharashtra'] as $city)
        <div class="bg-blue-50 p-4 rounded-lg font-semibold">{{ $city }}</div>
      @endforeach
    </div>
    <p class="text-gray-600">Whether it's highway development, municipal work, or industrial road construction, our roads are known for strength, smoothness, and sustainability.</p>
  </div>
</section>

<!-- ================= ABOUT SECTION ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-4xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">🧱 About Shreeyash Construction</h2>
    <p class="text-lg text-gray-600 mb-6">At Shreeyash Construction, we believe quality roads connect communities and build progress.</p>
    <p class="text-gray-600">Our focus is on precision engineering, high performance, and sustainable practices — making us a trusted name in road construction across Maharashtra.</p>
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
