<?php

namespace App\Http\Controllers;

use App\Models\ServiceSetup;
use Illuminate\Http\Request;
use App\Models\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Web\Service;

class ServicesSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id=null)
    {
        // Add and Edit Garage or mechanical services
        if($id==""){
            $title = "Set up your garage/consultancy services";
            $setup = new ServiceSetup;
            $message = "Garage/Flatbed/Consultancy services profile added succesfully";
        }else{
            $title = "Update your garage/consultancy/flatbed services";
            $setup = ServiceSetup::find($id);
            $message = "Garage/Flatbed/Consultancy services profile updated succesfully";

        }
        
        if($request->isMethod('post')){
           
        }
        $categories = Category::all()->toArray();
        return view('admin.serviceprofile.setup_service_profile')->with(compact('title', 'message', 'categories', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
