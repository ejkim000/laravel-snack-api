<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class SnackController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index($sort_by = 'name')
    {
        // Get stacks data from saved local file
        $snacks = Storage::json('snacks.json');

        // Return view with snack data
        return view('snack.index', [
            'snacks' => $snacks['snacks']
        ]);
    }

}
