<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\ContactSubmission;

class ContactController extends Controller
{
   

public function store(Request $request)
{
    // print_r($_POST);die;
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|string|max:20',
        'project_type' => 'required|string',
        'location' => 'required|string',
        'message' => 'nullable|string',
    ]);

    ContactSubmission::create([
        'name' => $request->name,
        'mobile' => $request->mobile,
        'project_type' => $request->project_type,
        'location' => $request->location,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Your request has been submitted!');
}



public function sitevisit(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email',
        'date' => 'required|date',
        'message' => 'nullable|string',
    ]);

    DB::table('site_visits')->insert([
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'date' => $data['date'],
        'message' => $data['message'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return back()->with('success', 'Site visit request submitted successfully!');
}



}
