@extends('layouts.app')

@section('title', 'Industrial Infrastructure Experts – Shreeyash Construction')

@section('meta')
  <meta name="title" content="Industrial Infrastructure Experts – Shreeyash Construction">
  <meta name="description" content="Leading industrial infrastructure projects in Maharashtra with modern designs, durability, and timely execution by Shreeyash Construction.">
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


  /* ttt */


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


  .btn.secondary {
    border: 1px solid #ffffff;
    color: white;
    background-color: transparent;
  }


  .tag-container {
    margin-top: 15px;
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    align-content: stretch;
    justify-content: center;
}

.tag {
  background-color: white;
  color: #1e2a34;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 600;
}


.why-choose {
  text-align: center;
  padding: 80px 20px;
  background-color: #fafbfc;
}

.why-choose h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #0b0c0f;
}

.why-choose p {
  color: #555;
  margin: 10px auto 40px;
  max-width: 600px;
  font-size: 1rem;
}

.features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 24px;
  justify-items: center;
}

.feature-card {
  background: #fff;
  padding: 30px 25px;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.05);
  text-align: left;
  max-width: 320px;
  transition: all 0.3s ease;
}

.feature-card:hover {
  box-shadow: 0 12px 30px rgba(0,0,0,0.1);
  transform: translateY(-5px);
}

.feature-card h3 {
  font-size: 1.1rem;
  color: #0b0c0f;
  margin-bottom: 10px;
  font-weight: 600;
}

.feature-card p {
  font-size: 0.95rem;
  color: #666;
  line-height: 1.6;
}


.areas-we-serve {
  text-align: center;
  padding: 80px 20px;
  background-color: #f8f9fa;
}

.areas-we-serve h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #0b0c0f;
  margin-bottom: 10px;
}

.areas-we-serve p {
  color: #555;
  margin-bottom: 40px;
  font-size: 1rem;
}

.area-tags {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 14px;
}

.area-tags span {
  display: inline-block;
  background-color: #fff;
  color: #0b0c0f;
  font-weight: 600;
  font-size: 0.95rem;
  border-radius: 20px;
  padding: 8px 18px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  border: 1px solid #e5e5e5;
  transition: all 0.25s ease;
}

.area-tags span:hover {
  background-color: #0b0c0f;
  color: #fff;
  transform: translateY(-2px);
}

textarea:focus, input:focus {
  border-color: #d3ab35 !important;
  box-shadow: 0 0 6px rgba(243, 170, 53, 0.4) !important;
}

html {
  scroll-behavior: smooth;
}

</style>

<!-- ================= HERO SECTION ================= -->
<header class="relative text-white py-24 bg-center bg-cover" 
  style="background-image: url('{{ asset('storage/SHED.jpeg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Industrial Infrastructure Experts: Industrial Sheds & Factory Civil Work</h1>
    <p class="text-xl mb-2">Turnkey execution across Maharashtra with quality, compliance, and on‑time delivery. From foundations and RCC to PEB erection, roads, drainage, and utilities.</p>

   <div class="top-bar">
    <a href="#contact" class="btn primary">Get a Fast Quote</a>

    <a href="tel:+919326216153" class="btn outline">Call +91 93262 16153</a>
    <!-- <button class="btn secondary">WhatsApp</button> -->
  </div>

  <div class="tag-container">
    <span class="tag">MIDC Compliant</span>
    <span class="tag">IS Codes</span>
    <span class="tag">PEB & RCC</span>
    <span class="tag">End-to-End</span>
  </div>

  </div>
</header>



<!-- ================= INTRO SECTION ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-8xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Why Shreeyash Construction?</h2>
    <p class="text-lg text-gray-700 mb-4 leading-relaxed">
      Shreeyash Construction offers end-to-end industrial infrastructure solutions across Maharashtra.
      From PEB sheds to full-scale factory buildings, we handle everything from design to final finishing
      with the highest quality standards and structural integrity.
    </p>
    <p class="text-gray-600">
      Our experienced engineers and project managers ensure precision, durability, and timely delivery —
      making us a trusted name in industrial development.
    </p>
  </div>
</section>

<!-- ================= SERVICES SECTION ================= -->

<section id="services" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900">
      Industrial Infrastructure Services
    </h2>
    <p class="text-center text-gray-500 mt-2 mb-12">
      From concept to commissioning, tailored for manufacturing, logistics, and process industries.
    </p>

    <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"> -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

      <!-- Card 1 -->
      <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300">
        <div class="text-orange-600 mb-4 text-2xl">🏢</div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Industrial Shed Construction</h3>
        <p class="text-gray-600 text-sm mb-4">
          PEB/RCC sheds, large spans, mezzanines, crane beams, ventilation & fire compliance.
        </p>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Design-Build</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> PEB Erection</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Flooring & Drainage</li>
        </ul>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300">
        <div class="text-orange-600 mb-4 text-2xl">🔨</div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Factory Building Civil Work</h3>
        <p class="text-gray-600 text-sm mb-4">
          RCC, structural steel, foundations, retaining, plinth, walls, finishes and utilities.
        </p>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> RCC & Steel</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Finishes</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Compliance Docs</li>
        </ul>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300">
        <div class="text-orange-600 mb-4 text-2xl">🧱</div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Foundations & Piling</h3>
        <p class="text-gray-600 text-sm mb-4">
          Machine foundations, pile caps, pedestals, heavy-duty base slabs with precision.
        </p>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Dynamic Loads</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Quality M30–M40</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> QA/QC Lab</li>
        </ul>
      </div>

      <!-- Card 4 -->
      <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300">
        <div class="text-orange-600 mb-4 text-2xl">➕</div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Roads, Drainage & Utilities</h3>
        <p class="text-gray-600 text-sm mb-4">
          RCC roads, stormwater, trenches, water, fire lines, tanks, culverts, and chambers.
        </p>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Internal Roads</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Stormwater</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> UG Utilities</li>
        </ul>
      </div>

      <!-- Card 5 -->
      <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300">
        <div class="text-orange-600 mb-4 text-2xl">♻️</div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">RE-FIT</h3>
        <p class="text-gray-600 text-sm mb-4">
          Strengthening old structures to improve safety, durability, and performance.
        </p>
        <ul class="space-y-2 text-gray-700">
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Strong</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Safe</li>
          <li class="flex items-center gap-2"><span class="text-orange-600">☑</span> Upgrade</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<section id="projects" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10">
      <div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Recent Projects</h2>
        <p class="text-gray-500 mt-2">
          A snapshot of recent industrial sheds and factory works delivered on schedule.
        </p>
      </div>
      <a href="#contact" 
         class="mt-4 md:mt-0 inline-block border-2 border-yellow-600 text-yellow-600 font-medium px-5 py-2 rounded-md 
                hover:bg-yellow-600 hover:text-white transition-all duration-300">
        Discuss Your Project
      </a>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Project 1 -->
      <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">
        <img src="{{ asset('storage/SHED.jpeg') }}" alt="Industrial shed at Taloja MIDC" 
             class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="font-semibold text-lg text-gray-900 mb-1">
            Industrial Shed – Taloja MIDC
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            PEB structure, RCC flooring, stormwater, delivered in 5 months.
          </p>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">
        <img src="{{ asset('storage/factry.jpg') }}" alt="Factory civil work at Khopoli" 
             class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="font-semibold text-lg text-gray-900 mb-1">
            Factory Building – Khopoli
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            RCC frame, structural steel mezzanine, internal roads & drainage.
          </p>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">
        <img src="{{ asset('storage/warehouse.jpg') }}" alt="Warehouse Panvel" 
             class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="font-semibold text-lg text-gray-900 mb-1">
            Warehouse – Panvel
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            High-rise warehouse with utilities, roadwork, and fire compliance.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="why-choose">
  <h2>Why Choose Shreeyash Construction</h2>
  <p>Industrial specialists with rigorous QA/QC and milestone-based delivery.</p>

  <div class="features">
    <div class="feature-card">
      <h3>Turnkey Capability</h3>
      <p>Design, approvals, execution, handover — one team, one timeline.</p>
    </div>
    <div class="feature-card">
      <h3>Quality & Compliance</h3>
      <p>Built to IS codes and MIDC norms with documented QA/QC.</p>
    </div>
    <div class="feature-card">
      <h3>Experienced Team</h3>
      <p>Industrial projects expertise across sheds, factories, utilities & roads.</p>
    </div>
    <div class="feature-card">
      <h3>On-Time Delivery</h3>
      <p>Milestone planning with cost- and time-control at every stage.</p>
    </div>
  </div>
</section>
<section class="areas-we-serve">
  <h2>Areas We Serve</h2>
  <p>Strong on-ground execution across key industrial zones.</p>

  <div class="area-tags">
    <span>Khopoli</span>
    <span>Raigad</span>
    <span>Pen</span>
    <span>Panvel</span>
    <span>Taloja MIDC</span>
    <span>Chakan MIDC</span>
    <span>Pune</span>
    <span>Navi Mumbai</span>
  </div>
</section> -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 max-w-7xl">

    <!-- MAIN HEADING -->
    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 text-center">
      Why Choose Shreeyash Construction
    </h2>
    <div class="w-24 h-1 bg-yellow-600 mx-auto mt-4 mb-10 rounded-full"></div>

    <p class="text-lg text-gray-600 text-center max-w-3xl mx-auto mb-16">
      Industrial specialists with rigorous QA/QC, engineered precision, and milestone-based delivery across Maharashtra.
    </p>

    <!-- FEATURES GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">

      <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Turnkey Capability</h3>
        <p class="text-gray-600">Design, approvals, execution, handover — one team, one timeline.</p>
      </div>

      <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality & Compliance</h3>
        <p class="text-gray-600">Built to IS codes and MIDC norms with strong QA/QC documentation.</p>
      </div>

      <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Experienced Team</h3>
        <p class="text-gray-600">Expertise across sheds, utilities, factory buildings & industrial roads.</p>
      </div>

      <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-gray-900 mb-2">On-Time Delivery</h3>
        <p class="text-gray-600">Milestone planning with strong cost and timeline control at every stage.</p>
      </div>

    </div>

    <!-- AREAS WE SERVE -->
    <h3 class="text-3xl font-bold text-gray-900 text-center mb-6">Areas We Serve</h3>
    <div class="w-20 h-1 bg-yellow-600 mx-auto mb-12 rounded-full"></div>

    <div class="flex flex-wrap justify-center gap-4">

      <span class="px-5 py-2 bg-white rounded-full text-gray-800 font-medium border border-gray-200 shadow-sm">
        Khopoli
      </span>

      <span class="px-5 py-2 bg-white rounded-full text-gray-800 font-medium border border-gray-200 shadow-sm">
        Raigad
      </span>

      <span class="px-5 py-2 bg-white rounded-full text-gray-800 font-medium border border-gray-200 shadow-sm">
        Pen
      </span>

      <span class="px-5 py-2 bg-white rounded-full text-gray-800 font-medium border border-gray-200 shadow-sm">
        Panvel
      </span>

      <span class="px-5 py-2 bg-white rounded-full text-gray-800 font-medium border border-gray-200 shadow-sm">
        Taloja MIDC
      </span>

      <span class="px-5 py-2 bg-white rounded-full text-gray-800 font-medium border border-gray-200 shadow-sm">
        Chakan MIDC
      </span>

      <span class="px-5 py-2 bg-white rounded-full text-gray-800 font-medium border border-gray-200 shadow-sm">
        Pune
      </span>

      <span class="px-5 py-2 bg-white rounded-full text-gray-800 font-medium border border-gray-200 shadow-sm">
        Navi Mumbai
      </span>

    </div>

  </div>
</section>

<!-- ================= CONTACT / FORM SECTION (FIXED) ================= -->
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
