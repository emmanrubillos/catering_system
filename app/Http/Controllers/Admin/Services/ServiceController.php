<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Inclusion;
use App\Models\Classification;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $services = Service::all();
        
        $classifications = [];
        
        $groups = Classification::select('group')->distinct()->get();

        foreach ($groups->toArray() as $group) {
            $groupItem = [
                'name' => $group['group']
            ];
            
            $classItems = Classification::where('group', $group['group'])->get();
            $classificationList = [];
            foreach ($classItems->toArray() as $classItem) {
                $lists = Inclusion::whereHas('inclusionClassifications', function($query) use($classItem) {
                    return $query->where('classification_id', $classItem['id']);
                })->get()->toArray();
                array_push($classificationList, [
                    'classification' => $classItem,
                    'inclusions' => $lists,
                ]);
            }

            $groupItem['classifications'] = $classificationList;

            array_push($classifications, $groupItem);


        }

        // dd($classifications);

        return view('admin.service.index', compact('services', 'classifications'));
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
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description' => 'required',
            'number_of_person' => 'required',
            'main_dish' => 'required',
            'side_dish' => 'required',
            'inclusion_id' => 'required|array',
        ]);
        // dd($validatedData);
        $service = Service::create([
            'name' => $validatedData['name'],
            'type' => $validatedData['type'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'number_of_person' => $validatedData['number_of_person'],
            'main_dish' => $validatedData['main_dish'],
            'side_dish' => $validatedData['side_dish'],
        ]);

        if (isset($validatedData['inclusion_id']) && is_array($validatedData['inclusion_id'])) {
            foreach ($validatedData['inclusion_id'] as $inclusions){
                $service->serviceInclusions()->create([
                    'inclusion_id' => $inclusions
                ]);
            }
        }

        // Redirect back to the index page with success message
        return redirect()->route('service.index')->with('success', 'Service created successfully!');
    
    }


    // 

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
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description' => 'required',
            'number_of_person' => 'required',
        ]);
        dd($validatedData);
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
