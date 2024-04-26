<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        //
    }

    public function audit()
    {
        return view('site.pages.services.audit');
    }
    public function tax()
    {
        return view('site.pages.services.tax');
    }

    public function legal()
    {
        return view('site.pages.services.legal');
    }

    public function advisory()
    {
        return view('site.pages.services.advisory');
    }

    public function training()
    {
        return view('site.pages.services.training');
    }

    public function payroll()
    {
        return view('site.pages.services.payroll');
    }

    public function cashDistribution()
    {
        return view('site.pages.services.cash-distribution');
    }
}
