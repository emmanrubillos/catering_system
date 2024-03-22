<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inclusion;
use App\Models\Classification;
// use App\Models\InclusionClassification;

class InclusionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inclusions = Inclusion::all();
        $classifications = Classification::all();
        return view('admin.inclusion.index', compact('inclusions', 'classifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => 'required',
            'classification_id' => 'required|array',
            'description' => 'required',
        ]);
        
        // Create the Inclusion instance
        $inclusion = Inclusion::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
        ]);
        
        // Attach classifications to the inclusion
        $inclusion->inclusionclassifications()->attach($validatedData['classification_id']);

        return redirect()->route('inclusion.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inclusion = Inclusion::findOrFail($id);
        // dd($inclusion);  
        return view('layouts.pages_.menu.index', ['inclusion' => $inclusion]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'classification_id' => 'required|integer',
            'description' => 'required',
        ]);

            // Find the user by ID and update its details
            $inclusion = Inclusion::findOrFail($id);
            $inclusion->update($validatedData);

            // Redirect back to the index page with the updated user data and a success message
            return redirect()->route('inclusion.index')->with('success', 'User updated successfully!');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
