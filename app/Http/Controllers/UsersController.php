<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('admin.users.index', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'role_id' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:users,email',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_number' => 'nullable|numeric', // Changed validation rule
            'address' => 'nullable|string|max:255',
            'temp_password' => 'required|string|min:6',
        ]);

        // Create the user
        $user = User::create([
            'role_id' => $validatedData['role_id'],
            'email' => $validatedData['email'],
            'first_name' => $validatedData['first_name'],
            'middle_name' => $validatedData['middle_name'],
            'last_name' => $validatedData['last_name'],
            'contact_number' => $validatedData['contact_number'], // Removed unnecessary isset check
            'address' => $validatedData['address'],
            'password' => bcrypt($validatedData['temp_password']),
        ]);

        // Optionally, you can redirect the user to a different page after creation
        return redirect()->route('users.index')->with('success', 'User created successfully!');

    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
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
        $user = User::findOrFail($id);
        // Pass the user data to the view
        return view('admin.users.edit', compact('user'));
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

        $the_id = $id;
        dd($the_id);
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'contact_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'role_id' => 'required|integer',
        ]);

        // Find the user by ID and update its details
        $user = User::findOrFail($id);
        $user->update($validatedData);
        // Redirect back to the index page with the updated user data and a success message
        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $deleteUser = $user->delete();

        // Check if the deletion was successful
        if($deleteUser){
        // If successful, return a JSON response with success message
        return response()->json(['message' => 'User deleted successfully']);
        } else {
        // If deletion failed, return a JSON response with error message
        return response()->json(['error' => 'Deletion failed!']);
    }
}

}