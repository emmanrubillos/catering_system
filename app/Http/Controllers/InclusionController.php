<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inclusion;
use App\Models\Classification;

class InclusionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inclusions = Inclusion::with(['inclusionclassifications', 'inclusionclassifications.classification'])->orderBy('id', 'desc')->get();
        $classifications = Classification::all();
        return view('admin.inclusion.index', compact('inclusions', 'classifications'));

        // $inclusion = Inclusion::with('classifications')->get();
        // dd($inclusion);
        // return view('admin.inclusion.index', ['inclusions' => InclusionResource::collection($inclusion)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inclusion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request);
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
        if (isset($validatedData['classification_id']) && is_array($validatedData['classification_id'])) {
            foreach ($validatedData['classification_id'] as $classifications){
                $inclusion->inclusionclassifications()->create([
                    'classification_id' => $classifications
                ]);
            }
        }
        // dd($classifications);
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
        // $inclusion = Inclusion::findOrFail($id);
        
        // $classifications = Classification::All();

        // return view('admin.inclusion.partials._edit_inclusion_modal', compact('inclusion', 'classifications'));
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

        // Find the user by ID and update its details
        $inclusion = Inclusion::findOrFail($id);
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'edit_classification_id' => 'required|array',
            'description' => 'required',
        ]);

        $inclusion->inclusionclassifications()->delete();

            // Update the inclusion details
            if (isset($validatedData['edit_classification_id']) && is_array($validatedData['edit_classification_id'])) {
                foreach ($validatedData['edit_classification_id'] as $classifications){
                    $inclusion->inclusionclassifications()->create([
                        'classification_id' => $classifications
                    ]);
                }
            }
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
        // Find the inclusion by ID
        $inclusion = Inclusion::findOrFail($id);

        // Delete the inclusion
        $deleteInclusion = $inclusion->delete();

        // Check if the deletion was successful
        return response()->json(['message' => 'Inclusion deleted successfully'], 200);
    }
}

