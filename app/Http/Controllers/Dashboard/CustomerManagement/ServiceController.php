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
        $categories = $this->getCategories();

        return view('dashboard.customers.services.index', compact('categories'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function servicesByCategory(Request $request): \Illuminate\Http\JsonResponse
    {
        $cat_id = $request->cat_id;

        $services = $this->getServicesByCatId($cat_id);

        return response()->json([
            'data' => $services,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getServiceCounts(Request $request): \Illuminate\Http\JsonResponse
    {
        $service_counts = $this->getAllServiceCounts($request);

        $status = count($service_counts) === 0 ? 'not_found' : 'found';

        return response()->json([
            'data' => $service_counts,
            'status' => $status,
        ]);
    }

    private function getAllServiceCounts(Request $request)
    {
        return Service::find($request->service_id)->counts;
    }

    private function getServicesByCatId($cat_id)
    {
        return Service::where('category_id', $cat_id)->get();
    }

    private function getCategories()
    {
        return Category::all();
    }
}
