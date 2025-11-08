@extends('layouts.app')

@section('title', 'Retrofitting & Demolition Experts – Shreeyash Construction')

@section('meta')
  <meta name="description" content="Professional retrofitting and demolition services in Maharashtra, ensuring safety, speed, and quality by Shreeyash Construction.">
  <link rel="canonical" href="{{ url()->current() }}">
  <meta property="og:title" content="Retrofitting & Demolition Experts – Shreeyash Construction">
  <meta property="og:description" content="Professional retrofitting and demolition services in Maharashtra, ensuring safety, speed, and quality by Shreeyash Construction.">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
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
    

.top-bar {
    display: flex;
    gap: 10px;
    align-items: center;
    align-content: flex-start;
    justify-content: center;
}

 .btn {
    padding: 0.75rem 1.75rem;
    border-radius: 8px;
    font-weight: 600;
    font-size: 1rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }

  .btn-primary {
    background-color: var(--primary);
    color: white;
    border: 1px solid var(--primary);
  }

  .btn-primary:hover {
    background-color: #a1843f;
    border-color: #a1843f;
  }

  .btn-outline {
    border: 2px solid white;
    color: white;
    transition: 0.3s;
  }

  .btn-outline:hover {
    background: white;
    color: var(--primary);
  }

  .top-bar {
    display: flex;
    gap: 12px;
    justify-content: center;
    flex-wrap: wrap;
  }

</style>

<!-- ================= HERO SECTION ================= -->
<header class="relative text-white py-24 bg-center bg-cover"
  style="background-image: url('{{ asset('storage/retrofiting.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-[rgba(184,153,76,0.85)] to-[rgba(51,51,51,0.85)]"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Top-rated Retrofitting & Demolition Systems in Maharashtra</h1>
    <p class="text-xl mb-2">Professional Industrial Modification & Safe Demolition Services</p>
    <p class="text-lg opacity-90 mb-8">
      Serving major MIDC zones across Maharashtra — Patalganga, Taloja, Roha, and beyond.
    </p>
  <div class="top-bar mt-8">
  <a href="#contact" class="btn btn-primary">Get a Fast Quote</a>
  <a href="tel:+919326216153" class="btn btn-outline">Call +91 93262 16153</a>
</div>
  </div>
</header>

<!-- ================= INTRO SECTION ================= -->
<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Why Shreeyash Construction?</h2>
    <p class="text-lg text-gray-700 mb-4 leading-relaxed">
      Shreeyash Construction provides <b>specialized retrofitting and demolition services</b> for industrial and civil
      structures across Maharashtra. From <b>factory modification</b> to <b>structural rehabilitation</b> and <b>controlled demolition</b>, 
      we ensure <b>safety, precision, and full regulatory compliance</b> at every step.
    </p>
    <p class="text-gray-600">
      Our projects in <b>Patalganga, Roha, and Taloja MIDCs</b> have made us one of the most trusted industrial
      contractors for renovation and dismantling work in the state.
    </p>
  </div>
</section>

<!-- ================= SERVICES SECTION ================= -->
<section id="services" class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">
      Our Core Retrofitting & Demolition Services
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @php
        $services = [
          [
            'title' => 'Structural Modification (Retrofitting)',
            'desc' => 'We perform structural retrofitting and layout modification for factories, warehouses, and industrial buildings. Our solutions include jacketing, carbon fiber wrapping, and RCC strengthening — ensuring compliance and longevity.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l9-9 9 9"/><path d="M9 21V9h6v12"/></svg>',
            'image' => asset('storage/Structuralretrofiting.jpg'),
            'link' => route('structural_modification'),
          ],
          [
            'title' => 'Repair, Strengthening & Reinforcement',
            'desc' => 'We offer professional repair and strengthening for aging or damaged RCC structures. Our services include epoxy injection, grouting, and steel anchoring for industrial buildings in Mahad, Dhatav, and Chakan.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18"/><path d="M3 9h18"/></svg>',
            'image' => asset('storage/reinforced.jpg'),
            'link' => route('repair_strengthening_reinforcement'),
          ],
          [
            'title' => 'Demolition Work',
            'desc' => 'We handle safe and controlled demolition for RCC structures, tanks, and factory sheds using mechanical and manual techniques. Debris removal and site cleanup are managed end-to-end under safety guidelines.',
            'icon' => '<svg class="h-6 w-6 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"/><path d="M3 6h18v6H3z"/></svg>',
            'image' => asset('storage/demolution.jpg'),
            'link' => route('demolition_work'),
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
  <div class="max-w-6xl mx-auto px-6 text-center">

    <h3 class="text-3xl font-semibold text-[var(--primary)] mb-10 flex justify-center items-center gap-2">
      ⚙️ Why Choose Us?
    </h3>

    <div class="flex flex-wrap justify-center gap-3">

      <span class="px-5 py-2 rounded-full bg-white border border-gray-300 shadow-sm flex items-center gap-2 text-gray-700 font-medium">
        <span class="text-[var(--primary)] text-lg">✅</span>
        Certified & Experienced Civil Engineers
      </span>

      <span class="px-5 py-2 rounded-full bg-white border border-gray-300 shadow-sm flex items-center gap-2 text-gray-700 font-medium">
        <span class="text-[var(--primary)] text-lg">✅</span>
        Advanced Machinery & Safety Gear
      </span>

      <span class="px-5 py-2 rounded-full bg-white border border-gray-300 shadow-sm flex items-center gap-2 text-gray-700 font-medium">
        <span class="text-[var(--primary)] text-lg">✅</span>
        RCC Strengthening & Retrofitting Experts
      </span>

      <span class="px-5 py-2 rounded-full bg-white border border-gray-300 shadow-sm flex items-center gap-2 text-gray-700 font-medium">
        <span class="text-[var(--primary)] text-lg">✅</span>
        Safe & Controlled Demolition Practices
      </span>

      <span class="px-5 py-2 rounded-full bg-white border border-gray-300 shadow-sm flex items-center gap-2 text-gray-700 font-medium">
        <span class="text-[var(--primary)] text-lg">✅</span>
        Timely Completion & Site Clean-up
      </span>

      <span class="px-5 py-2 rounded-full bg-white border border-gray-300 shadow-sm flex items-center gap-2 text-gray-700 font-medium">
        <span class="text-[var(--primary)] text-lg">✅</span>
        Serving Maharashtra MIDCs
      </span>

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
