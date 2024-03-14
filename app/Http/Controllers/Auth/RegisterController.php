<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Role;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:11'],
            'street' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        logger()->info('Attempting to create user', $data);
    
        // Retrieve the role ID for 'customer' role
        $customerRole = Role::where('name', 'customer')->first();
    
        // Check if a 'customer' role exists
        if (!$customerRole) {
            // Log an error indicating the absence of the role
            logger()->error('Customer role not found');
            return null;
        }
    
        // Create the user with the role ID
        $user = User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'contact_number' => $data['contact_number'],
            'street' => $data['street'],
            'barangay' => $data['barangay'],
            'city' => $data['city'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $customerRole->id, // Assign the role ID
        ]);
    
        // Check if user creation was successful
        if (!$user) {
            // Log an error indicating user creation failure
            logger()->error('User creation failed');
            return null;
        }
    
        // Attempt to log in the user
        Auth::login($user);
    
        return $user;
    }
    

}
