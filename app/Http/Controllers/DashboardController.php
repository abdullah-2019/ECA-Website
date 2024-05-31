<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ContactUs;
use App\Models\Home;
use App\Models\Sector;
use App\Models\Services;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $countabout = About::count();
        $counthome = Home::count();
        $countsector = Sector::count();
        $countservice = Services::count();
        $countteam = Team::count();
        $countuser = User::count();
        $countcontact = ContactUs::count();

        return view('pages.dashboard.dashboard', compact('countabout','counthome','countsector','countservice','countteam','countuser','countcontact'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
