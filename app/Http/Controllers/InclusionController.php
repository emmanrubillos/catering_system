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
            'img' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'classification_id' => 'required|array',
            'description' => 'nullable',
        ]);
        // Create the Inclusion instance

        $date = now()->format('YmdHis');

        if ($request->has('img')) {
            $inclusions_Img_WithExt = $request->file('img')->getClientOriginalName();  
            $inclusions_Img_filename = str_replace(' ', '_', pathinfo($inclusions_Img_WithExt, PATHINFO_FILENAME));  
            $inclusions_Img_extension = $request->file('img')->getClientOriginalExtension();  
            $inclusions_img = $inclusions_Img_filename . '-' . $date . '.' . $inclusions_Img_extension;  
            $path_inclusions_img = $request->file('img')->storeAs('public/images', $inclusions_img);  
        } else {
            $inclusions_img = null; // Corrected variable name
        }                

        $inclusion = Inclusion::create([
            'name' => $validatedData['name'],
            'img' => $inclusions_img,
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

        // dd($request->all(), $request->file('img'));
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'img' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'edit_classification_id' => 'required|array',
            'description' => 'nullable',
        ]);

        
        // dd($validatedData);
        // Find the user by ID and update its details
        $inclusion = Inclusion::findOrFail($id);

        $inclusion->inclusionclassifications()->delete();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $date = now()->format('YmdHis');
            $inclusions_Img_WithExt = $file->getClientOriginalName();
            $inclusions_Img_filename = str_replace(' ', '_', pathinfo($inclusions_Img_WithExt, PATHINFO_FILENAME));
            $inclusions_Img_extension = $file->getClientOriginalExtension();
            $inclusions_img = $inclusions_Img_filename . '-' . $date . '.' . $inclusions_Img_extension;
            $path_inclusions_img = $file->storeAs('public/images', $inclusions_img);
            $validatedData['img'] = $path_inclusions_img;
        } else {
            // If no new image is uploaded, retain the existing image
            $validatedData['img'] = $inclusion->img;
        }

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

