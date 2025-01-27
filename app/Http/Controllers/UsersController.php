<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $role =   AdminCheck::checkAdmin();
        $use = new user;
        $use = $use::all();
        switch ($role) {
            case 'admin':
            
                return view('admin.users' , compact('use','role'));
                break;
            case 'user':
                    return redirect()->route('dashbord.index');
                break;
            case 'notAuth':
                    return redirect()->route("login.index");
                break;
            default:
                    return redirect()->route("register.index");
                break;
        
            }


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
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }
    public function deactive($deactive)
    {
        $use = new user;
        $use = $use::find($deactive);
        $use -> active = 0;
        $use -> save();
        return redirect()->back();
    }
    public function active($active)
    {
        $use = new user;
        $use = $use::find($active);
        $use -> active = 1;
        $use -> save();
        return redirect()->back();
    }

}
