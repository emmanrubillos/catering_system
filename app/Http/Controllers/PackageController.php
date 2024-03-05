<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Validator;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        // Create the new package
        Package::create($validatedData);

        // Redirect back to the index page with a success message
        return redirect()->route('package.index')->with('success', 'Package created successfully!');

    }
    public function show($id)
    {
        return view ('admin.package.show');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.package.partial.edit_package_modal', compact('package'));

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
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        // Find the package by ID and update its details
        $package = Package::findOrFail($id);
        $package->update($validatedData);

        // Redirect back to the index page with a success message
        // return redirect()->route('package.index')->with('success', 'Package updated successfully!');
        if ($request->ajax()) {
            return response()->json(['message' => 'Package updated successfully'], 200);
        } else {
            return redirect()->route('package.index')->with('success', 'Package updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the package by ID and delete it
        $package = Package::findOrFail($id);
        $package->delete();

        // Redirect back to the index page with a success message
        // return redirect()->route('package.index')->with('success', 'Package deleted successfully!');
        return response()->json(['message' => 'Package deleted successfully'], 200);
    }
}
