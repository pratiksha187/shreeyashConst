 export default function TownshipLandDevPage() {
  return (
    <div className="min-h-screen text-slate-800">
      {/* Top Bar */}
      <header className="sticky top-0 z-50 backdrop-blur bg-white/80 border-b border-slate-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <a href="#home" className="flex items-center gap-2">
              <div className="w-9 h-9 rounded-2xl bg-[#1c2c3e] flex items-center justify-center text-white font-bold">SC</div>
              <div className="leading-tight">
                <p className="font-extrabold text-[#1c2c3e]">Shreeyash Construction</p>
                <p className="text-xs text-slate-500">Township & Land Development</p>
              </div>
            </a>
            <nav className="hidden md:flex items-center gap-6 text-sm">
              <a href="#services" className="hover:text-[#f25c05]">Services</a>
              <a href="#process" className="hover:text-[#f25c05]">Process</a>
              <a href="#projects" className="hover:text-[#f25c05]">Projects</a>
              <a href="#why-us" className="hover:text-[#f25c05]">Why Us</a>
              <a href="#faq" className="hover:text-[#f25c05]">FAQs</a>
              <a href="#contact" className="hover:text-[#f25c05]">Contact</a>
            </nav>
            <a href="#contact" className="inline-flex items-center px-4 py-2 rounded-2xl text-white bg-[#f25c05] hover:opacity-90 transition">Get a Consultation</a>
          </div>
        </div>
      </header>

      {/* Hero */}
      <section id="home" className="relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1c2c3e] via-[#223449] to-[#1c2c3e]" />
        <div className="absolute -top-24 -right-24 w-[32rem] h-[32rem] rounded-full bg-[#f25c05]/20 blur-3xl" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28 text-white">
          <div className="max-w-3xl">
            <h1 className="text-4xl md:text-6xl font-extrabold leading-tight">
              Integrated Township & Land Development for Growing Cities
            </h1>
            <p className="mt-6 text-lg md:text-xl text-slate-200">
              From raw land to thriving neighbourhoods—Shreeyash Construction plans, engineers, and delivers end‑to‑end development with speed, compliance, and quality.
            </p>
            <div className="mt-8 flex flex-wrap gap-3">
              <a href="#services" className="px-5 py-3 rounded-2xl bg-[#f25c05] text-white">Explore Services</a>
              <a href="#projects" className="px-5 py-3 rounded-2xl bg-white/10 border border-white/20 hover:bg-white/20">See Recent Work</a>
            </div>
            <div className="mt-10 grid grid-cols-2 sm:grid-cols-4 gap-6 text-sm text-slate-200">
              <div><p className="text-3xl font-bold text-white">15+ <span className="text-base font-semibold">years</span></p><p>Industry Experience</p></div>
              <div><p className="text-3xl font-bold text-white">3M+ <span className="text-base font-semibold">sq.ft</span></p><p>Developed & Delivered*</p></div>
              <div><p className="text-3xl font-bold text-white">100% </p><p>Compliance-Driven</p></div>
              <div><p className="text-3xl font-bold text-white">End‑to‑End</p><p>Turnkey Delivery</p></div>
            </div>
          </div>
        </div>
      </section>

      {/* Copy — About (≈260 words) */}
      <section id="about" className="py-16 md:py-24 bg-white">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 className="text-3xl md:text-4xl font-bold text-[#1c2c3e]">Township & Land Development—From Vision to Possession</h2>
          <p className="mt-6 leading-7 text-slate-700">
            Shreeyash Construction specialises in comprehensive township and land development across Maharashtra, with a strong footprint in Khopoli, Raigad and service coverage across Pen, Khalapur MIDC, Panvel, Taloja MIDC, and Chakan MIDC. We help landowners, developers, and institutional clients convert strategically located land parcels into livable, future‑ready communities. Our approach blends meticulous planning, robust engineering, and disciplined execution to optimise every acre—from access roads and utilities to public realm and social infrastructure.
          </p>
          <p className="mt-4 leading-7 text-slate-700">
            Development success hinges on three levers: regulatory clarity, infrastructure sequencing, and market‑aligned phasing. We navigate approvals with authorities, obtain right‑of‑way and NOCs, and prepare detailed engineering drawings that streamline site mobilization. Our teams deliver core and trunk infrastructure—earthworks, grading, drainage, water supply, sewage, stormwater management, power distribution, and street lighting—followed by internal roads, paving, and landscaping. With quality systems and transparent reporting, we keep stakeholders aligned on cost, time, and scope.
          </p>
          <p className="mt-4 leading-7 text-slate-700">
            Whether the brief is plotted development, mixed‑use precincts, or integrated townships with amenities, we execute on a turnkey or labour‑only basis. We deploy digital workflows for scheduling, material tracking, and QA/ QC, enabling predictable outcomes and faster handovers. The result is land that is legally clean, technically sound, environmentally resilient, and commercially attractive.
          </p>
        </div>
      </section>

      {/* Services (bullets + short copy ≈260 words) */}
      <section id="services" className="py-16 md:py-24 bg-slate-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="md:flex md:items-start md:justify-between">
            <div className="max-w-2xl">
              <h2 className="text-3xl md:text-4xl font-bold text-[#1c2c3e]">End‑to‑End Services</h2>
              <p className="mt-4 text-slate-700 leading-7">
                We provide a single accountable partner across the development lifecycle—due diligence to delivery.
              </p>
            </div>
          </div>

          <div className="mt-10 grid md:grid-cols-3 gap-6">
            {[
              {
                title: 'Land Due Diligence & Feasibility',
                points: [
                  'Title search, encumbrance checks, and development rights assessment',
                  'Zoning, FSI/ FAR potential, and development control regulations',
                  'Market, absorption, and yield studies for phasing strategy',
                ],
              },
              {
                title: 'Planning & Approvals',
                points: [
                  'Master planning, road hierarchy, and plot/sub‑plot layout',
                  'Environmental clearance, NOCs, and local authority permissions',
                  'Utility corridor planning and right‑of‑way management',
                ],
              },
              {
                title: 'Engineering & Infrastructure Works',
                points: [
                  'Earthwork, grading, and stormwater drainage networks',
                  'Water supply, ESR/UGT, STP, and sewer networks',
                  'Power distribution, street lighting, and smart metering readiness',
                ],
              },
              {
                title: 'Roads & Urban Realm',
                points: [
                  'Internal roads, M40/ M50 paving, kerbs, and footpaths',
                  'Roundabouts, signage, road markings, and traffic calming',
                  'Parks, avenue plantation, and open‑space landscaping',
                ],
              },
              {
                title: 'Amenities & Social Infrastructure',
                points: [
                  'Clubhouse shells, community halls, and play areas (civil works)',
                  'Security cabins, boundary walls, and entry portals',
                  'Rainwater harvesting, recharge pits, and green infrastructure',
                ],
              },
              {
                title: 'Project & Cost Management',
                points: [
                  'Work‑breakdown, scheduling, and resource planning',
                  'BOQ management, vendor onboarding, and billing',
                  'Quality assurance, safety, and progress dashboards',
                ],
              },
            ].map((card) => (
              <div key={card.title} className="p-6 bg-white rounded-2xl shadow-sm border border-slate-200">
                <h3 className="text-lg font-bold text-[#1c2c3e]">{card.title}</h3>
                <ul className="mt-4 space-y-2 text-sm text-slate-700">
                  {card.points.map((p, i) => (
                    <li key={i} className="flex gap-2"><span className="mt-1 w-2 h-2 rounded-full bg-[#f25c05]" />{p}</li>
                  ))}
                </ul>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Process (short narrative ≈180 words) */}
      <section id="process" className="py-16 md:py-24 bg-white">
        <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 className="text-3xl md:text-4xl font-bold text-[#1c2c3e]">How We Deliver</h2>
          <div className="mt-8 grid md:grid-cols-4 gap-6">
            {[
              { step: '01', title: 'Assess', text: 'We validate land, statutory framework, and utilities. Our feasibility pack covers titles, DCR, topo surveys, and a phase‑wise opportunity lens.' },
              { step: '02', title: 'Plan', text: 'We craft a practical masterplan, infrastructure strategy, and approval roadmap to reduce rework and compress time‑to‑start.' },
              { step: '03', title: 'Build', text: 'Mobilisation, safety, and QA/QC drive civil works across earthworks, roads, water, sewer, power, lighting, and landscape.' },
              { step: '04', title: 'Hand Over', text: 'We commission, test, and document utilities and roads, delivering a compliant, market‑ready development ready for allotment or sale.' },
            ].map((s) => (
              <div key={s.step} className="p-6 rounded-2xl border border-slate-200">
                <div className="text-sm font-semibold text-[#f25c05]">{s.step}</div>
                <h3 className="mt-2 text-xl font-bold text-[#1c2c3e]">{s.title}</h3>
                <p className="mt-2 text-slate-700 text-sm leading-6">{s.text}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Projects (simple cards) */}
      <section id="projects" className="py-16 md:py-24 bg-slate-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 className="text-3xl md:text-4xl font-bold text-[#1c2c3e]">Recent Projects</h2>
          <div className="mt-8 grid md:grid-cols-3 gap-6">
            {[
              { name: 'Khopoli Integrated Layout', scope: 'Township infra—roads, drains, water, sewer, lighting', area: '55 acres', status: 'Phase‑1 Delivered' },
              { name: 'Taloja MIDC Plotted Development', scope: 'Earthworks, stormwater, internal roads, landscape', area: '24 acres', status: 'Ongoing' },
              { name: 'Panvel Mixed‑Use Precinct', scope: 'Approvals, utilities, and urban realm', area: '11 acres', status: 'Completed' },
            ].map((p) => (
              <div key={p.name} className="p-6 rounded-2xl bg-white border border-slate-200">
                <div className="text-xs font-semibold text-slate-500">{p.status}</div>
                <h3 className="mt-1 text-xl font-bold text-[#1c2c3e]">{p.name}</h3>
                <p className="mt-2 text-sm text-slate-700">{p.scope}</p>
                <p className="mt-2 text-sm text-slate-500">Footprint: {p.area}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Why Us (value props ≈140 words) */}
      <section id="why-us" className="py-16 md:py-24 bg-white">
        <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 className="text-3xl md:text-4xl font-bold text-[#1c2c3e]">Why Shreeyash Construction</h2>
          <div className="mt-8 grid md:grid-cols-3 gap-6">
            {[
              { title: 'Approvals Expertise', text: 'Deep familiarity with local authorities shortens approval cycles and reduces cost of change.' },
              { title: 'Infrastructure Depth', text: 'From STPs to street lighting, we build reliable backbone systems that scale with phases.' },
              { title: 'Transparent Control', text: 'Baseline‑to‑actual tracking, BOQ discipline, and clear reporting keep decisions data‑driven.' },
              { title: 'Safety & Quality', text: 'Zero‑compromise culture with method statements, checklists, and test records.' },
              { title: 'Time‑Bound Delivery', text: 'Lean sequencing, vendor readiness, and parallel work‑fronts accelerate handovers.' },
              { title: 'Local Presence', text: 'Based in Khopoli with active work across Raigad, Navi Mumbai, Pune peripheries.' },
            ].map((w) => (
              <div key={w.title} className="p-6 rounded-2xl border border-slate-200">
                <h3 className="text-lg font-bold text-[#1c2c3e]">{w.title}</h3>
                <p className="mt-2 text-sm text-slate-700 leading-6">{w.text}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Long‑form SEO Section (adds ~350 words to hit ~1000) */}
      <section className="py-16 md:py-24 bg-slate-50">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 className="text-3xl md:text-4xl font-bold text-[#1c2c3e]">Delivering Value at Every Stage</h2>
          <article className="prose max-w-none prose-slate">
            <p>
              The economics of township development depend on the invisible infrastructure below the ground as much as the visible streets and parks above it. We engineer efficient networks—gravity‑led drainage where feasible, balanced cut‑fill to minimise spoil, and modular treatment systems sized for phasing. Our road structures use proven sub‑base and base compositions that withstand local rainfall patterns and traffic loads. With each package, we drive competitive tendering, vendor vetting, and method statements so that workmanship is consistent and claims are minimised.
            </p>
            <p>
              Environmental stewardship is integral to our work. We integrate rainwater harvesting, recharge wells, native landscaping, and sediment control into the base design. Erosion control measures and silt traps protect downstream users during construction. For utilities, we plan corridors with future growth in mind and maintain as‑built records for faster maintenance. Electrical layouts are prepared with provisions for renewable integration and smart metering readiness, while water systems accommodate reuse from STPs for landscaping.
            </p>
            <p>
              For developers, predictability matters. We create realistic schedules tied to measurable milestones—ROW clearance, utility commissioning, and road base completion—so marketing and sales can proceed with confidence. Our documentation—daily progress, cube test logs, plating/compaction records, and approval trackers—keeps lenders and auditors satisfied. If the engagement is labour‑only, we plug into your procurement and provide site leadership and QA/QC; if it is turnkey, we handle end‑to‑end delivery including vendor management and billing.
            </p>
            <p>
              Above all, we communicate. Weekly reviews, look‑ahead plans, and risk registers help us resolve constraints early. Our local supply chain and equipment access reduce downtime, while our safety protocols protect workers and surrounding communities. This combination of planning discipline, field execution, and stakeholder alignment is why Shreeyash Construction has become a dependable partner for township and land development in Maharashtra.
            </p>
          </article>
        </div>
      </section>

      {/* FAQs */}
      <section id="faq" className="py-16 md:py-24 bg-white">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 className="text-3xl md:text-4xl font-bold text-[#1c2c3e]">Frequently Asked Questions</h2>
          <div className="mt-8 divide-y divide-slate-200 rounded-2xl border border-slate-200">
            {[
              { q: 'Do you assist with approvals and NOCs?', a: 'Yes. We prepare drawings, coordinate submissions, and liaise with authorities to obtain statutory approvals and required NOCs.' },
              { q: 'Can you work on labour‑only basis?', a: 'Yes. We frequently execute on labour‑only for developers who prefer to procure materials directly. We also deliver turnkey packages.' },
              { q: 'Which geographies do you cover?', a: 'Primary focus is Khopoli, Raigad, and western Maharashtra with active projects in Pen, Khalapur MIDC, Panvel, Taloja MIDC, and Chakan MIDC.' },
              { q: 'What types of developments do you handle?', a: 'Plotted schemes, integrated townships, mixed‑use precincts, industrial townships, and allied civil works including amenities and urban realm.' },
            ].map((f, i) => (
              <details key={i} className="group open:bg-slate-50">
                <summary className="list-none p-5 cursor-pointer font-semibold text-[#1c2c3e] flex items-center justify-between">
                  <span>{f.q}</span>
                  <span className="text-[#f25c05]">+</span>
                </summary>
                <div className="p-5 pt-0 text-slate-700">{f.a}</div>
              </details>
            ))}
          </div>
        </div>
      </section>

      {/* Contact */}
      <section id="contact" className="py-16 md:py-24 bg-[#1c2c3e] text-white">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="md:flex items-center justify-between gap-8">
            <div className="md:w-2/3">
              <h2 className="text-3xl md:text-4xl font-bold">Start Your Township with a Feasibility Call</h2>
              <p className="mt-4 text-slate-200">Share your land details and objectives. We will review zoning, utilities, and phasing options, then outline a clear path to approvals and site start.</p>
            </div>
            <div className="mt-8 md:mt-0 md:w-1/3 bg-white text-[#1c2c3e] rounded-2xl p-6">
              <form className="space-y-4">
                <div>
                  <label className="text-sm font-medium">Name</label>
                  <input className="mt-1 w-full px-3 py-2 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-[#f25c05]" placeholder="Your full name"/>
                </div>
                <div>
                  <label className="text-sm font-medium">Phone</label>
                  <input className="mt-1 w-full px-3 py-2 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-[#f25c05]" placeholder="+91"/>
                </div>
                <div>
                  <label className="text-sm font-medium">Email</label>
                  <input className="mt-1 w-full px-3 py-2 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-[#f25c05]" placeholder="you@company.com"/>
                </div>
                <div>
                  <label className="text-sm font-medium">Land Location</label>
                  <input className="mt-1 w-full px-3 py-2 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-[#f25c05]" placeholder="City/ Taluka"/>
                </div>
                <button type="button" className="w-full py-3 rounded-xl bg-[#f25c05] text-white font-semibold">Request a Call</button>
              </form>
              <div className="mt-4 text-sm">
                <p><span className="font-semibold">Call:</span> +91 93262 16153</p>
                <p><span className="font-semibold">Email:</span> sc@shreeyashconstruction.co.in</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="py-10 bg-slate-900 text-slate-300">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-3 gap-6">
            <div>
              <p className="text-white font-bold">Shreeyash Construction</p>
              <p className="text-sm mt-2">Khopoli, Raigad, Maharashtra</p>
            </div>
            <div className="text-sm">
              <p>Serving: Pen · Khalapur MIDC · Panvel · Taloja MIDC · Chakan MIDC</p>
            </div>
            <div className="text-sm">
              <p>© {new Date().getFullYear()} Shreeyash Construction. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}