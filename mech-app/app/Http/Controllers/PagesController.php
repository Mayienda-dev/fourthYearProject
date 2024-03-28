<?php

namespace App\Http\Controllers;

use App\Models\ServiceSetup;
use App\Models\VendorsBusinessDetail;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $services = VendorsBusinessDetail::paginate(5);

        // dd($services);
        return view('users.pages.dashboard')->with(compact('services'));
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
    public function show(int $id)
    {

       $categories = VendorsBusinessDetail::findOrFail($id);
    //    dd($categories);


        return view('users.pages.show')->with(compact('id', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
