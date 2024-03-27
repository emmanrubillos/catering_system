<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $protectedRoutes = [
            'admin',
            'users.index',
            'users.store',
            'users.create',
            'users.edit',
            'users.update',
            'users.destroy',
            'reservation.index',
            'reservation.store',
            'reservation.create',
            'reservation.edit',
            'reservation.update',
            'reservation.destroy',
            'reservation.index',
            'service.index',
            'service.store',
            'service.create',
            'service.edit',
            'service.update',
            'service.destroy',
            'inclusion.index',
            'inclusion.store',
            'inclusion.create',
            'inclusion.edit',
            'inclusion.update',
            'inclusion.destroy',
            'classification.index',
            'classification.store',
            'classification.create',
            'classification.edit',
            'classification.update',
            'classification.destroy',
        ];

        $currentRouteName = $request->route()->getName();
        
        $isProtectedRoute = in_array($currentRouteName, $protectedRoutes);
        // dd($currentRouteName, $isProtectedRoute, Auth::check());

        if ($isProtectedRoute && !Auth::check()) {
            return redirect()->route('not-authorized');
        }

        if (Auth::check()) {
            $user = Auth::user();
            $allowedRoles = [];
            // dd($currentRouteName, $user->role_id);
            if ($currentRouteName === 'admin' || (in_array($currentRouteName,[
                'welcome'
            ]))) {
                $allowedRoles = [1, 2, 3];
            } elseif (in_array($currentRouteName, [                    
                'admin',
                'users.index',
                'users.store',
                'users.create',
                'users.edit',
                'users.update',
                'users.destroy',
                'reservation.index',
                'reservation.store',
                'reservation.create',
                'reservation.edit',
                'reservation.update',
                'reservation.destroy',
                'reservation.index',
                'service.index',
                'service.store',
                'service.create',
                'service.edit',
                'service.update',
                'service.destroy',
                'inclusion.index',
                'inclusion.store',
                'inclusion.create',
                'inclusion.edit',
                'inclusion.update',
                'inclusion.destroy',
                'classification.index',
                'classification.store',
                'classification.create',
                'classification.edit',
                'classification.update',
                'classification.destroy',
                ])) {
                $allowedRoles = [1, 2];
            } elseif (in_array($currentRouteName,[
                'admin',
                'users.index',
                'users.store',
                'users.create',
                'users.edit',
                'users.update',
                'users.destroy',
                'reservation.index',
                'reservation.store',
                'reservation.create',
                'reservation.edit',
                'reservation.update',
                'reservation.destroy',
                'reservation.index',
                'service.index',
                'service.store',
                'service.create',
                'service.edit',
                'service.update',
                'service.destroy',
                'inclusion.index',
                'inclusion.store',
                'inclusion.create',
                'inclusion.edit',
                'inclusion.update',
                'inclusion.destroy',
                'classification.index',
                'classification.store',
                'classification.create',
                'classification.edit',
                'classification.update',
                'classification.destroy',
            ])) {
                $allowedRoles = [1];
            }
            
            if (!in_array($user->role_id, $allowedRoles)) {
                return redirect()->route('not-authorized');
            }
        }

        return $next($request);
    }
}
