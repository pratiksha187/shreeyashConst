@extends('layouts.app')

@section('title', 'About Us | Shreeyash Construction – Real Estate Builders & Construction Company')

@push('meta')
<meta name="description" content="Learn about Shreeyash Construction, a leading real estate builders & construction company in Maharashtra since 2000. Trusted for quality, timely, and sustainable projects.">
<meta name="keywords" content="Shreeyash Construction, real estate builders, construction company, road construction, industrial projects, Maharashtra construction">
@endpush

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f9fafb;
    color: #333;
    margin: 0;
  }
  h1, h2, h3 {
    color: #1f2937;
  }
  .section { margin-bottom: 50px; }
  .section h2 {
    font-size: 1.75rem;
    padding-left: 12px;
    border-left: 5px solid #00a8ff;
    font-weight: 600;
    margin-bottom: 20px;
  }
  .cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }
  .card {
    background: #ffffff;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 6px 12px rgba(0,0,0,0.05);
    width: 250px;
    padding: 20px;
    transition: all 0.3s ease;
  }
  .card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
  .card-title {
    font-size: 1.15rem;
    color: #00a8ff;
    font-weight: 600;
    margin-bottom: 8px;
  }
  .card-desc {
    font-size: 0.95rem;
    color: #4b5563;
  }
  .residential { border-left: 4px solid #00b894; }
  .industrial  { border-left: 4px solid #6c5ce7; }
  .smartcity   { border-left: 4px solid #fd79a8; }
  .port        { border-left: 4px solid #0984e3; }
  .tourism     { border-left: 4px solid #e17055; }
  .info-box {
    background: #f8fafc;
    border-left: 5px solid #00a8ff;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
  }
  .icon-box {
    height: 6rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1rem;
    font-size: 2rem;
    color: #1f2937;
  }
  .bg-yellow { background-color: #facc15; }
  .bg-gray   { background-color: #e5e7eb; }
  @media (max-width: 768px) {
    .cards { justify-content: center; }
  }
</style>

{{-- <div class="text-center py-10"> --}}
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Heading -->
      <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">About Shreeyash Construction</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Building Maharashtra's infrastructure with expertise, integrity, and innovation since our inception.</p>
      </div>

      <!-- Our Story -->
      <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div>
          <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Story</h2>
          <p class="text-gray-600 mb-6">
            Shreeyash Construction is a trusted civil construction company in Maharashtra, known for its commitment to quality, transparency, and timely project delivery. Founded with the goal of bringing professionalism to the construction sector, we have evolved into a reliable partner for road construction services, industrial infrastructure projects, and comprehensive civil works across Maharashtra.
          </p>
          <p class="text-gray-600 mb-6">
            With experience spanning asphalt and concrete roads, PEB industrial sheds, stormwater drainage, and residential-commercial construction, we combine modern technology, skilled manpower, and a client-focused approach. Our journey has been defined by continuous learning, structured execution, and a deep respect for every site we touch — from Khopoli and Pune to major MIDC zones and urban expansions in Maharashtra.
          </p>
          <div class="grid grid-cols-2 gap-6">
            <div class="text-center p-4 bg-gray-50 rounded-lg">
              <div class="text-3xl font-bold text-yellow-600 mb-2">500+</div>
              <div class="text-gray-600">Projects Completed</div>
            </div>
            <div class="text-center p-4 bg-gray-50 rounded-lg">
              <div class="text-3xl font-bold text-yellow-600 mb-2">25+</div>
              <div class="text-gray-600">Years Experience</div>
            </div>
          </div>
        </div>

        <div class="bg-gray-100 p-8 rounded-xl">
          <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="icon-box bg-yellow"><i class="fas fa-hard-hat"></i></div>
            <div class="icon-box bg-gray"><i class="fas fa-road"></i></div>
            <div class="icon-box bg-gray"><i class="fas fa-industry"></i></div>
            <div class="icon-box bg-yellow"><i class="fas fa-building"></i></div>
          </div>
        </div>
      </div>

      <!-- Mission & Vision -->
      <div class="grid md:grid-cols-2 gap-8 mb-16">
        <div class="info-box">
          <div class="flex items-center mb-4">
            <div class="bg-yellow p-3 rounded-lg mr-4"><i class="fas fa-bullseye"></i></div>
            <h3 class="text-2xl font-bold text-gray-800">Our Mission</h3>
          </div>
          <p class="text-gray-600">
            At Shreeyash Construction, our mission is to grow as a leading civil construction company in Maharashtra, delivering high-quality and time-bound execution for both public and private projects.
            We aim to provide end-to-end solutions in road construction services, industrial infrastructure across India, and residential-commercial development — with a strong focus on engineering precision, skilled manpower, and lasting client relationships.
          </p>
        </div>

        <div class="info-box">
          <div class="flex items-center mb-4">
            <div class="bg-yellow p-3 rounded-lg mr-4"><i class="fas fa-eye"></i></div>
            <h3 class="text-2xl font-bold text-gray-800">Our Vision</h3>
          </div>
          <p class="text-gray-600">
            Our vision at Shreeyash Construction is to be recognized as one of the most trusted names in civil infrastructure development across India, known for building durable, efficient, and sustainable spaces.
            We strive to lead the future of construction by delivering impactful projects in industrial infrastructure in India, road construction, and residential-commercial civil works across Maharashtra and beyond, integrating technology, local expertise, and high-quality execution at every step.
          </p>
        </div>
      </div>

      <!-- Zones -->
      <div class="text-center mb-12">
        <h1 class="text-3xl font-bold mb-10">🌍 Development Zones – Maharashtra & Gujarat</h1>

        <!-- Residential Zones -->
        <div class="section">
          <h2>🏠 Residential Zones</h2>
          <div class="cards">
            <div class="card residential"><div class="card-title">Karjat</div><div class="card-desc">Residential + Weekend Growth Belt</div></div>
            <div class="card residential"><div class="card-title">Kalyan</div><div class="card-desc">Expanding Real Estate Belt</div></div>
            <div class="card residential"><div class="card-title">Badlapur</div><div class="card-desc">Affordable Housing Cluster</div></div>
            <div class="card residential"><div class="card-title">Neral</div><div class="card-desc">Affordable Housing Belt</div></div>
            <div class="card residential"><div class="card-title">Ulwe</div><div class="card-desc">Upcoming Residential Zone (NMIA)</div></div>
            <div class="card residential"><div class="card-title">Panvel</div><div class="card-desc">Navi Mumbai Extension & Connectivity Hub</div></div>
            <div class="card residential"><div class="card-title">Shahapur</div><div class="card-desc">Residential Growth + Tourism Potential</div></div>
            <div class="card residential"><div class="card-title">Igatpuri</div><div class="card-desc">Scenic Retreat & Real Estate Hub</div></div>
            <div class="card residential"><div class="card-title">Nagothane</div><div class="card-desc">Growing Region</div></div>
            
          </div>
        </div>

        <!-- Industrial Zones -->
        <div class="section">
          <h2>🏭 Industrial Zones</h2>
          <div class="cards">
            <div class="card industrial"><div class="card-title">Pen</div><div class="card-desc">Emerging Industrial Node</div></div>
            <div class="card industrial"><div class="card-title">Taloja</div><div class="card-desc">Heavy Industrial Belt</div></div>
            <div class="card industrial"><div class="card-title">Patalganga</div><div class="card-desc">MIDC Industrial Corridor</div></div>
            <div class="card industrial"><div class="card-title">Roha</div><div class="card-desc">Chemical & Pharma Hub</div></div>
            <div class="card industrial"><div class="card-title">Mahad</div><div class="card-desc">Industrial Township</div></div>
            <div class="card industrial"><div class="card-title">Chakan</div><div class="card-desc">Auto & Engineering Hub</div></div>
            <div class="card industrial"><div class="card-title">Ranjangaon</div><div class="card-desc">SEZ & Industrial Growth Area</div></div>
            <div class="card industrial"><div class="card-title">Mangaon</div><div class="card-desc">MIDC + NA Plotting Hotspot</div></div>
            <div class="card industrial"><div class="card-title">Boisar</div><div class="card-desc">MIDC + Real Estate Development Area</div></div>
            <div class="card industrial"><div class="card-title">Murbad</div><div class="card-desc">Industrial & Agricultural Region</div></div>
            <div class="card industrial"><div class="card-title">Palghar</div><div class="card-desc">Manufacturing & Agro-Industrial District</div></div>
            <div class="card smartcity"><div class="card-title">Pune</div><div class="card-desc">Industrial Hub</div></div>
            <div class="card smartcity"><div class="card-title">Raigad</div><div class="card-desc">Coastal Region</div></div>
            <div class="card smartcity"><div class="card-title">Khopoli</div><div class="card-desc">Industrial Area</div></div>

          </div>
        </div>

        <!-- Commercial Zones -->
        <div class="section">
          <h2>💼 Commercial & Smart City</h2>
          <div class="cards">
            <div class="card smartcity"><div class="card-title">Thane</div><div class="card-desc">Urban Commercial Zone</div></div>
            <div class="card smartcity"><div class="card-title">Hinjewadi</div><div class="card-desc">IT & Commercial District</div></div>
            <div class="card smartcity"><div class="card-title">Ahmedabad</div><div class="card-desc">Urban Infra & Smart City</div></div>
            <div class="card smartcity"><div class="card-title">GIFT City</div><div class="card-desc">High-End Commercial Construction Hub</div></div>
            <div class="card smartcity"><div class="card-title">Dholera</div><div class="card-desc">India’s Smart City & Industrial Corridor</div></div>
            <div class="card smartcity"><div class="card-title">Mumbai</div><div class="card-desc">Metropolitan Region</div></div>

            
          </div>
        </div>

        <!-- Port Zones -->
        <div class="section">
          <h2>🛳️ Port & Logistics</h2>
          <div class="cards">
            <div class="card port"><div class="card-title">Uran</div><div class="card-desc">Port-Based Industrial & Logistics Hub</div></div>
            <div class="card port"><div class="card-title">Dighi Port</div><div class="card-desc">Logistics & Maritime Zone</div></div>
          </div>
        </div>

        <!-- Tourism Zones -->
        <div class="section">
          <h2>🏖️ Tourism & Luxury Zones</h2>
          <div class="cards">
            <div class="card tourism"><div class="card-title">Lonavala</div><div class="card-desc">Tourism & Premium Construction Hub</div></div>
            <div class="card tourism"><div class="card-title">Mulshi</div><div class="card-desc">Premium Villa Development Zone</div></div>
            <div class="card tourism"><div class="card-title">Alibaug</div><div class="card-desc">Luxury Coastal Development Zone</div></div>
            <div class="card tourism"><div class="card-title">Bhor</div><div class="card-desc">Eco-Tourism & Plotting Zone</div></div>
            <div class="card tourism"><div class="card-title">Poladpur</div><div class="card-desc">Gateway to Konkan & Infra Link Zone</div></div>
          </div>
        </div>

      </div>
    </div>
  </section>
{{-- </div> --}}
@endsection
