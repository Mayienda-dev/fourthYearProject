<?php

namespace App\Http\Controllers;

use App\Models\ServiceSetup;
use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Facades\Session;

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
    public function create(Request $request)
    {
        Session::put('page', 'setup_service_profile');
        $title = "Set up your garage/consultancy services/flatbed service";
       

        if($request->isMethod('post')){

            $data = $request->input('services');
            // echo "<pre>"; print_r($data); die;

        $rules = [
            'services' => 'required'
        ];

        $customMessages = [
            'services.required' => 'Categories is required'
        ];

        $this ->validate($request, $rules, $customMessages);

        $data = implode(',', $data);

        ServiceSetup::create([
            'services' => $data
        ]);


        return response()->json(['success' => true]);

        }
        $categories = Category::all();
        
        return view('admin.serviceprofile.setup_service_profile')->with(compact('categories', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
        // // Add and Edit Garage or mechanical services
        // if($id==""){
        //     $title = "Set up your garage/consultancy services";
        //     $setup = new ServiceSetup;
        //     $message = "Garage/Flatbed/Consultancy services profile added succesfully";
        // }else{
        //     $title = "Update your garage/consultancy/flatbed services";
        //     $setup = ServiceSetup::find($id);
        //     $message = "Garage/Flatbed/Consultancy services profile updated succesfully";

        // }
        
        // if($request->isMethod('post')){
        //     $data = $request->all();
        //     echo "<pre>"; print_r($data); die;

        //     $setup->categories = $data["categories"];
        //     $setup->save();

        //     return response()->json(['success' => true]);
           
        // }
      
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
