<?php

namespace App\Http\Controllers\Dashboard\CustomerManagement;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        
        return view('dashboard.customers.services.index', compact('categories'));
    }


    public function servicesByCategory(Request $request)
    {
        $cat_id = $request->cat_id;

        $services = Service::where('category_id', $cat_id)->get();

        return response()->json([
            'data' => $services,
        ]);
    }
}
