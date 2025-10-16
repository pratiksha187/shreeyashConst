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
</style>

<!-- ========== HERO SECTION ========== -->
<header class="gradient-bg text-white py-16">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      
      <!-- LEFT: Company Info -->
      <div class="text-center lg:text-left">
       
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Shreeyash Construction</h1>
        <p class="text-xl mb-2">Road Construction Experts in Maharashtra</p>
        <p class="text-lg opacity-90 mb-8">Building Strong Roads. Delivering Trusted Quality.</p>
        <a href="#contact-bottom" class="btn-primary inline-flex items-center px-8 py-4 rounded-lg text-lg font-semibold">
          📩 Get a Free Project Estimate
        </a>
      </div>

      <!-- RIGHT: Quick Quote Form -->
      <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20">
        <h3 class="text-xl font-bold mb-4 text-center text-white">Quick Quote Request</h3>
        <form id="header-contact-form" class="space-y-4">
          <input type="text" placeholder="Full Name *" required class="w-full px-4 py-3 bg-white/90 text-gray-800 rounded-lg focus:ring-2 focus:ring-[var(--primary)]">
          <input type="tel" placeholder="Phone Number *" required class="w-full px-4 py-3 bg-white/90 text-gray-800 rounded-lg focus:ring-2 focus:ring-[var(--primary)]">
          <select class="w-full px-4 py-3 bg-white/90 text-gray-800 rounded-lg focus:ring-2 focus:ring-[var(--primary)]">
            <option value="">Select work type</option>
            <option value="Asphalt Road Construction">Asphalt Road Construction</option>
            <option value="CC Road Construction">CC Road Construction</option>
            <option value="GSB-WMM Laying">GSB-WMM Laying</option>
            <option value="Compaction Services">Compaction Services</option>
            <option value="Subgrade Preparation">Subgrade Preparation</option>
          </select>
          <button type="submit" class="btn-primary w-full py-3 flex justify-center items-center font-semibold">
            <span>Get Free Quote</span>
            <div class="loading-spinner ml-3 hidden"></div>
          </button>
        </form>
      </div>

    </div>
  </div>
</header>

<!-- ========== SERVICES SECTION ========== -->
<section class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">🏗️ Our Road Construction Services</h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Asphalt -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-xl font-bold text-gray-800 mb-3">1. Asphalt / Bitumen Road Construction</h3>
        <p class="text-gray-600 mb-4">Complete asphalt road solutions with high-quality bitumen, precise leveling, and advanced compaction techniques.</p>
        <p class="text-sm text-[var(--primary)] mb-4">Perfect for highways, industrial areas, and urban networks.</p>
        <a href="{{ route('asphalt_paving') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

      <!-- CC Road -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-xl font-bold text-gray-800 mb-3">2. Cement Concrete (CC) Road Construction</h3>
        <p class="text-gray-600 mb-4">Heavy-duty CC roads using M30+ grade concrete, laser screed leveling, and proper expansion joints.</p>
        <p class="text-sm text-[var(--primary)] mb-4">MORTH and IRC standards compliant.</p>
        <a href="{{ route('inset_concrete_paving') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

      <!-- Compaction -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-xl font-bold text-gray-800 mb-3">3. Asphalt Compaction Services</h3>
        <p class="text-gray-600 mb-4">Modern machinery including PTRs, tandem rollers, and pneumatic rollers for uniform density.</p>
        <p class="text-sm text-[var(--primary)] mb-4">Higher load capacity + minimal maintenance.</p>
        <a href="{{ route('asphalt_compaction') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

      <!-- GSB -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-xl font-bold text-gray-800 mb-3">4. GSB &amp; WMM Laying</h3>
        <p class="text-gray-600 mb-4">Expert Granular Sub-Base and Wet Mix Macadam laying with precision thickness control.</p>
        <p class="text-sm text-[var(--primary)] mb-4">Foundation for high-quality roads.</p>
        <a href="{{ route('gsb_wmm_laying') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

      <!-- Subgrade -->
      <div class="service-card bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-xl font-bold text-gray-800 mb-3">5. Base Layer &amp; Subgrade Preparation</h3>
        <p class="text-gray-600 mb-4">Soil stabilization, subgrade compaction, and base leveling for lasting performance.</p>
        <p class="text-sm text-[var(--primary)] mb-4">MORTH specifications compliant.</p>
        <a href="{{ route('base_layer_subgrade_preparation') }}" class="inline-block mt-2 px-5 py-2 bg-[var(--primary)] text-white font-semibold rounded-lg hover:bg-[#a1843f] transition">Learn More →</a>
      </div>

     

    </div>
  </div>
</section>
<section class="py-16 bg-gray-50">
  <div class="max-w-4xl mx-auto px-6 text-center">
    <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-[var(--primary)]">
      <h3 class="text-2xl font-bold text-[var(--primary)] mb-4 flex items-center justify-center gap-2">
        🏅 Why Choose Us?
      </h3>

      <ul class="text-base text-gray-700 space-y-2 text-left max-w-md mx-auto">
        <li>✅ MORTH / IRC Compliant</li>
        <li>✅ Experienced Team</li>
        <li>✅ Modern Equipment</li>
        <li>✅ Quality Control</li>
        <li>✅ Timely Delivery</li>
        <li>✅ Serving Maharashtra</li>
      </ul>
    </div>
  </div>
</section>

      
<!-- ========== COVERAGE AREA ========== -->
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

<!-- ========== ABOUT SECTION ========== -->
<section class="py-16 bg-gray-50">
  <div class="max-w-4xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">🧱 About Shreeyash Construction</h2>
    <p class="text-lg text-gray-600 mb-6">At Shreeyash Construction, we believe quality roads connect communities and build progress.</p>
    <p class="text-gray-600">Our focus is on precision engineering, high performance, and sustainable practices — making us a trusted name in road construction across Maharashtra.</p>
  </div>
</section>

<!-- ========== CONTACT FORM ========== -->
<section id="contact-bottom" class="py-16 bg-white">
  <div class="max-w-4xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Get Your Detailed Free Quote</h2>
      <p class="text-gray-600">Tell us about your requirement — our team will contact you within 24 hours.</p>
    </div>
    <form id="contact-form" class="bg-gray-50 p-8 rounded-xl shadow-lg">
      <div class="grid md:grid-cols-2 gap-6 mb-6">
        <div>
          <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
          <input type="text" id="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary)]">
        </div>
        <div>
          <label class="block text-gray-700 font-semibold mb-2">Phone Number *</label>
          <input type="tel" id="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary)]">
        </div>
      </div>
      <div class="grid md:grid-cols-2 gap-6 mb-6">
        <div>
          <label class="block text-gray-700 font-semibold mb-2">Email Address</label>
          <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary)]">
        </div>
        <div>
          <label class="block text-gray-700 font-semibold mb-2">Project Location / District</label>
          <input type="text" id="location" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary)]">
        </div>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">Type of Work Needed</label>
        <select id="work-type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary)]">
          <option value="">Select work type</option>
          <option>Asphalt Road Construction</option>
          <option>CC Road Construction</option>
          <option>GSB-WMM Laying</option>
          <option>Compaction Services</option>
          <option>Subgrade Preparation</option>
        </select>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">Message / Description</label>
        <textarea id="message" rows="4" placeholder="Describe your project requirements..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary)]"></textarea>
      </div>
      <button type="submit" class="w-full btn-primary py-4 px-6 rounded-lg text-lg font-semibold flex justify-center items-center">
        <span id="submit-text">➡️ Get Free Quote Now</span>
        <div id="submit-spinner" class="loading-spinner ml-3 hidden"></div>
      </button>
    </form>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="py-12 mt-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-2xl font-bold mb-4 text-[var(--primary)]">📞 Contact Us Today</h2>
    <p class="mb-6">Ready to start your next road project? Reach out for a free consultation and cost estimate.</p>
    <p class="text-lg">📲 <strong>+91 8446115797</strong></p>
    <p class="text-lg">📧 info@shreeyashconstruction.in</p>
    <p class="mt-8 text-sm text-gray-400">© 2025 Shreeyash Construction. All rights reserved.</p>
  </div>
</footer>

@endsection
