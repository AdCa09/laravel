<?php

namespace App\Http\Controllers;

use App\Models\AdminDashboard;
use Illuminate\Http\Request;
use Illuminate\View\View;


class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminDashboard(): View
    {
        return view('restaurants.adminDashboard');
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
    public function show(AdminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminDashboard $adminDashboard)
    {
        //
    }
}
