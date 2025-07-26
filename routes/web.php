<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/asphalt-paving', [HomeController::class, 'asphalt_paving'])->name('asphalt_paving');
Route::get('/asphalt-compaction', [HomeController::class, 'asphalt_compaction'])->name('asphalt_compaction');
Route::get('/Inset-Concrete-Paving', [HomeController::class, 'inset_concrete_paving'])->name('inset_concrete_paving');
Route::get('/road-construction', [HomeController::class, 'road_construction'])->name('road_construction');
Route::get('/gsb-wmm-laying', [HomeController::class, 'gsb_wmm_laying'])->name('gsb_wmm_laying');


Route::get('/offset-concrete-paving', [HomeController::class, 'offset_concrete_paving'])->name('offset_concrete_paving');
Route::get('/base-layer-subgrade-preparation', [HomeController::class, 'base_layer_subgrade_preparation'])->name('base_layer_subgrade_preparation');

Route::get('/industrial-infrastructure', [HomeController::class, 'industrial_infrastructure'])->name('industrial_infrastructure');

Route::get('/industrial_shed_work', [HomeController::class, 'industrial_shed_work'])->name('industrial_shed_work');
Route::get('/land-development', [HomeController::class, 'land_development'])->name('land_development');
Route::get('/water-drainage', [HomeController::class, 'water_drainage'])->name('water_drainage');


Route::get('/factory_building_civil_work', [HomeController::class, 'factory_building_civil_work'])->name('factory_building_civil_work');

Route::get('/plot_leveling_grading_road_access', [HomeController::class, 'plot_leveling_grading_road_access'])->name('plot_leveling_grading_road_access');

Route::get('/earth_cutting_filling_compaction', [HomeController::class, 'earth_cutting_filling_compaction'])->name('earth_cutting_filling_compaction');
Route::get('/storm_water_drainage', [HomeController::class, 'storm_water_drainage'])->name('storm_water_drainage');
Route::get('/underground_water_supply', [HomeController::class, 'underground_water_supply'])->name('underground_water_supply');

Route::get('/drainage_line_sewer_work', [HomeController::class, 'drainage_line_sewer_work'])->name('drainage_line_sewer_work');

Route::get('/rcc_chamber_installation', [HomeController::class, 'rcc_chamber_installation'])->name('rcc_chamber_installation');
Route::get('/precast_u_drain', [HomeController::class, 'precast_u_drain'])->name('precast_u_drain');


Route::get('/ucr_masonry_compound_walls', [HomeController::class, 'ucr_masonry_compound_walls'])->name('ucr_masonry_compound_walls');

Route::get('/precast_compound_walls', [HomeController::class, 'precast_compound_walls'])->name('precast_compound_walls');
Route::get('/fencing_work', [HomeController::class, 'fencing_work'])->name('fencing_work');

Route::get('/compound_wall', [HomeController::class, 'compound_wall'])->name('compound_wall');
Route::get('/residencial_commercial', [HomeController::class, 'residencial_commercial'])->name('residencial_commercial');
Route::get('/bungalow_construction', [HomeController::class, 'bungalow_construction'])->name('bungalow_construction');

Route::get('/commercial_unit_civil_work', [HomeController::class, 'commercial_unit_civil_work'])->name('commercial_unit_civil_work');
Route::get('/retrofiting_demolition', [HomeController::class, 'retrofiting_demolition'])->name('retrofiting_demolition');

Route::get('/structural_modification', [HomeController::class, 'structural_modification'])->name('structural_modification');
Route::get('/repair_strengthening_reinforcement', [HomeController::class, 'repair_strengthening_reinforcement'])->name('repair_strengthening_reinforcement');
Route::get('/demolition_work', [HomeController::class, 'demolition_work'])->name('demolition_work');

Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');

Route::get('/projects/{slug}', [HomeController::class, 'show'])->name('projects.show');

Route::get('/project/type/{type}', [HomeController::class, 'byType'])->name('project.byType');



Route::get('contact_us', [HomeController::class, 'contact_us'])->name('contact_us');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/site-visit', [ContactController::class, 'sitevisit'])->name('site.visit.submit');
// Route::post('/company_profile', [ContactController::class, 'company_profile'])->name('company_profile');
Route::get('/download/company-profile', function () {
    $filePath = public_path('pdfs/SHREEYASH.pdf'); // make sure the file exists here
    return Response::download($filePath, 'Company-Profile.pdf');
})->name('company_profile');