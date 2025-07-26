<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('web.about');
    }

    public function asphalt_paving(){
        return view('web.asphaltpaving');
    }

    public function asphalt_compaction(){
        return view('web.asphalt_compaction');
    }

    public function inset_concrete_paving(){
        return view('web.inset_concrete_paving');
    }

    public function offset_concrete_paving(){
        return view('web.offset_concrete_paving');        
    }

    public function road_construction(){
        return view('web.road_construction');
    }

    public function gsb_wmm_laying(){
        return view('web.gsb_wmm_laying');
    }

    public function base_layer_subgrade_preparation(){
        return view('web.base_layer_subgrade_preparation');
    }

    public function industrial_infrastructure(){
        return view('web.industrial_infrastructure');
    }

    public function industrial_shed_work(){
        return view('web.industrial_shed_work');

    }

    public function factory_building_civil_work(){
        return view('web.factory_building_civil_work');
    }

    public function plot_leveling_grading_road_access(){
        return view('web.plot_leveling_grading_road_access');
    }

    public function earth_cutting_filling_compaction(){
        return view('web.earth_cutting_filling_compaction');

    }

    public function storm_water_drainage(){
        return view('web.storm_water_drainage');

    }

    
    public function underground_water_supply(){
        return view('web.underground_water_supply');

    }

    public function drainage_line_sewer_work(){
        return view('web.drainage_line_sewer_work');

    }

    public function rcc_chamber_installation(){
        return view('web.rcc_chamber_installation');

    }

    public function precast_u_drain(){
        return view('web.precast_u_drain');

    }

    public function land_development(){
        return view('web.land_development');

    }

    public function water_drainage(){
        return view('web.water_drainage');

    }

    public function ucr_masonry_compound_walls(){
        return view('web.ucr_masonry_compound_walls');

    }

    public function precast_compound_walls(){
        return view('web.precast_compound_walls');

    }
    public function fencing_work(){
        return view('web.fencing_work');

    }

    public function compound_wall(){
        return view('web.compound_wall');

    }

    public function residencial_commercial(){
        return view('web.residencial_commercial');

    }

    public function bungalow_construction(){
        return view('web.bungalow_construction');

    }
    public function commercial_unit_civil_work(){
        return view('web.commercial_unit_civil_work');

    }

    public function retrofiting_demolition(){
        return view('web.retrofiting_demolition');

    }

    public function structural_modification(){
        return view('web.structural_modification');

    }
    
    public function repair_strengthening_reinforcement(){
        return view('web.repair_strengthening_reinforcement');

    }
  


    public function demolition_work(){
        return view('web.demolition_work');

    }

    public function project(){
        $projects = Project::with('images')->orderBy('id', 'desc')->get();
        return view('web.project',compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::with('images')->where('slug', $slug)->firstOrFail();
        return view('projects.show', compact('project'));
    }

    public function byType($type)
    {
        $projects = Project::with('images')->where('type', $type)->get();
        return view('web.project', compact('projects'));
    }
    
    public function test(){
        return view('web.test');
    }

    public function contact_us(){
        return view('web.contact_us');

    }

    

    
    public function testimonials(){
        return view('web.testimonials');
    }
    
    
    
    
}
