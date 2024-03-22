<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services =Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'name' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'price' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'number_of_person' => 'required|string|max:255',
        ]);
            // dd($validatedData);
        $service =Service::create([
            'name' => $validatedData['name'],
            'type' => $validatedData['type'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'number_of_person' => $validatedData['number_of_person'],
        ]);
        return redirect()->route('service.index')->with('success', 'Service created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::findOrFail($id); // Fetch the service with the specified ID
        return view('admin.service.partials._show_service_modal', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Fetch the user data based on the ID
        $service = Service::findOrFail($id);
        // Pass the user data to the view
        return view('admin.service.partials._edit_service_modal', compact('service'));
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
            'name' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'price' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'number_of_person' => 'required|string|max:255',
        ]);

        // Find the service by ID and update its details
        $service = Service::findOrFail($id);
        $service->update($validatedData);

        // Redirect back to the index page with the updated service data and a success message
        return redirect()->route('service.index')->with('success', 'Service updated successfully!');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $service = Service::findOrFail($id);

    $deleteService = $service->delete();

    return response()->json(['message' => 'Service deleted successfully'], 200);
    }
}
