<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Development Zones – Glass Cards</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 20px;
      font-family: 'Poppins', sans-serif;
      /* background: linear-gradient(to right, #e0eafc, #cfdef3); */
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
      color: #333;
    }

    .section {
      margin-bottom: 50px;
    }

    .section h2 {
      font-size: 1.5em;
      margin-bottom: 20px;
      padding-left: 10px;
      border-left: 5px solid #00a8ff;
      color: #222;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: flex-start;
    }

    .card {
      background: rgba(255, 255, 255, 0.15);
      border-radius: 16px;
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      width: 250px;
      padding: 20px;
      color: #333;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .card-title {
      font-weight: 600;
      font-size: 1.1em;
      margin-bottom: 8px;
      color: #0077b6;
    }

    .card-desc {
      font-size: 0.95em;
      color: #444;
    }

    @media (max-width: 768px) {
      .cards {
        justify-content: center;
      }
    }
  </style>
</head>
<body>

  <h1>🌍 Development Zones – Maharashtra & Gujarat</h1>

  <div class="section">
    <h2>🏠 Residential Zones</h2>
    <div class="cards">
      <div class="card"><div class="card-title">Karjat</div><div class="card-desc">Residential + Weekend Growth Belt</div></div>
      <div class="card"><div class="card-title">Kalyan</div><div class="card-desc">Expanding Real Estate Belt</div></div>
      <div class="card"><div class="card-title">Badlapur</div><div class="card-desc">Affordable Housing Cluster</div></div>
      <div class="card"><div class="card-title">Neral</div><div class="card-desc">Affordable Housing Belt</div></div>
      <div class="card"><div class="card-title">Ulwe</div><div class="card-desc">Upcoming Residential Zone (NMIA)</div></div>
      <div class="card"><div class="card-title">Panvel</div><div class="card-desc">Navi Mumbai Extension & Connectivity Hub</div></div>
      <div class="card"><div class="card-title">Shahapur</div><div class="card-desc">Residential Growth + Tourism Potential</div></div>
      <div class="card"><div class="card-title">Igatpuri</div><div class="card-desc">Scenic Retreat & Real Estate Hub</div></div>
    </div>
  </div>

  <div class="section">
    <h2>🏭 Industrial Zones</h2>
    <div class="cards">
      <div class="card"><div class="card-title">Pen</div><div class="card-desc">Emerging Industrial Node</div></div>
      <div class="card"><div class="card-title">Taloja</div><div class="card-desc">Heavy Industrial Belt</div></div>
      <div class="card"><div class="card-title">Patalganga</div><div class="card-desc">MIDC Industrial Corridor</div></div>
      <div class="card"><div class="card-title">Roha</div><div class="card-desc">Chemical & Pharma Hub</div></div>
      <div class="card"><div class="card-title">Mahad</div><div class="card-desc">Industrial Township</div></div>
      <div class="card"><div class="card-title">Chakan</div><div class="card-desc">Auto & Engineering Hub</div></div>
      <div class="card"><div class="card-title">Ranjangaon</div><div class="card-desc">SEZ & Industrial Growth Area</div></div>
      <div class="card"><div class="card-title">Mangaon</div><div class="card-desc">MIDC + NA Plotting Hotspot</div></div>
      <div class="card"><div class="card-title">Boisar</div><div class="card-desc">MIDC + Real Estate Development Area</div></div>
      <div class="card"><div class="card-title">Murbad</div><div class="card-desc">Industrial & Agricultural Region</div></div>
    </div>
  </div>

  <div class="section">
    <h2>💼 Commercial & Smart City</h2>
    <div class="cards">
      <div class="card"><div class="card-title">Thane</div><div class="card-desc">Urban Commercial Zone</div></div>
      <div class="card"><div class="card-title">Hinjewadi</div><div class="card-desc">IT & Commercial District</div></div>
      <div class="card"><div class="card-title">Ahmedabad</div><div class="card-desc">Urban Infra & Smart City</div></div>
      <div class="card"><div class="card-title">GIFT City</div><div class="card-desc">High-End Commercial Construction Hub</div></div>
      <div class="card"><div class="card-title">Dholera</div><div class="card-desc">India’s Smart City & Industrial Corridor</div></div>
    </div>
  </div>

  <div class="section">
    <h2>🛳️ Port & Logistics</h2>
    <div class="cards">
      <div class="card"><div class="card-title">Uran</div><div class="card-desc">Port-Based Industrial & Logistics Hub</div></div>
      <div class="card"><div class="card-title">Dighi Port</div><div class="card-desc">Logistics & Maritime Zone</div></div>
    </div>
  </div>

  <div class="section">
    <h2>🏖️ Tourism & Luxury Zones</h2>
    <div class="cards">
      <div class="card"><div class="card-title">Lonavala</div><div class="card-desc">Tourism & Premium Construction Hub</div></div>
      <div class="card"><div class="card-title">Mulshi</div><div class="card-desc">Premium Villa Development Zone</div></div>
      <div class="card"><div class="card-title">Alibaug</div><div class="card-desc">Luxury Coastal Development Zone</div></div>
      <div class="card"><div class="card-title">Bhor</div><div class="card-desc">Eco-Tourism & Plotting Zone</div></div>
      <div class="card"><div class="card-title">Poladpur</div><div class="card-desc">Gateway to Konkan & Infra Link Zone</div></div>
    </div>
  </div>

</body>
</html>
