@extends('layouts.app')

@section('title', 'Testimonials')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }
</style>
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Clients Say</h2>
    <p class="text-lg text-gray-600 mb-12 max-w-3xl mx-auto">Real feedback from partners who trust Shreeyash Construction with their infrastructure projects across Maharashtra.</p>

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      <!-- Testimonial Card 1 -->
      <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
         
           <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/xrbia.png') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Dipak Jadhav, Project Head</h4>
            <p class="text-sm text-gray-500">Eiffel India Infra Projects Pvt. Ltd.
            </p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">“Our Neral, Karjat site required a mix of asphalt and concrete roadworks. Anant Patil and his Shreeyash Construction team delivered excellent quality with zero delays. Their experience in road construction in Maharashtra, especially in challenging terrains, truly stands out.”</p>
      </div>

      <!-- Testimonial Card 2 -->
      <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
            <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/John.png') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Gaurav Gurav</h4>
            <p class="text-sm text-gray-500">John Cockerill</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">"From retrofitting to interior works, plumbing, and electricals at our Taloja plant, Shreeyash Construction showcased versatility and professionalism. Their execution was precise and their problem-solving approach commendable."</p>
      </div>

      <!-- Testimonial Card 3 -->
      <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
           <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/bharat.jpg') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Jayprakash Kukreja, Owner</h4>
            <p class="text-sm text-gray-500">Bharat Udyog Ltd.</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">"We assigned railway infrastructure work including a minor bridge and earthworks to Shreeyash. Their ability to handle technically challenging jobs across Kalyan and Kasara was impressive. A dependable civil team indeed!"</p>
      </div>

       <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
            <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/pendse.jpg') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Ranjan Pathare, Sr. Partner</h4>
            <p class="text-sm text-gray-500">Pendse and Associates</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">“Anant Patil and the Shreeyash Construction team handled the RCC core and shell work of a 4,500 sqft bungalow with remarkable speed and structural finesse. Their site coordination, resource planning, and execution in Karjat made the project a great success.”</p>
      </div>

       <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
          
             <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/kalptaru.png') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Ajay Ojha, Vice President</h4>
            <p class="text-sm text-gray-500">Kalpataru Power Transmission Ltd.</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">“Our excavation and trenching work at Kharsundi Hills near Khalapur was efficiently executed by Shreeyash Construction. Anant Patil’s leadership ensured timely mobilization and execution even on tough terrain. They’re truly dependable in Maharashtra’s infrastructure sector.”</p>
      </div>

       <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
          <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/bhansali.jpg') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Bhansali Bright Bars</h4>
            <p class="text-sm text-gray-500">Shanti Bhansali, Owner</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">“When we wanted to develop our factory infrastructure at Khopoli, we placed our trust directly in Anant Patil. From constructing the entire factory shed to executing internal roads and a weighbridge, his involvement and hands-on approach made the entire process smooth and efficient. Shreeyash Construction delivered as promised — with quality and commitment. It’s rare to find a proprietor so involved and responsive throughout.”</p>
      </div>

      <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
            <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/Kanungo.jpg') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Kanungo Ferromate</h4>
            <p class="text-sm text-gray-500">Omprakash Kanungo, Owner</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">“I personally handed over the factory shed renovation and trimix flooring work to Anant Patil, and I must say, the attention to detail and professionalism he brought to the project was remarkable. The Shreeyash Construction team executed the job with precision, but it was Anant’s personal involvement that gave me complete peace of mind. A highly dependable civil contractor for industrial work.”</p>
      </div>

      <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
           <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/isro.png') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">ISRO (Rasayani Site)</h4>
            <p class="text-sm text-gray-500">Anil Shigwan, Engineering In-Charge</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">"The RCC trench construction for cable work was executed with high precision and engineering discipline by Shreeyash Construction. Their experience clearly reflects in the quality of their work."</p>
      </div>

       <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
           <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/jsw.png') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">JSW Steel Ltd</h4>
            <p class="text-sm text-gray-500">Amit Patil, Sr. Engineer</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">"Working with Shreeyash Construction on RCC flooring and roadwork at our RMHS unit was a seamless experience. Their technical expertise, adherence to safety, and on-time execution were impressive. They are truly reliable partners for industrial civil works"</p>
      </div>

       <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
        <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/merck.png') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Merck Group</h4>
            <p class="text-sm text-gray-500">Kalpesh L. Patil, Engineering Department</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">"In a critical moment, Shreeyash Construction delivered a high-quality RCC emergency staircase at our Patalganga facility. Their team acted swiftly, professionally, and with utmost attention to detail. We appreciate their commitment."</p>
      </div>

      <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-100 hover:shadow-xl transition duration-300">
        <div class="flex items-center mb-4">
          <div class="rounded-full w-14 h-14 flex items-center justify-center overflow-hidden bg-white">
                <img src="{{ asset('storage/client/lakeside.png') }}" alt="Xrbia Logo" class="w-full h-full object-contain p-1">
            </div>
          <div class="ml-4 text-left">
            <h4 class="text-lg font-semibold text-gray-800">Lakeside Project, Kalote</h4>
            <p class="text-sm text-gray-500">Irfan Furniturewala, Owner</p>
          </div>
        </div>
        <p class="text-gray-600 text-sm">“In 2005, I partnered with Anant Patil and his team at Shreeyash Construction for the bitumen roadwork and land development at our Lakeside township in Kalote. Despite being a new company back then, their professionalism, site execution, and work ethic stood out from day one. Over the years, they’ve grown into a reliable name in civil construction — and rightfully so."</p>
      </div>

      <!-- Add more testimonials here if needed -->
    </div>
  </div>
</section>

@endsection
